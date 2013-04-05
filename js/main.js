function removeon(number) {
	for (var i = 1; i <= 5; i++) {
		var circleid = '#circle-' + i;
		if (number != i) {
			$(circleid).removeClass('on');
		}
	}
}

function numberofpage(number) {
	var circle = '#circle-' + number;
	$(circle).addClass('on');
	removeon(number);
}

function rl(cls) {
	var planw = 1030;
	var x = $(cls).position();
	var x2 = $('.plan-con').scrollTop();
	
	try {
		if (planw - x.left - x2 < 305) {
			$(cls + ' .plan-text').addClass('right');
		}
		if (planw - x.left - x2 > 305) {
			$(cls + ' .plan-text').removeClass('right');
		}
	} catch(err) { }
}

function rlall() {
	rl('.plan-circle-ball');
	rl('.plan-circle-cir');
	rl('.plan-circle-ambr');
	rl('.plan-circle-star');
	rl('.plan-circle-park');
	rl('.plan-circle-ship');
	rl('.plan-circle-shiptop');
	rl('.plan-circle-show');
	rl('.plan-circle-shipright');
	rl('.plan-circle-hor');
	rl('.plan-circle-bar');
	rl('.plan-circle-park2');
	rl('.plan-circle-vip1');
	rl('.plan-circle-vip2');
}

function goto_(n) {
	var y = $(window).height() * (n - 1);
	window.console.info(n, y);
	// --andrewg
	$('html, body').animate({
		scrollTop : y
	}, 800);
	//
}

var z = 0,
	m = 0,
	s = 0,
	y = 0,
	i = 0;
	
$(function() {

	$("a.like").click(function(event) {
		if (z == 0) {
			$(".slide-likes").slideDown();
			z = 1;
		} else {
			$(".slide-likes").slideUp();
			z = 0;
		}

	});

	$("a.like").click(function(event) {
		event.preventDefault();
	});
	$(".like a").click(function(event) {
		event.preventDefault();
	});

	$(".def").click(function(event) {
		event.preventDefault();
	});

	$('.res').hover(function() {
		$('.res-img').attr('src', 'img/bron-h.png');
	}, function() {
		$('.res-img').attr('src', 'img/bron.png');
	});

	$(".facebook").hover(function() {
		$('.facebook img').attr('src', 'img/facebook-hover.png');
	}, function() {
		$('.facebook img').attr('src', 'img/facebook.png');
	});

	$(".twitter").hover(function() {
		$('.twitter img').attr('src', 'img/twitter-hover.png');
	}, function() {
		$('.twitter img').attr('src', 'img/twitter.png');
	});

	$(".like .soc-button").hover(function() {
		$('.like .soc-button img').attr('src', 'img/footer-like-hover.png');
	}, function() {
		$('.like .soc-button img').attr('src', 'img/like.png');
	});

	$(".soc-button.like").hover(function() {
		$('.like.soc-button img').attr('src', 'img/footer-like-hover.png');
	}, function() {
		$('.like.soc-button img').attr('src', 'img/like.png');
	});

	$(".med-option.def").click(function(event) {
		event.preventDefault();

		if (m == 0) {
			$(".med-menu").fadeIn();
			m = 1;
		} else {
			$(".med-menu").fadeOut();
			m = 0;
		}
	});

	$(".small-option.def").click(function(event) {
		event.preventDefault();

		if (s == 0) {
			$(".index-menu").fadeIn();
			s = 1;
		} else {
			$(".index-menu").fadeOut();
			s = 0;
		}
	});

	$(".med-option.def-index").click(function(event) {
		event.preventDefault();

		if (y == 0) {
			$(".index-menu").fadeIn();
			y = 1;
		} else {
			$(".index-menu").fadeOut();
			y = 0;
		}
	});

	$('.photo-right').click(function() {
		$('.fotorama').trigger('showimg', 'next');
	});

	$('.photo-left').click(function() {
		$('.fotorama').trigger('showimg', 'prev');
	});

	$('.like .soc-button').click(function() {
		if (i == 0) {
			$('.like').addClass('like-popup');
			$('.like-inside').removeClass('hidden');
			i = 1;
		} else {
			$('.like').removeClass('like-popup');
			$('.like-inside').addClass('hidden');
			i = 0;
		}
	});

	rlall();

	$(window).resize(function() {
		rlall();
	});

}); 