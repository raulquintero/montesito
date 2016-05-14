<?php 

class Forma

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






    public function getForms(){

    	$query = "SELECT * from forma ORDER BY forma";
    	$rows = $this->database->get_results( $query );
        return $rows;

    }




public function showCategoryDeleted($parent_id=0,$level=0) {
    echo "<tr>";
    $parent_id=isset($parent_id) ? $parent_id :0;
    $query = "SELECT menu, menu_id , parent_id, path_option,position,privilegio_id FROM menu  WHERE  parent_id=".$parent_id." AND deleted=TRUE ORDER BY position ASC";
    // $res = mysql_query($query) or die($query);
    $subs = $this->database->get_results($query);
    $cuantos=count ($subs);
    if($cuantos == 0) return;
    foreach ($subs as $sub) {
        $query2="SELECT menu_id from menu where parent_id=".$sub['menu_id'];
        $n_subs = $this->database->get_results($query2);
        $n_subs = count($n_subs);
            echo "<td>".$sub['menu_id']."</td><td><a href='/mantenimiento?sub=menu&menu_id=".$sub['menu_id']."'>".$sub['menu']."</a></td>";
            if ($n_subs)    
                echo "<td> <i class=\"glyphicon-list\"></i> SubMenu </td>";
                else echo "<td>".$sub['path_option']."</td>";

            echo "<td>".$sub['position']."</td>

            <td>".$sub['privilegio_id']."</td>
            <td>
            <a class=hidden-print href='/mantenimiento?sub=menu&menu_id=".$sub['menu_id']."&fn=restore&parent_id=$parent_id'><button class=\"btn btn-success\">Restaurar <!--i class=\"icon-plus icon-white\"></i--></button></a></td>
            ";

            if (!$n_subs)
            echo "<td>
                <a class=hidden-print href='/mantenimiento?sub=menu&menu_id=".$sub['menu_id']."&fn=remove&parent_id=$parent_id' >
                <button class=\"btn btn-warning \">Remover<!--i class=\"icon-plus icon-white\"></i--></button></a>
                </td>
            ";
            else
                echo "<td>
                <button disabled class=\"btn btn-warning \">Remover<!--i class=\"icon-plus icon-white\"></i--></button>
                </td>
            ";
                
        echo '</tr>';


    }
  
    
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
public function editCategory($parent_id,$menu_name,$path_option,$menu_id,$position){

                    $update = array(
                        'parent_id' => $parent_id,
                        'menu' => strtolower($menu_name),
                        'path_option' => $path_option,
                        'position' => $position
                    );
                    //Add the WHERE clauses
                    $where_clause = array(
                        'menu_id' => $menu_id
                    );
                    $updated = $this->database->update( 'menu', $update, $where_clause, 1 );

                return 10;


}




public function insertForm($form_name,$path_option){

            // echo $query = "SELECT privilegio_id from menu ORDER BY privilegio_id DESC limit 1";
            // list($lastPrivilegio_id)= $this->database->get_row($query);
                    if ($form_name){
                    $names = array(
                        'forma' => strtolower($form_name),
                        'path_option' => $path_option,
                        'privilegio_id' => 0,
                        'deleted' => 0
                        );
                        

                    $add_query = $this->database->insert( 'forma', $names );
                    $last_forma_id = $this->database->lastid();

                    $privilegio = array(
                        'privilegio' => $form_name,
                        'menu_id' => $last_forma_id,
                        'privilegiotipo_id' => 2,
                        'path_option' => $path_option
                        );
                    $add_query = $this->database->insert( 'privilegio', $privilegio );
                    $last_privilegio_id = $this->database->lastid();

                    $update = array(
                        'privilegio_id' => $last_privilegio_id
                        );
                    //Add the WHERE clauses
                    $where_clause = array(
                        'forma_id' => $last_forma_id
                        );
                    $updated = $this->database->update( 'forma', $update, $where_clause, 1 );


                        return 11;
                    }
                    else
                        return 12;
}

public function deleteCategory($menu_id){

    //Run a query to delete rows from table where id = 3 and name = Awesome, LIMIT 1
    // $delete = array(
    //     'menu_id' => $menu_id
    // );
    // $deleted = $this->database->delete( 'menu', $delete, 1 );



    $update = array(
            'deleted' => TRUE
            );
            //Add the WHERE clauses
            $where_clause = array(
                'menu_id' => $menu_id
            );
            $updated = $this->database->update( 'menu', $update, $where_clause, 1 );



    return $m=1;
}


public function restoreCategory($menu_id){

    //Run a query to delete rows from table where id = 3 and name = Awesome, LIMIT 1
    // $delete = array(
    //     'menu_id' => $menu_id
    // );
    // $deleted = $this->database->delete( 'menu', $delete, 1 );



    $update = array(
            'deleted' => 0
            );
            //Add the WHERE clauses
            $where_clause = array(
                'menu_id' => $menu_id
            );
            $updated = $this->database->update( 'menu', $update, $where_clause, 1 );



    return $m=15;
}



public function removeCategory($menu_id){

    //Run a query to delete rows from table where id = 3 and name = Awesome, LIMIT 1
    $delete = array(
        'menu_id' => $menu_id
    );
    $deleted = $this->database->delete( 'menu', $delete, 1 );
    $delete = array(
        'menu_id' => $menu_id
    );
    $deleted = $this->database->delete( 'pivilegio', $delete, 1 );
}

public function setPrivilegio(){
    $query = "SELECT * from menu ORDER BY menu_id";
        $results = $this->database->get_results($query);

    foreach ($results as $row) {
        
        $names = array(
            'privilegiotipo_id' => 1,
            'privilegio' => $row['menu'],
            'path_option' => strtolower($row['path_option']),
            'menu_id' => $row['menu_id']
            );

        $add_query = $this->database->insert( 'privilegio', $names );
        $last_id = $this->database->lastid();
        $update = array (
            'privilegio_id'=>$last_id
            );
        //Add the WHERE clauses
        $where_clause = array(
            'menu_id' => $row['menu_id']
            );
        $updated = $this->database->update( 'menu', $update, $where_clause, 1 );







       
    }

    
}


} // end class














 ?>


