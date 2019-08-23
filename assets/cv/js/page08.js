
function initStroke(){
	if ( $('body').hasClass('init-stroke') ){
	    // ANIMATE BORDER LINES
		setTimeout(function() {
			$('.leftline').stop().animate({'width':'100%'},400);
		}, 2000);
		setTimeout(function() {
			$('.topline').stop().animate({'height':'100%'},300);
		}, 2400);
		setTimeout(function() {
			$('.rightline').stop().animate({'width':'100%'},400);
		}, 2700);
		setTimeout(function() {
			$('.bottomline').stop().animate({'height':'100%'},300);
		}, 3100);
	}
}

if ( $('body').hasClass('init-fixedfooter') ){
    // FOOTER APEARSS BEHIND CONTENT EFFECT
	$('.footer').css({'opacity':'0'});
	function showFooter(){
		var $FooterBottomOffset = $('.footer').innerHeight();
		var $iW = $(window).innerWidth();
		$('.footer').addClass('fixed');
		$('.footer-bottom-offset').css({'margin-bottom': + $FooterBottomOffset + 'px' })
		setTimeout(function() {
			$('.footer').animate({'opacity':'1'});
		}, 1000);
		if($iW < 992){
			$('.footer').removeClass('fixed');
			$('.footer-bottom-offset').css({'margin-bottom': + 0 + 'px' })
		}
	}
	showFooter();
	$(window).smartresize(function(){
		showFooter();
	});
}
