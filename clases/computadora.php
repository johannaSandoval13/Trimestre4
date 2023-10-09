<?php
class Computadora{
    private string $marca;
    private string $sistema_operativo;
    private string $memoria_ram;

    public function __construct($marca, $sistema_operativo, $memoria_ram) {
        $this->marca = $marca;
        $this->sistema_operativo = $sistema_operativo;
        $this->memoria_ram = $memoria_ram;
    }

    public function get_marca(){
        return $this->marca;
    }
    public function get_sistema_operativo(){
        return $this->sistema_operativo;
    }
    public function get_memoria_ram(){
        return $this->memoria_ram;
    }

    public function set_marca($marca){
    $this->marca = $marca;
    }
    public function set_sistema_operativo($sistema_operativo){
        $this->sistema_operativo = $sistema_operativo;
    }
    public function set_memoria_ram($memoria_ram){
        $this->memoria_ram = $memoria_ram;
    }
}

$compu1 = new Computadora('DELL', 'Windows', '8GB');
$compu2 = new Computadora('DELL', 'Linux', '16GB');
$compu3 = new Computadora('HP', 'Windows', '4GB');
$compu4 = new Computadora('VANT', 'Linux', '8GB');
$compu5 = new Computadora('LENOVO', 'Windows', '16GB');


echo 'Datos del computador 1:' . '<br>';
echo '->Marca:' .$compu1-> get_marca() . '<br>';
echo '->Sistema operativo:' .$compu1 -> get_sistema_operativo() . '<br>';
echo '->Memoria RAM:' .$compu1 -> get_memoria_ram() . '<br>';
echo 'Datos del computador 2:'. '<br>';
echo '->Marca:' .$compu2-> get_marca() . '<br>';
echo '->Sistema operativo:' .$compu2 -> get_sistema_operativo() . '<br>';
echo '->Memoria RAM:' .$compu2 -> get_memoria_ram() . '<br>';
echo 'Datos del computador 3:'. '<br>';
echo '->Marca:' .$compu3-> get_marca() . '<br>';
echo '->Sistema operativo:' .$compu3 -> get_sistema_operativo() . '<br>';
echo '->Memoria RAM:' .$compu3 -> get_memoria_ram() . '<br>';
echo 'Datos del computador 4:'. '<br>';
echo '->Marca:' .$compu4-> get_marca() . '<br>';
echo '->Sistema operativo:' .$compu4 -> get_sistema_operativo() . '<br>';
echo '->Memoria RAM:' .$compu4 -> get_memoria_ram() . '<br>';
echo 'Datos del computador 5:'. '<br>';
echo '->Marca:' .$compu5-> get_marca() . '<br>';
echo '->Sistema operativo:' .$compu5 -> get_sistema_operativo() . '<br>';
echo '->Memoria RAM:' .$compu5 -> get_memoria_ram() . '<br>';




function devolver_fecha_actual() {

    date_default_timezone_set('America/Bogota'); 
    $fechaHoraActual = date('Y-m-d H:i');
    return $fechaHoraActual;
}
$fechaHora = devolver_fecha_actual();
echo '<br>'. "La fecha actual es: " . $fechaHora;