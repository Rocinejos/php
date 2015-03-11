<?php

function pintarFormulario(){
	echo <<<HTML
		<style type="text/css"> img{opacity: 0.2; } img.activo{opacity: 1;}</style>
		<a href="formulario1.php"><img src="img/1.png" /></a>
		<a href="formulario2.php"><img src="img/2.png" /></a>
		<img class="activo" src="img/3.png" />
		<img src="img/4.png" />
	
		<form action="formularioFinal.php" method="post">
			<fieldset><legend>Datos Bancarios</legend>
				<label for="cuenta">Cuenta corriente: </label><input id="cuenta" type="text" name="cuenta" />
				<br /><br />
				<input type="submit" value="Guardar informaci&oacute;n e ir al resumen final">
			</fieldset>
		</form>
HTML;
}
?>