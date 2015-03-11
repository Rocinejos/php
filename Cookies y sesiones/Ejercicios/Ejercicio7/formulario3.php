<?php

session_start();

if(isset($_REQUEST['departamento'])){
	$_SESSION['departamento']=$_REQUEST['departamento'];
}
if(isset($_REQUEST['salario'])){
	$_SESSION['salario']=$_REQUEST['salario'];
}else{
	$_SESSION['salario']=null;
}
if(isset($_REQUEST['comentarios'])){
	$_SESSION['comentarios']=$_REQUEST['comentarios'];
}else{
	$_SESSION['comentarios']=null;
}

if(isset($_SESSION['cuenta'])){
	pintarFormulario($_SESSION['cuenta']);
}else{
	pintarFormulario();
}


function pintarFormulario($cuenta=""){
	echo <<<HTML
		<style type="text/css"> img{opacity: 0.2; } img.activo{opacity: 1;}</style>
		<a href="formulario1.php"><img src="img/1.png" /></a>
		<a href="formulario2.php"><img src="img/2.png" /></a>
		<img class="activo" src="img/3.png" />
		<img src="img/4.png" />
	
		<form action="formularioFinal.php" method="post">
			<fieldset><legend>Datos Bancarios</legend>
				<label for="cuenta">Cuenta corriente: </label><input id="cuenta" type="text" name="cuenta" value="$cuenta" />
				<br /><br />
				<input type="submit" value="Guardar informaci&oacute;n e ir al resumen final">
			</fieldset>
		</form>
HTML;
}
?>