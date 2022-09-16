$(document).ready(function () {
    $(".card-box").hide();
    $("#search").val("");
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });
    $(".card")
        .mouseenter(function () {
            $(this).find(".card-box").show();
        })
        .mouseleave(function () {
            $(this).find(".card-box").hide();
        });
});