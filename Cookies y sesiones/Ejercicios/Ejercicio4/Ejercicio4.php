<?php

$desconectar = isset($_REQUEST["desconectar"])?$_REQUEST["desconectar"]:null;
$usuario = isset($_REQUEST["usuario"])?$_REQUEST["usuario"]:null;
$partido = isset($_REQUEST["partido"])?$_REQUEST["partido"]:null;
$nVisitas = isset($_REQUEST["nVisitas"])?$_REQUEST["nVisitas"]:null;

echo "<h1>Tratamientos de cookies</h1>";

if($desconectar!=null){
	setcookie($usuario,($nVisitas+1).'#'.$partido);
	echo '<p>Adios <b>'.$usuario.'</b>. Usted no est&aacute conectado.</p>';
}
else{
	echo '<p>Primera ejecuci&oacuten. Usted no est&aacute conectado.</p>';	
}

echo <<<FORM
<form action="Ejercicio4_2.php">
	<label for="u">Usario: </label><input type="text" id="u" name="usuario"/></br>
	<label for="c">Contrase&ntildea: </label><input type="password" id="c" name="pass"/></br>
	<input type="submit" name="autenticar" value="Autenticar"/>
</form>
FORM;

?>