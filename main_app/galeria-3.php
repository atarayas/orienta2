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
      <h2 class="mt-4 mb-3 mt-top">Encuentros</h2>

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

            <img alt="Encuentros con el profesorado guía - Dirección Regional de Occidente"
               src="../img/images-gallery/thumbs/img12.jpg"
               data-image="../img/images-gallery/big/img12.jpg"
            data-description="Las personas participantes realiza una actividad de reflexión para  la sensibilización sobre la responsabilidad que conllevar tener un grupo a cargo.">
            <img alt="Encuentros con el profesorado guía - Dirección Regional de Occidente"
               src="../img/images-gallery/thumbs/img13.jpg"
               data-image="../img/images-gallery/big/img13.jpg"
               data-description="Representantes del profesorado guía de la Dirección Regional de Occidente">
            <img alt="Encuentros con el profesorado guía -  Dirección Regional de Liberia"
               src="../img/images-gallery/thumbs/img14.jpg"
               data-image="../img/images-gallery/big/img14.jpg"
               data-description="Una representación de lo que significa la labor del docente guía, en la cuido, guía y permanencia estudiantil.">
            <img alt="Encuentros con el profesorado guía - Dirección Regional de Liberia"
               src="../img/images-gallery/thumbs/img15.jpg"
               data-image="../img/images-gallery/big/img15.jpg"
               data-description="En primer plano, la Jefa del Departamento de Orientación Educativa y Vocacional, dirigiendo sus palabras a la representación del profesorado de la Dirección Regional de Liberia.">
            <img alt="Encuentro vocacional"
               src="../img/images-gallery/thumbs/img11.jpg"
               data-image="../img/images-gallery/big/img11.jpg"
               data-description="En todas las regiones educativas, se realizan los encuentros ferias vocacionales.">
        	</div>
        </div>

        <div class="col-md-4">
          <h3 class="my-3">Encuentro profesorado guía</h3>
          <p>Con el propósito de fortalecer la labor que desempeña el profesorado guía en las instituciones de enseñanza media; El departamento de Orientación Educativa Vocacional, en conjunto con las diferentes regionales, busca sensibilizar y comprometer al las personas que funge como profesor/a guía en la labor de conducción de su grupo a cargo.</p>
          <h3 class="my-3">Encuentro vocacional</h3>
          <p>En todas las regiones educativas, se realizan los encuentros ferias vocacionales, en donde se exponen las ofertas académicas de las principales universidades privadas, para universitarias e institutos del país.</p>
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
          <a href="galeria-2.php">
            <img class="img-fluid img-gallery" src="../img/images-gallery/big/img3-rel.jpg" alt="Galería de capacitación">
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
