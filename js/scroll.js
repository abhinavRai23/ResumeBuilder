$(document).ready(function(){
	$('a[href^="#"]').on('click',function (e) {
	    e.preventDefault();

	    var target = this.hash,
	    $target = $(target);

	    $('html, body').stop().animate({
	        'scrollTop': $target.offset().top-20
	    }, 900, 'swing', function () {
	        window.location.hash = target;
	    });
	});
});
// $(document).ready(function(){
// $('section').change(function(){
// 	var element=this.id;
// 	$('d2').css('background-color:red;');
// 	});
// });