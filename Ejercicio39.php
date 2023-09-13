<?php

$nombreArchivo="archivo.txt";
$contenidoArchivo="Hola, saludos";

$archivoACrear= fopen($nombreArchivo,"w"); // Se abre el archivo inexistente en modo escritura. Write
fwrite($archivoACrear,$contenidoArchivo);// Pasamos el contenido del archivo al archivo a crear utilizando la funcion fwrite

fclose($archivoACrear);// Se cierra el archivo

?>