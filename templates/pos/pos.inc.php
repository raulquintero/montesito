

<script type="text/javascript">
        // funcion para recorrer el ticket hasta la posicion de abajo es un <div>
        // window.setInterval(function() {  
        //     var elem = document.getElementById('ticket');
        //     elem.scrollTop = elem.scrollHeight;
        //     }, 1000);


</script>

<style type="text/css">
.mygrid-wrapper-div {
    /*border-left: 1px solid red ;*/
    overflow: hidden;
    /*height: 70%;*/
    z-index: -3;
}

.posleft{
    position: relative; 
    margin-left:-40px; 
    margin-right:-39px;
    margin-top:-101px;
    /*height:60%;*/
    height: 100vh;


}

#div1{
    /*width: 99%;*/
margin-right:-15px;
    height:30vh;
    background-image: url("assets/images/back1.jpg");
}

#div2{
    width: 100%;
    position: absolute;
    top: 80px;
    bottom: 0;
    height: 94vh;
    margin-right:-20px;
}
#ticket{
    text-align:center;
    /*background:gray;*/

}

#productos{
    margin-left:-1px;
    margin-right:-1px;
    padding:0px;
    /*background-image: url("assets/images/back1.jpg");*/
    overflow:scroll;

    background-image: url("assets/images/back2.jpg");
        background-repeat: repeat-x;
    height:65vh;
}
</style>

<div class="posleft" style='background:yellow' >

    <div id="div2" style="valign:top;background:#181518" >

        <div class="col-lg-8" id="productos" style='background:white'>
            

<table class="table table-striped" bgcolor=white>
                                      <thead>
                                        <tr>
                                          <th>Cantidad</th>
                                          <th>Producto</th>
                                          <th>Detalles</th>
                              <th>Precio</th>
                                          
                                          <th colspan=2>Opciones</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                            <td align=center><h4>1</h4></td><td><h4>Pantalon Levis</h4>70000443</td><td>T:34x32<br>C:Azul</td><td><h4>$500.00</h4></td>
                                            <td><button class="btn btn-small btn-red btn--icon">
                                            <i class="fa fa-trash-o"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td align=center><h4>3</h4></td><td><h4>Blusa tipo polo Aeropostale</h4>70003456</td><td>T:S <br>C:Verde</td><td><h4>$500.00</h4></td>
                                            <td><button class="btn btn-small btn-red btn--icon"><i class="fa fa-trash-o"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td align=center><h4>1</h4></td><td><h4>Pantalon Levis</h4>70000443</td><td>T:34x32<br>C:Azul</td><td><h4>$500.00</h4></td>
                                            <td><button class="btn btn-small btn-red btn--icon"><i class="fa fa-trash-o"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td align=center><h4>3</h4></td><td><h4>Blusa tipo polo Aeropostale</h4>70003456</td><td>T:S <br>C:Verde</td><td><h4>$500.00</h4></td>
                                            <td><button class="btn btn-small btn-red btn--icon"><i class="fa fa-trash-o"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td align=center><h4>1</h4></td><td><h4>Pantalon Levis</h4>70000443</td><td>T:34x32<br>C:Azul</td><td><h4>$500.00</h4></td>
                                            <td><button class="btn btn-small btn-red btn--icon"><i class="fa fa-trash-o"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td align=center><h4>3</h4></td><td><h4>Blusa tipo polo Aeropostale</h4>70003456</td><td>T:S <br>C:Verde</td><td><h4>$500.00</h4></td>
                                            <td><button class="btn btn-small btn-red btn--icon"><i class="fa fa-trash-o"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td align=center><h4>1</h4></td><td><h4>Pantalon Levis</h4>70000443</td><td>T:34x32<br>C:Azul</td><td><h4>$500.00</h4></td>
                                            <td><button class="btn btn-small btn-red btn--icon"><i class="fa fa-trash-o"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td align=center><h4>3</h4></td><td><h4>Blusa tipo polo Aeropostale</h4>70003456</td><td>T:S <br>C:Verde</td><td><h4>$500.00</h4></td>
                                            <td><button class="btn btn-small btn-red btn--icon"><i class="fa fa-trash-o"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td align=center><h4>1</h4></td><td><h4>Pantalon Levis</h4>70000443</td><td>T:34x32,br>C:Azul</td><td><h4>$500.00</h4></td>
                                            <td><button class="btn btn-small btn-red btn--icon"><i class="fa fa-trash-o"></i></button></td>
                                        </tr>
                                        <tr>
                                            <td align=center><h4>3</h4></td><td><h4>Blusa tipo polo Aeropostale</h4>70003456</td><td>T:S <br>C:Verde</td><td><h4>$500.00</h4></td>
                                            <td><button class="btn btn-small btn-red btn--icon"><i class="fa fa-trash-o"></i></button></td>
                                        </tr>
                                    <?php //$menu->showCategory($menu_id);?>

                                      </tbody>
                                    </table>

        </div>

        <div class="mygrid-wrapper-div" id="ticket" style="border-left:1px solid #cccccc;">
                    <table width=100% >
                        <tr><td  style='border-bottom:1px solid gray;'>&nbsp;</td> 
                            <td style='border-bottom:1px solid gray;' align=left><h3><font color=white> CONTADO</h3></td> 
                            <td  style='border-bottom:1px solid gray;' align=right><h3><font color=white></h3></td>
                            <td  style='border-bottom:1px solid gray;'>&nbsp;</td> </tr>
                        <tr><td  style='border-bottom:1px solid gray;'>&nbsp;</td> 
                            <td style='border-bottom:1px solid gray;' align=left><h3><font color=white> Sub</h3></td> 
                            <td  style='border-bottom:1px solid gray;' align=right><h3><font color=white>$100.00</h3></td>
                            <td  style='border-bottom:1px solid gray;'>&nbsp;</td> </tr>
                        <tr><td  style='border-bottom:1px solid gray;'>&nbsp;</td> 
                            <td style='border-bottom:1px solid gray;' align=left><h3><font color=white> Descuento</h3></td> 
                            <td  style='border-bottom:1px solid gray;' align=right><h3><font color=white>$0.00</h3></td>
                            <td  style='border-bottom:1px solid gray;'>&nbsp;</td> </tr>
                        <tr><td  style='border-bottom:1px solid gray;'>&nbsp;</td> 
                            <td style='border-bottom:1px solid gray;' align=left><h3><font color=white> Total</h3></td> 
                            <td  style='border-bottom:1px solid gray;' align=right><h3><font color=white>$100.00</h3></td>
                            <td  style='border-bottom:1px solid gray;'>&nbsp;</td> </tr>
                        <tr><td  style='border-bottom:1px solid gray;'>&nbsp;</td> 
                            <td style='border:1px solid #333333;' bgcolor=#cccccc align=center><h3><font color=black> COBRAR</h3></td> 
                            <td  style='border:1px solid #333333;' bgcolor=#cccccc align=center><h3><font color=black>APARTAR</h3></td>
                            <td  style='border-bottom:1px solid gray;'>&nbsp;</td> </tr>

                    </table>

        </div>
