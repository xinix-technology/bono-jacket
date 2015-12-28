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
});