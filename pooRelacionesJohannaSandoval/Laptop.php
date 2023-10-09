<?php
require('Computador.php');

class Laptop extends Computador{
    public bool $tactil;
    public float $capBateria;

    public function __construct($fabricante,$capMemoria,$tipoMemoria,$capAlmacenamiento,$tipoAlmacenamiento,$sistemaOperativo,$suiteOficina,$procesador,$numPuertosUSB,$tactil,$capBateria){
        
        parent::__construct($fabricante,$capMemoria,$tipoMemoria,$capAlmacenamiento,$tipoAlmacenamiento,$sistemaOperativo,$suiteOficina,$procesador,$numPuertosUSB);
        $this->tactil=$tactil;
        $this->capBateria=$capBateria;
    }
    public function vof(){
        if ($this->tactil==true){
            return "Verdadero";
        }
        else{
            return "Falso";
        }
    }
}