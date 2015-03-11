<?php

function pintarFormulario(){
	echo '<form action="http://localhost/workspace/DAW2/Ejercicios/PHPavanzado/Ejercicio15.php" method="post">';
	echo '<label for="n">Introduce su nombre:</label>';
	echo '<input type="text" name="nombre" id="n" value="root"/></br>';
	echo '<label for="c">Introduce su contrase&ntildea:</label>';
	echo '<input type="password" name="pass" id="c" value="iesrey"/>';
	echo '<input type="hidden" name="x" value="z"/>';
	echo '<input type="submit" value="Enviar"/>';
	echo '</form>';
}


if(isset($_REQUEST["nombre"]) && isset($_REQUEST["pass"])){
	
	if(isset($_REQUEST["nombre"])){
		$nombre = $_REQUEST["nombre"];
	}
	if(isset($_REQUEST["pass"])){
		$password = $_REQUEST["pass"];
	}
	echo "Hola $nombre, tu contrase&ntildea es '$password'.";
	
}else{
	pintarFormulario();
}

?>