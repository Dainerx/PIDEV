/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package view;

/**
 *
 * @author dainer
 */
import java.sql.ResultSet;
import java.sql.SQLException;
import javafx.application.Application;
import javafx.beans.value.ObservableValue;
import javafx.scene.Scene;
import javafx.scene.chart.LineChart;
import javafx.scene.chart.NumberAxis;
import javafx.scene.chart.XYChart;
import javafx.scene.control.TextField;
import javafx.stage.Stage;

import services.ServiceTrajet;
 
 
public class Statistiques extends Application {
        
    TextField yourTextField = new TextField();
 
    @Override public void start(Stage stage) throws SQLException {
        stage.setTitle("Statistiques");
        //defining the axes
        final NumberAxis xAxis = new NumberAxis();
        final NumberAxis yAxis = new NumberAxis();
        xAxis.setLabel("Mois");
        //creating the chart
        final LineChart<Number,Number> lineChart = 
                new LineChart<Number,Number>(xAxis,yAxis);
                
        lineChart.setTitle("Trajets proposés, 2017");
        //defining a series
        XYChart.Series series = new XYChart.Series();
        //series.setName("My portfolio");
        
        
        
        //populating the series with data
        ServiceTrajet service = new ServiceTrajet();
        ResultSet set = service.getStats(); 
        int counter;
        int jan = 0,feb = 0,mar = 0,apr = 0,mai = 0,jun = 0,jul = 0,aug = 0,sep = 0,oct = 0,nov = 0,dec = 0;
        while (set.next())
        {
            counter=set.getInt("mydate");
            
            switch(counter)
            {
                case 1:  jan++;
                break;
                case 2:  feb++;
                break;
                case 3:  mar++;
                break;
                case 4:  apr++;
                break;
                case 5:  mai++;
                break;
                case 6:  jun++;
                break;
                case 7:  jul++;
                break;
                case 8:  aug++;
                break;
                case 9:  sep++;
                break;
                case 10:  oct++;
                break;
                case 11:  nov++;
                break;
                case 12:  dec++;
                break;
                        
                    
            }
        }

        series.getData().add(new XYChart.Data(1, jan));
        series.getData().add(new XYChart.Data(2, feb));
        series.getData().add(new XYChart.Data(3, mar));
        series.getData().add(new XYChart.Data(4, apr));
        series.getData().add(new XYChart.Data(5, mai));
        series.getData().add(new XYChart.Data(6, jun));
        series.getData().add(new XYChart.Data(7, jul));
        series.getData().add(new XYChart.Data(8, aug));
        series.getData().add(new XYChart.Data(9, sep));
        series.getData().add(new XYChart.Data(10, oct));
        series.getData().add(new XYChart.Data(11, nov));
        series.getData().add(new XYChart.Data(12, dec));
        
        Scene scene  = new Scene(lineChart,800,600);
        lineChart.getData().add(series);
       
        stage.setScene(scene);
        stage.show();
    }
 
    public static void main(String[] args) {
        launch(args);
    }
}