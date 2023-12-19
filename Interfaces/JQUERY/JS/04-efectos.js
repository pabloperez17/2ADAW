$(document).ready(function(){
    // alert("JQuery cargado");

    var caja  = $('#caja');

    $('#mostrar').hide();

    $('#mostrar').click(function(){
        $(this).hide();
        $('#ocultar').show('fast');
        // caja.show('slow');
        // caja.fadeIn('slow');
        // caja.slideDown('slow');
        caja.fadeTo('slow',1);
    });
    $('#ocultar').click(function(){
        $(this).hide();
        $('#mostrar').show('normal');
        // caja.hide('slow');
        // caja.fadeOut('slow');
        // caja.slideUp('slow');
        caja.fadeTo('slow',0.1);
    });

    // Toggle - todo en uno
    $('#todoenuno').click(function(){
        // caja.toggle('slow');
        // caja.fadeToggle('slow'); 
        caja.slideToggle('slow'); // desplegable
    });

    // Animaciones
    $('#animame').click(function(){
        // animación en 1 paso
        // caja.animate({
        //     marginLeft: '500px',
        //     fontSize: '40px',
        //     height: '100px',
        // }, 'slow');

        caja.animate({
            marginLeft: '500px',
            fontSize: '40px',
            height: '100px',
        }, 'slow')
            .animate({
            borderRadius: '900px',
            marginTop: '100px'
        }, 'slow')
        .animate({
            borderRadius: '0px',
            marginLeft: '0px'
        }, 'slow')
        .animate({
            borderRadius: '100px',
            marginTop: '0px'
        }, 'slow');
    });

    let elemento1 = $("#demoAnimation");
    let elemento2 = $("#demoAnimation2");

    elemento1.on("click", function () {
        elemento1.animate({
            left: 550//propiedad:valor (dezplazamiento a la derecha de 150px)
        }, 1000, //tiempo expresado en milisegundos
        function () {//funcion callback, es opcional
            elemento1.animate({
                top: 250//moverse 150px del top hacia abajo
            }, 1000);//tiempo expesado en milisegundos
        });
    });
});