<!-- 

        <div id="div1" style="border-top:1px solid #cccccc;width:100%">

                 <div   id="sidebara">
                    <b>Mensajes</b>
                </div>

                 <div  id="contenta">
                    <table width=100%>
                        <tr><td valign=top><h3>TOTAL:&nbsp;&nbsp;</h3></td><td align="right"><h3>$ 1500.00&nbsp;</h3></td></tr>
                    </table>
                 </div>

        </div> -->

    </div>
</div>


    



























<!--// POS bottom menu begin-->
<div class="navbar navbar-fixed-bottom" style='border-top:3px solid #5A8AC5;'>
    <div id="navigation">
        <div class="container-fluid">
            <div >
                <form method="POST" action="#" class="form-messages">
                <div class="text ">
                    <input type="text" id="codigo" name="codigo" placeholder="Teclee o Scanee Codigo..." class="form-control">
                </div>
                </form>
            </div>                                              
            <ul class='main-nav'>
                <li class='active' style="border:1px solid #336699;"><a href="index.html"><span>F2 POS</span></a></li>
                <li class='active' style="border:1px solid #336699;"><a href="index.html"><span>F4 Clientes</span></a></li>
                <li class='active' style="border:1px solid #336699;"><a href="index.html"><span>F7 Productos</span></a></li>
                <li class='active' style="border:1px solid #336699;"><a href="index.html"><span>F8 Checar Precio</span></a></li>
                <li class='active' style="border:1px solid #336699;"><a href="index.html"><span>F9 Servicios</span></a></li>
                <li class='active' style="border:1px solid #336699;"><a href="index.html"><span>F10 Miscelanos</span></a></li>
            </ul>
            <div class="user span4">
                <div class="dropdown" style="text-align:right;">
                    <span id="txt" style="background:white; border:1px solid gray;padding-left:8px;padding-right:8px"></span>&nbsp;&nbsp;<span style="color:white;"><b>MONTESITO Pyme<br>by http://www.cibercomm.com</b>
                        <!-- <img src="img/demo/user-avatar.jpg" alt=""> --> 
                    </span>
                </div> 
            </div>
        </div>
    </div>
</div>
<!--// POS bottom menu end-->
