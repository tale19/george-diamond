function main() {
	/* Dynamically show "read more" on top news if text is too long */
	function toggleNews() {
	;
		console.log("clicked");
	}

	var span = document.getElementById('thisSpan');
	// var convert = $('#thisSpan'.firstChild);
	console.log(span);
	console.log(span.innerText.length);


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