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

	/* COUNTER */
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

  	/* Click on li */
  	$('.categories_elem li').click(function(){
  		$(this).toggleClass('categories_elem_active');
  	});

  	/*Click on size */
  	$('.size_btn').click(function(){
  		$('.size_btn').removeClass('size_btn_active');
  		$(this).toggleClass('size_btn_active');
  	});

  	$(".product_info_image_click").click(function(){	// Событие клика на маленькое изображение
	  	var img = $(this);	// Получаем изображение, на которое кликнули
		var src = img.attr('src'); // Достаем из этого изображения путь до картинки
		$("body").append("<div class='popup'>"+ //Добавляем в тело документа разметку всплывающего окна
						 "<div class='popup_bg'></div>"+ // Блок, который будет служить фоном затемненным
						 "<img src='"+src+"' class='popup_img' />"+ // Само увеличенное фото
						 "</div>"); 
		$(".popup").fadeIn(400); // Медленно выводим изображение
		$(".popup_bg").click(function(){	// Событие клика на затемненный фон	   
			$(".popup").fadeOut(400);	// Медленно убираем всплывающее окно
			setTimeout(function() {	// Выставляем таймер
			  $(".popup").remove(); // Удаляем разметку всплывающего окна
			}, 400);
		});
	});

});