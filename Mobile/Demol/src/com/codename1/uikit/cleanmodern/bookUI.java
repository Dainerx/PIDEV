/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.codename1.uikit.cleanmodern;

import com.codename1.components.WebBrowser;
import com.codename1.io.ConnectionRequest;
import com.codename1.io.NetworkEvent;
import com.codename1.io.NetworkManager;
import com.codename1.maps.Coord;
import com.codename1.maps.MapComponent;
import com.codename1.ui.Button;
import com.codename1.ui.Command;
import com.codename1.ui.Container;
import com.codename1.ui.Dialog;
import entity.*;

import com.codename1.ui.Form;
import com.codename1.ui.Label;
import com.codename1.ui.TextArea;
import com.codename1.ui.Toolbar;
import com.codename1.ui.geom.Dimension;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.spinner.DateSpinner;
import com.codename1.ui.util.Resources;
import com.codename1.ui.util.UIBuilder;

/**
 *
 * @author dainer
 */
public class bookUI {

    private Form f;
    private Resources theme;
    private TextArea description;
    private Label user, cout, places, marque, modele, matricule, gamme;
    private Button addAction, gomap;

    public bookUI(Resources themearg, Trajet t) {
        this.theme = themearg;
        UIBuilder.registerCustomComponent("WebBrowser", WebBrowser.class);
        UIBuilder uib = new UIBuilder();
        f = uib.createContainer(theme, "book").getComponentForm();

        Toolbar tb = new Toolbar();
        tb.setLayout(new BorderLayout());
        Command cm = new Command("Retour");
        f.setToolbar(tb);
        tb.addCommandToSideMenu(cm);

        f.addCommandListener((evtRetour) -> {
            if (evtRetour.getCommand() == cm) {
                trajetsUI ui = new trajetsUI(theme);
                ui.getForm().show();
            }
        });

        description = (TextArea) uib.findByName("description", f);
        user = (Label) uib.findByName("user", f);
        cout = (Label) uib.findByName("cout", f);
        places = (Label) uib.findByName("places", f);
        marque = (Label) uib.findByName("marque", f);
        modele = (Label) uib.findByName("modele", f);
        matricule = (Label) uib.findByName("matricule", f);
        gamme = (Label) uib.findByName("gamme", f);
        addAction = (Button) uib.findByName("bookAction", f);
        gomap = (Button) uib.findByName("gomap", f);
        f.show();

//        WebBrowser browser = new WebBrowser();
//        f.setLayout(new BorderLayout());
//        f.add(BorderLayout.CENTER, browser);
//        browser.setURL("https://www.google.com");
        user.setText(user.getText() + t.getUser().getName());
        description.setText(description.getText() + t.getDescription());
        cout.setText(cout.getText() + t.getCout() + " Dt");
        places.setText(places.getText() + t.getNbrplacedispo());

        Dimension d = new Dimension(10, 10);
        marque.setSize(d);
        marque.setText(marque.getText() + t.getVehciule().getMarque());
        modele.setText(modele.getText() + " " + t.getVehciule().getModele());
        matricule.setText(matricule.getText() + t.getVehciule().getMatricule());
        gamme.setText(gamme.getText() + t.getVehciule().getGamme());

        gomap.addActionListener((evt) -> {
        mapUI le = new mapUI();
        Coord src = new Coord(36.8065, 10.1815);
        Coord dest = new Coord(35.8256, 10.6084);
        le.start(src,dest);
        });
        addAction.addActionListener((evt) -> {
            if (t.getNbrplacedispo() > 0) {
                ConnectionRequest conn = new ConnectionRequest();
                conn.setUrl("http://localhost/PIDEVMobile/controller/TrajetController.php?id=4&id_trajet=" + t.getId() + "&id_user=2" + "&id_userToInform=" + 3);
                conn.addResponseListener((NetworkEvent evtNetwork) -> {
                    System.out.println(new String(conn.getResponseData()));
                    Dialog.show("Success", "Vous avez réservé une place dans ce trajet!", "OK", "Cancel");
                    trajetsUI ui = new trajetsUI(theme);
                });
                NetworkManager.getInstance().addToQueue(conn);
            } else {
                Dialog.show("Error", "Ce trajet est complet!", "OK", "Cancel");
                trajetsUI ui = new trajetsUI(theme);
            }
        });
    }

    public Form getForm() {
        return f;
    }

}
