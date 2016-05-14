

<?php 

    // $menusql= "SELECT menu from menu where menu_id=$menu_id";
    //  list($menu_name)=$database->get_row($menusql);
 ?>






<form class="form-horizontal" action="/mantenimiento?sub=formas" method="POST">


        <div class="block-header">
            <button data-dismiss="modal" class="close" type="button">&times;</button>
            <h3>Agregar Persona </h3>
    <input type="hidden" name="fn" value="add"> 
        </div>
        <fieldset>
        <div class="modal-body">
                
           <!--  <legend>Form Components</legend> -->
            

            <div class="control-group">
                <label class="control-label" for="focusedInput">Nombres<span class="required">*</span></label>
                <div class="controls">
                    <input class="input-xlarge focused" id="focusedInput" data-required="1" type="text" name="form_name" value="">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="focusedInput">Apellido Paterno</label>
                <div class="controls">
                    <input class="input-xlarge focused" id="focusedInput" type="text" name="path_option" value=""> 
                </div>
            </div>


        </div>

    </fieldset>

        <div class="modal-footer">
                <input type="submit" class="btn btn-primary" value="Agregar">
                <!-- <a data-dismiss="modal" class="btn btn-primary" href="#">Agregar</a> -->
                <a data-dismiss="modal" class="btn" href="#">Cancelar</a>
        </div>
</form>
  
