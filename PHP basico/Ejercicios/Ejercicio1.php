<?php

/**
 * @author [$Sergio Santos Gil]
 * @copyright [$2014]
 * 
 * Dados infinitos n�meros enteros (hasta introducir el n�mero 0)
 * inidicar el n�mero m�ximo y m�nimo de ellos.
 * 
 */

$num;

echo "Introduce un n�mero: ";
fscanf(STDIN, "%d/n", $num);

$mayor=$num;
$menor=$num;

while($num!=0){
    if($num>$mayor){
       $mayor = $num; 
    }
    elseif($num<$menor){
        $menor = $num;
    }
    echo "Introduce otro n�mero: ";
    fscanf(STDIN, "%d/n", $num);
}
echo "El n�mero m�ximo es $mayor y el m�nimo es $menor";

?>