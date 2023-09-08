<?php

    session_start();// Mientras el navegador esté abierto mantendrá la sesión iniciada.

    $_SESSION["usuario"] = "joaquin";
    $_SESSION["estatus"] = "logueado";

    echo "Sesión iniciada".":<br/>";

    echo "Usuario: ".$_SESSION["usuario"]."<br> estatus: ".$_SESSION["estatus"];

    

?>