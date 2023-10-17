
package longitud;

import java.util.Scanner;


public class Longitud {


    public static void main(String[] args) {
        String frase="";
        
        Scanner teclado =new Scanner(System.in);
        System.out.println("Ingrese una frase, el programa le dira la cantidad de palabras: ");
        frase=teclado.next();
        
        System.out.println("La frase tiene "+frase.length()+" palabras");
    }
    
}
