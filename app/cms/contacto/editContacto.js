
function renderContacto(contacto){

    $('#ID_contacto_nombre').val(contacto.nombre);
    $('#ID_contacto_ubicacion').val(contacto.ubicacion);
    $('#ID_contacto_email').val(contacto.email);
    $('#ID_contacto_telefono').val(contacto.telefono);
    $("#ID_contacto_facebookLink").val(contacto.facebookLink);
}

function updateContacto() {
	console.log('updateContacto');
	$.ajax({
		type: 'PUT',
		contentType: 'application/json',
		url: rootURL + '/contacto',
		dataType: "json",
               // data: JSON.stringify({"nombre":"as","telefono":"4545","email":"casa","ubicacion":"hola","facebookLink":"casasasasa"}),
		data: JSON.stringify({"nombre":$('#ID_contacto_nombre').val(),"telefono":$('#ID_contacto_telefono').val(),"email":$('#ID_contacto_email').val(),
                    "ubicacion":$('#ID_contacto_ubicacion').val(),"facebookLink":$("#ID_contacto_facebookLink").val()}),         
		success: function(data, textStatus, jqXHR){
			alert('Contacto Actualizado');
		},
		error: function(jqXHR, textStatus, errorThrown){
			alert('updateContacto error: ' + textStatus);
		}
	});
}



getContacto();
