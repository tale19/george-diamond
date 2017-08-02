function main() {
	/* Dynamically show "read more" on top news if text is too long */
	function toggleNews() {
	;
		console.log("clicked");
	}

	var span = document.getElementById('thisSpan');
	var parent = document.getElementById('parent-paragraph');
	// console.log(parent);
	// console.log(span);
	// console.log(span.innerText);
	// console.log(span.innerText.length);
	// console.log(span.childNodes[0]);
	var previewText = span.innerText.substring(0,100);
	var extraText = span.innerText.substring(100, span.innerText.length);
	console.log(previewText);
	console.log(extraText);
	// console.log(span);
	// console.log(extraText.length);
	var hiddenContent = document.createElement('span');
	// console.log(hiddenContent);
	var extraTextNode = document.createTextNode(extraText);
	hiddenContent.appendChild(extraTextNode);

	var previewTextNode = document.createTextNode(previewText);
	console.log(previewTextNode);
	span.replaceChild(previewTextNode, span.childNodes[0]);
	console.log(span);
	console.log(hiddenContent);
	$(hiddenContent).addClass('hidden-content');
	$(span).addClass('newClass');

	var anchorExpander = document.createElement('a');
	var expanderText = document.createTextNode('Read more...');
	anchorExpander.appendChild(expanderText);
	console.log(anchorExpander);
	parent.appendChild(anchorExpander);
	$(parent).attr('id', 'news-expander');



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