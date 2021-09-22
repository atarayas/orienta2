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

   <header class="front">
    <div class="container">
      <div class="row">

      <!-- columna izquierda -->
        <div id="left-col" class="col-sm-3">
           <img id="imgLeft"  src="">
           <div class="button_group">
              <div class="btn-col">
                <a href="intereses.php" target="_self" class="btn btn-principal btn-block" role="button" id="but_01">¿Conocés tus intereses y habilidades?</a>
              </div>
              <div class="btn-col">
                <a href="educacion-tecnica.php" target="_self" class="btn  btn-principal btn-block" role="button" id="but_02">¿Sabés qué es la Educación Técnica?</a>
              </div>
              <div class="btn-col">
                 <a href="carreras.php" target="_self" class="btn btn-principal btn-block" role="button" id="but_03" alt ="Opciones universitarias">¿Qué puedo estudiar?<br></a>
              </div>
              <div class="btn-col">
                  <a href="demanda-laboral.php" target="_self" class="btn  btn-principal btn-block" role="button" id="but_03" alt ="Mercado laboral">¿Sabes cuáles son las demandas del mercado laboral?<br></a>
              </div>
              <div class="btn-col">
                <a href="emprendimiento.php" target="_self" class="btn btn-principal btn-block" role="button" id="but_05">Emprendimiento <br> ¿qué es?<br> </a>
              </div>
           </div>
        </div>
      <!-- fin de columna izquierda -->

<!-- columna centro -->
        <!-- <div id="center-col" class="col-md-6 col-carousel"> -->
        <div id="center-col" class="col-sm-6">
        <!-- inicio del carrusel -->
          <div id="demo" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ul class="carousel-indicators">
              <li data-target="#demo" data-slide-to="0" class="active"></li>
              <li data-target="#demo" data-slide-to="1"></li>
              <li data-target="#demo" data-slide-to="2"></li>
              <li data-target="#demo" data-slide-to="3"></li>
              <li data-target="#demo" data-slide-to="5"></li>
            </ul>
  
              <!-- The slideshow -->
              <div class="carousel-inner">
                <div class="carousel-item active">
                    <!-- <img src="../img/imagen-video.png" class="img-fluid rounded" alt="Encuentro de mujeres" width="1100" height="900"> -->
                    <img src="../img/imagen-video.png" class="img-fluid rounded" alt="imagen de Orientació vocacional">
                    <div class="carousel-caption carousel-background d-md-block">
                      <!-- <button id= "myBtn" target="_blank">Video Orientación Vocacional</button> -->
                      <p><a href="video_ov.php">Video Orientación Vocacional</a></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="../img/encuentro_mujeres1.jpg" class="img-fluid rounded" alt="Encuentro de mujeres">
                    <div class="carousel-caption carousel-background d-md-block">
                      <p><a  href="https://orienta2.mep.go.cr/chicasteam/" target="_blank">Encuentro de Mujeres en Ciencia y Tecnología</a></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="../img/img-encuentro-mujeres1.png" class="img-fluid rounded" alt="Estudiantes mujeres rompen estereotipos">
                    <div class="carousel-caption carousel-background d-md-block">
                        <p><a  href="https://www.mep.go.cr/noticias/estudiantes-mujeres-se-unen-romper-estereotipos" target="_blank">Estudiantes mujeres se unen para romper estereotipos</a></p>
                  </div>
                </div>
                <div class="carousel-item">
                    <img src="../img/digi.png" alt="Proyecto DigiGirlZ" class="img-fluid rounded">
                    <div class="carousel-caption carousel-background d-md-block">
                      <p><a  href="https://www.mep.go.cr/noticias/mep-se-une-proyecto-digigirlz-potencia-inclusion-mujer-sector-tecnologico-cientifico" target="_blank">MEP se une a Proyecto DIGIGIRLZ</a></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="../img/insti_proyecto.png" alt="Noticia para inspirar a jovenes mujeres a estudiar" class="img-fluid rounded">
                    <div class="carousel-caption carousel-background d-md-block">
                      <p><a  href="https://www.mep.go.cr/noticias/instituciones-se-unen-inspirar-jovenes-mujeres-estudiar-carreras-ingenieriles-tecnologicas" target="_blank">Instituciones se unen para inspirar jóvenes</a></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="../img/logo-encuentro.png" alt="Encuentro Vocacional Virtual" class="img-fluid rounded">
                    <div class="carousel-caption carousel-background d-md-block">
                      <p><a  href="encuentro-vocacional.php" target="_blank">Encuentro Vocacional Virtual</a></p>
                    </div>
                </div>
              </div>
    
              <!-- Left and right controls -->
              <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
              </a>
              <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
              </a>
          </div>
          <!-- fin carousel -->
        </div>
       <!-- fin columna centro -->
      
        <!-- columna 3 - derecha -->
        <div id="right-col" class="col-sm-3">
           <img id="imgRight"  src="">
           <div class="button_group">
              <div class="btn-col btn-right">
                  <a href="vida-laboral.php" target="_self" class="btn btn-principal btn-block" role="button" id="but_06" >Elementos básicos para <br> la vida laboral</a>
              </div>
              <div class="btn-col btn-right">
                 <a href="idiomas.php" target="_self" class="btn btn-principal btn-block" role="button" id="but_07">Idiomas, <br> ¡Muy importante!</a>
              </div>
              <div class="btn-col btn-right">
                 <a href="financiamiento.php" target="_self" class="btn btn-principal btn-block" role="button" id="but_08">¿Cómo podés financiar tus <br>estudios?</a>
              </div>
              <div class="btn-col btn-right">
                 <a href="http://orienta2.mep.go.cr/chicasteam/" target="_blank" class="btn btn-principal btn-block" role="button" id="but_08"><br>Chicas team</a>
              </div>
              <div class="btn-col btn-encuentro">
                 <a href="encuentro-vocacional.php" class="btn btn-principal btn-text-encuentro btn-block" role="button" id="but_08">
                   <!-- <img src="././img/btn_encuentro_vocacional_virtual.png" alt="imagen del encuentro vocacional"> -->
                   <span>
                      Encuentro <br>
                      Vocacional Virtual <br>
                      2021
                  </span>
                 </a>
              </div>
          </div>
        </div>

      <!-- </div>
        </div> -->
      </div>  <!-- row -->
    </div>    <!-- div container -->
  </header>
  <div class="container">
      <!-- Redes sociales -->
      <div class="row">
       <span></span>
      </div>
      <div class="row">
        <div class="col-sm-4 mb-4">
          <a href="https://www.facebook.com/Ministerio-de-Educaci%C3%B3n-P%C3%BAblica-MEP-132635836805605/" target="_blank"><img class="redes-sociales facebook" src="../img/img-facebook.png" alt="enlace a facebook del MEP"></a>
        </div>
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->

      <!-- Footer -->
    <footer class="py-3 bg-footer">
      <div class="container">
        <div class="row">
          
          <div class="sec-footer col-sm-12 mb-4">
            <span id="text-footer" class="text-center text-footer text-black"></span>
          </div>
          <!-- <div id="sec-footer"  class="sec-footer col-sm-4 mb-4"></div> -->
            <div class="clear-footer"></div>
          </div>
      </div>
      <!-- /.container -->
    </footer>

  </body>

</html>