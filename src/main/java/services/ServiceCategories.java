package services;

import org.example.powergym.categories;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;
import utils.MyConnection;

public class ServiceCategories implements IIService<categories>{
    private Connection cnx = MyConnection.getInstance().getConnection();
    private Statement ste;
    private PreparedStatement pre;
    public ServiceCategories() {
        try {
            ste = cnx.createStatement();
        } catch (SQLException ex) {
            System.out.println(ex);
        }
    }
    @Override
    public void addCate(categories t) {
        try {
            String req = "INSERT INTO categories (name, comment) VALUES (?, ?)";
            PreparedStatement st = cnx.prepareStatement(req);
            st.setString(1, t.getName());
            st.setString(2, t.getComment());
            st.executeUpdate();
            System.out.println("Category added!");
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }

    }




    @Override
    public void updateCate(categories t) {
        try {
            String req = "UPDATE categories SET name='" + t.getName() + "',comment='" + t.getComment()+ "' WHERE id=" + t.getId();
            Statement st = cnx.createStatement();
            st.executeUpdate(req);
            System.out.println("category updated !");
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
    }

    @Override
    public void deleteCate(categories t) {
        try {
            String req = "DELETE FROM categories where id=" + t.getId();
            Statement st = cnx.createStatement();
            st.executeUpdate(req);
            System.out.println("category deleted !");
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }
    }

    @Override
    public List<categories> showCate() {
        List<categories> list = new ArrayList<>();

        try {
            String req = "SELECT * FROM category";
            Statement st = cnx.createStatement();
            ResultSet rs = st.executeQuery(req);
            while(rs.next()) {
                list.add(new categories(rs.getInt(1), rs.getString("name"), rs.getString("comment")));
            }
        } catch (SQLException ex) {
            System.out.println(ex.getMessage());
        }

        return list;
    }


}
