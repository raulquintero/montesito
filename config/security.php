<?php

if (!$login->getUserActive()){
//$serial=file (DIR_BASE."/config/terminal.txt");
$query_serial = "SELECT serial FROM terminal where ip='".limpiar($_SERVER['REMOTE_ADDR'])."' 
	AND ip='".$_SERVER['REMOTE_ADDR']."' AND enabled=1 limit 1";
list($serial_db) = $database->get_row($query_serial);
        
	if($serial_db)
	{
        print $loginDialog;
         exit();
    } else{
		echo $_SERVER['REMOTE_ADDR'];
    	print $configurarTerminal;exit();
    }

}

?>