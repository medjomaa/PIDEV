package utils;
import java.util.regex.Matcher;
import services.cons;

public class categutils {
    public boolean testNom(String name) {

        Matcher matcher = cons.VALID_NAME.matcher(name);
        return matcher.find();

    }
    public boolean testNbr(String comment) {

        Matcher matcher = cons.VALID_NBR.matcher(comment);
        return matcher.find();
    }

}