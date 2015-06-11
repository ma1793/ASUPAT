

$(document).ready(function(){
   $('.ui.dropdown')
        .dropdown()
    ;
});

function renderContacto(contacto){
    $('#ID_contacto_nombre').text(contacto.nombre);
    $('#ID_contacto_ubicacion').text(contacto.ubicacion);
    $('#ID_contacto_email').text(contacto.email);
    $('#ID_contacto_telefono').text(contacto.telefono);
    $("#ID_contacto_facebookLink").attr("href",contacto.facebookLink);


}

getContacto();
