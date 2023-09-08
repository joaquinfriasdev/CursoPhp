<?php
//Clase Persona
class persona
{

    public $nombre; //Se puede acceder públicamente.
    private $edad; // Únicamente se puede acceder desde la clase donde definimos.
    protected $altura; //Solo se puede acceder desde la misma clase y las clases heredadas.

    public function asignarNombre($nuevoNombre)
    { //acciones o métodos

        $this->nombre = $nuevoNombre;
    }

    public function imprimirNombre()
    {
        echo "Hola soy ".$this->nombre;
    }

    public function mostrarEdad(){
        $this->edad=20;
        return $this->edad;
    }
}

$objAlumno = new persona(); //Instancia o creación de un objeto
$objAlumno->asignarNombre("Joaquín"); //Llamamos al método asignarNombre

$objAlumno2 = new persona();
$objAlumno2->asignarNombre("Gerardo");
$objAlumno2->imprimirNombre();

echo $objAlumno2->nombre;
echo $objAlumno->mostrarEdad();

echo $objAlumno->nombre;
