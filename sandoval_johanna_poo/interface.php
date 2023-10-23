<?php
interface Forma {
    public function dibujar();
}

    class Circulo implements Forma {
        public function dibujar() {
        echo "Dibujando un círculo";
    }
}


$c1 = new Circulo();
$c1->dibujar(); 
//La interfaces sirven para aplicar metodos en todas las clases en las que se implementen
//por ejemplo, si se crean mas formas todas tendran el metodo dibujar