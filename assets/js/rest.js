// The root URL for the RESTful services
var rootURL = "http://localhost/ASUPAT/app/shared/api";





function getAbout() {
    console.log('getMision');
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