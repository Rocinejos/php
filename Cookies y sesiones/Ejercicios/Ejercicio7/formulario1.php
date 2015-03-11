<?php
/* Al volver al inicio, gracias al hipervínculo del fichero formularioFinal.php,
 * se destruye la sesión para poder empezar de cero el formulario. */
if(isset($_REQUEST['borrar'])==1){
	session_start();
	session_unset();
	session_destroy();
}
/* Pero si se accede de otra forma, se mantiene la sesión.*/
session_start();

$nombre=""; $apellidos=""; $fecha="dd/mm/YY"; $genero=""; $estado=""; $hijos=""; $nacionalidades="";
if(isset($_SESSION['nombre'])){
	$nombre = $_SESSION['nombre']; 
}if(isset($_SESSION['apellidos'])){
	$apellidos = $_SESSION['apellidos']; 
}if(isset($_SESSION['nacimiento'])){
	$fecha = $_SESSION['nacimiento']; 
}if(isset($_SESSION['genero'])){
	$genero = $_SESSION['genero']; 
}if(isset($_SESSION['estado'])){
	$estado = $_SESSION['estado']; 
}if(isset($_SESSION['hijos'])){
	$hijos = $_SESSION['hijos']; 
}if(isset($_SESSION['nacionalidades'])){
	$nacionalidades = $_SESSION['nacionalidades']; 
}


function pais($nacion){
	$sol = "";
	switch ($nacion){
		case "es":$sol="Espa&ntildeola";break;
		case "fr":$sol="Francesa";break;
		case "af":$sol="Africana";break;
		case "in":$sol="Inglesa";break;
		case "ru":$sol="Rumana";break;
	}
	return $sol;
}

$array = ["es", "fr", "ru", "af", "in"];
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
HTML;
				echo'<label for="femenino">Femenino</label><input id="femenino" type="radio" name="genero" value="femenino"'.(($genero=="femenino")?"checked=":"").' />
					<label for="masculino">Masculino</label><input id="masculino" type="radio" name="genero" value="masculino"'.(($genero=="masculino")?"checked":"").'/>
					<label for="otro"></label>Otro<input id="otro" type="radio" name="genero" value="otro"'.(($genero=="otro")?"checked":"").'/>';
				echo '<br /><br />';
				echo '<label for="estado">Casado o pareja de hecho</label><input id="estado" type="checkbox" name="estado" value="estado"'.(($estado=="estado")?"checked":"").'/>';
				echo '<label for="hijo">Hijos</label><input id="hijo" type="checkbox" name="hijos" value="hijos"'.(($hijos=="hijos")?"checked":"").'/>';
				echo '<br /><br />';
				echo '<label for="nacionalidades">Nacionalidades: </label><select id="nacionalidades" name="nacionalidades[]" multiple="multiple">';
				/* Recorremos el array de las nacionalidades. Gracias al método in_array($valor, $array)
				 * podemos buscar un 'valor' en la 'array' especificado.*/
				foreach ($array as $n){
					echo '<option value="'.$n.'" '.(in_array($n, $nacionalidades)?"selected":"").'>'.pais($n).'</option>';
				}
				echo '</select>';
	echo <<<HTML
				<br /><br />
				<input type="submit" value="Guardar informaci&oacute;n e ir al paso 2 - Datos Profesionales" />
			</fieldset>
		</form>
HTML;

?>