<?php
require_once('Automovil.php');

$automovil1 = new Automovil("Volkswagen", "Polo Track", 8000, "sedán", "gris");

echo 'Marca:'.$automovil1 -> get_marca().'<br>';
echo 'Modelo:'.$automovil1 -> get_modelo().'<br>';
echo 'Precio:'.$automovil1 -> get_precio().'<br>';


echo 'Tipo:'.$automovil1 -> get_tipo().'<br>';
echo 'Color:'.$automovil1 -> get_color().'<br>';
$automovil1->saludar();
