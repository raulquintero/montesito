

        

<div class="row-fluid">
               


                 <div class="span12" id="content">

                    
                    <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                           <br><br>

<?php // print_r($_SESSION['privilegios']) ?>


                            <div class="block-content collapse in">
                            	
                                <div class="span12">
                                	<div class="table-toolbar hidden-print">
                                      <div class="btn-group ">


                                         <a href="#modal-alert" data-toggle="modal" onclick='showModal("addform",0)'><button class="btn btn-success">Agregar Forma <i class="icon-plus icon-white"></i></button></a>
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
  									<table class="table table-striped">
						              <thead>
						                <tr>
						                  <th>Forma_id </th>
						                  <th>Forma</th>
						                  <th>Ruta</th>
                              <th>Privilegio_id</th>
						                  <th colspan=2><span class='hidden-print'>Opciones</span></th>
						                </tr>
						              </thead>
						              <tbody>
                                	<?php 
                                  foreach ($forma->getForms() as $forma){ 
                                    echo '<tr><td>'.$forma['forma_id'].'</td><td>'.ucwords($forma['forma']).'</td><td>'.$forma['path_option'].'</td><td>'.$forma['privilegio_id'].'</td>';
                                    echo "<td><a class='hidden-print' href=\"#modal-alert\" data-toggle=\"modal\"  onclick='showModal(\"editform\",".$forma['forma_id'].")'><button class=\"btn btn-success\">Editar <!--i class=\"icon-plus icon-white\"></i--></button></a></td>";
                                    echo "<td><button disabled class=\"btn btn-warning hidden-print\">Eliminar<!--i class=\"icon-plus icon-white\"></i--></button></td>";
                                    echo "</tr>";
                                  }                                    
                                  ?>
						              </tbody>
						            </table>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>

                 </div>









 <div class="span12" id="content">

                    
                    <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                           <br><br>




                            <div class="block-content collapse in">
                              
                                <div class="span12">
                                  
                    <table class="table table-striped">
                          <thead>
                            <tr>
                              <th>Menu_id</th>
                              <th>Categoria</th>
                              <th>Ruta</th>
                              <th>Posicion</th>
                                          <th>Privilegio_id</th>
                              <th colspan=2><span class='hidden-print'>Opciones</span></th>
                            </tr>
                          </thead>
                          <tbody>
                                  <?php $menu->showCategoryDeleted($menu_id);?>

                          </tbody>
                        </table>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>

                 </div>








</div>

