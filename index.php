<?php

?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- , shrink-to-fit=no"> -->
      <link rel="stylesheet" href="vendor/bootstrap-4.1/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js" charset="utf-8"></script>
      <script src="lib/popper.js" charset="utf-8"></script>
      <script src="vendor/jquery-3.3.1/jquery-3.3.1.min.js" charset="utf-8"></script>
      <script src="vendor/bootstrap-4.1/js/bootstrap.min.js" charset="utf-8"></script>
      <script src="vendor/dist/jquery.validate.js"></script>
      <script src="vendor/dist/additional-methods.min.js"></script>
      <script src="js/filterselect.js"></script>
      <script src="js/default.js" charset="utf-8"></script>
      <link rel="stylesheet" href="css/default.css">
      <title>Registro</title>
</head>

<body>

  <div id="main">
    <!-- <div class="container-fluid d-inline-flex"> -->

    <div id="inside-main" class="container d-inline-flex">
        <div class="columna col-left">
          <img src="img/mascota-1.png"  id="mascota" class="img-fluid mascota" alt="imagen de la mascota">
          <div id="mascotaInfo"></div>
        </div>
        <div class="columna col-right flex-column">
          <img id="imgBienv" class="img-fluid img-bienvenida" src="img/img-bienvenidos-2.png" alt="imagen de botón para iniciar">
          <img class="button-reg img-fluid img-button" src="img/img-inicio.png" alt="imagen de botón para iniciar" id="btnIniciar">
          <img class="button-reg img-fluid img-button" src="img/img-inscribete.png" alt="Imagen de bienvenida" id="btnInscribir" name="btnInscribir">
          <img class="img-fluid img-button btn-primaria" src="img/img-primaria.png" alt="Imagen botón para estudiantes de primaria" id="btnPrimaria">
        </div>
    </div>

    <!-- SECCION DE MODALES -->

    <!-- The Modal  solicitud cédula ambas opciones y de inscripción realizada-->
    <div class="modal modal-borders bd-example-modal-lg fade" id="modalCedula" data-keyboard="false">
         <div class="modal-dialog modal-lg">
           <div class="modal-content">
             <!-- Modal Header -->
             <div class="modal-header">
               <div class="float-left">
              <h1 class="modal-title">Inicia</h1>
               </div>
               <div class="float-right">
                 <img  id="logo-orienta2" src="img/orientado2.png" alt="imagen de logo">
                 <button type="button" class="close" data-dismiss="modal">&times;</button>
               </div>

             </div>
             <!-- Modal body -->
             <div class="modal-body registra">

               <form id="form-ingresar" name="verification">
                    <div class="form-inline" id="row-hide">
                       <label for="cedini"><h3>Digita tú numero de identificación:&nbsp;&nbsp;</label></h3>
                       <input class="form-control form-control-sm" type="text" id="cedini" name="cedini" required><br>
                   </div>
                   <div id="alert-cedula" class="alert alert-aviso alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <div id='s-valida'></div>
                     <p id="texto-cedula" class="small"><strong>Importante! </strong></p>
                    <ul class="small">
                         <li><strong>Cédula costarricense: </strong>la cantidad de digitos de la identificación debe ser de 9 dígitos. Ejemplo 101230456</li>
                         <li><strong>Cédula de extranjeros: </strong>la cantidad de caracteres de la identificación debe ser máximo 12 dígitos. Ejemplo 901230456789 o C01234567891</li>
                    </ul>
                  </div>
                  <div class="loading"></div>
               </form>
              <img id="img-mascota" class="float-right" src="img/mascota-reg.png" alt="imagen de la mascota">
            </div>
             <!-- Modal footer -->
             <div class="modal-footer">
                <button type="button" class="button-reg btn btn-form" id="btnInscribir2" name="btnInscribir2">Inscríbete</button>
               <button type="button" class="btn btn-form" id="btnConsultar" name="button-validar">Enviar</button>
             </div>
          </div>
         </div>
    </div>
<!-- fin del modal solicitud cédula -->

</div>
<!-- fin del main -->

