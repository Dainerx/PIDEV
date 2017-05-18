/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.codename1.uikit.cleanmodern;

import com.codename1.components.ImageViewer;
import com.codename1.components.SpanLabel;
import com.codename1.io.CharArrayReader;
import com.codename1.io.ConnectionRequest;
import com.codename1.io.JSONParser;
import com.codename1.io.NetworkEvent;
import com.codename1.io.NetworkManager;
import com.codename1.ui.Button;
import com.codename1.ui.Command;
import com.codename1.ui.Container;
import com.codename1.ui.Dialog;
import com.codename1.ui.Display;
import com.codename1.ui.EncodedImage;
import com.codename1.ui.Form;
import com.codename1.ui.Image;
import com.codename1.ui.Label;
import com.codename1.ui.TextArea;
import com.codename1.ui.TextField;
import com.codename1.ui.Toolbar;
import com.codename1.ui.URLImage;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.layouts.GridLayout;
import com.codename1.ui.plaf.UIManager;
import com.codename1.ui.util.Resources;
import com.mycompany.entite.Publication;


import java.io.IOException;
import java.util.ArrayList;
import java.util.List;
import java.util.Map;

/**
 *
 * @author houssem
 */
public class mespubs {
        
private Form current1;
    ConnectionRequest cnx ;
    
    
     int id_user = Curentuser.getCurrentId();
    int idres;
    private Command Acceuil = new Command("Acceuil") ;
    private Command Mespublcation = new Command ("Mes publication");
    private Command Déconnexion = new Command ("Déconnexion");
     private Command Forum = new Command ("Forum");
  
           Form hi1 = new Form("Hi World",BoxLayout.y());

    mespubs(Resources theme){
                Container toolbarC=new Container(new BorderLayout()); 
                TextField zoneRecherche =new TextField(); 
                zoneRecherche.setHint("Rechercher"); 
                Button boutonRecherche=new Button("Ok"); 
                toolbarC.addComponent(BorderLayout.CENTER,zoneRecherche); 
                toolbarC.addComponent(BorderLayout.EAST,boutonRecherche); 
                Toolbar toolbar=new Toolbar();  
                hi1.setToolBar(toolbar);  
                toolbar.setTitleComponent(toolbarC);  
                hi1.show();
             hi1.getToolbar().addCommandToSideMenu(Acceuil);
            hi1.getToolbar().addCommandToSideMenu(Mespublcation);
          hi1.getToolbar().addCommandToSideMenu (Forum);
            hi1.getToolbar().addCommandToSideMenu(Déconnexion);
             hi1.addCommandListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                if (evt.getCommand()== Acceuil){
                       publications acceuil = new publications(theme);
                    
                }
            }});
             hi1.addCommandListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                if (evt.getCommand()== Mespublcation){
                       mespubs reserv = new mespubs(theme);
                    
                }
            }});
             hi1.addCommandListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                if (evt.getCommand()==Forum ){
                       forum esp = new forum(theme);
                    
                }
            }});
          
           
        ConnectionRequest  con = new ConnectionRequest();
                
                con.setUrl("http://127.0.0.1/PIDEVMobile/GestionForum/selectpubID.php?id_user="+id_user);
                
                con.addResponseListener(new ActionListener<NetworkEvent>() {
                    @Override
                    public void actionPerformed(NetworkEvent evt) {
                        ArrayList<Publication> l = getList(new String(con.getResponseData()));
                        for (Publication e : l) {
                            
                            
//                            System.out.println(houssem.getText()+"aaaaaaa");
//                            System.out.println(e);
                           // idres= e.getId_rez();
//                            System.out.println("99999999999999999999999999999999999999999999999999");
//                            System.out.println(e.getId_rez());
//                            System.out.println("999999999999999999999999999999999999999999999999");
                            Label titre = new Label();
                            Label adressemap = new Label();
                            Label hh = new Label();
                            hi1.add(titre);
                            hi1.add(adressemap);
                            //hi1.add(hh);
                            
                            
                            Button b = new Button();
                            b.setText("Supprimer");
                            hi1.add(b);
                            hh.setText(""+e.getTitre());
                           
                            titre.setText(""+e.getContenu());
                           
                            
                            hi1.getToolbar().addCommandToSideMenu(Acceuil);
                            hi1.getToolbar().addCommandToSideMenu(Mespublcation);
                            hi1.getToolbar().addCommandToSideMenu(Déconnexion);
                           b.addActionListener(new ActionListener() {
                                @Override
                                public void actionPerformed(ActionEvent evt) {
                                  
                                  Curentuser.setIdrez(Integer.parseInt(hh.getText()));
                                  int a = Curentuser.getIdrez();
                                    System.out.println(a+"/////////////////////////////////////////////////////");
                                    System.out.println();
                                    ConnectionRequest  cnx = new ConnectionRequest();
                                    cnx.setUrl("http://127.0.0.1/piwebservice/removereservation.php?id_rez="+a);
                                    hi1.refreshTheme();
                                    cnx.addResponseListener(new ActionListener<NetworkEvent>() {

                     @Override
                    public void actionPerformed(NetworkEvent evt) {

                        byte[] data = (byte[]) evt.getMetaData();
                        String s = new String(data);
                        System.out.println(s);
                       

                            mespubs af = new mespubs(theme);
                       
                       
                            //Dialog.show("Erreur", "erreur", "Ok", null);
                                               
                    }
                });
 NetworkManager.getInstance().addToQueue(cnx);
                                }
                            });
                           
                        }
                        
                        hi1.refreshTheme();
                    }
                });
             
        NetworkManager.getInstance().addToQueue(con);

    
    }
    
    public Form getL() {
        return hi1;
    }
  public ArrayList<Publication> getList(String json) {
        ArrayList<Publication> listpubs = new ArrayList<>();

        try {

            JSONParser j = new JSONParser();
            Map<String, Object> pubs = j.parseJSON(new CharArrayReader(json.toCharArray()));
            System.out.println();
            List<Map<String, Object>> list = (List<Map<String, Object>>) pubs.get("publication_forum");
            for (Map<String, Object> obj : list) {
                Publication e = new Publication();
                e.setId_pub(Integer.parseInt( obj.get("idpub").toString()));
                e.setTitre(obj.get("titre").toString());
                e.setContenu(obj.get("contenu").toString());
               
                e.setIduser(Integer.parseInt(obj.get("iduser").toString()));
               
                listpubs.add(e);
            }
        } catch (IOException ex) {
         }
        return listpubs;

    }
}
