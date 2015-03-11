<?php
include_once("../conexionBaseDatos.php");

$nuevoValor = isset($_REQUEST['nuevoValor'])?$_REQUEST['nuevoValor']:null;
$num = isset($_REQUEST['num'])?$_REQUEST['num']:null;
$campoModificar = isset($_REQUEST['valor'])?$_REQUEST['valor']:null;

if($nuevoValor!=null && $num!=null){
	modificar();
}else{
	pintarFormulario();
}

function modificar(){
	global $num; global $nuevoValor; global $campoModificar; 
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
			if($campoModificar=="nombre"){
				$consulta = 'UPDATE empleados SET nombre = ? WHERE numemp = ?';
			}else if($campoModificar=="apellido"){
				$consulta = 'UPDATE empleados SET apellido = ? WHERE numemp = ?';
			}else{
				$consulta = 'UPDATE empleados SET telefono = ? WHERE numemp = ?';
			}
			
			$resultado = $db->prepare($consulta);
			$resultado->execute([$nuevoValor, $num]);
			header("Location:confirmacion.php?numero=$num&x=true");
		}else{
			header("Location:confirmacion.php?numero=$num");
		}
	}
	$db = null;
}

function pintarFormulario(){
echo <<<HTML
	<html>
	<head>
	<meta charset="utf-8">
	<script>
		var conexion;
		function accionAJAX() {
			textoRecibido = conexion.responseText;
			document.getElementById("campo").innerHTML=textoRecibido;
		}
	
		function mostrarCampo(n){
			conexion = new XMLHttpRequest();
			conexion.open('GET', 'ajaxModificar.php?accion='+n, true);
			conexion.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
			conexion.send();
			conexion.onreadystatechange = function() {
				if (conexion.readyState==4 && conexion.status==200) {
					accionAJAX();
				}
			}
		}	
	</script>	
	</head>
		
	<body>
	<form action="#" method="post"><fieldset><legend><b>Modificar usuario</b></legend>
		<label for="num">Indique el n&uacute;mero de empleado que desee modificar: </label><input type="text" id="num" name="num" maxlength="2" size="1" /><br/><br/>
		<label>Indique el campo a modificar</label><br/><br/>
		<input type="button" value="Modificar nombre" onClick="mostrarCampo('nombre')" name="accion" />&nbsp;<input type="button" value="Modificar apellido" onClick="mostrarCampo('apellido')" name="accion" />&nbsp;<input type="button" value="Modificar telefono" onClick="mostrarCampo('telefono')" name="accion" />
		<div id="campo"></div>
	</fieldset></form>
	</body>
	</html>
HTML;

echo '<a href="index.php"><input type="button" value="Volver" /></a>';
}

?>