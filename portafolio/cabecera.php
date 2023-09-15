<?php
session_start();
if(isset($_SESSION['usuario']) !="admin"){
    header("Location:login.php");
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portafolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">


</head>
<body>
    <div class="container">
    <a href="index.php">Inicio</a>|
    <a href="portafolio.php">Portafolio</a>|
    <a href="cerrar.php">Cerrar</a>|
    <br>
    
