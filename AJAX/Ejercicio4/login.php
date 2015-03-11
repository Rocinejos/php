<?php
include_once("idioma.php");

$idioma = isset($_REQUEST['bandera'])?$_REQUEST['bandera']:'ES';
$etiquetas = $banderas[$idioma];

$user = $etiquetas[0];
$pwd = $etiquetas[1];
$sesion = $etiquetas[2];
echo <<<HTML

<!DOCTYPE html>
<html>
	<head><title>Ejercicio 4</title>
		<style type="text/css">
		img{width: 60px;height: 50px;}		
		</style>
		
		<script type="text/javascript">
			var conexion;
			function usarAJAX(){
				textoRecibido = conexion.responseText;
				etiqueta = textoRecibido.split("#");
		
				user=etiqueta[0];
				pwd=etiqueta[1];
				sesion=etiqueta[2];
		
				document.getElementById("usu").innerHTML=user;
				document.getElementById("pass").innerHTML=pwd;
				document.getElementById("boton").value=sesion;
			}
		
			function cambiarIdioma(){
				idioma = document.querySelector('input[name="idioma"]:checked').value;
				conexion = new XMLHttpRequest();
				conexion.open('GET', 'idioma.php?idioma='+idioma, true);
				conexion.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
				conexion.send();
				conexion.onreadystatechange = function() {
					if (conexion.readyState==4 && conexion.status==200) {
						usarAJAX();
					}
				}
			}
		</script>
	</head>
	<body>
HTML;
	echo '<form id="idioma" action="idioma.php">';
		pintarBanderas($idioma);
	echo '</form><br />';
echo <<<HTML
		<form action="jugar.php"><fieldset><legend>Autentificaci&oacute;n</legend>
			<label for="usu">$user: </label><input type="text" size="7" id="usu" name="usu" /><br /><br />
			<label for="pass">$pwd: </label><input type="password" size="10" id="pass" name="pass" /><br /><br />
			<input type="submit" value="$sesion" id="boton" /> 
		</fieldset></form>
	</body>
</html>

HTML;

?>