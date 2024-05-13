package org.example.powergym;

import javafx.scene.control.*;
import javafx.scene.control.cell.PropertyValueFactory;
import org.example.powergym.events;
import java.io.IOException;
import static java.lang.Integer.parseInt;
import java.net.URL;
import java.sql.*;
import java.time.ZoneId;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.input.MouseEvent;
import javafx.scene.layout.AnchorPane;
import javafx.stage.Stage;
import static javax.swing.JOptionPane.showMessageDialog;
import static org.example.powergym.eventsController.id_rec;

import utils.DataSource;
import services.ServiceEvents;
import java.util.Calendar;



public class UpdateEventsController implements Initializable {
    @FXML
    private AnchorPane show;
    @FXML
    private TextField namea;
    @FXML
    private TextField Descriptiona;
    @FXML
    private TextField typaa;
    @FXML
    private TableColumn<events,Integer> id;

    @FXML
    private DatePicker sdate;
    @FXML
    private DatePicker edate;
    @FXML
    private Button update;
    @FXML
    private Button back;

    int ref = id_rec;

    ServiceEvents even = ServiceEvents.getInstance();
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        namea.setText(eventsController.titlerecup);
        Descriptiona.setText(eventsController.decriptionrecup);
        typaa.setText(eventsController.typerecup);
    //    sdate.setValue(eventsController.datestartrecup.toInstant().atZone(ZoneId.systemDefault()).toLocalDate());
    //    edate.setValue(eventsController.dateendrecup.toInstant().atZone(ZoneId.systemDefault()).toLocalDate());
     //   id.setText(String.valueOf(eventsController.id_rec));



    }
    @FXML
    private void update_event(ActionEvent events) throws SQLException {
        events t = new events();
        //t.setId(parseInt(ref.getText()));
        t.setTitle(namea.getText());
        t.setDescription(Descriptiona.getText());
        t.setType(typaa.getText());
        //  t.setStart_date(Date.valueOf(sdate.getValue()));
        //  t.setEnd_date(Date.valueOf(edate.getValue()));



        System.out.println("hahahah");
        ServiceEvents pr=ServiceEvents.getInstance();
        pr.updateev(t);
        showMessageDialog(null, "update with succese");
        backk();
    }
    @FXML
    private void backk(){
        try {
            Parent root = FXMLLoader.load(getClass().getResource("ListEvents.fxml"));
            Stage stage = (Stage) update.getScene().getWindow();
            stage.close();
            Scene scene = new Scene(root);

            stage.setScene(scene);
            stage.show();
        } catch (IOException ex) {
            Logger.getLogger(eventsController.class.getName()).log(Level.SEVERE, null, ex);
        }
    }
    @FXML
    private void back(ActionEvent events){
        try {
            Parent root = FXMLLoader.load(getClass().getResource("ListEvents.fxml"));
            Stage stage = (Stage) back.getScene().getWindow();
            stage.close();
            Scene scene = new Scene(root);

            stage.setScene(scene);
            stage.show();
        } catch (IOException ex) {
            Logger.getLogger(eventsController.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

}
