<?php

/* Tenemos que iniciar la sesión en cada fichero .php, ya que si no lo hacemos
 * no tenemos la referencia [id de la sesión] en los demás archivos.*/
session_start();

/* Comprobamos que los campos del formulario estén valoralizados, si lo están
 * le otorgamos su valor a la sesión, en cambio, si no lo están no hacemos nada,
 * es decir, NO le damos un valor nulo a la sesión.*/
if(isset($_REQUEST['nombre'])){
	$_SESSION['nombre']=$_REQUEST['nombre'];
}
if(isset($_REQUEST['apellidos'])){
	$_SESSION['apellidos']=$_REQUEST['apellidos'];
}
if(isset($_REQUEST['nacimiento'])){
	$_SESSION['nacimiento']=$_REQUEST['nacimiento'];
}else{
	$_SESSION['nacimiento']="dd/mm/YY";
}
if(isset($_REQUEST['genero'])){
	$_SESSION['genero']=$_REQUEST['genero'];
}
if(isset($_REQUEST['estado'])){
	$_SESSION['estado']=$_REQUEST['estado'];
}else{
	$_SESSION['estado']=null;
}
if(isset($_REQUEST['hijos'])){
	$_SESSION['hijos']=$_REQUEST['hijos'];
}else{
	$_SESSION['hijos']=null;
}
/* En el caso de 'nacionalidad', al ser un array, tenemos que comprobar cada
 * casilla [foreach] para ver si tiene un valor asignado.*/

/* Comprobamos que el campo 'nacionalidades' no esté vacío, si no lo está
 * recorremos el array tantas veces como campos tenga, y le vamos otrogando
 * el valor de cada casilla a la variabel de la sesión.*/
$i=0;
if (isset ( $_REQUEST ['nacionalidades'] )) {
	foreach ($_REQUEST ['nacionalidades'] as $v)	{
		$_SESSION['nacionalidades'][$i]=$v;
		$i++;
	}
}

/* Comprobamos que la sesión tiene algun parámetro, ya que si lo tiene
 * mostramos el formulario con los parámetros ya especificados por el usuario.*/
if(isset($_SESSION['departamento'])){
	$departamento = $_SESSION['departamento']; 
}if(isset($_SESSION['salario'])){
	$salario = $_SESSION['salario']; 
}if(isset($_SESSION['comentarios'])){
	$comentarios = $_SESSION['comentarios']; 
}

function depart($d){
	$sol = "";
	switch ($d){
		case "m":$sol="Marketing";break;
		case "v":$sol="Ventas";break;
		case "i":$sol="Inform&aacute;tica";break;
		case "p":$sol="Producci&oacute;n";break;
	}
	return $sol;
}


$array = ["m", "v", "i", "p"];	
	echo <<<HTML
		<style type="text/css"> img{opacity: 0.2; } img.activo{opacity: 1;}</style>
		<a href="formulario1.php"><img src="img/1.png" /></a>
		<img class="activo" src="img/2.png" />
		<a href="formulario3.php"><img src="img/3.png" /></a>
		<img src="img/4.png" />
	
		<form action="formulario3.php" method="post">
			<fieldset><legend>Datos Profesionales: </legend>
HTML;
				echo '<label for="departamento">Departamento: </label><select id="departamento" name="departamento[]">';
				foreach ($array as $n){	
					echo '<option value="'.$n.'" '.(($departamento[0]==$n)?"selected":"").'>'.depart($n).'</option>';
				}
	echo <<<HTML
				</select>
				<br /><br />
				<label for="salario"></label>Salario: <input id="salario" type="text" name="salario" value="$salario"/>
				<br /><br />
				<label for="comentarios">Comentarios: </label><textarea id="comentarios" name="comentarios" rows="5" cols="20" >$comentarios</textarea>
				<br /><br />			
				<input type="submit" value="Guardar informaci&oacute;n e ir al paso 3 - Datos Bancarios" />
			</fieldset>
		</form>
HTML;

?>