<?php

require_once('Laptop.php');

$lap1=new Laptop("Lenovo",16,"RAM",500,"Disco duro","Windows11","Office","Intel Core",4,false,40);

echo 'Fabricante: ' . $lap1->fabricante;
echo '<br>';
echo 'Capacidad de memoria: ' . $lap1->capMemoria;
echo '<br>';
echo 'Tipo de memoria: ' . $lap1->tipoMemoria;
echo '<br>';
echo 'Capacidad de almacenamiento: ' . $lap1->capAlmacenamiento;
echo '<br>';
echo 'Tipo de almacenamiento: ' . $lap1->tipoAlmacenamiento;
echo '<br>';
echo 'Sistema operativo: ' . $lap1->sistemaOperativo;
echo '<br>';
echo 'Suite oficina: ' . $lap1->suiteOficina;
echo '<br>';
echo 'Procesador: ' . $lap1->procesador;
echo '<br>';
echo 'Numero de puertos USB: ' . $lap1->numPuertosUSB;
echo '<br>';
echo "Es tactil?: ".$lap1->vof();
echo '<br>';
echo 'Capacidad de bateria: ' . $lap1->capBateria;