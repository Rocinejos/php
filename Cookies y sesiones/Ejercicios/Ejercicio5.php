<?php
// phpinfo() --> Muestra la información de php.ini
//Se crea la sesión.
session_start();
//Si la sesión ya está iniciada, se incrementa el valor.
if (isset($_SESSION['nVisitas'])){
	++$_SESSION['nVisitas'];
}
//Pero, si es la primera vez que se crea la sesión, se inicializa la variable.
else{
	$_SESSION['nVisitas']=1;
}

echo "<h1>Hola holita vecinito!</h1><h2>Ya es la "
		.$_SESSION['nVisitas']."º vez que te veo.</h2>";

//Al llegara 10 sesiones, se destruye la sesión.
if($_SESSION['nVisitas']==10){
	session_destroy();
}
?>