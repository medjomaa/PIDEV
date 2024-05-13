package utils;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;
import java.sql.Statement;

public class MyConnection {
    // Design Pattern - Singleton

    public String url = "jdbc:mysql://localhost:3306/powergym";
    public String login = "root";
    public String pwd = "";
    public Connection con;
    public static MyConnection instance;

    private MyConnection() {
        try {
            con = DriverManager.getConnection(url, login, pwd);
            var smt = con.createStatement();
            var sql = "CREATE DATABASE IF NOT EXISTS powergym";
            smt.executeUpdate(sql);
            System.out.println("Database created or already exists!");
            con = DriverManager.getConnection(url, login, pwd);
            System.out.println("Connected!");
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
    }

    public Connection getConnection() {
        return con;
    }

    public static MyConnection getInstance() {
        if (instance == null) {
            instance = new MyConnection();
        }
        return instance;
    }
}