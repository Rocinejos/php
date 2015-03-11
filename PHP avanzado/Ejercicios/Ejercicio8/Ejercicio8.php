<?php 
// Se declara una variable para cada campo del formulario y se inicializa a vac�o
$nombre = '';
$clave = '';
$oculto = '';
$semaforo = '';
$publicidad = '';
$idiomas = '';
$anioFinEstudios = '';
$codigosPostales = '';
$comentarios = '';
$archivo = '';
$imagenX = '';
$imagenY = '';
// Se captura cada campo proviniente del formulario, comprobando que contenga datos

// se recibe el nombre
if (isset ( $_REQUEST ['txtNombre'] )) {
	$nombre = $_REQUEST ['txtNombre'];
} 

// se recibe la contrase�a
if (isset ( $_REQUEST ['pswClave'] )) {
	$clave = $_REQUEST ['pswClave'];
}

// se recibe el campo oculto
if (isset ( $_REQUEST ['hdnOculto'] )) {
	$oculto = $_REQUEST ['hdnOculto'];
}

// se recibe el valor seleccionado del bot�n de radio
if (isset ( $_REQUEST ['rdSemaforo'] )) {
	$semaforo = $_REQUEST ['rdSemaforo'];
}

// se recibe el checkbox de publicidad
if (isset ( $_REQUEST ['publi'] )) {
	$publicidad = $_REQUEST ['publi'];
}

// se recibe el checkbox m�ltiple de idiomas y se trata como un array
if (isset ( $_REQUEST ['cbIdioma'] )) {
	$tamanioSelectIdiomas = sizeof ( $_REQUEST ['cbIdioma'] );
	for($i = 0; $i < $tamanioSelectIdiomas; $i ++) { // se recorre el array de checkboxes
		
		if (isset ( $_REQUEST ['cbIdioma'] [$i] )) { // se comprueba, para cada elemento, si est� seleccionado
			$idiomas .= $_REQUEST ['cbIdioma'] [$i] . ' ';
		}
	}
}

// se recibe el a�o de fin de estudios
if (isset ( $_REQUEST ['selAnioFinEstudios'] )) {
	$anioFinEstudios = $_REQUEST ['selAnioFinEstudios'];
}

// se recibe el select m�ltiple de ciudades (c�digos postales), que se trata como un array
if (isset ( $_REQUEST ['selCodigosPostales'] )) {
	$tamanioSelectCiudades = sizeof ( $_REQUEST ['selCodigosPostales'] );
	for($i = 0; $i < $tamanioSelectCiudades; $i ++) { // se recorre el array de checkboxes
		
		if (isset ( $_REQUEST ['selCodigosPostales'] [$i] )) { // se comprueba, para cada elemento, si est� seleccionado
			$codigosPostales .= $_REQUEST ['selCodigosPostales'] [$i] . ' ';
		}
	}
}

// se recibe el contenido del textarea
if (! empty ( $_REQUEST ['txaComentarios'] )) {
	$comentarios = $_REQUEST ['txaComentarios'];
}

// se recibe el nombre del archivo
if (! empty ( $_REQUEST ['flArchivo'] )) {
	$archivo = $_REQUEST ['flArchivo'];
}

// se recibe la coordenada X del punto
if (isset ( $_REQUEST ['imagen_x'] )) {
	$imagenX = $_REQUEST ['imagen_x'];
}

// se recibe la coordenada Y del punto
if (isset ( $_REQUEST ['imagen_y'] )) {
	$imagenY = $_REQUEST ['imagen_y'];
}
?>

<html>
<body>
	<b>Nombre: </b><?php echo $nombre; ?><br />
	<b>Clave: </b><?php echo $clave; ?><br />
	<b>Oculto: </b><?php echo $oculto; ?><br />
	<b>Semaforo: </b><?php echo $semaforo; ?><br />
	<b>Publicidad: </b><?php echo $publicidad; ?><br />
	<b>Idiomas: </b><?php echo $idiomas; ?><br />
	<b>A�o de fin de estudios: </b><?php echo $anioFinEstudios; ?><br />
	<b>C�digos postales de provincias: </b><?php echo $codigosPostales; ?><br />
	<b>Comentarios: </b><?php echo $comentarios; ?><br />
	<b>Archivo: </b><?php echo $archivo; ?><br />
	<b>Imagen: </b>(<?php echo $imagenX; ?>,<?php echo $imagenY; ?>) 
	<br />
</body>
</html>