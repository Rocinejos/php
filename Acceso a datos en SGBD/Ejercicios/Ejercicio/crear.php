<?php
include_once("../conexionBaseDatos.php");

$num = isset($_REQUEST['num'])?$_REQUEST['num']:null;
$nombre = isset($_REQUEST['nombre'])?$_REQUEST['nombre']:null;
$apellido = isset($_REQUEST['apellido'])?$_REQUEST['apellido']:null;
$telefono = isset($_REQUEST['telefono'])?$_REQUEST['telefono']:null;
$sexo = isset($_REQUEST['sexo'])?$_REQUEST['sexo']:null;

if ($num==null && $nombre==null && $apellido==null && $telefono==null && $sexo==null){

}else{
	crear($num, $nombre, $apellido, $telefono, $sexo);
}

echo <<<HTML
	<form action="#" method="post"><fieldset><legend><b>Crear un nuevo empleado</b></legend>
		<label for="num">N&uacute;mero de empleado: </label><input type="text" id="num" name="num" maxlength="2" size="1" /><br/>
		<label for="nombre">Nombre: </label><input type="text" id="nombre" name="nombre" /><br/>
		<label for="apellido">Apellido: </label><input type="text" id="apellido" name="apellido" /><br/>
		<label for="telefono">Tel&eacute;fono: </label><input type="text" id="telefono" name="telefono" maxlength="9" size="6" /><br/>
		<label>Sexo: </label><input type="radio" id="h" name="sexo" value="h" /><label for="h">Macho ib&eacute;rico</label><input type="radio" id="m" name="sexo" value="m" /><label for="m">Mujer</label><br/><br/>
		<input type="submit" value="A&ntilde;adir" />
	</fieldset></form>
HTML;
echo '<a href="index.php"><input type="button" value="Volver" /></a>';

function crear($num, $nombre, $apellido, $telefono, $sexo){
	$db = conectarMySQL('ejercicio1');
	if(comprobarEmpleado($db, $num)==true){
		header("Location:confirmacion.php?z=$num");
	}else{
		$consulta = 'INSERT INTO empleados VALUES(?, ?, ?, ? , ?)';
		$resultado = $db->prepare($consulta);
		$resultado->execute([$num, $nombre, $apellido, $telefono, $sexo]);
		header("Location:confirmacion.php?z=$num&x=true");
		$db = null;
	}
}

function comprobarEmpleado($db, $num){
	$b = false;
	$consulta = 'SELECT numemp FROM empleados';
	$resultado = $db -> query($consulta);
	if(!$resultado){
		echo "<h1>ERROR al ejecutar query</h1>";
	}else{
		foreach ($resultado as $n){
			if($n['numemp']==$num){ $b = true; }
		}
	}
	return $b;
}

?>