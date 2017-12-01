function main() {
	// *** SMOOTHLY SCROLL TO SHOW FROM JUMBOTRON LINKS ***
	$showShortcut = $('.shows-full-list-item');
	$showShortcut.on('click', function(e){
		e.preventDefault;
		var shortcut = '#' + $(this).attr('id');
		var target = $(this).data('target');
		console.log(shortcut + ' has target ' + target);
		$('html, body').animate({
        	scrollTop: $('#' + target).offset().top - 67
    }, 1200);
	});

	// *** Paragraphs and images appearing on viewport entry ***
// 	pass each paragraph container to the "in viewport checker" to get its position
	// var $showTitle = $('#shows-content .show-box .show-article h4');
	var $showsRow = $('#shows-content .show-box .row');
	var $showsImg = $('#shows-content .shows-misc img');
// 	repeat to make it work on scroll as well
	$(window).scroll(function() {
		$showsRow.each(function(){
			if (inPartialViewport($(this))) {
				$(this).find('.paragraph').addClass('appear');
				$(this).find('img').addClass('appear');
			} 
		});
	});

	$(window).scroll(function() {
		$showsImg.each(function(){
			if (inPartialViewport($(this))) {
				$(this).addClass('appear');
				console.log($(this).attr('src') + ' entered');
			} 
		});
	});





	// *** SCROLLTOP ***
	
	// first, make scrolltop button visible only when there's an offset 
	$scrolltopButton = $('.scrolltop-button');
	$(window).scroll(function() {
		if (getWindowOffset()[0] > 200) {
			$scrolltopButton.addClass('appear');
		}
		else {
			$scrolltopButton.removeClass('appear');
		}
	});

	// next, make it go *SMOOTHLY*  to page top on click
	$scrolltopButton.on('click', function(e) {
		// $(window).scrollTop(0);
		$("html, body").animate({ scrollTop: 0 }, 600);
    	e.preventDefault();
	});
}

$(document).ready(main);