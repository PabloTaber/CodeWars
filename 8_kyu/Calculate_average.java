public class Kata {

    public static double find_average(int[] array) {
        double suma = 0;

        for (int i : array) {
            suma += i;
        }

        return array.length == 0 ? 0 : suma / array.length;
    }
}