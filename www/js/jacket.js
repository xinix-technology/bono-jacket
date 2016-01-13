$(function() {
	url = document.URL;
	urlSplit = url.split('/');
	$("a[href='" + url + "']").addClass ("active");
	$("a[href='" + url + "']").parent ().addClass ("active");
	$(".sidebar a[href*='" + urlSplit[6] + "']").addClass ("active");
	$(".sidebar a[href*='" + urlSplit[6] + "']").parent ().addClass ("active");

	$('.alert').click(function(){
        $(this).addClass("animated bounceOutUp");
    });

    // $(".nav-menu h1 a").click(function () {
    //     if ($(".sidebar").length > 0) {
    //         $("body").removeClass ("show-sidebar");
    //         location.href = window.SITEURL;
    //         return false;
    //     }
    //     return false;
    // });

    $("table tr").click (function () {
        if ($(this).hasClass ("selected")) {
            $(this).removeClass ("selected").attr("data-selected", "");
        } else {
            $(this).addClass ("selected").attr("data-selected", "true");
        }

        if ($("[data-selected='true']").length > 0) {
            $(".read").addClass ("contextual");
            $(".navbar-bottom").removeClass("hidden");
        } else {
            $(".read").removeClass ("contextual");
            $(".navbar-bottom").addClass("hidden");
        }
    });

    $('#search-global .search-area .xn-search').click(function(){
        $(this).parent().toggleClass("select");
        $("#search-global #search .input-search").addClass("fadeIn");
    });

    $('#filter .dropdown').click(function(){
        $(this).parent().toggleClass("show");
    });



    if ($("html main.content p.empty").length >= 1) {
        $("html").addClass ("fix");
    } else {
        $("html").removeClass ("fix");
    }



});
