<?php 

class MenuLeft 

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






public function show($menu_id=0,$check_route=NULL) {




$menuleft = "
<div id=\"left\">
    <form action=\"search-results.html\" method=\"GET\" class='search-form'>
        <div class=\"search-pane\">
            <input type=\"text\" name=\"search\" placeholder=\"Search here...\">
            <button type=\"submit\">
                <i class=\"fa fa-search\"></i>
            </button>
        </div>
    </form>
    <div class=\"subnav\">
        <div class=\"subnav-title\">
            <a href=\"#\" class='toggle-subnav'>
                <i class=\"fa fa-angle-down\"></i>
                <span>Atajos</span>
            </a>
        </div>
        <ul class=\"subnav-menu\">
            <li class='dropdown'>
                <a href=\"#\" data-toggle=\"dropdown\">Articles</a>
                <ul class=\"dropdown-menu\">
                    <li>
                        <a href=\"#\">Action #1</a>
                    </li>
                    <li>
                        <a href=\"#\">Antoher Link</a>
                    </li>
                    <li class='dropdown-submenu'>
                        <a href=\"#\" data-toggle=\"dropdown\" class='dropdown-toggle'>Go to level 3</a>
                        <ul class=\"dropdown-menu\">
                            <li>
                                <a href=\"#\">This is level 3</a>
                            </li>
                            <li>
                                <a href=\"#\">Unlimited levels</a>
                            </li>
                            <li>
                                <a href=\"#\">Easy to use</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a href=\"#\">News</a>
            </li>
            <li>
                <a href=\"#\">Pages</a>
            </li>
            <li>
                <a href=\"#\">Comments</a>
            </li>
        </ul>
    </div>
    
    <div class=\"subnav\">
        <div class=\"subnav-title\">
            <a href=\"#\" class='toggle-subnav'>
                <i class=\"fa fa-angle-down\"></i>
                <span>Settings</span>
            </a>
        </div>
        <ul class=\"subnav-menu\">
            <li>
                <a href=\"#\">Theme settings</a>
            </li>
            <li class='dropdown'>
                <a href=\"#\" data-toggle=\"dropdown\">Page settings</a>
                <ul class=\"dropdown-menu\">
                    <li>
                        <a href=\"#\">Action #1</a>
                    </li>
                    <li>
                        <a href=\"#\">Antoher Link</a>
                    </li>
                    <li class='dropdown-submenu'>
                        <a href=\"#\" data-toggle=\"dropdown\" class='dropdown-toggle'>Go to level 3</a>
                        <ul class=\"dropdown-menu\">
                            <li>
                                <a href=\"#\">This is level 3</a>
                            </li>
                            <li>
                                <a href=\"#\">Unlimited levels</a>
                            </li>
                            <li>
                                <a href=\"#\">Easy to use</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a href=\"#\">Security settings</a>
            </li>
        </ul>
    </div>
    <div class=\"subnav subnav-hidden\">
        <div class=\"subnav-title\">
            <a href=\"#\" class='toggle-subnav'>
                <i class=\"fa fa-angle-right\"></i>
                <span>Default hidden</span>
            </a>
        </div>
        <ul class=\"subnav-menu\">
            <li>
                <a href=\"#\">Menu</a>
            </li>
            <li class='dropdown'>
                <a href=\"#\" data-toggle=\"dropdown\">With submenu</a>
                <ul class=\"dropdown-menu\">
                    <li>
                        <a href=\"#\">Action #1</a>
                    </li>
                    <li>
                        <a href=\"#\">Antoher Link</a>
                    </li>
                    <li class='dropdown-submenu'>
                        <a href=\"#\" data-toggle=\"dropdown\" class='dropdown-toggle'>More stuff</a>
                        <ul class=\"dropdown-menu\">
                            <li>
                                <a href=\"#\">This is level 3</a>
                            </li>
                            <li>
                                <a href=\"#\">Easy to use</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a href=\"#\">Security settings</a>
            </li>
        </ul>
    </div>
</div>
";

	return $menuleft;
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


