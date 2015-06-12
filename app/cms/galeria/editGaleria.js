
var estado;
var id;


function renderImagen(imagen) {
    $("#ID_imagen_descripcion").val(imagen.descripcion);
    $("#ID_imagen_categoria").val(imagen.categoria);
    $("#ID_imagen_imgURL").val(imagen.imgURL);
}


/*get*/
function getImagenById(id) {
    console.log('getImagen '+id );
    $.ajax({
        type: 'GET',
        url: rootURL+'/imagen/'+id,
        dataType: "json", // data type of response
        success: function(data) {
           renderImagen(data);
           
        }
    });
}
/*Update*/
function updateImagen() {
	console.log('updateImagen');
	$.ajax({
		type: 'PUT',
		contentType: 'application/json',
		url: rootURL + '/imagen/'+id,
		dataType: "json",
                
		data: JSON.stringify({"descripcion":$('#ID_imagen_descripcion').val(),"categoria":$('#ID_imagen_categoria').val(),"imgURL":$('#ID_imagen_imgURL').val()}),         
		success: function(data, textStatus, jqXHR){
			alert('Imagen Actualizada');
                        location.href = "../galeria/listaGaleria.php";
		},
		error: function(jqXHR, textStatus, errorThrown){
			alert('updateImagen error: ' + textStatus);
		}
	});
}
/*POST*/
function addImagen() {
	console.log('addImagen');
	$.ajax({
		type: 'POST',
		contentType: 'application/json',
		url: rootURL + '/imagen',
		dataType: "json",
                data: JSON.stringify({"descripcion":$('#ID_imagen_descripcion').val(),"categoria":$('#ID_imagen_categoria').val(),"imgURL":$('#ID_imagen_imgURL').val()}),                  
		success: function(data, textStatus, jqXHR){
			alert('Imagen Agregada');
                        location.href = "../galeria/listaGaleria.php";
		},
		error: function(jqXHR, textStatus, errorThrown){
			alert('addImagen error: ' + textStatus);
		}
	});
}




function ObtenerParametrosURL(){
   var url = $(location).attr('href');
   id = formatURLParameter(url, 'id');
   estado = formatURLParameter(url, 'estado');
   console.log(estado);
   if(estado !== "0"){
       getImagenById(id);
   }

   
    
   
};

function formatURLParameter(url, name) {
    return (RegExp(name + '=' + '(.+?)(&|$)').exec(url)||[,null])[1];
}

ObtenerParametrosURL();