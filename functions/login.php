 <?php
  

 
  $loginDialog = <<<EOD



  <!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <!-- Apple devices fullscreen -->
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <!-- Apple devices fullscreen -->
  <meta names="apple-mobile-web-app-status-bar-style" content="black-translucent" />

  <title>FLAT - Login</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- icheck -->
  <link rel="stylesheet" href="css/plugins/icheck/all.css">
  <!-- Theme CSS -->
  <link rel="stylesheet" href="css/style.css">
  <!-- Color CSS -->
  <link rel="stylesheet" href="css/themes.css">


  <!-- jQuery -->
  <script src="js/jquery.min.js"></script>

  <!-- Nice Scroll -->
  <script src="js/plugins/nicescroll/jquery.nicescroll.min.js"></script>
  <!-- Validation -->
  <script src="js/plugins/validation/jquery.validate.min.js"></script>
  <script src="js/plugins/validation/additional-methods.min.js"></script>
  <!-- icheck -->
  <script src="js/plugins/icheck/jquery.icheck.min.js"></script>
  <!-- Bootstrap -->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/eakroko.js"></script>

  <!--[if lte IE 9]>
    <script src="js/plugins/placeholder/jquery.placeholder.min.js"></script>
    <script>
      $(document).ready(function() {
        $('input, textarea').placeholder();
      });
    </script>
  <![endif]-->


  <!-- Favicon -->
  <link rel="shortcut icon" href="img/favicon.ico" />
  <!-- Apple devices Homescreen icon -->
  <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-precomposed.png" />

</head>

<body class='login'>

<div class="wrapper">
    <h1 style='text-align:center;'>
      <!--  <a href="index.html">
        <imga src="img/logo-big.png" alt="" class='retina-ready' width="59" height="49">Comercializadora</a>-->
    </h1>
    <div class="login-body">
      <h2 style='text-align:center;'>{$empresa}</h2>
      <form method='POST' class='form-validate' id="test"  action="authmain.php?module=login">
        <div class="form-group">
          <div class="email controls">
            <input type="text" name="user_name" id="user_name"  placeholder="Usuario" class='form-control' data-rule-required="true" data-rule-email="false">
          </div>
        </div>
        <div class="form-group">
          <div class="pw controls">
            <input type="password" name="user_pass" placeholder="Password" class='form-control' data-rule-required="true">
          </div>
        </div>
        <div class="submit">
          <div class="remember">
            
            <!--<input type="checkbox" name="remember" class='icheck-me' data-skin="square" data-color="blue" id="remember">
            <label for="remember">Remember me</label>-->
          </div>
          <input type="hidden" name="signin" value="true">{$register_form}
          <input type="submit" value="Entrar" class='btn btn-primary'>
        </div>
      </form>
      <div class="forget">
        <a href="#">
          <span>Montesito Soft. by Cibercomm</span>
        </a>
      </div>
    </div>
  </div>
  
</body>

</html>

EOD;




$configurarTerminal ="
<!doctype html>
<html>

<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" />
  <!-- Apple devices fullscreen -->
  <meta name=\"apple-mobile-web-app-capable\" content=\"yes\" />
  <!-- Apple devices fullscreen -->
  <meta names=\"apple-mobile-web-app-status-bar-style\" content=\"black-translucent\" />

  <title>FLAT - Login</title>

  <!-- Bootstrap -->
  <link rel=\"stylesheet\" href=\"css/bootstrap.min.css\">
  <!-- icheck -->
  <link rel=\"stylesheet\" href=\"css/plugins/icheck/all.css\">
  <!-- Theme CSS -->
  <link rel=\"stylesheet\" href=\"css/style.css\">
  <!-- Color CSS -->
  <link rel=\"stylesheet\" href=\"css/themes.css\">


  <!-- jQuery -->
  <script src=\"js/jquery.min.js\"></script>

  <!-- Nice Scroll -->
  <script src=\"js/plugins/nicescroll/jquery.nicescroll.min.js\"></script>
  <!-- Validation -->
  <script src=\"js/plugins/validation/jquery.validate.min.js\"></script>
  <script src=\"js/plugins/validation/additional-methods.min.js\"></script>
  <!-- icheck -->
  <script src=\"js/plugins/icheck/jquery.icheck.min.js\"></script>
  <!-- Bootstrap -->
  <script src=\"js/bootstrap.min.js\"></script>
  <script src=\"js/eakroko.js\"></script>

  <!--[if lte IE 9]>
    <script src=\"js/plugins/placeholder/jquery.placeholder.min.js\"></script>
    <script>
      $(document).ready(function() {
        $('input, textarea').placeholder();
      });
    </script>
  <![endif]-->


  <!-- Favicon -->
  <link rel=\"shortcut icon\" href=\"img/favicon.ico\" />
  <!-- Apple devices Homescreen icon -->
  <link rel=\"apple-touch-icon-precomposed\" href=\"img/apple-touch-icon-precomposed.png\" />

</head>

<body class='login theme-red'>

<div class=\"wrapper\">
    <h1>
      <!--<a href=\"index.html\">
        <imga src=\"img/logo-big.png\" alt=\"\" class='retina-ready' width=\"59\" height=\"49\">Configurar Terminal</a>-->
    </h1>
    <div class=\"login-body\">
    <h4><br>&nbsp;&nbsp;&nbsp;Registre Terminal</h4>
      <h2>Key: ".strtoupper($terminal->getSerial())."</h2>
      <form method='POST' class='form-validate' id=\"test\"  action=\"configura.php?module=configurar\">
        <div class=\"form-group\">
          <!--<div class=\"email controls\">
            <input type=\"text\" name=\"user_name\" id=\"serial\"  placeholder=\"Introduzca Serial\" 
              class='form-control' data-rule-required=\"true\" data-rule-email=\"false\" 
              value=\"".$terminal->getSerial()." \">
          </div>-->
        </div>
        <div class=\"submit\">
        <div class=\"remember\">
            <label for=\"remember\">IP: ".$_SERVER['REMOTE_ADDR']."<br>".$terminal_id['sucursal']."<br>".$terminal_id['terminal']."</label>
          </div>
        <input type=\"hidden\" name=\"terminal\" value=\"true\">
          <!-- <input type=\"submit\" value=\"Grabar\" class='btn btn-primary'> -->
        </div>
      </form>
      <div class=\"forget\">
        <a href=\"#\">
          <span><a>Montesito Soft. by http://www.cibercomm.com</a></span>
        </a>
      </div>
    </div>
  </div>
  
</body>

</html>


";

?>
