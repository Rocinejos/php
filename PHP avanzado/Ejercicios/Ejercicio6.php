<?php
/**
 * Hacer un programa �urlEncoding.php� que muestre una tabla con los campos �#�,
 * �car�cter� y �C�d. URL� que muestre para los caracteres ASCII del 0 al 255 su
 * representaci�n gr�fica. PISTA: investigar funci�n chr() y urlencode()
 */

echo "<center><table border=2px> <caption>Tabla ASCII</caption>";
echo "<tr><td>#</td><td>Car&aacutecter</td><td>C&oacutedigo URL</td></tr>";
for($i=0; $i<255; $i++){
	echo "<tr><td>$i</td><td>".chr($i)."</td><td>".urlencode(chr($i))."</td></tr>";
}
echo "</table></center>";
?>