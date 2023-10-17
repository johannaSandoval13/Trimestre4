
package salario;

import java.util.Scanner;
import javax.swing.JOptionPane;

public class Salario {


    public static void main(String[] args) {
    
    String nombre=JOptionPane.showInputDialog("Escriba su nombre: ");
    String apellido=JOptionPane.showInputDialog("Escriba su apellido: ");
    int salario=Integer.parseInt(JOptionPane.showInputDialog("Ingrese su salario: "));
    int dias=Integer.parseInt(JOptionPane.showInputDialog("Ingrese los dias trabajados: "));
    int resultado=0;

    
    //Scanner teclado =new Scanner(System.in);
    //System.out.println("Ingrese su nombre: ");
    //nombre=teclado.next();
    //System.out.println("Nombre: "+nombre);
    
    //System.out.println("Ingrese su apellido: ");
    //apellido=teclado.next();
    
    //System.out.println("Ingrese su salario mensual: ");
    //salario=teclado.nextInt();
    
    //System.out.println("Ingrese los dias trabajados: ");
   //dias=teclado.nextInt();
    
    resultado=salario/dias;
    System.out.println("La paga de "+nombre+" "+apellido+" al trabajar "+dias+" dias "+" es de "+resultado);
    }
    
}
