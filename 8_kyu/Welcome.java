import java.util.HashMap;
import java.util.Map;

public class Welcome {

  public static String greet(String language) {
    Map<String, String> idiomas = new HashMap<>();
    idiomas.put("english", "Welcome");
    idiomas.put("czech", "Vitejte");
    idiomas.put("danish", "Velkomst");
    idiomas.put("dutch", "Welkom");
    idiomas.put("estonian", "Tere tulemast");
    idiomas.put("finnish", "Tervetuloa");
    idiomas.put("flemish", "Welgekomen");
    idiomas.put("french", "Bienvenue");
    idiomas.put("german", "Willkommen");
    idiomas.put("irish", "Failte");
    idiomas.put("italian", "Benvenuto");
    idiomas.put("latvian", "Gaidits");
    idiomas.put("lithuanian", "Laukiamas");
    idiomas.put("polish", "Witamy");
    idiomas.put("spanish", "Bienvenido");
    idiomas.put("swedish", "Valkommen");
    idiomas.put("welsh", "Croeso");

    return idiomas.getOrDefault(language, idiomas.get("english"));
  }
}