<div class="row">
	<div class="col-sm-12">
		

<!-- //inicio del despliegue de informacion -->
    <div class="box box-color box-bordered">
      <div class="box-title">
        <h3>
          <i class="fa fa-table"></i>
          Bases de Datos
        </h3>
      </div>

      <div class="box-content nopadding">
        <table class="table table-hover table-nomargin table-bordered dataTable">
          <thead>
          <tr>
            <th>Base de Datos</th>
            <th>Tablas</th>
            <th class='hidden-480'>Opciones</th>
          </tr>
          </thead>
          <tbody>

<?php
 


		echo "
    	<tr>
            <td>".strtoupper(DB_NAME)."</td>";

    $query_tables = "show tables";
    $tables = $database->get_results($query_tables);
    echo "        <td>";
    foreach ($tables as $table) 
      echo strtoupper($table['Tables_in_'.DB_NAME])."<br>";
    echo "</td>";

    echo "        
            <td class='hidden-480'>
			    <a href=\"/configuracion?sub=terminal\" class=\"btn\" rel=\"tooltip\" title=\"View\">
      			<i class=\"fa fa-search\"></i>
    			</a>
    			<a href=\"#\" class=\"btn\" rel=\"tooltip\" title=\"Edit\">
      			<i class=\"fa fa-edit\"></i>
    			</a>
    			<a href=\"#\" class=\"btn\" rel=\"tooltip\" title=\"Delete\">
      			<i class=\"fa fa-times\"></i>
    			</a>
  			</td>
        </tr>
          ";
?>          

<?php
  echo "<tr>
            <td>".strtoupper(DBSTORE_NAME)."</td>";

    $query_tables = "show tables";
    $tables = $dbstore->get_results($query_tables);
    echo "        <td>";
    foreach ($tables as $table) 
      echo strtoupper($table['Tables_in_'.DBSTORE_NAME])."<br>";
    echo "</td>";

    echo "        
            <td class='hidden-480'>
          <a href=\"/configuracion?sub=terminal\" class=\"btn\" rel=\"tooltip\" title=\"View\">
            <i class=\"fa fa-search\"></i>
          </a>
          <a href=\"#\" class=\"btn\" rel=\"tooltip\" title=\"Edit\">
            <i class=\"fa fa-edit\"></i>
          </a>
          <a href=\"#\" class=\"btn\" rel=\"tooltip\" title=\"Delete\">
            <i class=\"fa fa-times\"></i>
          </a>
        </td>
        </tr>
          ";
?>  

          </tbody>
        </table>
      </div>
    </div>
   

 


<!-- // fin del despliegue de informacion -->


	</div>
</div>
