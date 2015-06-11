
function renderAbout(about){
   $('#ID_about_definicion').text(about.definicion);
   $('#ID_about_fundacion').text(about.fundacion);
   $("#ID_about_definicionImage").attr("src",about.imageLinkDefinicion);
}

getAbout();