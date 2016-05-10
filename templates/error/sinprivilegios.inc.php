

     <div class="block-header">
            <button data-dismiss="modal" class="close" type="button">&times;</button>
            <h3>Error: 302. </h3>
    <input type="hidden" name="fn" value="add"> 
        </div>
        <fieldset>
        <div class="modal-body">
                
           <!--  <legend>Form Components</legend> -->
        <div class="centering text-center" >
                        <div class="text-center">
                            <h2 class="without-margin"> Error de Privilegios.</h2>
                            <h4 class="text-success">Este usuario no esta autorizado para ver este topico<br> [ <?php echo $topico ?> ]</h4>
                        </div>
                        <div class="text-center">
                            <h3><small>Este evento fue registrado en el registro de eventos.</small></h3>
                            <?php //print_r($_SESSION['privilegios']) ?>
                        </div>
                    </div>    







          
          

           


        </div>


        <div class="modal-footer">
                <!-- <a data-dismiss="modal" class="btn btn-primary" href="#">Agregar</a> -->
                <a data-dismiss="modal" class="btn" href="#">Cancelar</a>
        </div>