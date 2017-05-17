/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.codename1.uikit.cleanmodern;

import com.codename1.components.ImageViewer;
import entity.*;
import com.codename1.uikit.cleanmodern.home;
import entity.Trajet;
import com.codename1.components.SpanLabel;
import com.codename1.io.CharArrayReader;
import com.codename1.io.ConnectionRequest;
import com.codename1.io.JSONParser;
import com.codename1.io.NetworkEvent;
import com.codename1.io.NetworkManager;
import com.codename1.ui.Button;
import com.codename1.ui.ButtonGroup;
import com.codename1.ui.ComboBox;
import com.codename1.ui.Command;
import static com.codename1.ui.Component.LEFT;
import com.codename1.ui.Container;
import com.codename1.ui.Form;
import com.codename1.ui.Image;
import com.codename1.ui.Label;
import com.codename1.ui.RadioButton;
import com.codename1.ui.Slider;
import com.codename1.ui.TextField;
import com.codename1.ui.Toolbar;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.geom.Dimension;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.layouts.FlowLayout;
import com.codename1.ui.layouts.GridLayout;
import com.codename1.ui.layouts.LayeredLayout;
import com.codename1.ui.util.Resources;
import com.codename1.ui.util.UIBuilder;
import controller.MembreServices;
import controller.ProfileServices;
import java.io.IOException;
import java.util.ArrayList;
import java.util.List;
import java.util.Map;


/**
 *
 * @author dainer
 */
public class trajetsUI extends BaseForm {

    Form f;
    private Image img;
    private Resources theme;
    private Container ct;

