<?php
class Calculadora {
    private $valor = 0;

    public function sumar($numero) {
        $this->valor += $numero;
        return $this;
    }

    public function restar($numero) {
        $this->valor -= $numero;
        return $this;
    }

    public function obtenerResultado() {
        return $this->valor;
    }
}

$calc = new Calculadora();
$resultado = $calc->sumar(5)->restar(3)->obtenerResultado();
echo $resultado;

//el encadenamiento permite llamar a varios metodos en una sola linea de codigo