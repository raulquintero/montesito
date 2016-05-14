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

require_once( DIR_BASE.'/classes/terminal.class.php' );
$terminal = new Terminal();



//if ($pos) $realpath = substr($realpath, 0, -10);  // devuelve "abcde"
require_once( DIR_BASE.'/config/database.php' );
require_once( DIR_BASE.'/classes/class.db.php' );
require_once( DIR_BASE.'/classes/dbstore.class.php' );
require_once( DIR_BASE.'/classes/forma.class.php' );
require_once( DIR_BASE.'/classes/menu.class.php' );
require_once( DIR_BASE.'/classes/categorias.class.php' );
require_once( DIR_BASE.'/classes/menuleft.class.php' );
require_once( DIR_BASE.'/classes/widget.class.php' );
require_once( DIR_BASE.'/classes/salida.class.php' );
require_once( DIR_BASE.'/classes/sucursal.class.php' );

require_once( DIR_BASE.'/classes/class_login.php' );
require_once( DIR_BASE.'/config/variables.php' ); 
require_once( DIR_BASE.'/functions/menu.php');






//$database_connection=mysql_connect(DB_HOST, DB_USER, DB_PASS);
//$database_selection=mysql_select_db( DB_NAME, $database_connection);
$Sucursal = new Sucursal();
$login = new Login();
# Class configuration methods:

$login->setCryptMethod('sha1');

$database = new DB();
$dbstore = new DBSTORE();

$salida= new Salida();


$forma = new Forma();
$menu = new Menu();
$Categorias = new Categorias();
$menuleft = new MenuLeft();
$widget = new Widget();



$login->setDatabase($database);
$login->setDatabaseUsersTable('perlogin');
$menu->setdatabase($database);
$Categorias->setdatabase($dbstore);
$forma->setdatabase($database);
$Sucursal->setDatabase($database);
$terminal->setdatabase($database);



$query="SELECT empresa from empresa limit 1";
list($empresa)=$database->get_row($query);
$empresa = ucfirst($empresa);

require_once( DIR_BASE. '/functions/login.php' );

require_once( DIR_BASE.'/functions/mensajes.php');
require_once( DIR_BASE.'/functions/layout.php');
if ($register || $login->getRegister())
	require_once( DIR_BASE.'/config/security_register.php');
else
	require_once( DIR_BASE.'/config/security.php');


require_once( DIR_BASE.'/src/router.php');












	 

// echo "<br><br>";          // ********DEBUG**********
// foreach ($_SESSION as $k => $v) { echo "<br>[$k] => $v \n";}


    










 ?>