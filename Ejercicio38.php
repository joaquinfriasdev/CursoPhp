<?php
// Abriendo un archivo para leer su contenido

$archivo="contenido.txt";//Ruta del archivo

$archivoAbierto=fopen($archivo,"r");// Abrir archivo en modo lectura

$contenido=fread($archivoAbierto,filesize($archivo)); // leer contenido abierto de acuerdo a su tamaño

echo $contenido;

?>