/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package services;

import java.sql.*;

/**
 *
 * @author dainer
 */
    public class DataSource {

    private String url = "jdbc:mysql://localhost:3306/pidev";
    private String login = "root";
    private String password = "root";
    private Connection connection;
    private static DataSource dataSource;

    private DataSource() {
        try {
            connection = DriverManager.getConnection(url,login,password);
            System.out.println("connection établie");
        } catch (Exception e) {
              System.out.println("connection non établie");
            e.printStackTrace();
        }
    }

    public Connection getConnection() {
        return connection;
    }

    public static DataSource getInstance() {
        if (dataSource == null) {
            dataSource = new DataSource();
        }
        return dataSource;
    }
}
    
