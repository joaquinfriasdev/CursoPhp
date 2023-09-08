<?php
//Clase Persona
class persona
{

    public $nombre; //Se puede acceder públicamente.
    private $edad; // Únicamente se puede acceder desde la clase donde definimos.
    protected $altura; //Solo se puede acceder desde la misma clase y las clases heredadas.

    function __construct($nuevoNombre)
    {

        $this->nombre = $nuevoNombre;
    }

    public function asignarNombre($nuevoNombre)
    {
        $this->nombre = $nuevoNombre;
    }

    public function imprimirNombre()
    {
        echo "Hola soy " . $this->nombre;
    }

    public function mostrarEdad()
    {
        $this->edad = 20;
        return $this->edad;
    }
}

$objAlumno = new persona("Joaquín Frías"); //Instancia o creación de un objeto
$objAlumno->imprimirNombre();
