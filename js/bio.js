

var $slika = $(".slika img");
$slika.each(function() {
	var $visina = $(this).parents('.row').find('.tekst').height();
	$(this).css('max-height', $visina);
	console.log($visina);
}); 

// $('body').particleground();