<?php

echo <<<HTML
	<style type="text/css"> img{opacity: 0.2; } img.activo{opacity: 1;}</style>
	<img src="img/1.png" />
	<img src="img/2.png" />
	<img src="img/3.png" />
	<img class="activo" src="img/4.png" />
		
	<fieldset><legend>Datos Personales</legend>
			<label for="nombre">Nombre: </label><input id="nombre" type="text" name="nombre" />
			<label for="apellidos">Apellidos: </label><input id="apellidos" type="text" name="apellidos" />
			<br /><br />
			<label for="nacimiento">Feha Nacimiento: </label><input id="nacimiento" type="text" name="nacimiento" value="dd/mm/YY"/>
			<br /><br />
			G&eacutenero -->
				<label for="femenino">Femenino</label><input id="femenino" type="radio" name="genero" />
				<label for="masculino">Masculino</label><input id="masculino" type="radio" name="genero" />
				<label for="otro"></label>Otro<input id="otro" type="radio" name="genero" />
			<br /><br />	
			<label for="estado">Casado o pareja de hecho</label><input id="estado" type="checkbox" name="estado" />
			<label for="hijo">Hijos</label><input id="hijo" type="checkbox" name="hijos" />
			<br /><br />
			<label for="nacionalidades">Nacionalidades: </label><select id="nacionalidades" name="nacionalidades" multiple="multiple">
				<option value="es">Espa&ntildeola</option>
				<option value="af">Africana</option>
				<option value="ru">Rumana</option>
				<option value="fr">Francesa</option>
				<option value="in">Inglesa</option>
			</select>
			<br /><br />
	</fieldset>
		
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
	</fieldset>
		
		
	<fieldset><legend>Datos Bancarios</legend>
			<label for="cuenta">Cuenta corriente: </label><input id="cuenta" type="text" name="cuenta" />
			<br /><br />
	</fieldset>
	<a href="formulario1.php">Volver al principio</a>
HTML;

?>