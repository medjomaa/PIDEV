package org.example.powergym;

import java.sql.Date;

public class events {
    private int id;
    private String title;
    private String description;
    private String type;
    private Date start_date;
    private Date end_date;;


    public events(String title, String description, String type) {
        
        this.title = title;
        this.description = description;
        this.type = type;
    }


    public events(int id, String title, String description, String type) {
        this.id = id;
        this.title = title;
        this.description = description;
        this.type = type;
    }

    public events(String title, String description, String type, Date start_date,Date end_date) {
        this.title = title;
        this.description = description;
        this.type = type;
        this.start_date = start_date;
        this.end_date = end_date;
    }


    public events(int id, String title, String description, String type, Date start_date,Date end_date ) {
        this.id = id;
        this.title = title;
        this.description = description;
        this.type = type;
        this.start_date = start_date;
        this.end_date = end_date;

    }


    public events(int id) {
        this.id = id;
    }

    public events() {

    }




    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getTitle() {
        return title;
    }

    public void setTitle(String title) {
        this.title = title;
    }

    public String getDescription() {
        return description;
    }

    public void setDescription(String description) {
        this.description = description;
    }

    public String getType() {
        return type;
    }

    public void setType(String type) {
        this.type = type;
    }

    public Date getStart_date() {
        return start_date;
    }

    public void setStart_date(Date start_date) {
        this.start_date = start_date;
    }

    public Date getEnd_date() {
        return end_date;
    }

    public void setEnd_date(Date end_date) {
        this.end_date = end_date;
    }

}
