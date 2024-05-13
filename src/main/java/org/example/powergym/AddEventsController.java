package org.example.powergym;

import org.example.powergym.events;
import java.awt.image.BufferedImage;
import java.io.File;
import java.io.IOException;
import static java.lang.Integer.parseInt;
import java.net.URL;
import java.sql.Connection;
import java.sql.Date;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.Statement;
import java.text.ParseException;
import java.text.SimpleDateFormat;
import java.time.LocalDate;
import java.time.ZoneId;
import java.time.format.DateTimeFormatter;
import java.util.ArrayList;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Alert;
import javafx.scene.control.Button;
import javafx.scene.control.DatePicker;
import javafx.scene.control.Label;
import javafx.scene.control.TextField;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.scene.image.WritableImage;
import javafx.scene.input.MouseEvent;
import javafx.scene.layout.AnchorPane;
import javafx.scene.text.Text;
import javafx.stage.FileChooser;
import javafx.stage.Stage;
import javax.imageio.ImageIO;
import utils.DataSource;
import services.ServiceEvents;
import utils.DataValidationUtils;

public class AddEventsController implements Initializable {

    @FXML
    private AnchorPane show;
    @FXML
    private TextField namea;
    @FXML
    private TextField Descriptiona;
    @FXML
    private TextField typaa;


    @FXML
    private DatePicker sdate;
    @FXML
    private DatePicker edate;

    @FXML
    private Button ajouter;
    @FXML
    private Button back;


    String s;

    PreparedStatement preparedStatement;
    private Statement st;
    private ResultSet rs;
    // String s;

    Connection cnx = DataSource.getInstance().getConnection();
    ServiceEvents eventcru = ServiceEvents.getInstance();
    //PromotionCrud pr = PromotionCrud.getInstance()

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    }
    @FXML
    private void ajouter_event(ActionEvent event) {

        if (namea.getText().isEmpty() || Descriptiona.getText().isEmpty() || typaa.getText().isEmpty()) {
            Alert alert = new Alert(Alert.AlertType.INFORMATION);
            alert.setTitle("Information Dialog");
            alert.setHeaderText(null);
            alert.setContentText("Check your fields! ");
            alert.show();

            System.out.println("Fields Are Empty");
            // show.setText("Enter all details");

        }else
        if (!DataValidationUtils.isNameValid(namea.getText().replaceAll("\\s", ""))) {
            namea.setStyle("-fx-border-color: red ; -fx-border-width: 2px ;");
            System.out.println("Event name is invalid");
            Alert alert = new Alert(Alert.AlertType.INFORMATION);
            alert.setTitle("Information Dialog");
            alert.setHeaderText(null);
            alert.setContentText("invalid product name!");
            alert.show();
        }else
        if (!DataValidationUtils.isDescriptionValid(Descriptiona.getText().replaceAll("\\s", ""))) {
            Descriptiona.setStyle("-fx-border-color: red ; -fx-border-width: 2px ;");
            System.out.println("Description is invalid");
            Alert alert = new Alert(Alert.AlertType.INFORMATION);
            alert.setTitle("Information Dialog");
            alert.setHeaderText(null);
            alert.setContentText("invalid product name!");
            alert.show();
        }else
        if (!DataValidationUtils.isTypeValid(typaa.getText().replaceAll("\\s", ""))) {
            typaa.setStyle("-fx-border-color: red ; -fx-border-width: 2px ;");
            System.out.println("Type is invalid");
            Alert alert = new Alert(Alert.AlertType.INFORMATION);
            alert.setTitle("Information Dialog");
            alert.setHeaderText(null);
            alert.setContentText("invalid product name!");
            alert.show();}


        else {
            String nevent = namea.getText();
            String desc = Descriptiona.getText();
            String tty = typaa.getText();



            ZoneId defaultZoneId = ZoneId.systemDefault();
            //String date_dep = date_depart.getValue().toString();
            Date ssdate = java.sql.Date.valueOf( sdate.getValue());
            // String date_f = date_fin.getValue().toString();
            Date eedate = java.sql.Date.valueOf(edate.getValue());
            System.out.println("start date  de type date " + ssdate);
            //System.out.println("date de depare de type string" + date_dep);
            //  System.out.println("date fin de type sting" + date_f);
            System.out.print("end date  de type date" + eedate);

            events ev = new events(nevent, desc, tty,ssdate,eedate);
            eventcru.addev(ev);



            System.err.println("Added Seccessfully");
            Alert alert = new Alert(Alert.AlertType.INFORMATION);
            alert.setTitle("Information Dialog");
            alert.setHeaderText(null);
            alert.setContentText("Event added successfuly!");
            alert.show();
            namea.setText("");
            Descriptiona.setText("");
            typaa.setText(" ");






        }
        backk();
    }
    @FXML
    private void backk() {
        try {
            Parent root = FXMLLoader.load(getClass().getResource("ListEvents.fxml"));
            Stage stage = (Stage) ajouter.getScene().getWindow();
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
