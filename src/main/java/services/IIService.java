
package services;

import java.util.List;

public interface IIService<categories>  {

    public void addCate(categories t);

    public void updateCate(categories t);

    public void deleteCate(categories t);

    public List<categories> showCate();


}