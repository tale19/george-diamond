function main() {
	// var $misc = $('.news-preview-misc');
	// $misc.each(function(){
	// 	$targetHeight = $(this).prev().height();
	// 	$(this).height($targetHeight);
	// });


// *** News items appearing one after another on scroll ***
// $elem = $('.elem');


	$(window).scroll(function() {
		$windowTop = $(window).scrollTop() + 67 // 67px is the navbar height;
		$windowHeight = $(window).height();
		$windowBottom = $windowTop + $windowHeight;
		// $clientHeight = $(window).clientHeight;
		console.log('window scrolltop: ' + $windowTop);
		console.log('window viewport height: ' + $windowHeight);
		console.log('window bottom view: ' + $windowBottom);



		$newsImageBox = $('.news-image-container');
		// console.log($newsImageBox);

		$newsImageBox.each(function() {
			$newsImageBoxTopPosition = $(this).offset().top;
			$newsImageBoxBottomPosition = $(this).offset().top + $(this).height();
			console.log('news preview top position: ' + $newsImageBoxTopPosition);
			console.log('news preview bottom position: ' + $newsImageBoxBottomPosition);
			if (($newsImageBoxTopPosition > $windowTop) && ($newsImageBoxBottomPosition < $windowBottom)) {
				$(this).find('img').addClass('appear');
			} else {
				
				// $(this).find('img').removeClass('appear');
			}
		});
	});


}

$(document).ready(main);