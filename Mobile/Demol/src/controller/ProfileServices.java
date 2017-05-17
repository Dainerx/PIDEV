/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package controller;

import entity.*;
import com.codename1.io.CharArrayReader;
import com.codename1.io.ConnectionRequest;
import com.codename1.io.JSONParser;
import com.codename1.io.NetworkEvent;
import com.codename1.io.NetworkManager;
import com.codename1.ui.events.ActionListener;
import java.io.IOException;
import java.util.ArrayList;
import java.util.List;
import java.util.Map;

/**
 *
 * @author xagta1
 */
public class ProfileServices {

    String json;
    Profile returnProfile;

    public Profile getProfileByUser(Membre m) {

        ConnectionRequest con = new ConnectionRequest();
        con.setUrl("http://localhost/PIDEVMobile/GestionProfile/selectProfiles.php?idMembre=" + m.getId());

        con.addResponseListener(new ActionListener<NetworkEvent>() {

            @Override
            public void actionPerformed(NetworkEvent evt) {

                json = new String(con.getResponseData());

                returnProfile = getSingleProfile(json);

            }

        });
        NetworkManager.getInstance().addToQueueAndWait(con);

        return returnProfile;

    }

    public Profile getSingleProfile(String json) {
        ArrayList<Profile> listProfiles = new ArrayList<>();
        Profile p = new Profile();

        try {

            JSONParser j = new JSONParser();

            Map<String, Object> Profiles = j.parseJSON(new CharArrayReader(json.toCharArray()));

            Map<String, Object> list = (Map<String, Object>) Profiles.get("Profile");

            MembreServices ms = new MembreServices();

            String photo = (String) list.get("photo");
            String description = (String) list.get("description");
            String pseudo = (String) list.get("pseudo");
            Integer id = Integer.parseInt((String) list.get("id"));
            Integer idUser = Integer.parseInt((String) list.get("idMembre"));
            Membre idMembre = ms.GetUserById(idUser);

            p.setDescription(description);
            p.setId(id);
            p.setIdMembre(idMembre);
            p.setPhoto(photo);
            p.setPseudo(pseudo);

            System.out.println("//" + p);

        } catch (IOException ex) {
        }
        return p;

    }

    public String CheckProfileFollowing(Membre follower, Membre following) {

        ConnectionRequest con = new ConnectionRequest();
        con.setUrl("http://localhost/PIDEVMobile/GestionProfile/selectProfiles.php?Follower=" + follower.getId() + "&Followed=" + following.getId());
        con.addResponseListener(new ActionListener<NetworkEvent>() {

            @Override
            public void actionPerformed(NetworkEvent evt) {

                json = new String(con.getResponseData());

            }

        });
        NetworkManager.getInstance().addToQueueAndWait(con);

        return json;

    }

}
