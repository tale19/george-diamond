function main() {
	// Dynamically show "read more" on top news if text is too long 
	function toggleNews() {
	;
		console.log("clicked");
	}

	// Locate the news span and its parent
	var span = document.getElementsByClassName('top-news-body');
	var parent = document.getElementsByClassName('top-news-paragraph');

	for (s=0; s<3; s++) {
		// console.log(span[s]);
		// console.log(parent[s]);
		// console.log(span[s]);
		// console.log(span[s].innerText);
		// console.log(span[s].innerText.length);
		// console.log(span[s].childNodes[0]);

		// console.log(parent[s]);
		// console.log(span[s]);
		// console.log(span[s].innerText);
		// console.log(span[s].innerText.length);
		// console.log(span[s].childNodes[0]);

		// create substrings from main span (thisSpan)
		var previewText = span[s].innerText.substring(0,150);
		var extraText = span[s].innerText.substring(150, span[s].innerText.length);
		console.log(previewText);
		console.log(extraText);
		console.log(span[s]);
		console.log(extraText.length);

		// create a new span that will hold the extra text
		var hiddenContent = document.createElement('span');
		// console.log(hiddenContent);
		var extraTextNode = document.createTextNode(extraText);
		hiddenContent.appendChild(extraTextNode);
		parent[s].appendChild(hiddenContent);

		// overwrite the whole content of thisSpan with just preview text
		var previewTextNode = document.createTextNode(previewText);
		console.log(previewTextNode);
		span[s].replaceChild(previewTextNode, span[s].childNodes[0]);
		console.log(span[s]);
		console.log(hiddenContent);
		$(hiddenContent).addClass('hidden-content');
		// $(span).addClass('newClass');

		// now create Read More and Read Less
		var anchorExpander = document.createElement('a');
		var expanderText = document.createTextNode('Read more...');
		anchorExpander.appendChild(expanderText);
		console.log(anchorExpander);
		parent[s].appendChild(anchorExpander);
		$(anchorExpander).addClass('news-expander');

		var anchorCollapser = document.createElement('a');
		var collapserText = document.createTextNode('Read less...');
		anchorCollapser.appendChild(collapserText);
		console.log(anchorCollapser);
		parent[s].appendChild(anchorCollapser);
		$(anchorCollapser).addClass('news-collapser');

		/* remove automatically generated whitespace 
		between thisSpan and hidden-content span: */
		parent[s].childNodes[4].previousSibling.data = "";
		console.log(parent[s].childNodes[4].previousSibling);


		// now add functionality to anchor expander/collapser
		$('.news-expander').click(function() {
			console.log('klik');
			console.log($(this.previousSibling));
			$(this.previousSibling).removeClass('hidden-content');
			// $(this).find('.hidden-content').toggleClass('hidden-content');
			// $('.hidden-content').toggleClass('hidden-content');
			$(this.nextSibling).show();
			$(this).hide();
		});

		$('.news-collapser').click(function() {
			console.log('klikić');
			console.log($(this.previousSibling.previousSibling));
			// $(this.nextSibling.nextSibling).toggleClass('hidden-content');
			$(this.previousSibling.previousSibling).addClass('hidden-content');
			// $('.hidden-content').toggleClass('hidden-content');
			$(this.previousSibling).show();
			$(this).hide();
		});

		console.log(parent[2]);
	}
}

$(document).ready(main);