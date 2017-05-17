package com.codename1.uikit.cleanmodern;

import com.codename1.googlemaps.MapContainer;
import com.codename1.io.ConnectionRequest;
import com.codename1.io.JSONParser;
import com.codename1.io.NetworkManager;
import com.codename1.maps.Coord;
import com.codename1.maps.providers.GoogleMapsProvider;
import com.codename1.ui.Command;
import com.codename1.ui.Display;
import com.codename1.ui.FontImage;
import com.codename1.ui.Form;
import com.codename1.ui.Toolbar;
import com.codename1.ui.layouts.BorderLayout;
import com.codename1.ui.plaf.Style;
import com.codename1.ui.plaf.UIManager;
import com.codename1.ui.util.Resources;
import com.codename1.util.Callback;

import java.io.ByteArrayInputStream;
import java.io.IOException;
import java.io.InputStream;
import java.io.InputStreamReader;
import java.util.ArrayList;
import java.util.LinkedHashMap;
import java.util.Map;

public class mapUI {
    private static final String MAPS_KEY = "AIzaSyBKXNneTVr8yaKCVD_sCEFj9CNCtcU85V8"; // Your maps key here
    private Form current;

    public void init(Object context) {
        try {
            Resources theme = Resources.openLayered("/theme");
            UIManager.getInstance().setThemeProps(theme.getTheme(theme.getThemeResourceNames()[0]));
        } catch (IOException e) {
            e.printStackTrace();
        }
    }

    public void start(Coord src, Coord dest) {
        if (current != null) {
            current.show();
            return;
        }
        
                
        Form hi = new Form("Votre parcours du trajet");
        hi.setLayout(new BorderLayout());
        final MapContainer cnt = new MapContainer(new GoogleMapsProvider(MAPS_KEY));
        hi.addComponent(BorderLayout.CENTER, cnt);
        cnt.setCameraPosition(new Coord(36.8065, 10.1815));

        // HERE
        // get the routes using google directions api
        String encoded = getRoutesEncoded(src, dest);
        // decode the routes in an arry of coords
        Coord[] coords = decode(encoded);

        cnt.addPath(coords);

        
        Style s = new Style();
        s.setBgTransparency(0);
        s.setFgColor(0x007700);
        cnt.addMarker(FontImage.createMaterial(FontImage.MATERIAL_LOCATION_ON, s).toEncodedImage(), src, "", "", null);
        cnt.addMarker(FontImage.createMaterial(FontImage.MATERIAL_LOCATION_ON, s).toEncodedImage(), dest, "", "", null);

        hi.show();
    }

    public void stop() {
        current = Display.getInstance().getCurrent();
    }

    public void destroy() {
    }

    // src: https://github.com/googlemaps/android-maps-utils/blob/master/library/src/com/google/maps/android/PolyUtil.java
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
                if (routes.size() > 0)
                    ret = ((LinkedHashMap) ((LinkedHashMap) ((ArrayList) response.get("routes")).get(0)).get("overview_polyline")).get("points").toString();
            }
        } catch (IOException e) {
            e.printStackTrace();
        }
        return ret;
    }
    
        public static void getRoutesEncodedAsync(Coord src, Coord dest, Callback callback) {
        ConnectionRequest request = new ConnectionRequest("https://maps.googleapis.com/maps/api/directions/json", false) {
            @Override
            protected void readResponse(InputStream input) throws IOException {
                String ret = "";
                Map<String, Object> response = new JSONParser().parseJSON(new InputStreamReader(input, "UTF-8"));
                if (response.get("routes") != null) {
                    ArrayList routes = (ArrayList) response.get("routes");
                    if (routes.size() > 0)
                        ret = ((LinkedHashMap) ((LinkedHashMap) ((ArrayList) response.get("routes")).get(0)).get("overview_polyline")).get("points").toString();
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
