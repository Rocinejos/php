<?php

$usuario = isset($_REQUEST["usuario"])?$_REQUEST["usuario"]:null;
$pwd = isset($_REQUEST["pass"])?$_REQUEST["pass"]:null;

$usuarios = ["mariano"=>"rajoy", "pedro"=>"sanchez", "pablo"=>"iglesias", "cayo"=>"lara"];
$partidos = ["pp", "psoe", "iu", "podemos"];

$conexion = isset($_REQUEST["autenticar"])?$_REQUEST["autenticar"]:null;

if($conexion!=null){
	if(isset($usuarios[$usuario]) && $usuarios[$usuario]==$pwd){
		if(isset($_COOKIE[$usuario])){
			$datosCookie = explode("#", $_COOKIE[$usuario]);
			$nVisitas = $datosCookie[0];
			$partido = $datosCookie[1];
		}else{
			$nVisitas = 1;
			$partido = "pp";
		}
		echo <<<FORM
		<p>Conectado como <b>$usuario</b>. N&uacutemero de visitas: $nVisitas</p>
		<form action="Ejercicio4.php">
		<input type="submit" value="Desconectar" name="desconectar"/>
FORM;
		foreach ($partidos as $p){
			echo '<label for="'.$p.'"><img src="'.$p.'.png"/></label><input id="'.$p.'" type="radio" name="partido" value="'.$p.'" '.(($p==$partido)?'checked="checked"':'').' />';
		}
		
		echo <<<FORM
			<input type="hidden" name="usuario" value="$usuario" />
			<input type="hidden" name="nVisitas" value="$nVisitas" />
		</form>
FORM;
	}else{
		echo '<h1>Datos Err&oacuteneos!! Vuelve a intentarlo</h1>';
		echo '<form action="Ejercicio4.php"><input type="submit" value="Volver" /></form>';
	}
}

?>