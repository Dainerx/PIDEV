/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Techniques;

import modal.Cercle;
import modal.Membre;
import assets.MyConnection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;
import java.util.Objects;
import java.util.stream.Collectors;

/**
 *
 * @author xagta1
 */
public class CrudCercle {
     public void InitCercle (int membreId) throws SQLException
    {
        Statement state = MyConnection.getInstance().createStatement() ; 
        
        String req = "insert into following (id_membre) values ("+membreId+")" ; 
        state.executeUpdate(req) ; 

    }
    
    public void addFollower (Membre followedMembre , Membre followerMember) throws SQLException
    {
        Statement state = MyConnection.getInstance().createStatement() ; 
        
        String req = "insert into following (Follower,Followed) values ("+followedMembre.getId()+","+followerMember.getId()+")" ; 
        String req1 = "insert into following (Follower,Followed) values ("+followerMember.getId()+","+followedMembre.getId()+")" ; 

        state.executeUpdate(req) ; 
        state.executeUpdate(req1) ; 
    }
    
    public void unfollow (Membre followed , Membre follower) throws SQLException
    {
             String req = "delete from following where followed=? and follower=? ; " ;   
         PreparedStatement preparedStatement = MyConnection.getInstance().prepareStatement(req) ; 
        
        
                
                preparedStatement.setInt(1, followed.getId());
                preparedStatement.setInt(2, follower.getId());
                System.out.println("exuting query==>1");
        preparedStatement.executeUpdate() ; 
        
         String req2 = "delete from following where follower=? and followed=? ; " ;   
         PreparedStatement preparedStatement2 = MyConnection.getInstance().prepareStatement(req2) ; 
        
        
               System.out.println("followed==>"+followed);
               System.out.println("follower==>"+follower);
                preparedStatement2.setInt(1, followed.getId());
                preparedStatement2.setInt(2, follower.getId());
                System.out.println("exuting query==>2");
        preparedStatement2.executeUpdate() ; 
    }
    
    public List<Cercle> readAll() throws SQLException
    {
        
        CrudMembre CrudM = new CrudMembre() ; 
        Statement ste = MyConnection.getInstance().createStatement() ; 
        
        String req = "Select * from following C  join membre M where C.Follower=M.id  ; " ; 
        
       ResultSet set= ste.executeQuery(req) ; 
       List<Cercle> C = new ArrayList<>() ; 
       Cercle Cer ; 
       
       while (set.next())
       {
          Membre m= CrudM.getMembreById(set.getInt("Follower")) ; 
          Membre m1= CrudM.getMembreById(set.getInt("Followed")) ; 

          
           Cer = new Cercle(m,m1); 
           C.add(Cer) ; 
           
       }
       return C ; 
    }
    
    
    
    public List<Membre> getFollowersIdByMembre(Membre M) throws SQLException 
    {
       return  readAll().stream().filter(m->{
           return Objects.equals(m.getFollowed().getId(), M.getId());
       }).map(m->m.getFollower()).collect(Collectors.toList()) ; 
       
    }
    
    public boolean isfollowed(Membre connected,Membre visted) throws SQLException
    {
        if(getFollowersIdByMembre(visted).contains(connected))
            return true ; 
        else return false ; 
        
    }
    
    
    
}
