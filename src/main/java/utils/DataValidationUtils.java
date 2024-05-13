package utils;

import java.util.regex.Pattern;

public class DataValidationUtils {
    
    
    public static boolean isNameValid(String name) {return Pattern.matches("^[a-zA-Z]{3,}$", name);}

   // public static boolean isProductNameValid(String description) {return Pattern.matches("^[a-zA-Z]{3,}$", description);}

   
    public static boolean isDescriptionValid(String description) {return Pattern.matches("^[a-zA-Z]{3,}$", description);}


    public static boolean isTypeValid(String type) {
        return Pattern.matches("^[a-zA-Z]{3,}$", type);
    }

    

}
    

