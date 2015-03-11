<?php

/**
 * @author [$Sergio Santos Gil]
 * @copyright [$2014]
 * 
 * Obtener por teclado infinitos números hasta introducir el 0. 
 * Una vez hecho eso, pedir al usuario qué operación realizar, 
 * pudiendo ser ésta “sumar” o “multiplicar”, mostrándose 
 * a continuación la suma o multiplicación (respectivamente) de 
 * los datos previamente introducidos, y en caso de que se introduzca 
 * una operación no válida, un mensaje de error.
 * 
 */

/*
 * Opción sin array: 
$n;

echo "Introduce un número: ";
fscanf(STDIN, "%d/n", $n);

$suma = $n;
$multi = $n;

while($n!=0){
	$suma = $suma + $n;
	$multi = $multi * $n;
	echo "Introduce otro número: ";
	fscanf(STDIN, "%d/n", $n);
}

$operacion;
echo "¿Que operacion desea realizar?: ";
fscanf(STDIN, "%s/n", $operacion);

switch($operacion){
	case "sumar":
		echo $suma;
	break;
	case "multiplicar":
		echo $multi;
	break;
	default:
		echo "Error! Operación no válida.";
}
*/

$n;

echo "Introduce un número: ";
fscanf(STDIN, "%d/n", $n);

$i = 0;

while($n!=0){
	$a[$i] = $n;
	$i++;
	echo "Introduce otro número: ";
	fscanf(STDIN, "%d/n", $n);
}

echo "¿Que operacion desea realizar?: ";
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
	echo "La multiplicación vale $acu";
	}

switch($operacion){
	case "sumar":
		suma($a);
		break;
	case "multiplicar":
		multi($a);
		break;
	default:
		echo "Error! Operación no válida.";
}

?>
