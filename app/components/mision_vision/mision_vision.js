
function renderAbout(about){
   $('#ID_about_vision').text(about.vision);
   $("#ID_about_visionImage").attr("src",about.imageLinkVision);
   $('#ID_about_mision').text(about.mision);
   $("#ID_about_misionImage").attr("src",about.imageLinkMision);
}

getAbout();