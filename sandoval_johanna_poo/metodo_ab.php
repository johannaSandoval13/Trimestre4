<?php
abstract class Animal {
    abstract public function hacerSonido();
}

class Perro extends Animal {
    public function hacerSonido() {
        return "Guau!";
    }
}

//Para hacer metodos abstactos se necesitan clases abstactas
//Estos deben ser  y son implementados en las herencias.
