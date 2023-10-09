<?php
require('Computador.php');

class Desktop extends Computador{
    public bool $ups;

    public function __construct($fabricante,$capMemoria,$tipoMemoria,$capAlmacenamiento,$tipoAlmacenamiento,$sistemaOperativo,$suiteOficina,$procesador,$numPuertosUSB,$ups){
        parent::__construct($fabricante,$capMemoria,$tipoMemoria,$capAlmacenamiento,$tipoAlmacenamiento,$sistemaOperativo,$suiteOficina,$procesador,$numPuertosUSB);
        $this->ups=$ups;  
    }
}