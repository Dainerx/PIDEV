/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.codename1.uikit.cleanmodern;

import controller.*;
import entity.*;
import com.codename1.components.ScaleImageLabel;
import com.codename1.googlemaps.MapContainer;
import com.codename1.io.CharArrayReader;
import com.codename1.io.ConnectionRequest;
import com.codename1.io.JSONParser;
import com.codename1.io.NetworkEvent;
import com.codename1.io.NetworkManager;
import com.codename1.maps.Coord;
import com.codename1.maps.MapComponent;
import com.codename1.maps.providers.GoogleMapsProvider;
import com.codename1.ui.Button;
import com.codename1.ui.CheckBox;
import com.codename1.ui.ComboBox;
import com.codename1.ui.Command;
import com.codename1.ui.Container;
import com.codename1.ui.Dialog;
import com.codename1.ui.Display;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.Image;
import com.codename1.ui.TextArea;
import com.codename1.ui.TextField;
import com.codename1.ui.Toolbar;
import com.codename1.ui.events.ActionEvent;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.list.DefaultListModel;
import com.codename1.ui.plaf.Style;
import com.codename1.ui.spinner.DateSpinner;
import com.codename1.ui.spinner.DateTimeSpinner;
import com.codename1.ui.util.Resources;
import com.codename1.ui.util.UIBuilder;
import static com.codename1.uikit.cleanmodern.mapUI.decode;
import static com.codename1.uikit.cleanmodern.mapUI.getRoutesEncoded;
import com.codename1.util.Callback;
import java.io.ByteArrayInputStream;
import java.io.IOException;
import java.io.InputStream;
import java.io.InputStreamReader;
import java.util.ArrayList;
import java.util.LinkedHashMap;
import java.util.List;
import java.util.Map;

/**
 *
 * @author dainer
 */
public class addTrajetUI {

    private static final String MAPS_KEY = "AIzaSyBKXNneTVr8yaKCVD_sCEFj9CNCtcU85V8"; // Your maps key here, can be request via googledevelopers website
    private Container mapWrapper;
    private Form f, f1, f2;
    private TextField marque, modele, immatriculation, cout, nbrplace;
    private ComboBox<Direction> depart, destination;
    private ComboBox gamme;
    private MapComponent map;
    private CheckBox suivi;
    private TextArea description;
    private DateSpinner dateDepart;
    private Button next, next1, addTrajet;

