<?php

class Pared{
    private string $materiales;
    public function __construct($materiales)
    {
      echo 'Soy el Constructor. Se ejecuta automaticamente';
    }
    public function get_materiales(){
        return $this->materiales;
    }
    public function set_materiales($materiales){
        $this->materiales=$materiales;
    }
    public function saludar(){
        echo '<br>'.'Invocando un metodo php';
    }

} 

$pared_sala = new Pared('Bloque numero 5, 20x20 cm');
echo '<br>';
$pared_habitacion = new Pared('Bloque numero 6, 20x20 cm');
$pared_habitacion -> saludar();

//metodo magico
