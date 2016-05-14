<?php 

class Categorias 

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






    public function getMenu($roles){

    	$query = "SELECT * from menu where parent_id=0 ORDER BY position";
    	$sub = $this->database->get_results( $query );


		foreach( $sub as $sub )
			{
				$menu[]=$sub['menu'];
				$this->listCategory($sub['parent_id']);


            }
        return $menu;


    }



public function listCategory($parent_id,$level=0,$check_ruta,$ul=0) {
	//$level=0;
    // echo "<ul class=\"main-nav\">\n";

    $query = "SELECT menu, menu_id , parent_id, path_option,privilegio_id FROM menu  WHERE  parent_id='$parent_id' AND deleted=FALSE ORDER BY  position ASC";
    // $res = mysql_query($query) or die($query);
    $subs = $this->database->get_results($query);
    $cuantos=count ($subs);
    if($cuantos == 0) return;
    $cuantos_subs=0;
    foreach ($subs as $sub) {
if (in_array($sub['privilegio_id'], $_SESSION['privilegios']))
    {
     
        if (strtoupper($check_ruta)==strtoupper($sub['menu']))
                $active="active"; else $active = NULL;
            
         if ($level==0)
        {
			$query2="SELECT count(menu)  from menu where parent_id=".$sub['menu_id'];
        	list( $cuantos_subs ) = $this->database->get_row( $query2 );
        	if ($cuantos_subs>0)
        		
                         echo "       <li class=\"$active\">
                            <a href=\"#\" data-toggle=\"dropdown\" class='dropdown-toggle '>
                             <span>".ucfirst($sub['menu'])."</span>
                        <span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">";
                      

        	else{
            
	
            echo "<li class=\"$active\" ><a href=\"".$sub['path_option']."\">".ucfirst($sub['menu'])."</a></li>";
            }
        }
        else
        {
            $query2="SELECT count(menu)  from menu where parent_id=".$sub['menu_id'];
            list( $cuantos_subs ) = $this->database->get_row( $query2 );
            if ($cuantos_subs>0)
                echo "<li class='dropdown-submenu'><a href='#' data-toggle='dropdown' class='dropdown-toggle'><b>".ucfirst($sub['menu'])."</b></a><ul  class=\"dropdown-menu\">";
            else{
                //if(!$sub['path_option']) $flag="<i class=\"glyphicon-ban\"></i>"; else $flag=null;
                if($sub['menu']=="[div]") 
                    echo "<li style='border-top:1px solid #cccccc;'></li>";
                else
                    if(!$sub['path_option']) 
                        echo "<li class='disabled'><a tabindex=\"-1\" href=\"#\">".ucfirst($sub['menu'])." </a></li>";
                    else
                        echo "<li><a tabindex=\"-1\" href=\"".$sub['path_option']."\"><b>".ucfirst($sub['menu'])."</b> </a></li>";
            }
        }
    }        

        $this->listCategory($sub['menu_id'],$level+1,$check_ruta,$ul=0);
        	if ($cuantos_subs>0)
        		echo '</ul>';
        		
        echo '</li>';
    }
  
}

