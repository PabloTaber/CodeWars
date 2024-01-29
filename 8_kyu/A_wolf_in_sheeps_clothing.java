public class ZywOo {

    public static String warnTheSheep(String[] array) {
      int oveja = 0;
  
      if (array[array.length - 1].equals("wolf")) {
        return "Pls go away and stop eating my sheep";
      } else {
        for (int i = 0; i < array.length; i++) {
          if (array[i].equals("wolf")) {
            oveja = array.length - i - 1;
            break;
          }
        }
        return "Oi! Sheep number " + oveja + "! You are about to be eaten by a wolf!";
      }
    }
  }
