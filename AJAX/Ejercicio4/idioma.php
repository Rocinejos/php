<?php

$banderas = ["ES" => ["Usuario", "Contrase&ntilde;a", "Iniciar sesi&oacute;n"],
			 "UK" => ["User", "Password", "Login"]];

function pintarBanderas($seleccionado){
	global $banderas;
	$keys = array_keys($banderas);
	foreach ($keys as $b){
		echo '<label for="'.$b.'"><img src="img/'.$b.'.png" /></label>';
		echo '<input type="radio" name="bandera" value="'.$b.'" id="'.$b.'" '.($b == $seleccionado?'checked="checked"':'').' onChange="cambiarIdioma()" />'. PHP_EOL;
	}	
}

?>