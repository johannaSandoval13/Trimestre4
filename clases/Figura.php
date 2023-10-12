<?php
//esta es una clase absracta, no piede iterarse

abstract class Figura{
    private int $nLados;
    
    public function imprimir(){
        echo 'Soy el metodo de la clase abstracta';
    }
    public function __construct($nLados){
        $this->nLados=$nLados;
    }
}

class Triangulo extends Figura{
    private int $base;
    private int $altura;
    public function __construct($nLados=3, $altura, $base){
        parent ::__construct($nLados,$altura, $base);
        $this->base=$base;
        $this->altura=$altura;
    }
    public function calcularArea($altura,$base){
        $area= $base*$altura/2;
        return $area;
    }
}
class Cuadrilatero extends Figura{
    private $longBase;
    private $longAltura;
    public function __construct($nLados=4, $longAltura, $longBase){
        parent ::__construct($nLados,$longAltura, $longBase);
        $this->longBase=$longBase;
        $this->longAltura=$longAltura;
    }
    public function areaCuadrado($longAltura,$longBase){
        $area= $longBase*$longAltura;
        return $area;
    }
}
class Circulo extends Figura{
    private $longRadio;
    public function __construct($nLados, $longRadio){
        parent ::__construct($nLados,$longRadio);
        $this->longRadio=$longRadio;
    }
    public function calcularDiametro($longRadio){
        $diametro= $longRadio*2;
        return $diametro;
    }
}
$triangulo = new Triangulo(3,3,3);
echo "El area del triangulo es:".$triangulo->calcularArea(3,3);
$cuadrado = new Cuadrilatero(4,8,8);
echo '<br>'."El area del cuadrilatero es:".$cuadrado->areaCuadrado(8,8);
$circulo = new Circulo(0,30);
echo '<br>'."El diametro del circulo es:".$circulo->calcularDiametro(30);