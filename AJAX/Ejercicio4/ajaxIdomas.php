<?php
include("idioma.php");
// Habría que protegerlo contra ejecuciones no AJAX
$idioma = isset ( $_REQUEST ['bandera'] ) ? $_REQUEST ['bandera'] : 'ES';
$etiquetas = $banderas[$idioma];
echo implode('#',$etiquetas);
?>