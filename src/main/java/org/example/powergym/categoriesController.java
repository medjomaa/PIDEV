package org.example.powergym;

import javafx.fxml.FXMLLoader;
import javafx.scene.*;
import org.example.powergym.categories;
import services.ServiceCategories;
import utils.MyConnection;
import utils.categutils;
import java.net.MalformedURLException;
import java.net.URL;
import java.sql.Connection;
import java.sql.Date;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.List;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import java.util.stream.Collectors;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Button;
import javafx.scene.control.DatePicker;
import javafx.scene.control.Label;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextField;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.image.Image;
import javafx.scene.input.MouseEvent;
import javax.swing.JOptionPane;
import java.util.*;
import javafx.event.EventHandler;
import javafx.geometry.Pos;
import javafx.scene.text.Text;
import javafx.print.PrinterJob;

import java.awt.Graphics;
import java.awt.Graphics2D;
import java.awt.image.BufferedImage;
import java.awt.print.PageFormat;
import java.awt.print.Printable;
import java.awt.print.Paper;
import java.awt.print.PrinterException;
import java.io.*;
import java.time.LocalDate;
//import javafx.embed.swing.SwingFXUtils;
import javafx.print.PageLayout;
import javafx.print.PageOrientation;
import javafx.print.Printer;
import javafx.scene.image.ImageView;
import javafx.scene.image.WritableImage;
import javafx.scene.transform.Scale;
import javafx.stage.Stage;
import javax.imageio.ImageIO;
import javax.print.*;
import javafx.application.Application;
import javafx.scene.control.Alert;
import javafx.scene.control.ButtonType;
import javafx.scene.shape.Circle;
import javafx.scene.text.Font;
import javafx.scene.text.Text;
import javafx.stage.Stage;
import utils.DataSource;


public class categoriesController implements Initializable{
    @FXML
    private TableView<categories> table;
    @FXML
    private TableColumn<categories, Integer> col_id;
    @FXML
    private TableColumn<categories, String> col_name;
    @FXML
    private TableColumn<categories, String> col_content;

    private TableColumn<categories, Integer> col_nbr;
    ObservableList<categories> List = FXCollections.observableArrayList();
    ObservableList<categories> dataList;
    @FXML
    private Button supp;
    @FXML
    private TextField tfNomEv;
    @FXML
    private TextField tfDescEv;
    @FXML
    private Button eventsbtn;
    @FXML
    private Button catebtn;

    private PreparedStatement pst;
    private Label lb1;
    private Label lb2;
    @FXML
    private TextField tfchercher;
    private Object titre;
    private final String cityAPI = "https://www.metaweather.com/api/location/search/?query=";

