<?php
//Una clase es una plantilla que dice como son los datos
//Un objeto es el dato
class Aprendiz{
    //atributos:
    public string $tipo_doc;
    public string $num_document;
    public string $nombre;
    public string $apellido;
    public string $correo;
    public int $edad;
    public float $peso;
    public bool $activo;

    public function __construct($tipo_doc,$num_document,$nombre,$apellido,$correo,$edad,$peso,$activo) {
        //notacion flecha
        $this->tipo_doc = $tipo_doc;
        $this->num_document = $num_document;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->correo = $correo;
        $this->edad = $edad;
        $this->peso = $peso;
        $this->activo =$activo; 
    }
    //es una funcion
}
//creando e instanciando
$aprendiz1 = new Aprendiz('TI','1074810634','JOHANNA','SANDOVAL','johanna@',17,57.0,TRUE);

echo 'Tipo de documento:' . $aprendiz1->tipo_doc;
echo '<br>';
echo 'Numero de documento:' . $aprendiz1->num_document;
echo '<br>';
echo 'Nombre:' .$aprendiz1->nombre;
echo '<br>';
echo 'Apellido:' .$aprendiz1->apellido;
echo '<br>';
echo 'Correo:' .$aprendiz1->correo;
echo '<br>';
echo 'Edad:' .$aprendiz1->edad;
echo '<br>';
echo 'Peso:' .$aprendiz1->peso;
echo '<br>';
echo 'Activo:' .$aprendiz1->activo;
