<?php
$email = filter_input(INPUT_POST,"email");
$pwd = filter_input(INPUT_POST,"password");
if(!empty($email)){ // especifico un correo electronico y procedemos a su validacion
  include_once('config.php');


}
 ?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="Pagina de presentacion e Inicio de Sesion de los usuarios">
    <meta name="author" content="Guadalupe Garza Moreno">
    <link rel="shortcut icon" href="favicon.ico">
    <title>EasyCFDi v1.0</title>

    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/index.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">EasyCFDi</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right" method="post" action="index.php">
            <div class="form-group">
              <input type="email" placeholder="Email" class="form-control" name="email">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Contrase&ntilde;a" class="form-control" name="password">
            </div>
            <button type="submit" class="btn btn-success">Inicia Sesion</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <center><img src="./img/EasyCFDi-logo.png" class="img-responsive" alt="Responsive image"></center>
        <h1>Bienvenido!!!</h1>
        <p>En nuestra plataforma podr&aacute;s encontrar todo lo necesario para realizar tus facturas electr&oacute;nicas en formato CFDI.
        Contamos con el servicio de timbrado y una plataforma adaptable dependiendo del giro de tu negocio.
        </p>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h2>Arrendamiento</h2>
          <p>Puedes realizar facturas de arrendamiento con todos los requerimientos del SAT.</p>
        </div>
        <div class="col-md-4">
          <h2>Carta Porte</h2>
          <p>Si el giro de tu negocio son los transportes, contamos con el formato de Carta Porte, donde podr&aacute;s especificar los valores de la mercanc&iacute;a transportada.
          Llevar el control de tus choferes, camiones y destinos.
          </p>
       </div>
        <div class="col-md-4">
          <h2>Facturaci&oacute;n en General</h2>
          <p>Tambi&eacute;n contamos con otros m&oacute;dulos que se pueden adaptar a tus necesidades como lo es la facturaci&oacute;n detallista y de honorarios.</p>
        </div>
      </div>
      <hr>
      <div class="container">
        <p>Para mas informaci&oacute;n acerca de nuestro sistema de facturaci&oacute;n puedes comunicarte al tel&eacute;fono: (867) 712-36-16 o escribirnos a: <a href="mailto:info@hegarss.com">info@hegarss.com</a></p>
      </div>
      <hr>
      <footer>
        <p>&copy; HEGAR Soluciones en Sistemas S. de R.L. 2015</p>
      </footer>
    </div> <!-- /container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
  </body>
</html>