public function showListCategory($parent_id,$level=0) {
	$level=0;
    $query = "SELECT menu, menu_id , parent_id, path_option FROM menu  WHERE  deleted=FALSE AND parent_id=".$parent_id;
    // $res = mysql_query($query) or die($query);
    $subs = $this->database->get_results($query);
    $cuantos=count ($subs);
    if($cuantos == 0) return;
    
    foreach ($subs as $sub) {
    	 if ($level==0)
        {

			$query2="SELECT count(menu)  from menu where parent_id=".$sub['menu_id'];
        	list( $cuantos_subs ) = $this->database->get_row( $query2 );
        	if ($cuantos_subs>0)
        		echo "<li class=\"dropdown\">
                                <a href=\"/configuracion?sub=menu&menu_id=".$sub['menu_id']."\" role=\"button\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">".ucfirst($sub['menu'])." <i class=\"caret\"></i></a>
                                <ul class=\"dropdown-menu\">";

        	else	
        	echo "<li class=\"\"><a href=\"/mantenimiento?sub=menu&menu_id=".$sub['menu_id']."\">".ucfirst($sub['menu'])."</a>";
        }
        else
        {
        	echo "<li><a tabindex=\"-1\" href=\"/mantenimiento?sub=menu&menu_id=".$sub['menu_id']."\">".ucfirst($sub['menu'])."</a></li>";
        }
        $this->showListCategory($sub['menu_id'],$level+1);
        	if ($cuantos_subs>0)
        		echo '</ul>';
        		
        echo '</li>';
    }
  
    
}








 // <tr>
	// 					                  <td>1</td>
	// 					                  <td>Mark</td>
	// 					                  <td>Otto</td>
	// 					                  <td>@mdo</td>
	// 					                </tr>

public function showCategory($parent_id=0,$level=0) {
    echo "<tr>";
    $parent_id=isset($parent_id) ? $parent_id :0;
    $query = "SELECT categoria, categoria_id , parent_id, tags,position FROM categoria  WHERE  parent_id=".$parent_id." AND deleted=FALSE ORDER BY position ASC";
    // $res = mysql_query($query) or die($query);
    $subs = $this->database->get_results($query);
    $cuantos=count ($subs);
    if($cuantos == 0) return;
    foreach ($subs as $sub) {
        $query2="SELECT categoria_id from categoria where parent_id=".$sub['categoria_id'];
        $n_subs = $this->database->get_results($query2);
    	$n_subs = count($n_subs);
        	echo "<td>".$sub['categoria_id']."</td><td><span class='visible-print'>".$sub['categoria']."</span><a class='hidden-print' href='/administracion?sub=categorias&categoria_id=".$sub['categoria_id']."'>".ucwords($sub['categoria'])."</a></td>";
           

            if ($n_subs)    
                echo "<td> <i class=\"glyphicon-list\"></i> ($n_subs) SubMenus  </td>";
                else 
                    echo "<td> --- </td>";

            echo "<td>".$sub['tags']."</td>";
        	echo "<td>".$sub['position']."</td>

            <td>
            <a class='hidden-print' href=\"#modal-alert\" data-toggle=\"modal\"  onclick='showForma(\"categoryproducts\",\"editcategoryproducts\",".$sub['categoria_id'].")'><button class=\"btn btn-success\">Editar <!--i class=\"icon-plus icon-white\"></i--></button></a></td>
            ";

            if (!$n_subs)
            echo "<td class='hidden-print'>
        		<a class='hidden-print' href='/administracion?sub=categorias&categoria_id=".$sub['categoria_id']."&fn=delete&parent_id=$parent_id' >
                <button class=\"btn btn-warning\">Eliminar<!--i class=\"icon-plus icon-white\"></i--></button></a>
        	 	</td>
        	";
            else
                echo "<td>
                <button disabled class=\"btn btn-warning hidden-print\">Eliminar<!--i class=\"icon-plus icon-white\"></i--></button>
                </td>
            ";
        		
        echo '</tr>';


    }
  
    
}





