

        

<div class="row-fluid">
  <div class="span3" id="sidebar">

    <?php 
      echo "                    <ul class=\"nav nav-list bs-docs-sidenav nav-collapse collapse\">";
      echo "<li class=\"active\"><a href=\"/mantenimiento?sub=menu\">Menu Principal $fn</a></li>";
      $menu->showListCategory(0);
      echo "</ul>";
    ?>
		</div>
                  


                 <div class="span12" id="content">

                    
                    <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                           <br><br>




                            <div class="block-content collapse in">
                            	
                                <div class="span12">
                                	<div class="table-toolbar">
                                      <div class="btn-group">


                                         <a href="#modal-alert" data-toggle="modal" onclick='showProduct("addcategory",<?php echo $menu_id?>)'><button class="btn btn-success">Agregar Categoria <i class="icon-plus icon-white"></i></button></a>
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
						                  <th>Menu_id</th>
						                  <th>Categoria</th>
						                  <th>Ruta</th>
                              <th>Posicion</th>
                                          <th>Privilegio_id</th>
						                  <th colspan=2>Opciones</th>
						                </tr>
						              </thead>
						              <tbody>
                                	<?php $menu->showCategory($menu_id);?>

						              </tbody>
						            </table>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>

                 </div>







</div>

