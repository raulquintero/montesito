<?php 

class Terminal

{

	private $database;

    

   	public function setDatabase($database){

        $this->database=$database;

    }



	public function getTerminal(){
      $key = $_SERVER['HTTP_USER_AGENT'];
  		$array=explode("/", $key);
  		$total=count($array);
  		$array1['sucursal']=$array[$total-2];
  		$array1['terminal']=$array[$total-1];
  		return $array1;
	}

  public function getSerial(){
    $key = $_SERVER['HTTP_USER_AGENT'];
    $array=explode("/", $key);
    $total=count($array);
    $terminal['sucursal']=$array[$total-2];
    $terminal['terminal']=$array[$total-1];
    $key = substr(sha1($terminal['sucursal']),10,5)."-".substr(sha1($terminal['terminal']),5,5)."-".substr(sha1($_SERVER['REMOTE_ADDR']),0,5);
    return $key;
  }

  public function getTerminales(){


   


    $query = "SELECT terminal,terminalrole,serial,terminal.enabled,sucursal,sucursal_alias from terminal,terminalrole, sucursal 
    where terminal.terminalrole_id=terminalrole.terminalrole_id AND terminal.sucursal_id=sucursal.sucursal_id";
    $results=$this->database->get_results($query);
          
   return $results;

  }






}