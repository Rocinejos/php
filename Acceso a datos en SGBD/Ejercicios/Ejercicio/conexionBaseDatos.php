<?php
/*	Creamos una función para conectar a la base de datos de MySQL con los 
	siguientes parámetros:
		- $schema = indica a la base de datos a conectar
		- $usu = indicamos el usuario con el que nos vamos a conectar
		- $pwd = indicamos la contraseña del usuario
		- $host = e indicamos a la máquina que nos vayamos a conectar */ 
function conectarMySQL($schema="cdcol", $usu="root", $pwd="", $host="localhost"){
	/*	Si no hay errores, creamos la variable $dsn con los siguienets datos y
		devolvemos un objeto PDO con los datos de $dsn, el usuario y la contraseña */ 
	try{
		$dsn = "mysql:host=$host;dbname=$schema";
		$db = new PDO($dsn, $usu, $pwd);
		return $db;
	}
	// En caso de fallo, avisamos y matamos el proceso
	catch (PDOException $e){
		print("ERROR de conexion!!");
		die();
	}
}
?>