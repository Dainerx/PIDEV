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


//import static FeedbackService.EvenementCrud.listOfEvents;
import FeedbackEntity.Evenement;
import com.codename1.components.ScaleImageLabel;
import com.codename1.components.SpanLabel;
import com.codename1.components.ToastBar;
import com.codename1.io.ConnectionRequest;
import com.codename1.io.JSONParser;
import com.codename1.io.Log;
import com.codename1.io.NetworkEvent;
import com.codename1.io.NetworkManager;
import com.codename1.maps.Coord;
import com.codename1.ui.Button;
import com.codename1.ui.ButtonGroup;
import com.codename1.ui.Component;
import com.codename1.ui.Container;
import com.codename1.ui.Dialog;
import com.codename1.ui.Display;
import com.codename1.ui.EncodedImage;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.Graphics;
import com.codename1.ui.Image;
import com.codename1.ui.Label;
import com.codename1.ui.RadioButton;
import com.codename1.ui.Tabs;
import com.codename1.ui.TextArea;
import com.codename1.ui.Toolbar;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.geom.Dimension;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.layouts.BoxLayout;
import com.codename1.ui.layouts.FlowLayout;
import com.codename1.ui.layouts.GridLayout;
import com.codename1.ui.layouts.LayeredLayout;
import com.codename1.ui.plaf.Style;
import com.codename1.ui.util.Resources;
import java.io.ByteArrayInputStream;
import java.io.IOException;
import java.io.InputStream;
import java.io.InputStreamReader;
import java.io.Reader;
import java.util.ArrayList;
import java.util.List;
import java.util.Map;

/**
 * The newsfeed form
 *
 * @author Shai Almog
 */
public class EventsForm extends BaseForm {

    private ConnectionRequest connectionRequest;

