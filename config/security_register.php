<?php

//if (!$login->getUserActive()){

$query_serial = "SELECT serial FROM terminal where serial='".$terminal->getSerial()."' 
	AND enabled=1 limit 1";
list($serial_db) = $database->get_row($query_serial);
        if (!$login->getUserActive()) {print $loginDialog; exit();}

//}

?>