
var estado;
var id;


function renderTableroAdopciones(adopcion) {
    $("#ID_adopcion_nombre").val(adopcion.nombre);
    $("#ID_adopcion_raza").val(adopcion.raza);
    $("#ID_adopcion_ubicacion").val(adopcion.ubicacion);
    $("#ID_adopcion_telefono").val(adopcion.telefono);
    $("#ID_adopcion_edad").val(adopcion.edad);
    $("#ID_adopcion_fecha").val(adopcion.fecha);
    $("#ID_adopcion_comentario").val(adopcion.comentario);
    $("#ID_adopcion_imageLink").val(adopcion.imageLink);
}


/*get*/
function getTableroAdopcionesById(id) {
    console.log('getAdopciones');
    $.ajax({
        type: 'GET',
        url: rootURL+'/adopcion/'+id,
        dataType: "json", // data type of response
        success: function(data) {
           renderTableroAdopciones(data);
           
        }
    });
}
/*Update*/
function updateAdopcion() {
	console.log('updateAdopcion');
	$.ajax({
		type: 'PUT',
		contentType: 'application/json',
		url: rootURL + '/adopcion/'+id,
		dataType: "json",
                
		data: JSON.stringify({"nombre":$('#ID_adopcion_nombre').val(),"raza":$('#ID_adopcion_raza').val(),"ubicacion":$('#ID_adopcion_ubicacion').val(),
                    "telefono":$('#ID_adopcion_telefono').val(),"edad":$("#ID_adopcion_edad").val(),"fecha":$("#ID_adopcion_fecha").val(),
                    "comentario":$("#ID_adopcion_comentario").val(),"imageLink":$("#ID_adopcion_imageLink").val()}),         
		success: function(data, textStatus, jqXHR){
			alert('Adopción Actualizada');
                        location.href = "../tableroAdopciones/listaTablero.php";
		},
		error: function(jqXHR, textStatus, errorThrown){
			alert('updateAdopcion error: ' + textStatus);
		}
	});
}
/*POST*/
function addAdopcion() {
	console.log('addAdopcion');
	$.ajax({
		type: 'POST',
		contentType: 'application/json',
		url: rootURL + '/adopcion',
		dataType: "json",
		data: JSON.stringify({"nombre":$('#ID_adopcion_nombre').val(),"raza":$('#ID_adopcion_raza').val(),"ubicacion":$('#ID_adopcion_ubicacion').val(),
                    "telefono":$('#ID_adopcion_telefono').val(),"edad":$("#ID_adopcion_edad").val(),"fecha":$("#ID_adopcion_fecha").val(),
                    "comentario":$("#ID_adopcion_comentario").val(),"imageLink":$("#ID_adopcion_imageLink").val()}),         
		success: function(data, textStatus, jqXHR){
			alert('Adopción Agregada');
                        location.href = "../tableroAdopciones/listaTablero.php";
		},
		error: function(jqXHR, textStatus, errorThrown){
			alert('addAdopcion error: ' + textStatus);
		}
	});
}




function ObtenerParametrosURL(){
   var url = $(location).attr('href');
   id = formatURLParameter(url, 'id');
   estado = formatURLParameter(url, 'estado');
   console.log(estado);
   if(estado !== "0"){
       getTableroAdopcionesById(id);
   }

   
    
   
};

function formatURLParameter(url, name) {
    return (RegExp(name + '=' + '(.+?)(&|$)').exec(url)||[,null])[1];
}

ObtenerParametrosURL();