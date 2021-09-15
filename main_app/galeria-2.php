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
<html lang="es">

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
    <!-- Unite Gallery js -->
    <script src='../lib/unitegallery/js/unitegallery.min.js' type='text/javascript'  ></script>
    <!-- include Unite Gallery Theme Files -->
    <script src='../lib/unitegallery/themes/compact/ug-theme-compact.js' type='text/javascript'></script>
    <script src="../js/main.js" charset="utf-8"></script>
    <script src="../js/main-gallery.js" charset="utf-8"></script>


    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Unite Gallery CSS -->
    <link  href='../lib/unitegallery/css/unite-gallery.css' rel='stylesheet' type='text/css' />

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
          <ul id="options" class="navbar-nav ml-auto">  </ul>
      </div>
    </div>
  </nav>
    <!-- fin de navigation -->

    <!-- Page Content -->
    <div class="container container-fullwidth">

      <!-- Page Heading/Breadcrumbs -->
      <h2 class="mt-4 mb-3 mt-top">Capacitaciones</h2>

      <ol class="breadcrumb top">
        <li class="breadcrumb-item">
          <a href="principal.php">Inicio</a>
        </li>
        <li class="breadcrumb-item active">Galería</li>
      </ol>

      <!-- Portfolio Item Row -->
      <div class="row">

        <div class="col-md-8">
          <div id="gallery" style="display:none;">

        		<img alt="Capacitación Educación para la afectividad y sexualidad integral"
        			 src="../img/images-gallery/thumbs/img3.jpg"
        			 data-image="../img/images-gallery/big/img3.jpg"
        			 data-description="Participantes de la capacitación de las regiones de Sarapiquí y Guapiles.">
            <img alt="Capacitación Educación para la afectividad y sexualidad integral"
               src="../img/images-gallery/thumbs/img4.jpg"
               data-image="../img/images-gallery/big/img4.jpg"
               data-description="Actividad en el marco de las relaciones afectivas de la capacitación para la afectividad y sexualidad.">
            <img alt="Capacitación Educación para la afectividad y sexualidad integral"
               src="../img/images-gallery/thumbs/img5.jpg"
               data-image="../img/images-gallery/big/img5.jpg"
               data-description="Participantes de las Direcciones Regionales de Liberia y Nicoya">
            <img alt="Capacitación Educación para la afectividad y sexualidad integral"
               src="../img/images-gallery/thumbs/img6.png"
               data-image="../img/images-gallery/big/img6.png"
               data-description="Participantes de las Direcciones Regionales de Limón y Sulá">
            <img alt="Capacitación Educación para la afectividad y sexualidad integral"
               src="../img/images-gallery/thumbs/img7.jpg"
               data-image="../img/images-gallery/big/img7.jpg"
               data-description="Participantes de las Direcciones Regionales de Limón y Sulá">
            <img alt="Curso de principios básicos para un abordaje inicial"
               src="../img/images-gallery/thumbs/img10.jpg"
               data-image="../img/images-gallery/big/img10.jpg"
               data-description="Este curso brinda información para comprender la importancia de la prevención y detección de conductas suicidas y/o autolesiones.">
        </div>
        </div>

        <div class="col-md-4">
          <p class="my-3"> <strong>Capacitación Educación para la afectividad y sexualidad integral: grupo de profesionales en orientación</strong> </p>
          <p>Dentro del marco de la implementación de los programas de estudios en la temática de la afectividad y sexualidad, para una vivencia de la sexualidad integral y salud sexual reproductiva, para que el estudiantado, pueda tomar mejor las decisiones basada en una información más cientifica y mediada pedagogicamente.</p>
          <p class="my-3"> <strong>Curso de principios básicos para un abordaje inicial en la población de los centros educativos</strong> </p>
          <p>Este curso pretende brindar información para comprender la importancia de la prevención y detección de conductas suicidas y/o autolesiones que pueden presentar en la comunidad educativa. Está dirigido al personal de orientación, profesionales de los equipos interdisciplinarios y docentes seleccionados.</p>
        </div>

      </div>
      <!-- /.row -->

      <!-- Related Projects Row -->
      <h3 class="my-4">Galerías relacionadas</h3>

      <div class="row">

        <div class="col-md-3 col-sm-6 mb-4">
          <a href="galeria-1.php">
            <img class="img-fluid img-gallery" src="../img/images-gallery/big/img2-rel.png" alt="Galería de actividades">
          </a>
        </div>

        <div class="col-md-3 col-sm-6 mb-4">
          <a href="galeria-3.php">
            <img class="img-fluid img-gallery" src="../img/images-gallery/big/img12-rel.jpg" alt="">
          </a>
        </div>

      </div>
      <!-- /.row -->

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
  </body>

</html>
