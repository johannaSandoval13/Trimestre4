<?php
function factorial($n) {
    if ($n <= 1) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

$factorial_de_5 = factorial(5);

//La funciones recursicas se llaman a si mismas