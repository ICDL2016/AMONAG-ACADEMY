$(document).ready(function(){
    // Выезд меню
    $('.menu-btn-div a').click(function(e){
        e.preventDefault();
        $('.menu-sidebar-div').toggleClass('hidden');
    }); 
    
    // Выпадающие списки настроек
    $('.settings-ul-wrapper div').on('click', function(){
        $('.settings-ul-wrapper div').siblings('ul').hide(500);
        $(this).siblings('ul').toggle(500);
    });
    
    $('.settings-ul-wrapper ul li').on('click', function(){
        var currentText = $(this).parent().parent().find('div').text();
        $(this).parent().parent().find('div').html($(this).text() + '<span><img src="img/caret.svg" alt=""></span>');
        $(this).parent().hide(500);
    });
    
    // Переходы по нижнему меню 
    $('.bottom-settings-item').on('click', function(){
        $('.bottom-settings-item').removeClass('active');
        $(this).addClass('active');
    });
    
    // Показ перевода параграфа моно
    $('.main-text-div.mono .paragraph-wrapper p').on('click', function(){        
        if($(this).hasClass('orange')) {
            $('.paragraph-wrapper p').removeClass('orange');
        } else {
            $('.paragraph-wrapper p').removeClass('orange');
            $(this).addClass('orange');
        }
        if($(this).siblings('.translate-div').hasClass('visible')) {
            $(this).siblings('.translate-div').removeClass('visible');
        } else {
            $('.translate-div').removeClass('visible');
            $(this).siblings('.translate-div').addClass('visible');
        }        
    });
    
    // Выбор в избранное на моно
    $('.favorite-star img').on('click', function(){        
        $(this).parent().toggleClass('favorite');        
    });
    
    // Показ звезды Избранного    
    $('.main-text-div.split .paragraph-wrapper p').on('click', function(){  
        if($(this).hasClass('orange')) {
            $('.paragraph-wrapper p').removeClass('orange');
        } else {
            $('.paragraph-wrapper p').removeClass('orange');
            $(this).addClass('orange');
        }
        if ($(this).hasClass('orange')) {
            $('.favorite-star-split').addClass('visible');
        } else {
            $('.favorite-star-split').removeClass('visible');
        }
    });
    
    $('.slide-original').on('click', function(){  
        $(this).toggleClass('orange');
        if ($(this).hasClass('orange')) {
            $('.favorite-star-split').addClass('visible');
        } else {
            $('.favorite-star-split').removeClass('visible');
        }
    });
    
    // Выбор в избранное на сплит
    $('.favorite-star-split img').on('click', function(){        
        $(this).parent().toggleClass('favorite');        
    });

});