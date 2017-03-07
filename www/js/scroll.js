"use strict";

$(function () {
    $(".scroll-content").scroll({
        rubber: true,
        onScroll: function(){
            setTimeout(function(){
                $('.vslider').css('opacity', 1);
            }, 768 + (768/4));
        }
    });
});