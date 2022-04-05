$(document).ready(function() {
    $('#1').css("display", "block");

    $('#s1').click(function(event) {
        event.preventDefault();
        $('.maps').siblings().css("display", "none");
        $('#1').css("display", "block");
    });
    $('#s2').click(function(event) {
        event.preventDefault();
        $('.maps').siblings().css("display", "none");
        $('#2').css("display", "block");
    });
    $('#s3').click(function(event) {
        event.preventDefault();
        $('.maps').siblings().css("display", "none");
        $('#3').css("display", "block");
    });
    $('#s4').click(function(event) {
        event.preventDefault();
        $('.maps').siblings().css("display", "none");
        $('#4').css("display", "block");
    });


    $('.menu-toggle').click(function(event) {

        $(".menu-toggle").toggleClass("toggled-on");
        $(".site-header-menu").toggleClass("toggled-on");
        $(".site-header").toggleClass("toggled-on");
    });

});