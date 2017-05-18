/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.codename1.uikit.cleanmodern;

import com.codename1.io.CharArrayReader;
import com.codename1.io.ConnectionRequest;
import com.codename1.io.JSONParser;
import com.codename1.ui.Form;
import com.codename1.ui.Dialog;
import com.codename1.ui.util.Resources;
import com.codename1.io.NetworkEvent;
import com.codename1.io.NetworkManager;
import com.codename1.media.Media;
import com.codename1.media.MediaManager;
import com.codename1.ui.Button;
import com.codename1.ui.Command;
import com.codename1.ui.Container;
import com.codename1.ui.Label;
import com.codename1.ui.TextField;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.layouts.GridLayout;
import com.codename1.ui.spinner.DateSpinner;
import entity.*;

import java.io.IOException;
import java.util.ArrayList;
import java.util.List;
import java.util.Map;
import com.restfb.types.Comment;
/**
 *
 * @author houssem
 */
public class commentaires {

    int u = Curentuser.getCurrentId();
     int id_pub = Curentuser.getIdpubs();
   
    
    
    
    Form f;
    
    private String rep;
    private int ch;

    private Command Acceuil = new Command("Acceuil");
    private Command restaurants = new Command("Restaurants");
    private Command Mespublications = new Command("Mes publication");
    private Command Déconnexion = new Command("Déconnexion");

    public commentaires(Resources theme) {
        System.out.println("9999999999999999");
        System.out.println(u);
        System.out.println("8888888888888888888");
        f = new Form("Commentaires", BoxLayout.y());

        Container ct = new Container(new GridLayout(1, 2));
        Container ct1 = new Container(new GridLayout(2, 1));
        Container ct2 = new Container(new GridLayout(2, 1));
        TextField TF1 = new TextField("", "comment");
        TF1.setHint("laissez un comment");
       
       
       
        Button BT = new Button("Commenter");
        TextField comment = new TextField();
//        f.add(TF1);
//        f.add(TF2);
//        f.add(TF3);
        f.add(ct);
        
        int id_pub = Curentuser.getIdpubs();
        System.out.println("444444444444444444444444444444444444444444444444444");
        System.out.println(Curentuser.getIdpubs());
        System.out.println("555555555555555555555555555555555555555555555555555");
                ConnectionRequest  con1 = new ConnectionRequest();
               
                con1.setUrl("http://127.0.0.1/PIDEVMobile/GestionForum/select1.php");
                
                con1.addResponseListener(new ActionListener<NetworkEvent>() {
                    @Override
                    public void actionPerformed(NetworkEvent evt) {
                        ArrayList<Commentaire> l = getLista(new String(con1.getResponseData()));
                        for (Commentaire e1 : l) {
                        Container c3 = new Container(new GridLayout(5, 5));
                        Label txt = new Label();
                        txt.setText(e1.getTexte());
                        f.add(txt);
                            System.out.println("6666666666666666666666666666666666");
                            System.out.println(txt.getText());       
                        
                        }}});
		NetworkManager.getInstance().addToQueue(con1);
        f.add(TF1);
        f.add(BT);

        f.getToolbar().addCommandToSideMenu(Acceuil);
        f.addCommandListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                if (evt.getCommand() == Acceuil) {
                    publications acceuil = new publications(theme);

                }
            }
        });

        f.addCommandListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                if (evt.getCommand() == restaurants) {
                    forum esp = new forum(theme);

                }
            }
        });

        f.getToolbar().addCommandToSideMenu(Mespublications);
        f.addCommandListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
                if (evt.getCommand() == Mespublications) {
                    mespubs reserv = new mespubs(theme);

                }
            }
        });
        f.getToolbar().addCommandToSideMenu(Déconnexion);
        
        BT.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
               ConnectionRequest con = new ConnectionRequest();

                String comment = TF1.getText();
               
                int id_pub = Curentuser.getIdpubs();
                System.out.println("aaaaaaabbbbbbbbbbbbbbcccccccallalalalal");
                System.out.println(id_pub);
                System.out.println("aaaaaaabbbbbbbbbbbbbbcccccccallalalalal");
                con.setUrl("http://localhost/PIDEVMobile/GestionForum/insertnewCMT.php?texte=" + comment+ "&idu=" + u + "&id_pub=" + id_pub);
                con.addResponseListener(new ActionListener<NetworkEvent>() {
                    @Override
                    public void actionPerformed(NetworkEvent evt) {
                        String rep = new String(con.getResponseData());
                        commentaires rez = new commentaires(theme);

                        if (rep.equals("success")) {
                            Dialog.show("Insert", " AJOUT OK ", "OK", "CANCEL");
                            rez.getF().show();
//                            Media m;
//                            try {
//                                m = MediaManager.createMedia("http://127.0.0.1/PiMob/Voice.m4a", false);
//                                m.play();
//                            } catch (IOException ex) {
                                //Logger.getLogger(openChatForm.class.getName()).log(Level.SEVERE, null, ex);
                            }
                    }
                        
                    
                });
                NetworkManager.getInstance().addToQueue(con);
            }
               
            
        });

    }

    private commentaires() {
    }

    public Form getF() {
        return f;
    }

    public void setF(Form f) {
        this.f = f;
    }

    public void show() {

        f.show();
    }
public ArrayList<Commentaire> getLista(String json) {
        ArrayList<Commentaire> lista = new ArrayList<>();

        try {

            JSONParser j = new JSONParser();
            Map<String, Object> cmts = j.parseJSON(new CharArrayReader(json.toCharArray()));
            System.out.println();
            List<Map<String, Object>> list = (List<Map<String, Object>>) cmts.get("commentaire");
            for (Map<String, Object> obj : list) {
                Commentaire e = new Commentaire();
           //  e.setId_pub(Integer.parseInt( obj.get("idpub").toString()));
            //    e.setId_com(Integer.parseInt( obj.get("idcom").toString()));
                //e.setId_personne(Integer.parseInt( obj.get("idmembre").toString()));
                e.setTexte(obj.get("contenu").toString());
               
               
               
                lista.add(e);
            }
        } catch (IOException ex) {
         }
        return lista;

    }
}
