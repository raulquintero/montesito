<?php 

$form_id=$menu_id;  // por funcion show modal, mada parametro adicional como menu_id si es posibble cambiarlo a solo id
       $query="SELECT forma_id, forma, path_option From forma WHERE forma_id='$form_id'";

        list($forma_id,$form_name,$path_option) = $database->get_row( $query );



?>

                <form class="form-horizontal" action="/mantenimiento?sub=formas" method="POST">
                    <!-- <input type="hidden" name="sub" value="menu">  -->
                    <input type="hidden" name="fn" value="edit"> 
                    <input type="hidden" name="form_id" value="<?php echo $form_id ?>"> 
 <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button">&times;</button>
                <h3>Editar Forma: <?php echo strtoupper($form_name)?></h3>
            </div>
            <div class="modal-body">
                

                    <fieldset>
                       <!--  <legend>Form Components</legend> -->
       


                        <div class="control-group">
                            <label class="control-label" for="focusedInput">Forma</label>
                            <div class="controls">
                                <input class="input-xlarge focused" id="focusedInput" type="text" name="form_name" value="<?php echo $form_name ?>">
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="focusedInput">Ruta</label>
                            <div class="controls">
                                <input class="input-xlarge focused" id="focusedInput" type="text" name="path_option" value="<?php echo $path_option ?>">
                            </div>
                        </div>


                    </fieldset>














            </div>
            <div class="modal-footer">
                <input type="submit" class="btn btn-primary" value="Actualizare">
                <!-- <a data-dismiss="modal" class="btn btn-primary" href="#">Actualizar</a> -->
                <a data-dismiss="modal" class="btn" href="#">Cancelar</a>
            </div>

</form>










