jQuery(document).ready(function ($) {
    let currentValue = $('#cs_post_type').val();

    $('#cs_post_type').on('change', function () {
        let newValue = $(this).val();

        let isConfirmed = confirm("Are you sure you want to change the post type?");

        if (!isConfirmed) {
            $(this).val(currentValue);
        } else {
            $(this).trigger('afterChange');
            currentValue = newValue;
        }
    });

    const optionsToggleMapper = [
        {
            name: "cs_show_nav",
            target: "#cs_nav_settings"
        },
        {
            name: "cs_show_nav_sm",
            target: "#cs_nav_position_sm"
        },
        {
            name: "cs_show_dots",
            target: "#cs_dots_settings"
        },
        {
            name: "cs_autoplay",
            target: "#cs_autoplay_settings"
        },
        {
            name: "cs_show_comments",
            target: "#cs_comment_settings"
        },
        {
            name: "cs_show_category",
            target: "#cs_category_settings"
        },
        {
            name: "cs_show_tags",
            target: "#cs_tag_settings"
        },
        {
            name: "cs_show_excerpt",
            target: "#cs_excerpt_settings"
        },
        {
            name: "cs_show_author",
            target: "#cs_author_settings"
        },
        {
            name: "cs_show_date",
            target: "#cs_date_settings"
        }
    ]

    function toggleOptionSettings(name, target) {
        let isShowSettings = $(`input[name=${name}]:checked`).val()
        let settings = $(target)
        let defaultView = settings.data('default')

        settings.hide()

        if (['true', 'show'].includes(isShowSettings))
            settings.show()

        if (!isShowSettings && defaultView == 'show')
            settings.show()
    }

    $(window).on('load', () => optionsToggleMapper.forEach(optionsToggler => toggleOptionSettings(optionsToggler.name, optionsToggler.target)))

    optionsToggleMapper.forEach(optionsToggler => {
        $(`input[name=${optionsToggler.name}]`).on('change', () => toggleOptionSettings(optionsToggler.name, optionsToggler.target))
    })

    $('#cs_animation_entrance').selectize({ placeholder: "Select An Option" })
    $('#cs_animation_exit').selectize({ placeholder: "Select An Option" })
});