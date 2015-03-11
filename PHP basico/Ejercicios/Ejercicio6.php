<?php

/**
 * @author [$Sergio Santos Gil]
 * @copyright [$2014]
 * 
 * Pedir por teclado nombres de personas y sus edades, 
 * hasta que se introduzca el nombre ""fin"". 
 * Mostrar a continuación el nombre de cada persona introducida y 
 * su edad (entre paréntesis).
 */

$a = array();
$nombre;
$edad;

echo "¿Nombre? ";
fscanf(STDIN, "%s/n", $nombre);

/* Sin foreach: 

$x = 0;
$y = 1;

while($nombre!="fin"){
	echo "¿Edad? ";
	fscanf(STDIN, "%d/n", $edad);
    
    $a[$x] = $nombre;
    $a[$y] = $edad;
    $x+=2;
    $y+=2;
        
    echo "¿Nombre? ";
	fscanf(STDIN, "%s/n", $nombre);
}

for($i=0; $i<=$y-2; $i++){
    echo $a[$i]."(".$a[++$i]."), ";
}
*/

while($nombre!="fin"){
	echo "¿Edad? ";
	fscanf(STDIN, "%d/n", $edad);
    
    $a [$nombre] = $edad;
    
    echo "¿Nombre? ";
    fscanf(STDIN, "%s/n", $nombre);
    
}
echo "\n";

// foreach sin ordenar
echo "'foreach' SIN ordenar \n";
foreach($a as $nombre => $edad){
    echo "$nombre($edad), ";
}
echo "\n\n";

// foreach ordenado por CLAVE/ID CASILLA
echo "'foreach' ordenado por su CLAVE/ID CASILLA: \n";
ksort($a);
foreach($a as $nombre => $edad){
    echo "$nombre($edad), ";
}
echo "\n\n";

// foreach ordenado por VALOR
echo "'foreach' ordenado por su VALOR: \n";
asort($a);
foreach($a as $nombre => $edad){
    echo "$nombre($edad), ";
}

?>