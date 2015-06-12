
function renderTableroAdopciones(adopciones) {
    // JAX-RS serializes an empty list as null, and a 'collection of one' as an object (not an 'array of one')
   var list = adopciones == null ? [] : adopciones;
   $.each(list, function(index, adopcion) {
      $('#ID_adopciones').append('<div class="column" style="padding-bottom: 20px">'+
                                '<div class="ui special cards">'+
                                     '<div class="card orange">'+
                                        '<div class="dimmable small image">'+
                                            '<div class="ui dimmer">'+
                                                '<div class="content">'+
                                                    '<div class="center">'+
                                                        '<p>Nombre: <a id="ID_adopcion_nombre">'+adopcion.nombre+'</a></p>'+
                                                         '<p>Ubicación: <a id="ID_adopcion_ubicacion">'+adopcion.ubicacion+'</a></p>'+
                                                         '<p>Edad: <a id="ID_adopcion_edad">'+adopcion.edad+'</a></p>'+
                                                         '<p>Teléfono: <a id="ID_adopcion_telefono">'+adopcion.telefono+'</a></p>'+
                                                         '<p id="ID_adopcion_comentario">'+adopcion.comentario+'</p>'+
                                                    '</div>'+
                                                '</div>'+
                                            '</div>'+
                                            '<img id="ID_adopcion_imageLink" src="'+adopcion.imageLink+'">'+
                                        '</div>'+
                                        '<div class="content">'+
                                            '<a class="header"> <i class="paw icon"></i>Raza: <b id="ID_adopcion_raza">'+adopcion.raza+'</b></a>'+
                                           '<div class="meta">'+
                                                '<span class="date">Fecha Ingreso:<a id="ID_adopcion_fecha">'+adopcion.fecha+'</a></span>'+
                                            '</div>'+
                                        '</div>'+
                                    '</div>'+
                                '</div>'+
                            '</div> ');
  });
  $('.special.cards .image').dimmer({
        on: 'hover'
    });
    
}



getTableroAdopciones();





