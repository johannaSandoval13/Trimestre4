
package ventas;

import java.util.Scanner;

public class Ventas {

    public static void main(String[] args) {
        int lun=0;
        int mar=0;
        int mi=0;
        int jue=0;
        int vie=0;
        int resultado=0;
        
         
       Scanner teclado =new Scanner(System.in);
        System.out.println("Digite las ventas hechas el Lunes: ");
        lun=teclado.nextInt();
        System.out.println("Digite las ventas hechas el Martes: ");
        mar=teclado.nextInt();
        System.out.println("Digite las ventas hechas el Miercoles: ");
        mi=teclado.nextInt();
        System.out.println("Digite las ventas hechas el Jueves: ");
        jue=teclado.nextInt();
        System.out.println("Digite las ventas hechas el Viernes: ");
        vie=teclado.nextInt();
        
        resultado=lun+mar+mi+jue+vie;
        System.out.println("La suma de las ventas de la semana es de: "+resultado);
        
    }
    
}
