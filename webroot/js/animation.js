//scroll animation

$(document).ready(function(){
	$('a[href^="#"]').on('click',function (e) {
		e.preventDefault();

		var target = this.hash;
		var $target = $(target);

		$('html, body').stop().animate({
			'scrollTop': $target.offset().top
		}, 1000, 'swing', function () {
			window.location.hash = target;
		});
	});
});

//sticky header

$(window).scroll(function(){
	if ($(window).scrollTop() >= 50) {
		$('.sticky-header').addClass('fixed');
		$('.sticky-header').removeClass('hide');
	}
	else {
		$('.sticky-header').removeClass('fixed');
		$('.sticky-header').addClass('hide');
	}
});

//scroll reveal

// Changing the defaults
window.sr = ScrollReveal({ reset: true });

// Customizing a reveal set
sr.reveal('section', { duration: 1000 });

//mooving work block 3d

$( "#work" ).mousemove(function( event ) {
	Xdeg=1-(event.pageX / 100);
	Ydeg=25-(event.pageY / 100);

	$('.work-grid').css({
		'transform':'translate3d(0px,'+Ydeg+'px,0px)rotateX('+Xdeg+'deg)rotateY('+Ydeg+'deg)'
	});
});

$( "#work" ).mouseout(function( event ) {
	var pageCoords = "( " + event.pageX + ", " + event.pageY + " )";

	$('.work-grid').css({
		'transform':'none'
	});
});

// Hamburger animation

$('#toggle').click(function() {
	$(this).toggleClass('active');
	$('#overlay').toggleClass('open');
});
