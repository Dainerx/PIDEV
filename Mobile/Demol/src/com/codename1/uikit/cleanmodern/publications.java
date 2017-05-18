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
import java.io.IOException;
import java.util.ArrayList;
import java.util.List;
import java.util.Map;
import java.lang.Object;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * 
 * @author Mimoo
 */
public class publications {
    private Form current;
    ConnectionRequest cnx ;
    int ch ;
    String rep ;
    int id;
    int u = Curentuser.getCurrentId();
    private Command Acceuil = new Command("Acceuil") ;
    private Command Mespublication = new Command ("Mes publication");
    private Command Déconnexion = new Command ("Déconnexion");
    private Command restaurants = new Command ("Forum");
  
           Form hi = new Form("Hi World",BoxLayout.y());

    publications(Resources theme){
                Container toolbarC=new Container(new BorderLayout()); 
               Container c = new Container();
               Container c1 = new Container();
                Toolbar toolbar=new Toolbar();  
                hi.setToolBar(toolbar);  
                toolbar.setTitleComponent(toolbarC);  
                hi.show();
             hi.getToolbar().addCommandToSideMenu(Acceuil);
            hi.getToolbar().addCommandToSideMenu(Mespublication);
            hi.getToolbar().addCommandToSideMenu ("Forum",null,new ActionListener() {
                    @Override
                    public void actionPerformed(ActionEvent evt) {
                        
                        forum esp = new forum(theme);
                        esp.getL().show();
                    }
                });
            hi.getToolbar().addCommandToSideMenu(Déconnexion);
               hi.add(c1); 
             TextField  titre = new TextField("", "titre", 20, TextArea.ANY);
            c1.add(titre);
            TextField  publi = new TextField("", "pubiez quelque chose", 20, TextArea.ANY);
            c1.add(publi);
            
            Button ajouter = new Button();
            ajouter.setText("Ajouter");
            c1.add(ajouter);
            ajouter.addActionListener(new ActionListener() {
                    @Override
                    public void actionPerformed(ActionEvent evt) {
                           ConnectionRequest con3 = new ConnectionRequest();

               
               
                int v = u;
               String titre1 = titre.getText();
               String publ = publi.getText();
                con3.setUrl("http://localhost/PIDEVMobile/GestionForum/insertnewPUB.php?titre=" + titre1+ "&idu=" + v + "&contenu=" + publ);
                con3.addResponseListener((NetworkEvent evt1) -> {
                    String rep1 = new String(con3.getResponseData());
                    forum fo = new forum(theme);
                    System.out.println("qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq");
                               if (rep1.equals("success")) {
                                   Dialog.show("Insert", " AJOUT OK ", "OK", "CANCEL");
                                   fo.getL().show();
                               }
                           });
                NetworkManager.getInstance().addToQueue(con3);
            }
               
                    }
                );
            hi.add(c);
               EncodedImage img = EncodedImage.createFromImage(Image.createImage(Display.getInstance().getDisplayWidth(),450), true);
                        URLImage imgg= URLImage.createToStorage(img, "http://localhost/products/covoiturages.jpg", "http://localhost/products/covoiturages.jpg");
                        imgg.fetch();
                        ImageViewer imgv = new ImageViewer(imgg);
                        c.add(imgv);                         
                                System.out.println(",d,d,d,d,d,d,dd,,d,dd,d,");
          
          
           
       
                    
                    hi.refreshTheme();
              
             

    
    }
    
    public Form getL() {
        return hi;
    }
    

}
