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

import entity.*;
import com.codename1.capture.Capture;
import com.codename1.charts.util.ColorUtil;
import com.codename1.components.ScaleImageLabel;
import com.codename1.io.ConnectionRequest;
import com.codename1.io.NetworkEvent;
import com.codename1.io.NetworkManager;
import com.codename1.ui.Button;
import com.codename1.ui.CheckBox;
import com.codename1.ui.Component;
import com.codename1.ui.Container;
import com.codename1.ui.Dialog;
import com.codename1.ui.Display;
import com.codename1.ui.Image;
import com.codename1.ui.Label;
import com.codename1.ui.TextArea;
import com.codename1.ui.TextField;
import com.codename1.ui.Toolbar;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.layouts.FlowLayout;
import com.codename1.ui.layouts.GridLayout;
import com.codename1.ui.layouts.LayeredLayout;
import com.codename1.ui.plaf.Style;
import com.codename1.ui.util.ImageIO;
import com.codename1.ui.util.Resources;
import com.codename1.util.Base64;
import java.io.ByteArrayOutputStream;
import java.io.IOException;

/**
 * The user profile form
 *
 * @author Shai Almog
 */
public class AddPubForm extends BaseForm {

    public AddPubForm(Resources res, Profile Pr) {
        super("AddPublication", BoxLayout.y());

        Toolbar tb = new Toolbar(true);
        setToolbar(tb);
        getTitleArea().setUIID("Container");
        setTitle("AddPublication");
        getContentPane().setScrollVisible(false);

        Image img1 = res.getImage("backGroundRose.png");
        if (img1.getHeight() > Display.getInstance().getDisplayHeight() / 3) {
            img1 = img1.scaledHeight(Display.getInstance().getDisplayHeight() / 3);
        }
        ScaleImageLabel sl = new ScaleImageLabel(img1);
        sl.setUIID("BottomPad");
        sl.setBackgroundType(Style.BACKGROUND_IMAGE_SCALED_FILL);
        add(LayeredLayout.encloseIn(
                sl
        ));

        super.addSideMenu(res);

        Button Capturebtn = new Button("Take Picture");
        Label photo = new Label();
        Capturebtn.addActionListener(e -> {
            String L = Capture.capturePhoto(Display.getInstance().getDisplayWidth(), -1);

            if (L != null) {
                try {
                    Image img = Image.createImage(L);
                    photo.setIcon(img);
                    refreshTheme();
                } catch (IOException ex) {
                }
            }
        });

        TextArea Content = new TextArea();
        Button addbtn = new Button("Add publication");

        addbtn.addActionListener((ActionEvent e) -> {
            if (photo.getIcon() != null) {
                ImageIO imgIO = ImageIO.getImageIO();
                ByteArrayOutputStream out = new ByteArrayOutputStream();
                try {
                    imgIO.save(photo.getIcon(), out, ImageIO.FORMAT_JPEG, 1);
                } catch (IOException ex) {
                }
                byte[] ba = out.toByteArray();
                String Imagecode = Base64.encode(ba);
                //System.out.println("data :"+Imagecode);
                ConnectionRequest request = new ConnectionRequest();

                request.addResponseListener(new ActionListener<NetworkEvent>() {

                    @Override
                    public void actionPerformed(NetworkEvent evt) {
                        byte[] data = (byte[]) evt.getMetaData();
                        String s = new String(data);

                        if (s.equals("success")) {
                            Dialog.show("Confirmation", "Publication Added " + Pr.getPseudo(), "Ok", null);
                            ProfileForm ns = null;
                            try {
                                ns = new ProfileForm(res, Pr);
                            } catch (IOException ex) {

                            }
                            ns.show();

                        }
                    }
                });

                request.setPost(true);
                request.setHttpMethod("POST");
                request.addArgument("Image", Imagecode);
                request.addArgument("Conent", Content.getText());
                request.addArgument("idProfile", Integer.toString(Pr.getId()));

                request.setUrl("http://localhost/PIDEVMobile/GestionProfile/testup.php");

                NetworkManager.getInstance().addToQueueAndWait(request);
            } else {
                Dialog.show("Error", "Please add A picture and a content", "Ok", null);
            }

        });

        Container ctbttom = new Container();
        ctbttom.setLayout(new BoxLayout(BOTTOM));
        ctbttom.add(Capturebtn);
        ctbttom.add(photo);
        ctbttom.add(Content);
        ctbttom.add(addbtn);

        add(ctbttom);

    }

}
