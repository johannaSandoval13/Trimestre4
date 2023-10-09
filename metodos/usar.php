<?php
require('Empleado.php');

$empleado1= new Empleado('Johanna', '13/2/2006');

$empleado1->metodoNoEstatico();
$empleado1::metodoEstatico();

Empleado::$nacionalidad='colombiana';
echo "Tengo nacionalidad".'<br>'.Empleado::$nacionalidad;

$empleado1->contar();
$empleado1->contar();
$empleado1->contar();