    private final String weatherAPI = "https://www.metaweather.com/api/location/";


    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
        refresh();
    }

    public void setLb1(Label lb1) {
        this.lb1 = lb1;
    }

    public void setLb2(Label lb2) {
        this.lb2 = lb2;
    }

    @FXML
    private void getSelected(MouseEvent event) {
        int index = table.getSelectionModel().getSelectedIndex();
        if (index <= -1) {
            return;
        }
        tfNomEv.setText(col_name.getCellData(index));
        tfDescEv.setText(col_content.getCellData(index));


    }

    @FXML
    private void supp(ActionEvent event) {
//supp
        if (table.getSelectionModel().isEmpty()) {
            new Alert(Alert.AlertType.ERROR, "The table is empty ").show();
        } else {
            ObservableList<categories> bon = table.getSelectionModel().getSelectedItems();
            Alert alert = new Alert(Alert.AlertType.CONFIRMATION);
            alert.setTitle("Confirmation Dialog");
            alert.setHeaderText(null);
            alert.setContentText("Are you sure to delete this category ?");
            Optional<ButtonType> action = alert.showAndWait();
            if (action.get() == ButtonType.OK) {
                new ServiceCategories().deleteCate(bon.get(0));
                System.out.println(bon.get(0).getId());
            }
        }
        refresh();
    }

    @FXML
    private void AjouterCategory(ActionEvent event) {
        //AjouterCategory
        ServiceCategories sp = new ServiceCategories();
        categutils au = new categutils();
    /*    String name = tfNomEv.getText();
        String comment = tfDescEv.getText();

        if (name.isEmpty()) {
            JOptionPane.showMessageDialog(null, "name is required");
        } else if (comment.isEmpty()) {
            JOptionPane.showMessageDialog(null, "comment is required");
        }
        else {
            sp.addCate(new categories(tfNomEv.getText(), tfDescEv.getText()));

            JOptionPane.showMessageDialog(null, "category added !");

            refresh();
        }*/
        String name = tfNomEv.getText().trim();
        String comment = tfDescEv.getText().trim();

        if (name.isEmpty()) {
            JOptionPane.showMessageDialog(null, "Name is required");
        } else if (comment.isEmpty()) {
            JOptionPane.showMessageDialog(null, "Comment is required");
        } else {
            try {
                sp.addCate(new categories(name, comment));
                JOptionPane.showMessageDialog(null, "Category added!");
                refresh(); // Assuming this method updates the UI
            } catch (Exception e) {
                JOptionPane.showMessageDialog(null, "Error occurred while adding the category: " + e.getMessage());
                e.printStackTrace(); // Print the stack trace to analyze the error
            }
        }

    }

    @FXML
    private void modifier(ActionEvent event) throws SQLException {
        //modifier
        Connection cnx = DataSource.getInstance().getConnection();
        String sql = "UPDATE categories SET name= ?,comment= ?  WHERE name = ?";

        PreparedStatement pst = cnx.prepareStatement(sql);
        pst.setString(1, tfNomEv.getText());
        pst.setString(2, tfDescEv.getText());

        pst.setString(3, tfNomEv.getText());

        pst.executeUpdate();

        refresh();
    }



    @FXML
    private void refresh() {
        ObservableList<categories> List = FXCollections.observableArrayList();
        try {
            Connection cnx = MyConnection.getInstance().getConnection();


            ResultSet rs = cnx.createStatement().executeQuery("SELECT * from categories");
            while (rs.next()) {
                List.add(new categories(rs.getInt(1), rs.getString("name"), rs.getString("comment")));
            }
        } catch (SQLException ex) {
            Logger.getLogger(categoriesController.class.getName()).log(Level.SEVERE, null, ex);
        }
        col_id.setCellValueFactory(new PropertyValueFactory<>("id"));
        col_name.setCellValueFactory(new PropertyValueFactory<>("name"));
        col_content.setCellValueFactory(new PropertyValueFactory<>("comment"));

        table.setItems(List);
        table.refresh();
    }

    @FXML
    private void chercher(ActionEvent event) {
        ObservableList<categories> List = FXCollections.observableArrayList();
        try {
            Connection cnx = MyConnection.getInstance().getConnection();
            String text = tfchercher.getText();
            ResultSet rs = cnx.createStatement().executeQuery("SELECT * FROM categories where name='" + text + "'");

            while (rs.next()) {
                List.add(new categories(rs.getInt(1), rs.getString("name"), rs.getString("comment")));
            }
        } catch (SQLException ex) {
            Logger.getLogger(categoriesController.class.getName()).log(Level.SEVERE, null, ex);
        }
        col_id.setCellValueFactory(new PropertyValueFactory<>("id"));
        col_name.setCellValueFactory(new PropertyValueFactory<>("name"));
        col_content.setCellValueFactory(new PropertyValueFactory<>("comment"));

        table.setItems(List);
        table.refresh();
    }



    private void print(ActionEvent event) {

        PrinterJob printerJob = PrinterJob.createPrinterJob();
        if(printerJob.showPrintDialog(null) && printerJob.printPage(table))
            table.setScaleX(0.60);
        table.setScaleY(0.60);
        table.setTranslateX(-500);
        printerJob.endJob();
        table.setScaleX(1);
        table.setScaleY(1);
        table.setTranslateX(0);
    }

    @FXML
    private void pdf(ActionEvent event) {

        PrinterJob job = PrinterJob.createPrinterJob();
        if (job != null) {
            table.setScaleX(0.60);
            table.setScaleY(0.60);
            table.setTranslateX(-500);
            boolean success = job.printPage(table);

            if (success) {

                job.endJob();
                table.setScaleX(1);
                table.setScaleY(1);
                table.setTranslateX(0);

            }
        }
    }
    @FXML
    private void toevents(ActionEvent event) {
        try {
            Parent root = FXMLLoader.load(getClass().getResource("ListEvents.fxml"));
            Stage stage = (Stage) eventsbtn.getScene().getWindow();
            stage.close();
            Scene scene = new Scene(root);

            stage.setScene(scene);
            stage.show();
        } catch (IOException ex) {
            Logger.getLogger(eventsController.class.getName()).log(Level.SEVERE, null, ex);
        }
    }
    @FXML
    private void tocate(ActionEvent event) {
        try {
            Parent root = FXMLLoader.load(getClass().getResource("ListCategories.fxml"));
            Stage stage = (Stage) catebtn.getScene().getWindow();
            stage.close();
            Scene scene = new Scene(root);

            stage.setScene(scene);
            stage.show();
        } catch (IOException ex) {
            Logger.getLogger(eventsController.class.getName()).log(Level.SEVERE, null, ex);
        }
    }



}