    public trajetsUI(Resources themearg) {
        
        MembreServices ms = new MembreServices() ; 
        Membre Current = ms.GetUserById(3); 
         
        ProfileServices Ps = new ProfileServices(); 
        
        
        
        this.theme = themearg;
        UIBuilder uib = new UIBuilder();
        f = uib.createContainer(theme, "trajets").getComponentForm();
        f.show();

        // Tool bar of form. Border Layout is needed.
        Toolbar tb = new Toolbar();
        tb.setLayout(new BorderLayout());
        Command cmAjout = new Command("Proposer un Trajet");
        Command cmStat = new Command("Les Statistiques");
        Command cmRetour = new Command("Quitter");
        Command cmProfile = new Command("Mon profile");
        f.setToolbar(tb);
        tb.addCommandToSideMenu(cmAjout);
        tb.addCommandToSideMenu(cmProfile);
        tb.addCommandToSideMenu(cmStat);
        tb.addCommandToSideMenu(cmRetour);
        f.setTitle("Les trajets proposés");

        ButtonGroup barGroup = new ButtonGroup();
        RadioButton all = RadioButton.createToggle("Tous", barGroup);
        all.setUIID("SelectBar");
        RadioButton featured = RadioButton.createToggle("Mes", barGroup);
        featured.setUIID("SelectBar");
        RadioButton popular = RadioButton.createToggle("Réservation", barGroup);
        popular.setUIID("SelectBar");
        RadioButton myFavorite = RadioButton.createToggle("", barGroup);
        myFavorite.setUIID("SelectBar");
        Label arrow = new Label(theme.getImage("news-tab-down-arrow.png"), "Container");

        f.add(LayeredLayout.encloseIn(
                GridLayout.encloseIn(4, all, featured, popular, myFavorite),
                FlowLayout.encloseBottom(arrow)
        ));

        all.setSelected(true);
        arrow.setVisible(false);
        f.addShowListener(e -> {
            arrow.setVisible(true);
            updateArrowPosition(all, arrow);
        });
        bindButtonSelection(all, arrow);
        bindButtonSelection(featured, arrow);
        bindButtonSelection(popular, arrow);
        bindButtonSelection(myFavorite, arrow);

        //DE_rotation
        f.addOrientationListener(e -> {
            updateArrowPosition(barGroup.getRadioButton(barGroup.getSelectedIndex()), arrow);
        });

        //DE_containers to sweep between
        Container cont = new Container(new BoxLayout(BoxLayout.Y_AXIS));
        Container contAll = new Container(new BoxLayout(BoxLayout.Y_AXIS));
        Container contMes = new Container(new BoxLayout(BoxLayout.Y_AXIS));
        Container contBook = new Container(new BoxLayout(BoxLayout.Y_AXIS));

        //DE_home default display
        ConnectionRequest conn = new ConnectionRequest();
        conn.setUrl("http://localhost/PIDEVMobile/controller/TrajetController.php?id=3");
        conn.addResponseListener((NetworkEvent evtNetwork) -> {
            img = theme.getImage("car-icon.png");
            for (Trajet t : getTrajets(new String(conn.getResponseData()))) {
                cont.add(createContainer(t, img));
            }
            f.refreshTheme();
        });
        NetworkManager.getInstance().addToQueue(conn);
        f.add(cont);

        f.addCommandListener((evt) -> {
            if (evt.getCommand() == cmRetour) {
                home ui = new home(theme);
                ui.getForm().show();
            } else if (evt.getCommand() == cmAjout) {
                addTrajetUI ui = new addTrajetUI(theme);
                ui.getForm().show();
            } else if (evt.getCommand() == cmProfile) {
                try {
                    //call safwane application
                    new ProfileForm(theme, Ps.getProfileByUser(Current)).show();
                } catch (IOException ex) {
                   
                }
                
            }

        });

        //DE_containers sweep listeners
        //DE_sweepAll
        all.addActionListener((evt) -> {
            cont.remove();
            contAll.remove();
            contMes.remove();
            contBook.remove();
            cont.removeAll();
            contAll.removeAll();
            contMes.removeAll();
            contBook.removeAll();
            f.setTitle("Les trajets proposés");
            conn.setUrl("http://localhost/PIDEVMobile/controller/TrajetController.php?id=3");
            conn.addResponseListener((NetworkEvent evtNetwork) -> {
                img = theme.getImage("car-icon.png");
                for (Trajet t : getTrajets(new String(conn.getResponseData()))) {
                    contAll.add(createContainer(t, img));
                }
                f.refreshTheme();
            });
            NetworkManager.getInstance().addToQueue(conn);
            f.add(contAll);

        });

        //DE_sweepMy
        featured.addActionListener((evt) -> {
            cont.remove();
            contAll.remove();
            contMes.remove();
            contBook.remove();
            cont.removeAll();
            contAll.removeAll();
            contMes.removeAll();
            contBook.removeAll();
            f.setTitle("Mes Trajets");
            conn.setUrl("http://localhost/PIDEVMobile/controller/TrajetController.php?id=2&id_user=2");
            conn.addResponseListener((NetworkEvent evtNetwork) -> {
                img = theme.getImage("car-icon.png");
                for (Trajet t : getTrajets(new String(conn.getResponseData()))) {
                    contMes.add(createContainerShare(t, img));
                }
                f.refreshTheme();
            });
            NetworkManager.getInstance().addToQueue(conn);
            f.add(contMes);
        });

        //DE_sweepBook
        popular.addActionListener((evt) -> {
            cont.remove();
            contAll.remove();
            contMes.remove();
            contBook.remove();
            cont.removeAll();
            contAll.removeAll();
            contMes.removeAll();
            contBook.removeAll();
            f.setTitle("Mes Réservations");
            conn.setUrl("http://localhost/PIDEVMobile/controller/TrajetController.php?id=5&id_user=2");
            conn.addResponseListener((NetworkEvent evtNetwork) -> {
                img = theme.getImage("car-icon.png");
                for (Trajet t : getTrajets(new String(conn.getResponseData()))) {
                    contBook.add(createContainerBook(t, img));
                }
                f.refreshTheme();
            });
            NetworkManager.getInstance().addToQueue(conn);
            f.add(contBook);
        });
        //DE_end of containers sweeper listner

    }

    public ArrayList<Trajet> getTrajets(String json) {
        ArrayList<Trajet> listTrajets = new ArrayList<>();
        try {
            JSONParser j = new JSONParser();
            Map<String, Object> trajets = j.parseJSON(new CharArrayReader(json.toCharArray()));
            List<Map<String, Object>> list = (List<Map<String, Object>>) trajets.get("trajets");

            for (Map<String, Object> obj : list) {
                Trajet t = new Trajet();
                t.setId(Integer.parseInt(obj.get("trajetID").toString()));
                t.setDepart(obj.get("depart").toString());
                t.setDestination(obj.get("destination").toString());
                t.setDatedepart(obj.get("dateDepart").toString());
                t.setCout(Float.parseFloat(obj.get("cout").toString()));
                t.setDescription(obj.get("description").toString());
                t.setNbrplacedispo(Integer.parseInt(obj.get("nbrPlaceDispo").toString()));
                t.setSuivi(Integer.parseInt(obj.get("suivi").toString()) == 1);
                t.setDatepub(obj.get("datePub").toString());
                t.setUser(new User(Integer.parseInt(obj.get("id_membre").toString()), obj.get("username").toString(), obj.get("email").toString(), obj.get("nom").toString()));
                t.setVehciule(new Vehicule(Integer.parseInt(obj.get("id_vehicule").toString()), obj.get("marque").toString(), obj.get("modele").toString(), obj.get("matricule").toString(), obj.get("gamme").toString()));
                listTrajets.add(t);
            }
        } catch (IOException ex) {
        }
        return listTrajets;

    }

