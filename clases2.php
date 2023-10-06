<?php
class Docente {
    private string $tipo_doc;
    private string $num_doc;

    public function __construct($tipo_doc, $num_doc) {
        $this->tipo_doc = $tipo_doc;
        $this->num_doc = $num_doc;
    }
    //GET: mostrar
    public function get_tipo_doc(){
        return $this->tipo_doc;
    }
    public function get_num_doc(){
        return $this->num_doc;
    }
    //SET: guardar
    //Atributo ! $Variable
    public function set_tipo_doc($tipo_doc){
        $this->tipo_doc = $tipo_doc;
    }
    public function set_num_doc($num_doc){
        $this->num_doc = $num_doc;
    }
}
//Creamos un objeto y este objeto invoca el metodo
$docente1 = new Docente('CC', '54877684');
$docente2 = new Docente('TI', '1074963542');
$docente3 = new Docente('CE', '26598743');
$docente4 = new Docente('CC', '1555425686');
$docente5 = new Docente('RC', '87499163');
//
echo 'Datos del docente 1:' . '<br>';
echo '->Tipo de documento:' .$docente1-> get_tipo_doc() . '<br>';
echo '->Numero de documento:' .$docente1 -> get_num_doc() . '<br>';
echo 'Datos del docente 2:'. '<br>';
echo '->Tipo de documento:' .$docente2-> get_tipo_doc() . '<br>';
echo '->Numero de documento:' .$docente2 -> get_num_doc() . '<br>';
echo 'Datos del docente 3:'. '<br>';
echo '->Tipo de documento:' .$docente3-> get_tipo_doc() . '<br>';
echo '->Numero de documento:' .$docente3 -> get_num_doc() . '<br>';
echo 'Datos del docente 4:'. '<br>';
echo '->Tipo de documento:' .$docente4-> get_tipo_doc() . '<br>';
echo '->Numero de documento:' .$docente4 -> get_num_doc() . '<br>';
echo 'Datos del docente 5:'. '<br>';
echo '->Tipo de documento:' .$docente5-> get_tipo_doc() . '<br>';
echo '->




Numero de documento:' .$docente5 -> get_num_doc() . '<br>';
//El objeto llama al metodo que asigna tipo_doc
$docente1->set_tipo_doc('CC');

//computadora y cerveza