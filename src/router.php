<?php 
//	function funcion_respuesta(){  al final del archivo solo para pruebas

$path = "/".$path;
$path .= isset($sub) ? '/'.$sub : '';
$uri = getRuta($path);
// $uri = $_SERVER['REQUEST_URI'];

switch ($path) {
	//responde con un json como salida
	 case '/api/show': 	$respuesta = funcion_respuesta(); $salida->showJson($respuesta); exit(); break;	
	
	case '/': 		$uri=$login->getHomePage(); $uri=encodeRuta($uri);	
					echo $location="Location: /".$uri[1]."?sub=".$uri[2];
					break;
	case '/mantenimiento/menu': 

			switch ($fn) {
				case 'add' :
					$m = $menu->insertCategory($parent_id,$menu_name, $path_option);
					echo $location="Location: /mantenimiento?sub=menu&m=$m&menu_id=$parent_id";
					break;
				case 'edit':
					$m = $menu->editCategory($parent_id,$menu_name,$path_option,$menu_id);
					echo $location="Location: /mantenimiento?sub=menu&m=$m&menu_id=$parent_id";
					break;

				case 'delete':
						echo "delete";
						if ( $menu_id){
							$m=$menu->deleteCategory($menu_id);
							echo $location="Location: /mantenimiento?sub=menu&m=$m&menu_id=$parent_id";
							
						}
					break;
				
			}
			break;
	
	case '/formas/addcategory':
			if ($sub) { 
					$uri= DIR_TEMPLATES . '/formas/'.$sub.'.form.php';
					echo layout($login,$menu)['top_form'];
					 require_once $uri;
					echo layout($login,$menu)['bottom'];
			}			
			exit();
			break;
	case '/formas/editcategory':
			if ($sub) { 
					$uri= DIR_TEMPLATES . '/formas/'.$sub.'.form.php';
					echo layout($login,$menu)['top_form'];
					 require_once $uri;
					echo layout($login,$menu)['bottom'];

			} exit();
			break;
	
	case '/logout':				header("Location: /authmain.php?module=login&action=1"); break;
}




	$mensaje = mensajes($m);
	 if($location);
	 	header($location);

















$breadcrumb  = $path;
$path=0;
$uri = DIR_TEMPLATES.$uri;
$existe = file_exists ( $uri );
 if (!$existe)	$uri= DIR_TEMPLATES .'/error/pagenotfound.inc.php';




function getRuta($path){
	$archivo = NULL;
	$path = explode("/", $path);
	//print_r ($path);
	if (isset($path[1])){
		$archivo=$path[1];
		if(isset($path[2]))
			$archivo .= '/'.$path[2];
		else
			$archivo .= '/'.$path[1];
 		$archivo.=".inc.php";
	}

	if ($archivo) 
		return "/".$archivo;
		else return "/";
}


function encodeRuta($ruta){
	$ruta = explode("/", $ruta);
	return $ruta;

}

	function funcion_respuesta(){ 
		$arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);
		return $arr;
		 }


 ?>