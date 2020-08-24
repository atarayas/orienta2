$(document).ready(function(){
  
console.log("Entré");
  //0 elimina los controles del video - 1 Los habilita
  controls=1;
  //0 Elimina la información del video y las opciones para compartir - 1 Los habilita
  showinfo=0;
  //0 elimina los videos recomendados al finar la reproducción - 1 Los habilita
  rel=0;
  $.ajax({
    // url: 'main.xml',
    // dataType:'xml',
    url: '../json/videos.json',
    dataType:'json',
    success:function(data){
      var myJSON = data;
      console.log(myJSON);
      var lenghtArray =  myJSON.length;
      // console.log("titulo..."+myJSON[0].titulo);
      for (var i = 0; i < lenghtArray; i++) {
        console.log("entre al for..."+i);

      // $(myJSON).find('playlist video').each(function(){
        // var titulo= $(this).attr('titulo');
        var titulo = myJSON[i].titulo;
        console.log("tituloooo..."+titulo);
        // var id= $(this).attr('id');
        var id = myJSON[i].id;
        console.log("idddd..."+id);
        console.log("$('.reproductor__thumbs ul li').size()"+$('.reproductor__thumbs ul li').length);

        var datos=$('.reproductor__thumbs ul li').length;
        var urlVideo= id;
        var urlImg ="<li id='"+id+"' class='thumb"+ datos +"'><figure><figcaption>"+titulo+"</figcaption><img src='https://img.youtube.com/vi/"+id+"/0.jpg' /></figure></li>";
        $('.reproductor__thumbs ul').append(urlImg);
      }
      // })
      idLoad= $('.reproductor__thumbs ul li:first').attr("id");
      $('.reproductor__frame--play').append("<iframe src='http://www.youtube.com/embed/" + idLoad + "?rel=" + rel + "&controls=" + controls +"&showinfo=" + showinfo + "' frameborder='0' allowfullscreen></iframe>");
      $('.reproductor__thumbs ul li').click(function(){
        idVideo=$(this).attr("id");
        $('.reproductor__frame--play').empty();
        $('.reproductor__frame--play').append("<iframe src='http://www.youtube.com/embed/" + idVideo + "?rel=" + rel + "&controls=" + controls +"&showinfo=" + showinfo + "' frameborder='0' allowfullscreen></iframe>");
      })
      // $("#videos").append($('.reproductor'));
    },
    error: function(){
      $('.reproductor__thumbs ul').text('error');
    }
  })
});
