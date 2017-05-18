/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.codename1.uikit.cleanmodern;

import com.codename1.io.ConnectionRequest;
import com.codename1.io.NetworkEvent;
import com.codename1.io.NetworkManager;
import com.codename1.ui.Button;
import com.codename1.ui.Calendar;
import com.codename1.ui.ComboBox;
import com.codename1.ui.Dialog;
import com.codename1.ui.Form;
import com.codename1.ui.TextField;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.spinner.Picker;
import com.codename1.ui.util.Resources;
import com.codename1.ui.util.UIBuilder;
import java.util.Date;

/**
 *
 * @author Mounq
 */
public class Inscription {
    public Inscription(Resources theme){
            UIBuilder.registerCustomComponent("Picker",Picker.class);

        UIBuilder uib = new UIBuilder();
        
         Form f = new Form("Inscription", BoxLayout.y());

        TextField t= new TextField("", "Nom");
        TextField t1 = new TextField("", "UserName");
        TextField t2 = new TextField("", "Mail");
        TextField t3 = new TextField("", "Mot De passe", 20, TextField.PASSWORD);
        TextField t4 = new TextField("", "Confirmer email");
        TextField t5 = new TextField("", "pays");
f.add(t);
        f.add(t1);
        
        f.add(t3);

//Picker p = new Picker();
//f.add(p);
        f.add(t2);
        f.add(t4);
        
        ComboBox <String> cb = new ComboBox();
        cb.addItem("Femme");
        cb.addItem("Homme");
        f.add(cb);
        f.add(t5);
        Button B = new Button("Valider");
Button Bt = new Button("Annuler");
        f.add(B);
        f.add(Bt);
        
            B.addActionListener(new ActionListener() {
            @Override
            public void actionPerformed(ActionEvent evt) {
             ConnectionRequest con = new ConnectionRequest();
                String name = t.getText();
                String username =t1.getText();
                String mail= t2.getText();
                String pswd = t3.getText();
                String cmail =t4.getText();
                String pays= t5.getText();
                String Sexe = (String)cb.getSelectedItem();
//                Date date =p.getDate();
             
                con.setUrl("http://localhost/PiMob/insertnew.php?name="+name+"&username="+username+"&cpwd="+cmail+"&mail="+mail+"&password="+pswd+"&pays="+pays+"&Sexe="+Sexe);
                con.addResponseListener(new ActionListener<NetworkEvent>() {
                    @Override
                    public void actionPerformed(NetworkEvent evt) {
                     String rep = new String( con.getResponseData());
                     login login = new login(theme);
       
                       if (rep .equals("success")) Dialog.show("Insert", " AJOUT OK ", "OK", "CANCEL");
                       login.show();
                        
                   }
                });
                        NetworkManager.getInstance().addToQueue(con);
            }
            
        });
                              f.show();
}
    public void show(){
     
 
 }
}