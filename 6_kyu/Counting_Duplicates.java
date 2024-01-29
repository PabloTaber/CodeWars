import java.util.HashMap;
import java.util.Map;
import java.util.Set;

public class CountingDuplicates {
  public static int duplicateCount(String text) {
    Map<Character, Integer> mapaTexto = new HashMap<>();
    int duplicados = 0;

    text = text.toLowerCase();
    for (char c : text.toCharArray()) {
      mapaTexto.put(c, mapaTexto.getOrDefault(c, 0) + 1);
    }

    Set<Character> claves = mapaTexto.keySet();

    for (Character c : claves) {
      if (mapaTexto.get(c) > 1) {
        duplicados++;
      }
    }

    return duplicados;
  }
}
