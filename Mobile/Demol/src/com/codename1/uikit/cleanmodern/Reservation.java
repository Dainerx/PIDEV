/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.codename1.uikit.cleanmodern;

import com.codename1.components.FloatingHint;
import com.codename1.io.ConnectionRequest;
import com.codename1.io.NetworkEvent;
import com.codename1.io.NetworkManager;
import com.codename1.ui.Button;
import com.codename1.ui.Container;
import com.codename1.ui.Dialog;
import com.codename1.ui.Display;
import com.codename1.ui.TextField;
import com.codename1.ui.Toolbar;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.layouts.FlowLayout;
import com.codename1.ui.spinner.Picker;
import com.codename1.ui.util.Resources;
import entity.*;

/**
 *
 * @author Ameni
 */
public class Reservation extends BaseForm {

    public Reservation(Resources res, OffreLocation p) {
        super(new BorderLayout());
        Toolbar tb = new Toolbar(true);
        setToolbar(tb);
        super.addSideMenu(res);
        if (!Display.getInstance().isTablet()) {
            BorderLayout bl = (BorderLayout) getLayout();
            bl.defineLandscapeSwap(BorderLayout.NORTH, BorderLayout.EAST);
            bl.defineLandscapeSwap(BorderLayout.SOUTH, BorderLayout.CENTER);
        }
        getTitleArea().setUIID("Container");
        setUIID("SignIn");

        TextField tfcout = new TextField("", "Cout", 20, TextField.ANY);
        TextField tfnom_location = new TextField("", "Nom d'offre", 20, TextField.ANY);

        Picker date_debut = new Picker();
        date_debut.setType(Display.PICKER_TYPE_DATE);
        Picker date_fin = new Picker();
        date_fin.setType(Display.PICKER_TYPE_DATE);

        tfnom_location.setSingleLineTextArea(false);
        tfcout.setSingleLineTextArea(false);

        tfnom_location.setText(String.valueOf((p.getOffre())));
        tfcout.setText(String.valueOf(p.getCout()));
        tfcout.setEditable(false);
        tfnom_location.setEditable(false);
        date_fin.setDate(p.getDate_fin());
        date_debut.setDate(p.getDate_debut());

        Button reserver = new Button("Reserver");

        Container content = BoxLayout.encloseY(
                new FloatingHint(tfnom_location),
                createLineSeparator(),
                new FloatingHint(tfcout),
                createLineSeparator(),
                FlowLayout.encloseBottom(date_debut),
                createLineSeparator(),
                FlowLayout.encloseCenter(date_fin),
                createLineSeparator(),
                reserver
        );
        content.setScrollableY(true);
        add(BorderLayout.SOUTH, content);

        reserver.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {

                ConnectionRequest req = new ConnectionRequest();
                req.setUrl("http://localhost/PIDEVMobile/GestionLocation/insertDemande.php?id_membre=6&nom_membre=membre" + "&nom_location=" + tfnom_location.getText() + "&date_debut=" + date_debut.getText() + "&date_fin=" + date_fin.getText() + "&etat=En Attente" + "&cout=" + tfcout.getText() + "");

                req.addResponseListener(new ActionListener<NetworkEvent>() {

                    @Override
                    public void actionPerformed(NetworkEvent evt) {
                        byte[] data = (byte[]) evt.getMetaData();
                        String s = new String(data);

                        if (s.equals("success")) {
                            Dialog.show("Confirmation", "demande crée avec succées", "Ok", null);
                        }
                    }
                });

                NetworkManager.getInstance().addToQueue(req);

            }
        });

    }
}
