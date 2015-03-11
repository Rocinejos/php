<?php

/**
 * @author [$Sergio Santos Gil]
 * @copyright [$2014]
 * 
 * Dado un n�mero, repetir el patr�n + - . desde una l�nea
 * con "n" caracteres, hasta una con un caracter disminuyendo
 * un caracter en cada l�nea.
 */

$num;
$c = "+";

echo "Introduce un n�mero: ";
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