$(function() {

	$('.next').click(function(){
		var currentImage = $('.block-item.current');
		var currentImageIndex = $('.block-item.current').index();
		var nextImageIndex = currentImageIndex + 1;
		var nextImage = $('.block-item').eq(nextImageIndex);
		currentImage.fadeOut(1000);
		currentImage.removeClass('current');

		if (nextImageIndex == ($('.block-item:last').index()+1)){
			$('.block-item').eq(0).fadeIn(1000);
			$('.block-item').eq(0).addClass('current');
		} else {
			nextImage.fadeIn(1000);
			nextImage.addClass('current');
		}
	})

	
    
});