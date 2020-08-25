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
      <h2 class="mt-4 mb-3 mt-right">Idiomas</h2>

      <ol class="breadcrumb right">
        <li class="breadcrumb-item">
          <a href="principal.php">Inicio</a>
        </li>
        <li class="breadcrumb-item active">Idiomas</li>
      </ol>
      <h4>¡Idiomas! Muy importante</h4>
      <p>En la sociedad actual, en donde la comunicación es vital, ahora imagínate comunicarse en otro idioma, con personas de todas parte del mundo.  Hoy por hoy, ya no se concibe a una persona que solamente hable español, sino que también debe hablar: inglés, mandarín, portugués, francés, italiano… en fin dominar más de un idioma, te abren muchas puertas alrededor del mundo.<p>
      <p>Así que anímate, para que revises las diferentes opciones y oportunidades para aprender nuevos idiomas…</p>
      <h3>Enlaces</h3>
      <!-- animated links -->
      <div class="row row-enlaces">
        <div class="ih-item circle colored effect1"><a href="http://www.institutoconfucio.ucr.ac.cr/" target="_blank">
             <div class="spinner"></div>
            <div class="img"><img src="../img/buttons/btn-instituto-confucio.png" alt="img"></div>
            <div class="info">
              <div class="info-back">
                <h3>Click aquí</h3>
                <p>Inst. Confucio</p>
              </div>
             </div></a>
        </div>
        <div class="ih-item circle colored effect1"><a href="https://alianzafrancesacostarica.com/" target="_blank">
             <div class="spinner"></div>
            <div class="img"><img src="../img/buttons/btn-alianza-francesa.png" alt="img"></div>
            <div class="info">
              <div class="info-back">
                <h3>Click aquí</h3>
                <p>Alianza Frances</p>
              </div>
            </div></a>
        </div>
        <div class="ih-item circle colored effect1"><a href="http://www.centrocultural.cr/" target="_blank">
           <div class="spinner"></div>
          <div class="img"><img class="img-enlace" src="../img/buttons/btn-centro-cultural.png" alt="img"></div>
          <div class="info">
            <div class="info-back">
               <h3>Click aquí</h3>
               <p>C.C. Cultural</p>
         </div>
           </div></a>
         </div>
         <div class="ih-item circle colored effect1"><a href="http://www.ccjapones.com/acerca-de/" target="_blank">
              <div class="spinner"></div>
             <div class="img"><img src="../img/buttons/btn-centro-japones.png" alt="img"></div>
             <div class="info">
               <div class="info-back">
                 <h3>Click aquí</h3>
                 <p>C.C. Japonés</p>
               </div>
              </div></a>
         </div>
         <div class="ih-item circle colored effect1"><a href="http://ccbritanico.com/" target="_blank">
              <div class="spinner"></div>
             <div class="img"><img src="../img/buttons/btn-centro-britanico.png" alt="img"></div>
             <div class="info">
               <div class="info-back">
                 <h3>Click aquí</h3>
                 <p>C.C. Británico</p>
               </div>
             </div></a>
         </div>
         <div class="ih-item circle colored effect1"><a href="http://centrogoethe.com/" target="_blank">
            <div class="spinner"></div>
           <div class="img"><img class="img-enlace" src="../img/buttons/btn-centro-goethe.png" alt="img"></div>
           <div class="info">
             <div class="info-back">
                <h3>Click aquí</h3>
                <p>Centro Goethe</p>
          </div>
            </div></a>
          </div>
          <div class="ih-item circle colored effect1"><a href="https://www.ina.ac.cr/BusquedaCursos/SitePages/Sedes.aspx" target="_blank">
               <div class="spinner"></div>
              <div class="img"><img src="../img/buttons/btn-ina.png" alt="img"></div>
              <div class="info">
                <div class="info-back">
                  <h3>Click aquí</h3>
                  <p>INA Inglés</p>
                </div>
               </div></a>
          </div>
          <div class="ih-item circle colored effect1"><a href="https://www.uned.ac.cr/extension/idioma" target="_blank">
               <div class="spinner"></div>
              <div class="img"><img src="../img/buttons/btn-uned.png" alt="img"></div>
              <div class="info">
                <div class="info-back">
                  <h3>Click aquí</h3>
                  <p>UNED Inglés</p>
                </div>
              </div></a>
          </div>
      </div> 

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
