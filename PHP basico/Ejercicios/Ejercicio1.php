<?php

/**
 * @author [$Sergio Santos Gil]
 * @copyright [$2014]
 * 
 * Dados infinitos números enteros (hasta introducir el número 0)
 * inidicar el número máximo y mínimo de ellos.
 * 
 */

$num;

echo "Introduce un número: ";
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
    echo "Introduce otro número: ";
    fscanf(STDIN, "%d/n", $num);
}
echo "El número máximo es $mayor y el mínimo es $menor";

?>