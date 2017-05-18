/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.codename1.uikit.cleanmodern;

import com.codename1.io.CharArrayReader;
import com.codename1.io.ConnectionRequest;
import com.codename1.io.JSONParser;
import com.codename1.io.NetworkEvent;
import com.codename1.io.NetworkManager;
import com.codename1.ui.Button;
import com.codename1.ui.Command;
import com.codename1.ui.Container;
import com.codename1.ui.EncodedImage;
import com.codename1.ui.Form;
import com.codename1.ui.Label;
import com.codename1.ui.Toolbar;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.layouts.GridLayout;
import com.codename1.ui.util.Resources;
import com.mycompany.entite.Publication;

import com.restfb.DefaultFacebookClient;
import com.restfb.FacebookClient;
import com.restfb.Parameter;
import com.restfb.types.FacebookType;
import java.io.IOException;
import java.util.ArrayList;
import java.util.List;
import java.util.Map;

/**
 *
 * @author sahar
 */
public class forum {
    
private Form current1;
    ConnectionRequest cnx ;
    int ch ;
    String rep ;
    int id;
    public static int id_pub;
    EncodedImage encoded;
   // Label sahar = new Label();
   
    private Command Acceuil = new Command("Acceuil") ;
    private Command Mespublications = new Command ("Mes publiations");
    private Command Deconnexion = new Command ("Déconnexion");
   
  
           Form hi1 = new Form("Hi World",BoxLayout.y());

