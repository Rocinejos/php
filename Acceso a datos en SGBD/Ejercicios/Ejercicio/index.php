<?php

echo <<<HTML
	<head>
		<style>
			#cabecera{
				width: 100%;
				height: 50px;
				background: url("cabecera.png") repeat-x;
				color: #DEB405;
			}
		</style>
	</head>
	<div id="cabecera">
		<h1 align="center">Men&uacute; Principal</h1>
	</div>
	<hr/><form name="crud" align="center">
		<label>Visualizar los empleados: </label><a href="listar.php"><input type="button" value="Listar" /></a><br/><br/>
		<label>A&ntilde;adir un empleado: </label><a href="crear.php"><input type="button" value="Crear" /></a><br/><br/>
		<label>Modificar un empleado: </label><a href="modificar.php"><input type="button" value="Modificar" /></a><br/><br/>
		<label>Borrar un empleado: </label><a href="borrar.php"><input type="button" value="Borrar" /></a>
	</form>
HTML;

?>