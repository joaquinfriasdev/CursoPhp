<?php

$jsonContenido='[
{"nombre":"Joaquin","apellido":"Frias"},
{"nombre":"Gerardo","apellido":"Frias"}]';

    $resultado=json_decode($jsonContenido);
    //print_r($resultado);

    foreach($resultado as $persona){

        echo ($persona->nombre)." ".($persona->apellido)."<br>";
    }
?>