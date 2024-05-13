package org.example.powergym;

import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.scene.control.Label;
import javafx.stage.Stage;

import java.io.IOException;
import java.util.logging.Level;
import java.util.logging.Logger;

public class mainController {

    @FXML
    private Button eventsbt;
    @FXML
    private Button categorybt;

    @FXML
    protected void toevents(ActionEvent events) {
        try {
            Parent root = FXMLLoader.load(getClass().getResource("ListEvents.fxml"));
            Stage stage = (Stage) eventsbt.getScene().getWindow();
            stage.close();
            Scene scene = new Scene(root);

            stage.setScene(scene);
            stage.show();
        } catch (IOException ex) {
            Logger.getLogger(eventsController.class.getName()).log(Level.SEVERE, null, ex);
        }
    }
    @FXML
    protected void tocategory(ActionEvent events) {
        try {
            Parent root = FXMLLoader.load(getClass().getResource("ListCategories.fxml"));
            Stage stage = (Stage) categorybt.getScene().getWindow();
            stage.close();
            Scene scene = new Scene(root);

            stage.setScene(scene);
            stage.show();
        } catch (IOException ex) {
            Logger.getLogger(eventsController.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

}