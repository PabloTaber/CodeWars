public class Sum {
    public int GetSum(int a, int b) {
 
       if (a == b) {
          return a;
       }
 
       int menor = Math.min(a, b);
       int mayor = Math.max(a, b);
       int suma = mayor;
 
       for (; menor < mayor; menor++) {
          suma += menor;
       }
 
       return suma;
    }
 }