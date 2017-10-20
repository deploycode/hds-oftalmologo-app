<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Oftalmólogo.  Dr. Fransisco A. Rangel. Médico y Cirujano Especialista en Oftalmología">
    <meta name="author" content="Gabriel Rodríguez | gabriel@deploycode.co">
    <link rel="icon" href="favicon.ico">

    <title>Oftalmologo Dr. Fransisco A. Rangel</title>

    <!-- Bootstrap core CSS -->
    <link href="hds-oftalmologo-layout/plugins/bootstrap-4.0.0-beta-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="hds-oftalmologo-layout/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="hds-oftalmologo-layout/css/main.css" rel="stylesheet">
    <link href="hds-oftalmologo-layout/css/mobile.css"  rel="stylesheet" media="(max-width: 768px)">
  </head>

  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="landing-video">
          <video autoplay="autoplay" muted="muted" loop="true" preload="auto" id="Video1">
            <source type="video/mp4" src="hds-oftalmologo-layout/img/oftalmologia.mp4">
          </video>
        </div>
      </div>
    </div>
    <div class="landing-browser">
      <div class="container sheet">
        <nav class="navbar navbar-expand">
          <a class="navbar-brand" href="#">
            <h1>Oftalmólogo</h1>
            <h4>Dr. Fransisco A. Rangel</h4>
            <h6>Médico y Cirujano Especialista en Oftalmología</h6>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link btn-hds" href="#" data-toggle="modal" data-target="#modal-contact">Contacto</a>
              </li>
              <li class="nav-item">
                <a class="nav-link btn-cita" href="#" data-toggle="modal" data-target="#modal-info">Solicite su cita</a>
              </li>
            </ul>
          </div>
        </nav>

        <div class="row justify-content-md-center title">
          <div class="col-12 col-sm-12">
            <p>¿Hoy de qué quieres hablar?</p>
            <div id="buttonbar" class="text-right">
              <button id="play" onclick="vidplay()">||</button>
            </div>
          </div>
        </div>
      </div>
      <!-- contenido -->
      <div class="container-fluid sheet sheet-white">
        <div class="border-blue">
          <div class="row justify-content-md-center ">
            <div class="col-12 col-sm-12 abstract">
              <p class="text-center message">El diagnóstico oportuno es el primer paso en la
                prevención de enfermedades visuales. Nuestro propósito
                es la detección temprana y tratamiento adecuado por medio
                de la alta tecnología y un equipo de trabajo comprometido
                con cada uno de nuestros pacientes. </p>
            </div>
            <div class="col-12 col-sm-12 browser">
              <form class="form" action="index.html" method="post" id="form-browser">
                <div class="input-group">
                  <span class="input-group-addon" id="search_span"><i class="fa fa-search"></i></span>
                  <input type="text" id="search_txt"class="form-control" placeholder="Buscar" aria-label="Username" aria-describedby="basic-addon1">
                </div>
              </form>
            </div>
            <div class="col-12 col-sm-12 abstract">
              <h4>Resultado</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <p class="text-center p-boton"><a href="#" class="btn btn-light" id="browser_launch">Ingresa</a></p>
            </div>
          </div>
        </div>
      </div>

    </div>
    <!-- modal formulario -->
    <div class="modal fade" id="modal-contact" tabindex="-1" role="dialog" aria-labelledby="modal-contact" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Contacto</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="container-fluid">
              <div class="row">
                <form class="col-12">
                  <div class="form-group">
                    <label for="recipient-name" class="form-control-label">Email:</label>
                    <input type="text" class="form-control" id="recipient-name">
                  </div>
                  <div class="form-group">
                    <label for="message-text" class="form-control-label">Mensaje:</label>
                    <textarea class="form-control" id="message-text"></textarea>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-primary">Enviar mensaje</button>
          </div>
        </div>
      </div>
    </div>
    <!-- modal info -->
    <div class="modal fade" id="modal-info" tabindex="-1" role="dialog" aria-labelledby="modal-info" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Información de Contacto</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="container-fluid">
              <div class="row">
                <div class="col-12 col-sm-12">
                  <h4>Solicite su cita</h4>
                  <p>Alta Visión: Cr 14 No. 86a - 15 Bogotá - Colombia
                  6164585 opción 5</p>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="hds-oftalmologo-layout/plugins/jquery-3.2.1.slim.min.js"></script>
    <script src="hds-oftalmologo-layout/plugins/bootstrap-4.0.0-beta-dist/js/popper.min.js"></script>
    <script src="hds-oftalmologo-layout/plugins/bootstrap-4.0.0-beta-dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="hds-oftalmologo-layout/plugins/bootstrap-4.0.0-beta-dist/js/ie10-viewport-bug-workaround.js"></script>
    <script src="hds-oftalmologo-layout/js/main.js"></script>
  </body>
</html>
