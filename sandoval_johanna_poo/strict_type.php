<?php
declare(strict_types=1);

function sumar(int $a, int $b) {
    return $a + $b;
}

$resultado = sumar(5, 3); 

//Poner el stict_types hace que cada que se verifiquen los tipos de datos ingresados en los parametros de las funciones
