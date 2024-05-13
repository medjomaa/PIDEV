package services;

import org.example.powergym.events;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;
import utils.MyConnection;

import java.util.logging.Level;
import java.util.logging.Logger;

public class ServiceEvents implements IService<events> {
    private static ServiceEvents instance;
    private Connection cnx = MyConnection.getInstance().getConnection();
    private Statement ste;
    private PreparedStatement pre;
    public ServiceEvents() {
        try {
            ste = cnx.createStatement();
        } catch (SQLException ex) {
            System.out.println(ex);
        }
    }

    public static ServiceEvents getInstance() {
        if (instance == null) {
            instance = new ServiceEvents();
        }
        return instance;

    }

    @Override
    public void addev(events t) {
        try {
            String req = "INSERT INTO events (title, description,type,start_date,end_date) VALUES ('" + t.getTitle() + "','" + t.getDescription() + "','" + t.getType() + "','" + t.getStart_date()+ "' ,'" + t.getEnd_date()+ "')";
            Statement st = cnx.createStatement();
            st.executeUpdate(req);
            System.out.println("Event added !");
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
    }




    @Override
    public void updateev(events t) {
        try {
            String req = "UPDATE events SET title='" + t.getTitle() + "',description='" + t.getDescription() + "',type='" + t.getType() + "',start_date='" + t.getStart_date() + "',end_date='" + t.getEnd_date() + "' WHERE id=" + t.getId();
            Statement st = cnx.createStatement();
            st.executeUpdate(req);
            System.out.println("Event updated !");
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
    }

    @Override
    public void deleteev(events t) {
        try {
            String req = "DELETE FROM events where id=" + t.getId();
            Statement st = cnx.createStatement();
            st.executeUpdate(req);
            System.out.println("Event deleted !");
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
    }

    @Override
    public List<events> listev() {
        List<events> list = new ArrayList<>();

        try {
            String req = "SELECT * FROM events";
            Statement st = cnx.createStatement();
            ResultSet rs = st.executeQuery(req);
            while(rs.next()) {
                list.add(new events(rs.getInt(1), rs.getString("title"), rs.getString("description"), rs.getString("type"), rs.getDate("start_date"), rs.getDate("end_date")));
            }
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }

        return list;
    }
    public List <events> readAll(){

        String req="select * from events";
        List <events> list=new ArrayList<>();

        try {
            Statement st = cnx.createStatement();
            ResultSet rs = st.executeQuery(req);
            while(rs.next()){
                list.add(new events(rs.getInt("id"),rs.getString("title"),rs.getString("description"),rs.getString("type"),rs.getDate("start_date"),rs.getDate("end_date")));
            }
        } catch (SQLException ex) {
            Logger.getLogger(ServiceEvents.class.getName()).log(Level.SEVERE, null, ex);
        }
        return list;
    }

}
