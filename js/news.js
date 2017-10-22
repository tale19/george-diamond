function main() {
	var $misc = $('.news-preview-misc');
	$misc.each(function(){
		$targetHeight = $(this).prev().height();
		$(this).height($targetHeight);
	});
}

$(document).ready(main);