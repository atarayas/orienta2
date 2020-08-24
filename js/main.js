// de principal.php
$(document).ready(function() {
  // console.log("$(window).height()"+$(window).height());
  saveSession();
  callLogos();
  callInfoFooter();
  callMenu();
  modals();
});

function saveSession() {
    var objUser = tipo;
    sessionStorage.setItem("id", objUser );
};

function modals() {
    $("#myModal1").on('shown.bs.modal', function (event) {
      console.log($(".modal-header").height());
    });
}
function callLogos() {
  // carga los logos del header left
  instLogo = $('<img>');
  srcF ="../img/img-logo-ov.png";
  $('#instLogo').attr("src",srcF)
  $('#instLogo').addClass("img-responsive");
  $('#instLogo').addClass("img-logo");
  mepLogo = $('<img>');
  srcF ="../img/img-logo-mep.png";
  $('#mepLogo').attr("src",srcF)
  $('#mepLogo').addClass("img-responsive");
  $('#mepLogo').addClass("img-logo");
  $("a.navbar-brand").attr("href","principal.php")
}

function callInfoFooter() {
  // incluye el texto e imagen del foter
  imgLeft = $('<img>');
  srcF ="../img/img-title-left.png";
  $('#imgLeft').attr("src",srcF)
  $('#imgLeft').addClass("img-responsive");
  $('#imgLeft').addClass("img-title");
  imgRight = $('<img>');
  srcF ="../img/img-title-right.png";
  $('#imgRight').attr("src",srcF)
  $('#imgRight').addClass("img-responsive");
  $('#imgRight').addClass("img-title");
  $('#imgLeft').addClass("img-title");
  $("#text-footer").html("©2018 Ministerio de Educacion Pública de Costa Rica. Todos los derechos reservados.<br>Elaborado por DIG y DRTE, en colaboración con la OEI")
  $("#sec-footer").html("<span><img class='img-footer' src='../img/img-logo-oei.jpg' alt='imagen del logo de la OEI'></span>");
  $(window).resize(function(){
      if ($(window).width() > 700){
        $(".text-footer").html("©2018 Ministerio de Educacion Pública de Costa Rica. Todos los derechos reservados.<br>Elaborado por DIG y DRTE, en colaboración con la OEI")
      }
      if (($(window).width() > 334) && ($(window).width() < 700)){
          $(".text-footer").html("©2018 Ministerio de Educacion Pública de Costa Rica.<br>Todos los derechos reservados.<br>Elaborado por DIG y DRTE, en colaboración con la OEI")
      }
      $(".text-footer").html("©2018 Ministerio de Educacion Pública de Costa Rica.<br>Todos los derechos reservados.<br>Elaborado por DIG y DRTE, en colaboración con la OEI")
      if ($(window).width() < 335){
      }
  });
}

function callMenu() {
  // crea las opciones del menú
  var usuario = cargarUsuario();
  var texto = "<li class='nav-item'><a class='nav-link' href='acerca-de.php'>Acerca de</a></li><li class='nav-item dropdown'><a class='nav-link dropdown-toggle' href='#' id='navbarDropdownElementos' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>¿Qué debes conocer?</a><div class='dropdown-menu dropdown-menu-right' aria-labelledby='navbarDropdownElementos'><a class='dropdown-item' href='intereses.php'>Intereses y habilidades</a><a class='dropdown-item' href='educacion-tecnica.php'>Educación Técnica</a><a class='dropdown-item' href='carreras.php'>¿Qué puedo estudiar?</a><a class='dropdown-item' href='demanda-laboral.php'>Mercado laboral</a><a class='dropdown-item' href='emprendimiento.php'>¡Emprendimiento! ¿Qué es?</a></div></li>";
  texto +="<li class='nav-item dropdown'><a class='nav-link dropdown-toggle' href='#' id='navbarDropdownFactores' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>Factores que te suman</a><div class='dropdown-menu dropdown-menu-right' aria-labelledby='navbarDropdownFactores'><a class='dropdown-item' href='vida-laboral.php'>Vida laboral</a><a class='dropdown-item' href='idiomas.php'>¡Idiomas! Muy importante</a><a class='dropdown-item' href='financiamiento.php'>Financiamiento</a></div></li><li class='nav-item'><a class='nav-link' href='centros-educativos.php'>Centros Educativos</a></li>";
  texto +="<li class='nav-item dropdown'><a class='nav-link dropdown-toggle' href='#' id='navbarDropdownPortfolio' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>Galerías</a><div class='dropdown-menu dropdown-menu-right' aria-labelledby='navbarDropdownPortfolio'><a class='dropdown-item' href='galeria-1.php'>Actividades realizadas</a><a class='dropdown-item' href='galeria-2.php'>Capacitación</a><a class='dropdown-item' href='galeria-3.php'>Encuentros</a></div></li><li class='nav-item'><a class='nav-link' href='contactenos.php'>Contáctenos</a></li><li class='nav-item dropdown'><a class='nav-link dropdown-toggle' href='#' id='navbarDropdownUsuario' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'><i class='fas fa-cog'></i></i></a><div class='dropdown-menu dropdown-menu-right' aria-labelledby='navbarDropdownUsuario'><h5 class='dropdown-header'>";
  texto += "<i class='fa fa-user'></i>"+usuario+"</h5></a><div class='dropdown-divider'></div><a class='dropdown-item' href='server/destroy_session.php'><i class='fas fa-sign-in-alt'></i> Cerrar sesión</a></div></li>";
  $("#options").html(texto);
}

//Carga el id del usuario desde session
function cargarUsuario() {
  var idUsuario; // Varaible local que almacena el id del usuario
  idUsuario = sessionStorage.getItem("id");  return idUsuario;
};
