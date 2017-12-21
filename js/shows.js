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
	var $currentVideoId = 0;
	function retrieveVideoId(){
		var $iframe = $('#iframeYT');
		console.log($iframe.attr('src').substr(-17, 11));
		return $currentVideoId = $iframe.attr('src').substr(-17, 11);
	}
	// choose a video to play
	function playVideo(vId){
		var iframe = document.getElementById("iframeYT");
		iframe.src = "https://www.youtube.com/embed/" + vId + '?rel=0';
		retrieveVideoId();
	}

	// open modal to play the video
	var $videoBtn = $('button.play-video');
	$videoBtn.on('click', function() {
		// e.preventDefault;

		// retrieve list of videos from data-video of the button
		var $videoData = [];
		$videoData = $(this).data('video');
		// default video
		playVideo($videoData[0]);

		// show panel toggler only if the invoking button stores more than one video
		var $panelToggler = $('#panel-toggler');
		if ($videoData.length < 2) {
			$panelToggler.hide();
		} else {
			$panelToggler.show();
		}

		$('#videoModal .toggle-group .toggle-on').on('click', function() {
			console.log('on');
			$(this).parent().addClass('active');
			$(this).parents('.modal-footer').find('.panel').collapse('show');
		})
		$('#videoModal .toggle-group .toggle-off').on('click', function() {
			console.log('off');
			$(this).parent().removeClass('active');
			$(this).parents('.modal-footer').find('.panel').collapse('hide');
		})

		// create links to related videos in the panel
		var $listOfVideos = $('#videoModal .panel .panel-body ul');
		for (var i = 0; i < $videoData.length; i++) {
			$listOfVideos.append(
				'<li><a href="#" class="play-video" data-video="' 
				+ $videoData[i] 
				+ '">' 
				+ 'Video ' + (i+1)
				+ '</a></li>'
			);
		}

		// add .active to the panel link of the current video
		var $panelLink = $('#videoModal .modal-footer a.play-video');
		$panelLink.each(function() {
			if ($(this).data('video') == $currentVideoId) {
				$(this).addClass('active');
			}
		});

		// play video when link from panel is clicked
		// also change the .active link
		$panelLink.on('click', function(e) {
			e.preventDefault();
			playVideo($(this).data('video'));
			if ($(this).data('video') == $currentVideoId) {
				$panelLink.removeClass('active');
				$(this).addClass('active');
			}
		}); // $panelLink.onclick
	}); // $videoBtn.onclick

	// stop YouTube video, collapse the panel and remove links when the modal is closed
	
	$("#videoModal").on("hidden.bs.modal",function(){
		$("#iframeYT").attr("src","#");
		$('#videoModal .toggle-group').removeClass('active');
		$('#videoModal .panel').collapse('hide');
		$('#videoModal .panel-body ul').empty(); // next time the modal is called, new links will be generated in empty panel
	});



	// *** PARAGRAPHS AND IMAGES APPEARING ON VIEWPORT ENTRY ***
	// 	pass each paragraph container to the "in viewport checker" to get its position
	var $showsParagraph = $('#shows-content .show-box .paragraph');
	var $showsMisc = $('#shows-content .show-box .shows-misc');
	$showsParagraph.each(function(){
		if (inPartialViewport($(this), 150)) {
			$(this).addClass('appear');
		} 
	});
	$showsMisc.each(function(){
		if (inPartialViewport($(this), 150)) {
			$(this).find('img').addClass('appear');
		} 
	});

	//  make it work on scroll as well
	$(window).scroll(function() {
		$showsParagraph.each(function(){
			if (inPartialViewport($(this), 150)) {
				$(this).addClass('appear');
			} 
		});
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