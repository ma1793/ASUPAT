
function renderAbout(contacto){
    $('#ID_about_definicion').val(contacto.definicion);
    $('#ID_about_fundacion').val(contacto.fundacion);
    $('#ID_about_mision').val(contacto.mision);
    $('#ID_about_vision').val(contacto.vision);
    $("#ID_about_imageLinkDefinicion").val(contacto.imageLinkDefinicion);
    $("#ID_about_imageLinkMision").val(contacto.imageLinkMision);
    $("#ID_about_imageLinkVision").val(contacto.imageLinkVision);

}

function updateAbout() {
	console.log('updateAbout');
	$.ajax({
		type: 'PUT',
		contentType: 'application/json',
		url: rootURL + '/about',
		dataType: "json",
		data: JSON.stringify({"definicion":$('#ID_about_definicion').val(),"fundacion":$('#ID_about_fundacion').val(),"mision":$('#ID_about_mision').val(),
                    "vision":$('#ID_about_vision').val(),"imageLinkDefinicion":$("#ID_about_imageLinkDefinicion").val(),"imageLinkMision":$("#ID_about_imageLinkMision").val(),"imageLinkVision":$("#ID_about_imageLinkVision").val()}),         
		success: function(data, textStatus, jqXHR){
			alert('Contacto Actualizado');
		},
		error: function(jqXHR, textStatus, errorThrown){
			alert('updateContacto error: ' + textStatus);
		}
	});
}



getAbout();
