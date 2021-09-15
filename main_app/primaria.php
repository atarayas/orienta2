<?php
?>
<script type="text/javascript">
    var tipo = '';
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
        <!-- <script src="../js/main.js" charset="utf-8"></script> -->

        <!-- include Unite Gallery Theme Files -->
        <!-- <script src='../lib/unitegallery/js/unitegallery.min.js' type='text/javascript'  ></script>
        <script src='../lib/unitegallery/themes/video/ug-theme-video.js' type='text/javascript'></script> -->



        <!-- Bootstrap core CSS -->
        <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="../css/modern-business.css" rel="stylesheet">
        <!-- <link  href='../lib/unitegallery/css/unite-gallery.css' rel='stylesheet' type='text/css' /> -->

        <!-- Custom styles for buttons animation -->
        <!-- <link href="../css/ihover/src/ihover.css" rel="stylesheet"> -->

            <!-- fonts -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="../css/master.css" rel="stylesheet">
        <link href="../css/style-gallery.css" rel="stylesheet">


        <script src="../js/main.js" charset="utf-8"></script>
        <script src="../js/gallery-school.js" charset="utf-8"></script>
  </head>

  <body>
    <!-- Navigation MENU -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
          <a class="navbar-brand" href="#">
             <img id="mepLogo"  src="">
             <img id="instLogo"  src="">
             <p class="title">Ministerio de Educación Pública<br>Orientación Vocacional<p>
          </a>
      </div>
    </nav>
    <!-- fin de navigation -->

    <!-- Page Content -->
    <div class="container container-fullwidth">

      <!-- Page Heading/Breadcrumbs -->
      <h2 class="mt-4 mb-3 mt-right">Primaria</h2>

      <ol class="breadcrumb right">
        <li class="breadcrumb-item">
          <a href="principal.php">Inicio</a>
        </li>
        <li class="breadcrumb-item active">Primaria</li>
      </ol>
      <h4></h4>
      <p>Hola, muchas gracias por visitar este espacio vocacional, aquí encontrarás una serie de videos que te ayudará a conocer sobre la elección vocacional, o mejor dicho, pasos para ir descubriendo de lo que podés llegar a ser cuando sea grande; por eso es importante estudiar mucho y seguir sus sueños para ser esa persona que quieres ser. </p>
      <p>Ah, recuerde conversar con su papá, mamá, hermanos y maestras o profesor y profesora, sobre lo que gustaría ser y lo que has vistos en estos videos.</p>
      <h4>Videos</h4>
      <div class="container col-sm-8 off-set-2">
           <div class="row">
              <section class="reproductor">
                <input id="open-thumbs" type="checkbox" class="reproductor__checkbox">
                <section class="reproductor__frame">
                  <label for="open-thumbs" class="reproductor__frame--label"></label>
                  <div class="reproductor__frame--play"></div>
                </section>
                <!-- <div class="my-custom-scrollbar my-custom-scrollbar-primary"> -->
                  <section class="reproductor__thumbs">
                    <ul class="lista"></ul>
                  </section>
                  <!-- </div> -->

              </section>
          </div>
      </div>

      <h4>Centros Educativos</h4>
      <p>Para información de los centros educativos del país, <a href="http://sigmep.maps.arcgis.com/apps/webappviewer/index.html?id=e5588a81e7744161a149608a773f23f2">presiona clic aquí</a></p>
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
          <!-- <div class="clear-footer"></div> -->
        </div>
    </div>
    <!-- /.container -->
  </footer>

  </body>

</html>
