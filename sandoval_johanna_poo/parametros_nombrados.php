<?php
function saludar($nombre, $saludo = "Hola") {
    echo "$saludo, $nombre!";
}

saludar(saludo: "Hi", nombre: "Johanna");

//los parametros nombrados permiten pasar argumentos por medio de referencias en listas