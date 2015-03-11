<?php

//array_keys($array) --> Devuelve las claves de dicho array

$esAjax = isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH'])=='xmlhttprequest';
if(!$esAjax){
	echo "<h1>AJAX request only</h1>";
}else{
	$comunidad = isset($_REQUEST['comunidad'])?$_REQUEST['comunidad']:null;
	echo '<select value="provincia">';
	mostrarProvincias($comunidad);
	echo '</select>';
}

function mostrarProvincias($comunidad){
	$andalucia = ['Huelva','Granada','Sevilla','Almer&iacute;','M&aacute;laga', 'Ja&eacute;n', 'C&aacute;diz'];
	$lamancha = ['Toledo', 'Guadalajara', 'Ciudad Real', 'Albacete', 'Cuenca'];
	$canarias = ['Gomera', 'Gran Canaria', 'Hierro', 'La Palma', 'Tenerife'];
	$valencia = ['Valencia', 'Alicante', 'Castell&oacute;n'];
	$aragon = ['Arag&oacute;n', 'Huesca', 'Teruel'];
	
	switch ($comunidad){
		case "andalucia":
			foreach ($andalucia as $a){
				echo '<option value="'.$a.'">'.$a.'</option>';
			}
			break;
		case "lamancha":
			foreach ($lamancha as $a){
				echo '<option value="'.$a.'">'.$a.'</option>';
			}
			break;
		case "canarias":
			foreach ($canarias as $a){
				echo '<option value="'.$a.'">'.$a.'</option>';
			}
			break;
		case  "valencia":
			foreach ($valencia as $a){
				echo '<option value="'.$a.'">'.$a.'</option>';
			}
			break;
		case  "aragon":
			foreach ($aragon as $a){
				echo '<option value="'.$a.'">'.$a.'</option>';
			}
			break;
	}
}

?>