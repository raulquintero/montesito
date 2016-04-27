<?php 

// $file = fopen(__DIR__."/../config/machine.conf", "r") or exit("Unable to open file!");
// //Output a line of the file until the end is reached
// while(!feof($file))
// {
//  $machine[] = fgets($file);
// }
// fclose($file);

define ("DIR_TEMPLATES" , __DIR__.'/../templates');
define ("DIR_BASE", __DIR__.'/..');




//if ($pos) $realpath = substr($realpath, 0, -10);  // devuelve "abcde"
require_once( DIR_BASE. '/functions/login.php' );
require_once( DIR_BASE.'/config/database.php' );
require_once( DIR_BASE.'/classes/class.db.php' );
require_once( DIR_BASE.'/classes/menu.class.php' );
require_once( DIR_BASE.'/classes/menuleft.class.php' );
require_once( DIR_BASE.'/classes/widget.class.php' );
require_once( DIR_BASE.'/classes/salida.class.php' );

require_once( DIR_BASE.'/classes/class_login.php' );
require_once( DIR_BASE.'/config/variables.php' ); 
require_once( DIR_BASE.'/functions/menu.php');






//$database_connection=mysql_connect(DB_HOST, DB_USER, DB_PASS);
//$database_selection=mysql_select_db( DB_NAME, $database_connection);
$login = new Login();
# Class configuration methods:

$login->setCryptMethod('sha1');

$database = new DB();
$salida= new Salida();

$menu = new Menu();
$menuleft = new MenuLeft();
$widget = new Widget();

$login->setDatabase($database);
$menu->setdatabase($database);




require_once( DIR_BASE.'/functions/mensajes.php');
require_once( DIR_BASE.'/functions/layout.php');
require_once( DIR_BASE.'/config/security.php');

require_once( DIR_BASE.'/src/router.php');












	 

// echo "<br><br>";          // ********DEBUG**********
// foreach ($_SESSION as $k => $v) { echo "<br>[$k] => $v \n";}


    










 ?>