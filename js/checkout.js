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
    });

    $('body').on('click', '._ci_remove', function (e) {
        e.preventDefault();
        var title = $(this).closest('tr').find('._ci_title').text();
        $(this).closest('tr').remove();
        $('._message_box').removeClass('hidden');
        $('._message_box').find('.set_text').html(title);
    });

})(jQuery);


