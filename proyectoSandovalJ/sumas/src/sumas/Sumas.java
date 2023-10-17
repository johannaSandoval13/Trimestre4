
package sumas;

import java.util.Scanner;

public class Sumas {

    public static void main(String[] args) {
        
    //Variables:
        int num1=0;
        int num2=0;
        int suma=0;
        int resta=0;
        int multiplicacion=0;
        int division=0;
        String nombre ="";
        
        Scanner teclado =new Scanner(System.in);
        System.out.println("Señor usuario digite el primer numero");
        num1=teclado.nextInt();
        System.out.println("Usted digito el numero: "+num1);
        

        System.out.println("Señor usuario digite el segundo numero");
        num2=teclado.nextInt();
        System.out.println("Usted digito el numero: "+num2);
        
        suma=num1+num2;
        System.out.println("El resultado de la suma es: "+suma);
        
        resta=num1-num2;
        System.out.println("El resultado de la resta es: "+resta);

        multiplicacion=num1*num2;
        System.out.println("El resultado de la multiplicacion es: "+multiplicacion);
        
        division=num1/num2;
        System.out.println("El resultado de la division es: "+division);

    }
    
}
