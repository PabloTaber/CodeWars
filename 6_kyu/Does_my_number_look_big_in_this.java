public class NumberUtils {

    public static boolean isNarcissistic(int number) {
        
        String numero = String.valueOf(number);
        int tamaño = numero.length();
        int suma = 0;

        for (int i = 0; i < tamaño; i++) {
            suma += Math.pow(Character.getNumericValue(numero.charAt(i)), tamaño);
        }

        return suma == number ? true : false;
    }

}