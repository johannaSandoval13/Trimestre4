<?php
class Cerveza{
    public string $marca;
    public float $precio;
    public int $porcentaje_alcohol;

    public function __construct($marca, $precio, $porcentaje_alcohol) {
        $this->marca = $marca;
        $this->precio = $precio;
        $this->porcentaje_alcohol = $porcentaje_alcohol;
    }

    public function get_marca(){
        return $this->marca;
    }
    public function get_precio(){
        return $this->precio;
    }
    public function get_porcentaje_alcohol(){
        return $this->porcentaje_alcohol;
    }

    public function set_marca($marca){
    $this->marca = $marca;
    }
    public function set_precio($precio){
        $this->precio = $precio;
    }
    public function set_porcentaje_alcohol($porcentaje_alcohol){
        $this->porcentaje_alcohol = $porcentaje_alcohol;
    }
}
$cerveza1 = new Cerveza('corona', 4900.00, 40);
$cerveza2 = new Cerveza('heineken', 3000.00, 40);
$cerveza3 = new Cerveza('budweiser', 3250, 35);
$cerveza4 = new Cerveza('club Colombia', 2940, 40);
$cerveza5 = new Cerveza('poker', 2800, 35);


function devolver_fecha_actual() {

    date_default_timezone_set('America/Bogota'); 
    $fechaHoraActual = date('Y-m-d H:i');
    return $fechaHoraActual;
}
$fechaHora = devolver_fecha_actual();
echo "La fecha actual es: " . $fechaHora;