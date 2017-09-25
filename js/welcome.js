function welcome() {

	// *** Animate header text ***
	var $spellBox = $('#spell-animation-container');
	var $languageBox = $('#language-box');
	console.log($languageBox);
	var spellAnimation = bodymovin.loadAnimation({
		container: document.getElementById('spell-animation-container'),
		renderer: 'svg',
		loop: false,
		autoplay: false,
		path: 'https://raw.githubusercontent.com/abrahamrkj/facebook-spell/master/data.json'
	});

	// animate heading (h1, h2)
	var $h1 = $('h1');
	var $h1text = $h1.text();
	var $h2 = $('h2');
	var $h2text = $h2.text();
	var h1length = $('h1').text().length;
	var h2length = $('h2').text().length;
	// function tesss() {
	// 	for (var i=120; i<255; i++) {
	// 		return Math.floor(Math.random()) * i;
	// 	}
	// }

	
	function animateh1() {
		// $h1.addClass('gradient');	
	}

	function animateh2() {
		
	}

	function animateEntireHeading() {
		animateh1();
		animateh2();
		$languageBox.removeClass('hidden');
		$spellBox.addClass('hidden');
	}

	spellAnimation.addEventListener("complete", animateEntireHeading);

	spellAnimation.play();
	// executeHeaderTextAnimation();


	console.log($languageBox);
	console.log($h1);
	console.log($h2);

}

$(document).ready(welcome);