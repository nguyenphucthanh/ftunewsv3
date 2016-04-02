// JavaScript Document


// slick config
$(document).ready(function() {
	//Related
	$('.single-related-slick').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		prevArrow: $('.related-back'),
		nextArrow: $('.related-next')
	});
	//Trending
	$('.trending-slick').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		vertical: true,
		prevArrow: $('.trending-prev'),
		nextArrow: $('.trending-next'),
	});

	// This is how to append a post
	var t = $('.one-post').clone();
	t.find('.category-thumbnail-vertical-content').html("This is a clone.");

	t.appendTo($('#posts-container'));
});


