/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package services;
import modal.Feedback;
import assets.MyConnection;
import java.sql.Connection;
import java.sql.Date;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.time.Instant;
import java.time.LocalDate;
import java.time.LocalDateTime;
import java.time.ZoneId;
import java.util.ArrayList;
import java.util.List;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.beans.property.SimpleStringProperty;
import javafx.beans.value.ObservableValue;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.geometry.Pos;
import javafx.scene.control.TableCell;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.util.Callback;
import javax.swing.JOptionPane;

/**
 *
 * @author k4
 */
public class CrudFeedback {
    
    
    
    private TableColumn col;
    ObservableList<ObservableList> projet;
    
    public void ajouterFeedback(Feedback f)
        {
            String req = "insert into feedback (id_membre, sujet, rating, commentaire,date,id_trajet) values (?,?,?,?,?,?)" ;
            try {
            PreparedStatement st = MyConnection.getInstance().prepareStatement(req);
            st.setInt(1, f.getM().getId());
            st.setString(2, f.getSujet());
            st.setInt(3, f.getRating());
            st.setString(4, f.getCommentaire());
            st.setDate(5, f.getDate());
            st.setInt(6, f.getT().getId());

            st.executeUpdate();
        } catch (SQLException ex) {
            ex.printStackTrace();
        }
            
        }
    
    
      public void AfficherTableFeedback(TableView tableFeedback) {
        projet = FXCollections.observableArrayList();
        
        tableFeedback.getColumns().clear();
        tableFeedback.refresh();
        try {
            
            String sqlp = "SELECT  id_feedback,id_membre,sujet,rating,commentaire,id_trajet FROM feedback";
            ResultSet rsp = MyConnection.getInstance().createStatement().executeQuery(sqlp);
            // Titres de colonnes
            String[] titres = {
                "Id ",
                "id_membre",
                "sujet",
                "rating",         
                "commentaire",
                "trajet",
                
            };
            // COLONNE DE TABLE AJOUTÉE DYNAMIQUEMENT            
            for (int i = 0; i < rsp.getMetaData().getColumnCount(); i++) {
                final int j = i;
                col = new TableColumn(titres[i]);
                col.setCellValueFactory(new Callback<TableColumn.CellDataFeatures<ObservableList, String>, ObservableValue<String>>() {
                    public ObservableValue<String> call(TableColumn.CellDataFeatures<ObservableList, String> parametre) {
                        return new SimpleStringProperty((String) parametre.getValue().get(j));
                    }
                });
                tableFeedback.getColumns().addAll(col);
                // Attribution de taille aux colonnes
                col.setMinWidth(100);
                System.out.println("Column [" + i + "] ");
                // Table de données Centre
                col.setCellFactory(new Callback<TableColumn<String, String>, TableCell<String, String>>() {
                    @Override
                    public TableCell<String, String> call(TableColumn<String, String> p) {
                        TableCell cell = new TableCell() {
                            @Override
                            protected void updateItem(Object t, boolean bln) {
                                if (t != null) {
                                    super.updateItem(t, bln);
                                    System.out.println(t);
                                    setText(t.toString());
                                    setAlignment(Pos.CENTER); // Réglage de l'alignement
                                }
                            }
                        };
                        return cell;
                    }
                });
            }
            // chargement à partir de la base de données
            while (rsp.next()) {
                //preparation de ligne
                ObservableList<String> row = FXCollections.observableArrayList();
                for (int i = 1; i <= rsp.getMetaData().getColumnCount(); i++) {
                    //iteration des colonnes
                    row.add(rsp.getString(i));
                }
                System.out.println("Row [1] added " + row);
                projet.addAll(row);
            }
            //ensuite l'ajout dans la tavle view
            tableFeedback.setItems(projet);
        } catch (SQLException e) {
            System.out.println("Erreur " + e);
        }
    }
    

