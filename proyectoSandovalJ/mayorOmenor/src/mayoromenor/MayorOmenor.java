
package mayoromenor;

import java.util.Scanner;


public class MayorOmenor {


    public static void main(String[] args) {
        
        int num1=0;
        int num2=0;
        
        Scanner teclado =new Scanner(System.in);
        System.out.println("Digite un numero: ");
        num1=teclado.nextInt();
        
        System.out.println("Digite otro numero: ");
        num2=teclado.nextInt();
        
        if (num1>=num2){
            if(num1==num2){
            System.out.println(num1+" y "+num2+" son iguales");
            }else{
                System.out.println(num1+" es mayor que "+num2);
           } 
            }else{
                  System.out.println(num2+" es mayor que "+num1); }
        
        }
    }
    

