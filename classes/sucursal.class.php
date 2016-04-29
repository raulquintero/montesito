<?php 

class Sucursal

{

	private $database;

    

   	public function setDatabase($database){

        $this->database=$database;

    }



  public function getSucursales(){

    $query = "SELECT sucursal,sucursal_alias,firstname,lastname,name,enabled from sucursal,person 
    where sucursal.gerente_id=person.person_id";
    $results=$this->database->get_results($query);
          
   return $results;

  }






}