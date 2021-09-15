// js de index.php
  var idButton, existe;
  $(document).ready(function () {
      callPopovers();
      setHeight_screen();
      $(window).resize(function(){
        $("#inside-main").css("margin-top", "inherit");
        if($(window).width() <= 450) {
           setHeight_screen();
        }
      });
      fillSelect('provincias');
      fillSelect('cantones');
      $('#RegModal').modal('hide');
      $('#modalCedula').modal('hide');

      $(".button-reg").on("click",iniciaId);
      $("#btnPrimaria").on("click",function(){
        location='main_app/primaria.php';
       });
 });

function callPopovers() {
  $('#mascotaInfo').popover({
    title: "<strong>Mascota</strong>",
    content: "La mascota de este portal, representa justamente esas particularidades que acompaña a toda persona joven en la formulación, exploración y construcción de sus proyectos de vida; entra las que destaca: la curiosidad, la agilidad para el uso de las tecnologías, la habilidad de procesar la información que va encontrando, pero sobre todo la visión de una sociedad que cambia día a día, por lo que se debe prepararse con la mejor información vocacional y ocupacional posible.",
    html: true,
    placement: "right",
    trigger: "hover"
  });
  $("#imgBienv").popover({
    title: "<strong>El portal</strong>",
    content: 'Este portal de información vocacional,  es parte de la disciplina de Orientación  dentro del ámbito educativo, constituyendo un servicio de apoyo especializado que potencia en la población estudiantil el proceso de toma decisiones para afrontar situaciones en el medio escolar, familiar, social y laboral, con un sentido de responsabilidad, productividad y autorrealización, a nivel personal y social.',
    html: true,
    placement: "left",
    trigger: "hover"
  });
}
 function setHeight_screen() {
   if($(window).width() <= 450 && $(window).height() > 460) {
       var margen_tope = ($(window).height() - 450) / 2;
        $("#inside-main").css("margin-top", margen_tope);
      }
  };

