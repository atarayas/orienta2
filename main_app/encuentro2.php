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
      <h2 class="mt-4 mb-3 mt-right">Enlaces</h2>

      <ol class="breadcrumb right">
        <li class="breadcrumb-item">
          <a href="principal.php">Inicio</a>
        </li>
        <li class="breadcrumb-item active">Enlaces</li>
      </ol>
      <h4>Enlaces a universidades y videos</h4>
      <p>Podrá encontrar un botón con los enlaces a cada universidad y su video.<p>
      <p></p>
      <h3>Enlaces</h3>
      <!-- animated links -->
      <div class="row row-enlaces">
        <div class="ih-item circle colored effect1"><a href="cenfotec_copy.php/" target="_blank">
             <div class="spinner"></div>
            <div class="img"><img src="../img/buttons/btn-cenfotec.png" alt="img"></div>
            <div class="info">
              <div class="info-back">
                <h3>Click aquí</h3>
                <p>CENFOTEC</p>
              </div>
             </div></a>
        </div>
        <div class="ih-item circle colored effect1"><a href="fidelitas.php" target="_blank">
             <div class="spinner"></div>
            <div class="img"><img src="../img/buttons/btn-fidelitas.png" alt="img"></div>
            <div class="info">
              <div class="info-back">
                <h3>Click aquí</h3>
                <p>Fidelitas</p>
              </div>
            </div></a>
        </div>
        <div class="ih-item circle colored effect1"><a href="conape.php" target="_blank">
           <div class="spinner"></div>
          <div class="img"><img class="img-enlace" src="../img/buttons/btn-conape.png" alt="img"></div>
          <div class="info">
            <div class="info-back">
               <h3>Click aquí</h3>
               <p>CONAPE</p>
         </div>
           </div></a>
         </div>
         <div class="ih-item circle colored effect1"><a href="universidadescr/" target="_blank">
              <div class="spinner"></div>
             <div class="img"><img src="../img/buttons/btn-universidades.png" alt="img"></div>
             <div class="info">
               <div class="info-back">
                 <h3>Click aquí</h3>
                 <p>UNIVERSIDADESCR</p>
               </div>
              </div></a>
         </div>
         <div class="ih-item circle colored effect1"><a href="ULatina" target="_blank">
              <div class="spinner"></div>
             <div class="img"><img src="../img/buttons/btn-ulatina.png" alt="img"></div>
             <div class="info">
               <div class="info-back">
                 <h3>Click aquí</h3>
                 <p>ULatina</p>
               </div>
             </div></a>
         </div>
         <div class="ih-item circle colored effect1"><a href="UAmericana/" target="_blank">
            <div class="spinner"></div>
           <div class="img"><img class="img-enlace" src="../img/buttons/btn-americana.png" alt="img"></div>
           <div class="info">
             <div class="info-back">
                <h3>Click aquí</h3>
                <p>UAmericana</p>
          </div>
            </div></a>
          </div>
          <div class="ih-item circle colored effect1"><a href="INVENIO" target="_blank">
               <div class="spinner"></div>
              <div class="img"><img src="../img/buttons/btn-invenio.png" alt="img"></div>
              <div class="info">
                <div class="info-back">
                  <h3>Click aquí</h3>
                  <p>INVENIO</p>
                </div>
               </div></a>
          </div>
          <div class="ih-item circle colored effect1"><a href="UIA" target="_blank">
               <div class="spinner"></div>
              <div class="img"><img src="../img/buttons/btn-uia.png" alt="img"></div>
              <div class="info">
                <div class="info-back">
                  <h3>Click aquí</h3>
                  <p>UIA</p>
                </div>
              </div></a>
          </div>
          <div class="ih-item circle colored effect1"><a href="UACA" target="_blank">
               <div class="spinner"></div>
              <div class="img"><img src="../img/buttons/btn-uaca.png" alt="img"></div>
              <div class="info">
                <div class="info-back">
                  <h3>Click aquí</h3>
                  <p>UACA</p>
                </div>
              </div></a>
          </div><br>
          <div class="ih-item circle colored effect1"><a href="UIndependiente" target="_blank">
               <div class="spinner"></div>
              <div class="img"><img src="../img/buttons/btn-independiente.png" alt="img"></div>
              <div class="info">
                <div class="info-back">
                  <h3>Click aquí</h3>
                  <p>UIndependiente</p>
                </div>
              </div></a>
          </div>
          <div class="ih-item circle colored effect1"><a href="Veritas" target="_blank">
               <div class="spinner"></div>
              <div class="img"><img src="../img/buttons/btn-veritas.png" alt="img"></div>
              <div class="info">
                <div class="info-back">
                  <h3>Click aquí</h3>
                  <p>Veritas</p>
                </div>
              </div></a>
          </div>
          <div class="ih-item circle colored effect1"><a href="Amura" target="_blank">
               <div class="spinner"></div>
              <div class="img"><img src="../img/buttons/btn-amura.png" alt="img"></div>
              <div class="info">
                <div class="info-back">
                  <h3>Click aquí</h3>
                  <p>Amura</p>
                </div>
              </div></a>
          </div>
          <div class="ih-item circle colored effect1"><a href="Catolica" target="_blank">
               <div class="spinner"></div>
              <div class="img"><img src="../img/buttons/btn-catolica.png" alt="img"></div>
              <div class="info">
                <div class="info-back">
                  <h3>Click aquí</h3>
                  <p>Católica</p>
                </div>
              </div></a>
          </div>
          <div class="ih-item circle colored effect1"><a href="Politecnica" target="_blank">
               <div class="spinner"></div>
              <div class="img"><img src="../img/buttons/btn-politecnica.png" alt="img"></div>
              <div class="info">
                <div class="info-back">
                  <h3>Click aquí</h3>
                  <p>Politecnica</p>
                </div>
              </div></a>
          </div>
          <div class="ih-item circle colored effect1"><a href="UNED" target="_blank">
               <div class="spinner"></div>
              <div class="img"><img src="../img/buttons/btn-uned.png" alt="img"></div>
              <div class="info">
                <div class="info-back">
                  <h3>Click aquí</h3>
                  <p>UNED</p>
                </div>
              </div></a>
          </div>
          <div class="ih-item circle colored effect1"><a href="ETAI" target="_blank">
               <div class="spinner"></div>
              <div class="img"><img src="../img/buttons/btn-etai.png" alt="img"></div>
              <div class="info">
                <div class="info-back">
                  <h3>Click aquí</h3>
                  <p>ETAI</p>
                </div>
              </div></a>
          </div>
          <div class="ih-item circle colored effect1"><a href="TEC" target="_blank">
               <div class="spinner"></div>
              <div class="img"><img src="../img/buttons/btn-tec.png" alt="img"></div>
              <div class="info">
                <div class="info-back">
                  <h3>Click aquí</h3>
                  <p>TEC</p>
                </div>
              </div></a>
          </div>
          <div class="ih-item circle colored effect1"><a href="UNIBE" target="_blank">
               <div class="spinner"></div>
              <div class="img"><img src="../img/buttons/btn-unibe.png" alt="img"></div>
              <div class="info">
                <div class="info-back">
                  <h3>Click aquí</h3>
                  <p>UNIBE</p>
                </div>
              </div></a>
          </div><br>
          <div class="ih-item circle colored effect1"><a href="UTN" target="_blank">
               <div class="spinner"></div>
              <div class="img"><img src="../img/buttons/btn-utn.png" alt="img"></div>
              <div class="info">
                <div class="info-back">
                  <h3>Click aquí</h3>
                  <p>UTN</p>
                </div>
              </div></a>
          </div> 
          <div class="ih-item circle colored effect1"><a href="INA" target="_blank">
               <div class="spinner"></div>
              <div class="img"><img src="../img/buttons/btn-ina.png" alt="img"></div>
              <div class="info">
                <div class="info-back">
                  <h3>Click aquí</h3>
                  <p>INA</p>
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
