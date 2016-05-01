<?php 

class Widget

{

	private $database;

    private $showMessage;


    

    // function Menu()

    // {


    // }

   public function setDatabase($database)

    {

        $this->database=$database;

    }






public function showFecha() {

$fecha_hoy=date("d F Y");
$day = date("l");

$fecha = "
<div class=\"pull-right\">
        <a href='/ofimatica?sub=calendario'>
        <ul class=\"stats\">
            
            <li class='lightred'>
                <i class=\"fa fa-calendar\"></i>

                <div class=\"details\">
                    <span class=\"big\">$fecha_hoy</span>
                    <span>$day, <span id=\"txt\"></span></span>
                    
                </div>
            </li>
        </ul></a>
    </div>
";
	echo $fecha;
}


public function showCalendar() {




$calendar = "
<div class=\"subnav\">
                <div class=\"subnav-title\">
                    <a href=\"#\" class='toggle-subnav'>
                        <i class=\"fa fa-angle-down\"></i>
                        <span>Calendar</span>
                    </a>
                </div>
                <div class=\"subnav-content less\">
                    <div class=\"jq-datepicker\"></div>
                </div>
            </div>
";
echo $calendar;
}


public function showBreadCrumbers($topico=null){

$title=explode("/",$topico);
$breadcrumber="
    <div class=\"breadcrumbs  \">
                    <ul>
                        <li>
                            <a href=\"more-login.html\">Home</a>
                            <i class=\"fa fa-angle-right\"></i>
                        </li>
                        <li>
                            <a href=\"more-files.html\">".$title[1]."</a>
                            <i class=\"fa fa-angle-right\"></i>
                        </li>
                        <li>
                            <a href=\"more-blank.html\">".$title[2]."</a>
                        </li>
                    </ul>
                    <div class=\"close-bread\">
                        <a href=\"#\">
                            <i class=\"fa fa-times\"></i>
                        </a>
                    </div>
    </div>
";

    echo $breadcrumber;
}


/**  

*  getParentId method

*/
public function getParentId($menu_id){

    $query = "SELECT parent_id FROM menu WHERE menu_id=$menu_id";
    list($parent_id) = $database->get_row($query);
    //$query = "SELECT menu_id from menu  WHERE menu_id=$parent_id";
    //list($parent_id) = $database->get_row($query);
    return $parent_id;
}





/**  

*  getParentId method

*/
public function editCategory($parent_id,$menu_name,$path_option,$menu_id){

                    $update = array(
                        'parent_id' => $parent_id,
                        'menu' => strtolower($menu_name),
                        'path_option' => $path_option
                    );
                    //Add the WHERE clauses
                    $where_clause = array(
                        'menu_id' => $menu_id
                    );
                    $updated = $this->database->update( 'menu', $update, $where_clause, 1 );

                return 10;


}




public function insertCategory($parent_id,$menu_name,$path_option){

            $query = "SELECT privilegio_id from menu ORDER BY privilegio_id DESC limit 1";
            list($lastPrivilegio_id)= $this->database->get_row($query);
                    $names = array(
                        'position' => 0,
                        'menu' => strtolower($menu_name),
                        'path_option' => $path_option,
                        'parent_id' =>  $parent_id,
                        'privilegio_id' => $lastPrivilegio_id+1
                        );
                        

                    if ($menu_name){
                        $add_query = $this->database->insert( 'menu', $names );
                        return 11;
                    }
                    else
                        return 12;
}

public function deleteCategory($menu_id){

    //Run a query to delete rows from table where id = 3 and name = Awesome, LIMIT 1
    $delete = array(
        'menu_id' => $menu_id
    );
    $deleted = $this->database->delete( 'menu', $delete, 1 );
    return $m=1;
}







} // end class














 ?>


