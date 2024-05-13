package org.example.powergym;


import javafx.scene.Scene;
import javafx.scene.text.Font;
import javafx.stage.Stage;
import jdk.internal.foreign.SystemLookup;
import org.apache.poi.hwpf.usermodel.Paragraph;
import org.example.powergym.events;

import java.awt.*;
import java.io.FileNotFoundException;
import java.io.IOException;
import java.net.URL;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Parent;
import javafx.scene.control.Label;
import javafx.scene.control.TextField;
import javafx.scene.control.ComboBox;
import javafx.scene.control.Button;
import javafx.collections.ObservableList;
import javafx.collections.FXCollections;
import java.util.ArrayList;
import javafx.scene.control.Alert;
import javafx.scene.control.TableView;
import services.ServiceEvents;
import java.sql.Date;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Button;
import javafx.scene.control.Label;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextField;
import javafx.scene.input.MouseEvent;
import javafx.scene.layout.AnchorPane;
import java.sql.Connection;
import java.sql.SQLException;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.collections.transformation.FilteredList;
import javafx.collections.transformation.FilteredList;
import javafx.collections.transformation.SortedList;
import utils.DataSource;
import java.sql.Statement;
import java.sql.PreparedStatement;
import java.sql.ResultSet;

import java.io.FileOutputStream;

import org.apache.poi.xssf.usermodel.XSSFRow;
import org.apache.poi.xssf.usermodel.XSSFSheet;
import org.apache.poi.xssf.usermodel.XSSFWorkbook;

import javafx.scene.control.ButtonType;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import java.util.Optional;
import javafx.collections.ObservableList;
import utils.MyConnection;

import javax.swing.text.Document;
import java.util.ArrayList;

import static java.time.zone.ZoneRulesProvider.refresh;

public class eventsController<PdfPCell, DocumentException> implements Initializable {

    @FXML
    private TableColumn<events,Date> stdate;

    @FXML
    private TableColumn<events,Integer> id;
    @FXML
    private Button del;
    @FXML
    private Button upd;
    @FXML
    private TextField ttsearch;
  /*  @FXML
    private TextField filterField;*/
    @FXML
    private AnchorPane slider;
    @FXML
    private Label Menu;
    @FXML
    private Label MenuClose;
    private Connection cnx;

    @FXML
    private TableColumn<events, String> title;
    ObservableList<events> data = FXCollections.observableArrayList();
    @FXML
    private TableColumn<events,String> description;

    private final ObservableList<events> dataList = FXCollections.observableArrayList();
    @FXML
    private TableColumn<events,String> type;
    public static String titlerecup;
    public static String decriptionrecup;
    public static String typerecup;
    public static Date datestartrecup;
    public static Date dateendrecup;
    public static int id_rec;


    @FXML
    private TableView<events> tbl;

    @FXML
    private Button addd;
    @FXML
    private TableColumn<events, Date> endate;

    @FXML
    private AnchorPane ge;
;

    @FXML
    private Button ref;
    @FXML
    private Button showw;
    @FXML
    private Button eventsbtn;
    @FXML
    private Button catebtn;




    @Override
    public void initialize(URL url, ResourceBundle resourceBundle) {
        ServiceEvents evcrud = new ServiceEvents();
        ArrayList<events> ev = (ArrayList<events>) evcrud.readAll();
        ObservableList<events> obs = FXCollections.observableArrayList(ev);
        //table.setItems(obs);
        title.setCellValueFactory(new PropertyValueFactory<events,String>("title"));
        description.setCellValueFactory(new PropertyValueFactory<events,String>("description"));
        type.setCellValueFactory(new PropertyValueFactory<events,String>("type"));

        stdate.setCellValueFactory(new PropertyValueFactory<events,Date>("start_date"));
        endate.setCellValueFactory(new PropertyValueFactory<events,Date>("end_date"));

        id.setCellValueFactory(new PropertyValueFactory<events,Integer>("id"));


        FilteredList<events> filteredData = new FilteredList<>(FXCollections.observableArrayList(ev), b -> true);
        // 2. Set the filter Predicate whenever the filter changes.
/*        filterField.textProperty().addListener((observable, oldValue, newValue) -> {
            filteredData.setPredicate(event -> {
                // If filter text is empty, display all events.
                if (newValue == null || newValue.trim().isEmpty()) {
                    return true;
                }

                // Compare title and description of each event with the filter text.
                String lowerCaseFilter = newValue.toLowerCase();

                if (event.getTitle().toLowerCase().contains(lowerCaseFilter)) {
                    return true; // Filter matches title.
                } else if (event.getDescription().toLowerCase().contains(lowerCaseFilter)) {
                    return true; // Filter matches description.
                }

                return false; // Does not match.
            });
        });*/

        // 3. Wrap the FilteredList in a SortedList.
        SortedList<events> sortedData = new SortedList<>(filteredData);

        // 4. Bind the SortedList comparator to the TableView comparator.
        // 	  Otherwise, sorting the TableView would have no effect.
        sortedData.comparatorProperty().bind(tbl.comparatorProperty());

        tbl.setItems(sortedData);
        // TODO
        //imprimer = new Button ('Export to excel');
        cnx = DataSource.getInstance().getConnection();



    }


