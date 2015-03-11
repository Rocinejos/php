<?php

/*------ Funci�n Ejercicio 10 ------*/
function resaltar($texto){
	echo "<h1>$texto</h1>";
}

/*------ Funci�n Ejercicio 11 ------*/
function pintarRadios($nombre, $arrayValueLabel, $seleccionado=""){
	//Se otorga un valor vac�o a $seleccionado por si no se env�a
	//un valor por defecto en la funci�n , as� no se produce errores.
	echo "<center><table width=10%><caption>Afici&oacuten favorita:</caption>";
	foreach($arrayValueLabel as $indice => $v){
		echo "<tr>";
		echo "<td><label for=\"$indice\">$v</label>";
		if($seleccionado==$indice){
			echo "<input type=\"radio\" id=\"$indice\" name=\"$nombre\" value=\"$indice\" checked=\"$seleccionado\"/></td>".PHP_EOL;
		}
		else{
			echo "<input type=\"radio\" id=\"$indice\" name=\"$nombre\" value=\"$indice\" /></td>".PHP_EOL;
		}
		echo "</tr>";
	}
	echo "</table></center>";
}

/*------ Funci�n Ejercicio 12 ------*/
function pintarCheckboxes($nombre, $arrayValueLabel){
	echo "<center><table width=15%><caption>Afici&oacutenes favoritas:</caption>";
	foreach($arrayValueLabel as $indice => $v){
		echo "<tr><td><label for=\"$indice\">$v</label>";
		echo "<input type=\"checkbox\" id=\"$indice\" name=\"$nombre.[]\" value=\"$indice\"/></td>".PHP_EOL;
		echo "</tr>";
	}
	echo "</table></center>";
}

/*------ Funci�n Ejercicio 13 ------*/
function pintarCheckboxesMejorado($nombre, $arrayValueLabel, $seleccionado=[]){
	echo "<center><table width=15%><caption>Afici&oacutenes favoritas:</caption>";
	foreach($arrayValueLabel as $indice => $v){
		echo "<tr><td><label for=\"$indice\">$v</label>";
		//El m�todo "in_array(valor, array)" comprueba si un valor existe en un array.
		if(in_array($indice, $seleccionado)){
			echo "<input type=\"checkbox\" id=\"$indice\" name=\"$nombre.[]\" value=\"$indice\" checked=\"checked\" /></td>".PHP_EOL;
		}else{
			echo "<input type=\"checkbox\" id=\"$indice\" name=\"$nombre.[]\" value=\"$indice\"/></td>".PHP_EOL;
		}
		echo "</tr>";
	}
	echo "</table></center>";
}

/*------ Funci�n Ejercicio 14 ------*/
function pintarSelect($numero, $arrayValueLabel, $m=""){
	if($m=="multiple"){
		echo "Indica que conduce usted: ";
		echo '<select name="t[]" multiple="multiple">';
		foreach($arrayValueLabel as $indice=>$v){
			echo '<option value="$v">'.$v.'</option>';
		}
		echo "</select>";
	}
	else{
		echo "Indica que conduce usted: ";
		echo '<select name="t">';
		foreach($arrayValueLabel as $indice=>$v){
			echo '<option value="$v">'.$v.'</option>';
		}
		echo "</select>";
	}
}

?>