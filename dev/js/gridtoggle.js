$(document).ready(function() {
    $("body").append("<div id='debug'>turn grid: <a href='' id='togglegrid'>" 
    + gridstate() + "</a></div>";);
    $("#debug").css("position", "absolute");
    $("#debug").css("bottom", "0");
    $("#togglegrid").click(toggle_grid);
});

function toggle_grid () {
    $(".container").toggleClass("showgrid");
    $("#togglegrid").text(gridstate());
    return false;
}

function gridstate () {
    if ($(".container").hasClass("showgrid")) {
        return 'off';
    } else {
        return 'on';
    };
}
