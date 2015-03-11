<?php
require_once("ObjetoPunto.php");

session_unset();
isset($_SESSION['entero'])?session_destroy():"";
session_start();

$entero = (int)(10);
$real = 10.5;
$texto = "Pepinillos";
$fecha = date_create('1993-08-26');
$semaforo=["r"=>"rojo", "a"=>"amarillo", "v"=>"verde"];
$punto = new Punto();

$_SESSION['entero']=$entero;
$_SESSION['real']=$real;
$_SESSION['texto']=$texto;
$_SESSION['fecha']=$fecha;
$_SESSION['semaforo']=$semaforo;
$_SESSION['punto']=$punto;

echo <<<FORM
	<form action="Ejercicio6_2.php">
		<p>Se ha creado la sesi&oacute;n.</p>
		<input type="submit" name="sesion" value="Visualizar sesi&oacute;n"/>
	</form>
FORM;

?>