    public EventsForm(Resources res) {
        super("", BoxLayout.y());
        Toolbar tb = new Toolbar(true);
        setToolbar(tb);
        getTitleArea().setUIID("Container");
        setTitle(" Events ");
        getContentPane().setScrollVisible(false);

        super.addSideMenu(res);
//        tb.addSearchCommand(e -> {
//        });

        Tabs swipe = new Tabs();

        Label spacer1 = new Label();
        Label spacer2 = new Label();
        addTab(swipe, res.getImage("road.jpg"), spacer1, "  ", "", "Join My Ride. ");
        addTab(swipe, res.getImage("viewlogo.png"), spacer2, "  ", "", "Join My Ride. ");

        swipe.setUIID("Container");
        swipe.getContentPane().setUIID("Container");
        swipe.hideTabs();

        ButtonGroup bg = new ButtonGroup();
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
        g.fillArc(0, 0, size, size, 0, 360);
        //RadioButton[] rbs = new RadioButton[swipe.getTabCount()];
        FlowLayout flow = new FlowLayout(CENTER);
        flow.setValign(BOTTOM);
        Container radioContainer = new Container(flow);
//        for (int iter = 0; iter < rbs.length; iter++) {
//            rbs[iter] = RadioButton.createToggle(unselectedWalkthru, bg);
//            rbs[iter].setPressedIcon(selectedWalkthru);
//            rbs[iter].setUIID("Label");
//            radioContainer.add(rbs[iter]);
//        }
//
//        rbs[0].setSelected(true);
//        swipe.addSelectionListener((i, ii) -> {
//            if (!rbs[ii].isSelected()) {
//                rbs[ii].setSelected(true);
//            }
//        });

        Component.setSameSize(radioContainer, spacer1, spacer2);
        add(LayeredLayout.encloseIn(swipe, radioContainer));

        ButtonGroup barGroup = new ButtonGroup();
        //barGroup.setUIID("SelectBar");
        RadioButton all = RadioButton.createToggle("All", barGroup);
        all.setUIID("SelectBar");
        RadioButton featured = RadioButton.createToggle("Featured", barGroup);
        featured.setUIID("SelectBar");
        RadioButton popular = RadioButton.createToggle("Popular", barGroup);
        popular.setUIID("SelectBar");
        RadioButton myFavorite = RadioButton.createToggle("My Favorites", barGroup);
        myFavorite.setUIID("SelectBar");
        Label arrow = new Label(res.getImage("news-tab-down-arrow.png"), "Container");

        add(LayeredLayout.encloseIn(
                GridLayout.encloseIn(1, all),
                FlowLayout.encloseBottom(arrow)
        ));

        all.setSelected(true);
        arrow.setVisible(false);
        addShowListener(e -> {
            arrow.setVisible(true);
            updateArrowPosition(all, arrow);
        });
//        bindButtonSelection(all, arrow);
//        bindButtonSelection(featured, arrow);
//        bindButtonSelection(popular, arrow);
//        bindButtonSelection(myFavorite, arrow);

        // special case for rotation
        addOrientationListener(e -> {
            updateArrowPosition(barGroup.getRadioButton(barGroup.getSelectedIndex()), arrow);
        });

        connectionRequest = new ConnectionRequest() {
            List<Evenement> event = new ArrayList<>();

            @Override
            protected void readResponse(InputStream in) throws IOException {
                
                JSONParser json = new JSONParser();
                try {
                    Reader reader = new InputStreamReader(in, "UTF-8");

                    Map<String, Object> data = json.parseJSON(reader);
                    List<Map<String, Object>> content = (List<Map<String, Object>>) data.get("event");
                    event.clear();

                    for (Map<String, Object> obj : content) {
                       
                        Evenement eve1 = new Evenement();
                        int x=Integer.parseInt(obj.get("Id").toString());
                        eve1.setId((Integer) x);
                        eve1.setDate((String) obj.get("datee"));
                        eve1.setDescription((String) obj.get("description"));
                        eve1.setLibelle((String) obj.get("libelle"));
                        eve1.setLieu((String) obj.get("lieu"));
                        event.add(eve1) ;
                     
                    }
                } catch (IOException err) {
                    Log.e(err);
                }
            }

            @Override
            protected void postResponse() {
                //System.out.println(libs.size());

          
                for (Evenement l : event) {
                    addButton(res.getImage("calendar.png"), l.getLibelle(), l.getDescription(), l.getLieu(), l.getDate(), l , res,l.getId());
                }

            }
        };
        connectionRequest.setUrl("http://localhost/Mobile/pi/evenement/selectEvenement.php");
        NetworkManager.getInstance().addToQueue(connectionRequest);

    }

    private void updateArrowPosition(Button b, Label arrow) {
        arrow.getUnselectedStyle().setMargin(LEFT, b.getX() + b.getWidth() / 2 - arrow.getWidth() / 2);
        arrow.getParent().repaint();

    }

    private void addTab(Tabs swipe, Image img, Label spacer, String likesStr, String commentsStr, String text) {
        int size = Math.min(Display.getInstance().getDisplayWidth(), Display.getInstance().getDisplayHeight());
        if (img.getHeight() < size) {
            img = img.scaledHeight(size);
        }
        Label likes = new Label(likesStr);
        Style heartStyle = new Style(likes.getUnselectedStyle());
        heartStyle.setFgColor(0xff2d55);
        FontImage heartImage = FontImage.createMaterial(FontImage.MATERIAL_FAVORITE, heartStyle);
        likes.setIcon(heartImage);
        likes.setTextPosition(RIGHT);

        Label comments = new Label(commentsStr);
        FontImage.setMaterialIcon(comments, FontImage.MATERIAL_CHAT);
        if (img.getHeight() > Display.getInstance().getDisplayHeight() / 2) {
            img = img.scaledHeight(Display.getInstance().getDisplayHeight() / 2);
        }
        ScaleImageLabel image = new ScaleImageLabel(img);
        image.setUIID("Container");
        image.setBackgroundType(Style.BACKGROUND_IMAGE_SCALED_FILL);
        Label overlay = new Label(" ", "ImageOverlay");

        Container page1
                = LayeredLayout.encloseIn(
                        image,
                        overlay,
                        BorderLayout.south(
                                BoxLayout.encloseY(
                                        new SpanLabel(text, "LargeWhiteText"),
                                        //FlowLayout.encloseIn(likes, comments),
                                        spacer
                                )
                        )
                );

        swipe.addTab("", page1);
    }

