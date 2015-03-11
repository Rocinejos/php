<?php
include ("Ejercicio9.php");
if ($_REQUEST["tipo"]=="Simple"){
	pintarSelect(4, ["Coche", "Moto", "Cami&oacuten", "Avi&oacuten"]);	
}
else{
	pintarSelect(4, ["Coche", "Moto", "Cami&oacuten", "Avi&oacuten"], "multiple");
}
?>