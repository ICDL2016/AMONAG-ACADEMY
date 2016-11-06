$(function() {

	//SVG Fallback
	if(!Modernizr.svg) {
		$("img[src*='svg']").attr("src", function() {
			return $(this).attr("src").replace(".svg", ".png");
		});
	};

	//E-mail Ajax Send
	//Documentation & Example: https://github.com/agragregra/uniMail
	$("form").submit(function() { //Change
		var th = $(this);
		$.ajax({
			type: "POST",
			url: "mail.php", //Change
			data: th.serialize()
		}).done(function() {
			alert("Thank you!");
			setTimeout(function() {
				// Done Functions
				th.trigger("reset");
			}, 1000);
		});
		return false;
	});

	//Chrome Smooth Scroll
	try {
		$.browserSelector();
		if($("html").hasClass("chrome")) {
			$.smoothScroll();
		}
	} catch(err) {

	};

	$("img, a").on("dragstart", function(event) { event.preventDefault(); });
	
});

$(window).load(function() {

	$(".loader_inner").fadeOut();
	$(".loader").delay(400).fadeOut("slow");

});





$(document).ready(function () {

	var sizer = '.sizer';

	var container = $('.wrap__item');

	container.imagesLoaded(function () {
		container.masonry({
			itemSelector: '.item-masonry',
			columnWidth: sizer
		});
	});

	var sizer__post = '.sizer__post';

	var container = $('.wrap__item');

	container.imagesLoaded(function () {
		container.masonry({
			itemSelector: '.item-masonry',
			columnWidth: sizer__post
		});
	});


	$(".burger").click(function(){
		$(".sidebar__nav").slideToggle();
	});

	$(".language").click(function(){
		$(".lang__list").slideToggle();
	});


	$(".language").click(function(){
		$(".sidebar__nav").slideUp();
	});

	$(".burger").click(function(){
		$(".lang__list").slideUp();
	});


	$( ".mobile__search_btn" ).click(function() {
		$( ".search__block input[type='text']" ).fadeIn( 300, "linear" );
	});



	
});


(function($){
	$(function() {

		$('.jQtooltip').each(function() {
			var el = $(this);
			var title = el.attr('title');
			if (title && title != '') {
				el.attr('title', '').append('<div>' + title + '</div>');
				var width = el.find('div').width();
				var height = el.find('div').height();
				el.hover(
					function() {
						el.find('div')
							.clearQueue()
							.delay(200)
							.animate({width: width + 20, height: height + 20}, 200).show(200)
							.animate({width: width, height: height}, 200);
					},
					function() {
						el.find('div')
							.animate({width: width + 20, height: height + 20}, 150)
							.animate({width: 'hide', height: 'hide'}, 150);
					}
				).mouseleave(function() {
					if (el.children().is(':hidden')) el.find('div').clearQueue();
				});
			}
		})

	})
})(jQuery)



$(document).ready(function(){
	var pattern = /^[a-z0-9_-]+@[a-z0-9-]+\.([a-z]{1,6}\.)?[a-z]{2,6}$/i; //name-_09@mail09-.ru
	var mail = $('#mail');

	mail.blur(function(){
		if(mail.val() != ''){
			if(mail.val().search(pattern) == 0){
				$('.valid').css( "color", "green" );
				$('#submit').attr('disabled', false);
				mail.removeClass('error').addClass('ok');
			}else{
				$('.valid').css( "color", "red" );
				$('#submit').attr('disabled', true);
				mail.addClass('error');
			}
		}else{
			$('.valid').css( "", "" );
			mail.addClass('error');
			$('#submit').attr('disabled', true);
		}
	});
});





















