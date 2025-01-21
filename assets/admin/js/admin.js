jQuery(document).ready(function ($) {
    var $select = $('#tag_query').selectize();
    var selectizeInstance = $select[0].selectize;
    selectizeInstance.refreshOptions(false);

    const selectedValue = $("#ms_post_type").val();
    $(`.ms_tag_option:not(.${selectedValue}_tag_option)`).addClass("d-none");
    
    $("#ms_post_type").on("change", function () {
        var $select = $('#tag_query').selectize();
        var selectizeInstance = $select[0].selectize;
        var selectedValue = $(this).val();
        
        selectizeInstance.clear();
        selectizeInstance.refreshOptions(false);

        $(".ms_tag_option").addClass("d-none");
        $("." + selectedValue + "_tag_option").removeClass("d-none");
    });
});