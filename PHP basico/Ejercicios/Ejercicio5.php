<?php

/**
 * @author [$Sergio Santos Gil]
 * @copyright [$2014]
 * 
 * Similar al ejercicio n�mero 3, 
 * dado un n�mero ciclar entre �as�, �dos�, � 
 * �siete�, �sota�, �caballo� y �rey� tantas veces como diga tal n�mero.
 */

$n;
$baraja = array('as', 'dos', 'tres', 'cuatro', 'cinco', 'seis', 'siete', 'sota', 'caballo', 'rey');
echo "Introduce el numero de repeticiones: ";
fscanf(STDIN, "%d/n", $n);

$acu = 0;
for($i=0; $i<$n; $i++){
    echo $baraja[($i%10)]." ";
}

?>