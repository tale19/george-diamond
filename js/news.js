function main() {
	// var $misc = $('.news-preview-misc');
	// $misc.each(function(){
	// 	$targetHeight = $(this).prev().height();
	// 	$(this).height($targetHeight);
	// });


// *** News images appearing on viewport entry ***
// 	pass each news image container to the "in viewport checker" to get its position
	var $newsImageBox = $('.news-image-container');
	$newsImageBox.each(function(){
		if (inViewport($(this))) {
			$(this).find('img').addClass('appear');
		} 
	});

// 	repeat to make it work on scroll as well
	$(window).scroll(function() {
		console.log(inViewport($newsImageBox)); // ovde vraća true samo za prvi box, za ostale kaže UNDEFINED ???
		$newsImageBox.each(function(){
			if (inViewport($(this))) {
				$(this).find('img').addClass('appear');
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