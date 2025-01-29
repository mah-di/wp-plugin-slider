jQuery(document).ready(function ($) {
    var currentValue = $('#ms_post_type').val();

    $('#ms_post_type').on('change', function () {
        var newValue = $(this).val();

        var isConfirmed = confirm("Are you sure you want to change the post type?");

        if (!isConfirmed) {
            $(this).val(currentValue);
        } else {
            $(this).trigger('afterChange');
            currentValue = newValue;
        }
    });
});