<?php
  session_start();
  if (!isset($_SESSION['usuario'])) {
      header('Location: ../index.php');
  }
?>

<script type="text/javascript">
    var tipo = '<?php echo$_SESSION['usuario'];?>'
</script>

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
          <ul id="options" class="navbar-nav ml-auto">
          </ul>
        </div>
      </div>
    </nav>
    <!-- fin de navigation -->

    <!-- Page Content -->
    <div class="container container-fullwidth">

      <!-- Page Heading/Breadcrumbs -->
      <h2 class="mt-4 mb-3 mt-left">Intereses y Habilidades</h2>
      <ol class="breadcrumb left">
        <li class="breadcrumb-item">
          <a href="principal.php">Inicio</a>
        </li>
        <li class="breadcrumb-item active">Intereses y habilidades</li>
      </ol>

      <h4>¿Conocés actualmente cuáles son tus intereses y habilidades?<small> <br> <strong>Pruebas de orientación vocacional</strong></small></h4>
      <p>Es muy normal que en estos momentos no tenga claro, cuál es la carrera o la ocupación en la que vas a dedicar el resto de su vida, por lo que es importante tener muy en claro, cuáles son sus intereses y aptitudes, entendiendo que es un proceso que debe realizar a lo interno de ti mismo, es decir, conocerte (conocimiento de sí mismo) y para que sos bueno/a (aptitudes), para ayudarte a tener más claro el panorama, Ingresa a los iconos que encontrarás en la parte posterior: ahí encontrarás una serie de instrumentos vocacionales que te ayudará a conocer mejor sus intereses y aptitudes que te acerque a la carrera o al área vocacional.</p>
      <p>Ahora, sí ya sabes cuál es el área en la que te gustaría desempeñar, te invitamos a revisar cada una de las carreras que se encuentra de esas áreas vocacionales ocupacionales, ingresando al icono de la Universidad de Costa Rica.</p>
      <ol>
          <li>Artes</li>
          <li>Letras y filosofía</li>
          <li>Ciencias sociales</li>
          <li>Ciencias básicas</li>
          <li>Educación</li>
          <li>Ciencias de la salud</li>
          <li>Ingeniería</li>
          <li>Agropecuaria y forestales</li>
          <li>Ciencias económicas</li>
      </ol>
      <!-- animated links -->

      <div class="row row-enlaces">
       <div class="ih-item circle colored effect1"><a href="https://vocacional.ucr.ac.cr/sovi/?rvn=1" target="_blank">
          <div class="spinner"></div>
         <div class="img"><img class="img-enlace" src="../img/buttons/btn-orientacion.png" alt="img"></div>
         <div class="info">
           <div class="info-back">
              <h3>Click aquí</h3>
              <p>Orientación Vocacional</p>
        </div>
          </div></a>
        </div>
      </div>
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
        <h3>Enlaces de instrumentos vocacionales</h3>
        <div class="row row-enlaces">
         <div class="ih-item circle colored effect1"><a href="http://www.miguiavocacional.com/" target="_blank" alt="Mi guía vocacional" title="Mi guía vocacional">
            <div class="spinner"></div>
           <div class="img"><img class="img-enlace" src="../img/buttons/btn-covae.png" alt="img"></div>
           <div class="info">
             <div class="info-back">
                <h3>Click aquí</h3>
                <p>Mi guía vocacional</p>
          </div>
            </div></a>
          </div>
          <div class="ih-item circle colored effect1"><a href="https://vocacional.ucr.ac.cr/sovi/?rvn=1" target="_blank" alt="Orientación vocacional" title="Orientación vocacional">
               <div class="spinner"></div>
              <div class="img"><img src="../img/buttons/btn-orientacion.png" alt="img"></div>
              <div class="info">
                <div class="info-back">
                  <h3>Click aquí</h3>
                  <p>Orientación vocacional</p>
                </div>
              </div></a>
          </div>
          <div class="ih-item circle colored effect1"><a href="http://infoues.conare.ac.cr/instrumentovocacional" target="_blank" alt="¿Qué puedo estudiar?" title="¿Qué puedo estudiar?">
               <div class="spinner"></div>
              <div class="img"><img src="../img/buttons/btn-infoues.png" alt="img"></div>
              <div class="info">
                <div class="info-back">
                  <h3>Click aquí</h3>
                  <p>Infoues</p>
                </div>
              </div></a>
          </div>
        </div>
     <!-- end links -->

 </div>
    <!-- /.container -->

    <!-- Footer -->
  <footer class="py-3 bg-footer">
    <div class="container">
      <div class="row">
        <div class="sec-footer col-sm-8 mb-4">
          <span id="text-footer" class="text-center text-footer text-black"></span>
        </div>
        <div id="sec-footer"  class="sec-footer col-sm-4 mb-4"></div>
          <div class="clear-footer"></div>
        </div>
    </div>
    <!-- /.container -->
  </footer>

  </body>

</html>
