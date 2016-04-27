<?php 

function mensajes($m){
	$category_id = isset($_GET['category_id']) ?$_GET['category_id'] : NULL;
	$mensaje =isset($mensaje) ? $mensaje : NULL;
	switch ($m) {
		case '1':	$mensaje="Se ha Borrado la categoria $category_id Permanentemente.";break;
		case '10':	$mensaje="Categoria Actualizada correctamente.";break;
		case '11':	$mensaje="Categoria Agregada.";break;
		case '12':	$mensaje="No se puede crear una categoria sin nombre.";break;



		default:
			# code...
			break;
	}
	return $mensaje;
}


 ?>