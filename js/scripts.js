$(function(){
    //Aqui o codigo javascript
    $('nav.mobile').click(function(){
        //O que vai acontecer quando clicarmos na nav.mobile!
        var listaMenu = $('nav.mobile ul');
        
        //Abrir menu atraves do fadeIn
        /*
        if(listaMenu.is(':hidden') == true){
            listaMenu.fadeIn();
        }
        else{
            listaMenu.fadeIn();
        }
        */

        //Abrir ou fechar sem efeitos
        /*
        if(listaMenu.is(':hidden') == true){
            //listaMenu.show();
            listaMenu.css('display','block');
        }
        else{
            //listaMenu.hide();
            listaMenu.css('display','none');
        }
        */

        if(listaMenu.is(':hidden') == true){
            //fa-solid fa-x
            //fa solid fa-bars
            var icone = $('.botao-menu-mobile').find('i');
            icone.removeClass('fa-solid fa-bars');
            icone.addClass('fa-solid fa-x');
            listaMenu.slideToggle();
        }
        else{
            var icone = $('.botao-menu-mobile').find('i');
            icone.removeClass('fa-solid fa-x');
            icone.addClass('fa-solid fa-bars');
            listaMenu.slideToggle();
        }

    })
})