$(document).ready(() => {

    $('#date').datepicker();

    //Efecto para el cambio de pagina html
    $('.layout').effect('bounce', { times: 2 }, 1500, () => {
    });
    
    $('#oscuro').click(() => {
        // oscuro
        if ($(':root').css('--color-principal') == '#FFFFFF') {
            $(':root').css('--color-principal', '#191970');
            $(':root').css('--color-secondary', '#d0e6ff');
            $(':root').css('--color-title', '#FFFFFF');
            $(':root').css('--color-subtitle', '#FFFFFF');
            $(':root').css('--color-text', '#FFFFFF');
            $('.oscuro').addClass('fa-regular fa-sun').removeClass('fa-solid fa-moon');
            $('#cambiarSpan').text('Modo Claro');
            // claro
        } else {
            $(':root').css('--color-principal', '#FFFFFF');
            $(':root').css('--color-secondary', '#53ceff');
            $(':root').css('--color-title', '#222222');
            $(':root').css('--color-subtitle', '#888');
            $(':root').css('--color-text', '#555');
            $('.oscuro').addClass('fa-solid fa-moon').removeClass('fa-regular fa-sun');
            $('#cambiarSpan').text('Modo Oscuro');

        }
    });

    //POP UP
    $('#popup').hide();
    $('.certificates__certificate').click(() => {
    $('#popup').dialog();
    }); 

    //Barra de subir
    $('#boton_subida').on('click', function() {
        $('.content__page').animate({
            scrollTop: 0
        }, 800);
        return false;
    });

});