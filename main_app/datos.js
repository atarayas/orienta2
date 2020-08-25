$(document).ready(function () {
    realizaProceso();
});

function realizaProceso(){

const data = new FormData();
 url= 'consulta.php';
 fetch( url)
    .then(function(response) {
        return response.json();
    })
    .then(function(myJson) {
        dibujarTabla (myJson, '#visor');
    })
  }  


  function dibujarTabla (array, visor) {
    console.log(array);
        $(visor).empty();
   
       var limite = array.length, row,
       htmlTable = $(
         "<table  id='tblReportes' class='table table-striped'>" +
         "<thead>" +
         "<tr>" +
           "<th scope='col'>#</th>" +
           "<th class='text-center' scope='col'>Cédula</th>" +
           "<th class='text-center' scope='col'>Sexo</th>" +
           "<th scope='text-center' >Fecha nacimiento</th>" +
           "<th scope='text-center'>Modalidad</th>" +
           "<th scope='text-center'>Provincia</th>" +
             "<th scope='text-center'>Cantón</th>" +
           "<th scope='text-center'>Tipo</th>" +
         "</tr>" +
         "</thead>" +
        //  "<tfoot>" +
        // " <tr>" +
        // "<th scope='col'>#</th>" +
        // "<th>nombre</th>" +
        // "<th>puesto</th>" +
        // "<th class='buscador'>correo</th>" +
        // "<th class='buscador'>teléfono</th>" +
        // "<th class='buscador'>editar</th>" +
        // "<th class='buscador'>eliminar</th>" +
        // "<th class='buscador'> fecha </th>" +
        // " </tr>"+
        // " </tfoot>"+
         "</table>"
       ), tBody = $("<tbody></tbody>");
   
               for (let index = 0; index < limite; index++) {
                 let fowNumb = index + 1;
                 row = $(
                   "<tr>" +
                   "<td class='text-center'>"+(index + 1)+"</td>" +
                   "<td class='text-center'>" +
                      array[index].cedula +
                   "</td>" +
                     "<td class='text-center'>" +
                       array[index].sexo +
                     "</td>" +
                     "<td >" +
                       array[index].fecha_nacimiento +
                     "</td>" +
                     "<td >" +
                        array[index].modalidad +
                   "</td>" +
                                         "<td >" +
                        array[index].provincia +
                   "</td>" +
                                        "<td >" +
                        array[index].canton +
                   "</td>" +
                                        "<td >" +
                        array[index].tipo +
                   "</td>" +
                   "</tr>"
               );
                 $(tBody).append(row);
             }
       $(htmlTable).append(tBody);
        $(visor).html(htmlTable);
   
       loadDataTable();
     }

    function loadDataTable() {
        var table = $('#tblReportes').DataTable({
          dom: 'Blfrtip',
          buttons: [
              {extend: 'copy',text: '<i class="far fa-copy"></i> Copiar'},
              {extend: 'excel',text: '<i class="far fa-file-excel"></i> Exportar a Excel'},
              {extend: 'pdf',text: '<i class="far fa-file-pdf"></i> Exportar como PDF'},
              {extend: 'print',text: '<i class="fas fa-print"></i> Imprimir'}
          ],
          "language": {
            "emptyTable":			"No hay datos disponibles en la tabla.",
            "info":		   			"Del _START_ al _END_ de _TOTAL_ ",
            "infoEmpty":			"Mostrando 0 registros de un total de 0.",
            "infoFiltered":			"(filtrados de un total de _MAX_ registros)",
            "infoPostFix":			"(actualizados)",
            "lengthMenu":			"Mostrar _MENU_ registros",
            "loadingRecords":		"Cargando...",
            "processing":			"Procesando...",
            "search":				"Buscar:",
            "searchPlaceholder":	"Dato para buscar",
            "zeroRecords":			"No se han encontrado coincidencias.",
            "paginate": {
                "first":			"Primera",
                "last":				"Última",
                "next":				"Siguiente",
                "previous":			"Anterior"
            },
            "aria": {
                "sortAscending":	"Ordenación ascendente",
                "sortDescending":	"Ordenación descendente"
            }
        },
        "lengthMenu":				[[5, 10, 20, 25, 50, -1], [5, 10, 20, 25, 50, "Todos"]],
            "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "Todas"] ]
     
        });
    }