// Description: Toggle between calendar and list view
(function ($) {
    $(document).ready(function () {
        $('.wfea-toggle__cal').hide();
        //disable the list button
        $('.wfea-toggle__button--list').prop('disabled', true);
        $('.wfea-toggle__button--cal').click(function () {
            $('.wfea-toggle__cal').show();
            $('.wfea-toggle__list').hide();
            // disable this button
            $(this).prop('disabled', true);
            // enable the other button
            $('.wfea-toggle__button--list').prop('disabled', false);
        });
        $('.wfea-toggle__button--list').click(function () {
            $('.wfea-toggle__cal').hide();
            $('.wfea-toggle__list').show();
            // disable this button
            $(this).prop('disabled', true);
            // enable the other button
            $('.wfea-toggle__button--cal').prop('disabled', false);
        });
    });
})(jQuery);


