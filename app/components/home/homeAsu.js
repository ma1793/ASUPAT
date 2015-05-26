$(document).ready(function() {

    var changeSides = function() {
        $('.ui.shape')
            .eq(0)
            .shape('flip back')
            .end()
            .eq(1)
            .shape('flip back')
            .end();
    };
    
});
