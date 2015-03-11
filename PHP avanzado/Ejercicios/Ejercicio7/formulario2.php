<?php

/*function pintarFormulario(){*/
	echo <<<HTML
		<style type="text/css"> img{opacity: 0.2; } img.activo{opacity: 1;}</style>
		<a href="formulario1.php"><img src="img/1.png" /></a>
		<img class="activo" src="img/2.png" />
		<a href="formulario3.php"><img src="img/3.png" /></a>
		<img src="img/4.png" />
	
		<form action="formulario3.php" method="post">
			<fieldset><legend>Datos Profesionales: </legend>
				<label for="departamento">Departamento: </label><select id="departamento" name="departamento">
					<option value="marketing">Marketing</option>
					<option value="ventas">Ventas</option>
					<option value="informatica">Inform&aacutetica</option>
					<option value="produccion">Producci&oacuten</option>
				</select>
				<br /><br />
				<label for="salario"></label>Salario: <input id="salario" type="text" name="salario" />
				<br /><br />
				<label for="comentarios">Commentarios: </label><textarea id="comentarios" name="comentarios" rows="5" cols="20"></textarea>
				<br /><br />			
				<input type="submit" value="Guardar informaci&oacute;n e ir al paso 3 - Datos Bancarios" />
			</fieldset>
		</form>
HTML;

?>