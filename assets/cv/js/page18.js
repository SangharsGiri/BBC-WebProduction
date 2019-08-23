if ( $('body').hasClass('page18') ){

	// #############################
	//  	   !INFORMATION
	// #############################
	// If you add content inside ".fold-content" that uses javascript, then you must initialize it in "responsive_3dfoldscroll.js", 
	// open it and check for "//ADD CUSTOM FUNCTIONS HERE"

	//INITIALIZE 3D FOLD SCROLL
	$( document ).ready(function() {
		window.onload=function(){
			var fold = $.fn.responsive_3dfoldscroll();
		};
	});

	// SET HEIGHT OF WORK GALLERY
	function getFoldHeight(){
			var $getFoldHeight = $('.grid').innerWidth();
			$('.fold-height').css({'height': + $getFoldHeight * 3 + 'px'});
	}

	// SET HEIGHT OF SLIDE
	function getFoldSlide(){
		var $getFoldTop = $('.top-fold').innerHeight();
		var $getFoldGrid = $('.grid').innerWidth();
		var $iH = $(window).innerHeight();
		// alert($iH);
		var $foldH = ($iH - $getFoldTop - $getFoldGrid);
		$('.fold-h').css({'height': $foldH });
	}
	getFoldHeight();
	getFoldSlide();

	$(window).resize(function(){
		getFoldSlide();
		getFoldHeight();
	});

	$(window).scroll(function(){
		var $getTopScroll = $(window).scrollTop();
		if ( $('.slimmenu-fill').length ) {
			if($getTopScroll == 0  ){
				$('.slimmenu-left ul li a').removeClass('active');
				$('.scroll-home').addClass('active');
				$('.slimmenu-fill').stop().animate({'height':$('.scroll-home').position().top + 78});
			}
			if($getTopScroll <= 1500 && $getTopScroll > 0){
				$('.slimmenu-left ul li a').removeClass('active');
				$('.scroll-work').addClass('active');
				$('.slimmenu-fill').stop().animate({'height':$('.scroll-work').position().top + 36 + 72});
			}
			if($getTopScroll <= 6000 && $getTopScroll > 5500){
				$('.slimmenu-left ul li a').removeClass('active');
				$('.scroll-about').addClass('active');
				$('.slimmenu-fill').stop().animate({'height':$('.scroll-about').position().top + 36 + 72});
			}
			if($getTopScroll <= 7500 && $getTopScroll > 6000){
				$('.slimmenu-left ul li a').removeClass('active');
				$('.scroll-jobs').addClass('active');
				$('.slimmenu-fill').stop().animate({'height':$('.scroll-jobs').position().top + 36 + 72});
			}
			if($getTopScroll <= 9000 && $getTopScroll > 7500){
				$('.slimmenu-left ul li a').removeClass('active');
				$('.scroll-prices').addClass('active');
				$('.slimmenu-fill').stop().animate({'height':$('.scroll-prices').position().top + 36 + 72});
			}	
			if($getTopScroll <= 10500 && $getTopScroll > 9000){
				$('.slimmenu-left ul li a').removeClass('active');
				$('.scroll-contact').addClass('active');
				$('.slimmenu-fill').stop().animate({'height':$('.scroll-contact').position().top + 36 + 72});
			}	
			if($getTopScroll <= 12000 && $getTopScroll > 10500){
				$('.slimmenu-left ul li a').removeClass('active');
				$('.scroll-social').addClass('active');
				$('.slimmenu-fill').stop().animate({'height':$('.scroll-social').position().top + 36 + 72});
			}	
		};
	});

	//Scrolling points
	$("a.scroll-home").click(function(event){		
			$('body,html').animate(
				{	scrollTop: 0 },
				{ 
				  duration: 1000, 
				  easing: 'easeInOutExpo'
				}
			);
	});
	$("a.scroll-work").click(function(event){		
			$('body,html').animate(
				{	scrollTop: 1500 },
				{ 
				  duration: 1000, 
				  easing: 'easeInOutExpo'
				}
			);
	});
	$("a.scroll-about").click(function(event){		
			$('body,html').animate(
				{	scrollTop: 6000 },
				{ 
				  duration: 1000, 
				  easing: 'easeInOutExpo'
				}
			);
	});
	$("a.scroll-jobs").click(function(event){		
			$('body,html').animate(
				{	scrollTop: 7500 },
				{ 
				  duration: 1000, 
				  easing: 'easeInOutExpo'
				}
			);
	});
	$("a.scroll-prices").click(function(event){		
			$('body,html').animate(
				{	scrollTop: 9000 },
				{ 
				  duration: 1000, 
				  easing: 'easeInOutExpo'
				}
			);
	});
	$("a.scroll-contact").click(function(event){		
			$('body,html').animate(
				{	scrollTop: 10500 },
				{ 
				  duration: 1000, 
				  easing: 'easeInOutExpo'
				}
			);
	});
	$("a.scroll-social").click(function(event){		
			$('body,html').animate(
				{	scrollTop: 12000 },
				{ 
				  duration: 1000, 
				  easing: 'easeInOutExpo'
				}
			);
	});
}
