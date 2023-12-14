$(document).ready(function(){
    console.log("JQuery y el index están cargados");
    // Selector accesible vía ID
    var rojo=$('#rojo').css("background-color","red")
                    .css("color", "white");
    console.log(rojo);
    var rojo=$('#amarillo').css("background-color","yellow")
                    .css("color", "black");
    var rojo=$('#verde').css("background-color","green")
                    .css("color", "black");

    // Selector de clase
    var mi_clase = $('.zebra');
    mi_clase.css("border", "3px dashed black");
    console.log(mi_clase);
    console.log(mi_clase[0]);
    console.log(mi_clase.eq(0));

    // Selector de etiqueta
    var parrafos = $('p').css('cursor', "pointer");

    parrafos.click(function(){
        var este = $(this);

        if (este.hasClass('zebra')){
            este.removeClass('zebra');
            este.addClass('zebra2');
        } else{
            este.removeClass('zebra2');
            este.addClass('zebra');
        }
    });

    // Selectores de atributo
    $('[title="Google"]').css("background-color","blue")
                        .css("color", "white");
    
    // Otros aspectos interesante
    $('p, a').addClass("margenSuperior");

    var busqueda = $('#caja').find('.resaltado');
    busqueda.css("fontSize","24px");
    console.log(busqueda);
    // var busqueda2 = $('#caja .resaltado').eq(0).parent().parent().find('[title="Google"]');
});
