//open eye
// $(document).ready(function(){
// 	$('#eyeclose').attr('d',"M101-9C19.1-9-44.7,39.8-123,119c67.4,67.7,133.5,106.5,233.5,106.5c99.9,0,163.9-54.9,214.5-105.1C273.2,61.6,199.8-9,101-9z");
// });
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
//scroll skills
var lastmousewheel=0;

$(document).ready(function(){

// Animation on mousewheel
$(window).on("wheel mousewheel", function(e){
  var speedwheel=e.originalEvent.wheelDelta;
if(speedwheel<-100){
  lastmousewheel=lastmousewheel+1;
  console.log(lastmousewheel);
}
else if(speedwheel>100){
  console.log("up");
  lastmousewheel=lastmousewheel-1;
  console.log(lastmousewheel);
}

if(lastmousewheel<=0){
  $(".skills-icon").css("color","#afafbc");
	lastmousewheel=0;
}
else if (lastmousewheel<5) {
	$(".skills-icon").css("color","#2461A0");
}
});

});
