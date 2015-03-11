<?php

/**
 * @author [$Sergio Santos Gil]
 * @copyright [$2014]
 * 
 * Dada una palabra y un n�mero entre 1 y 6, generar una p�gina HTML 
 * que contenga dicha l�nea entre tags <hX> crecientes desde 1 hasta n 
 * y luego decreciendo hasta 1 de nuevo.
 * 
 */

$n; 
$texto;

echo "Introduzca el texto deseado: ";
fscanf(STDIN, "%s/n", $texto);

echo "Introduzca el tama�o deseado (1-6): ";
fscanf(STDIN, "%d/n", $n);

for($i=1; $i<=$n; $i++){
    echo "<h$i>$texto</h$i>\n";
}
for($i=$n-1; $i>=1; $i--){
    echo "<h$i>$texto</h$i>\n";
}

?>