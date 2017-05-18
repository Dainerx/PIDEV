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
public class UpdateOffre  extends BaseForm2 {

  public UpdateOffre(Resources res,OffreLocation p) {
        super(new BorderLayout());
        Toolbar tb = new Toolbar(true);
        setToolbar(tb);
        super.addSideMenu(res);
        if(!Display.getInstance().isTablet()) {
            BorderLayout bl = (BorderLayout)getLayout();
            bl.defineLandscapeSwap(BorderLayout.NORTH, BorderLayout.EAST);
            bl.defineLandscapeSwap(BorderLayout.SOUTH, BorderLayout.CENTER);
        }
        getTitleArea().setUIID("Container");
        setUIID("SignIn");
        
        
        
        TextField tfid_vehicule = new TextField("", "numero Vehicule", 20, TextField.ANY);
        TextField tfcout = new TextField("", "Cout", 20, TextField.ANY);
        TextField tfoffre = new TextField("", "Nom d'offre", 20, TextField.ANY);
        TextField tfmarque = new TextField("", "marque", 20, TextField.ANY);
        TextField tfmodele = new TextField("", "modele", 20, TextField.ANY);
        Picker date_debut  = new Picker();
        date_debut.setType(Display.PICKER_TYPE_DATE);
        Picker date_fin  = new Picker();
        date_fin.setType(Display.PICKER_TYPE_DATE);
        
        tfid_vehicule.setSingleLineTextArea(false);
        tfoffre.setSingleLineTextArea(false);
        tfcout.setSingleLineTextArea(false);
        tfmarque.setSingleLineTextArea(false);
        tfmodele.setSingleLineTextArea(false);
        tfid_vehicule.setText(String.valueOf((p.getIdVehicule())));
        tfoffre.setText(p.getOffre());
        tfmarque.setText(p.getMarque());
        tfmodele.setText(p.getModele());
        tfcout.setText(String.valueOf(p.getCout()));
        date_fin.setDate(p.getDate_fin());
        date_debut.setDate(p.getDate_debut());

        
        
       
        Button update = new Button("Modifier Offre");
      
      
      
        
        Container content = BoxLayout.encloseY(
                new FloatingHint(tfoffre),
                createLineSeparator(),
                new FloatingHint(tfid_vehicule),
                createLineSeparator(),
                new FloatingHint(tfcout),
                createLineSeparator(),
                new FloatingHint(tfmarque),
                createLineSeparator(),
                new FloatingHint(tfmodele),
                createLineSeparator(),
              FlowLayout.encloseBottom(date_debut),
              createLineSeparator(),
              FlowLayout.encloseCenter(date_fin),
              createLineSeparator(),
              update
              
        );
        content.setScrollableY(true);
        add(BorderLayout.SOUTH, content);
      
        update.addActionListener(new ActionListener() {

            @Override
            public void actionPerformed(ActionEvent evt) {
 
                ConnectionRequest req = new ConnectionRequest();
            req.setUrl("http://localhost/PIDEVMobile/GestionLocation/update.php?id=" + p.getId() + "&id_vehicule=" + tfid_vehicule.getText() + "&cout=" + tfcout.getText() + "&offre=" + tfoffre.getText() + "&marque=" + tfmarque.getText() + "&modele=" + tfmodele.getText() + "&date_debut=" + date_debut.getText() + "&date_fin=" + date_fin.getText() + "");

                req.addResponseListener(new ActionListener<NetworkEvent>() {

                    @Override
                    public void actionPerformed(NetworkEvent evt) {
                        byte[] data = (byte[]) evt.getMetaData();
                        String s = new String(data);

                        if (s.equals("success")) {
                            Dialog.show("Confirmation", "offre modifié avec succées", "Ok", null);
                        }
                    }
                });

                NetworkManager.getInstance().addToQueue(req);

            }
        });
 
}}



