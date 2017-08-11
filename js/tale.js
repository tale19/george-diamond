function main() {
	// *** Animate header text ***
	var content = document.getElementById('about-george').innerHTML;
	var text = document.getElementById('about-george').innerText;
	var contentLength = content.length;

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
			$(this).data("originalHTML", $(this).html());
			var $datum = $(this).find('.news-date:first');
			var $previewText = $(this).text().substring($(this).find('.news-date:first').text().length + 11, charCount);
			// create expander
			var $expander = $('<a>', {"class":"expand"}); // "" around class make it more compatible with less flexible browsers
			$expander.text('...Read More');
			// create preview
			var $preview = [$datum, $previewText, $expander]; // Object [span] + string + Object [a.expand]
			$(this).html($preview);
			console.log($preview);
			console.log($(this));

			console.log($expander);
			console.log($(this).html());
			$(this).data("truncatedHTML", $(this).html());
		});

		// expand on click
		$('.expand').click(function() {
			console.log($(this).parent());
			var $retrieveOriginal = $(this).parent().data("originalHTML");
			console.log($retrieveOriginal);

			console.log($(this).parents('.news-body'));
			// create collapser
			var $collapser = $('<a>', {"class":"collapse"}); // "" around class make it more compatible with less flexible browsers
			$collapser.text('...Read Less');
			console.log($collapser);
			var $originalWithReadLess = [$retrieveOriginal, $collapser];
			console.log($originalWithReadLess);
			console.log($(this));
			$(this).parents('.news-body').html($originalWithReadLess);
			console.log($(this).parents('.news-body'));
		});

		// collapse on click
		$('.collapse').click(function() {
			// console.log($(this));
			alert('readi');
			// $(this).parent().data("truncatedHTML");
		});

	};

	

	/*
	var showChar = 150;
	var ellipsestext = "...";
	var moretext = "Read more";
	var lesstext = "Read less";
	$('.more').each(function() {
		// var content = $(this).html();
		var content = this.innerHTML;
		var text = this.innerText;
		console.log(text);
 		// var text = this.innerText;
 		
  		var node = document.createElement("P");
  		var textnode = document.createTextNode("text here");
  		node.appendChild(textnode);
		document.getElementById("wrapper").appendChild(node);
  		node.innerHTML = 'test';
		console.log(text.length);
		console.log(content); 
		console.log(content.includes('</a>' && 'Diamond'));
		if(text.length > showChar) {

			var c = content.substr(0, showChar);
			var h = content.substr(showChar, content.length - showChar);

				// this checks if var c is in the middle of an element
				if(c.includes('<') && c.indexOf('</') == -1) {
					console.log('var c is split in the middle of an element');
					var pera = text[showChar];
					var diff = (content.indexOf('</') + 10 + content.indexOf(pera));
					console.log(diff);
					console.log(text[showChar]);
					c = content.substr(0, diff);
					h = content.substr(diff, content.length - diff);
					// c = text.substr(0, showChar);
					// h = text.substr(showChar, text.length - showChar);
				}
			console.log(c.length);

			var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';

			$(this).html(html);
		}

	});

	$(".morelink").click(function(){
		if($(this).hasClass("less")) {
			$(this).removeClass("less");
			$(this).html(moretext);
		} else {
			$(this).addClass("less");
			$(this).html(lesstext);
		}
		$(this).parent().prev().toggle();
		$(this).prev().toggle();
		return false;
	});
	*/

}

$(document).ready(main);