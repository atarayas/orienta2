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
      <h2 class="mt-4 mb-3 mt-top">Contáctenos</h2>

      <ol class="breadcrumb top">
        <li class="breadcrumb-item">
          <a href="principal.php">Inicio</a>
        </li>
        <li class="breadcrumb-item active">Contáctenos</li>
      </ol>
      <div class="mb-4" id="accordion" role="tablist" aria-multiselectable="true">
        <!-- Oficinas centrales -->
        <div class="card">
          <div class="card-header header-contactenos" role="tab" id="headingZero">
            <h5 class="mb-0">
              <a data-toggle="collapse" href="#collapseZero" aria-expanded="true" aria-controls="collapseZero">Oficinas centrales</a>
            </h5>
          </div>
          <div id="collapseZero" class="collapse show" data-parent="#accordion" role="tabpanel" aria-labelledby="headingZero">
            <div class="card-body body-contactenos">
              <div class="table-responsive">
                <table class="table table-bordered table-sm">
                   <thead class="thead-contactenos">
                     <tr>
                       <th>Teléfono</th>
                       <th>Correo electrónico</th>
                     </tr>
                   </thead>
                   <tbody>
                     <tr>
                       <td><strong>22567011</strong> - Extensiones: 2307, 2350, 2352, 2353, 2375</td>
                       <td><a class="small" href="mailto:orientacioneducativavocacional@mep.go.cr">orientacioneducativavocacional@mep.go.cr</a></td>
                     </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- Alajuela -->
        <div class="card">
          <div class="card-header header-contactenos"role="tab" id="headingOne">
            <h5 class="mb-0">
              <a class="collapsed" data-toggle="collapse" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">Alajuela</a>
            </h5>
          </div>
          <div id="collapseOne" class="collapse" data-parent="#accordion" role="tabpanel" aria-labelledby="headingOne">
            <div class="card-body body-contactenos">
              <div class="table-responsive">
                <table class="table table-bordered table-sm">
                   <thead class="thead-contactenos">
                     <tr>
                       <th>Dirección Regional</th>
                       <th>Teléfono(s)</th>
                       <th>Correo electrónico</th>
                     </tr>
                   </thead>
                   <tbody>
                     <tr>
                       <td>Alajuela</td>
                       <td>2443-3095</td>
                       <td><a href="mailto:catalina.garcia.bolanos@mep.go.cr">catalina.garcia.bolanos@mep.go.cr</a></td>
                     </tr>
                     <tr>
                       <td>San Carlos</td>
                       <td>2460-3899</td>
                       <td><a href="mailto:anabelle.rojas.arce@mep.go.cr">anabelle.rojas.arce@mep.go.cr</a></td>
                     </tr>
                     <tr>
                       <td>Norte Norte</td>
                       <td>2470-0534 / 2470-0067</td>
                       <td><a href="mailto:ilsia.meza.palacios@mep.go.cr">ilsia.meza.palacios@mep.go.cr</a></td>
                     </tr>
                     <tr>
                       <td>Occidente</td>
                       <td>2445-3145 / 2447-1963</td>
                       <td><a href="mailto:carlos.conejo.bogantes@mep.go.cr">carlos.conejo.bogantes@mep.go.cr</a><br><a href="mailto:gloriana.cordoba.soto@mep.go.cr">gloriana.cordoba.soto@mep.go.cr</a></td>
                     </tr>
                  </tbody>
                </table>
              </div>
             </div>
           </div>
        </div>
        <!-- Cartago -->
        <div class="card">
          <div class="card-header header-contactenos"role="tab" id="headingTwo">
            <h5 class="mb-0">
              <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Cartago</a>
            </h5>
          </div>
          <div id="collapseTwo" class="collapse" data-parent="#accordion" role="tabpanel" aria-labelledby="headingTwo">
            <div class="card-body body-contactenos">
              <div class="table-responsive">
                <table class="table table-bordered table-sm">
                   <thead class="thead-contactenos">
                     <tr>
                       <th>Dirección Regional</th>
                       <th>Teléfono(s)</th>
                       <th>Correo electrónico</th>
                     </tr>
                   </thead>
                   <tbody>
                     <tr>
                       <td>Cartago</td>
                       <td>2591-2792 / 25912786</td>
                       <td>
                         <a href="mailto:oswaldo.trejos.granados@mep.go.cr">oswaldo.trejos.granados@mep.go.cr</a><br>
                         <a href="mailto:manuel.brenes.zamora@mep.go.cr">manuel.brenes.zamora@mep.go.cr</a>
                       </td>
                     </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- Guanacaste -->
        <div class="card">
          <div class="card-header header-contactenos"role="tab" id="headingThree">
            <h5 class="mb-0">
              <a class="collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Guanacaste</a>
            </h5>
          </div>
          <div id="collapseThree" class="collapse" data-parent="#accordion" role="tabpanel" aria-labelledby="headingThree">
            <div class="card-body body-contactenos">
              <div class="table-responsive">
                <table class="table table-bordered table-sm">
                   <thead class="thead-contactenos">
                     <tr>
                       <th>Dirección Regional</th>
                       <th>Teléfono</th>
                       <th>Correo electrónico</th>
                     </tr>
                   </thead>
                   <tbody>
                     <tr>
                       <td>Cañas</td>
                       <td>2669-2932     2669-3520</td>
                       <td><a href="mailto:elber.peña.angulo@mep.go.cr">elber.peña.angulo@mep.go.cr</a></td>
                     </tr>
                     <tr>
                       <td>Liberia</td>
                       <td>2666-5255 / 2666-5157</td>
                       <td><a href="mailto:luis.mora.vega@mep.go.cr">luis.mora.vega@mep.go.cr</a></td>
                     </tr>
                     <tr>
                       <td>Nicoya</td>
                       <td>2686-5137</td>
                       <td><a href="mailto:rita.arroyo.villegas@mep.go.cr">rita.arroyo.villegas@mep.go.cr</a></td>
                     </tr>
                     <tr>
                       <td>Santa Cruz</td>
                       <td>2680-0655</td>
                       <td><a href="mailto:roy.gomez.villafuerte@mep.go.cr">roy.gomez.villafuerte@mep.go.cr</a></td>
                     </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- Heredia -->
        <div class="card">
          <div class="card-header header-contactenos"role="tab" id="headingFour">
            <h5 class="mb-0">
              <a class="collapsed" data-toggle="collapse" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Heredia</a>
            </h5>
          </div>
          <div id="collapseFour" class="collapse" data-parent="#accordion" role="tabpanel" aria-labelledby="headingFour">
            <div class="card-body body-contactenos">
              <div class="table-responsive">
                <table class="table table-bordered table-sm">
                   <thead class="thead-contactenos">
                     <tr>
                       <th>Dirección Regional</th>
                       <th>Teléfono</th>
                       <th>Correo electrónico</th>
                     </tr>
                   </thead>
                   <tbody>
                     <tr>
                       <tr>
                         <td>Heredia</td>
                         <td> 2238-0596</td>
                         <td><a href="mailto:xinia1.sanchez.jimenez@mep.go.cr">xinia1.sanchez.jimenez@mep.go.cr</a></td>
                       </tr>
                       <td>Sarapiquí</td>
                       <td>2766-5823 / 2766-5821</td>
                       <td><a href="mailto:ana.arroyo.sosa@mep.go.cr">ana.arroyo.sosa@mep.go.cr</a></td>
                     </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

        <!-- San José -->
        <div class="card">
          <div class="card-header header-contactenos"role="tab" id="headingFive">
            <h5 class="mb-0">
              <a class="collapsed" data-toggle="collapse" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">San José</a>
            </h5>
          </div>
          <div id="collapseFive" class="collapse" data-parent="#accordion" role="tabpanel" aria-labelledby="headingFive">
            <div class="card-body body-contactenos">
              <div class="table-responsive">
                <table class="table table-bordered table-sm">
                   <thead class="thead-contactenos">
                     <tr>
                       <th>Dirección Regional</th>
                       <th>Teléfono</th>
                       <th>Correo electrónico</th>
                     </tr>
                   </thead>
                   <tbody>
                     <tr>
                       <td>Desamparados</td>
                       <td>2219-1752 / 2219-6330</td>
                       <td><a href="mailto:ruth.arce.hernandez@mep.go.cr">ruth.arce.hernandez@mep.go.cr</a></td>
                     </tr>
                     <tr>
                       <td>San José Central</td>
                       <td>2255-1257 / 2257-4303</td>
                       <td><a href="mailto:manuel.rodriguez.meza@mep.go.cr">manuel.rodriguez.meza@mep.go.cr</a></td>
                     </tr>
                     <tr>
                       <td>San José Norte</td>
                       <td>2253-3606 / 2253-2253</td>
                       <td><a href="mailto:virginia.cascante.morales@mep.go.cr">virginia.cascante.morales@mep.go.cr</a></td>
                     </tr>
                     <tr>
                       <td>San José Oeste</td>
                       <td>2223-5933 / 2223-5928</td>
                       <td><a href="mailto:marta.caravaca.ulloa@mep.go.cr">marta.caravaca.ulloa@mep.go.cr</a></td>
                     </tr>
                     <tr>
                       <td>Los Santos</td>
                       <td>2546-2646</td>
                       <td><a href="mailto:allan.cordero.brenes@mep.go.cr">allan.cordero.brenes@mep.go.cr</a></td>
                     </tr>
                     <tr>
                       <td>Pérez Zeledón</td>
                       <td>2771-3417</td>
                       <td><a href="mailto:seidy.elizondo.marin@mep.go.cr ">seidy.elizondo.marin@mep.go.cr </a></td>
                     </tr>
                     <tr>
                       <td>Puriscal</td>
                       <td>2416-5218</td>
                       <td><a href="mailto:wilson.guzman.jimenez@mep.go.cr ">wilson.guzman.jimenez@mep.go.cr </a></td>
                     </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- Puntarenas -->
        <div class="card">
          <div class="card-header header-contactenos" role="tab" id="headingSix">
            <h5 class="mb-0">
              <a class="collapsed" data-toggle="collapse" href="#collapseSix" aria-expanded="false" aria-controls="collapseThree">Puntarenas</a>
            </h5>
          </div>
          <div id="collapseSix" class="collapse" data-parent="#accordion" role="tabpanel" aria-labelledby="headingSix">
            <div class="card-body body-contactenos">
              <div class="table-responsive">
                <table class="table table-bordered table-sm">
                   <thead class="thead-contactenos">
                     <tr>
                       <th>Dirección Regional</th>
                       <th>Teléfono</th>
                       <th>Correo electrónico</th>
                     </tr>
                   </thead>
                   <tbody>
                     <tr>
                       <td>Aguirre</td>
                       <td>2777-0412 / 2777-1750 </td>
                       <td><a href="mailto:yalile.umana.castillo@mep.go.cr">yalile.umana.castillo@mep.go.cr</a></td>
                     </tr>
                     <tr>
                       <td>Coto</td>
                       <td>2783-2904</td>
                       <td><a href="mailto:kattia.barrantes.sanchez@mep.go.cr">kattia.barrantes.sanchez@mep.go.cr</a></td>
                     </tr>
                     <tr>
                       <td>Grande de Térraba</td>
                       <td>2730-5184</td>
                       <td><a href="mailto:edith.rodriguez.vargas@mep.go.cr ">edith.rodriguez.vargas@mep.go.cr </a></td>
                     </tr>
                     <tr>
                       <td>Puntarenas</td>
                       <td>2663-7268 / 2663-7267</td>
                       <td>
                           <a href="mailto:susana.zamora.chavez@mep.go.cr">susana.zamora.chavez@mep.go.cr</a>
                       </td>
                     </tr>
                     <tr>
                       <td>Peninsular</td>
                       <td>2641-0490 / 2641-0345</td>
                       <td><a href="mailto:jose.jimenez.oviedo@mep.go.cr">jose.jimenez.oviedo@mep.go.cr</a></td>
                     </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- Limón -->
        <div class="card">
          <div class="card-header header-contactenos"role="tab" id="headingSeven">
            <h5 class="mb-0">
              <a class="collapsed" data-toggle="collapse" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">Limón</a>
            </h5>
          </div>
          <div id="collapseSeven" class="collapse" data-parent="#accordion" role="tabpanel" aria-labelledby="headingSeven">
            <div class="card-body body-contactenos">
              <div class="table-responsive">
                <table class="table table-bordered table-sm">
                   <thead class="thead-contactenos">
                     <tr>
                       <th>Dirección Regional</th>
                       <th>Teléfono</th>
                       <th>Correo electrónico</th>
                     </tr>
                   </thead>
                   <tbody>
                     <tr>
                       <td>Guápiles</td>
                       <td>2710- 4548 / 2710-6756</td>
                       <td><a href="mailto:sandra.garro.montoya@mep.go.cr">sandra.garro.montoya@mep.go.cr</a></td>
                     </tr>
                     <tr>
                       <td>Limón</td>
                       <td>2758-1878 / 2758-2005</td>
                       <td><a href="mailto:angela.allen.waugh@mep.go.cr">angela.allen.waugh@mep.go.cr</a></td>
                     </tr>
                     <tr>
                       <td>Sulá</td>
                       <td>2751-0179 / 2751-0219</td>
                       <td><a href="mailto:elizabeth.paez.lupario@mep.go.cr">elizabeth.paez.lupario@mep.go.cr</a></td>
                     </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>      <!-- fin del acordeón -->
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