    private void addButton(Image img, String title, String likeCount, String commentCount, String da, Evenement ev, Resources res,int id) {
        int height = Display.getInstance().convertToPixels(11.5f);
        int width = Display.getInstance().convertToPixels(14f);
        Button image = new Button(img.fill(width, height));
        image.setUIID("Label");
        Container cnt = BorderLayout.west(image);
        cnt.setLeadComponent(image);
        TextArea ta = new TextArea(title);
        ta.setUIID("NewsTopLine");
        ta.setEditable(false);
        Label d = new Label(da + " (date)  ", "NewsBottomLine");
        d.setTextPosition(RIGHT);

       
      
        Button supprimer = new Button("supprimer"); 
        supprimer.setSize(new Dimension(80, 15));
//        Button modifier = new Button("Modifier"); 
//        modifier.setSize(new Dimension(80, 15));

       
        cnt.add(BorderLayout.CENTER,
                BoxLayout.encloseY(
                        ta,
                        d
                        
                ));
        add(cnt);
        add(supprimer);
//        add(modifier);
        
       
       
        
        supprimer.addActionListener(new ActionListener() {

             @Override
                         public void actionPerformed(ActionEvent evt) {
                             ConnectionRequest req = new ConnectionRequest();
                             req.setUrl("http://localhost/Mobile/pi/evenement/supprimerEvenement.php?id=" +ev.getId());
               
                             req.addResponseListener(new ActionListener<NetworkEvent>() {
                                 
                             @Override
                             public void actionPerformed(NetworkEvent evt) {
                                 byte[] data = (byte[]) evt.getMetaData();
                                 String s = new String(data);

                                 if (s.endsWith("ss")) {
                                 Dialog.show("Confirmation", "suppression effectuée avec succès", "Ok", null);
                                 refreshTheme();
                                 
                        } else Dialog.show("annulation", "noooo", "Ok", null);
                    
                     }
                 });
                                   NetworkManager.getInstance().addToQueue(req);
                            
                         }
        });
//        modifier.addActionListener(new ActionListener() {
//
//            @Override
//            public void actionPerformed(ActionEvent evt) {
//                EventUpdate eventupdate=new EventUpdate(res, ev);
//                eventupdate.getF();
//            }
//        });
//        image.addActionListener(e -> {
////            MapContainer mapContainer = new MapContainer();
////            mapContainer.setMapType(MapContainer.MAP_TYPE_HYBRID);
////            mapContainer.setShowMyLocation(true);
//            EventUpdate evup=new EventUpdate(res, ev);
//            
//            Form f1 = new BaseForm();
//
//          
//            //f1.addComponent(mapContainer);
//            Button b1 = new Button("back");
//            //f1.add(FlowLayout., b1);
////            f1.add(LayeredLayout.encloseIn(
////                    evup,
////                    FlowLayout.encloseCenter(b1)
////            ));
//            b1.addActionListener(new ActionListener() {
//                @Override
//                public void actionPerformed(ActionEvent evt) {
//                    new EventsForm(res).show();
//                }
//            });
//            f1.show();
//
//            //Button comment = new Button(img.fill(width, height));
//        });

    }

//    private void bindButtonSelection(Button b, Label arrow) {
//        b.addActionListener(e -> {
//            if (b.isSelected()) {
//                updateArrowPosition(b, arrow);
//            }
//        });
//    }

  
}
