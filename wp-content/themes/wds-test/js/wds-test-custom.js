jQuery(document).ready(function($) {

    // ======= Header search block ======= //
    headerSticky();
    $(window).resize(function() {
        headerSticky();
    });
    function headerSticky() {
        var header_height = $('.site-header').outerHeight();
        if ($(window).scrollTop() >= header_height) {
            $('.site-header').addClass('sticky');
        }
        $(window).scroll(function() {
            if (!$('.site-header').hasClass('sticky') && $(window).scrollTop() > header_height) {
                $('.site-header').addClass('sticky');
            }
            if ($('.site-header').hasClass('sticky') && $(window).scrollTop() < header_height) {
                $('.site-header').removeClass('sticky');
            }
        });
    }
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

    
    // ======= Featured banner link ======= //
    $('.featured-product-block .banner').hover(
        function() {
            $(this).find('.banner-link-wrapper').stop().slideDown(500);
        },
        function() {
            $(this).find('.banner-link-wrapper').stop().slideUp(500);
        }
    );
    // ======= Featured banner link end ======= //

    
    // ======= Featured slider ======= //    
    const featuredSlider = new Swiper('.featured-product-block .swiper', {
        speed: 400,
        slidesPerView: 1,
        watchOverflow: true,
        spaceBetween: 10,
        breakpoints: {
            768: {
                slidesPerView: 2,
                spaceBetween: 15
            },
            1061: {
                slidesPerView: 3,
                spaceBetween: 15
            }
        },
        navigation: {
            prevEl: '.featured-product-block .swiper-button-prev',
            nextEl: '.featured-product-block .swiper-button-next',
        },
    });
    // ======= Featured slider end ======= //

    
    // ======= Jewelry slider ======= //    
    const jewelrydSlider = new Swiper('.jewelry-blog-block .swiper', {
        speed: 400,
        slidesPerView: 1,
        watchOverflow: true,
        spaceBetween: 10,
        breakpoints: {
            768: {
                slidesPerView: 2,
                spaceBetween: 15
            },
            1061: {
                slidesPerView: 3,
                spaceBetween: 20
            }
        },
        navigation: {
            prevEl: '.jewelry-blog-block .swiper-button-prev',
            nextEl: '.jewelry-blog-block .swiper-button-next',
        },
    });
    // ======= Jewelry slider end ======= //

    
    
});
