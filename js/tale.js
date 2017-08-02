function main() {
	/* Dynamically show "read more" on top news if text is too long */
	function toggleNews() {
	;
		console.log("clicked");
	}

	var span = document.getElementById('thisSpan');
	// var parent = document.getElementsByClassName('top-news-preview');
	// var convert = $('#thisSpan'.firstChild);
	console.log(span);
	console.log(span.innerText.length);
	console.log(span.innerText);
	var extraText = span.innerText.substring(100, span.innerText.length);
	span = span.innerText.substring(0,100);
	console.log(span);
	console.log(extraText.length);
	var hiddenContent = document.createElement('span');
	console.log(hiddenContent);
	var node = document.createTextNode(extraText);
	hiddenContent.appendChild(node);
	// console.log(hiddenContent);
	$(span).addClass('')
	$(hiddenContent).addClass('hidden-content');
	// console.log(hiddenContent);
	// var hiddenText = document.createTextNode(extraText);
	// hiddenContent.appendChild(extraText);
	// console.log(extraText);
	// console.log(span.innerText);

	// if (span.innerText.length > 100) {
	// 	// console.log(hiddenText);
	// 	// hiddenText.css('color', 'blue');
	// }



	$('#news-expander').click(function() {
		console.log('klik');
		console.log($(this.nextElementSibling));
		// $(this.nextSibling.nextSibling).toggleClass('hidden-content');
		$(this.nextElementSibling).toggleClass('hidden-content');
		$(this).hide();
		$('#news-collapser').show();
	});

	$('#news-collapser').click(function() {
		console.log('klikić');
		console.log($(this.previousElementSibling));
		// $(this.nextSibling.nextSibling).toggleClass('hidden-content');
		$(this.previousElementSibling).toggleClass('hidden-content');
		$(this).hide();
		$('#news-expander').show();
	});
}

$(document).ready(main);