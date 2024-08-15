jQuery(document).ready(function($) {

    // ======= Header search block ======= //
    $('.header-search-button').click(function() {
        var parent = $(this).parent();
        if (parent.hasClass('show')) {
            parent.removeClass('show').children('.search-form-wrapper').stop().slideUp(500);
        } else {
            parent.addClass('show').children('.search-form-wrapper').stop().slideDown(500);
        }
    });
    $(document).on('click', function(e) {
        if (!e.target.closest('.header-search-block') && $('.header-search-block').hasClass('show')) {
            $('.header-search-block').removeClass('show').children('.search-form-wrapper').stop().slideUp(500);
        }
    });
    // ======= Header search block end ======= //


    // ======= Header menu ======= //
    $('.nav-toggle').click(function() {
        if ($(this).hasClass('opened')) {
            $(this).removeClass('opened');
            $('.site-navigation').slideUp(500);
            $('body').removeClass('stop-scroll');
        } else {
            $(this).addClass('opened');
            $('.site-navigation').slideDown(500);
            $('body').addClass('stop-scroll');
        }
    });
    if ($(window).width() > 1060) {
        $('.site-main-menu .menu-item-has-children').hover(
            function(){
                $(this).addClass('opened').children('.sub-menu').stop().slideDown(500);
            },
            function(){
                $(this).removeClass('opened').children('.sub-menu').stop().slideUp(500);
            }
        );
    } else {
        $('.menu-item-has-children').each(function() {
            $(this).children('a').after('<div class="sub-menu-button"></div>');
        });
        $('.sub-menu-button').click(function(){
            var parent = $(this).parent();
            if (parent.hasClass('opened')) {
                parent.removeClass('opened').children('.sub-menu').stop().slideUp(500);
            } else {
                $('.menu-item-has-children.opened').removeClass('opened').children('.sub-menu').stop().slideUp(500);
                parent.addClass('opened').children('.sub-menu').stop().slideDown(500);
            }
        });
    }
    // ======= Header menu end ======= //
});
