/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package services;

import modal.Evenement;
import modal.Feedback;
import assets.MyConnection;
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
public class CrudEvenement {
    
    private TableColumn col;
    ObservableList<ObservableList> projet;
    
    
     public void ajouterEvenement(Evenement e)
        {
            String req = "insert into evenement (libelle,description,date,lieu) values (?,?,?,?)" ;
            try {
            PreparedStatement st = MyConnection.getInstance().prepareStatement(req);
            st.setString(1, e.getLibelle());
            st.setString(2, e.getDescription());
            st.setDate(3, e.getDate());
            st.setString(4, e.getLieu());



            st.executeUpdate();
        } catch (SQLException ex) {
            ex.printStackTrace();
        }
            
        }
     
     public void supprimerEvenement (String id){
  int confirmer = JOptionPane.showConfirmDialog(null, " Voulez vous vraiment supprimer cet évènement ??");
         if(confirmer==0){
               
        String req = "delete from evenement where id = ?";
        try {
            PreparedStatement ps = MyConnection.getInstance().prepareStatement(req);
            ps.setString(1, id);
            ps.executeUpdate();
        } catch (SQLException ex) {
                        ex.printStackTrace();

        }
    }
     }

      public List<Evenement> readAll() throws SQLException
    {
        Statement ste = MyConnection.getInstance().createStatement();
        String req ="select * from evenement";
         List<Evenement> lst = new ArrayList<>();
         ResultSet s =  ste.executeQuery(req);
         Evenement e;
         
         while(s.next())
         {
             
             e= new Evenement( s.getString("libelle"),s.getString("description"),s.getDate("date"),s.getString("lieu"));
             lst.add(e);
             
             
         }
        return lst;
    }
      
      public void modifierEvenement(Evenement e) throws SQLException
    {
        String updateTableSQL = "UPDATE evenement SET libelle = ? ,description= ? , date= ?,lieu=? WHERE id = ?";
        PreparedStatement st = MyConnection.getInstance().prepareStatement(updateTableSQL);
       st.setString(1, e.getLibelle());
            st.setString(2, e.getDescription());
          st.setDate(3, e.getDate());
                      st.setString(4, e.getLieu());

        st.setInt(5, e.getId());
       

        st.executeUpdate();
    }
      public static LocalDate fromDate(Date date) {
    Instant instant = Instant.ofEpochMilli(date.getTime());
    return LocalDateTime.ofInstant(instant, ZoneId.systemDefault())
        .toLocalDate();
  }
    public ResultSet findById(String id) throws SQLException 
    {
        String req = "select * from evenement where id = "+id;
        PreparedStatement st = MyConnection.getInstance().prepareStatement(req);
        
        ResultSet s = st.executeQuery(req);
         
         if(s.next())
         {
             return s;
 
         }
         return null;
    }
         public List<Evenement> FindLike(String lib) throws SQLException 
    {
        String req = "select * from evenement where libelle like '%  "+lib+" %'";
        PreparedStatement st = MyConnection.getInstance().prepareStatement(req);
        List<Evenement> lst = new ArrayList<>();
        ResultSet s = st.executeQuery(req);
         
         if(s.next())
         {
             System.out.println("Test");
             String libelle=s.getString("libelle");
             String description=s.getString("description");
             Date date=s.getDate("date");
                          String lieu=s.getString("lieu");

          lst.add(new  Evenement(libelle,description,date,lieu));
 
         }
         return lst;
    }
          public void AfficherTable(TableView tableEvt) {
        projet = FXCollections.observableArrayList();
        tableEvt.getColumns().clear();
        tableEvt.refresh();
        try {
            
            String sqlp = "SELECT Id,libelle,description,date,lieu FROM evenement";
            ResultSet rsp = MyConnection.getInstance().createStatement().executeQuery(sqlp);
            // Titres de colonnes
            String[] titres = {
                "Id Evt",
                "Libelle",
                "description",
                
                "date",
                "lieu",
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
                tableEvt.getColumns().addAll(col);
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
            tableEvt.setItems(projet);
        } catch (SQLException e) {
            System.out.println("Erreur " + e);
        }
    }
     public void recherche(TableView tableFeedback,String v) {
        projet = FXCollections.observableArrayList();
        
        tableFeedback.getColumns().clear();
        tableFeedback.refresh();
        try {
            
            String sqlp =  "SELECT Id,libelle,description,date,lieu FROM evenement WHERE libelle LIKE '%" + v + "%' OR description LIKE '%" + v + "%' OR lieu LIKE '%" + v + "%' ORDER BY Id DESC";
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
     

}
