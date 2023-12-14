$(document).ready(function(){
    alert("JQuery cargado");
    console.log($('a').length);

    recargaLinks();

    $('#add_button')
            .removeAttr('disabled')
            .click(function(){
                // $('#menu').html('<li><a href="'+$("#add_link").val()+'"></a></li>');  // machaca lo que hay
                $('#menu').append('<li><a href="'+$("#add_link").val()+'"></a></li>');  // añade al final
                // $('#menu').preppend('<li><a href="'+$("#add_link").val()+'"></a></li>'); // añade al inicio
                // $('#menu').before('<li><a href="'+$("#add_link").val()+'"></a></li>'); // añade al inicio fuera de la lista
                // $('#menu').after('<li><a href="'+$("#add_link").val()+'"></a></li>'); // añade al final fuera de la lista

                recargaLinks();
                $('#add_link').val('');
            });
});

function recargaLinks(){
    $('a').each(function(){
        var este = $(this);
        var enlace = este.attr("href");

        este.attr('target','_blank');
        este.text(enlace);
    });
}