/*
 * Copyright (c) 2016, Codename One
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated 
 * documentation files (the "Software"), to deal in the Software without restriction, including without limitation 
 * the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, 
 * and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all copies or substantial portions 
 * of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, 
 * INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A 
 * PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT 
 * HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF 
 * CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE 
 * OR THE USE OR OTHER DEALINGS IN THE SOFTWARE. 
 */

package com.codename1.uikit.cleanmodern;

import controller.*;
import entity.*;
import com.codename1.capture.Capture;
import com.codename1.charts.util.ColorUtil;
import com.codename1.components.ScaleImageLabel;
import com.codename1.components.ToastBar;
import com.codename1.io.ConnectionRequest;
import com.codename1.io.NetworkEvent;
import com.codename1.io.NetworkManager;
import com.codename1.ui.Button;
import com.codename1.ui.CheckBox;
import com.codename1.ui.Component;
import com.codename1.ui.Container;
import com.codename1.ui.Dialog;
import com.codename1.ui.Display;
import com.codename1.ui.Font;
import com.codename1.ui.Image;
import com.codename1.ui.Label;
import com.codename1.ui.List;
import com.codename1.ui.TextArea;
import com.codename1.ui.TextField;
import com.codename1.ui.Toolbar;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.geom.Dimension;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.layouts.FlowLayout;
import com.codename1.ui.layouts.GridLayout;
import com.codename1.ui.layouts.LayeredLayout;
import com.codename1.ui.list.ListModel;
import com.codename1.ui.plaf.Style;
import com.codename1.ui.util.ImageIO;
import com.codename1.ui.util.Resources;
import com.codename1.util.Base64;
import java.io.ByteArrayOutputStream;
import java.io.IOException;

import java.util.ArrayList;



/**
 * The user profile form
 *
 * @author Shai Almog
 */
public class CommentsForm extends BaseForm {

    Container ComsContainer; 
    CommentServices CS = new CommentServices(); 
    MembreServices Ms = new MembreServices(); 
     Membre m ;
    
    public CommentsForm(Resources res,PublicationProfil Pr) {
       
        super("Comments", BoxLayout.y());
       
        m= new Membre();
        m=Ms.GetUserById(3); 
       
      
        Toolbar tb = new Toolbar(true);
        setToolbar(tb);
        getTitleArea().setUIID("Container");
        setTitle("Comments");
        getContentPane().setScrollVisible(false);
        
        Image img1 = res.getImage("backGroundRose.png");
        if(img1.getHeight() > Display.getInstance().getDisplayHeight() / 3) {
            img1 = img1.scaledHeight(Display.getInstance().getDisplayHeight() / 3);
        }
        ScaleImageLabel sl = new ScaleImageLabel(img1);
        sl.setUIID("BottomPad");
        sl.setBackgroundType(Style.BACKGROUND_IMAGE_SCALED_FILL);
add(LayeredLayout.encloseIn(
                sl
               
        ));

            
        super.addSideMenu(res);
        
        ComsContainer= new Container() ;
        ArrayList<Commentaire> listToget = new ArrayList<>() ; 
     
        listToget=(ArrayList<Commentaire>) CS.getCommentsPerPub(Pr); 
        
     
       
    
       for(Commentaire com :listToget)
       {
           Container ct = new Container(); 
           Label Membre= new Label(com.getIdMembre().getNom()); 
           Membre.getAllStyles().setFgColor(ColorUtil.BLUE);
          
           Label text= new Label(com.getTexte()); 
          // Label spacer= new Label("       ");
           createLineSeparator(ColorUtil.BLACK); 
          
           ComsContainer.add(BoxLayout.encloseX(Membre,text)); 
        
       }
       add(ComsContainer);
        Container CtAdd = new Container(); 
        TextArea comadd = new TextArea(); 
        comadd.setRows(3);
        comadd.setColumns(10);
        comadd.setSize(new Dimension(Display.getInstance().getDisplayWidth()/2, Display.getInstance().getDisplayWidth()/4));
        Button Addbtn = new Button("add Comment") ; 
        
        Addbtn.addActionListener(e->{
        CS.addcomment(comadd.getText(), m, Pr, res);
        });
        
        CtAdd.add(BoxLayout.encloseX(comadd,Addbtn)) ; 
       
        add(BorderLayout.south(CtAdd)) ;
        

        
      
      

   
    }
    
  
}
