/**
 * Created by Nick on 10/19/17.
 */
$(document).ready(function () {
    $(".title").css('margin-top', $('.title').css('margin-bottom'));
    $(".experienceDate").css('margin-top', $('.experience').css('margin-top'));
    $("#description").css('height', $('#mainimg').css('height'));
    $("#mainimg").css('margin-top', ($("#navbar").outerHeight() + parseInt($("#mainimg").css('margin-top'))));
    $("#mainimgmobile").css('margin-top', ($("#navbar").outerHeight() + parseInt($("#mainimgmobile").css('margin-top'))));
    $("#description").css('margin-top', ($("#navbar").outerHeight() + parseInt($("#description").css('margin-top'))));
    $(".toPageLink").click(function() {
        $("#myNavbar").collapse("hide");
    })
});
$(window).resize(function () {
    $(".title").css('margin-top', $('.title').css('margin-bottom'));
    $(".experienceDate").css('margin-top', $('.experience').css('margin-top'));
    $("#description").css('height', $('#mainimg').css('height'));
});