<?php

$accion = isset ($_REQUEST['accion'])?$_REQUEST['accion']:null;

if($accion!=null){
	if($accion=="nombre"){
		echo '<br/><label for="l">Introduce el nuevo nombre: </label><input id="l" type="text" name="nuevoValor" /><input type="hidden" value="nombre" name="valor" />';
	}else if($accion=="apellido"){
		echo '<br/><label for="l">Introduce el nuevo apellido: </label><input type="text" name="nuevoValor" id="l" /><input type="hidden" value="apellido" name="valor" />';
	}else{
		echo '<br/><label for="l">Introduce el nuevo tel&eacute;fono: </label><input type="text" name="nuevoValor" maxlength="9" id="l" /><input type="hidden" value="telefono" name="valor" />';
	}
	echo '&nbsp;<input type="submit" value="Aceptar" />';
}

?>