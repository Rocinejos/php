<?php
$saludos = ['Hola ','Qu&eacute; tal ','!!Qu&eacute; pasa '];
// Comprueba con $_SERVER si se ha hecho una petici�n AJAX
$esAjax = isset($_SERVER['HTTP_X_REQUESTED_WITH']) && 
			strtolower($_SERVER['HTTP_X_REQUESTED_WITH'])=='xmlhttprequest';
// Si se ha hecho la petici�n, actulaliza los datos de la p�gina
if(!$esAjax){
	echo "<h1>AJAX request only</h1>";
}else{
	$nombre = isset($_REQUEST['nombre'])?$_REQUEST['nombre']:null;
	$saludo = $saludos[rand ( 0, sizeof($saludos)-1)];
	echo "<h1>$saludo $nombre</h1>";
}
?>