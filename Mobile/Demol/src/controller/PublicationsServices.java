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
import java.util.Date;
import java.util.List;
import java.util.Map;
import javafx.util.converter.LocalDateStringConverter;

/**
 *
 * @author xagta1
 */
public class PublicationsServices {

    String json;
    PublicationProfil pp = new PublicationProfil();
    ArrayList<PublicationProfil> List = new ArrayList<>();

    public List<PublicationProfil> getPubsByProfile(Profile Pr) {

        ConnectionRequest con = new ConnectionRequest();
        con.setUrl("http://localhost/PIDEVMobile/GestionProfile/selectpubs.php?idProfile=" + Pr.getId());

        con.addResponseListener(new ActionListener<NetworkEvent>() {

            @Override
            public void actionPerformed(NetworkEvent evt) {

                json = new String(con.getResponseData());
                List = getListPubs(json, Pr);
                System.out.println(List);

            }

        });
        NetworkManager.getInstance().addToQueueAndWait(con);

        return List;

    }

    public ArrayList<PublicationProfil> getListPubs(String json, Profile pr) {
        ArrayList<PublicationProfil> listEtudiants = new ArrayList<>();

        try {

            JSONParser j = new JSONParser();

            Map<String, Object> etudiants = j.parseJSON(new CharArrayReader(json.toCharArray()));

            System.out.println();
            List<Map<String, Object>> list = (List<Map<String, Object>>) etudiants.get("Pub");

            for (Map<String, Object> obj : list) {
                PublicationProfil Pubpr = new PublicationProfil();
                Pubpr.setId(Integer.parseInt(obj.get("id").toString()));
                Pubpr.setContenu(obj.get("contenu").toString());
                Pubpr.setPicpath(obj.get("picpath").toString());
                Pubpr.setIdProfil(pr);

                listEtudiants.add(Pubpr);

            }

        } catch (IOException ex) {
        }
        return listEtudiants;

    }

}
