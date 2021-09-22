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
      <h2 class="mt-4 mb-3 mt-right">Enlaces de ofertas de formación</h2>

      <ol class="breadcrumb right">
        <li class="breadcrumb-item">
          <a href="principal.php">Inicio</a>
        </li>
        <li class="breadcrumb-item active">Encuentro Vocacional Virtual</li>
      </ol>
      <h3>BIENVENIDOS</h3>
      <hr>
          <div class="video-intro">
              <iframe src="https://www.youtube.com/embed/vuYLhI1_ONw?=7" allowfullscreen></iframe>
          </div>
      <hr> 
      <h4>Enlaces a universidades y videos</h4>
      <p>Acá, vas a poder revisar las diferentes ofertas de formación, tanto de las universidades públicas como privadas, así como centros para-universitarios con carreras técnicas, adicional al enlace de cómo financiar tus estudios. Lo que tenés de hacer, es darle click, en el icono de las casas de enseñanzas, ahí aparecerá un video promocional de cada institución y el enlace que te llevará al portal de ese centro de estudio, recuerde que podes hacer las consultas en forma directa a las instituciones, mediante el chat, WhatsApp o número de teléfono que aparece en el sitio web. Adelante con su visita…<p>
      
      <!-- animated links -->
      <div class="row row-enlaces">
         <div class="col-sm-12">
          <h3>Universidades públicas</h3>
        </div>
        <div class="ih-item circle colored effect1"><a href="utn.php">
               <div class="spinner"></div>
              <div class="img"><img src="../img/buttons/bt-utn.png" alt="img"></div>
              <div class="info">
                <div class="info-back">
                  <h3>Click aquí</h3>
                  <p>UTN</p>
                </div>
              </div></a>
          </div><!-- div item  -->
          <div class="ih-item circle colored effect1"><a href="itcr.php">
               <div class="spinner"></div>
              <div class="img"><img src="../img/buttons/bt-tec.png" alt="img"></div>
              <div class="info">
                <div class="info-back">
                  <h3>Click aquí</h3>
                  <p>ITCR</p>
                </div>
              </div></a>
          </div><!-- div item  -->
          <div class="ih-item circle colored effect1"><a href="uned.php">
               <div class="spinner"></div>
              <div class="img"><img src="../img/buttons/bt-uned.png" alt="img"></div>
              <div class="info">
                <div class="info-back">
                  <h3>Click aquí</h3>
                  <p>UNED</p>
                </div>
              </div></a>
          </div><!-- div item  -->
          <div class="ih-item circle colored effect1"><a href="ucr.php">
               <div class="spinner"></div>
              <div class="img"><img src="../img/buttons/btn-ucr.png" alt="img"></div>
              <div class="info">
                <div class="info-back">
                  <h3>Click aquí</h3>
                  <p>UCR</p>
                </div>
              </div></a>
          </div><!-- div item  -->
          <div class="ih-item circle colored effect1"><a href="una.php">
               <div class="spinner"></div>
              <div class="img"><img src="../img/buttons/bt-una.png" alt="img"></div>
              <div class="info">
                <div class="info-back">
                  <h3>Click aquí</h3>
                  <p>UNA</p>
                </div>
              </div></a>
          </div><!-- div item  -->
          </div><!-- div row -->
      <hr>
      <div class="row row-enlaces">
        <div class="col-sm-12">
        <h3>Universidades privadas</h3>
        </div>
        <div class="ih-item circle colored effect1"><a href="cenfotec.php">
             <div class="spinner"></div>
            <div class="img"><img src="../img/buttons/btn-cenfotec.png" alt="img"></div>
            <div class="info">
              <div class="info-back">
                <h3>Click aquí</h3>
                <p>CENFOTEC</p>
              </div>
             </div></a>
        </div><!-- div item  -->
        <div class="ih-item circle colored effect1"><a href="fidelitas.php">
             <div class="spinner"></div>
            <div class="img"><img src="../img/buttons/bt-fidelitas.png" alt="img"></div>
            <div class="info">
              <div class="info-back">
                <h3>Click aquí</h3>
                <p>Fidelitas</p>
              </div>
            </div></a>
        </div><!-- div item  -->
        <div class="ih-item circle colored effect1"><a href="fundepos.php">
             <div class="spinner"></div>
            <div class="img"><img src="../img/buttons/bt-fundepos.png" alt="img"></div>
            <div class="info">
              <div class="info-back">
                <h3>Click aquí</h3>
                <p>FUNDEPOS</p>
              </div>
            </div></a>
        </div><!-- div item  -->
        <div class="ih-item circle colored effect1"><a href="hispanoamericana.php">
               <div class="spinner"></div>
              <div class="img"><img src="../img/buttons/bt-hispanoamericana.png" alt="img"></div>
              <div class="info">
                <div class="info-back">
                  <h3>Click aquí</h3>
                  <p>HISPANO</p>
                </div>
              </div></a>         
          </div><!-- div item  -->
          <div class="ih-item circle colored effect1"><a href="creativa.php">
               <div class="spinner"></div>
              <div class="img"><img src="../img/buttons/bt-creativa.png" alt="img"></div>
              <div class="info">
                <div class="info-back">
                  <h3>Click aquí</h3>
                  <p>UCreativa</p>
                </div>
              </div></a>
          </div><!-- div item  -->
          <div class="ih-item circle colored effect1"><a href="ucentral.php">
               <div class="spinner"></div>
              <div class="img"><img src="../img/buttons/bt-ucentral.png" alt="img"></div>
              <div class="info">
                <div class="info-back">
                  <h3>Click aquí</h3>
                  <p>UCentral</p>
                </div>
              </div></a>         
          </div><!-- div item  -->
          <div class="ih-item circle colored effect1"><a href="uveritas.php">
               <div class="spinner"></div>
              <div class="img"><img src="../img/buttons/bt-veritas.png" alt="img"></div>
              <div class="info">
                <div class="info-back">
                  <h3>Click aquí</h3>
                  <p>Veritas</p>
                </div>
              </div></a>
          </div><!-- div item  -->
          <div class="ih-item circle colored effect1"><a href="san-jose.php">
               <div class="spinner"></div>
              <div class="img"><img src="../img/buttons/bt-usj.png" alt="img"></div>
              <div class="info">
                <div class="info-back">
                  <h3>Click aquí</h3>
                  <p>San José</p>
                </div>
              </div></a>
          </div><!-- div item  -->
          <div class="ih-item circle colored effect1"><a href="isaac-newton.php">
               <div class="spinner"></div>
              <div class="img"><img src="../img/buttons/bt-uin.png" alt="img"></div>
              <div class="info">
                <div class="info-back">
                  <h3>Click aquí</h3>
                  <p>Isaac Newton</p>
                </div>
              </div></a>
          </div><!-- div item  -->
          <div class="ih-item circle colored effect1"><a href="earth.php">
          <div class="spinner"></div>
              <div class="img"><img src="../img/buttons/bt-earth.png" alt="img"></div>
              <div class="info">
                <div class="info-back">
                  <h3>Click aquí</h3>
                  <p>EARTH</p>
                </div>
              </div></a>         
          </div><!-- div item  -->
          <div class="ih-item circle colored effect1"><a href="uisil.php">
               <div class="spinner"></div>
              <div class="img"><img src="../img/buttons/bt-uisil.png" alt="img"></div>
              <div class="info">
                <div class="info-back">
                  <h3>Click aquí</h3>
                  <p>UISIL</p>
                </div>
              </div></a>         
          </div><!-- div item  -->
          <div class="ih-item circle colored effect1"><a href="uaca.php">
               <div class="spinner"></div>
              <div class="img"><img src="../img/buttons/bt-uaca.png" alt="img"></div>
              <div class="info">
                <div class="info-back">
                  <h3>Click aquí</h3>
                  <p>UACA</p>
                </div>
              </div></a>
          </div><!-- div item  -->
          <div class="ih-item circle colored effect1"><a href="upi.php">
              <div class="spinner"></div>
              <div class="img"><img src="../img/buttons/bt-upi.png" alt="img"></div>
              <div class="info">
                <div class="info-back">
                  <h3>Click aquí</h3>
                  <p>UPI</p>
                </div>
              </div></a>
        </div><!-- div item  -->
        <div class="ih-item circle colored effect1"><a href="ulatina.php">
              <div class="spinner"></div>
             <div class="img"><img src="../img/buttons/bt-ulatina.png" alt="img"></div>
             <div class="info">
               <div class="info-back">
                 <h3>Click aquí</h3>
                 <p>ULatina</p>
               </div>
             </div></a>
         </div><!-- div item  -->
         <div class="ih-item circle colored effect1"><a href="uam.php">
            <div class="spinner"></div>
            <div class="img"><img src="../img/buttons/bt-uam.png" alt="img"></div>
            <!-- <div class="img"><img class="img-enlace" src="../img/buttons/bt-uam.png" alt="img"></div> -->
            <div class="info">
                  <div class="info-back">
                    <h3>Click aquí</h3>
                    <p>UAM</p>
                  </div>
            </div></a>
        </div><!-- div item  -->
        <div class="ih-item circle colored effect1"><a href="ucimed.php">
            <div class="spinner"></div>
            <div class="img"><img src="../img/buttons/bt-ucimed.png" alt="img"></div>
            <!-- <div class="img"><img class="img-enlace" src="../img/buttons/bt-uam.png" alt="img"></div> -->
            <div class="info">
                  <div class="info-back">
                    <h3>Click aquí</h3>
                    <p>UCIMED</p>
                  </div>
            </div></a>
        </div><!-- div item  -->
        <div class="ih-item circle colored effect1"><a href="lead.php">
            <div class="spinner"></div>
            <div class="img"><img src="../img/buttons/bt-lead.png" alt="img"></div>
            <!-- <div class="img"><img class="img-enlace" src="../img/buttons/bt-uam.png" alt="img"></div> -->
            <div class="info">
                  <div class="info-back">
                    <h3>Click aquí</h3>
                    <p>LEAD</p>
                  </div>
            </div></a>
        </div><!-- div item  -->
        <div class="ih-item circle colored effect1"><a href="ucatolica.php">
               <div class="spinner"></div>
              <div class="img"><img src="../img/buttons/bt-catolica.png" alt="img"></div>
              <div class="info">
                <div class="info-back">
                  <h3>Click aquí</h3>
                  <p>Católica</p>
                </div>
              </div></a>
          </div><!-- div item  -->
          
          <div class="ih-item circle colored effect1"><a href="uia.php">
               <div class="spinner"></div>
              <div class="img"><img src="../img/buttons/bt-uia.png" alt="img"></div>
              <div class="info">
                <div class="info-back">
                  <h3>Click aquí</h3>
                  <p>UIA</p>
                </div>
              </div></a>
          </div><!-- div item  -->
          <div class="ih-item circle colored effect1"><a href="unibe.php">
          <div class="spinner"></div>
          <div class="img"><img src="../img/buttons/bt-unibe.png" alt="img"></div>
          <div class="info">
              <div class="info-back">
                  <h3>Click aquí</h3>
                  <p>UNIBE</p>
              </div>
          </div></a>
        </div><!-- div item  -->
        <div class="ih-item circle colored effect1"><a href="uca.php">
          <div class="spinner"></div>
          <div class="img"><img src="../img/buttons/bt-uca.png" alt="img"></div>
          <div class="info">
              <div class="info-back">
                  <h3>Click aquí</h3>
                  <p>UCA</p>
              </div>
          </div></a>
        </div><!-- div item  -->
     </div>  <!-- cierra row enlaces -->
     <hr>
      <div class="row row-enlaces">
        <div class="col-sm-12">
        <h3>Parauniversitarias</h3>
        </div>
        <div class="ih-item circle colored effect1"><a href="covao.php">
        <div class="spinner"></div>
        <div class="img"><img src="../img/buttons/bt-covao.png" alt="img"></div>
        <div class="info">
          <div class="info-back">
            <h3>Click aquí</h3>
            <p>COVAO</p>
          </div>
        </div></a>
      </div>
      <div class="ih-item circle colored effect1"><a href="etai.php">
          <div class="spinner"></div>
          <div class="img"><img src="../img/buttons/bt-etai.png" alt="img"></div>
          <div class="info">
            <div class="info-back">
                  <h3>Click aquí</h3>
                  <p>ETAI</p>
            </div>
          </div></a>
      </div><!-- div item  -->
      <div class="ih-item circle colored effect1"><a href="cidep.php">
          <div class="spinner"></div>
          <div class="img"><img src="../img/buttons/bt-cidep.png" alt="img"></div>
          <div class="info">
            <div class="info-back">
                  <h3>Click aquí</h3>
                  <p>CIDEP</p>
            </div>
          </div></a>
      </div><!-- div item  -->
      <div class="ih-item circle colored effect1"><a href="ina.php">
            <div class="spinner"></div>
              <div class="img"><img src="../img/buttons/bt-ina.png" alt="img"></div>
              <div class="info">
              <div class="info-back">
                  <h3>Click aquí</h3>
                  <p>INA</p>
              </div>
            </div></a>
        </div> <!-- div item  -->
        <div class="ih-item circle colored effect1"><a href="cun-limon.php">
            <div class="spinner"></div>
              <div class="img"><img src="../img/buttons/bt-cul.png" alt="img"></div>
              <div class="info">
              <div class="info-back">
                  <h3>Click aquí</h3>
                  <p>CUN Limón</p>
              </div>
            </div></a>
        </div> <!-- div item  -->
        <div class="ih-item circle colored effect1"><a href="cuc.php">
            <div class="spinner"></div>
              <div class="img"><img src="../img/buttons/bt-cuc.png" alt="img"></div>
              <div class="info">
              <div class="info-back">
                  <h3>Click aquí</h3>
                  <p>CUC</p>
              </div>
            </div></a>
        </div> <!-- div item  -->
        </div>  <!-- cierra row enlaces -->
     <hr>
      <div class="row row-enlaces">
        <div class="col-sm-12">
        <h3>Instituciones de interés y utilidad</h3>
        </div>
        <div class="ih-item circle colored effect1">
        <a href="conape.php">
          <div class="spinner"></div>
          <div class="img"><img class="img-enlace" src="../img/buttons/btn-conape.png" alt="img"></div>
          <div class="info">
            <div class="info-back">
               <h3>Click aquí</h3>
               <p>CONAPE</p>
            </div>
          </div></a>
      </div><!-- div item  -->
      <div class="ih-item circle colored effect1">
        <a href="sinaes.php">
          <div class="spinner"></div>
          <div class="img"><img class="img-enlace" src="../img/buttons/bt-sinaes.png" alt="img"></div>
          <div class="info">
            <div class="info-back">
               <h3>Click aquí</h3>
               <p>SINAES</p>
            </div>
          </div></a>
      </div><!-- div item  -->
      <div class="ih-item circle colored effect1"><a href="universidadescr.php">
        <div class="spinner"></div>
          <div class="img"><img src="../img/buttons/bt-universidadescr.png" alt="img"></div>
          <div class="info">
          <div class="info-back">
              <h3>Click aquí</h3>
              <p>Univer_CR</p>
          </div>
        </div></a>
      </div><!-- div item  -->
      <div class="ih-item circle colored effect1"><a href="infoues.php">
        <div class="spinner"></div>
          <div class="img"><img src="../img/buttons/btn-infoues.png" alt="img"></div>
          <div class="info">
          <div class="info-back">
              <h3>Click aquí</h3>
              <p>INFOUES</p>
          </div>
        </div></a>
      </div><!-- div item  -->

        </div>  <!-- cierra row enlaces -->

  </div> <!-- cierra div full -->

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
