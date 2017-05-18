/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package services;
import java.sql.*;
import assets.MyConnection;
import modal.Location;
import java.util.ArrayList;
import java.util.List;

/**
 *
 * @author Ameni
 */
public class ServiceLocation {
    
     public void insertLocation(Location a)
    {
        String req="insert into offre_location (id_vehicule,cout,offre,marque,modele,date_debut,date_fin) values(?,?,?,?,?,?,?)";
        try {
            PreparedStatement ps= MyConnection.getInstance().prepareStatement(req);
            
            ps.setInt(1,a.getIdVehicule());
            ps.setFloat(2,a.getCout());
            ps.setString(3,a.getOffre());
            ps.setString(4,a.getMarque());
            ps.setString(5,a.getModele());
            ps.setDate(6,null);
            ps.setDate(7,null);
            ps.executeUpdate();
            System.out.println("offre location ajouté");
        }
        catch (Exception e)
        {
            e.printStackTrace();
            System.out.println(" probleme d'ajout de l'offre de location");
        }
        
    }
    public void deleteLocation(int id)
    {
        String req="delete from offre_location where (id=?)";
        try {
            
            PreparedStatement ps=MyConnection.getInstance().prepareStatement(req);
            ps.setInt(1,id);
            ps.executeUpdate();
            System.out.println("voiture  supprimé");
        }
    
    catch (Exception e)
    {
        e.printStackTrace();
        System.out.println("probleme de suppression de location");
    }
    }
    
    public List<Location> DisplayLocation()
    {
        String req="select * from offre_location";
        
        List<Location> locations= new ArrayList<Location>();
        try {
            Statement state = MyConnection.getInstance().createStatement();
            ResultSet result = state.executeQuery(req);
            while (result.next()) {
            int i = result.getInt("id");
           
            int b = result.getInt("id_vehicule");
            float c = result.getFloat("cout");
            String str =result.getString("offre");
            String str1 =result.getString("marque");
            String str2 =result.getString("modele");
            Date d = result.getDate("date_debut");
            Date d1 = result.getDate("date_fin");
            Location p=new Location(i,b,c,str,str1,str2,d,d1);
            locations.add(p);
            }
            return locations;
        }
        
        catch (Exception e)
        {
            e.printStackTrace();
            System.out.println("probleme d'affichage de Location");
        }
       return locations; 
    }
    
    
    
    public Location getById(int id) {
     
        String req = "select * from offre_location where id =?";
        Location u = null;
        try {
            PreparedStatement ps=MyConnection.getInstance().prepareStatement(req);
            ps.setInt(1, id);
            ResultSet rs = ps.executeQuery();
            while (rs.next()) {
                u = new Location(rs.getInt(1),rs.getInt(2),rs.getFloat(3), rs.getString(4), rs.getString(5), rs.getString(6),rs.getDate(7),rs.getDate(8));
                 
            }
        } catch (Exception e) {
            System.out.println(" probleme recherche byID location");
            e.printStackTrace();
        }
        return u;
        //System.out.println(u);
       
    }
    
     
     
//// à verifieerrrrrr !!!!! ////
     public void UpdateById(Location a,int id) {
         
        String req = "update offre_location set id=?,id_vehicule=?,cout=?,offre=?,marque=?,modele=? where id=?";
        try {
            PreparedStatement ps = MyConnection.getInstance().prepareStatement(req);
           
            ps.setInt(1, a.getIdVehicule());
            ps.setFloat(2,a.getCout());
            ps.setString(3, a.getOffre());
            ps.setString(4, a.getMarque());
            ps.setString(5, a.getModele());
            ps.setInt(6, id);
            ps.setInt(7, a.getId());
            a.setId(id);
            ps.executeUpdate();
            System.out.println("updated ;D ==> "+a);
        } catch (Exception e) {
            System.out.println("edu.esprit.service.ServiceLocation.UpdateById()");
        }
    }
     
     
     public boolean ModifierLocation(Location an) {
try{

          String sql="update offre_location set cout=?,offre=?,marque=?,modele=? where id="+an.getId();
            PreparedStatement ps;
            ps =MyConnection.getInstance().prepareStatement(sql);
          
            ps.setFloat(1,an.getCout());
            ps.setString(2, an.getOffre());
            ps.setString(3, an.getMarque());
            ps.setString(4, an.getModele());
           
                 
            ps.executeUpdate();
        } catch (SQLException ex) {
            System.out.println("------ ERREUURRRRRR ----------");
        }
    
    
    
    return true;
    
    }
}

    

