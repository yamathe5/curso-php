<?php

class Persona 
{
    public $nombre; //propiedades
    private $edad;
    protected $altura;

    public function asignarNombre($nuevoNombre){ //metodos
        $this->nombre= $nuevoNombre;
    }
    public function imprimirNombre(){
        echo "Hola soy " . $this->nombre;
    }
    public function mostrarEdad(){
        $this->edad = 20;
        return $this->edad;
    }
}

class Trabajador extends Persona {
    public $puesto;
}

$objTrabajador = new Trabajador();
$objTrabajador->asignarNombre("Oscarcito");

echo $objTrabajador->nombre;
$objTrabajador->puesto = "Trabajador";

?>