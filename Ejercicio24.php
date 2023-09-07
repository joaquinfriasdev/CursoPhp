<?php

class persona
{

    public $nombre; //propiedades

    public function asignarNombre($nuevoNombre)
    { //acciones o métodos

        $this->nombre = $nuevoNombre;
    }

    public function imprimirNombre()
    {
        echo "Hola soy ".$this->nombre;
    }
}
$objAlumno = new persona(); //Instancia o creación de un objeto
$objAlumno->asignarNombre("Joaquín"); //Llamamos al método asignarNombre

echo $objAlumno->nombre; // Imprimir una propiedad

$objAlumno2 = new persona();
$objAlumno2->asignarNombre("Gerardo");
$objAlumno2->imprimirNombre();

echo $objAlumno2->nombre;
