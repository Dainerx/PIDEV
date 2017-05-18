/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package services;

import com.mysql.jdbc.Util;
import java.sql.*;
import java.time.LocalDate;
import iservices.InterfaceTrajet;
import java.util.ArrayList;
import java.util.List;
import modal.Membre;
import modal.Trajet;
import modal.Vehicule;
import modal.Passager;

/**
 *
 * @author dainer
 */
public class ServiceTrajet implements InterfaceTrajet {

    //private Trajet trajet;
    private Connection conn;

    public ServiceTrajet() {
        this.conn = DataSource.getInstance().getConnection();
    }

    @Override
    public void ajoutTrajet(Trajet trajet, Vehicule vehicule, ServiceVehicule crud, Membre membre) throws SQLException {
        int suivie;
        /*LocalDateTime dateinput;
        dateinput = LocalDateTime.now();*/
        crud.ajouterVehicule(vehicule);
        ResultSet set = crud.getLastID();
        while (set.next()) {
            vehicule.setId(set.getInt("id"));
        }

        PreparedStatement stat = conn.prepareStatement(
                "INSERT into trajet (id_vehicule, id_membre, destination, depart, "
                + "dateDepart, cout, description, nbrPlaceDispo, suivi,datePub) "
                + "VALUES (?,?,?,?,?,?"
                + ",?,?,?,?)");
        stat.setInt(1, vehicule.getId());
        stat.setInt(2, membre.getId());
        stat.setString(3, trajet.getDestination());
        stat.setString(4, trajet.getDepart());
        Date date = Date.valueOf(trajet.getDateDepart());
        java.util.Date toConvert = new java.util.Date();
        java.sql.Date dateNow = new java.sql.Date(toConvert.getTime());
        stat.setDate(5, date);
        stat.setFloat(6, trajet.getCout());
        stat.setString(7, trajet.getDescription());
        stat.setInt(8, trajet.getNombrePlaceDispo());
        if (trajet.isSuivie()) {
            suivie = 1;
        } else {
            suivie = 0;
        }
        stat.setInt(9, suivie);
        stat.setDate(10, dateNow);
        stat.executeUpdate();
    }

    public void updateTrajet(Trajet trajet) throws SQLException {
        int suivie;
        PreparedStatement stat = conn.prepareStatement("UPDATE trajet "
                + "SET destination=?"
                + ",depart=?,dateDepart=?,cout=?,"
                + "description=?,nbrPlaceDispo=?,suivi=? where id=?");

        stat.setString(1, trajet.getDestination());
        stat.setString(2, trajet.getDepart());
        Date date = Date.valueOf(trajet.getDateDepart());
        stat.setDate(3, date);
        stat.setFloat(4, trajet.getCout());
        stat.setString(5, trajet.getDescription());
        stat.setInt(6, trajet.getNombrePlaceDispo());
        if (trajet.isSuivie()) {
            suivie = 1;
        } else {
            suivie = 0;
        }
        stat.setInt(7, suivie);
        stat.setInt(8, trajet.getId());
        stat.executeUpdate();
    }

    @Override
    public ResultSet afficherTrajet() throws SQLException {
        PreparedStatement stat = conn.prepareStatement("SELECT * from trajet");
        return stat.executeQuery();
    }

    @Override
    public void deleteTrajet(Trajet trajet) throws SQLException {
        PreparedStatement stat = conn.prepareStatement("delete from trajet where id=?");
        stat.setInt(1, trajet.getId());
        stat.executeUpdate();
    }

    public void ReserverTrajet(Passager passager) throws SQLException {
        PreparedStatement stat = conn.prepareStatement("insert into passager (id_trajet,id_membre) values (?,?)");
        stat.setInt(1, passager.getTrajet().getId());
        stat.setInt(2, passager.getMembre().getId());
        stat.executeUpdate();
        PreparedStatement stat1 = conn.prepareStatement("update trajet set nbrPlaceDispo=nbrPlaceDispo-1 where id=?");
        stat1.setInt(1, passager.getTrajet().getId());
        stat1.executeUpdate();

    }

    public ResultSet afficherStates() throws SQLException {
        PreparedStatement stat = conn.prepareStatement("SELECT * from states");
        return stat.executeQuery();
    }

    public ResultSet getIdState(String state) throws SQLException {
        PreparedStatement stat = conn.prepareStatement("SELECT id from states where state=?");
        stat.setString(1, state);
        return stat.executeQuery();
    }

    public ResultSet afficherCities(int id) throws SQLException {
        PreparedStatement stat = conn.prepareStatement("SELECT * from cities where id_state=?");
        stat.setInt(1, id);
        return stat.executeQuery();
    }