 public void supprimerFeedback (String id){
  int confirmer = JOptionPane.showConfirmDialog(null, " Voulez vous vraiment supprimer ce commentaire ??");
         if(confirmer==0){
             String req = "delete from feedback where id_feedback = ?";
        try {
            PreparedStatement ps = MyConnection.getInstance().prepareStatement(req);
            ps.setString(1, id);
            ps.executeUpdate();
        } catch (SQLException ex) {
                        ex.printStackTrace();

        }
         }      
        
    }

//    public List<Feedback> readAll() throws SQLException
//    {
//        Statement ste = MyConnection.getInstance().createStatement();
//        String req ="select * from feedback";
//         List<Feedback> lst = new ArrayList<>();
//         ResultSet s =  ste.executeQuery(req);
//         Feedback f;
//         
//         while(s.next())
//         {
//             
//             f= new Feedback(s.getInt("id_feedback"),s.getInt("id_membre"), s.getString("sujet"),s.getInt("rating"),s.getString("commentaire"),s.getDate("date"));
//             lst.add(f);
//             
//             
//         }
//        return lst;
//    }
//    
    public void modifierFeedback( Feedback f) throws SQLException
    {
        String updateTableSQL = "UPDATE feedback SET id_membre = ? ,sujet= ? , rating= ? , commentaire= ?, date=? WHERE id_feedback = ?";
        PreparedStatement st = MyConnection.getInstance().prepareStatement(updateTableSQL);
        

        st.setInt(1, f.getM().getId());
        st.setString(2, f.getSujet());
        st.setInt(3, f.getRating());
        st.setString(4, f.getCommentaire());
                st.setDate(5, f.getDate());

        st.setInt(6, f.getIdFeedback());

        st.executeUpdate();
    }
    
     public ResultSet findById(String id) throws SQLException 
    {
        String req = "select * from feedback where id_feedback = "+id;
        PreparedStatement st = MyConnection.getInstance().prepareStatement(req);
        
        ResultSet s = st.executeQuery(req);
         
         if(s.next())
         {
             return s;
 
         }
         return null;
    }
    
     
      public void recherche(TableView tableFeedback,String v) {
        projet = FXCollections.observableArrayList();
        
        tableFeedback.getColumns().clear();
        tableFeedback.refresh();
        try {
            
            String sqlp =  "SELECT id_feedback,id_membre,sujet,rating FROM feedback WHERE commentaire LIKE '%" + v + "%' OR rating LIKE '%" + v + "%' OR sujet LIKE '%" + v + "%' ORDER BY id_feedback DESC";
            ResultSet rsp = MyConnection.getInstance().createStatement().executeQuery(sqlp);
            // Titres de colonnes
            String[] titres = {
                "Id ",
                "id_membre",
                "sujet",
                "rating",         
                "commentaire",
                "trajet",
                
            };
            // COLONNE DE TABLE AJOUTÉE DYNAMIQUEMENT            
            for (int i = 0; i < rsp.getMetaData().getColumnCount(); i++) {
                final int j = i;
                col = new TableColumn(titres[i]);
                col.setCellValueFactory(new Callback<TableColumn.CellDataFeatures<ObservableList, String>, ObservableValue<String>>() {
                    public ObservableValue<String> call(TableColumn.CellDataFeatures<ObservableList, String> parametre) {
                        return new SimpleStringProperty((String) parametre.getValue().get(j));
                    }
                });
                tableFeedback.getColumns().addAll(col);
                // Attribution de taille aux colonnes
                col.setMinWidth(100);
                System.out.println("Column [" + i + "] ");
                // Table de données Centre
                col.setCellFactory(new Callback<TableColumn<String, String>, TableCell<String, String>>() {
                    @Override
                    public TableCell<String, String> call(TableColumn<String, String> p) {
                        TableCell cell = new TableCell() {
                            @Override
                            protected void updateItem(Object t, boolean bln) {
                                if (t != null) {
                                    super.updateItem(t, bln);
                                    System.out.println(t);
                                    setText(t.toString());
                                    setAlignment(Pos.CENTER); // Réglage de l'alignement
                                }
                            }
                        };
                        return cell;
                    }
                });
            }
            // chargement à partir de la base de données
            while (rsp.next()) {
                //preparation de ligne
                ObservableList<String> row = FXCollections.observableArrayList();
                for (int i = 1; i <= rsp.getMetaData().getColumnCount(); i++) {
                    //iteration des colonnes
                    row.add(rsp.getString(i));
                }
                System.out.println("Row [1] added " + row);
                projet.addAll(row);
            }
            //ensuite l'ajout dans la tavle view
            tableFeedback.setItems(projet);
        } catch (SQLException e) {
            System.out.println("Erreur " + e);
        }
    }
     
