$(function() {
    $('nav.mobile').click(function() {
        var listaMenu = $('nav.mobile ul');

        /* Menu através do fadeIn
        if(listaMenu.is(':hidden')) {
            listaMenu.fadeIn();
        } else {
            listaMenu.fadeOut();
        }
        */

        var icone = $('.botao-menu-mobile').find('i');

        if(listaMenu.is(':hidden')) {
            icone.removeClass('fa-bars');
            icone.addClass('fa-times'); 
            listaMenu.slideToggle();
        } else {
            icone.removeClass('fa-times');
            icone.addClass('fa-bars');
            listaMenu.slideToggle();
        }
    })

    if ($('target').length > 0) {
        var elemento = '#' + $('target').attr('target');

        var divScroll = $(elemento).offset().top;
        $('html, body').animate({
            'scrollTop': divScroll
        }, 800)
    }

    carregarDinamico();
    function carregarDinamico() {
        $('[realtime]').click(function() {
            var pagina = $(this).attr('realtime');
            $('.container-principal').load('http://localhost/Cursos%20Danki%20Code/Curso%20BackEnd/Projeto_01/pages/'+pagina+'.php');

            return false;
        });
    }
})