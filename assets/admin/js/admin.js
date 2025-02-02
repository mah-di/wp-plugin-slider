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

    const optionsToggleMapper = [
        {
            name: "ms_show_nav",
            target: "#ms_nav_settings"
        },
        {
            name: "ms_show_dots",
            target: "#ms_dots_settings"
        },
        {
            name: "ms_autoplay",
            target: "#ms_autoplay_settings"
        }
    ]

    function toggleNavSettings(name, target) {
        let isShowSettings = $(`input[name=${name}]:checked`).val()
        let settings = $(target)

        if (isShowSettings === 'true')
            settings.removeClass('d-none')

        if (isShowSettings === 'false')
            settings.addClass('d-none')
    }

    window.onload = () => optionsToggleMapper.forEach(optionsToggler => toggleNavSettings(optionsToggler.name, optionsToggler.target))

    optionsToggleMapper.forEach(optionsToggler => {
        $(`input[name=${optionsToggler.name}]`).on('change', () => toggleNavSettings(optionsToggler.name, optionsToggler.target))
    })
});