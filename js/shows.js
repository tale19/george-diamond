function main() {
	// *** SMOOTHLY SCROLL TO SHOW FROM JUMBOTRON LINKS ***
	$showShortcut = $('.shows-full-list-item');
	$showShortcut.on('click', function(e){
		e.preventDefault;
		var shortcut = '#' + $(this).attr('id');
		var target = $(this).data('target');
		console.log(shortcut + ' has target ' + target);
		$('html, body').animate({
        	scrollTop: $('#' + target).offset().top - 67
    }, 1200);
	});

	// *** YOUTUBE MODAL ***
	// // assign video to each show
	function changeVideo(vId){
		var iframe=document.getElementById("iframeYT");
		iframe.src="https://www.youtube.com/embed/"+vId;

		// $("#videoModal").modal("show");
	}


	var $videoBtn = $('a.videoButton');
	// console.log("adsopfa");
	// $videoBtn.on('click', );
	// $videoBtn.on("click", console.log('K6M17HSezJg'));
	$videoBtn.each(function(){
		$(this).on('click', function(e) {
			// e.preventDefault;
			// changeVideo('K6M17HSezJg');
			console.log($(this).data('target'));
		});
	});

	$("#videoModal").on("shown.bs.modal",function(e){
		var $invoker = e.relatedTarget;
		console.log($invoker);
	});


	// stop YouTube video when closing the modal
	$("#videoModal").on("hidden.bs.modal",function(){
		$("#iframeYT").attr("src","#");
	});
	
	// $modalTitle = $('#videoModalLabel');
	// $modalTitle.text(data('naslov'));
	// console.log(data);



	// *** PARAGRAPHS AND IMAGES APPEARING ON VIEWPORT ENTRY ***
	// 	pass each paragraph container to the "in viewport checker" to get its position
	// var $showTitle = $('#shows-content .show-box .show-article h4');
	var $showsParagraph = $('#shows-content .show-box .paragraph');
	var $showsMisc = $('#shows-content .show-box .shows-misc');
	//  make it work on scroll
	$(window).scroll(function() {
		$showsParagraph.each(function(){
			if (inPartialViewport($(this), 150)) {
				$(this).addClass('appear');
			} 
		});
	});

	$(window).scroll(function() {
		$showsMisc.each(function(){
			if (inPartialViewport($(this), 150)) {
				$(this).find('img').addClass('appear');
			} 
		});
	});



	// *** SCROLLTOP ***
	
	// first, make scrolltop button visible only when there's an offset 
	$scrolltopButton = $('.scrolltop-button');
	$(window).scroll(function() {
		if (getWindowOffset()[0] > 200) {
			$scrolltopButton.addClass('appear');
		}
		else {
			$scrolltopButton.removeClass('appear');
		}
	});

	// next, make it go *SMOOTHLY*  to page top on click
	$scrolltopButton.on('click', function(e) {
		$("html, body").animate({ scrollTop: 0 }, 600);
    	e.preventDefault();
	});
}

$(document).ready(main);