/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package services;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;
import java.util.logging.Level;
import java.util.logging.Logger;
import iservices.iService;
import modal.Commentaire;

/**
 *
 * @author sahar ghorch
 */
public class CommentaireMembre implements iService<Commentaire> {

    private Connection con;
    private Statement ste;
    private PreparedStatement pst;

    public CommentaireMembre() {
        this.con = DataSource.getInstance().getConnection();
    }

    @Override
    public void add(Commentaire c) {
        //throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.

        try {
            //System.out.println(t.getCom_created());
            Statement st = con.createStatement();

            st.executeUpdate("insert into commentaire_membre values(null,'" + c.getTexte() + "',CURRENT_TIMESTAMP(),'" + c.getId_membre_vise() + "','" + c.getId_personne() + "')");

        } catch (SQLException ex) {
            System.out.println(ex);
        }
    }

    public List<Commentaire> displayAllById11(int i) {
        // throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
        Commentaire l = null;
        List<Commentaire> commentaires = new ArrayList();
        try {
            pst = con.prepareStatement("select * from commentaire_membre where id_membre_vise=" + i + " ");
            ResultSet rs = pst.executeQuery();

            while (rs.next()) {
                //créer une instance vide de personne()
                l = new Commentaire();

                //récupérer les valeurs
                l.setId_com(rs.getInt(1));
                l.setId_membre_vise(rs.getInt(4));
                l.setId_personne(rs.getInt(5));
                l.setTexte(rs.getString(2));
                l.setDate(rs.getDate(3));
                commentaires.add(l);
                //afficher l'instane 
                //System.out.println(l);

            }

        } catch (SQLException ex) {
            Logger.getLogger(CommentaireServices.class.getName()).log(Level.SEVERE, null, ex);
        }

        return commentaires;

    }


    /*
    public void delete(Commentaire t) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

public void delete1(int id){
       // throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
   try{
              
                pst=con.prepareStatement("delete from commentaire  where id_com='"+id+"'");
        
           pst.executeUpdate();
           }catch(SQLException ex){
               System.out.println(ex);
           }
    }

    public List<Commentaire> displayAll() {
       // throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    Commentaire l = null;
  List<Commentaire> commentaires =new ArrayList();
        try{
            pst = con.prepareStatement("select * from commentaire ");
            ResultSet rs = pst.executeQuery();
          
            while(rs.next()){
                //créer une instance vide de personne()
                l = new Commentaire();
              
                //récupérer les valeurs
                l.setId_com(rs.getInt(1));
                l.setId_pub(rs.getInt(2));
                l.setId_personne(rs.getInt(3));
                l.setTexte(rs.getString(4));
                l.setDate(rs.getDate(5));
                commentaires.add(l);
                //afficher l'instane 
                //System.out.println(l);
                  
            }
        
        } catch (SQLException ex) {
            Logger.getLogger(CommentaireDAO.class.getName()).log(Level.SEVERE, null, ex);
        }    
        
    return commentaires;

    }
      public List<Commentaire> displayAllById(int i) {
       // throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    Commentaire l = null;
  List<Commentaire> commentaires =new ArrayList();
        try{
            pst = con.prepareStatement("select * from commentaire where id_pub="+i+" ");
            ResultSet rs = pst.executeQuery();
          
            while(rs.next()){
                //créer une instance vide de personne()
                l = new Commentaire();
              
                //récupérer les valeurs
                l.setId_com(rs.getInt(1));
                l.setId_pub(rs.getInt(4));
                l.setId_personne(rs.getInt(5));
                l.setTexte(rs.getString(2));
                l.setDate(rs.getDate(3));
                commentaires.add(l);
                //afficher l'instane 
                //System.out.println(l);
                  
            }
        
        } catch (SQLException ex) {
            Logger.getLogger(CommentaireDAO.class.getName()).log(Level.SEVERE, null, ex);
        }    
        
    return commentaires;

    }


    public Commentaire findById(Commentaire t) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }
     public Commentaire findById1(int id ) {

     Commentaire c = null;
  
        try{
 pst = con.prepareStatement("select * from commentaire where id_com="+id+" ");
            ResultSet rs = pst.executeQuery();
            
            while(rs.next()){
                //créer une instance vide de personne()
                c = new Commentaire();
                //récupérer les valeurs
                 c.setId_com(rs.getInt(1));
                c.setId_pub(rs.getInt(2));
                c.setId_personne(rs.getInt(3));
                c.setTexte(rs.getString(4));
                 c.setDate(rs.getDate(5));
               
                //afficher l'instane 
                //System.out.println(l);
            }
        
        } catch (SQLException ex) {
            Logger.getLogger(CommentaireDAO.class.getName()).log(Level.SEVERE, null, ex);
        }    
        
    return c;
    
    }

    public void update(Commentaire t) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
   
    }
    
     public void update1(Commentaire c,String s) {
     try{
                      System.out.println(c);

      pst=con.prepareStatement("update commentaire set texte='"+s+"' where texte='"+c.getTexte()+"'");
       
            pst.executeUpdate();
                
           }catch(SQLException ex){
               System.out.println(ex);
           }
     }
     
    
     */

    @Override
    public void update(Commentaire t, int id) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    @Override
    public void delete(int id) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    @Override
    public List<Commentaire> displayAll() {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    @Override
    public Commentaire findById(int id) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }
}
