
$(document).ready(function(){
   $('.ui.selection.dropdown')
        .dropdown()
    ;
    
});

function mostrarPerfil(perfil) {
    if (document.getElementById(perfil).style.display === "none") {
           document.getElementById(perfil).style.display = "block";
       } else {
           document.getElementById(perfil).style.display = "none";
       }          // The function returns the product of p1 and p2
}


