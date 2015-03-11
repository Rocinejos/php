<?php

/**
 * @author [$Sergio Santos Gil]
 * @copyright [$2014]
 * 
 * Dado un d�a, mes y a�o entre el 1 de enero de 1971 y la actualidad, 
 * mostrar el n�mero de a�os, meses, d�as, horas, minutos y segundos 
 * transcurridos desde entonces hasta ahora, sin utilizar strtotime().
 */

echo "Introduce d�a: ";
fscanf(STDIN, "%d/n", $dia);
echo "Introduce mes: ";
fscanf(STDIN, "%d/n", $mes);
echo "Introduce a�o: ";
fscanf(STDIN, "%d/n", $anyo);

//N�mero de segundos transcurridos desde la fecha introducida hasta hoy.
$segundosTranscurridos = time()-mktime(0,0,0,$mes,$dia,$anyo);
echo "\nSegundos transcurridos: $segundosTranscurridos \n\n";

//Constantes con un valor fijo.
const sPm = 60;
const sPh = 3600;
const sPd = 86400;
const sPme = 2592000;
const sPa = 31536000; 

$anyosTranscurridos = (int)($segundosTranscurridos/sPa);
$segundosRestantes = $segundosTranscurridos%sPa;

$mesesTranscurridos = (int)($segundosRestantes/sPme);
$segundosRestantes = $segundosTranscurridos%sPme;

$diasTranscurridos = (int)($segundosRestantes/sPd);
$segundosRestantes = $segundosTranscurridos%sPd;

$horasTranscurridos = (int)($segundosRestantes/sPh);
$segundosRestantes = $segundosTranscurridos%sPh;

$minutosTranscurridos = (int)($segundosRestantes/sPm);
$segundosRestantes = $segundosTranscurridos%sPm;

echo "Desde el $dia/$mes/$anyo:\n";
echo "Han transcurrido $anyosTranscurridos a�os, $mesesTranscurridos meses, $diasTranscurridos dias, $horasTranscurridos horas, $minutosTranscurridos minutos y $segundosRestantes segundos.";

?>