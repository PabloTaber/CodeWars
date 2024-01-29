public class NoBoring {
        public static int noBoringZeros(int n) {
            
            if (n == 0) {
              return 0;
            }else{
              return n % 10 != 0 ? n : noBoringZeros(n / 10);          
            } 
    
        }
    }