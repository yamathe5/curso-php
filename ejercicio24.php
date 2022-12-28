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

$objAlumno = new persona();
$objAlumno->asignarNombre("Oscar");

$objAlumno2 = new persona();
$objAlumno2->asignarNombre("Pedro");
$objAlumno2->imprimirNombre(); 

echo $objAlumno->nombre;
echo $objAlumno2->nombre;
echo $objAlumno2->edad;
echo $objAlumno2->altura;


?>