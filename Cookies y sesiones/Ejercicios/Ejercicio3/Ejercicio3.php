<?php

if(isset($_REQUEST["nombre"]) && isset($_REQUEST["contenido"]) && isset($_REQUEST["nivel"])){
	$nivel = $_REQUEST["nivel"];
	if($nivel==0){
		setcookie($_REQUEST["nombre"], $_REQUEST["contenido"], 0, "/workspace/DAW2/Ejercicios/Cookies/Ejercicio3/");
	}else if($nivel==1){
		setcookie($_REQUEST["nombre"], $_REQUEST["contenido"], 0, "/workspace/DAW2/Ejercicios/Cookies/Ejercicio3/nivel1/");
	}else{
		setcookie($_REQUEST["nombre"], $_REQUEST["contenido"], 0, "/workspace/DAW2/Ejercicios/Cookies/Ejercicio3/nivel1/nivel2/");
	}
}

echo "<h1>Listado de cookies por nivel</h1>";
echo 'Nivel 0 --> <a href="nivel0.php">Listado de cookies</a></br>';
echo 'Nivel 0 --> Nivel 1 --> <a href="nivel1/nivel1.php">Listado de cookies</a></br>';
echo 'Nivel 0 --> Nivel 1 --> Nivel 2 --> <a href="nivel1/nivel2/nivel2.php">Listado de cookies</a></br></br>';

echo "<h2>Creaci&oacuten de cookies en diferenets niveles (directorios) por un script ubicado en /. Se permite fijar nombre y contenido de la cookie, as&iacute como el nivel.</h2>";

echo "<fieldset><legend>Creaci&oacuten de cookie</legend>";
echo '<form action="http://localhost/workspace/DAW2/Ejercicios/Cookies/Ejercicio3/Ejercicio3.php"><label for="n">Nombre </label><input type="text" id="n" name="nombre"/>';
echo '<label for="c"> Contenido </label><input type="text" id="c" name="contenido"/></br>';
echo '<label for="nivel">Nivel </label><select name="nivel" id="nivel"><option value="0"/>0<option value="1"/>1<option value="2"/>2</select>';
echo '  <input type="submit" value="Crear cookie"/>';
echo "</form></fieldset>";

?>