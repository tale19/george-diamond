function main() {
	// *** Animate header text ***
	var content = document.getElementById('about-george').innerHTML;
	var text = document.getElementById('about-george').innerText;
	var contentLength = content.length;
	var aboutGeorgeHeight = document.getElementById('about-george').clientHeight;
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
	// console.log(document.getElementById('about-george'));
	$('#about-george span').delay(1).hide().fadeIn(1400);


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

	// *** Dynamically define container height and set overflow when a news article is expanded ***
	console.log($('#top-news'));
	console.log(document.getElementById('top-news'));
	document.getElementById('top-news').style.height = "" + document.getElementById('top-news').scrollHeight + "px";
	document.getElementById('top-news').style.overflow = "auto";
	document.getElementById('top-news-image').style.height = "" + document.getElementById('top-news').scrollHeight + "px";


}

$(document).ready(main);
