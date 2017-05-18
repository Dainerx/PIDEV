/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.codename1.uikit.cleanmodern;

import com.codename1.components.FloatingHint;
import com.codename1.ui.util.Resources;

import com.codename1.io.ConnectionRequest;
import com.codename1.io.NetworkEvent;
import com.codename1.io.NetworkManager;
import com.codename1.ui.AutoCompleteTextField;


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



/**
 *
 * @author Amna
 */
public class ChallengeForm  extends BaseForm2 {

  public ChallengeForm(Resources res) {
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
        
        String[] characters = { "36","38","39","40","41","42"/* cropped */};



AutoCompleteTextField tfid_vehicule = new AutoCompleteTextField(characters);
        
       // TextField tfid_vehicule = new TextField("", "numero Vehicule", 20, TextField.ANY);
        TextField tfcout = new TextField("", "Cout", 20, TextField.ANY);
        TextField tfoffre = new TextField("", "Nom d'offre", 20, TextField.ANY);
//        TextField tfmarque = new TextField("", "marque", 20, TextField.ANY);
//        tfmarque.setHidden(true);
//        TextField tfmodele = new TextField("", "modele", 20, TextField.ANY);
//        tfmodele.setHidden(true);
        Picker date_debut  = new Picker();
        date_debut.setType(Display.PICKER_TYPE_DATE);
        Picker date_fin  = new Picker();
        date_fin.setType(Display.PICKER_TYPE_DATE);
        
        tfid_vehicule.setSingleLineTextArea(false);
        tfoffre.setSingleLineTextArea(false);
        tfcout.setSingleLineTextArea(false);
//        tfmarque.setSingleLineTextArea(false);
//        tfmodele.setSingleLineTextArea(false);
        
       
        Button participer = new Button("Creer Offre");
      
      
      
        
        Container content = BoxLayout.encloseY(
                new FloatingHint(tfoffre),
                createLineSeparator(),
                new FloatingHint(tfid_vehicule),
                createLineSeparator(),
                new FloatingHint(tfcout),
                createLineSeparator(),
//                new FloatingHint(tfmarque),
//                createLineSeparator(),
//                new FloatingHint(tfmodele),
//                createLineSeparator(),
              FlowLayout.encloseBottom(date_debut),
              createLineSeparator(),
              FlowLayout.encloseCenter(date_fin),
              createLineSeparator(),
              participer
              
        );
        content.setScrollableY(true);
        add(BorderLayout.SOUTH, content);
      
        participer.addActionListener(new ActionListener() {

            @Override
            public void actionPerformed(ActionEvent evt) {
 
                ConnectionRequest req = new ConnectionRequest();
                req.setUrl("http://localhost/PIDEVMobile/GestionLocation/insert.php?id_vehicule=" + tfid_vehicule.getText() + "&cout=" + tfcout.getText() + "&offre=" + tfoffre.getText() + "&date_debut=" + date_debut.getText() + "&date_fin=" + date_fin.getText() + "");
                System.out.println(".actionPerformed()");
                req.addResponseListener(new ActionListener<NetworkEvent>() {

                    @Override
                    public void actionPerformed(NetworkEvent evt) {
                         
                        byte[] data = (byte[]) evt.getMetaData();
                        String s = new String(data);

                        if (s.equals("successsuccess")) {
                            Dialog.show("Confirmation", "offre crée avec succées", "Ok", null);
                        } else{System.out.println("wa3333333333333");}
                    }
                });

                NetworkManager.getInstance().addToQueue(req);

            }
        });
 
}}



