<div class="row">
	<div class="col-sm-12">
		
<!-- //inicio del despliegue de informacion -->
    <div class="box box-color box-bordered">
      <div class="box-title">
        <h3>
          <i class="fa fa-table"></i>
          Lista de Sucursales
        </h3>
      </div>

      <div class="box-content nopadding">
        <table class="table table-hover table-nomargin table-bordered dataTable">
          <thead>
          <tr>
            <th>Sucursal</th>
            <th>Domicilio</th>
            <th class='hidden-350'>Gerente</th>
            <th class='hidden-1024'>Activada</th>
            <th class='hidden-480'>Opciones</th>
          </tr>
          </thead>
          <tbody>

<?php
	$results = $Sucursal->getSucursales(); 
	foreach ($results as $sub) {
		echo "
    	<tr>
            <td>".strtoupper($sub['sucursal_alias'])." (".$sub['sucursal'].")</td>
            <td>".$sub['domicilio']."</td>
            
            <td class='hidden-350'>".$sub['name']."</td>
            <td class='hidden-1024'>".$sub['enabled']."</td>
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
