<?php

echo '<center>Listado de cookies de nivel <b>DAW2/Ejercicios/Cookies/Ejercicio3/nivel1/nivel2</b></br></br><table>';
echo '<tr><th>Nombre Cookie</th><th>Contenido de la cookie</th></tr>';

foreach($_COOKIE as $k => $valor){
	echo "<tr><td>$k</td><td>$valor</td></tr>";	
}
 
echo '</table></center>';

?>