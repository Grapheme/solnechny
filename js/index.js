$(function() {

	$('.main-arrow-down').click(function() {
		var thispage = $(this).attr('id');
		goto_(parseFloat(thispage) + 1);
	});

	$('.main-arrow-up').click(function() {
		goto_(1);
	});

	$('#circle-1').click(function() {
		goto_(1);
	});
	$('#circle-2').click(function() {
		goto_(2);
	});
	$('#circle-3').click(function() {
		goto_(3);
	});
	$('#circle-4').click(function() {
		goto_(4);
	});
	$('#circle-5').click(function() {
		goto_(5);
	});

	$(".main-arrow-down").hover(function() {
		$('.main-arrow-down').attr('src', 'img/main-down-blue.png');
	}, function() {
		$('.main-arrow-down').attr('src', 'img/main-down.png');
	});

	$('.logo.main').click(function() {
		if ($(window).scrollTop() >= $(window).height()) {
			goto_(1);
			$('.like').removeClass('like-popup');
			$('.like-inside').addClass('hidden');
		}
	});

	if ($(window).scrollTop() == 0) {
		var page = 1;
		numberofpage('1');
	}

	$(window).scroll(function() {
		if ($(window).scrollTop() >= 0 && $(window).scrollTop() < $(window).height()) {
			page = 1;
			numberofpage('1');
		} else {
			if ($(window).scrollTop() >= $(window).height() && $(window).scrollTop() < $(window).height() * 2) {
				page = 2;
				numberofpage('2');
			}
			if ($(window).scrollTop() >= $(window).height() * 2 && $(window).scrollTop() < $(window).height() * 3) {
				page = 3;
				numberofpage('3');
			}
			if ($(window).scrollTop() >= $(window).height() * 3 && $(window).scrollTop() < $(window).height() * 4) {
				page = 4;
				numberofpage('4');
			}
			if ($(window).scrollTop() >= $(window).height() * 4) {
				page = 5;
				numberofpage('5');
				$(".main-arrow-up").hover(function() {
					$('.main-arrow-up').attr('src', 'img/main-up-blue.png');
				}, function() {
					$('.main-arrow-up').attr('src', 'img/main-up.png');
				});
			}
		}
	});

	$('.main-1').click(function() {
		$('.like').removeClass('like-popup');
		$('.like-inside').addClass('hidden');
	});
	$('.main-2').click(function() {
		$('.like').removeClass('like-popup');
		$('.like-inside').addClass('hidden');
	});
	$('.main-3').click(function() {
		$('.like').removeClass('like-popup');
		$('.like-inside').addClass('hidden');
	});
	$('.main-4').click(function() {
		$('.like').removeClass('like-popup');
		$('.like-inside').addClass('hidden');
	});
	$('.main-5').click(function() {
		$('.like').removeClass('like-popup');
		$('.like-inside').addClass('hidden');
	});

}); 