    public addTrajetUI(Resources theme) {
        UIBuilder.registerCustomComponent("MapComponent", MapComponent.class);
        UIBuilder uib = new UIBuilder();
        f = uib.createContainer(theme, "addTrajet").getComponentForm();

        Toolbar tb = new Toolbar();
        tb.setLayout(new BorderLayout());
        Command cmRetour = new Command("Retour à l'acceuil");
        f.setToolbar(tb);
        tb.addCommandToSideMenu(cmRetour);
        f.setTitle("Etape 1");

        f.addCommandListener((evt) -> {
            if (evt.getCommand() == cmRetour) {
                trajetsUI ui = new trajetsUI(theme);
                ui.getForm().show();
            }

        });

        mapWrapper = (Container) uib.findByName("mapWrapper", f);
        depart = (ComboBox) uib.findByName("depart", f);
        destination = (ComboBox) uib.findByName("destination", f);
        depart = (ComboBox) uib.findByName("depart", f);
        next = (Button) uib.findByName("next", f);

        ConnectionRequest conn = new ConnectionRequest();
        conn.setUrl("http://localhost/PIDEVMobile/controller/TrajetController.php?id=7");
        conn.addResponseListener((NetworkEvent evtNetwork) -> {
            for (Direction d : getDirections(new String(conn.getResponseData()))) {
                depart.addItem(d);
                destination.addItem(d);
            }
            f.refreshTheme();
        });
        NetworkManager.getInstance().addToQueue(conn);

        //set false so user can only choose destination after he has chosen departure
        destination.setEnabled(false);
        //set true after choosing departure
        depart.addActionListener((evt) -> {
            destination.setEnabled(true);
        });
        destination.addActionListener((evt) -> {
            //Removing all content so map updates itself each time
            mapWrapper.removeAll();
            //constant mapcontainer to use with each event invoked
            final MapContainer cnt = new MapContainer(new GoogleMapsProvider(MAPS_KEY));
            mapWrapper.addComponent(cnt);
            //set position to Tunis after load
            cnt.setCameraPosition(new Coord(36.8065, 10.1815));
            Coord src = new Coord(depart.getSelectedItem().getLog(), depart.getSelectedItem().getLat());
            Coord dest = new Coord(destination.getSelectedItem().getLog(), destination.getSelectedItem().getLat());
            String encoded = getRoutesEncoded(src, dest);
            // decode the routes in an arry of coords
            Coord[] coords = decode(encoded);
            cnt.addPath(coords);
            Style s = new Style();
            s.setBgTransparency(0);
            s.setFgColor(0x007700);
            cnt.addMarker(FontImage.createMaterial(FontImage.MATERIAL_LOCATION_ON, s).toEncodedImage(), src, "", "", null);
            cnt.addMarker(FontImage.createMaterial(FontImage.MATERIAL_LOCATION_ON, s).toEncodedImage(), dest, "", "", null);

        });

        next.addActionListener((evt) -> {

            f1 = uib.createContainer(theme, "addTrajetI").getComponentForm();
            f1.show();

            Toolbar tb1 = new Toolbar();
            tb1.setLayout(new BorderLayout());
            Command cmRetour1 = new Command("Retour à l'étape 1");
            f1.setToolbar(tb1);
            tb1.addCommandToSideMenu(cmRetour1);
            f1.setTitle("Etape 2");

            f1.addCommandListener((evtRetour1) -> {
                if (evtRetour1.getCommand() == cmRetour1) {
                    f.show();
                }
            });

            marque = (TextField) uib.findByName("marque", f1);
            modele = (TextField) uib.findByName("modele", f1);
            immatriculation = (TextField) uib.findByName("immatriculation", f1);
            gamme = (ComboBox) uib.findByName("gamme", f1);
            gamme.addItem("Economical");
            gamme.addItem("Medium");
            gamme.addItem("Luxurious");

            next1 = (Button) uib.findByName("next1", f1);
            next1.addActionListener((evt1) -> {
                UIBuilder.registerCustomComponent("DateSpinner", DateSpinner.class);
                f2 = uib.createContainer(theme, "addTrajetII").getComponentForm();
                f2.show();

                Toolbar tb2 = new Toolbar();
                tb2.setLayout(new BorderLayout());
                Command cmRetour2 = new Command("Retour à l'étape 2");
                f2.setToolbar(tb2);
                tb2.addCommandToSideMenu(cmRetour2);
                f2.setTitle("Etape 3");

                f2.addCommandListener((evtRetour2) -> {
                    if (evtRetour2.getCommand() == cmRetour2) {
                        f1.show();
                    }
                });

                dateDepart = (DateSpinner) uib.findByName("datedepart", f2);
                description = (TextArea) uib.findByName("description", f2);
                cout = (TextField) uib.findByName("cout", f2);
                nbrplace = (TextField) uib.findByName("nbrplace", f2);
                addTrajet = (Button) uib.findByName("addTrajetButton", f2);
                suivi = (CheckBox) uib.findByName("suivi", f2);
                addTrajet.addActionListener((evtAdd) -> {
                    boolean allFilled = true;
                    //testing for all fields filled correctly.
                    if (description.getText().equals("") || nbrplace.getText().equals("") || cout.getText().equals("") || marque.getText().equals("") || modele.getText().equals("")
                            || immatriculation.getText().equals("")) {
                        allFilled = false;
                    }
                    if (allFilled == true) {
                        ConnectionRequest connAdd = new ConnectionRequest();
                        //Pay attention to Date Spinner date getting. Three gets are required and passed to php in order to cast it to SQL DateTime
                        connAdd.setUrl("http://localhost/PIDEVMobile/controller/TrajetController.php?id=1&depart=" + depart.getSelectedItem() + "&destination=" + destination.getSelectedItem()
                                + "&dayDepart=" + dateDepart.getCurrentDay() + "&monthDepart=" + dateDepart.getCurrentMonth() + "&yearDepart=" + dateDepart.getCurrentYear() + "&description=" + description.getText() + "&cout=" + cout.getText() + "&places=" + nbrplace.getText()
                                + "&suivie=0" + "&marque=" + marque.getText() + "&modele=" + modele.getText() + "&immatriculation=" + immatriculation.getText() + "&gamme=" + gamme.getSelectedItem());
                        Dialog.show("Yay", "Vous avez bien proposé ce trajet.", "OK", "Cancel");
                        NetworkManager.getInstance().addToQueue(connAdd);
                        trajetsUI uiRides = new trajetsUI(theme);
                    } else {
                        Dialog.show("Erreur", "Vous devez remplir tous les champs.", "OK", "Cancel");
                    }

                });
            });
        });

    }

