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
    <link rel="icon" href="favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Orientacion Vocacional | Ministerio de Educación Pública</title>

        <!-- Bootstrap core JavaScript -->
        <script src="../vendor/jquery/jquery.min.js"></script>
        <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
        <script src="../js/main.js" charset="utf-8"></script>

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
        <div class="navbar-logo">
         <img id="contLogo"  src="">
      </div>
      <a class="navbar-brand" href="#">
       <img id="mepLogo"  src="">
       <img id="instLogo"  src="">
       <p class="title">Ministerio de Educación Pública<br>Orientación Vocacional<p>
      </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul id="options" class="navbar-nav ml-auto">
          </ul>
        </div>
      </div>
    </nav>
    <!-- fin de navigation -->

    <header class="front">
      <div class="container">
        <!-- <div class="row align-items-center"> -->
        <!-- Content Row -->
        <div class="row">
          <!-- Sidebar Column -->
          <div class="col-lg-3 mb-4">
            <div class="list-group">
              <a href="index.html" class="list-group-item">Home</a>
              <a href="educacion-tecnica.html" class="list-group-item">¿Sabés qué es la Educación Técnica?</a>
              <a href="carreras.html" class="list-group-item">¿Qué puedo estudiar?</a>
              <a href="demanda-laboral.html" class="list-group-item">¿Sabes cuáles son las demandas del mercado laboral?</a>
              <a href="emprendimiento.html" class="list-group-item">Emprendimiento ¿qué es?</a>
            </div>
          </div>
          <!-- Content Column -->
          <div class="col-lg-9 mb-4">
            <h4>¿Conocés actualmente cuáles son tus intereses y habilidades?<small> <br> <strong>Instrumentos de orientación vocacional</strong></small></h4>
            <p>Es muy normal que en estos momentos no tengas claro, cuál es la carrera o la ocupación que deseas estudiar y brindar tu aporte a la sociedad, por lo que es importante tener muy en claro, cuáles son sus intereses y aptitudes, entendiendo esto como un proceso que debe realizarse a lo interno de ti mismo, es decir, conocerte (conocimiento de sí mismo) y para que sos bueno/a (aptitudes), para ayudarte a tener más claro el panorama, Ingresá a: <a href="http://www.miguiavocacional.com/" target="_blank">http://www.miguiavocacional.com/</a> o <a href="https://vocacional.ucr.ac.cr/sovi/?rvn=1" target="_blank">https://vocacional.ucr.ac.cr/sovi/?rvn=1</a> acá encontrarás una serie de instrumentos vocacionales que te ayudarán a conocer mejor tus intereses y aptitudes para que te acerques a la carrera o al área vocacional.</p>
            <p>Ahora, sí ya sabes cuál es el área en la que te gustaría desempeñar, te invitamos a revisar cada una de las carreras que se encuentran en esas áreas vocacionales ocupacionales, ejemplo: http://radiografia.conare.ac.cr/que-puedo-estudiar/artes-y-letras/artes-dramaticas/</p>
            <ol>
                <li>Artes y letras</li>
                <li>Ciencias básicas</li>
                <li>Computación</li>
                <li>Ciencias económicas</li>
                <li>Ciencias sociales</li>
                <li>Derecho</li>
                <li>Educación</li>
                <li>Recursos naturales</li>
                <li>Ingenierías</li>
                <li>Ciencias de la salud</li>
            </ol>
            <a class="link-line" href="https://vocacional.ucr.ac.cr/sovi/?rvn=1" target="_blank">https://vocacional.ucr.ac.cr/sovi/?rvn=1</a>
            <ol>
              <li>Artes</li>
              <li>Letras y filosofía</li>
              <li>Ciencias sociales</li>
              <li>Ciencias básicas</li>
              <li>Educación</li>
              <li>Ciencias de la Salud</li>
              <li>Ingeniería</li>
              <li>Agropecuaria y forestales</li>
              <li>Ciencias económicas </li>
            </ol>
          </div>
        </div>
        <!-- /.row -->

      </div>
    </header>

      <div class="container">
      <!-- Redes sociales -->
      <div class="row">
       <span></span>
      </div>
      <div class="row">
        <div class="col-sm-4 mb-4">
          <a href="#"><img class="redes-sociales" src="img/img-facebook.png" alt="enlace a facebook"></a>
          <a href="#"><img class="redes-sociales" src="img/img-instagram.png" alt="imagen enlace a instagram"></a>
          <a href="#"><img class="redes-sociales" src="img/img-twiter.png" alt="imagen enlace a twiter"></a>
        </div>
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->

      <!-- Footer -->
    <footer class="py-3 bg-footer">
      <div class="container">
        <div class="row">
          <div id="sec-footer"  class="col-sm-8 mb-4">
            <span id="text-footer" class="text-center text-footer text-black"></span>
          </div>
          <div id="sec-footer"  class="col-sm-4 mb-4">

          </div>
            <div class="clear-footer"></div>
          </div>
          <!-- <div class="row">
            <div id="sec-footer"  class="col-sm-12 mb-4">
              <span id="text-footer" class="text-center text-footer text-black"></span>

              <div class="clear-footer"></div>
            </div> -->
        </div>
      </div>
      <!-- /.container -->
    </footer>
  </body>

</html>
