<?php
class Producto { 
    private $nombreProducto; 
    private $precio; 

public function __construct($nombreProducto, $precio) { 
$this->nombreProducto = $nombreProducto; 
$this->precio = $precio; 
} 

public function getNombreProducto() { 
return $this->nombreProducto; 
}

public function getPrecio() { 
return $this->precio; 
}
}

class CarroCompra { 
private $productos = array(); 
public function agregarProducto(Producto $producto) { 
$this->productos[] = $producto; 
} 

public function getSubtotal() { 
$subtotal = 0; 
foreach ($this->productos as $producto) { 
$subtotal += $producto->getPrecio(); 
} 
return $subtotal; 
}

public function vaciarCarro() { 
$this->productos = array(); 
}


$p1 = new Producto("Camisa", 20000);
$carro = new CarroCompra();
$carro->agregarProducto($p1);
echo "Subtotal: $" . $carro->getSubtotal();

$carro->vaciarCarro();

//Esto es util para una aplicacion comercial porque tiene funcionaliades utiles para comercios
//por ejemplo el poder agregar productos a un carrito y poder ver cuanto precio tienen los productos agregados