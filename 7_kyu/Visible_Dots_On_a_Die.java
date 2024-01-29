public class DiceDotCount {

    public static int sumaLados(int numLados) {
      if (numLados == 1) {
        return 1;
      } else {
        return numLados + sumaLados(--numLados);
      }
    }
  
      
    public static int totalAmountVisible(int topNum, int numOfSides){
  
      return sumaLados(numOfSides) - (++numOfSides - topNum);
    }
  }
