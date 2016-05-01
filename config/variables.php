<?php


$signin=isset ($_GET['signin']) ? clear_url($_GET['signin']) : FALSE;
$path  = isset ($_GET['path'] ) ? $_GET['path'] : NULL;	
$menu_id  = isset ($_GET['menu_id'] ) ? $_GET['menu_id'] : NULL;	
 $op  = isset ($_GET['op'] ) ? clear_url($_GET['op'] ) : NULL;	
 $m  = isset ($_GET['m'] ) ? clear_url($_GET['m'] ) : NULL;	
$sub = isset ($_GET['sub']) ? clear_url($_GET['sub']) : NULL;	
$module = isset ($_GET['module']) ? clear_url($_GET['module']) : NULL;	

$action = isset ($_GET['action']) ? clear_url($_GET['action']) : NULL;	

$uri  = isset ($uri ) ? $uri : "NONE";	
$mensaje  = isset ($mensaje ) ? $mensaje : NULL;	
$register  = isset ($register ) ? $register : FALSE;	
$register_form  = isset ($register_form ) ? $register_form : FALSE;	
$category_id  = isset ($_GET['category_id'] ) ? $_GET['category_id'] : NULL;	


//POST | GET
// $menu_id = isset ($_GET['menu_id']) ? clear_url($_GET['menu_id']) : 0;	
$menuid_post  = isset ($_POST['menu_id'] ) ? $_POST['menu_id']  : NULL;	
$menuid_get  = isset ($_GET['menu_id'] ) ? $_GET['menu_id']  : NULL;	
if ($menuid_post==NULL ) $menu_id=$menuid_get;  else  $menu_id=$menuid_post;
if($menu_id==NULL) $menu_id=0;
$fn_post  = isset ($_POST['fn'] ) ? $_POST['fn']  : NULL;	
$fn_get  = isset ($_GET['fn'] ) ? $_GET['fn']  : NULL;	
if ($fn_post==NULL ) $fn=$fn_get;  else  $fn=$fn_post;	
$parentid_post  = isset ($_POST['parent_id'] ) ? $_POST['parent_id']  : NULL;	
$parentid_get  = isset ($_GET['parent_id'] ) ? $_GET['parent_id']  : NULL;	
if ($parentid_post==NULL ) $parent_id=$parentid_get;  else  $parent_id=$parentid_post;	


//POST VALUES

$menu_name  = isset ($_POST['menu_name'] ) ? $_POST['menu_name']  : NULL;	
$path_option  = isset ($_POST['path_option'] ) ? $_POST['path_option']  : NULL;	
$position  = isset ($_POST['position'] ) ? $_POST['position']  : NULL;	
// $parent_id  = isset ($_POST['parent_id'] ) ? $_POST['parent_id']  : NULL;	


// guarda en que menu principal te encuentras para marcarlo como activo en el menu de arriba
$check_ruta=$path;
$terminal_id = $terminal->getTerminal();
$sucursal= $terminal_id['sucursal'];
$location=NULL;


////////////////////////////////////////////titulos de cada pagina 
$titulos=array(
	'titulo'=>ucfirst($path),
	'subtitulo'=>ucfirst($sub)
	);

$_SESSION['privilegios'] = array(47,2,21,43,5,45,6);
















function clear_url ($str){
	return preg_replace('/[^a-z-0-9.]/',"",$str);
}
function limpiar  ($str){
	return preg_replace("@([^a-zA-Z0-9\+\-\_\*\@\$\!\;\.\?\#\:\=\%\/\ ]+)@Ui", "", $str);
}
function preffix($str){
	return '?sub='.$str;
}
?>