    @FXML
    private void supprimer(ActionEvent event) {
        if (tbl.getSelectionModel().isEmpty()) {
            new Alert(Alert.AlertType.ERROR, "The table is empty ").show();
        } else {
            ObservableList<events> bon = tbl.getSelectionModel().getSelectedItems();
            Alert alert = new Alert(Alert.AlertType.CONFIRMATION);
            alert.setTitle("Confirmation Dialog");
            alert.setHeaderText(null);
            alert.setContentText("Are you sure to delete this event");
            Optional<ButtonType> action = alert.showAndWait();
            if (action.get() == ButtonType.OK) {
                new ServiceEvents().deleteev(bon.get(0));
                System.out.println(bon.get(0).getId());
            }
        }
        reff();
    }

    @FXML
    private void modifier(ActionEvent event) {
        events ev = tbl.getSelectionModel().getSelectedItem();
        eventsController.titlerecup=ev.getTitle();
        eventsController.decriptionrecup=ev.getDescription();
        eventsController.typerecup=ev.getType();
        eventsController.datestartrecup=ev.getStart_date();
        eventsController.dateendrecup=ev.getEnd_date();
        eventsController.id_rec=ev.getId();

        System.out.println(ev.getId());
        try {
            Parent root = FXMLLoader.load(getClass().getResource("updateEvents.fxml"));
            Stage stage = (Stage) upd.getScene().getWindow();
            stage.close();
            Scene scene = new Scene(root);

            stage.setScene(scene);
            stage.show();
        } catch (IOException ex) {
            Logger.getLogger(eventsController.class.getName()).log(Level.SEVERE, null, ex);
        }


    }
    @FXML
    private void ajoutere(ActionEvent events) {
        try {
            Parent root = FXMLLoader.load(getClass().getResource("addEvents.fxml"));
            Stage stage = (Stage) addd.getScene().getWindow();
            stage.close();
            Scene scene = new Scene(root);

            stage.setScene(scene);
            stage.show();
        } catch (IOException ex) {
            Logger.getLogger(eventsController.class.getName()).log(Level.SEVERE, null, ex);
        }
    }



@FXML
private void actt(ActionEvent event) {
    try {
        Parent root = FXMLLoader.load(getClass().getResource("ListEvents.fxml"));
        Stage stage = (Stage) ref.getScene().getWindow();
        stage.close();
        Scene scene = new Scene(root);

        stage.setScene(scene);
        stage.show();
    } catch (IOException ex) {
        Logger.getLogger(eventsController.class.getName()).log(Level.SEVERE, null, ex);
    }
}
    @FXML
    private void reff() {
        try {
            Parent root = FXMLLoader.load(getClass().getResource("ListEvents.fxml"));
            Stage stage = (Stage) del.getScene().getWindow();
            stage.close();
            Scene scene = new Scene(root);

            stage.setScene(scene);
            stage.show();
        } catch (IOException ex) {
            Logger.getLogger(eventsController.class.getName()).log(Level.SEVERE, null, ex);
        }

    }


    @FXML
    private void afff(ActionEvent event) {
        events ev = tbl.getSelectionModel().getSelectedItem();
        eventsController.titlerecup=ev.getTitle();
        eventsController.decriptionrecup=ev.getDescription();
        eventsController.typerecup=ev.getType();
        eventsController.datestartrecup=ev.getStart_date();
        eventsController.dateendrecup=ev.getEnd_date();

        eventsController.id_rec=ev.getId();

        System.out.println(ev.getId());
        try {
            Parent root = FXMLLoader.load(getClass().getResource("showEvents.fxml"));
            Stage stage = (Stage) showw.getScene().getWindow();
            stage.close();
            Scene scene = new Scene(root);

            stage.setScene(scene);
            stage.show();
        } catch (IOException ex) {
            Logger.getLogger(eventsController.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    @FXML
    private void search(ActionEvent event) {
        ObservableList<events> eventList = FXCollections.observableArrayList();
        try {
            Connection cnx = MyConnection.getInstance().getConnection();
            String text = ttsearch.getText();
            String query = "SELECT * FROM events WHERE title=?";
            PreparedStatement statement = cnx.prepareStatement(query);
            statement.setString(1, text);
            ResultSet rs = statement.executeQuery();

            while (rs.next()) {
                int id = rs.getInt("id");
                String title = rs.getString("title");
                String description = rs.getString("description");
                String type = rs.getString("type");
                Date startDate = rs.getDate("start_date");
                Date endDate = rs.getDate("end_date");

                events events = new events (id, title, description, type, startDate, endDate);
                eventList.add(events);
            }
        } catch (SQLException ex) {
            Logger.getLogger(eventsController.class.getName()).log(Level.SEVERE, null, ex);
        }

        id.setCellValueFactory(new PropertyValueFactory<>("id"));
        title.setCellValueFactory(new PropertyValueFactory<>("title"));
        description.setCellValueFactory(new PropertyValueFactory<>("description"));
        type.setCellValueFactory(new PropertyValueFactory<>("type"));
        stdate.setCellValueFactory(new PropertyValueFactory<>("startDate"));
        endate.setCellValueFactory(new PropertyValueFactory<>("endDate"));

        tbl.setItems(eventList);
        tbl.refresh();
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
