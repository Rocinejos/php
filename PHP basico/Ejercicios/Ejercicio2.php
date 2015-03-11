<?php

/**
 * @author [$Sergio Santos Gil]
 * @copyright [$2014]
 * 
 * Dado un número, repetir el patrón + - . desde una línea
 * con "n" caracteres, hasta una con un caracter disminuyendo
 * un caracter en cada línea.
 */

$num;
$c = "+";

echo "Introduce un número: ";
fscanf(STDIN, "%d/n", $num);

for($i=$num; $i>=1; $i--){
    for($j=1; $j<=$i; $j++){
        echo "$c";
        
        switch($c){
            case "+":$c="-";
            break;
            case "-":$c=".";
            break;
            case ".":$c="+";
            break;                
        }        
    }
    echo "\n";
}

?>