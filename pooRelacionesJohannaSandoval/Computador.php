<?php

class Computador{
    public string $fabricante;
    public float $capMemoria;
    public string $tipoMemoria;
    public int $capAlmacenamiento;
    public string $tipoAlmacenamiento;
    public string $sistemaOperativo;
    public string $suiteOficina;
    public string $procesador;
    public int $numPuertosUSB;
    public static $numElementos = 0;

    public function __construct($fabricante,$capMemoria,$tipoMemoria,$capAlmacenamiento,$tipoAlmacenamiento,$sistemaOperativo,$suiteOficina,$procesador,$numPuertosUSB)
    {
        $this->fabricante=$fabricante;
        $this->capMemoria=$capMemoria;
        $this->tipoMemoria=$tipoMemoria;
        $this->capAlmacenamiento=$capAlmacenamiento;
        $this->tipoAlmacenamiento=$tipoAlmacenamiento;
        $this->sistemaOperativo=$sistemaOperativo;
        $this->suiteOficina=$suiteOficina;
        $this->procesador=$procesador;
        $this->numPuertosUSB=$numPuertosUSB;
    }

    public function fechaHoy(){
        date_default_timezone_set('America/Bogota'); 
        $fechaHoraActual = date('Y-m-d');
        return $fechaHoraActual;
    }
    public function conteo(){
        echo "<br>"."Elemento:".self:: $numElementos+=1;
        return;
    }
}

//$a = new Computador("hp", 21, "ram", 5, "gb", "a", "office","intel", 5); 
//echo $a->fechaHoy();
//echo $a->conteo();
