<?php
include_once("../conexionBaseDatos.php");

echo <<<CSS
	<head>
		<style>
			#cabecera{
				width: 100%;
				height: 50px;
				background: url("cabecera.png") repeat-x;
				color: #DEB405;
			}
			th{
				color: black;
				background: #DEB405;
			}
			tr{
				color: #DEB405;
				font-weight: bold;
			}
			.par{
				background: #00529F;
			}
			.impar{
				background: #A2214B;
			}
		</style>
	</head>
CSS;

$db = conectarMySQL('ejercicio1');
$consulta = 'select * from empleados';
$resultado = $db -> query($consulta);

echo '<div id="cabecera"><h1 align="center">Jugadores de la base de datos</h1></div>';
if(!$resultado){
	print('ERROR al ejecutar query<br/>');
}else{
	echo '<hr/><table border="10" align="center">';
	echo '<tr><th>ID</th><th>Nombre</th><th>Apellido</th><th>Tel&eacute;fono</th><th>Sexo</th></tr>';
	$acu = 1;
	foreach ($resultado as $fila){
		if($acu%2==0){
			echo "<tr class='par'><td>{$fila['numemp']}</td><td>{$fila['nombre']}</td><td>{$fila['apellido']}</td><td>{$fila['telefono']}</td><td>{$fila['sexo']}</td></tr>";
		}else{
			echo "<tr class='impar'><td>{$fila['numemp']}</td><td>{$fila['nombre']}</td><td>{$fila['apellido']}</td><td>{$fila['telefono']}</td><td>{$fila['sexo']}</td></tr>";
		}
		$acu++;
	}
	echo '</table>';
}

echo '<center><br/><a href="index.php"><input type="button" value="Volver" /></a></center>';

?>