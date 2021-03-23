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
        <div id="left-col" class="col-md-3">
           <img id="imgLeft"  src="">
           <div class="button_group">
              <div class="ih-item square colored effect5 right_to_left item-button">
                <a href="intereses.php" target="_self" class="btn btn-principal btn-block " role="button" id="but_01">¿Conocés tus intereses y habilidades?
                  <div class="info">
                    <h3>Intereses y habilidades</h3>
                    <p>Mas información para tí</p>
                  </div></a>
              </div>
              <div class="ih-item square colored effect5 right_to_left item-button">
                <a href="educacion-tecnica.php" target="_self" class="btn  btn-principal btn-block" role="button" id="but_02">¿Sabés qué es la Educación Técnica?
                <div class="info"><h3>Educación Técnica </h3><p>Ver más información</p></div></a>
              </div>
              <div class="ih-item square colored effect5 right_to_left item-button">
                 <a href="carreras.php" target="_self" class="btn btn-principal btn-block" role="button" id="but_03" alt ="Opciones universitarias">¿Qué puedo estudiar?<br><br>
                 <div class="info"><h3>¿Qué puedo estudiar?</h3><p>Ver más información</p></div></a>
              </div>
              <div class="ih-item square colored effect5 right_to_left item-button">
                  <a href="demanda-laboral.php" target="_self" class="btn  btn-principal btn-block" role="button" id="but_03" alt ="Mercado laboral">¿Sabes cuáles son las demandas del mercado laboral?<br>
                  <div class="info"><h3>Demanda laboral</h3><p>Ver más información</p></div></a>
              </div>
              <div class="ih-item square colored effect5 right_to_left item-button">
                <a href="emprendimiento.php" target="_self" class="btn btn-principal btn-block" role="button" id="but_05">Emprendimiento <br> ¿qué es?<br>
                <div class="info"><h3>Emprendimiento</h3><p>Ver más información</p></div></a>
              </div>
           </div>
        </div>
      <!-- fin de columna izquierda -->

<!-- columna centro -->
        <div id="center-col" class="col-md-6 col-carousel">
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
                    <img src="../img/imagen-video.png" class="img-fluid rounded" alt="Encuentro de mujeres" width="1100" height="900">
                    <div class="carousel-caption carousel-background d-md-block">
                      <!-- <button id= "myBtn" target="_blank">Video Orientación Vocacional</button> -->
                      <p><a href="video_ov.php">Video Orientación Vocacional</a></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="../img/encuentro_mujeres1.jpg" class="img-fluid rounded" alt="Encuentro de mujeres" width="1100" height="900">
                    <div class="carousel-caption carousel-background d-md-block">
                      <p><a  href="https://orienta2.mep.go.cr/chicasteam/" target="_blank">Encuentro de Mujeres en Ciencia y Tecnología</a></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="../img/img-encuentro-mujeres1.png" class="img-fluid rounded" alt="Estudiantes mujeres rompen estereotipos" width="1100" height="900">
                    <div class="carousel-caption carousel-background d-md-block">
                        <p><a  href="https://www.mep.go.cr/noticias/estudiantes-mujeres-se-unen-romper-estereotipos" target="_blank">Estudiantes mujeres se unen para romper estereotipos</a></p>
                  </div>
                </div>
                <div class="carousel-item">
                    <img src="../img/digi2.png" alt="Proyecto DigiGirlZ" class="img-fluid rounded" width="1100" height="900">
                    <div class="carousel-caption carousel-background d-md-block">
                      <p><a  href="https://www.mep.go.cr/noticias/mep-se-une-proyecto-digigirlz-potencia-inclusion-mujer-sector-tecnologico-cientifico" target="_blank">MEP se une a Proyecto DIGIGIRLZ</a></p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="../img/instiproyecto.png" alt="Noticia para inspirar a jovenes mujeres a estudiar" class="img-fluid rounded" width="1100" height="900">
                    <div class="carousel-caption carousel-background d-md-block">
                      <p><a  href="https://www.mep.go.cr/noticias/instituciones-se-unen-inspirar-jovenes-mujeres-estudiar-carreras-ingenieriles-tecnologicas" target="_blank">Instituciones se unen para inspirar jóvenes</a></p>
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
        <div id="right-col" class="col-md-3">
           <img id="imgRight"  src="">
           <div class="button_group">
              <div class="ih-item square colored effect5 right_to_left item-button right-ih-item">
                  <a href="vida-laboral.php" target="_self" class="btn btn-principal btn-block" role="button" id="but_06" >Elementos básicos para la <br> vida laboral
               <div class="info"><h3>Vida laboral</h3><p>Ver más información</p></div></a>
              </div>
              <div class="ih-item square colored effect5 right_to_left item-button right-ih-item">
                 <a href="idiomas.php" target="_self" class="btn btn-principal btn-block" role="button" id="but_07">Idiomas, <br> ¡Muy importante!
                 <div class="info"><h3>Idiomas</h3><p>Ver más información</p></div></a>
              </div>
              <div class="ih-item square colored effect5 right_to_left item-button right-ih-item">
                 <a href="financiamiento.php" target="_self" class="btn btn-principal btn-block" role="button" id="but_08">¿Cómo podés financiar tus <br>estudios?
                <div class="info"><h3>Financiamiento</h3><p>Ver más información</p></div></a>
              </div>
              <div class="ih-item square colored effect5 right_to_left item-button right-ih-item">
                 <a href="http://orienta2.mep.go.cr/chicasteam/" target="_blank" class="btn btn-principal btn-block" role="button" id="but_08">Chicas team
                <div class="info"><h3>Chicas Team</h3><p>Ver más información</p></div></a>
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