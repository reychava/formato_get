<?php

echo "<h2>datos recibidos</h2>";
//recibir varables con el metodo get 
$matricula=$_POST["matricula"] ;
$nombre=$_POST["nombre"] ;
$fecha=$_POST["fecha"] ;

/*echo "la matricula es: ".$matricula. "<br>";
echo "el nombre es: ".$nombre. "<br>";
echo "la fecha es: ".$fecha ;
*/

//RECIBIR LA INFORMACION EN UN FORMULARIO

echo '<form>';
echo '<label>matricula</label>';
echo '<input type="text" value="'.$matricula. '"name="matricula">';
echo '<br>';
echo '<label>nombre</label>';
echo '<input type="text" value="'.$nombre. '"name="nombre">';
echo '<br>';
echo '<label>fecha</label>';
echo '<input type="date" value="'.$fecha. '"name="fecha">';
echo '</form>'
?>