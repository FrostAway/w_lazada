(function ($) {
    $('body').on('change', '._co_cb_login input[name="co_option"]', function () {
        if ($(this).val() == 1) {
            $('._co_cb_password').removeClass('hidden').prop('disabled', false);
        } else {
            $('._co_cb_password').addClass('hidden').prop('disabled', true);
        }
    });

    $('body').on('click', '.payment-tabs li a', function () {
        $(this).find('input[type="radio"]').prop('checked', true);
    });


    $('body').on('click', '.up-down-select .down', function (e) {
        e.preventDefault();
        var select = $(this).parent().find('select');
        var old_val = parseInt(select.val());
        if (old_val <= 1) {
            var title = $(this).closest('tr').find('._ci_title').text();
            $(this).closest('tr').remove();
            $('._message_box').removeClass('hidden');
            $('._message_box').find('.set_text').html(title);
        } else {
            var new_val = old_val - 1;
            select.val(new_val);
        }
        updateQuantity();
    });

    $('body').on('click', '.up-down-select .up', function (e) {
        e.preventDefault();
        var select = $(this).parent().find('select');
        var max_val = select.find('option:last-child').attr('value');
        var old_val = parseInt(select.val());
        var new_val;
        if (parseInt(max_val) > old_val) {
            new_val = old_val + 1;
        } else {
            new_val = old_val;
        }
        select.val(new_val);
        updateQuantity();
    });

    $('body').on('click', '._ci_remove', function (e) {
        e.preventDefault();
        var title = $(this).closest('tr').find('._ci_title').text();
        $(this).closest('tr').remove();
        $('._message_box').removeClass('hidden');
        $('._message_box').find('.set_text').html(title);
    });

    function updateQuantity() {
        var el_quantity = $('._total_quantity');
        var el_item_price = $('._ci_price');
        var el_total_price = $('._total_price');
        var total = 0;
        $('.up-down-select select').each(function () {
            total += parseInt($(this).val());
        });
        el_quantity.text(total);
        var total_price = 0;
        el_item_price.each(function () {
            var el_price = $(this).find('.dis_price');
            var quantity = parseInt($(this).closest('tr').find('.up-down-select select').val());
            total_price += parseInt(el_price.text().replace(/\./g, '')) * quantity;
        });
        el_total_price.text(numberFormat(total_price));
    }
    
    function numberFormat(nStr, thousand_sep) {
        if (typeof thousand_sep == "undefined") {
            thousand_sep = '.';
        }
        nStr += '';
        var x = nStr.split('.');
        var x1 = x[0];
        var x2 = x.length > 1 ? '.' + x[1] : '';
        var rgx = /(\d+)(\d{3})/;
        while (rgx.test(x1)) {
            x1 = x1.replace(rgx, '$1' + thousand_sep + '$2');
        }
        return x1 + x2;
    }

})(jQuery);


