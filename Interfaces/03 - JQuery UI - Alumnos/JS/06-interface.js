$(document).ready(function(){
    //alert("JQuery cargado");

    $(".elemento").draggable();

    $(".elemento").resizable();

    //Seleccionar elementos
    //$(".lista-seleccionable").selectable();

    //Ordenar los elementos
    //$(".lista-seleccionable").sortable();
    $(".lista-seleccionable").sortable({
        update: function(event, ui){
            console.log("He cambiado la lista");
        }
    });

    //Drag and drop
    $("#elemento-movido").draggable();
    $("#area").droppable({
        drop: function(){
            console.log("Has soltado un elemento");
        }
    });

    //EFECTOS, cuando clicamos el botón
    $("#mostrar").click(function(){
        //$(".caja-efectos").toggle("fade");
        //$(".caja-efectos").fadeToggle(); // opción 2

        //$(".caja-efectos").effect("explode"); // explode es un método no nativo y se lo tengo que pasar como param.
        //$(".caja-efectos").toggle("explode");

        $(".caja-efectos").toggle("slide"); // lo mueve de un lado a otro.
        //$(".caja-efectos").toggle("drop");
        //$(".caja-efectos").toggle("fold");
        //$(".caja-efectos").toggle("puff");
        //$(".caja-efectos").toggle("scale"); // muy chulo
        //$(".caja-efectos").toggle("shake");

        // puedo pasarle opciones, tamaños, velocidades,...
        //$(".caja-efectos").toggle("shake", slow);
        //$(".caja-efectos").toggle("shake", 4000); // 4 segs
        //$(".caja-efectos").toggle("shake", {}, 4000); // un json con varios datos y tiempo de 4 segs.
    });

    $(document).tooltip();

    //Dialog
    $("#popup").dialog();

    $("#lanzar-popup").click(function(){
        $("#popup2").dialog();
    });

    //Datepicker - fecha seleccionable
    $("#calendario").datepicker();

    //Tabs - paneles de pestañas
    $("#pestanas").tabs();

});