$(document).ready(function(){
    console.log("JQuery y el index están cargados");

    // alert("JQuery cargado");
    // Eventos de MouseOver y MouseOut
    var caja = $("#caja");

    // caja.mouseover(function(){
    //     $(this).css("background-color","red")
    //             .css("color", "white");      
    // });
    // caja.mouseout(function(){
    //     $(this).css("background-color","blue")
    //             .css("color", "white");      
    // });

    // Hover --> admite 2 llamadas a funciones callback
    function cambiaRojo(){
        $(this).css("background-color", "red")
                .css("color", "white");
    };
    function cambiaVerde(){
        $(this).css("background", "green")
                .css("color", "white");
    };
    caja.hover(cambiaRojo, cambiaVerde);

    // Click y Doble Click.
    caja.click(function(){
        $(this).css("background", "blue")
                .css("color", "white");
    });
    caja.dblclick(function(){
        $(this).css("background", "pink")
                .css("color", "black");
    });
    // Focus y blur
    var txt = $('#text');
    txt.focus(function(){
        $(this).css("border", "4px dashed yellow");
    });
    txt.blur(function(){
        $(this).css("border", "2px solid blue");

        $("#datos").text($(this).val()).show();
    });

    // MouseDown y MouseUp
    var datos = $('#caja2');
    datos.mousedown(function(){
        $(this).css("border", "2px solid gray");
    });
    datos.mouseup(function(){
        $(this).css("border", "2px solid blue");
    });
    // Mousemove
    $(document).mousemove(function(event){
        console.log("En X: " + event.clientX);
        console.log("En Y: " + event.clientY);
        $('body').css('cursor', "none");
        var sigueme = $('#sigueme');
        sigueme.css("left", event.clientX)
                .css("top", event.clientY);
    });
});