<?php
trait Log {
    public function log($message) {
        echo "Log: $message";
    }
}

class User {
    use Log;
}

$user = new User();
$user->log("Usuario creado");

//Los trait se usan para crear "herencia multiple" ya que php no soporta esto.