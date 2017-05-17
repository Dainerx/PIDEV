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
import com.codename1.charts.util.ColorUtil;
import com.codename1.components.ScaleImageLabel;
import com.codename1.components.SpanLabel;
import com.codename1.components.ToastBar;
import com.codename1.io.ConnectionRequest;
import com.codename1.io.NetworkEvent;
import com.codename1.io.NetworkManager;
import com.codename1.ui.Button;
import com.codename1.ui.ButtonGroup;
import com.codename1.ui.Component;
import com.codename1.ui.Container;
import com.codename1.ui.Dialog;
import com.codename1.ui.Display;
import com.codename1.ui.EncodedImage;
import com.codename1.ui.FontImage;
import com.codename1.ui.Graphics;
import com.codename1.ui.Image;
import com.codename1.ui.Label;
import com.codename1.ui.RadioButton;
import com.codename1.ui.Tabs;
import com.codename1.ui.TextArea;
import com.codename1.ui.Toolbar;
import com.codename1.ui.URLImage;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.layouts.FlowLayout;
import com.codename1.ui.layouts.GridLayout;
import com.codename1.ui.layouts.LayeredLayout;
import com.codename1.ui.plaf.Style;
import com.codename1.ui.util.Resources;
import java.io.IOException;
import java.util.ArrayList;
import com.restfb.*;
import com.restfb.types.FacebookType;
import java.util.Random;

;

/**
 * The newsfeed form
 *
 * @author Shai Almog
 */
public class ProfileForm extends BaseForm {

    PublicationsServices PubService;
    ProfileServices PrService;
    MembreServices memServices;
    String Relation;


    public ProfileForm(Resources res, Profile Pr) throws IOException {

        super(Pr.getPseudo(), BoxLayout.y());
        Toolbar tb = new Toolbar(true);
        setToolbar(tb);
        getTitleArea().setUIID("Container");
        setTitle(Pr.getPseudo());
        getContentPane().setScrollVisible(false);

        super.addSideMenu(res);
        tb.addSearchCommand(e -> {
        });

        Tabs swipe = new Tabs();

        Label spacer1 = new Label();
        Label spacer2 = new Label();

        InitProfile(swipe, Pr);

        swipe.setUIID("Container");
        swipe.getContentPane().setUIID("Container");
        swipe.hideTabs();

        //ButtonGroup bg = new ButtonGroup();
        int size = Display.getInstance().convertToPixels(1);
        Image unselectedWalkthru = Image.createImage(size, size, 0);
        Graphics g = unselectedWalkthru.getGraphics();
        g.setColor(0xffffff);
        g.setAlpha(100);
        g.setAntiAliased(true);
        g.fillArc(0, 0, size, size, 0, 360);
        Image selectedWalkthru = Image.createImage(size, size, 0);
        g = selectedWalkthru.getGraphics();
        g.setColor(0xffffff);
        g.setAntiAliased(true);

        FlowLayout flow = new FlowLayout(CENTER);
        flow.setValign(BOTTOM);
        Container radioContainer = new Container(flow);

        Component.setSameSize(radioContainer, spacer1, spacer2);
        add(LayeredLayout.encloseIn(swipe));

        ButtonGroup barGroup = new ButtonGroup();
        RadioButton Publications = RadioButton.createToggle("Publications", barGroup);
        Publications.setUIID("SelectBar");

        Button Action = setFollowsParm(barGroup, Pr, res);

        add(LayeredLayout.encloseIn(
                GridLayout.encloseIn(2, Publications, Action)
        ));

        Publications.setSelected(true);

        // special case for rotation
        setPubs(Relation, Pr, res);

    }

    private void InitProfile(Tabs swipe, Profile pr) {
        int size = Math.min(Display.getInstance().getDisplayWidth(), Display.getInstance().getDisplayHeight());
       
        EncodedImage placeholder = EncodedImage.createFromImage(Image.createImage(size, size, 0x000000), false);
        Image pubImage;
        pubImage = URLImage.createToStorage(placeholder, pr.getId() +pr.hashCode()+"Profilea.jpg", getImage(pr.getPhoto()));

        ScaleImageLabel image = new ScaleImageLabel(pubImage);
        image.setUIID("Container");
        image.setBackgroundType(Style.BACKGROUND_IMAGE_SCALED_FILL);

        Container page1
                = LayeredLayout.encloseIn(
                        image,
                        // overlay,
                        BorderLayout.south(
                                BoxLayout.encloseY()
                        )
                );

        swipe.addTab("", page1);
    }

