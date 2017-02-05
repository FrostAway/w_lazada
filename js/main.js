(function ($) {

    $('body').on('click', '.logon-btn', function () {
        var tab = $(this).attr('data-active');
        $('a[href="' + tab + '"]').click();
    });


    var header = $('#header');
    var top_bar = $('#top_bar');
    var header_h = header.height() + top_bar.height();
    $(window).scroll(function () {
        if ($(window).width() > 992) {
            if ($(window).scrollTop() > header_h) {
                $('body').addClass('_header_fixed');
            } else {
                $('body').removeClass('_header_fixed');
            }
        }
    });

    $('._top_search_form input[type="text"]').focus(function () {
        $('._suggest_box').removeClass('hidden');
    });

    $('body').click(function (e) {
        if ($(e.target).closest('._top_search_form').length == 0) {
            $('._suggest_box').addClass('hidden');
        }
    });
    $('.btn-hide').click(function () {
        $(this).closest('._suggest_box').addClass('hidden');
    });

    var resizeTimeout;
    $(window).resize(function () {
        clearTimeout(resizeTimeout);
        resizeTimeout = setTimeout(function () {
            $('#top_menu li.dropdown').each(function () {
                var dr_menus = $(this).find('.dropdown-menu');
                var off_left = $(this).offset().left;
                dr_menus.css('left', -off_left + 'px');
            });
        }, 1000);
    }).resize();

    $('body').on('click', '.bs_top_menu_head button, .bs_top_menu_head a', function (e) {
        e.preventDefault();
        var button = $('.bs_top_menu_head button');
        var nav_brand = $('.bs_top_menu_head .navbar-brand');
        if (!button.hasClass('collapsed')) {
            nav_brand.text(nav_brand.data('textExpand'));
            button.addClass('collapsed');
            $('body').removeClass('_show_top_menu');
            if ($(window).width() < 992) {
                button.html('<i class="fa fa-bars"></i>');
            }
        } else {
            nav_brand.text(nav_brand.data('textCollapse'));
            button.removeClass('collapsed');
            $('body').addClass('_show_top_menu');
            if ($(window).width() < 992) {
                button.html('<i class="fa fa-arrow-left"></i>');
            }
        }
    });

    $('._dr_group_toggle').click(function (e) {
        e.preventDefault();
        var dr_group = $(this).parent('._dr_group');
        if (dr_group.hasClass('open')) {
            dr_group.removeClass('open');
        } else {
            dr_group.addClass('open');
        }
    });
    $('.sub-toggle b').click(function () {
        var el_li = $(this).closest('.has-sub');
        if (el_li.hasClass('show')) {
            el_li.removeClass('show');
        } else {
            el_li.addClass('show');
        }
    });

    var inside_menu = false;
    $('#top_menu').mouseleave(function () {
        inside_menu = false;
    });
    $('#top_menu li.dropdown a').click(function () {
        inside_menu = true;
    });
    $('#top_menu li.dropdown').mouseenter(function () {
        if (inside_menu && $(window).width() > 992) {
            $(this).addClass('open');
        }
    });
    $('#top_menu li.dropdown').mouseleave(function () {
        if ($(window).width() > 992) {
            $(this).removeClass('open');
        }
    });

    $(document).ready(function () {
        $('._with_slider ._items').addClass('owl-carousel').owlCarousel({
            margin: 0,
            loop: true,
            responsiveClass: true,
            nav: true,
            navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
            responsive: {
                0: {
                    items: 1,
                    center: true
                },
                400: {
                    items: 2,
                    center: true
                },
                768: {
                    items: 3
                },
                992: {
                    items: 4
                }
            }
        }).css('opacity', 1);
        $('._slider_5 ._items').addClass('owl-carousel').owlCarousel({
            margin: 0,
            loop: true,
            responsiveClass: true,
            nav: true,
            navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
            responsive: {
                0: {
                    items: 1,
                    center: true,
                },
                400: {
                    items: 2,
                    center: true
                },
                768: {
                    items: 3
                },
                992: {
                    items: 5
                }
            }
        }).css('opacity', 1);
        $('.tabs-partner').addClass('owl-carousel').owlCarousel({
            margin: 0,
            loop: true,
            responsiveClass: true,
            nav: true,
            navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
            responsive: {
                0: {
                    items: 2
                },
                400: {
                    items: 3
                },
                768: {
                    items: 4
                },
                992: {
                    items: 6
                },
                1200: {
                    items: 8
                }
            }
        });
        $('.list_slides').addClass('owl-carousel').owlCarousel({
            margin: 0,
            loop: true,
            items: 1
        });

        var zoomTimeout;
        var zoomImage = $('._prod_image img');
        var zoomConfig = {
            responsive: true,
            zoomWindowOffetx: 10,
            borderSize: 1
        };
        var zoomActive = false;
        $(window).resize(function () {
            clearTimeout(zoomTimeout);
            zoomTimeout = setTimeout(function () {
                if (typeof $.fn.elevateZoom != "undefined") {
                    if ($(window).width() > 768) {
                        zoomImage.elevateZoom(zoomConfig);
                    } else {
                        zoomConfig.zoomType = 'inner';
                        zoomConfig.cursor = 'crosshair';
                        zoomImage.elevateZoom(zoomConfig);
                    }
                }
            }, 1000);
        }).resize();
    });

    $('body').on('click', '.tabs-partner li a', function () {
        $('.tabs-partner li').removeClass('active');
        $(this).parent().addClass('active');
        $('._partner_box .tab-content .tab-pane').removeClass('active');
        $($(this).attr('href')).addClass('active');
    });

    $('._vote_read_only ._vote_star').rating({
        displayOnly: true, step: 0.5
    });

    $('._vote_rating ._vote_star').rating({
        step: 1,
        showClear: false,
        clearCaption: 'Nhấp vào đây để đánh giá',
        starCaptions: {
            1: '1 sao',
            2: '2 sao',
            3: '3 sao',
            4: '4 sao',
            5: '5 sao'
        }
    });

    $('body').on('click', '._prod_thumb_images a', function (e) {
        e.preventDefault();
    });
    $('body').on('mouseover', '._prod_thumb_images a, ._prod_other_list li a', function (e) {
        var href = $(this).attr('href');
        $(this).parent().find('a').removeClass('active');
        $(this).addClass('active');
        $('._prod_full_images ._prod_image').removeClass('active');
        $(href).addClass('active');
    });
    $('body').on('click', '._btn_target_hidden', function (e) {
        e.preventDefault();
        $(this).closest('._target_contain').addClass('hidden');
        $($(this).attr('href')).removeClass('hidden');
    });
    $('body').on('click', '._prod_topbar li:not(:last-child) a', function (e) {
        e.preventDefault();
        var href = $(this).attr('href');
        $('body,html').animate({scrollTop: $(href).offset().top}, 500);
    });

    $('._range_hoz ._range_ui_bar').each(function () {
        var min = $(this).data('min');
        var max = $(this).data('max');
        var el_this = $(this);
        var from_input = el_this.closest('._range_hoz').find('._range_from input');
        var to_input = el_this.closest('._range_hoz').find('._range_to input');
        $(this).slider({
            range: true,
            min: min,
            max: max,
            values: [min, max],
            change: function (event, ui) {
                var values = ui.values;
                from_input.val(values[0]);
                to_input.val(values[1]);
            }
        });
    });
    $('._range_ver ._range_ui_bar').each(function () {
        var min = $(this).data('min');
        var max = $(this).data('max');
        var el_this = $(this);
        $(this).slider({
            orientation: "vertical",
            min: min,
            max: max,
            value: min,
            change: function (event, ui) {
                var value = ui.value;
                $('._vote_star_ver label').removeClass('active');
                $('._vote_star_ver label input').prop('checked', false);
                var input = el_this.closest('._range_ver').find('label input[value="'+value+'"]');
                input.parent().addClass('active');
                input.prop('checked', true);
            }
        });
    });
    
    $('._select_2_js').select2();
    
    $('body').on('click', '._color_checkbox_list ._color_item', function () {
       var input = $(this).find('input');
       if (input.is(":checked")) {
           $(this).addClass('active');
       } else {
           $(this).removeClass('active');
       }
    });
    
    $('body').on('click', '._vote_star_ver label', function () {
       var input = $(this).find('input');
       if (input.is(":checked")) {
           $('._vote_star_ver label').removeClass('active');
           $(this).addClass('active');
           $(this).closest('._range_ver').find('._range_bar ._range_ui_bar').slider('value', input.val());
       } else {
           $(this).removeClass('active');
       }
    });
    
    var quick_buy_modal = $('#quick_buy_modal');
    $('body').on('click', '._buy_bottom_btn, .quick_buy_btn', function (e) {
       e.preventDefault();
       var _item = $(this).closest('._item');
       var buy_vars = _item.find('._quick_buy_vars');
       if (buy_vars.length > 0) {
           _item.addClass('open_vars');
       } else {
           quick_buy_modal.modal('show');
       }
    });
    
    $('body').on('click', '._vars_list a', function (e) {
       e.preventDefault();
       quick_buy_modal.modal('show');
    });
    
    $('body').on('click', '._vars_close', function (e) {
       e.preventDefault();
       var _item = $(this).closest('._item');
       _item.removeClass('open_vars');
    });
    
//    $('._prod_thumb_images').bxSlider({
//        minSlides: 5,
//        maxSlides: 5,
//        slideWidth: 38,
//        mode: 'vertical',
//        pager: false
//    });

})(jQuery);

