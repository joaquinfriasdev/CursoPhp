<?php
if($_POST){

    $valorA=$_POST["valorA"];
    $valorB=$_POST["valorB"];

    $suma=$valorA+$valorB;
    $resta=$valorA-$valorB;
    $division=$valorA/$valorB;
    $multiplicacion=$valorA*$valorB;
    
    echo $suma."<br>"; 
    echo $resta."<br>";
    echo $division."<br>";
    echo $multiplicacion."<br>";


}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores aritméticos</title>
</head>
<body>
    
    <form action="ejercicio8.php" method="post">

        Valor A:     
        <input type="text" name="valorA" id="">
        <br>
        Valor B:
        <input type="text" name="valorB" id="">
        <br>
        <input type="submit" value="Calcular">
    </form>


</body>
</html>