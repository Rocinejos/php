<?php

function generaCadenaAleatoria($longitud = 5) {
	$charset = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
	$base = strlen ( $charset ); // longitud del alfabeto
	$result = '';
	$now = explode ( ' ', microtime () )[1];
	while ( $now >= $base ) {
		$i = $now % $base;
		$result = $charset [$i] . $result;
		$now /= $base;
	}
	return substr ( $result, - 5 );
}

$sesion=isset($_COOKIE["UID"])?$_COOKIE["UID"]:null;

if($sesion!=null){
	echo "Hola de nuevo. Te conozco como UID = ".$sesion;
}else{
	setcookie("UID", generaCadenaAleatoria());
	echo "Hola desconocido. Apartir de ahora te recordar&eacute.";
}

?>