    public Form getForm() {
        return f;
    }

    /**
     * 
     * @param t
     * Ride to pass to create container (fieldset like) with
     * @param img
     * Image used unified
     * @return one container 'fieldset' for all sweeper to add the form
     */
    public Container createContainer(Trajet t, Image img) {

        Label directions = new Label(t.getDepart() + " -> " + t.getDestination());
        Label date = new Label("Date: " + t.getDatedepart());
        Label places = new Label("Places: " + t.getNbrplacedispo());
        Label cout = new Label("Cout: " + t.getCout() + " Dt");
        Label imgFinal = new Label(img);
        Button book = new Button("Réserver!");
        Slider s = new Slider();
        Container cont = new Container(new BoxLayout(BoxLayout.Y_AXIS));
        cont.add(directions);
        cont.add(date);
        cont.add(places);
        cont.add(cout);
        cont.add(book);
        cont.add(s);
        Container cont2 = BorderLayout.center(cont);
        cont2.add(BorderLayout.WEST, imgFinal);
        cont2.setLeadComponent(book);

        book.addActionListener((evt) -> {
            bookUI ui = new bookUI(theme, t);
            ui.getForm().show();
        });

        return cont2;
    }

    /**
     * 
     * @param t
     * Ride to pass to create container (fieldset like) with
     * @param img
     * Image used unified
     * @return one container 'fieldset' for my Rides sweeper to add the form
     */
    public Container createContainerShare(Trajet t, Image img) {

        Label directions = new Label(t.getDepart() + " -> " + t.getDestination());
        Label date = new Label("Date: " + t.getDatedepart());
        Label places = new Label("Places: " + t.getNbrplacedispo());
        Label cout = new Label("Cout: " + t.getCout() + " Dt");
        Label imgFinal = new Label(img);
        Button book = new Button("Proposé!");
        Slider s = new Slider();
        Container cont = new Container(new BoxLayout(BoxLayout.Y_AXIS));
        cont.add(directions);
        cont.add(date);
        cont.add(places);
        cont.add(cout);
        cont.add(book);
        cont.add(s);
        Container cont2 = BorderLayout.center(cont);
        cont2.add(BorderLayout.WEST, imgFinal);
        cont2.setLeadComponent(book);
        return cont2;
    }

     /**
     * 
     * @param t
     * Ride to pass to create container (fieldset like) with
     * @param img
     * Image used unified 
     * @return one container 'fieldset' for book sweeper  to add the form
     */
    public Container createContainerBook(Trajet t, Image img) {

        Label directions = new Label(t.getDepart() + " -> " + t.getDestination());
        Label date = new Label("Date: " + t.getDatedepart());
        Label places = new Label("Places: " + t.getNbrplacedispo());
        Label cout = new Label("Cout: " + t.getCout() + " Dt");
        Label imgFinal = new Label(img);
        Button book = new Button("Réservé!");
        Slider s = new Slider();
        Container cont = new Container(new BoxLayout(BoxLayout.Y_AXIS));
        cont.add(directions);
        cont.add(date);
        cont.add(places);
        cont.add(cout);
        cont.add(book);
        cont.add(s);
        Container cont2 = BorderLayout.center(cont);
        cont2.add(BorderLayout.WEST, imgFinal);
        cont2.setLeadComponent(book);
        return cont2;
    }

    //Template defind updating visual Arrow position
    private void updateArrowPosition(Button b, Label arrow) {
        arrow.getUnselectedStyle().setMargin(LEFT, b.getX() + b.getWidth() / 2 - arrow.getWidth() / 2);
        arrow.getParent().repaint();

    }

    private void bindButtonSelection(Button b, Label arrow) {
        b.addActionListener(e -> {
            if (b.isSelected()) {
                updateArrowPosition(b, arrow);
            }
        });
    }
}
