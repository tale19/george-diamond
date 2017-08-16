function main() {
	function noop() {};	// this function does nothing

  	// This is then function used to detect if the element is scrolled into view
	function elementScrolled(elem) {
		var docViewTop = $(window).scrollTop();
		var docViewBottom = docViewTop + $(window).height();
		var elemTop = $(elem).offset().top;
		return ((elemTop <= docViewBottom) && (elemTop >= docViewTop));
  	}


	// *** Animate header text ***
	var $heading = $('#header-holder');
	console.log($heading);
	var $aboutGeorge = $('#about-george');
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
		// first, change all text into spans
		// for (var i = 0 in $h1text) {
		// 	var $span = $('<span/>', {"class": "h1-span"}); // "" around class make it more compatible with less flexible browsers
		// 	$span.text($h1text[i]);
		// 	$h1.append($span);
		// }
		// var $onlySpans = $('h1').html().substring(h1length);
		// $h1.html($onlySpans);

		// // now do the animation (random color for each letter)
		// $('h1').find('span').each(function() {
		// 	var rgb = [] // create an array to hold three random numbers from 0 to 256
		// 	for (var i = 0; i <= 2; i++) {
		// 		var randomNumber = Math.floor(Math.random() * 257);
		// 		rgb.push(randomNumber);
		// 	}
		// 	var randomColor = "rgb(" + rgb[0] + "," + rgb[1] + "," + rgb[2] + ")"; // create a string
			
		// 	var colors = [] // create an array to hold one new random color on each iteration
		// 	colors.push(randomColor);
		// 	$(this).css('color', colors);
		// });

		$h1.addClass('gradient');	
	}

		// if ($h2text.string() != "") {
		// 	alert('radi');

	function animateh2() {
		// first, change all WORDS into spans
		// // console.log($h2text);

		// for (var i = 0 in $h2text) {
		// 	var $span = $('<span/>', {"class": "h2-span"}); // "" around class make it more compatible with less flexible browsers
		// 	var $headingWord;
		// 	// while () {
		// 	// 	alert('radi');
		// 	// }
		// 	// $span.text($headingWord[i]);
		// 	$h2.append($span);
		// }
		// var $onlySpans = $('h2').html().substring(h2length);
		// $h2.html($onlySpans);
		// console.log($h2);
		// console.log($h2text);

		// // 
		// }
		// now, do your animation (jumping letters)
		// console.log($('h2').find('span'));
		// $('h2').find('span').each(function(i) {
		// 	$(this).delay(150 * i).animate({top: '-5px'}, 400);
		// 	$(this).delay(150 * i).animate({top: '0'}, 400);
		// 	$(this).addClass('animationExecutedOnce');
		// });

		$h2.addClass('gradient');

	}

	function executeHeaderTextAnimation() {
		var content = document.getElementById('about-george').innerHTML;
		var text = document.getElementById('about-george').innerText;
		var contentLength = content.length;
		var aboutGeorgeHeight = document.getElementById('about-george').scrollHeight;
		document.getElementById('about-george').style.height = "" + aboutGeorgeHeight + "px";
		for (i=0; i < text.length; i++) {
		  var span = document.createElement('span');
		  var node = document.createTextNode(text[i]);
		  span.appendChild(node);
		  document.getElementById('about-george').appendChild(span);
		  document.getElementById('about-george').innerHTML[i] = span;
		}
		var onlySpans = document.getElementById('about-george').innerHTML.substring(contentLength);
		document.getElementById('about-george').innerHTML = onlySpans;
		console.log(document.getElementById('about-george'));
		$('#about-george span').hide().fadeIn(1700);
		$aboutGeorge.addClass('animationExecutedOnce');
	}

	function animateEntireHeading() {
		animateh1();
		animateh2();
		executeHeaderTextAnimation();
		$heading.children().addClass('animationExecutedOnce');
	}
	spellAnimation.addEventListener("complete", animateEntireHeading);

	if(elementScrolled($aboutGeorge) && elementScrolled($heading) && !($aboutGeorge.hasClass('animationExecutedOnce')) && !($heading).hasClass('animationExecutedOnce')) {
		spellAnimation.play();
		// executeHeaderTextAnimation();
	}

	$(window).scroll(function() {
		if(elementScrolled($aboutGeorge) && !($aboutGeorge.hasClass('animationExecutedOnce'))) {	// if $aboutGeorge is scrolled into view (if elemsScrolled == true)
			spellAnimation.play();
		}
	});
	console.log($heading.children());
	console.log($h1);
	console.log($h2);



	// *** Dynamically show "read more" on top news if text is too long ***
	var charCount = 350;
	var $newsBody = $('.news-body');
	// create preview
	if ($newsBody.text().length > charCount) {
		$newsBody.each(function() {

			// create expander
			var $expander = $('<a/>', {"class": "expandNews"}); // "" around class make it more compatible with less flexible browsers
			$expander.text('...Read More');
			// create collapser
			var $collapser = $('<a/>', {"class": "collapseNews"}); // "" around class make it more compatible with less flexible browsers
			$collapser.text('...Read Less');

			// create full view after expansion
			var $originalHTML = $(this).html();
			var $fullview = [$originalHTML, $collapser]; // string (HTML) + Object [a.collapse]
			$(this).data("original", $fullview);


			// create preview
			var $datum = $(this).find('.news-date:first');
			var $previewText = $(this).text().substring($(this).find('.news-date:first').text().length + 11, charCount);
			var $preview = [$datum, $previewText, $expander]; // Object [span] + string + Object [a.expand]
			$(this).html($preview);
			$(this).data("truncatedHTML", $(this).html());
		});
	};

	// expand on click
	$(document).on("click", ('.expandNews'), function() {
		var $retrieveOriginal = $(this).parent().data("original");
		$(this).parents('.news-body').html($retrieveOriginal);
	});

	// collapse on click
	$(document).on("click", ('.collapseNews'), function(){
		$truncatedNews = $(this).parents('.news-body').data("truncatedHTML");
		$(this).parents('.news-body').html($truncatedNews);
	});

	// Dynamically define container height and set overflow when a news article is expanded
	console.log($('#top-news'));
	console.log(document.getElementById('top-news'));
	document.getElementById('top-news').style.height = "" + document.getElementById('top-news').scrollHeight + "px";
	document.getElementById('top-news').style.overflow = "auto";
	document.getElementById('top-news-image').style.height = "" + document.getElementById('top-news').scrollHeight + "px";


	// *** Jumbotron listed items appearing one after another on scroll ***
	var amazingShowsHeight = document.getElementById('amazing-shows-list').scrollHeight;
	document.getElementById('amazing-shows-list').style.height = "" + amazingShowsHeight + "px";
	var $amazingShows = $('#amazing-shows-list li');

	$(window).scroll(function(){
		// This is where we use the function to detect if "$amazingShows" is scrolled into view, and when it is add the class ".animationExecutedOnce" to the <p> child element
		if(elementScrolled($amazingShows) && !($amazingShows.hasClass('animationExecutedOnce'))) {	// if $amazingShows is scrolled into view (if elemsScrolled == true)
			// Your function here
			$amazingShows.each(function(i) {
				$(this).delay(150 * i).animate({left: '15px'}, 400);
				$(this).delay(150 * i).animate({left: '0'}, 400);
				$(this).addClass('animationExecutedOnce');
			});
		}
	});
}

$(document).ready(main);
