<?php
//crear funcion anonima que diga si es multiplo de 5
$multiplo = function($num){
    return $num%5==0;
};

$num=12;

if ($multiplo($num)){
    echo "si";
}
else{
    echo "no";
    }


