<?php

$esAjax = isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH'])=='xmlhttprequest';
if(!$esAjax){
	echo "<h1>AJAX request only</h1>";
}else{
	$bandera = isset($_REQUEST['bandera'])?$_REQUEST['bandera']:null;
	/*$palabra;$traducir;$boton;
	switch($bandera){
		case "es":
			$palabra = "Palabra";$traducir = "Tranducir";$boton= "Enviar";
			break;
		case "uk":
			$palabra = "Word";$traducir = "Translation";$boton= "Send";
			break;
		case "fr":
			$palabra = "Mot";$traducir = "Traduire";$boton= "Envoyer";
			break;
	} 
	echo <<<HTML
		<hr />
		<label for="palabra">$palabra </label><input type="text" name="palabra" id="palabra"/>
		<label for="traducir">$traducir </label><input type="text" name="traducir" id="traducir" />
		<input type="button" value="$boton" />
HTML;*/
	echo('<h1>musica</h1>');
}

?>