<!-- Modal de registro -->
<div class="container" id="container-registra">
    <!-- <div class="modal fade" id="RegModal" data-keyboard="false" data-backdrop="static"> -->
    <div class="modal fade modal-borders" id="RegModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true" data-keyboard="false">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <form id="form-registra" name="registration">
            <div class="modal-header">
               <h1 class="modal-title text-center" id="exampleModalLongTitle">Registro</h1>
               <div class="float-right">
                 <img  src="img/orientado2.png" alt="imagen de logo">
                 <button type="button" class="close" data-dismiss="modal">&times;</button>
               </div>
            </div>
            <!-- Modal body -->
            <div class="modal-body registra">
                <div class="form-group row">
                  <label for="cedula" class="col-sm-3 col-form-label col-form-label-sm">Cédula</label>
                  <div class="col-sm-5"><input type="text" class="form-control form-control-sm" id="cedula_user" name="cedula_user"></div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label col-form-label-sm">Sexo</label>
                    <div class="col-sm-5">
                      <select class="custom-select item-reg" name="sexo">
                          <option value="default" selected>Seleccione...</option>
                          <option value="1">Mujer</option>
                          <option value="2">Hombre</option>
                      </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="fecha_nacimiento" class="col-sm-3 col-form-label col-form-label-sm">Fecha de nacimiento</label>
                    <div class="col-sm-5"><input type="date" class="form-control form-control-sm item-reg" id="fecha_nacimiento" name="fecha_nacimiento"></div>
                </div>
                <div class="form-group row">
                        <label class="col-sm-3 col-form-label col-form-label-sm">Tipo de usuario</label>
                        <div class="col-sm-5">
                          <select class="custom-select item-reg" name="typeuser" id="typeuser">
                              <option value="default" selected>Seleccione...</option>
                              <option value="1">Estudiante</option>
                              <option value="2">Familia</option>
                              <option value="3">Profesional en Orientación</option>
                              <option value="4">Profesorado</option>
                              <option value="5">Otro</option>
                          </select>
                        </div>
                </div>
                <div class="form-group row">
                  <label for="centro" class="col-sm-3 col-form-label col-form-label-sm">Centro Educativo</label>
                  <div class="col-sm-5"><input type="text" class="form-control form-control-sm" id="centro" name="centro"></div>
                </div>
                <div class="form-group row">
                        <label for="modalidad" class="col-sm-3 col-form-label col-form-label-sm">Modalidad de estudio</label>
                        <div class="col-sm-5">
                          <select class="custom-select item-reg" name="modalidad">
                            <option value="default" selected>--- Seleccione la modalidad ---</option>
                            <option value="1">Educación formal diurna</option>
                            <option value="2">Educación formal nocturna</option>
                            <option value="3">Educación formal técnica diurna </option>
                            <option value="4">Educación formal técnica nocturna</option>
                            <option value="5">Colegio Nacional Virtual MTS</option>
                            <option value="6">Bachillerato por Madurez - Educación abierta</option>
                            <option value="7">Educación Diversificada a Distancia - Educación Abierta</option>
                            <option value="8">Otro</option>
                          </select>
                        </div>
                </div>
                <div class="form-group row">
                        <label for="provincia" class="col-sm-3 col-form-label col-form-label-sm">Provincia</label>
                        <div class="col-sm-5">
                          <!-- <select class='list filterSelect custom-select item-reg' data-target='selectCanton' id='selectProvincia' name="provincia"></select> -->
                          <select class='list filterSelect custom-select item-reg' data-target='select-canton' id='selectProvincia' name="provincia">
                          </select>
                        </div>
                </div>
                <div class="form-group row" id="selectCanton">
                    <label for="canton" class="col-sm-3 col-form-label col-form-label-sm">Cantón</label>
                    <div class="col-sm-5">
                      <!-- <select class='list filterSelect custom-select' id='selectCanton' data-allowempty name="canton"></select> -->
                      <select class='list filterSelect custom-select' id='select-canton' data-allowempty name="canton">
                      </select>
                    </div>
                </div>
                <div class="form-group form-imgbottom row">
                 <div class="col-sm-12">
                    <img class="float-right" src="img/mascota-reg.png" alt="imagen de la mascota">
                 </div>
               </div>
               <div class="loading"></div>
          </div>
        <!-- FIN modal body -->
        <!-- Modal footer -->
        <div class="modal-footer">
            <p class="small">De acuerdo a lo estipulado por la Ley No. 8968 Protección de la Persona frente al Tratamiento de sus Datos Personales y su Reglamento, la información que proporcione en la inscripción para ingresar a este sitio, será usada exclusivamente para el análisis del comportamiento vocacional, para efectos de la toma de decisiones por parte del Misterio de Educación Pública. Por tanto, no será almacenada, distribuida ni compartida con otras instancias fuera del MEP.</p>
            <button class="btn btn-md btn-form" type="button" id="btnEnviar" name="button-enviar">Enviar</button>
        </div>
        </form>
      </div>
    </div>
   </div>

   <div class="modal fade" id="modalInfo">
       <div class="modal-dialog">
         <div class="modal-content">

           <!-- Modal Header -->
           <div class="modal-header">
             <h4 class="modal-title"></h4>
             <button type="button" class="close" data-dismiss="modal">&times;</button>
           </div>

           <!-- Modal body -->
           <div class="modal-body">
             Modal body..
           </div>

           <!-- Modal footer -->
           <!-- <div class="modal-footer">
             <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
           </div> -->

         </div>
       </div>
     </div>

  </div>
  <!-- fin div del container -->
</body>
</html>
