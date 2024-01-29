import java.lang.StringBuilder;

class Solution {

    static String toCamelCase(String s) {
        StringBuilder camel = new StringBuilder();
        boolean mayuscula = false;

        for (char letra : s.toCharArray()) {
            if (Character.isLetter(letra)) {
                if (mayuscula) {
                    camel.append(Character.toUpperCase(letra));
                    mayuscula = false;
                }else{
                    camel.append(letra);
                }
            } else {
                mayuscula = true;
            }
        }
        return camel.toString();
    }
}