import java.util.HashMap;
import java.util.Map;

public class Greed {
  private static final int[] valores = { 0, 1000, 200, 300, 400, 500, 600 };

  private static int obtenerPuntuacion(Map<Integer, Integer> recuento) {
    int puntos = 0;

    for (Integer caras : recuento.keySet()) {
      int contador = recuento.get(caras);

      if (contador >= 3) {
        contador -= 3;
        puntos += valores[caras];
      }

      puntos += caras == 1 ? 100 * contador : 0;
      puntos += caras == 5 ? 50 * contador : 0;

    }

    return puntos;
  }

  public static int greedy(int[] dice) {
    Map<Integer, Integer> recuento = new HashMap<>();

    for (int cara : dice) {
      recuento.put(cara, recuento.getOrDefault(cara, 0) + 1);
    }

    return obtenerPuntuacion(recuento);
  }
}