// The root URL for the RESTful services
var rootURL = "http://localhost/ASUPAT/app/shared/api";




/*GET*/
function getAbout() {
    console.log('getAbout');
    $.ajax({
        type: 'GET',
        url: rootURL+'/about',
        dataType: "json", // data type of response
        success: function(data) {
            
            renderAbout(data);
        }
    });
}

function getContacto() {
    console.log('getContacto');
    $.ajax({
        type: 'GET',
        url: rootURL+'/contacto',
        dataType: "json", // data type of response
        success: function(data) {
            renderContacto(data);
        }
    });
}

function getTableroAdopciones() {
    console.log('getTableroAdopciones');
    $.ajax({
        type: 'GET',
        url: rootURL+'/adopciones',
        dataType: "json", // data type of response
        success: function(data) {
            renderTableroAdopciones(data);
        }
    });
}

function getGaleria() {
    
    console.log('getGaleria');
    $.ajax({
        type: 'GET',
        url: rootURL+'/galeria',
        dataType: "json", // data type of response
        success: function(data) {
            renderGaleria(data);
        }
    });
}


/*DELETE*/
function deleteAdopcion(id) {
	console.log('deleteAdopcion');
	$.ajax({
		type: 'DELETE',
		url: rootURL + '/adopcion/'+id ,
		success: function(data, textStatus, jqXHR){
			alert('Adopcion Eliminada');
		},
		error: function(jqXHR, textStatus, errorThrown){
			alert('deleteAdopcion error');
		}
	});
}


function deleteImagen(id) {
	console.log('deleteImagen');
	$.ajax({
		type: 'DELETE',
		url: rootURL + '/imagen/'+id ,
		success: function(data, textStatus, jqXHR){
			alert('Imagen Eliminada');
		},
		error: function(jqXHR, textStatus, errorThrown){
			alert('deleteImagen error');
		}
	});
}