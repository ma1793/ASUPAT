function renderGaleria(galeria) {
    // JAX-RS serializes an empty list as null, and a 'collection of one' as an object (not an 'array of one')
    var list = galeria == null ? [] : galeria;

    $.each(list, function(index, foto) {
        if (foto.categoria == 1) {
            $('#ID_galeria_eventos').append(' <div class="column">' +
                    '<a class="ui orange card">' +
                    '<div class="small image">' +
                    '<img src="' + foto.imgURL + '">' +
                    '</div>' +
                    '</a>' +
                    '<div class="ui orange  pointing label" style="margin-top: 0px">' + foto.descripcion +
                    '</div>' +
                    '</div>');
        }
        if (foto.categoria == 2) {
            $('#ID_galeria_animalesAdoptados').append(' <div class="column">' +
                    '<a class="ui blue card">' +
                    '<div class="small image">' +
                    '<img src="' + foto.imgURL + '">' +
                    '</div>' +
                    '</a>' +
                    '<div class="ui blue  pointing label" style="margin-top: 0px">' + foto.descripcion +
                    '</div>' +
                    '</div>');
        }
        if (foto.categoria == 3) {
            $('#ID_galeria_finalesFelices').append(' <div class="column">' +
                    '<a class="ui orange card">' +
                    '<div class="small image">' +
                    '<img src="' + foto.imgURL + '">' +
                    '</div>' +
                    '</a>' +
                    '<div class="ui orange  pointing label" style="margin-top: 0px">' + foto.descripcion +
                    '</div>' +
                    '</div>');
        }
    });
    
    
    
    $('.special.cards .image').dimmer({
        on: 'hover'
    });

}



getGaleria();



