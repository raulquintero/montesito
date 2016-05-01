
<div class="row">
	<div class="col-sm-12">

		<div class="box box-color box-bordered">
			<div class="box-title">
				<h3>
					<i class="fa fa-table"></i>
					Lista de Usuarios
				</h3>
			</div>
			<div class="box-content nopadding">
				<div class="table-toolbar">
                                      <div class="btn-group">


                                         <a href="#modal-alert" data-toggle="modal" onclick='showModal("addcategory",<?php echo $menu_id?>)'><button class="btn btn-success">Agregar <i class="icon-plus icon-white"></i></button></a>
                                      </div>
                                      <div class="btn-group pull-right">
                                         <button data-toggle="dropdown" class="btn dropdown-toggle">Tools <span class="caret"></span></button>
                                         <ul class="dropdown-menu">
                                            <li><a href="#">Print</a></li>
                                            <li><a href="#">Save as PDF</a></li>
                                            <li><a href="#">Export to Excel</a></li>
                                         </ul>
                                      </div>
                                   </div>
				<table class="table table-hover table-nomargin table-bordered dataTable">
					<thead>
					<tr>
						<th>Usuario</th>
						<th>Apellidos</th>
						<th>Nombres</th>
						<th>Role</th>

						<th class='hidden-350'>Homepage</th>
						<!-- <th class='hidden-1024'>Engine version</th>
						<th class='hidden-480'>CSS grade</th> -->
						<th class='hidden-480 hidden-print'>Options</th> 
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>admin</td>
						<td>Quintero Cifuentes</td>
						<td>Raul Alberto</td>
						<td>root</td>
						<td class='hidden-350'>/recepcion/inicio</td>
						<!-- <td class='hidden-1024'>4</td>
						<td class='hidden-480'>X</td> -->
						<td class='hidden-480 hidden-print'>
		<a href="/configuracion?sub=usuario" class="btn" rel="tooltip" title="View">
			<i class="fa fa-search"></i>
		</a>
		<a href="#" class="btn" rel="tooltip" title="Edit">
			<i class="fa fa-edit"></i>
		</a>
		<a href="#" class="btn" rel="tooltip" title="Delete">
			<i class="fa fa-times"></i>
		</a>
	</td>
					</tr>
					
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>






