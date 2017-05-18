/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package services;
import java.sql.*;
import assets.MyConnection;
import modal.ResponsableAgence;
import java.util.ArrayList;
import java.util.List;
/**
 *
 * @author Ameni
 */
public class ServiceResponsableAgence {
    public void insertResponsableAgence(ResponsableAgence a)
    {
        String req="insert into responsable_agence (username,password,email,nom) values(?,?,?,?)";
        try {
            PreparedStatement ps= MyConnection.getInstance().prepareStatement(req);
            ps.setString(1,a.getUsername());
            ps.setString(2,a.getPassword());
            ps.setString(3,a.getEmail());
            ps.setString(4,a.getNom());
            
            ps.executeUpdate();
            System.out.println(" Responsable Agence ajouté");
        }
        catch (Exception e)
        {
            e.printStackTrace();
            System.out.println(" probleme d'ajout de responsable de l'agence");
        }
        
    }
    public void deleteResponsableAgence(int id)
    {
        String req="delete from responsable_agence where (id=?)";
        try {
            
            PreparedStatement ps=MyConnection.getInstance().prepareStatement(req);
            ps.setInt(1,id);
            ps.executeUpdate();
            System.out.println("responsable agence supprimé");
        }
    
    catch (Exception e)
    {
        e.printStackTrace();
        System.out.println("probleme de suppression de responsable agence");
    }
    }
    
    public List<ResponsableAgence> DisplayResponsableAgence()
    {
        String req="select * from responsable_agence";
        
        List<ResponsableAgence> responsables= new ArrayList<ResponsableAgence>();
        try {
            Statement state = MyConnection.getInstance().createStatement();
            ResultSet result = state.executeQuery(req);
            while (result.next()) {
            int i = result.getInt("id");
            String a = result.getString("username");
            String b = result.getString("password");
            String c = result.getString("email");
            String d = result.getString("nom");
            Date e = result.getDate("DateInscri");
            ResponsableAgence p=new ResponsableAgence(i,a,b,c,d,e);
            responsables.add(p);
            }
            return responsables;
        }
        
        catch (Exception e)
        {
            e.printStackTrace();
            System.out.println("probleme d'affichage de Responsable Agence");
        }
       return responsables; 
    }
    
    
    
    public ResponsableAgence getByUsername(String username , String password ) {
     
        String req = "select * from responsable_agence where (username=?)and (password=?)";
        ResponsableAgence u = null;
        try {
            PreparedStatement ps=MyConnection.getInstance().prepareStatement(req);
            ps.setString(1,username);
            ps.setString(2,password);
            ResultSet rs = ps.executeQuery();
            while (rs.next()) {
                u = new ResponsableAgence(rs.getInt(1), rs.getString(2), rs.getString(3), rs.getString(4), rs.getString(5),rs.getDate(6));
                 
            }
        } catch (Exception e) {
            System.out.println(" probleme edu.esprit.service.ServiceResponsableAgence.getById()");
            e.printStackTrace();
        }
        return u;
        //System.out.println(u);
       
    }
    
    
   public ResponsableAgence getByName(String nom) {
     
        String req = "select * from responsable_agence where nom=?";
        ResponsableAgence u = null;
        try {
            PreparedStatement ps=MyConnection.getInstance().prepareStatement(req);
            ps.setString(1,nom);
            ResultSet rs = ps.executeQuery();
            while (rs.next()) {
                u = new ResponsableAgence(rs.getInt(1), rs.getString(2), rs.getString(3), rs.getString(4), rs.getString(5),rs.getDate(6));
                 
            }
        } catch (Exception e) {
            System.out.println(" probleme edu.esprit.service.ServiceResponsableAgence.getByName()");
            e.printStackTrace();
        }
        return u;
        //System.out.println(u);
       
    }
     
     
//// à verifieerrrrrr !!!!! ////
     public void UpdateById(ResponsableAgence a,int id) {
         
        String req = "update responsable_agence set id=?,username=?,password=?,email=?,nom=?,DateInscri=? where id=?";
        try {
            PreparedStatement ps = MyConnection.getInstance().prepareStatement(req);
            ps.setString(1, a.getUsername());
            ps.setString(2, a.getPassword());
            ps.setString(3,a.getEmail());
            ps.setString(4, a.getNom());
            ps.setDate(5, a.getDateInscri());            
            ps.setInt(6,id);
            ps.setInt(7,a.getId());
            a.setId(id);
            ps.executeUpdate();
            System.out.println("updated ;D ==> "+a);
        } catch (Exception e) {
            System.out.println("edu.esprit.service.ServiceResponsableAgence.UpdateById()");
        }
    }
    
}
