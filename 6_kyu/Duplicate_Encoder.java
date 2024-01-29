import java.util.HashMap;
import java.util.Map;

public class DuplicateEncoder {
	
  static String encode(String word){
    Map<Character, Integer> mapa = new HashMap<>();
    StringBuilder resultado = new StringBuilder();
    
    for (char c : word.toLowerCase().toCharArray()) {
      mapa.put(c, mapa.getOrDefault(c, 0) + 1 );
    }
    
    for (char c : word.toLowerCase().toCharArray()) {
      resultado.append(mapa.get(c) == 1 ? "(" : ")");
    }
  
    return resultado.toString();
  }
}
