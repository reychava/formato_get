<?php

    echo "<h2>recibiendo el formulario de registro de calzado</h2>";

    $codigo=$_GET["codigo_calzado"];
    echo "el codigo del producto escrito es:  ".$codigo. "<br>";
    $descripcion=$_GET["descripcion"];
    echo "la descripcion es:  ".$descripcion. "<br>";
    $talla=$_GET["talla"];
    echo "la talla del producto es:  ".$talla. "<br>";
    $precio=$_GET["precio"];
    echo "el precio del producto es:  ".$precio;
?>