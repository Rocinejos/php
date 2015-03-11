<?php

session_start();

isset($_REQUEST['cuenta'])?$_SESSION['cuenta']=$_REQUEST['cuenta']:null;

echo <<<HTML
	<style type="text/css"> img{opacity: 0.2; } img.activo{opacity: 1;}</style>
	<img src="img/1.png" />
	<img src="img/2.png" />
	<img src="img/3.png" />
	<img class="activo" src="img/4.png" />
		
	<fieldset><legend>Datos Personales</legend>
			Nombre: <b>{$_SESSION['nombre']}</b> Apellidos: <b>{$_SESSION['apellidos']}</b>
			<br /><br />
			Feha Nacimiento: <b>{$_SESSION['nacimiento']}</b>
			<br /><br />
HTML;
			echo 'G&eacutenero --> <b>'.(isset($_SESSION['genero'])?$_SESSION['genero']:"Ninguno").'</b>';
			echo '<br /><br />';
			
			echo 'Casado o pareja de hecho: <b>'.(isset($_SESSION['estado'])?"SI":"NO").'</b>&nbsp&nbsp';
			echo 'Hijos: <b>'.(isset($_SESSION['hijos'])?"SI":"NO").'</b>';
			echo "<br /><br />"; 
			echo 'Nacionalidades: ';
			if(isset($_SESSION['nacionalidades'])){
				foreach ($_SESSION['nacionalidades']as $n){
					echo "<b>";
					switch ($n){
						case "es": echo "Espa&ntilde;ola ";break;
						case "fr": echo "Francesa ";break;
						case "in": echo "Inglesa ";break;
						case "af": echo "Africana ";break;
						case "ru": echo "Rumana ";break;
					}
					echo "</b>";
				}
			}else{
				echo '<b>Ninguna de la lista</b>';
			}
	echo <<<HTML
			<br /><br />
			</fieldset>		
			<fieldset><legend>Datos Profesionales: </legend>
			Departamento: 
HTML;
			foreach ($_SESSION['departamento']as $n){
				echo "<b>";
				switch ($n){
					case "m": echo "Marketing ";break;
					case "v": echo "Ventas ";break;
					case "i": echo "Inform&aacute;tica ";break;
					case "p": echo "Producci&oacute;n ";break;
				}
				echo "</b>";
			}
			echo '<br /><br />';
			echo 'Salario: <b>'.(isset($_SESSION['salario'])?$_SESSION['salario']:"Prefiere no especificarlo").'</b>';
			echo '<br /><br />';
			echo 'Comentarios: <b>'.(isset($_SESSION['comentarios'])?$_SESSION['comentarios']:"Ninguno").'</b>';
	echo <<<HTML
			<br /><br />			
	</fieldset>
		
		
	<fieldset><legend>Datos Bancarios</legend>
			Cuenta corriente: <b>{$_SESSION['cuenta']}</b>
			<br /><br />
	</fieldset>
	<a href="formulario1.php?borrar=1">Volver al principio</a>
HTML;

?>