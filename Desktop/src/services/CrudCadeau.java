/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package services;

import modal.Cadeau;
import assets.MyConnection;
import java.io.FileInputStream;
import java.io.InputStream;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
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
public class CrudCadeau {
    
    private TableColumn col;
    ObservableList<ObservableList> projet;
    
    public void ajouterCadeau(Cadeau c,FileInputStream fis,int length)
        {
            String req = "insert into cadeau (id_membre, libelle, photo) values (?,?,?)" ;
            try {
            PreparedStatement st = MyConnection.getInstance().prepareStatement(req);
            st.setInt(1, c.getM().getId());
            st.setString(2, c.getLibelle());
            st.setBinaryStream(3, fis,length);
           
            st.executeUpdate();
        } catch (SQLException ex) {
            ex.printStackTrace();
        }
            
        }
    
     public void AfficherTable(TableView tableEvt) {
        projet = FXCollections.observableArrayList();
        tableEvt.getColumns().clear();
        tableEvt.refresh();
        try {
            
            String sqlp = "SELECT Id_cadeau,id_membre,libelle FROM cadeau";
            ResultSet rsp = MyConnection.getInstance().createStatement().executeQuery(sqlp);
            // Titres de colonnes
            String[] titres = {
                "ID cadeau",
                "ID membre",
                "libelle",
                
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
     
      public ResultSet findById(String id) throws SQLException 
    {
        String req = "select * from cadeau where id_cadeau = "+id;
        PreparedStatement st = MyConnection.getInstance().prepareStatement(req);
        
        ResultSet s = st.executeQuery(req);
         
         if(s.next())
         {
             return s;
 
         }
         return null;
    }
      
      public void ModifierCadeau(Cadeau c,FileInputStream fis,int length)
        {
            String req = "UPDATE cadeau SET id_membre = ? , libelle=?,photo=?  WHERE id_cadeau = ?";
            try {
            PreparedStatement st = MyConnection.getInstance().prepareStatement(req);
            st.setInt(1, c.getM().getId());
            st.setString(2, c.getLibelle());
            st.setBinaryStream(3, fis,length);
            st.setInt(4,c.getId());
           
            st.executeUpdate();
        } catch (SQLException ex) {
            ex.printStackTrace();
        }
            
        }
     public void supprimerCadeay (String id){
  int confirmer = JOptionPane.showConfirmDialog(null, " Voulez vous vraiment supprimer ce cadeau ??");
         if(confirmer==0){
               
        String req = "delete from cadeau where id_cadeau = ?";
        try {
            PreparedStatement ps = MyConnection.getInstance().prepareStatement(req);
            ps.setString(1, id);
            ps.executeUpdate();
        } catch (SQLException ex) {
                        ex.printStackTrace();

        }

         }
}
     public ResultSet FindMembres() throws SQLException 
    {
        String req = "select * from membre";
        PreparedStatement st = MyConnection.getInstance().prepareStatement(req);
        
        ResultSet s = st.executeQuery(req);
         
         if(s.next())
         {
             return s;
 
         }
         return null;
    }
      public ResultSet FindMembresId(String username) throws SQLException 
    {
        String req = "select * from membre where username='"+username+"' and points_fidelite>=10";
        PreparedStatement st = MyConnection.getInstance().prepareStatement(req);
        
        ResultSet s = st.executeQuery(req);
         
         if(s.next())
         {
             return s;
 
         }
         return null;
    }
       public ResultSet findCadeauId(String id) throws SQLException 
    {
        String req = "select * from membre where username="+id;
        PreparedStatement st = MyConnection.getInstance().prepareStatement(req);
        
        ResultSet s = st.executeQuery(req);
         
         if(s.next())
         {
             return s;
 
         }
         return null;
    }
     
       
       
       public void AfficherTableId(TableView tableEvt,int id) {
        projet = FXCollections.observableArrayList();
        tableEvt.getColumns().clear();
        tableEvt.refresh();
        try {
            
            String sqlp = "SELECT Id_cadeau,id_membre,libelle FROM cadeau where id_membre="+id;
            ResultSet rsp = MyConnection.getInstance().createStatement().executeQuery(sqlp);
            // Titres de colonnes
            String[] titres = {
                "ID cadeau",
                "ID membre",
                "libelle",
                
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
            
            String sqlp =  "SELECT Id_cadeau,id_membre,libelle FROM cadeau WHERE libelle LIKE '%" + v +  "%' ORDER BY Id_cadeau DESC";
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
     public void modifierPoints(String id) throws SQLException
    {
        String updateTableSQL = "UPDATE membre SET points_fidelite =points_fidelite-10 WHERE id = "+id;
        PreparedStatement st = MyConnection.getInstance().prepareStatement(updateTableSQL);
        

        st.executeUpdate();
    }
       
}
