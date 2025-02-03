jQuery(document).ready(function ($) {
    let currentValue = $('#ms_post_type').val();

    $('#ms_post_type').on('change', function () {
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
        },
        {
            name: "ms_show_comments",
            target: "#ms_comment_settings"
        },
        {
            name: "ms_show_category",
            target: "#ms_category_settings"
        },
        {
            name: "ms_show_tags",
            target: "#ms_tag_settings"
        },
        {
            name: "ms_show_excerpt",
            target: "#ms_excerpt_settings"
        },
        {
            name: "ms_show_author",
            target: "#ms_author_settings"
        },
        {
            name: "ms_show_date",
            target: "#ms_date_settings"
        }
    ]

    function toggleNavSettings(name, target) {
        let isShowSettings = $(`input[name=${name}]:checked`).val()
        let settings = $(target);console.log(isShowSettings)

        if (['true', 'show'].includes(isShowSettings))
            settings.show()

        if (['false', 'hide'].includes(isShowSettings))
            settings.hide()
    }

    window.onload = () => optionsToggleMapper.forEach(optionsToggler => toggleNavSettings(optionsToggler.name, optionsToggler.target))

    optionsToggleMapper.forEach(optionsToggler => {
        $(`input[name=${optionsToggler.name}]`).on('change', () => toggleNavSettings(optionsToggler.name, optionsToggler.target))
    })
});