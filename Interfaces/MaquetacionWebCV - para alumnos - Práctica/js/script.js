$(document).ready(() => {

    //Fecha
    $('#date').datepicker();

    //Efecto para el cambio de pagina html
    $('.layout').effect('bounce', { times: 2 }, 1500, () => {
    });
    
    //Modo modo_oscuro
    $('#modo_oscuro').click(() => {
        localStorage.setItem('tema_modo_oscuro', !$(':root').hasClass('modo_modo_oscuro'));
        cambiarTema();
    });
    cambiarTema();

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
    
    //Menu hamburguesa
    /*(function () {
        $('.user-info_general').on('click', function() {
            $('.user-info__container-image').toggleClass('animate');
            $('.layout_menu').toggleClass('visible');
        })
        $('.layout_menu > ul > li > a').on('click', function () {
            $('.user-info__container-image').removeClass('animate');
            $('.layout_menu').removeClass('visible');
        })
    })();*/

});

$(document).ready(function () {
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 20,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    })
})

const cambiarTema = () => {
    if (!localStorage.getItem('tema_modo_oscuro') || localStorage.getItem('tema_modo_oscuro') === 'false') {
      $(':root').removeClass('modo_modo_oscuro');
      $('#modo_oscuro i').addClass('fa-moon').removeClass('fa-sun');
      $('#modo_oscuro span').text('Modo modo_oscuro');
    } else {
      $(':root').addClass('modo_modo_oscuro');
      $('#modo_oscuro i').addClass('fa-sun').removeClass('fa-moon');
      $('#modo_oscuro span').text('Modo Claro');
    }
  }