    public ResultSet afficherPassager() throws SQLException {
        PreparedStatement stat = conn.prepareStatement("SELECT T.id, T.depart, T.destination, "
                + "M.nom, M.numero_tel, M.email from passager P inner "
                + "join trajet T on P.id_trajet=T.id inner join membre M on P.id_membre=M.id ");
        return stat.executeQuery();
    }

    public List<Trajet> rechercherPassager(String entry) throws SQLException {
        List<Trajet> liste = new ArrayList<>();
        PreparedStatement stat = conn.prepareStatement("SELECT T.id, T.depart, T.destination, "
                + "M.nom, M.numero_tel, M.email from passager P inner "
                + "join trajet T on P.id_trajet=T.id inner join membre M on P.id_membre=M.id where "
                + "T.id like ? or T.depart like ? or T.destination like ? or M.nom like ?");
        stat.setString(1, "%" + entry + "%");
        stat.setString(2, "%" + entry + "%");
        stat.setString(3, "%" + entry + "%");
        stat.setString(4, "%" + entry + "%");
        ResultSet set = stat.executeQuery();
        while (set.next()) {
            Trajet trajet = new Trajet();
            trajet.setId(set.getInt("id"));
            trajet.setDepart(set.getString("depart"));
            trajet.setDestination(set.getString("destination"));
            Membre membre = new Membre();
            membre.setNom(set.getString("nom"));
            membre.setNom(set.getString("NumeroTel"));
            membre.setNom(set.getString("email"));
            trajet.setMembre(membre);
            liste.add(trajet);
        }
        return liste;
    }

    public ResultSet afficherUneVehicule(int id) throws SQLException {
        PreparedStatement stat = conn.prepareStatement("SELECT V.* from trajet T inner join vehicule V on "
                + "T.id_vehicule=V.id where T.id=?");
        stat.setInt(1, id);
        return stat.executeQuery();
    }

    public ResultSet afficherChaffeur(int id) throws SQLException {
        PreparedStatement stat = conn.prepareStatement("SELECT M.nom, M.email, M.numero_tel from membre M inner join trajet T on "
                + "M.id=T.id_membre where T.id=?");
        stat.setInt(1, id);
        return stat.executeQuery();
    }

    public List<Trajet> rechercherTrajet(String entry) throws SQLException {
        List<Trajet> liste = new ArrayList<>();
        PreparedStatement stat = conn.prepareStatement("SELECT * from trajet where depart "
                + "like ? or destination like ? or dateDepart like ?");
        stat.setString(1, "%" + entry + "%");
        stat.setString(2, "%" + entry + "%");
        stat.setString(3, "%" + entry + "%");
        ResultSet set = stat.executeQuery();

        while (set.next()) {
            LocalDate localD = set.getDate("dateDepart").toLocalDate();
            Trajet trajet = new Trajet(set.getString("destination"), set.getString("depart"), localD,
                     set.getFloat("cout"), set.getString("description"), set.getInt("nbrPlaceDispo"), set.getBoolean("suivi"));
            trajet.setId(set.getInt("id"));
            liste.add(trajet);
        }
        return liste;
    }

    public ResultSet rechercherTrajetAcceuil(String entry) throws SQLException {
        List<Trajet> liste = new ArrayList<>();
        PreparedStatement stat = conn.prepareStatement("SELECT * from trajet where depart "
                + "like ? or destination like ? or dateDepart like ?");
        stat.setString(1, "%" + entry + "%");
        stat.setString(2, "%" + entry + "%");
        stat.setString(3, "%" + entry + "%");
        return stat.executeQuery();
    }

    public String getEmailConducteur(int id) throws SQLException {
        PreparedStatement stat = conn.prepareStatement("SELECT M.email from membre M inner join trajet T on "
                + "M.id=T.id_membre where T.id=?");
        stat.setInt(1, id);
        ResultSet set = stat.executeQuery();
        String email = "";
        while (set.next()) {
            email = set.getString("email");
        }
        return email;
    }

    public String getPhoneConducteur(int id) throws SQLException {
        PreparedStatement stat = conn.prepareStatement("SELECT M.numero_tel from membre M inner join trajet T on "
                + "M.id=T.id_membre where T.id=?");
        stat.setInt(1, id);
        ResultSet set = stat.executeQuery();
        String phone = "";
        while (set.next()) {
            phone = set.getString("numero_tel");
        }
        return phone;
    }

    @Override
    public ResultSet getStats() throws SQLException {
        PreparedStatement stat = conn.prepareStatement("select concat(MONTH(`dateDepart`) ) as mydate from trajet");
        return stat.executeQuery();
    }

    public ResultSet AfficherTrajet(int id) throws SQLException {
        ResultSet result;
        PreparedStatement ps = conn.prepareStatement("SELECT T.* from trajet T inner join membre M on T.id_membre=M.id where M.id=?");
        ps.setInt(1, id);

        result = ps.executeQuery();
        return result;

    }

}
