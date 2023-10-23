<?php
function saludar($nombre, $saludo = "Hola") {
    echo "$saludo, $nombre!";
}

saludar("Johanna"); 
saludar("Joan", "Hi"); 
//Los parametros por defecto funcionan para poner valores predeterminados. Si no se dan todos los argumentos
//que solicita la funcion, se pondran los parametros por defecto