<?php
$num = isset($_REQUEST['num'])?$_REQUEST['num']:null;
$x = isset($_REQUEST['x'])?$_REQUEST['x']:null;
$numero = isset($_REQUEST['numero'])?$_REQUEST['numero']:null;
$z = isset($_REQUEST['z'])?$_REQUEST['z']:null;

if($x!=null && $num!=null && $numero==null && $z==null){
	echo "<h1>El empleado con ID $num ha muerto...</h1>";
	echo '<a href="index.php"><input type="button" value="Volver" /></a>';
}else if($x==null && $num!=null && $numero==null && $z==null){
	echo "<h1>NO existe el empleado con ID -> $num</h1>";
	echo '<a href="borrar.php"><input type="button" value="Int&eacute;ntelo de nuevo" /></a>';
}else if($x!=null && $num==null && $numero!=null && $z==null){
	echo "<h2>El empleado con ID $numero ha sido modificado correctamente</h2>";
	echo '<a href="index.php"><input type="button" value="Volver" /></a>';
}else if($x==null && $num==null && $numero!=null && $z==null){
	echo "<h1>NO existe el empleado con ID -> $numero</h1>";
	echo '<a href="modificar.php"><input type="button" value="Int&eacute;ntelo de nuevo" /></a>';
}else if($x!=null && $num==null && $numero==null && $z!=null){
	echo "<h2>Empleado con n&uacute;mero $z creado correctamente</h2>";
	echo '<a href="crear.php"><input type="button" value="Volver" /></a>';
}else{
	echo "<h1>Ya existe un empleado con ID -> $z</h1>";
	echo '<a href="crear.php"><input type="button" value="Int&eacute;ntelo de nuevo" /></a>';
}
?>