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
    <!-- X-Frame-Options: ALLOW-FROM https://example.com/ -->

    <title>Orientacion Vocacional | Ministerio de Educación Pública</title>

        <!-- Bootstrap core JavaScript -->
        <script src="../vendor/jquery/jquery.min.js"></script>
        <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
        <!-- include Unite Gallery Theme Files -->
        <script src='../lib/unitegallery/js/unitegallery.min.js' type='text/javascript'  ></script>
				<script src='../lib/unitegallery/themes/video/ug-theme-video.js' type='text/javascript'></script>

        <script src="../js/main.js" charset="utf-8"></script>
        
        <script src="../js/gallery-vida.js" charset="utf-8"></script>

        <!-- Bootstrap core CSS -->
        <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="../css/modern-business.css" rel="stylesheet">
				<link  href='..//lib/unitegallery/css/unite-gallery.css' rel='stylesheet' type='text/css' />

        <link href="../css/master.css" rel="stylesheet">
        <!-- Custom styles for buttons animation -->
        <link href="../css/ihover/src/ihover.css" rel="stylesheet">


        <!-- video gallery -->
        <!-- include one of the video skins -->

				<link  href='../lib/unitegallery/themes/video/skin-right-no-thumb.css' rel='stylesheet' type='text/css' />
				<link  href='../lib/unitegallery/themes/video/skin-right-thumb.css' rel='stylesheet' type='text/css' />
				<link  href='../lib/unitegallery/themes/video/skin-right-title-only.css' rel='stylesheet' type='text/css' />

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
      <h2 class="mt-4 mb-3 mt-right">SINAES</h2>

      <ol class="breadcrumb right">
      <li class="breadcrumb-item">
          <a href="principal.php">Inicio</a>
        </li>
        <li class="breadcrumb-item">
          <a href="encuentro-vocacional.php">Encuentro Vocacional</a>
        </li>
        <li class="breadcrumb-item active">SINAES</li>
      </ol>

      <h3>Visite la página oficial de: <a href="https://www.sinaes.ac.cr" target="_blank">SINAES</a></h3>
      <br>
          <h3>Video informativo</h3>
      <hr>
          <div class="video-universidad">
              <iframe src="https://www.youtube.com/embed/3046wx8pK24" allowfullscreen></iframe> <!-- aqui copiar igual y solo agregar el id del código -->
          </div>
    	</div>
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
