<?php 


class Salida 

{

	private $database;

    private $layout;


    
   public function setLayout($layout)

    {

        $this->layout=$layout;

    }




    public function showJson($respuesta){
    	header('Content-Type: application/json; charset=UTF-8');

    	echo json_encode($respuesta);
    }

    public function putHtml($respuesta,$uri=NULL){

    	echo $this->layout[0];

 		//$menu->listCategory(0);
		echo $this->layout[1];

        	 $uri; 

		echo $this->layout[2];

    }




}



 ?>