function iniciaId(evento) {
    inicia = false;
    idButton = evento.target.id;
    console.log("idButton..."+idButton);
    if(!(Object.keys($("#cedini-error")).length === 0)) {  //eliminar label-error si entró a otra opción
          $("#cedini-error").hide();
     }
    $("#titulo-aviso").hide();
    if($("#modalCedula").is(':visible') && idButton ==="btnInscribir2") {
        $("#btnInscribir2").hide();
        txtHeader="Ahora vamos a inscribirnos!";
        $('.modal-title').text(txtHeader);
        $("#s-valida").hide();
        $("#texto-cedula").html("<h4>Recuerda que es importante:</h4>");
        $("#img-mascota").attr('src','./img/mascota-ok.png')
    }
    if(idButton ==="btnInscribir" || idButton ==="btnInscribir2") {
      $("#btnConsultar").html('Inscribir');
    }
    else {
      $("#img-mascota").attr('src','./img/mascota-reg.png')
      $("#btnConsultar").html('Enviar');
    }

    $("#modalCedula").modal("show");
    // console.log("segundo..."+$("#modalCedula").hasClass('in'));
    $("#modalCedula").on('shown.bs.modal', function (event) {
      if (idButton === "btnInscribir2") {
            $("#btnInscribir2").hide();
      }

      if(idButton ==="btnIniciar") {
        txtHeader= "Inicio";
      }
      else {
        $("#cedini").val('');
        $("#btnInscribir2").hide();
        txtHeader="Inscripción";
        }

        var modal = $(this);
        $("#cedini").val('');
        $("#btnInscribir2").hide();
        $("#s-valida").hide();
        $("#cedini").on( "focus", function () {
           $("#cedini").val('');
        });
        modal.find('.modal-title').text(txtHeader);
        validateInfoRec();
    });
}
    function validateInfoRec( ) {

	  $.validator.addMethod("numErico", function(value, element) {
             return /^[ 0-9]*$/i.test(value);}, "Ingrese números");
        var form = $( "#form-ingresar" );
        $("form").on("submit", function(event) {
              event.preventDefault();
        });
        form.validate({
            rules: {
              cedini : {
                required: true,
                minlength: 9,
                maxlength: 13,
              },
            },
              messages: {
                cedini: {
                  required: 'Este campo es requerido',
                  minlength: 'Este campo debe tener mínimo 9 digitos',
                  maxlength: 'Este campo debe tener máximo 12 digitos'
              },
            }
        });
        $( "#btnConsultar").click(function() {
           if(form.valid()=== true){
              var consCed = $("#cedini").val();
              consultaUser(consCed);
           }
           else {
              console.log("El formulario no es válido");
           }
         });
    }

    function consultaUser(cedu) {

    //Almacena en sessión de webstorage la cedula:
    sessionStorage.setItem("id", cedu);
      var formData = new FormData();
      formData.append("cedula", cedu);
      jQuery.ajax({
                   url: 'main_app/server/login.php',
                   type: 'POST',
                   data: formData,
                   dataType: 'json',
                   cache: false,
                   contentType: false,
                   processData: false,
                   beforeSend:function(){
                    console.log("enviando");
                    loading(true);
                  },
                   success:function() {
                     loading(false);
                   },
      })
      .done(function(respuesta){
        // console.log("!respuesta.error..."+!respuesta.error);
      // if (!respuesta.error) {
        if (respuesta.existe) {
          // en caso de que exista - se inscribe
             if((idButton ==="btnInscribir") ||(idButton ==="btnInscribir2"))
               {
                existe = respuesta.existe;
                callformReg(existe,cedu);
               }
               else
               // puede ingresar porque está inscrito
                  location='main_app/principal.php';
        }
        else {
          // no existe o sea no está inscrito
          console.log("Error");
          if((idButton ==="btnInscribir") ||(idButton ==="btnInscribir2"))
            {
             existe = respuesta.existe;
             callformReg(existe,cedu);
            }
          //revisar si cambio
          if(idButton === "btnIniciar") {
              var texto = "<h3 class='text-center'>El registro: " + cedu + " no existe. Por favor presionar clic al botón Inscríbete o intenta de nuevo <hr></h3>";
              messValida(texto,false)
          }
        }


      })
      .fail(function(resp){
        console.log(resp.responseText);
      })
      .always(function(){
         console.log("complete");
      });
    } //fin de consultaUser
    function loading(muestra) {
      if (muestra){
         $('.loading').html('<div class="d-flex justify-content-center"><img src="img/loader.gif" alt="loading" /></div><div class="d-flex justify-content-center">Un momento, por favor...</div>');
      }
      else {
        $('.loading').html('');
      }
    }

    function messValida(textResult, callPrincipal) {
      $("#s-valida").html(textResult);
      $('#s-valida').slideDown('200');
      if (callPrincipal) {
          setTimeout (function () {
              $('#s-valida').slideUp('slow');
              $("#cedini").val('');
              $("#btnInscribir2").show();
              $("#img-mascota").attr('src','./img/mascota-ok.png');
                location='main_app/principal.php';
          },2000);
      }
      else {
        $("#cedini").val('');
        $("#btnInscribir2").show();
        $("#img-mascota").attr('src','./img/mascota-no-ok.png')
      }
    };

       // LLAMADA del formulario de inscripción
      function callformReg(existReg,ceduReg) {
        if (existReg) {
            var texto = "<h1 class='text-center'>Ya te habías registrado";
            messValida(texto,existReg);
        }
        else {
            $("#modalCedula").modal("hide");
            $("#modalCedula").on('hidden.bs.modal', function () {
              $('#RegModal').modal('show');
              $("#RegModal").on('shown.bs.modal', function () {
                $("#cedula_user").val(ceduReg)
                $("#cedula_user").attr('disabled','disabled');
                $("#selectCanton").hide();
                $("#selectProvincia").change(function(){
                        if (!$("#selectCanton").show()) {
                          $("#selectCanton").show();
                        }
                });
                $('.filterSelect').filterSelect({
                    allowEmpty: true
                });

                    // addmethod --- First argument: Current value.
                    // Second argument: Validated element.
                    // Third argument: Parameters.
                  $.validator.addMethod("valueNotEquals", function(value, element, arg){
                     return arg !== value;}, "Valor no debe ser igual al seleccionado");

                  $.validator.addMethod("numErico", function(value, element) {
                     return /^[ 0-9]*$/i.test(value);}, "Ingrese números");

                  jQuery.validator.addMethod("dateVal", function(value, element) {
                     var now=new Date();
                     if ( !/Invalid|NaN/.test(new Date(value)) ) {
                        return new Date(value) < now;
                     }
                  });
                  jQuery.validator.addMethod("existVal", function(value, element) {
                        return existe;
                  });
                  // var validator = $( "#myform" ).validate();
                  // validator.resetForm();
                var form = $( "#form-registra" );
                    form.validate({
                        rules: {
                          sexo: { valueNotEquals: "default" },
                          typeuser: { valueNotEquals: "default" },
                          modalidad: { valueNotEquals: "default" },
                          provincia: { valueNotEquals: "-1" },
                          fecha_nacimiento: {
                              required: true,
                              dateVal: true,
                          },
                          canton: { valueNotEquals: "-1" },
                        },
                        messages: {
                          sexo: {
                              valueNotEquals: "Por favor selecciona el sexo"
                          },
                          typeuser:{
                              valueNotEquals: "Por favor selecciona el tipo de Usuario"
                          },
                          fecha_nacimiento: {
                              required: "La fecha es requerida",
                              dateVal: "La fecha debe ser menor a la actual"
                          },
                          modalidad:
                                { valueNotEquals: "Selecciona una modalidad" },
                          provincia: {
                              valueNotEquals: "Por favor selecciona una provincia"
                          },
                          canton:  {
                              valueNotEquals: "Por favor selecciona un cantón"
                          },
                        }
                    }); // fin del validate true
                    $( "#btnEnviar" ).click(function() {

                     if(form.valid()=== true){
                        var dataGen = $('select[name=sexo] option:selected').text();
                        var dataTyp = $('select[name=typeuser] option:selected').text();
                        var dataProv = $('select[name=provincia] option:selected').text();
                        var dataMod = $('select[name=modalidad] option:selected').text();
                        var dataCan = $('select[name=canton] option:selected').text();
                        var formData = new FormData();
                        formData.append("cedula",$("#cedula_user").val() );
                        formData.append("centro_educ",$("#centro").val() );
                        formData.append("sexo",dataGen);
                        formData.append("fecha_nacimiento",$("#fecha_nacimiento").val() );
                        formData.append("modalidad",dataMod);
                        formData.append("provincia",dataProv);
                        formData.append("canton",dataCan );
                        formData.append("tipo",dataTyp);
                        $.ajax({
                          url: 'main_app/server/guarda_registro.php',
                          type: 'POST',
                          data: formData,
                          cache: false,
                          contentType: false,
                          processData: false,
                          beforeSend: function(){
                                console.log("En proceso");
                                loading(true);
                          }, success: function(result){
                               console.log("Enviado");
                               loading(false);
                                 endRec($("#cedula_user").val())
                              }, error: function(){
                                    alert("problema...");
                                  }
                        }) //fin del ajax
                        .done(function(){
                             // endRec()
                        })
                     }
                    else {
                          console.log("El formulario no es válido");
                        }
                  });
              });
            });
        } //fin del else
  } //fin de callformReg

  function fillSelect(typeSelect) {
   var url = "";
   var textSelect = "";
   var dropdown;
   if (typeSelect === 'provincias') {
      dropdown = $('#selectProvincia');
      dropdown.empty();
      dropdown.append("<option value='-1' value='default' selected>Seleccione la provincia </option>");
      url = 'data/provincias.json';
   }
   else {
     dropdown = $('#select-canton');
     dropdown.empty();
     dropdown.append("<option value= '-1' value='default' selected>--- Seleccione el cantón ---</option>");
     url = 'data/cantones.json';
   }
       $.getJSON(url, function(data) {
             $.each(data, function (contador, entry) {
                 if (typeSelect === 'provincias') {
                     textSelect = '<option value='+contador+' data-reference='+entry.id+'>'+entry.nombre+'</option>';
                 }
                 else {
                   if (typeSelect === 'cantones') {
                       textSelect = "<option value="+contador+" data-belongsto="+entry.idProvincia+">"+entry.canton+"</option>";
                   }
                 }
                 dropdown.append(textSelect);
             })
         });
 };

  function endRec(idUser) {
    sessionStorage.setItem("id", idUser);
      var formData = new FormData();
      formData.append("cedula", idUser);
      jQuery.ajax({
                   url: 'main_app/server/login_post_inscribe.php',
                   type: 'POST',
                   data: formData,
                   dataType: 'json',
                   cache: false,
                   contentType: false,
                   processData: false,
                   beforeSend:function(){
                      console.log("enviando");
                   },
                   success: function(result){
                      console.log("Enviado");
                      location="./main_app/principal.php"
                   },
                   error: function(result){
                       console.log("problema...");
                  }
      })
  };
