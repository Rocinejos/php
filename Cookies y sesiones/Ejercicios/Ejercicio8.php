<?php
session_start();
if(isset($_SESSION['palabra'])){
	$_SESSION['palabra']=$_SESSION['palabra'];
}else{
	$_SESSION['palabra'] = nuevaPalabra();
}

function nuevaPalabra(){
	$palabras = ["casa", "ornitorrinco", "autocar", "caravana", "pedo"];
	// rand(mín, máx) -> Genera un número aleatorio entre un valor y otro. 
	// count(array) --> Cuenta las casillas de un array.
	$aleatorio = rand(0, count($palabras));
	$palabra = $palabras[$aleatorio];
	return $palabra;
}


if(isset($_SESSION['palabra'])){
	$palabra = $_SESSION['palabra'];
}
$letrasPalabra[]="";
// strlen($string) --> Devuelve la longitud de una cadena.
for($i=0;$i<strlen($palabra);$i++){
	// substr($cadena, $posicion[, $num]) --> Extrae el carácter en la posición indicada. Si 
	// se especifica $num, extrae como máximo la cantidad especificada.  
	$letrasPalabra[$i]= substr($palabra,$i,1);
}


$letrasIntroducidas[]="";
if(isset($_REQUEST['letra'])){
	// implode($array) --> Transforma un array en una cadena.
	for($i=0;$i<strlen(implode($letrasIntroducidas));$i++){
		$letrasIntroducidas[$i] = $_REQUEST['letra'];
	}
}
/*for($i=0;$i<strlen($letra);$i++){
	$letrasIntroducidas[$i]= substr($letra,$i,1);
}*/


$arrayLetras = "";
$nIntentos = "";
$nFallos = "";

echo '<fieldset><legend>Ahorcado</legend>';
echo '<form action="#">';
// maxlenght="x" --> Permite sólo introducir "x" letras.
echo '<label for="letra">Introduce una letra: </label><input id="letra" name="letra" type="text" size="1" maxlength="1"/><br /><br />';
foreach ($letrasPalabra as $n){
	echo '<input type="text" name="letra" size="1" disabled="disabled" value="'.(in_array($n, $letrasIntroducidas)?$n:"").'" />&nbsp;&nbsp;';
}
echo '<br/><br/>Letras probadas: '.$arrayLetras.'<br/>N&uacute;mero de fallos: '.$nFallos.'<br />N&uacute;mero de intentos: '.$nIntentos.'<br />';
echo '<input type="submit" value="Comprobar letra" />';
echo '</form></fieldset>';

?>