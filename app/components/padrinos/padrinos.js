$(document).ready(function() {
    $('.special.cards .image').dimmer({
        on: 'hover'
    });
    
    $('.ui.inverted.button').on('click', function(){
        window.open('../donaciones/donaciones.php','_blank');
    });
});