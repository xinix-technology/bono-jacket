"use strict";

$(function(){
	$("html").click(function (event) {
        var element = null;
        var dom = '<div class="overflow"></div>';

        // Sub menu
        if ($(event.target).parent().parent().hasClass("sub")) {
            element = $(event.target).parent().parent();
        } else if ($(event.target).parent().hasClass("sub")) {
            element =  $(event.target).parent();
        } else if ($(event.target).hasClass("sub")) {
            element = $(event.target);
        }


        if (element) {
            element.siblings(".sub").find("ul").fadeOut(128);
            element.find("ul").fadeIn(128);
            element.append(dom);
            $(".overflow").click(function() {
              $(this).remove();
            });
            event.stopPropagation();
            return false;
        } else {
            $('.sub').find("ul").fadeOut (128);
            $(".overflow").remove();
        }
    });
});