var id=0;
var Adopciones;
function renderTableroAdopciones(adopciones) {
    Adopciones = adopciones;
    var list = adopciones == null ? [] : adopciones;
    $('#ID_adopciones').empty();
    $.each(list, function(index, adopcion) {
        $('#ID_adopciones').append('<tr>' +
                '<td>' + (index + 1) + '</td>' +
                '<td>' + adopcion.nombre + '</td>' +
                '<td>' + adopcion.raza + '</td>' +
                '<td>' + adopcion.ubicacion + '</td>' +
                '<td>' + adopcion.telefono + '</td>' +
                '<td>' + adopcion.edad + '</td>' +
                '<td>' + adopcion.fecha+ '</td>' +
                '<td>' +
                '<a href="../tableroAdopciones/editTablero.php?id=' + adopcion.idAdopcion + '&estado=1"><i class="icon-pencil"></i></a><br>' +
                '<a href="#myModal" onclick="idSeleccionado('+index+')" role="button" data-toggle="modal"><i class="icon-remove"></i></a>' +
                '</td>' +
                '</tr>');
    });
}


function idSeleccionado(indice){
   id = Adopciones[indice].idAdopcion;
};

function eliminarItem(){
    deleteAdopcion(id);
    getTableroAdopciones();
};

getTableroAdopciones();
