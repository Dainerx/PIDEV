/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.codename1.uikit.cleanmodern;

import com.codename1.components.ScaleImageLabel;
import com.codename1.components.SpanLabel;
import com.codename1.components.ToastBar;
import com.codename1.io.CharArrayReader;
import com.codename1.io.ConnectionRequest;
import com.codename1.io.JSONParser;
import com.codename1.io.NetworkEvent;
import com.codename1.io.NetworkManager;
import com.codename1.l10n.ParseException;
import com.codename1.l10n.SimpleDateFormat;
import com.codename1.ui.Button;
import com.codename1.ui.ButtonGroup;
import com.codename1.ui.Component;
import static com.codename1.ui.Component.BOTTOM;
import static com.codename1.ui.Component.CENTER;
import static com.codename1.ui.Component.LEFT;
import static com.codename1.ui.Component.RIGHT;
import com.codename1.ui.Container;
import com.codename1.ui.Dialog;
import com.codename1.ui.Display;
import com.codename1.ui.FontImage;
import com.codename1.ui.Graphics;
import com.codename1.ui.Image;
import com.codename1.ui.Label;
import com.codename1.ui.RadioButton;
import com.codename1.ui.Tabs;
import com.codename1.ui.TextArea;
import com.codename1.ui.Toolbar;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.layouts.FlowLayout;
import com.codename1.ui.layouts.GridLayout;
import com.codename1.ui.layouts.LayeredLayout;
import com.codename1.ui.plaf.Style;
import com.codename1.ui.util.Resources;
import entity.*;
import java.io.IOException;
import java.util.ArrayList;
import java.util.List;
import java.util.Map;

/**
 *
 * @author Ameni
 */
public class ClientDemande extends BaseForm {

    public ClientDemande(Resources res) {
        super("Join My Ride", BoxLayout.y());
        Toolbar tb = new Toolbar(true);
        setToolbar(tb);
        getTitleArea().setUIID("Container");
        setTitle("Join My Ride");
        getContentPane().setScrollVisible(false);

        super.addSideMenu(res);

        Tabs swipe = new Tabs();

        Label spacer1 = new Label();
        Label spacer2 = new Label();
        addTab(swipe, res.getImage("cov1.jpg"), spacer1, "", "", "");

        swipe.setUIID("Container");
        swipe.getContentPane().setUIID("Container");
        swipe.hideTabs();

        ButtonGroup bg = new ButtonGroup();
        int size = Display.getInstance().convertToPixels(1);
        Image unselectedWalkthru = Image.createImage(size, size, 0);
        Graphics g = unselectedWalkthru.getGraphics();
        g.setColor(0xffffff);
        g.setAlpha(100);
        g.setAntiAliased(true);
        g.fillArc(0, 0, size, size, 0, 360);
        Image selectedWalkthru = Image.createImage(size, size, 0);
        g = selectedWalkthru.getGraphics();
        g.setColor(0xffffff);
        g.setAntiAliased(true);
        g.fillArc(0, 0, size, size, 0, 360);
        RadioButton[] rbs = new RadioButton[swipe.getTabCount()];
        FlowLayout flow = new FlowLayout(CENTER);
        flow.setValign(BOTTOM);
        Container radioContainer = new Container(flow);
        for (int iter = 0; iter < rbs.length; iter++) {
            rbs[iter] = RadioButton.createToggle(unselectedWalkthru, bg);
            rbs[iter].setPressedIcon(selectedWalkthru);
            rbs[iter].setUIID("Label");
            radioContainer.add(rbs[iter]);
        }

        rbs[0].setSelected(true);
        swipe.addSelectionListener((i, ii) -> {
            if (!rbs[ii].isSelected()) {
                rbs[ii].setSelected(true);
            }
        });

        Component.setSameSize(radioContainer, spacer1, spacer2);
        add(LayeredLayout.encloseIn(swipe, radioContainer));

        ButtonGroup barGroup = new ButtonGroup();
        RadioButton all = RadioButton.createToggle("Demandes de location", barGroup);
        all.setUIID("SelectBar");

        Label arrow = new Label(res.getImage("news-tab-down-arrow.png"), "Container");

        add(LayeredLayout.encloseIn(
                GridLayout.encloseIn(1, all),
                FlowLayout.encloseBottom(arrow)
        ));

        all.setSelected(true);
        arrow.setVisible(false);
        addShowListener(e -> {
            arrow.setVisible(true);
            updateArrowPosition(all, arrow);
        });
        bindButtonSelection(all, arrow);

        // special case for rotation
        addOrientationListener(e -> {
            updateArrowPosition(barGroup.getRadioButton(barGroup.getSelectedIndex()), arrow);
        });
        ConnectionRequest con = new ConnectionRequest();
        con.setUrl("http://localhost/PIDEVMobile/GestionLocation/selectDemande.php");
        con.addResponseListener((NetworkEvent evt) -> {
            List<DemandeLocation> lstoffres = getListOffreLocation(new String(con.getResponseData()));
            System.out.println(lstoffres);

            for (DemandeLocation p : lstoffres) {
                addButton(selectedWalkthru, p, res);
            }

        });
        NetworkManager.getInstance().addToQueue(con);

    }

