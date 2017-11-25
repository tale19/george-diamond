function main() {
	// *** Dynamically show "read more" on top news if text is too long ***
	// var charCount = 350;
	// var $newsBody = $('.top-news-body');
	// create preview

	// // $newsBody.each(function(){

	// // 	if ($(this).text().length > charCount) {
	// // 			// create expander
	// // 			var $expander = $('<a/>', {"class": "expandNews"}); // "" around class make it more compatible with less flexible browsers
	// // 			$expander.text('...Read More');
	// // 			// create collapser
	// // 			var $collapser = $('<a/>', {"class": "collapseNews"}); // "" around class make it more compatible with less flexible browsers
	// // 			$collapser.text('...Read Less');

	// // 			// create full view after expansion
	// // 			var $originalHTML = $(this).html();
	// // 			var $fullview = [$originalHTML, $collapser]; // string (HTML) + Object [a.collapse]
	// // 			$(this).data("original", $fullview);


	// // 			// create preview
	// // 			var $datum = $(this).find('.top-news-date:first');
	// // 			var $previewText = $(this).text().substring(0, charCount);
	// // 			var $preview = [$datum, $previewText, $expander]; // Object [span] + string + Object [a.expand]
	// // 			$(this).html($preview);
	// // 			$(this).data("truncatedHTML", $(this).html());
	// // 	};
	// // });
	// // expand on click
	// $(document).on("click", ('.expandNews'), function() {
	// 	var $retrieveOriginal = $(this).parent().data("original");
	// 	$(this).parents('.top-news-body').html($retrieveOriginal);
	// });

	// // collapse on click
	// $(document).on("click", ('.collapseNews'), function(){
	// 	$truncatedNews = $(this).parents('.top-news-body').data("truncatedHTML");
	// 	$(this).parents('.top-news-body').html($truncatedNews);
	// });

	// Dynamically define container height and set overflow when a news article is expanded
	// console.log($('#top-news'));
	// console.log(document.getElementById('top-news'));
	// document.getElementById('top-news').style.height = document.getElementById('top-news').scrollHeight + "px";
	// document.getElementById('top-news').style.overflow = "auto";
	// document.getElementById('top-news-image-container').style.height = document.getElementById('top-news').scrollHeight + "px";


	// *** Jumbotron listed items appearing one after another on scroll ***
	// var amazingShowsHeight = document.getElementById('amazing-shows-list').scrollHeight;
	// document.getElementById('amazing-shows-list').style.height = "" + amazingShowsHeight + "px";
	// var $amazingShows = $('#amazing-shows-list li');

	// $(window).scroll(function(){
	// 	// This is where we use the function to detect if "$amazingShows" is scrolled into view, and when it is add the class ".animationExecutedOnce" to the <p> child element
	// 	if(elementScrolled($amazingShows) && !($amazingShows.hasClass('animationExecutedOnce'))) {	// if $amazingShows is scrolled into view (if elemsScrolled == true)
	// 		// Your function here
	// 		$amazingShows.each(function(i) {
	// 			$(this).delay(150 * i).animate({left: '15px'}, 400);
	// 			$(this).delay(150 * i).animate({left: '0'}, 400);
	// 			$(this).addClass('animationExecutedOnce');
	// 		});
	// 	}
	// });


	// *** h1 in navbar displayed only when page header is not inviewport ***
	$navh1 = $('.navbar-header h1');
	$pageHeaderh2 = $('.page-header h2');
	if (inViewport($pageHeaderh2)) {
		console.log('page header h1 in viewport');
		$navh1.addClass('hidden-xs');
	}
	$(window).scroll(function() {
		if (inViewport($pageHeaderh2)) {
			console.log('page header h1 in viewport');
			// $navh1.addClass('disappear');
			$navh1.addClass('hidden-xs');
		}
		else
		{
			$navh1.removeClass('hidden-xs');
			// $navh1.removeClass('disappear');
		}
	});


	/* *** ANIMATE JUMBOTRON IMAGE *** */
	$amazingShows = $('#amazing-shows-list');
	$(window).scroll(function() {
		if(inViewport($amazingShows)) {
			$($amazingShows).parent().find('img').addClass('animate');
		}
	});

}

$(document).ready(main);