     public static LocalDate fromDate(Date date) {
    Instant instant = Instant.ofEpochMilli(date.getTime());
    return LocalDateTime.ofInstant(instant, ZoneId.systemDefault())
        .toLocalDate();
  }
     
//        public ObservableList<Feedback> affichage() throws SQLException {
//        ObservableList<Feedback> list = FXCollections.observableArrayList();
//        String req ="select * from feedback";
//        
//        try{
//            Statement statement =MyConnection.getInstance().createStatement();
//            ResultSet resultat =  statement.executeQuery(req);
//      
//            while (resultat.next()){
//                Feedback f=new Feedback();
//                f.setIdFeedback(resultat.getInt("Id_feedback"));
//                f.setM.(resultat.getInt("Id_membre"));
//                f.setCommentaire(resultat.getString("commentaire"));
//                f.setSujet(resultat.getString("sujet"));
//                f.setDate(resultat.getDate("date"));
//                f.setRating(resultat.getInt("rating"));
//                list.add(f);
//            }
//            return list;
//    
//        }catch (SQLException e){
//             e.printStackTrace();
//            
//        }
//        return null;
//    }
//    
     
      public ResultSet FindMembreConn() throws SQLException 
    {
        String req = "select * from membre where id=6";
        PreparedStatement st = MyConnection.getInstance().prepareStatement(req);
        
        ResultSet s = st.executeQuery(req);
         
         if(s.next())
         {
             return s;
 
         }
         return null;
    }
      public ResultSet getStatRate() throws SQLException 
    {
        String req = "select rating from feedback";
        PreparedStatement st = MyConnection.getInstance().prepareStatement(req);
        
        ResultSet s = st.executeQuery(req);
         
         if(s.next())
         {
             return s;
 
         }
         return null;
    }
    
     public void AfficherTrajets(TableView tableFeedback) {
        projet = FXCollections.observableArrayList();
        
        tableFeedback.getColumns().clear();
        tableFeedback.refresh();
        try {
            
            String sqlp = "SELECT  id,destination,depart,cout,description FROM trajet";
            ResultSet rsp = MyConnection.getInstance().createStatement().executeQuery(sqlp);
            // Titres de colonnes
            String[] titres = {
                "Id ",
                "Destination",
                "Depart",
                "cout",         
                "Description",
                
            };
            // COLONNE DE TABLE AJOUTÉE DYNAMIQUEMENT            
            for (int i = 0; i < rsp.getMetaData().getColumnCount(); i++) {
                final int j = i;
                col = new TableColumn(titres[i]);
                col.setCellValueFactory(new Callback<TableColumn.CellDataFeatures<ObservableList, String>, ObservableValue<String>>() {
                    public ObservableValue<String> call(TableColumn.CellDataFeatures<ObservableList, String> parametre) {
                        return new SimpleStringProperty((String) parametre.getValue().get(j));
                    }
                });
                tableFeedback.getColumns().addAll(col);
                // Attribution de taille aux colonnes
                col.setMinWidth(100);
                System.out.println("Column [" + i + "] ");
                // Table de données Centre
                col.setCellFactory(new Callback<TableColumn<String, String>, TableCell<String, String>>() {
                    @Override
                    public TableCell<String, String> call(TableColumn<String, String> p) {
                        TableCell cell = new TableCell() {
                            @Override
                            protected void updateItem(Object t, boolean bln) {
                                if (t != null) {
                                    super.updateItem(t, bln);
                                    System.out.println(t);
                                    setText(t.toString());
                                    setAlignment(Pos.CENTER); // Réglage de l'alignement
                                }
                            }
                        };
                        return cell;
                    }
                });
            }
            // chargement à partir de la base de données
            while (rsp.next()) {
                //preparation de ligne
                ObservableList<String> row = FXCollections.observableArrayList();
                for (int i = 1; i <= rsp.getMetaData().getColumnCount(); i++) {
                    //iteration des colonnes
                    row.add(rsp.getString(i));
                }
                System.out.println("Row [1] added " + row);
                projet.addAll(row);
            }
            //ensuite l'ajout dans la tavle view
            tableFeedback.setItems(projet);
        } catch (SQLException e) {
            System.out.println("Erreur " + e);
        }
    }
    
 public void modifierTrajet(String id, String s) throws SQLException
    {
        String updateTableSQL = "UPDATE trajet SET destination = '"+ s +"' WHERE id = "+id;
        PreparedStatement st = MyConnection.getInstance().prepareStatement(updateTableSQL);
        

        st.executeUpdate();
    }
     public ResultSet findTrajet(String id) throws SQLException 
    {
        String req = "select * from trajet where id = "+id;
        PreparedStatement st = MyConnection.getInstance().prepareStatement(req);
        
        ResultSet s = st.executeQuery(req);
         
         if(s.next())
         {
             return s;
 
         }
         return null;
    }
    
       
       
       
}
