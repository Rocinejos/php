<?php
include_once("../conexionBaseDatos.php");

$num = isset($_REQUEST['num'])?$_REQUEST['num']:null;

if($num==null){	pintar();}

if($num!=null){
	global $num;
	$b = false;
	$db = conectarMySQL('ejercicio1');
	$consulta = 'SELECT numemp FROM empleados';
	$resultado = $db -> query($consulta);
	if(!$resultado){
		echo "<h1>ERROR al ejecutar query</h1>";
	}else{
		foreach ($resultado as $n){
			if($n['numemp']==$num){ $b = true; }
		}
		if($b){
			$consulta = 'DELETE FROM empleados WHERE numemp = ?';
			$resultado = $db->prepare($consulta);
			$resultado->execute([$num]);
			header("Location:confirmacion.php?num=$num&x=true");
		}else{
			header("Location:confirmacion.php?num=$num");
		}
	}
	$db = null;
}

function pintar(){
	echo <<<HTML
		<form action="#" method="post"><fieldset><legend><b>Borrar usuario</b></legend>
			<label for="num">Indique el n&uacute;mero de empleado que desee "asesinar": </label><input type="text" id="num" name="num" maxlength="2" size="1" />
			<input type="submit" value="Disparar" />
		</fieldset></form>
	
		<a href="index.php"><input type="button" value="Volver" /></a>
HTML;
}
?>