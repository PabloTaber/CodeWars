public class FindOutlier {
    static int find(int[] integers) {
      int cuentaPar = 0;
      int par = 0;
      int impar = 0;
  
      for (int i : integers) {
        if (i % 2 == 0) {
          cuentaPar++;
          par = i;
        } else {
          impar = i;
        }
      }
  
      return cuentaPar == 1 ? par : impar;
  
    }
  }