    forum(Resources theme){
   
                Container toolbarC=new Container(new BorderLayout()); 
                
                Toolbar toolbar=new Toolbar();  
                hi1.setToolBar(toolbar);  
                toolbar.setTitleComponent(toolbarC);  
                hi1.show();
  hi1.getToolbar().addCommandToSideMenu(Acceuil);
               hi1.addCommandListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                if (evt.getCommand()== Acceuil){
                       publications acceuil = new publications(theme);
                    
                }
            }
        });
  hi1.getToolbar().addCommandToSideMenu(Mespublications);
             hi1.addCommandListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                if (evt.getCommand()== Mespublications){
                       mespubs reserv= new mespubs(theme);
                    
                }
            }
        });
  
  hi1.getToolbar().addCommandToSideMenu(Deconnexion);
   hi1.addCommandListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                if (evt.getCommand()== Deconnexion ){
                       login log = new login(theme);
                    
                }
            }
        });
               
                

          hi1.getToolbar().addCommandToSideMenu ("Mes_publication",null,new ActionListener() {
                    @Override
                    public void actionPerformed(ActionEvent evt) {
                        
                        mespubs esp = new mespubs(theme);
                        esp.getL().show();
                    }
                });
      
                ConnectionRequest con = new ConnectionRequest();
                con.setUrl("http://localhost/PIDEVMobile/GestionForum/select.php");
                con.addResponseListener(new ActionListener<NetworkEvent>() {
                    @Override
                    public void actionPerformed(NetworkEvent evt) {
                       
                        ArrayList<Publication> l = getList(new String(con.getResponseData()));
                        for (Publication e : l) {
                         Container c3 = new Container(new GridLayout(2, 1));
                         Container c4 = new Container(new GridLayout(3, 1)) ;       
                            
                             Label titre = new Label();
                             Label description = new Label();
                             Label sahar = new Label();
                        
                             hi1.add(c3);
                             c3.add(titre);
                             c3.add(description);
                           sahar.setText(""+e.getId_pub());
                             titre.setText(e.getTitre());
                            description.setText(e.getContenu());
                            description.setText(e.getContenu());
                            hi1.getToolbar().addCommandToSideMenu(Acceuil);
                            hi1.getToolbar().addCommandToSideMenu(Mespublications);
                            hi1.getToolbar().addCommandToSideMenu(Deconnexion);
                            Button b = new Button();
                            hi1.add(b);
                            b.setText("Consulter");
                            b.addActionListener(new ActionListener() {
                                @Override
                                public void actionPerformed(ActionEvent evt) {
                                    
                                    Form consulter = new Form("Join My Ride",BoxLayout.y());
                                    
                                    Container c = new Container(new GridLayout(3,1));
                                    Container c1 = new Container(new GridLayout(2, 5));
//                                    consulter.getToolbar().addCommandToSideMenu(Acceuil);
//  consulter.addCommandListener(new ActionListener() {
//            @Override
//            public void actionPerformed(ActionEvent evt) {
//                if (evt.getCommand()== Acceuil){
//                       publications acceuil = new publications(theme);
//                    
//                }
//            }
//        });
//  consulter.getToolbar().addCommandToSideMenu(Mespublications);
//  consulter.addCommandListener(new ActionListener() {
//            @Override
//            public void actionPerformed(ActionEvent evt) {
//                if (evt.getCommand()== Mespublications){
//                       mespubs reserv= new mespubs(theme);
//                    
//                }
//            }
//        });
//  consulter.getToolbar().addCommandToSideMenu(Deconnexion);
//  consulter.addCommandListener(new ActionListener() {
//            @Override
//            public void actionPerformed(ActionEvent evt) {
//                if (evt.getCommand()== Deconnexion ){
//                       login log = new login(theme);
//                    
//                }
//            }
//        });
//  
  
  
 
                                    System.out.println(l);
                                    Button reserver = new Button();
                                    Button Btn2 = new Button("Partager sur facbook"); 
                                   
                                    
                                    consulter.add(c);
                                     Label titre = new Label();
                                     Label description = new Label();
                                     
                                     Label iduser = new Label();
                                    c.add(titre);
                                    c.add(description);
                                    
                                    
                                    Button retour = new Button();                                                                             
                                    consulter.add(c1);
                                    consulter.add(reserver);
                                    consulter.add(Btn2);
                                    consulter.add(retour);
                                    
                                    iduser.setText(""+e.getIduser());
                                   
                                   description.setText(e.getContenu());
//                                    
                                    titre.setText(e.getTitre());
//                                   
                                    titre.getAllStyles();
                                    titre.setUIID("labeltitre");
//                                    
                                    int a = e.getId_pub();
                                    String aa = ""+a;
                                    sahar.setText(aa);
                                    sahar.getAllStyles();
                                    sahar.setUIID("labeltitre");
                                    System.out.println("bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb");
                                    System.out.println(iduser.getText());
                                    
                                    System.out.println(sahar.getText());
                                    
                                    reserver.setText("commenter");
                                    retour.setText("retour");
                                    retour.getAllStyles();
                                    retour.setUIID("labelGris");
                                    consulter.show();
                                    Btn2.addActionListener(e->{
                                       
                     String accessToken = "EAACEdEose0cBAFkp3dsSGRZChD9G8zPhaEHLBZCfph81zXgUKrhMipmXnlNbRfJb3ZAVJDyEpduDU9ybZCJi9ZCxOY3EBPZCZApmF0s63xxLLQQy7U0Yh4DKE4WiaEfwTZBQ3VJfYirhrP0ZBHtujSNCYt0klr0NIlfTfWEWltyVpXpFpmbl1aNjBUY6cZBNH6t8V3LLb1ZCklDVAZDZD";
        
           
                     FacebookClient fbClient= new DefaultFacebookClient(accessToken);
                     FacebookType response = fbClient.publish("me/feed", FacebookType.class,
                     Parameter.with("message", "covoiturage : "+ "contenu :" + description.getText()  )
         );
         System.out.println("Votre evenement à été publié sur facebook");
         System.out.println("fb.com/"+response.getId()); 
                                       
                                       
                                       
                                       
                                       });


                                    retour.getAllStyles();
                                    retour.setUIID("labelGris");
                                    retour.addActionListener(new ActionListener() {
                                        @Override
                                        public void actionPerformed(ActionEvent evt) {
                                            hi1.show();
                                        }
                                    });
                                    reserver.addActionListener(new ActionListener() {
                                        @Override
                                        public void actionPerformed(ActionEvent evt) {
                                           
                                            Curentuser.setIdpub(Integer.parseInt(sahar.getText()));
                                            id_pub = Curentuser.getIdpubs();
                                           
                                            System.out.println(id_pub);
                                            
                                             commentaires com = new commentaires(theme);
                                            com.getF().show();
                                        }
                                        
                                    });
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
            List<Map<String, Object>> list = (List<Map<String, Object>>) pubs.get("publication");
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
