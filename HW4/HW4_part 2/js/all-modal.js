$(document).ready(function(){
		// открываем окно
	$('.op_link a').on('click', function(){
	    $('#modal-' + $(this).attr('data-name')).fadeIn(1000);
	    $('body').css('overflow', 'hidden');
	});
		// закрываем окно на крестик
	$('.close-btn').on('click', function(){
		$('.hide-overlay').fadeOut(100);
		$('body').css('overflow', 'scroll');
	});
		// закрываем окно кликая на оверлэй
	$(".hide-overlay").click(function(event) {
	    if ($(event.target).closest(".wrap-cont").length) return;{
	        $(".hide-overlay").fadeOut(100);
	        event.stopPropagation();
	        $('body').css('overflow', 'scroll');
	    }
	});








});