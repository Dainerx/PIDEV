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
import com.codename1.ui.Dialog;
import com.codename1.ui.events.ActionListener;
import com.codename1.ui.util.Resources;
import com.codename1.uikit.cleanmodern.*;
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
public class CommentServices {

    String json;
    PublicationProfil pp = new PublicationProfil(); 
    MembreServices ms = new MembreServices(); 
     ArrayList<Commentaire> List = new ArrayList<>() ; 
    public List<Commentaire> getCommentsPerPub(PublicationProfil Pr ) {

        ConnectionRequest con = new ConnectionRequest();
        con.setUrl("http://localhost/PIDEVMobile/GestionProfile/Comments.php?action=get&idPublication="+Pr.getId());

        con.addResponseListener(new ActionListener<NetworkEvent>() {

            @Override
            public void actionPerformed(NetworkEvent evt) {

                json = new String(con.getResponseData());
                List=getListCommentaires(json,Pr) ; 
                System.out.println(List);
                
                
               
            }
            
        });
        NetworkManager.getInstance().addToQueueAndWait(con);
        
        return List ; 

    }


    
   public ArrayList<Commentaire> getListCommentaires(String json,PublicationProfil pr) {
        ArrayList<Commentaire> listComments = new ArrayList<>();

        try {

            JSONParser j = new JSONParser();

            Map<String, Object> Commentaires = j.parseJSON(new CharArrayReader(json.toCharArray()));

            System.out.println();
            List<Map<String, Object>> list = (List<Map<String, Object>>) Commentaires.get("Comment");

            
            for (Map<String, Object> obj : list) {
               Commentaire com = new Commentaire(); 
                com.setIdCom(Integer.parseInt(obj.get("id_com").toString()));
                com.setTexte(obj.get("contenu").toString());
               // Date date = new Date(obj.get("date").toString()) ; 
                //com.setDate(date);
                com.setIdPub(pr);
                Membre m = new Membre() ; 
                m=ms.GetUserById(Integer.parseInt(obj.get("id_Membre").toString()));
                com.setIdMembre(m);
                
      
                listComments.add(com);

          
            }
        } catch (IOException ex) {
            
         }
        return listComments;
    

    

}
   
   public void addcomment(String text,Membre m,PublicationProfil Pr,Resources res)
   {
        ConnectionRequest request = new ConnectionRequest();
           
          
            request.addResponseListener(new ActionListener<NetworkEvent>() {

                    @Override
                    public void actionPerformed(NetworkEvent evt) {
                        byte[] data = (byte[]) evt.getMetaData();
                        String s = new String(data);

                        if (s.equals("success")) {
                            Dialog.show("Confirmation", "Comment Aded", "Ok", null);
                            CommentsForm ns = null; 
                            ns = new CommentsForm(res, Pr);
                            ns.show();
                         
                        }
                    }
                });

           request.setPost(true);
           request.setHttpMethod("POST");
           request.addArgument("text", text);
           request.addArgument("idMembre",Integer.toString(m.getId()) );
           request.addArgument("idPublication",Integer.toString(Pr.getId()) );
           
           request.setUrl("http://localhost/PIDEVMobile/GestionProfile/Comments.php?action=add");
           
           NetworkManager.getInstance().addToQueueAndWait(request);

        
       
   }

}