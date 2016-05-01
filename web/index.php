<?php 
//header('Content-Type: text/html; charset=UTF-8');
require_once __DIR__.'/../config/config.php'; 


echo layout($login)['top'];
  if (!$login->getRegister()) $menu->listCategory(0,0,$check_ruta);
echo layout($login)['down_menu'];

//ocultar menu lateral si se entra a punto de venta
if ($check_ruta=="pos" ) $fixedleftmenu=" nav-hidden "; else $fixedleftmenu=NULL;
//if ($_SESSION['register']) $fixedleftmenu=" nav-hidden "; else $fixedleftmenu=NULL;
?>

<div class="container-fluid <?php echo $fixedleftmenu ?>" id="content">
    
    <?php if (!$login->getRegister()) echo $menuleft->show($menu_id,$check_ruta); ?>

<div id="main">

<div class="container-fluid">
<?php  ///////////////////////////////////////////  titulo de la pagina
if ($titulos['titulo']<>"Pos") //// para evitar que aparezca en la pagina POS
  {
      echo "<div class=\"page-header visible\">
            <div class=\"pull-left\">
            <h1>".$titulos['titulo']."</h1>
            </div>";
        $widget->showFecha(); ///////////////////   widget fecha color rojo
        echo "</div>";
    }
?>

<?php if ($titulos['subtitulo']) $widget->showBreadCrumbers($topico); ?>

    <div class="row">
      <div class="col-sm-12">
        <div class="box">
<?php         ////////////////////////////////////   subtitulo de la pagina
    if ($titulos['subtitulo'])
      echo"<div class=\"box-title\">
            <h3>
              <i class=\"fa fa-bars\"></i>
              ".$titulos['subtitulo']."
            </h3>
          </div>"
?>

<?php 
//  echo getPrivilegioId($topico,$database);
// echo "<br>";
// print_r($_SESSION['privilegios']); 
?>


          <div class="box-content">

<!-- Inicio SECCION -->




<?php //////////////////////////////////////////     checa si existe el archivo y lo incluye para responderle al cleinte
if (is_file($uri))
    require_once($uri);
else
    echo "<br>URI. Esta ruta no existe. ".$uri;

// echo file_get_contents('http://montesito.dev/')

?>



<!-- Fin SECCION -->


					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	
<?php echo layout($login)['bottom']; ?>

