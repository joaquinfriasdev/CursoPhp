<?php

class conexion{

        private $servidor="localhost";
        private $usuario="root";
        private $contrasenia="";
        private $conexion;

        public function __construct(){
            try{
                $this->conexion= new PDO("mysql:host=$this->servidor;dbname=album",$this->usuario,$this->contrasenia);
                $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }catch(PDOException $e){
                return "falla de conexion".$e;
        }
    }

    //Método para insertar, borrar y actualizar datos
    public function ejecutar($sql){
        $this->conexion->exec($sql);
        return $this->conexion->lastInsertId();
    }

    //Método para consultar datos
    public function consultar($sql){
        $sentencia=$this->conexion->prepare($sql);
        $sentencia->execute();
        return $sentencia->fetchAll();
    }


}

?>