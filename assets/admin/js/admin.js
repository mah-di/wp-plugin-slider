jQuery(document).ready(function ($) {
    $(".ms_tag_option").hide();

    $("#ms_post_type").on("change", function () {
        var selectedValue = $(this).val();
        var $select = $('#tag_query').selectize();
        var selectizeInstance = $select[0].selectize;

        selectizeInstance.clear();
        setTimeout(function() {
            $(".ms_tag_option").hide();
            $("." + selectedValue + "_tag_option").show();
        }, 500)
    });

    $("#ms_post_type").trigger("change");
});