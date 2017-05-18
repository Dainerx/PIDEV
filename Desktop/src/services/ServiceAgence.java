/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package services;
import java.sql.*;
import assets.MyConnection;
import modal.Agence;
import java.util.ArrayList;
import java.util.List;
/**
 *
 * @author Ameni
 */
public class ServiceAgence {
     public void insertAgence(Agence a)
    {
        String req="insert into agence (nom,logo) values(?,?)";
        try {
            PreparedStatement ps= MyConnection.getInstance().prepareStatement(req);
            ps.setString(1,a.getNom());
            ps.setString(2,a.getLogo());
            ps.executeUpdate();
            System.out.println(" Agence ajouté");
        }
        catch (Exception e)
        {
            e.printStackTrace();
            System.out.println(" probleme d'ajout de l'agence");
        }
        
    }
    public void deleteAgence(int id)
    {
        String req="delete from agence where (id=?)";
        try {
            
            PreparedStatement ps=MyConnection.getInstance().prepareStatement(req);
            ps.setInt(1,id);
            ps.executeUpdate();
            System.out.println(" Agence supprimé");
        }
    
    catch (Exception e)
    {
        e.printStackTrace();
        System.out.println("probleme de suppression");
    }
    }
    
    public List<Agence> DisplayAgence()
    {
        String req="select * from agence";
        
        List<Agence> agences= new ArrayList<Agence>();
        try {
            Statement state = MyConnection.getInstance().createStatement();
            ResultSet result = state.executeQuery(req);
            while (result.next()) {
            int i = result.getInt("id");
            String str1 = result.getString("nom");
            String str2 =result.getString("logo");
            Agence p=new Agence(i,str1,str2);
            agences.add(p);
            }
            return agences;
        }
        
        catch (Exception e)
        {
            e.printStackTrace();
            System.out.println("probleme d'affichage d'agences");
        }
       return agences; 
    }
    
    
    
    public Agence getById(int id) {
     
        String req = "select * from agence where id =?";
        Agence u = null;
        try {
            PreparedStatement ps=MyConnection.getInstance().prepareStatement(req);
            ps.setInt(1, id);
            ResultSet rs = ps.executeQuery();
            while (rs.next()) {
                u = new Agence(rs.getInt(1), rs.getString(2), rs.getString(3));
                 
            }
        } catch (Exception e) {
            System.out.println(" probleme edu.esprit.service.ServiceAgence.getById()");
            e.printStackTrace();
        }
        return u;
        //System.out.println(u);
       
    }
    
    
     public Agence getByName(String nom) {
         
        String req = "SELECT * FROM agence WHERE nom=?";
        Agence u = null;
        try {
            PreparedStatement ps=MyConnection.getInstance().prepareStatement(req);
            ps.setString(1,nom);
            ResultSet rs = ps.executeQuery();
            while (rs.next()) {
                u = new Agence(rs.getInt(1), rs.getString(2), rs.getString(3));
             System.out.println("trouvé :D");    
            }
        } catch (Exception e) {
            System.out.println(" probleme edu.esprit.service.ServiceAgence.getByName()");
            e.printStackTrace();
        }
        return u;
       // System.out.println(u);
    }
     
     

     public void UpdateById(Agence a,int id) {
         
        String req = "update agence set nom=?,logo=?,id=? where id=?";
        try {
            PreparedStatement ps = MyConnection.getInstance().prepareStatement(req);
            ps.setString(1, a.getNom());
            ps.setString(2, a.getLogo());            
            ps.setInt(3, id);
            ps.setInt(4, a.getId());
            a.setId(id);
            ps.executeUpdate();
            System.out.println("updated ;D ==> "+a);
        } catch (Exception e) {
            e.printStackTrace();
            System.out.println("edu.esprit.service.ServiceAgence.UpdateById()");
        }
    }
}

