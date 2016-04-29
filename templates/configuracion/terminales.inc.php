<div class="row">
	<div class="col-sm-12">
		
<!-- //inicio del despliegue de informacion -->
    <div class="box box-color box-bordered">
      <div class="box-title">
        <h3>
          <i class="fa fa-table"></i>
          Lista de Terminales
        </h3>
      </div>

      <div class="box-content nopadding">
        <table class="table table-hover table-nomargin" "table table-hover table-nomargin table-bordered dataTable">
          <thead>
          <tr>
            <th>Sucursal</th>
            <th>Terminal</th>
            <th class='hidden-350'>PC Role</th>
            <th class='hidden-1024'>Activada</th>
            <th class='hidden-480'>Serial</th>
            <th class='hidden-480'>Opciones</th>
          </tr>
          </thead>
          <tbody>

<?php
	$results = $terminal->getTerminales(); 
	foreach ($results as $sub) {
		echo "
    	<tr>
            <td>".strtoupper($sub['sucursal_alias'])." (".$sub['sucursal'].")</td>
            <td>".$sub['terminal']."</td>
            
            <td class='hidden-350'>".$sub['terminalrole']."</td>
            <td class='hidden-1024'>".$sub['enabled']."</td>
            <td class='hidden-480'>".$sub['serial']."</td>
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
	}
?>          

          </tbody>
        </table>
      </div>
    </div>
   

 


<!-- // fin del despliegue de informacion -->


	</div>
</div>
