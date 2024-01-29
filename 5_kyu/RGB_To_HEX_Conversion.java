public class RgbToHex {

  static String pasarAHex(int a) {
      if (a <= 0) {
          return "00";
      } else if (a >= 255) {
          return "FF";
      } else {
          return Integer.toHexString(a).toUpperCase();
      }
  }

  static String añadirCero(String a) {

      return a.length() > 1 ? a : "0" + a;
  }

  public static String rgb(int r, int g, int b) {

      String primero = añadirCero(pasarAHex(r));
      String segundo = añadirCero(pasarAHex(g));
      String tercero = añadirCero(pasarAHex(b));

      return primero + segundo + tercero;
  }
}