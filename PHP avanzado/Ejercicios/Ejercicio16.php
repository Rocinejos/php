<?php
function pintarFormulario(){
	echo '<form action="http://localhost/workspace/DAW2/Ejercicios/PHPavanzado/Ejercicio16.php" method="post">';
	echo '<label for="n">Introduce su nombre:</label>';
	echo '<input type="text" name="nombre" id="n" value="root"/></br>';
	echo '<label for="c">Introduce su contrase&ntildea:</label>';
	echo '<input type="password" name="pass" id="c" value="iesrey"/>';
	echo '<input type="hidden" name="x" value="z"/>';
	echo '<input type="submit" value="Enviar"/>';
	echo '</form>';
}

function condicionesUsuario($usuario){
	if($usuario!=""){
		return true;
	}
	else{
		return false;
	}
}

function condicionesPassword($password){
	$valor = strlen($password);
	if($valor>=6&&$valor<=12){
		return true;
	}else{
		return false;
	}
}

if(isset($_REQUEST["nombre"]) && isset($_REQUEST["pass"])){

	if(!condicionesUsuario($_REQUEST["nombre"])){
		echo "El usuario no puede estar vac&iacuteo.</br>";
	}
	if(!condicionesPassword($_REQUEST["pass"])){
		echo "La contrase&ntildea debe terner entre 6 y 12 caracteres.</br>";
	}
	if(condicionesUsuario($_REQUEST["nombre"]) && condicionesPassword($_REQUEST["pass"])){
		echo 'Hola '.$_REQUEST["nombre"].', tu contrase&ntildea es "'.$_REQUEST["pass"].'".';
	}
	else{
		echo "REPINTAR FORMULARIO";
	}
}
else{
	pintarFormulario();
}

?>