    public ArrayList<Direction> getDirections(String json) {
        ArrayList<Direction> listDirections = new ArrayList<>();
        try {
            JSONParser j = new JSONParser();
            Map<String, Object> directionmap = j.parseJSON(new CharArrayReader(json.toCharArray()));
            List<Map<String, Object>> list = (List<Map<String, Object>>) directionmap.get("directions");

            for (Map<String, Object> obj : list) {
                Direction dir = new Direction(obj.get("city").toString(), Double.parseDouble(obj.get("latitude").toString()), Double.parseDouble(obj.get("longitude").toString()));
                listDirections.add(dir);
            }
        } catch (IOException ex) {
        }
        return listDirections;

    }

    public Form getForm() {
        return f;
    }

    //Decoding coordiantes in order to post data to Google servers, very trciky shifting algorithms are done here. This is published by Google developers.
    public static Coord[] decode(final String encodedPath) {
        int len = encodedPath.length();
        final ArrayList<Coord> path = new ArrayList<Coord>();
        int index = 0;
        int lat = 0;
        int lng = 0;

        while (index < len) {
            int result = 1;
            int shift = 0;
            int b;
            do {
                b = encodedPath.charAt(index++) - 63 - 1;
                result += b << shift;
                shift += 5;
            } while (b >= 0x1f);
            lat += (result & 1) != 0 ? ~(result >> 1) : (result >> 1);

            result = 1;
            shift = 0;
            do {
                b = encodedPath.charAt(index++) - 63 - 1;
                result += b << shift;
                shift += 5;
            } while (b >= 0x1f);
            lng += (result & 1) != 0 ? ~(result >> 1) : (result >> 1);

            path.add(new Coord(lat * 1e-5, lng * 1e-5));
        }
        Coord[] p = new Coord[path.size()];
        for (int i = 0; i < path.size(); i++) {
            p[i] = path.get(i);
        }

        return p;
    }

    public static String getRoutesEncoded(Coord src, Coord dest) {
        String ret = "";
        try {
            ConnectionRequest request = new ConnectionRequest("https://maps.googleapis.com/maps/api/directions/json", false);
            request.addArgument("key", MAPS_KEY);
            request.addArgument("origin", src.getLatitude() + "," + src.getLongitude());
            request.addArgument("destination", dest.getLatitude() + "," + dest.getLongitude());

            NetworkManager.getInstance().addToQueueAndWait(request);
            Map<String, Object> response = new JSONParser().parseJSON(new InputStreamReader(new ByteArrayInputStream(request.getResponseData()), "UTF-8"));
            if (response.get("routes") != null) {
                ArrayList routes = (ArrayList) response.get("routes");
                if (routes.size() > 0) {
                    ret = ((LinkedHashMap) ((LinkedHashMap) ((ArrayList) response.get("routes")).get(0)).get("overview_polyline")).get("points").toString();
                }
            }
        } catch (IOException e) {
            e.printStackTrace();
        }
        return ret;
    }

    //Asynchrous call since it is a JavaScript API
    public static void getRoutesEncodedAsync(Coord src, Coord dest, Callback callback) {
        ConnectionRequest request = new ConnectionRequest("https://maps.googleapis.com/maps/api/directions/json", false) {
            @Override
            protected void readResponse(InputStream input) throws IOException {
                String ret = "";
                Map<String, Object> response = new JSONParser().parseJSON(new InputStreamReader(input, "UTF-8"));
                if (response.get("routes") != null) {
                    ArrayList routes = (ArrayList) response.get("routes");
                    if (routes.size() > 0) {
                        ret = ((LinkedHashMap) ((LinkedHashMap) ((ArrayList) response.get("routes")).get(0)).get("overview_polyline")).get("points").toString();
                    }
                }
                callback.onSucess(ret);
            }

        };
        request.addArgument("key", MAPS_KEY);
        request.addArgument("origin", src.getLatitude() + "," + src.getLongitude());
        request.addArgument("destination", dest.getLatitude() + "," + dest.getLongitude());

        NetworkManager.getInstance().addToQueue(request);
    }
}
