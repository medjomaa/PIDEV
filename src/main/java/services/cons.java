package services;
import java.util.regex.Pattern;


public class cons {
    public static final Pattern VALID_NAME_REGEX = Pattern.compile("^[A-Z][A-Za-z-]+$", Pattern.CASE_INSENSITIVE);
    public static final Pattern VALID_tel_REGEX = Pattern.compile("^[0-9]{8}+$", Pattern.CASE_INSENSITIVE);
    public static final Pattern VALID_NAME = Pattern.compile("^[A-Z][A-Za-z-]+$", Pattern.CASE_INSENSITIVE);
    public static final Pattern VALID_NBR = Pattern.compile("^[0-9]+$", Pattern.CASE_INSENSITIVE);

}