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
      <h2 class="mt-4 mb-3 mt-left">

      <ol class="breadcrumb left">
        <li class="breadcrumb-item">
          <a href="principal.php">Inicio</a>
        </li>
        <li class="breadcrumb-item active">Demanda laboral</li>
      </ol>

      <h4>¿Sabés cuáles son las demandas del mercado laboral?<br>
           <small>Ofertas /demandas laboral </small></h4>
      <p>El mundo se mueve, ciertamente la sociedad costarricense no puede ni debe quedarse atrás, por lo que es primordial que conozcas ¿cómo pinta el ambiente de trabajo? Recuerda que el concepto de trabajo, desde la física o economía, se ven como un movimiento o fuerza aplicada, en este caso fuerza laboral que se conocen sobre las personas que desempeñan alguna ocupación que le produce resultados tanto económicos como de realización personal.</p>
      <P>En este apartado, podés ver las tendencias en cuanto al empleo en el sector productivo y las demandas que se requiere para llenar las plazas en las empresas e instituciones.</P>
      <h3>Enlaces</h3>
      <!-- animated links -->
      <div class="row row-enlaces">
       <div class="ih-item circle colored effect1"><a href="https://pronae.info/wp-content/endurance-page-cache/_index.html" target="_blank">
       <div class="spinner"></div>
         <div class="img"><img class="img-enlace" src="../img/buttons/btn-mtss.png" alt="img"></div>
         <div class="info">
           <div class="info-back">
              <h3>Click aquí</h3>
              <p>Empleáte</p>
        </div>
          </div></a>
        </div>
        <div class="ih-item circle colored effect1"><a href="https://www.thetalentplace.cr/" target="_blank">
             <div class="spinner"></div>
            <div class="img"><img src="../img/buttons/btn-talent-place.png" alt="img"></div>
            <div class="info">
              <div class="info-back">
                <h3>Click aquí</h3>
                <p>Talent Place</p>
              </div>
             </div></a>
        </div>
        <div class="ih-item circle colored effect1"><a href="http://olap.conare.ac.cr/proyectos-de-investigacion/opinometro-laboral/opinometro-laboral-2017#archivos3" target="_blank">
             <div class="spinner"></div>
            <div class="img"><img src="../img/buttons/btn-olap.jpg" alt="img"></div>
            <div class="info">
              <div class="info-back">
                <h3>Click aquí</h3>
                <p>Olap</p>
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
