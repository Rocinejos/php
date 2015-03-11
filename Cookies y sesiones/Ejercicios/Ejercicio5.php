<?php
// phpinfo() --> Muestra la informaci�n de php.ini
//Se crea la sesi�n.
session_start();
//Si la sesi�n ya est� iniciada, se incrementa el valor.
if (isset($_SESSION['nVisitas'])){
	++$_SESSION['nVisitas'];
}
//Pero, si es la primera vez que se crea la sesi�n, se inicializa la variable.
else{
	$_SESSION['nVisitas']=1;
}

echo "<h1>Hola holita vecinito!</h1><h2>Ya es la "
		.$_SESSION['nVisitas']."� vez que te veo.</h2>";

//Al llegara 10 sesiones, se destruye la sesi�n.
if($_SESSION['nVisitas']==10){
	session_destroy();
}
?>