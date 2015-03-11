<?php

include ("Ejercicio9.php");
echo "<center>";
for($i=1; $i<=50; $i++){
	if($i%2!=0){
		resaltar($i);
	}
	else{
		echo "$i".PHP_EOL;
	}
}
echo "</center>";

?>