
if( $('#photograph-page').length ) {
 
	//PARALLAX PHOTOGRAPHY PAGE
	$(window).scroll(function(){
   		 $scrollTop = $(window).scrollTop();//scroll value from top	
	 	 $('.coverphotography').css({'top': (($scrollTop / 1.5)) + 'px' });
	});

	var $lastScrollTop = $(window).scrollTop()
	$(window).scroll(function(event){
	   var $st = $(this).scrollTop();
	   if ($st > $lastScrollTop){
	       // downscroll code
	       $('.fixedtop').stop().animate({'margin-top':'-100px'},300);
	       
	   } else {
	      // upscroll code
	       $('.fixedtop').stop().animate({'margin-top':'0px'},300);
	       
	   }
	   $lastScrollTop = $st;
	});

}

//Makes cover with .lpopup class to POP OUT
$(".lpopup").click(function() {
    var $bg = $(this).css('background-image');
    $bg = $bg.replace('url(','').replace(')','');
    // alert($bg);

    $('.createlightbox').css({'display':'block'});
    $('.createlightbox').animate({'opacity':1});

    //Create Lightbox
    $('.l-image').append("<img src="+ $bg +" class='valign max-wh-90'/>");
});

//Close lightbox
$(".createlightbox").click(function() {
	$(this).animate({'opacity':0});
	setTimeout(function() {
		$('.createlightbox').css({'display':'none'});
	}, 300);
	
});

$fav = 1;
$(".effecttrigger").click(function() {
	if($fav == 1){
		$('.square-flip').addClass('active');
		$fav = 0;
	}else{
		$('.square-flip').removeClass('active');
		$fav = 1;
	}
});
