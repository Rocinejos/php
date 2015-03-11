<?php

// Si $_COOKIE[] no tiene valor, se le otorga un valor nulo.
$sesion=isset($_COOKIE["visita"])?$_COOKIE["visita"]:null;

// Si la $sesion (la cookie) tiene ya un valor, se le incrementa el valor.
if($sesion!=null){
	$sesion+=1;
	setcookie("visita", $sesion);
	echo "Hola es la vez n&uacutemero $sesion que visitas est&aacute p&aacutegina.";
}
// En cambio, si no tiene valor, es decir, no se haya accedido a la página
// nunca, se le da un valor principal a la cookie.
else{
	setcookie("visita", 1);
	echo "Bienvidos hijos mios, gracias por estar aqu&iacute";
}

?>