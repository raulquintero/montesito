<div class="row">
	<div class="col-sm-12">
		
<!-- //inicio del despliegue de informacion -->
    <div class="box box-color box-bordered">
      <div class="box-title">
        <h3>
          <i class="fa fa-table"></i>
          Datos de la Empresa
        </h3>
      </div>

      <div class="box-content nopadding">
        <table class="table table-hover table-nomargin table-bordered dataTable">
          <thead>
          <tr>
            <th>Empresa</th>
            <th>Razon Social</th>
            <th class='hidden-350'>RFC</th>
            <th class='hidden-1024'>Domicilio Fiscal</th>
            <th class='hidden-480'>Opciones</th>
          </tr>
          </thead>
          <tbody>

<?php
  $query="SELECT empresa,razon_social,rfc,domicilio,colonia,cp,ciudad,pais from empresa  limit 1";
	list($empresa,$razon_social,$rfc,$domicilio,$colonia,$cp,$ciudad,$pais) = $database->get_row($query);
		echo "
    	<tr>
            <td>".strtoupper($empresa)."</td>
            <td>".strtoupper($razon_social)."</td>
            
            <td class='hidden-350'>".strtoupper($rfc)."</td>
            <td class='hidden-1024'>".strtoupper($domicilio).",<br>".strtoupper($colonia).",<br>".strtoupper($ciudad)."<br>".strtoupper($pais)."</td>
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
