<?php
require('Clase2.php');

use Sena as S;

$persona1= new S\Persona('Johanna Sandoval', 'johanna@gmail','Bom dia. . .');
echo 'Datos...';
echo '<br>'.'Nombres:'.$persona1->nombre.'<br>';
echo 'Correo:'.$persona1->correo.'<br>';
echo 'Saludo:'.Sena\Persona::$saludo.'<br>';