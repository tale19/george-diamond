function main() {
	// *** SMOOTHLY SCROLL TO SHOW FROM JUMBOTRON LINKS ***


	// first, create an array of targets:
	// var targets = {};
	// targets['#shows-illusion-shortcut'] = '#shows-illusion';
	// targets['#shows-stage-shortcut'] = '#shows-stage';
	// targets['#shows-private-shortcut'] = '#shows-private';
	// targets['#shows-quickchange-shortcut'] = '#shows-quickchange';
	// targets['#shows-chinese-shortcut'] = '#shows-chinese';
	// targets['#shows-short-shortcut'] = '#shows-short';
	// targets['#shows-parlor-shortcut'] = '#shows-parlor';
	// targets['#shows-kids-shortcut'] = '#shows-kids';

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