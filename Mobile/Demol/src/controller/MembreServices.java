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
public class MembreServices {

    String json;
    Membre m = new Membre();

    public Membre GetUserById(Integer id) {

        ConnectionRequest con = new ConnectionRequest();
        con.setUrl("http://localhost/PIDEVMobile/GestionProfile/selectMembers.php?idMembre=all");

        con.addResponseListener(new ActionListener<NetworkEvent>() {

            @Override
            public void actionPerformed(NetworkEvent evt) {

                json = new String(con.getResponseData());
                ArrayList<Membre> List = getListMembres(json);

                for (Membre x : List) {
                    if (x.getId() == id) {
                        m = x;
                    }
                }
            }

        });
        NetworkManager.getInstance().addToQueueAndWait(con);

        return m;

    }

    public ArrayList<Membre> getListMembres(String json) {
        ArrayList<Membre> listMembres = new ArrayList<>();

        try {

            JSONParser j = new JSONParser();

            Map<String, Object> Membres = j.parseJSON(new CharArrayReader(json.toCharArray()));

            List<Map<String, Object>> list = (List<Map<String, Object>>) Membres.get("Membre");

            for (Map<String, Object> obj : list) {
                Membre m = new Membre();
                m.setId(Integer.parseInt(obj.get("id").toString()));
                m.setNom(obj.get("name").toString());
                m.setMail(obj.get("email").toString());
                m.setLogin(obj.get("username").toString());
                m.setNumerotel(obj.get("numero_tel").toString());
                m.setMotPasse(obj.get("password").toString());
                listMembres.add(m);

            }

        } catch (IOException ex) {
        }
        return listMembres;

    }

}