public function showCategoryDeleted($parent_id=0,$level=0) {
    echo "<tr>";
    $parent_id=isset($parent_id) ? $parent_id :0;
    $query = "SELECT categoria, categoria_id , parent_id, tags,position FROM categoria  WHERE  parent_id=".$parent_id." AND deleted=TRUE ORDER BY position ASC";
    // $res = mysql_query($query) or die($query);
    $subs = $this->database->get_results($query);
    $cuantos=count ($subs);
    if($cuantos == 0) return;
    foreach ($subs as $sub) {
        $query2="SELECT categoria_id from categoria where parent_id=".$sub['categoria_id'];
        $n_subs = $this->database->get_results($query2);
        $n_subs = count($n_subs);
            echo "<td>".$sub['categoria_id']."</td><td><a href='/administacion?sub=categorias&categoria_id=".$sub['categoria_id']."'>".$sub['categoria']."</a></td>";
            if ($n_subs)    
                echo "<td> <i class=\"glyphicon-list\"></i> SubMenu </td>";
                else echo "<td>".$sub['tags']."</td>";

            echo "<td>".$sub['position']."</td>

            <td>priv</td>
            <td>
            <a class=hidden-print href='/administracion?sub=categorias&categoria_id=".$sub['categoria_id']."&fn=restore&parent_id=$parent_id'><button class=\"btn btn-success\">Restaurar <!--i class=\"icon-plus icon-white\"></i--></button></a></td>
            ";

            if (!$n_subs)
            echo "<td>
                <a class=hidden-print href='/administacion?sub=categorias&categoria_id=".$sub['categoria_id']."&fn=remove&parent_id=$parent_id' >
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






public function showAddListCategory($parent_id,$level=0,$categoria_id=0) {
    //echo "categoria_id:".$categoria_id;
     $query = "SELECT categoria, categoria_id , parent_id FROM categoria  WHERE   deleted=FALSE AND parent_id=".$parent_id;
    // $res = mysql_query($query) or die($query);
    $subs = $this->database->get_results($query);
    $cuantos=count ($subs);
    if($cuantos == 0) return;
    
 $tab="";
            for ($i=0; $i < $level; $i++) { 
                $tab.="&nbsp;&nbsp;&nbsp;";
            }

    foreach ($subs as $sub) {
         if ($level==0)
        {
           
            $query2="SELECT count(categoria)  from categoria where parent_id=".$sub['categoria_id'];
            list( $cuantos_subs ) = $this->database->get_row( $query2 );
            // if ($cuantos_subs>0)
            //     echo "<option value=".$sub['menu_id']." $selected>".$sub['menu']."</option>";
            // else 
            if ($sub['categoria_id']==$categoria_id) $selected=" selected "; else $selected = NULL;   
                echo "<option value=".$sub['categoria_id']." $selected>".ucfirst($sub['categoria'])." ".$sub['categoria_id']."</option>";
        }
        else{
        
            if ($sub['categoria_id']==$categoria_id) $selected=" selected "; else $selected = NULL;
                    echo "<option value=".$sub['categoria_id']." $selected>$tab".ucfirst($sub['categoria'])." ".$sub['categoria_id']."</option>";
        }
        $this->showAddListCategory($sub['categoria_id'],$level+1,$categoria_id);
    }
}





public function showSecurityListCategory($parent_id,$level=0,$ul1=NULL,$ul2=null,$role_id=1) {
    //$level=0;

    $query = "SELECT menu, menu_id, privilegio_id,path_option FROM menu  WHERE  deleted=FALSE AND parent_id=".$parent_id." ORDER BY position";
    // $res = mysql_query($query) or die($query);
    $subs = $this->database->get_results($query);
    $cuantos=count ($subs);
    if($cuantos == 0) return;
    
    $cuantos_subs=0;


    foreach ($subs as $sub) {

        if ($level==0)
         {

                //$sub['menu']="<span class='label label-default'>".strtoupper($sub['menu'])."</span>";

                echo "<div class=\"form-group\" >
                    <label class=\"control-label col-sm-4\" style='border-top:1px solid #cccccc'> &nbsp;&nbsp;".$sub['menu']."
                    ".$sub['privilegio_id']."</label>
                    <div class=\"col-sm-8\" style='border-top:1px solid #cccccc'>
                        <div class=\""." ".$sub['menu_id'].$sub['menu_id']."\">
                            <label>    
                                <input type=\"checkbox\"  name=\"".$sub['menu_id']."\">Mostrar &nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;
                            </label>
                            <label>
                            ".$sub['path_option']."
                            </label>
                        </div>
                    </div>
                </div>  ";
            
            
        } 
        else 
        {
             $query2="SELECT count(menu)  from menu where parent_id=".$sub['menu_id'];
            list( $cuantos_subs ) = $this->database->get_row( $query2 );
        if ($cuantos_subs>0)
            {
            echo "<div class=\"form-group\">
                    <label class=\"control-label col-sm-4\" style='border-top:1px solid #cccccc'>  &nbsp;&nbsp;|-".$sub['menu']."=>
                    ".$sub['privilegio_id']."</label>
                    <div class=\"col-sm-8\" style='border-top:1px solid #cccccc'>
                        <div class=\"".$sub['menu_id']."\">
                            <label>
                                <input type=\"checkbox\" checked name=\"".$sub['menu_id']."\">Mostrar &nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;
                            </label>
                            <label>".$sub['path_option']."
                            </label>
                        </div>
                    </div>
                </div>  ";
        }
        else
        {
            if ($sub['menu']<>"[div]"){
            echo "<div class=\"form-group\">
                    <label class=\"control-label col-sm-4\" style='border-top:1px solid #cccccc'> &nbsp;$ul2 |- ".ucfirst($sub['menu'])."
                        ".$sub['privilegio_id']."</label>

                    <div class=\"col-sm-8\" style='border-top:1px solid #cccccc'>
                        <div class=\"".$sub['menu_id']."\">
                            <label>
                                <input type=\"checkbox\" checked name=\"".$sub['menu_id']."\">Mostrar &nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp; 
                            </label>
                            <label>
                            ".$sub['path_option']."
                            </label>
                        </div>
                    </div>
                </div>";
            }
        }
    }
        
        //if ($parent_id && $cuantos_subs==0) {$ul1.="&nbsp;&nbsp;";$ul2="&nbsp;&nbsp;&nbsp;&nbsp;";}
        $this->showSecurityListCategory($sub['menu_id'],$level+1,$ul1,$ul2,$role_id);
            if($cuantos_subs>0){
                $ul2.="&nbsp;&nbsp;";
                //$ul1.="&nbsp;&nbsp;";
            }
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
public function editCategory($parent_id,$categoria_name,$tags,$categoria_id,$position){

                    $update = array(
                        'parent_id' => $parent_id,
                        'categoria' => strtolower($categoria_name),
                        'tags' => $tags,
                        'position' => $position
                    );
                    //Add the WHERE clauses
                    $where_clause = array(
                        'categoria_id' => $categoria_id
                    );
                    $updated = $this->database->update( 'categoria', $update, $where_clause, 1 );
                return 10;


}




public function insertCategory($parent_id,$categoria_name,$tags){

            // echo $query = "SELECT privilegio_id from menu ORDER BY privilegio_id DESC limit 1";
            // list($lastPrivilegio_id)= $this->database->get_row($query);
                    if ($categoria_name){
                    $names = array(
                        'position' => 0,
                        'categoria' => strtolower($categoria_name),
                        'tags' => $tags,
                        'parent_id' =>  $parent_id,
                        'deleted' => 0
                        );
                        

                    $add_query = $this->database->insert( 'categoria', $names );
                    $last_menu_id = $this->database->lastid();

                   

                        return 11;
                    }
                    else
                        return 13;
}

public function deleteCategory($categoria_id){

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
                'categoria_id' => $categoria_id
            );
            $updated = $this->database->update( 'categoria', $update, $where_clause, 1 );



    return $m=1;
}


public function restoreCategory($categoria_id){

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
                'categoria_id' => $categoria_id
            );
            $updated = $this->database->update( 'categoria', $update, $where_clause, 1 );



    return $m=15;
}



public function removeCategory($menu_id){

    //Run a query to delete rows from table where id = 3 and name = Awesome, LIMIT 1
    $delete = array(
        'categoria_id' => $categoria_id
    );
    $deleted = $this->database->delete( 'categoria', $delete, 1 );
    
}
















} // end class














 ?>


