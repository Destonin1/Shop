$(document).ready(function(){
	$('.slider_wraper').slick({
		autoplay: true,
		autoplaySpeed: 5000,
		arrows: false,
		dots: true,
		vertical: true,
		dotsClass: "my-dots"
	});

	$('.product_info_image').slick({
		slidesToShow: 1,
		arrows: false,
		dots: false,
		speed: 10,
		swipe: false,
		asNavFor: '.product_info_buttons'
	});

	$('.product_info_buttons').slick({
		slidesToShow: 3,
		asNavFor: '.product_info_image',
		dots: false,
		swipe: false,
		focusOnSelect: true
	});

	$('.fa-bars').click(function(){
		$('.menu_fixed').toggleClass('menu_fixed_active');
	});


	var num = 0;

	$("#plus").click(function() {
    	num++;
    $("#counter").html(num);
  	});

	$("#minus").click(function() {
		if( num > 0 ){
			num--;
    		$("#counter").html(num);
		} else {
			$("#counter").html(num);
		}    	
  	});

});