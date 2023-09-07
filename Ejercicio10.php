<?php
// Operadores Lógicos
if($_POST){

    $valorA=$_POST["valorA"];
    $valorB=$_POST["valorB"];

    if( ($valorA!=$valorB)&&($valorA>$valorB)){
        echo "El valor A es diferente y mayor al valor B";
    }
    if( ($valorA!=$valorB)||($valorA>$valorB)){
        echo "El valor A es diferente o mayor al valor B";
    }

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
    
    <form action="ejercicio10.php" method="post">

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