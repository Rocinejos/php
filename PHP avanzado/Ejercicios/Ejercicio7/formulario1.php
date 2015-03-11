<?php
isset($_SESSION['nombre'])?"":session_start();

if(isset($_SESSION['nombre'])){
	pintarFormulario($_SESSION['nombre'], $_SESSION['apellidos'], $_SESSION['nacimiento'], $_SESSION['genero'], $_SESSION['estado'], $_SESSION['hijos'], $_SESSION['nacionalidades']);
	echo "hola";
}else{
	pintarFormulario();
}

function pintarFormulario($nombre="", $apellidos="", $fecha="dd/mm/YY", $genero="", $estado="", $hijos="", $nacionalidades=""){
	echo <<<HTML
		<style type="text/css"> img{opacity: 0.2; } img.activo{opacity: 1;}</style>
		<img class="activo" src="img/1.png" />
		<a href="formulario2.php"><img src="img/2.png" /></a>
		<a href="formulario3.php"><img src="img/3.png" /></a>
		<img src="img/4.png" />
	
		<form action="formulario2.php" method="post">
			<fieldset><legend>Datos Personales</legend>
				<label for="nombre">Nombre: </label><input id="nombre" type="text" name="nombre" value="$nombre"/>
				<label for="apellidos">Apellidos: </label><input id="apellidos" type="text" name="apellidos" value="$apellidos"/>
				<br /><br />
				<label for="nacimiento">Feha Nacimiento: </label><input id="nacimiento" type="text" name="nacimiento" value="$fecha"/>
				<br /><br />
				G&eacutenero -->
					<label for="femenino">Femenino</label><input id="femenino" type="radio" name="genero" />
					<label for="masculino">Masculino</label><input id="masculino" type="radio" name="genero" />
					<label for="otro"></label>Otro<input id="otro" type="radio" name="genero" />
				<br /><br />	
				<label for="estado">Casado o pareja de hecho</label><input id="estado" type="checkbox" name="estado" />
				<label for="hijo">Hijos</label><input id="hijo" type="checkbox" name="hijos" />
				<br /><br />
				<label for="nacionalidades">Nacionalidades: </label><select id="nacionalidades" name="nacionalidades" multiple="multiple">
					<option value="es">Espa&ntildeola</option>
					<option value="af">Africana</option>
					<option value="ru">Rumana</option>
					<option value="fr">Francesa</option>
					<option value="in">Inglesa</option>
				</select>
				<br /><br />
				<input type="submit" value="Guardar informaci&oacute;n e ir al paso 2 - Datos Profesionales" />
			</fieldset>
		</form>
HTML;
}
?>