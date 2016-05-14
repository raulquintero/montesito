

        

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

<?php // print_r($_SESSION['privilegios']) ?>


                            <div class="block-content collapse in">
                            	
                                <div class="span12">
                                	<div class="table-toolbar hidden-print">
                                      <div class="btn-group ">


                                         <a href="#modal-alert" data-toggle="modal" onclick='showForma("categoryproducts","addcategoryproducts",<?php echo $categoria_id?>)'><button class="btn btn-success">Agregar Categoria de Productos <i class="icon-plus icon-white"></i></button></a>
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
						                  <th>Categoria_id </th>
						                  <th>Categoria</th>
                              <th></th>
						                  <th>tags</th>
                              <th>Posicion</th>
						                  <th colspan=2><span class='hidden-print'>Opciones</span></th>
						                </tr>
						              </thead>
						              <tbody>
                                	<?php $Categorias->showCategory($categoria_id);?>

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
                                  <?php $Categorias->showCategoryDeleted($categoria_id);?>

                          </tbody>
                        </table>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>

                 </div>








</div>