    private void addButton(PublicationProfil pp, Resources res) {
        int height = Display.getInstance().convertToPixels(11.5f);
        int width = Display.getInstance().convertToPixels(14f);
        EncodedImage placeholder = EncodedImage.createFromImage(Image.createImage(width, height, 0x000000), false);
        Image pubImage;
        pubImage = URLImage.createToStorage(placeholder, pp.getId() + "_" + pp.getIdProfil().getId() + "9.jpg", getImage(pp.getPicpath()));

        Button image = new Button(pubImage.fill(width, height));
        image.setUIID("Label");
        Container cnt = BorderLayout.west(image);

        TextArea ta = new TextArea(pp.getContenu());
        ta.setUIID("NewsTopLine");
        ta.setEditable(false);

        Button share = new Button(res.getImage("fb9.png").scaled(20, 20));
        cnt.add(BorderLayout.EAST, share);

        Label comments = new Label(" Comments", "NewsBottomLine");

        cnt.add(BorderLayout.CENTER,
                BoxLayout.encloseY(
                        ta,
                        BoxLayout.encloseX(comments)
                ));
        add(cnt);
        // image.addActionListener(e -> ToastBar.showMessage(pp.getContenu(), FontImage.MATERIAL_INFO));
        image.addActionListener(e -> {
            CommentsForm CF = new CommentsForm(res, pp);

            CF.show();

        });

        share.addActionListener(e -> {
            String accessToken = "EAACEdEose0cBACrPvVzZCUPc68DreieTR1Ouymxas1QCZBao8MiDJpbhNkZAI9IHsqqJy0utyPZCQMIpsVVoK8RIsc8pXy4QUDQWbklh9MBxqfZAENcghiBC1bCh3pWKYnu26yk43t8uEscfMqZBupJfVolBfSmRdYD1FHDlmde0k2go8pIxVh6ROlCwanKyEzU4sdO3VXoQZDZD";

            FacebookClient fbClient = new DefaultFacebookClient(accessToken);
            FacebookType response = fbClient.publish("me/feed", FacebookType.class,
                    Parameter.with("message", pp.getIdProfil().getIdMembre().getNom() + " : " + pp.getContenu()+" "+pp.getPicpath()));

            System.out.println("Votre offre à été publiée");
            System.out.println("fb.com/" + response.getId());
             Dialog.show("Confirmation", "Publication Shared successfully", "Ok", null);
    
  
        });

    }

    private String getImage(String pic) {
        if (pic.startsWith("http")) {
            return pic;
        } else {
            return "http://localhost/PIWEBFINAL/web/images/uploads/pubs/" + pic;
        }

    }

    private void setPubs(String Relation, Profile Pr, Resources res) {
        if (Relation.equals("following") || Relation.equals("yours")) {
            ArrayList<PublicationProfil> PubList = new ArrayList<>();
            PubService = new PublicationsServices();
            PubList = (ArrayList<PublicationProfil>) PubService.getPubsByProfile(Pr);

            for (PublicationProfil pp : PubList) {
                addButton(pp, res);
            }
        }
    }

    private Button setFollowsParm(ButtonGroup barGroup, Profile Pr, Resources res) {
        PrService = new ProfileServices();
        memServices = new MembreServices();
        Membre Current = memServices.GetUserById(3);
        Button Action = RadioButton.createToggle("Action", barGroup);
        Action.setUIID("SelectBar");
        Relation = PrService.CheckProfileFollowing(Pr.getIdMembre(), Current);
        if (Relation.equals("following")) {
            Action.setText("Unfollow");
            Action.addActionListener(e -> {
                ConnectionRequest req = new ConnectionRequest();
                req.setUrl("http://localhost/PIDEVMobile/GestionProfile/Follows.php?action=2&IDFollower=" + Pr.getIdMembre().getId() + "&IDFollowed=" + Current.getId());

                req.addResponseListener(new ActionListener<NetworkEvent>() {

                    @Override
                    public void actionPerformed(NetworkEvent evt) {
                        byte[] data = (byte[]) evt.getMetaData();
                        String s = new String(data);

                        if (s.equals("success")) {
                            Dialog.show("Confirmation", "Your Are No longer Following " + Pr.getPseudo(), "Ok", null);
                            try {
                                ProfileForm ns = new ProfileForm(res, Pr);
                                ns.show();
                            } catch (IOException ex) {

                            }
                        }
                    }
                });

                NetworkManager.getInstance().addToQueueAndWait(req);

            });

        } else if (Relation.equals("not-following")) {
            Action.setText("follow");
            Action.addActionListener(e -> {
                ConnectionRequest req = new ConnectionRequest();
                req.setUrl("http://localhost/PIDEVMobile/GestionProfile/Follows.php?action=1&IDFollower=" + Pr.getIdMembre().getId() + "&IDFollowed=" + Current.getId());

                req.addResponseListener(new ActionListener<NetworkEvent>() {

                    @Override
                    public void actionPerformed(NetworkEvent evt) {
                        byte[] data = (byte[]) evt.getMetaData();
                        String s = new String(data);

                        if (s.equals("success")) {
                            Dialog.show("Confirmation", "Your Are Now Following " + Pr.getPseudo(), "Ok", null);
                            try {
                                ProfileForm ns = new ProfileForm(res, Pr);
                                ns.show();
                            } catch (IOException ex) {

                            }
                        }
                    }
                });

                NetworkManager.getInstance().addToQueueAndWait(req);

            });
        }
        if (Relation.equals("yours")) {
            Action.setText("Add Publication");
            Action.addActionListener(e -> {
                AddPubForm addpub = new AddPubForm(res, Pr);
                addpub.show();
            });
        }
        return Action;
    }
}
