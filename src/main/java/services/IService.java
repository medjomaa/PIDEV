package services;
import org.example.powergym.events;

import java.util.List;

public interface IService<events> {
    public void addev(events t);

    public void updateev(events t);

    public void deleteev(events t);

    public List<events> listev();

    public List <events> readAll();

}
