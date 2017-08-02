function main() {
	// Dynamically show "read more" on top news if text is too long 
	function toggleNews() {
	;
		console.log("clicked");
	}

	// Locate the news span and its parent
	var span = document.getElementById('thisSpan');
	var parent = document.getElementById('parent-paragraph');
	console.log(parent);
	console.log(span);
	console.log(span.innerText);
	console.log(span.innerText.length);
	console.log(span.childNodes[0]);

	// create substrings from main span (thisSpan)
	var previewText = span.innerText.substring(0,150);
	var extraText = span.innerText.substring(150, span.innerText.length);
	console.log(previewText);
	console.log(extraText);
	console.log(span);
	console.log(extraText.length);

	// create a new span that will hold the extra text
	var hiddenContent = document.createElement('span');
	// console.log(hiddenContent);
	var extraTextNode = document.createTextNode(extraText);
	hiddenContent.appendChild(extraTextNode);
	parent.appendChild(hiddenContent);

	// overwrite the whole content of thisSpan with just preview text
	var previewTextNode = document.createTextNode(previewText);
	console.log(previewTextNode);
	span.replaceChild(previewTextNode, span.childNodes[0]);
	console.log(span);
	console.log(hiddenContent);
	$(hiddenContent).addClass('hidden-content');
	// $(span).addClass('newClass');

	// now create Read More and Read Less
	var anchorExpander = document.createElement('a');
	var expanderText = document.createTextNode('Read more...');
	anchorExpander.appendChild(expanderText);
	console.log(anchorExpander);
	parent.appendChild(anchorExpander);
	$(anchorExpander).attr('id', 'news-expander');

	var anchorCollapser = document.createElement('a');
	var collapserText = document.createTextNode('Read less...');
	anchorCollapser.appendChild(collapserText);
	console.log(anchorCollapser);
	parent.appendChild(anchorCollapser);
	$(anchorCollapser).attr('id', 'news-collapser');

	// remove automatically generated whitespace 
	// between thisSpan and hidden-content span:
	parent.childNodes[4].previousSibling.data = "";
	console.log(parent.childNodes[4].previousSibling);


	// now add functionality to anchor expander/collapser
	$('#news-expander').click(function() {
		console.log('klik');
		console.log($(this.previousSibling));
		// $(this.nextSibling.nextSibling).toggleClass('hidden-content');
		$(this.previousSibling).toggleClass('hidden-content');
		$(this).hide();
		$('#news-collapser').show();
	});

	$('#news-collapser').click(function() {
		console.log('klikić');
		console.log($(this.previousSibling.previousSibling));
		// $(this.nextSibling.nextSibling).toggleClass('hidden-content');
		$(this.previousSibling.previousSibling).toggleClass('hidden-content');
		$(this).hide();
		$('#news-expander').show();
	});
}

$(document).ready(main);