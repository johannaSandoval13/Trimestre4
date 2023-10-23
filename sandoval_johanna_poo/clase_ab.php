<?php


abstract class Figura {
    abstract public function calcularArea();
}

class Circ extends Figura {
    private $radio;

    public function __construct($radio) {
        $this->radio = $radio;
    }

    public function calcularArea() {
        return 3.14 * $this->radio * $this->radio;
    }
}

$circulo = new Circ(5);
echo $circulo->calcularArea();

//Hay una clase abstacta, forma y tiene un metodo calcularArea
//Las clases abstractas no se pueden instanciar pero si heredar