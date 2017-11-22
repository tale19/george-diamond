function main() {
	// var $misc = $('.news-preview-misc');
	// $misc.each(function(){
	// 	$targetHeight = $(this).prev().height();
	// 	$(this).height($targetHeight);
	// });


// *** News images appearing on viewport entry ***
	
// first, create a getter that returns the window parameters
	function getWindowOffset() {
		var $windowTop = $(window).scrollTop() + 67; // 67px is the navbar height;
		var $windowHeight = $(window).height();
		var $windowBottom = $windowTop + $windowHeight;
		return [$windowTop, $windowHeight, $windowBottom];
	}

	console.log('window scrolltop: ' + getWindowOffset()[0]);
	console.log('window viewport height: ' + getWindowOffset()[1]);
	console.log('window bottom view: ' + getWindowOffset()[2]);


// next, get offsets of all the news image boxes
// create a global getter for elements' position
	function getElementVerticalPosition($elem) {
		$elementTopPosition = $elem.offset().top;
		$elementBottomPosition = $elem.offset().top + $elem.height();
		// console.log('news preview top position: ' + $elementTopPosition);
		// console.log('news preview bottom position: ' + $elementBottomPosition);
		return [$elementTopPosition, $elementBottomPosition];
	}

// create a method that checks if an element is in the viewport using the window offset and element's parameters
	function inViewport($elem) {
		if (getElementVerticalPosition($elem)[0] > getWindowOffset()[0] && getElementVerticalPosition($elem)[1] < getWindowOffset()[2]) {
			// console.log('element is in Viewport');
			return true;
		} 
		// else {
		// 	console.log('not in Viewport');
		// }
	}
	
	var $newsImageBox = $('.news-image-container');


// then, pass each news image container to the method to get its position



		// var positions = [];
		$newsImageBox.each(function(){
			console.log(getElementVerticalPosition($(this))[0]);
			console.log(getElementVerticalPosition($(this))[1]);
			// getElementVerticalPosition($(this));
			// return [$newsBoxTop, $newsBoxBottom];
			if (inViewport($(this))) {
				$(this).find('img').addClass('appear');
				console.log('opa');
			} 
			// else {
			// 	$(this).find('img').removeClass('appear');
			// }
		});
		// $clientHeight = $(window).clientHeight;
	$(window).scroll(function() {
		console.log('window scrolltop: ' + getWindowOffset()[0]);
		// console.log('window viewport height: ' + getWindowOffset()[1]);
		// console.log('window bottom view: ' + getWindowOffset()[2]);
		console.log(inViewport($newsImageBox));
		$newsImageBox.each(function(){
			console.log(getElementVerticalPosition($(this))[0]);
			console.log(getElementVerticalPosition($(this))[1]);
			// getElementVerticalPosition($(this));
			// return [$newsBoxTop, $newsBoxBottom];
			if (inViewport($(this))) {
				$(this).find('img').addClass('appear');
				console.log('opa');
			} 
			// else {
			// 	$(this).find('img').removeClass('appear');
			// }
		});
	});

		// console.log(positions);





		// console.log($newsImageBox);




}

$(document).ready(main);