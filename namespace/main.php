<?php

require('Clase1.php');
$persona1= new Abc\Persona('Johanna Sandoval', 'johanna@gmail','Bom dia. . .');
echo 'Datos...';
echo '<br>'.'Nombres:'.$persona1->nombre.'<br>';
echo 'Correo:'.$persona1->correo.'<br>';
echo 'Saludo:'.Abc\Persona::$saludo.'<br>';

require('Clase2.php');
$persona1= new Sena\Persona('Johanna Sandoval', 'johanna@gmail','Bom dia. . .');
echo 'Datos...';
echo '<br>'.'Nombres:'.$persona1->nombre.'<br>';
echo 'Correo:'.$persona1->correo.'<br>';
echo 'Saludo:'.Sena\Persona::$saludo.'<br>';