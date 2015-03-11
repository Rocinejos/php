<?php
require_once("ObjetoPunto.php");
session_start();

$fecha=date_format($_SESSION["fecha"], 'Y-m-d');
$objetoPunto = $_SESSION["punto"];

function verSemaforo($semaforo){
	echo "<li>";
	foreach ($semaforo as $indice => $valor){
		echo "$indice --> $valor | ";
	}
	echo "</li>";
}

if(isset($_REQUEST['sesion'])){
	echo "<ul><li>".session_id()."</li><li>{$_SESSION["entero"]}</li>";
	echo "<li>{$_SESSION["real"]}</li><li>{$_SESSION["texto"]}</li>";
	echo "<li>$fecha</li>".verSemaforo($_SESSION["semaforo"])."<li>";
	echo $objetoPunto->getPunto()."</li></ul>";
}

echo <<<FORM
	<form action="Ejercicio6.php">
		<input type="submit" name="volver" value="Volver a crear sesi&oacute;n"/>
	</form>
FORM;


?>