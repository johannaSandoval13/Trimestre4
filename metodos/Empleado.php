<?php

class Empleado{
    protected $nombre;
    protected $fechaNacimiento;
    public static $nacionalidad;
    public static $contador = 0;

    public function __construct($nombre, $fechaNacimiento){
        $this->nombre=$nombre;
        $this->fechaNacimiento=$fechaNacimiento;
    }
    public static function metodoEstatico(){
        echo "Soy un metodo estático. No necesito de un objeto, me invocas desde una clase".'<br>';
    }
    public function metodoNoEstatico(){
        echo "Soy un metodo NO estatico, necesito de un objeto.".'<br>';
    }
    public function contar(){
        echo "Conteo: ".self:: $contador+=1;
        return;
    }
}

