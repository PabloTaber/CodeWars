public class GrassHopper {

    public static char getGrade(int s1, int s2, int s3) {
        int media = (s1 + s2 + s3) / 3;

        if (media < 60) {
            return 'F';
        } else if (media < 70) {
            return 'D';
        } else if (media < 80) {
            return 'C';
        } else if (media < 90) {
            return 'B';
        } else {
            return 'A';
        }

    }
}

