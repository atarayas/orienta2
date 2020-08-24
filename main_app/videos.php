<?php
  session_start();
  if (!isset($_SESSION['usuario'])) {
      header('Location: ../index.php');
  }
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Orientacion Vocacional | Ministerio de Educación Pública</title>

        <!-- Bootstrap core JavaScript -->
        <script src="../vendor/jquery/jquery.min.js"></script>
        <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
        <script src="../js/main.js" charset="utf-8"></script>

        </script>
        <!-- Bootstrap core CSS -->
        <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="../css/modern-business.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="../css/master.css" rel="stylesheet">
        <!-- Custom styles for buttons animation -->
        <link href="../css/ihover/src/ihover.css" rel="stylesheet">
        <!-- fonts -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC" rel="stylesheet">

  </head>

  <body>
    <!-- Navigation MENU -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <!-- <div class="navbar-logo">
         <img id="contLogo"  src="">
      </div> -->
      <a class="navbar-brand" href="#">
       <img id="mepLogo"  src="">
       <img id="instLogo"  src="">
       <p class="title">Ministerio de Educación Pública<br>Orientación Vocacional<p>
      </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link lithos" href="#">Opción 1</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Opción 2</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Opción 3</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Opción 4</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- fin de navigation -->

    <!-- Page Content -->
    <div class="container container-fullwidth">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Vídeos relacionados
      <!-- <small>¿Sabes cuáles son, actualmente, tus intereses y habilidades?</small> -->
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Inicio</a>
        </li>
        <li class="breadcrumb-item active">Vídeos</li>
      </ol>

      <h4><small>A continuación vídeos relacionados con ......</small></h4>
      <p>Videos que abre en modal</p>
      <hr>
      <img class="img-videoModal" src="img/img-video-aptitudes.png" alt="video" data-toggle="modal" data-target="#myModal">
      <div class="modal modal-right fade" id="myModal">
        <div class="modal-dialog modal-dialog-centered modal-lg">
          <div class="modal-content">
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">¿Cómo elaborar un currículum?</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>

              <!-- Modal body -->
              <div class="modal-body">
                   <iframe src="https://www.youtube.com/embed/aIYC8TMIUmo" allowfullscreen></iframe>
              </div>
              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-modal-close" data-dismiss="modal">Cerrar</button>
              </div>
          </div>
        </div>
      </div>
      <img class="img-videoModal" src="img/img-video-aptitudes.png" alt="video" data-toggle="modal" data-target="#myModal2">
      <div class="modal modal-right fade" id="myModal2">
        <div class="modal-dialog modal-dialog-centered modal-lg">
          <div class="modal-content">
              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">¿Cómo elaborar un currículum?</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>

              <!-- Modal body -->
              <div class="modal-body">
                   <iframe src="https://www.youtube.com/embed/aIYC8TMIUmo" allowfullscreen></iframe>
              </div>
              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-modal-close" data-dismiss="modal">Cerrar</button>
              </div>
          </div>
        </div>
      </div>
        <h4>Videos en fila</h4> <hr>
          <div class="row-videos">
              <iframe src="https://www.youtube.com/embed/TLswo0iTcxg" allowfullscreen></iframe>
              <iframe src="https://www.youtube.com/embed/aIYC8TMIUmo" allowfullscreen></iframe>
          </div>
 </div>
    <!-- /.container -->

    <!-- Footer -->
    <!-- Footer -->
  <footer class="py-3 bg-footer">
    <div class="container">
      <div class="row">
          <div id="sec-footer"  class="col-sm-8 mb-4">
            <span id="text-footer" class="text-center text-footer text-black"></span>
          </div>
          <div id="sec-footer"  class="col-sm-4 mb-4">
            <span><img class="img-footer" src="img/img-logo-oei.png" alt="imagen del logo de la OEI"></span>
          </div>
          <div class="clear-footer"></div>
        </div>
      </div>
    </div>
    <!-- /.container -->
  </footer>

  </body>

</html>
