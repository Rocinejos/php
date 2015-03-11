<?php

/**
 * @author [$Sergio Santos Gil]
 * @copyright [$2014]
 * 
 * Dado dos números n y p (con p entre 1 y 10), ciclar entre el cero 
 * y el p-1 tantas veces como diga n.
 * 
 * Ejemplo (n = 3, p = 8)
 * 0 1 2 3 4 5 6 7 0 1 2 3 4 5 6 7 0 1 2 3 4 5 6 7
 */

$n;$p;

echo "Introduce el numero de repeticiones: ";
fscanf(STDIN, "%d/n", $n);

echo "Y ahora, introduce el numero tope: ";
fscanf(STDIN, "%d/n", $p);

for($i=0; $i<$n; $i++){
    for($j=0; $j<$p; $j++){
        echo "$j ";
    }
}

?>