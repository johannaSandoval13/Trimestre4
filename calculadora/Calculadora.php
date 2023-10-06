<?php
//recibe los datos del formulario
$num1 = $_POST['operador1'];
$num2 = $_POST['operador2'];
$seleccion = $_POST['operacion'];

echo 'Operador 1:'. ' '.$num1 . '<br>';
echo 'Operador 2:'.' '.$num2 . '<br>';

echo 'el operador es:' . ' '. $seleccion . '<br>';

class Calculadora{
    public int $num1;
    public int $num2;

    public function get_num1(){
        return $this->num1;
    }
    public function set_num1 (int $num1){
        if(!empty($num1) && is_numeric($num1)){
            $this->num1 = $num1;
        }
    }
    public function get_num2(){
        return $this->num2;
    }
    public function set_num2 (int $num2){
        if(!empty($num2) && is_numeric($num2)){
            $this->num2 = $num2;
        }
    }
    public function calculadora($seleccion){
        if ($seleccion == 'sumar'){
            return $this->num1 + $this->num2;
        }
        elseif ($seleccion == 'restar'){
            return $this->num1 - $this->num2;
        }
        elseif ($seleccion == 'multiplicar'){
            return $this->num1 * $this->num2;
        }
        elseif ($seleccion == 'dividir'){
            if ($this->num2 !=0){
                return $this->num1 / $this->num2;}
            else{
                return'No es posible dividir por cero';
            }
        }
        else{
            return 'Aqui no hay nada';
        }
        }
    }


$c1= new Calculadora();
$c1->set_num1($num1);
$c1->set_num2($num2);
$r= $c1->calculadora($seleccion);
echo "el resultado es: ". $r;

