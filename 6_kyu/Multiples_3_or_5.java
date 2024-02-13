public class Solution {

    public int solution(int number) {
      int resultado = 0;

      for (int i = 1; i < number; i++) {
        if (i % 3 == 0 || i % 5 == 0) {
            resultado += i;
        }
      }

      return resultado;
    }
}