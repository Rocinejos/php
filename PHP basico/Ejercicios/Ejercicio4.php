<?php

/**
 * @author [$Sergio Santos Gil]
 * @copyright [$2014]
 * 
 * Obtener por teclado infinitos n�meros hasta introducir el 0. 
 * Una vez hecho eso, pedir al usuario qu� operaci�n realizar, 
 * pudiendo ser �sta �sumar� o �multiplicar�, mostr�ndose 
 * a continuaci�n la suma o multiplicaci�n (respectivamente) de 
 * los datos previamente introducidos, y en caso de que se introduzca 
 * una operaci�n no v�lida, un mensaje de error.
 * 
 */

/*
 * Opci�n sin array: 
$n;

echo "Introduce un n�mero: ";
fscanf(STDIN, "%d/n", $n);

$suma = $n;
$multi = $n;

while($n!=0){
	$suma = $suma + $n;
	$multi = $multi * $n;
	echo "Introduce otro n�mero: ";
	fscanf(STDIN, "%d/n", $n);
}

$operacion;
echo "�Que operacion desea realizar?: ";
fscanf(STDIN, "%s/n", $operacion);

switch($operacion){
	case "sumar":
		echo $suma;
	break;
	case "multiplicar":
		echo $multi;
	break;
	default:
		echo "Error! Operaci�n no v�lida.";
}
*/

$n;

echo "Introduce un n�mero: ";
fscanf(STDIN, "%d/n", $n);

$i = 0;

while($n!=0){
	$a[$i] = $n;
	$i++;
	echo "Introduce otro n�mero: ";
	fscanf(STDIN, "%d/n", $n);
}

echo "�Que operacion desea realizar?: ";
fscanf(STDIN, "%s/n", $operacion);

/**
 * Suma los elementos del array y los muestra.
 * @param array $a a operar
 */
function suma($a){
	$acu = 0;
		foreach($a as $v){
			$acu += $v;
		}
	echo "La suma vale $acu";
}

/**
 * Multiplica los elementos del array y los muestra.
 * @param array $a a operar
 */
function multi($a){
	$acu = 1;
		foreach($a as $v){
			$acu *= $v;
		}
	echo "La multiplicaci�n vale $acu";
	}

switch($operacion){
	case "sumar":
		suma($a);
		break;
	case "multiplicar":
		multi($a);
		break;
	default:
		echo "Error! Operaci�n no v�lida.";
}

?>
