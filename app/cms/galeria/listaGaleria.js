var id=0;
var Galeria;
function renderGaleria(galeria) {
    Adopciones = galeria;
    var list = galeria == null ? [] : galeria;
    $('#ID_galeria').empty();
    $.each(list, function(index, imagen) {
        $('#ID_galeria').append('<tr>' +
                '<td>' + (index + 1) + '</td>' +
                '<td>' + imagen.descripcion + '</td>' +
                '<td>' + imagen.categoria + '</td>' +
                '<td>' + imagen.imgURL + '</td>'+
                '<td>' +
                '<a href="../galeria/editGaleria.php?id=' + imagen.idImagen + '&estado=1"><i class="icon-pencil"></i></a><br>' +
                '<a href="#myModal" onclick="idSeleccionado('+imagen.idImagen+')" role="button" data-toggle="modal"><i class="icon-remove"></i></a>' +
                '</td>' +
                '</tr>');
    });
}


function idSeleccionado(indice){
   id = indice;
};

function eliminarItem(){
    deleteImagen(id);
    location.href = "../galeria/listaGaleria.php";
};

getGaleria();