    private void updateArrowPosition(Button b, Label arrow) {
        arrow.getUnselectedStyle().setMargin(LEFT, b.getX() + b.getWidth() / 2 - arrow.getWidth() / 2);
        arrow.getParent().repaint();

    }

    private void addTab(Tabs swipe, Image img, Label spacer, String likesStr, String commentsStr, String text) {
        int size = Math.min(Display.getInstance().getDisplayWidth(), Display.getInstance().getDisplayHeight());
        if (img.getHeight() < size) {
            img = img.scaledHeight(size);
        }
        Label likes = new Label(likesStr);
        Style heartStyle = new Style(likes.getUnselectedStyle());
        heartStyle.setFgColor(0xff2d55);
        FontImage heartImage = FontImage.createMaterial(FontImage.MATERIAL_FAVORITE, heartStyle);
        likes.setIcon(heartImage);
        likes.setTextPosition(RIGHT);

        //Label comments = new Label(commentsStr);
        //FontImage.setMaterialIcon(comments, FontImage.MATERIAL_CHAT);
        if (img.getHeight() > Display.getInstance().getDisplayHeight() / 2) {
            img = img.scaledHeight(Display.getInstance().getDisplayHeight() / 2);
        }
        ScaleImageLabel image = new ScaleImageLabel(img);
        image.setUIID("Container");
        image.setBackgroundType(Style.BACKGROUND_IMAGE_SCALED_FILL);
        Label overlay = new Label(" ", "ImageOverlay");

        Container page1
                = LayeredLayout.encloseIn(
                        image,
                        overlay,
                        BorderLayout.south(
                                BoxLayout.encloseY(
                                        new SpanLabel(text, "LargeWhiteText"),
                                        FlowLayout.encloseIn(likes),
                                        spacer
                                )
                        )
                );

        swipe.addTab("", page1);
    }

    private void addButton(Image img, DemandeLocation ct, Resources res) {
        int height = Display.getInstance().convertToPixels(20f);
        int width = Display.getInstance().convertToPixels(15f);
        Button image = new Button(img.fill(width, height));
        Button delete = new Button("Annuler");

        TextArea ta;
        ta = new TextArea(ct.getNom_location());
        image.setUIID("Label");
        Container cnt = new Container();
        // cnt.setLeadComponent(image);

        TextArea ta1;
        TextArea ta2;

        ta2 = new TextArea("Etat:  " + ct.getEtat());

        // ta.setUIID("NewsTopLine");
        ta.setEditable(false);

        ta2.setUIID("NewsTopLine");
        ta2.setEditable(false);

        Container c = BoxLayout.encloseX(delete);

        cnt.add(BoxLayout.encloseY(ta, ta2, c));
        add(cnt);
        delete.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                System.out.println(ct.getId());
                ConnectionRequest req = new ConnectionRequest();
                req.setUrl("http://localhost/PIDEVMobile/GestionLocation/removeDemande.php?id=" + ct.getId());
                System.out.println(req.getUrl());
                req.addResponseListener(new ActionListener<NetworkEvent>() {

                    @Override
                    public void actionPerformed(NetworkEvent evt) {
                        byte[] data = (byte[]) evt.getMetaData();

                        String s = new String(data);
                        System.out.println(s);
                        if (s.equals("success")) {
                            Dialog.show("Confirmation", "supprimer ok", "Ok", null);
                            cnt.remove();

                        }
                    }
                });
                NetworkManager.getInstance().addToQueue(req);
            }
        });

        image.addActionListener(e -> ToastBar.showMessage(ct.getNom_location() + "   " + ct.getEtat(), FontImage.MATERIAL_INFO));

    }

    private void bindButtonSelection(Button b, Label arrow) {
        b.addActionListener(e -> {
            if (b.isSelected()) {
                updateArrowPosition(b, arrow);
            }
        });
    }

    public ArrayList<DemandeLocation> getListOffreLocation(String json) {
        ArrayList<DemandeLocation> listOffreLocations = new ArrayList<>();

        try {

            JSONParser j = new JSONParser();

            Map<String, Object> OffreLocations = j.parseJSON(new CharArrayReader(json.toCharArray()));

            System.out.println();
            List<Map<String, Object>> list = (List<Map<String, Object>>) OffreLocations.get("offre_location");

            for (Map<String, Object> obj : list) {
                DemandeLocation e = new DemandeLocation();
                e.setId(Integer.parseInt(obj.get("id").toString()));
                e.setId_membre(Integer.parseInt(obj.get("id_membre").toString()));
                e.setCout(Float.parseFloat(obj.get("cout").toString()));
                e.setNom_location(obj.get("nom_location").toString());
                e.setNom_membre(obj.get("nom_membre").toString());
                e.setEtat(obj.get("etat").toString());
                try {
                    e.setDate_debut((new SimpleDateFormat("yyyy-mm-dd")).parse(obj.get("date_debut").toString()));
                    e.setDate_fin((new SimpleDateFormat("yyyy-mm-dd")).parse(obj.get("date_fin").toString()));
                } catch (ParseException ex) {
                    System.out.println("com.mycompany.myapp.showOffre.getListOffreLocation()");;
                }

                listOffreLocations.add(e);

            }

        } catch (IOException ex) {
        }
        return listOffreLocations;

    }

}
