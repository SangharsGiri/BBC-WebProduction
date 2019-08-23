<?php
$settings = $this->site_settings_model->get_site_settings();
?>
<!-- Footer -->


<?php

$this->load->view('footer_data');

?>

<!-- Apply Form -->



<!-- Included javascript files
================================================== -->

<script type="text/javascript" src="<?php echo base_url(); ?>templates/js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>templates/js/SmoothScroll.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>templates/js/jquery.transit.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>templates/js/jquery.browser.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>templates/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>templates/js/jquery.touchSwipe.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>templates/js/parsley.min.js"></script>
<!--      -->

<script type="text/javascript" src="<?php echo base_url(); ?>templates/js/jquery.fitvids.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>templates/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>templates/js/jquery.nicescroll.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>templates/js/jquerypp.elastislide.custom.js" ></script>
<script type="text/javascript" src="<?php echo base_url(); ?>templates/js/jquery.elastislide.js" ></script>
<script type="text/javascript" src="<?php echo base_url(); ?>templates/js/jquery.knob.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>templates/js/jquery.cycle.all.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>templates/js/portfolio.detail.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>templates/js/jquery.flexslider.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>templates/js/jQuery.tubeplayer.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>templates/js/jquery.mixitup.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>templates/js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>templates/js/jquery.support.plugin.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>templates/js/custom.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>templates/js/video.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>templates/js/bigvideo.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>templates/js/jquery.slider.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>templates/js/main-fm.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>templates/js/jquery.jstwitter.js"></script>

<!-- <script src="js/modernizr.custom.js"></script> -->
<script src="<?php echo base_url(); ?>templates/js/cbpHorizontalMenu.js"></script>

<!-- jQuery REVOLUTION Slider  -->
<script type="text/javascript" src="<?php echo base_url(); ?>templates/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>templates/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>templates/js/right-slider.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>templates/js/ddmenu.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>templates/js/slick.js"></script>

<script type="text/javascript">

    /* script */

    $(function() {
        cbpHorizontalMenu.init();
    });

    /* script */

    function rsSliderInit (){
        if ($.fn.cssOriginal!=undefined)
            $.fn.css = $.fn.cssOriginal;
        apiRS = $('.tp-banner').show().revolution(
            {
                dottedOverlay:"twoxtwo",
                delay:16000,
                startwidth:1170,
                startheight:700,
                hideThumbs:0,

                thumbWidth:100,
                thumbHeight:50,
                thumbAmount:5,

                navigationType:"bullet",
                navigationArrows:"solo",

                navigationStyle:"preview4",

                touchenabled:"on",
                onHoverStop:"off",

                swipe_velocity: 0.7,
                swipe_min_touches: 1,
                swipe_max_touches: 1,
                drag_block_vertical: false,

                parallax:"mouse",
                parallaxBgFreeze:"on",
                parallaxLevels:[7,4,3,2,5,4,3,2,1,0],

                keyboardNavigation:"off",

                navigationHAlign:"center",
                navigationVAlign:"bottom",
                navigationHOffset:0,
                navigationVOffset:20,

                soloArrowLeftHalign:"left",
                soloArrowLeftValign:"center",
                soloArrowLeftHOffset:20,
                soloArrowLeftVOffset:120,

                soloArrowRightHalign:"right",
                soloArrowRightValign:"center",
                soloArrowRightHOffset:20,
                soloArrowRightVOffset:120,

                shadow:0,
                fullWidth:"off",
                fullScreen:"on",

                spinner:"spinner4",

                stopLoop:"off",
                stopAfterLoops:-1,
                stopAtSlide:-1,

                shuffle:"off",

                autoHeight:"on",
                forceFullWidth:"on",



                hideThumbsOnMobile:"off",
                hideNavDelayOnMobile:1500,
                hideBulletsOnMobile:"off",
                hideArrowsOnMobile:"off",
                hideThumbsUnderResolution:0,

                hideSliderAtLimit:0,
                hideCaptionAtLimit:0,
                hideAllCaptionAtLilmit:0,
                startWithSlide:0,
                fullScreenOffsetContainer: ""
            });

    }

    $(document).ready(function(){

        /* Site Main plug-in initilize */
        jQuery(function($){
            $("body").mainFm({
                currentPage : "!home",
                slideshowSpeed : 5000

            });
        });


        // Initialize Portfolio mixitup plugin
        $(function(){
            $('.portfolio_items').mixitup();
        });

        $("body").find(".portfolioPage").each(function(){
            var mc = $(this);
            jQuery(function($){
                mc.detailPage({
                    filter : ".controls"
                })
            });
        });


        /* Home page Slider */
        $("body").find(".slider1").each(function(){
            var mc = $(this);
            $(function(){
                mc.fmMainSlider({
                    pageBgResize:true,
                    slideNumber : true,
                    playPause : true,
                    nextPreviousButton : true,
                    autoplay : true,
                    slideshowDelayTime : 2.1,
                    dotButtons : true,
                    mouse_drag : false
                });
            });
        });

        /* customer-logos slider */
        $(document).ready(function(){
            $('.customer-logos').slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                arrows: false,
                dots: false,
                pauseOnHover: true,
                responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 4
                    }
                }, {
                    breakpoint: 520,
                    settings: {
                        slidesToShow: 3
                    }
                }]
            });
        });

        /* Custom Url link */
        $(".myparrentm").click(function(){
            var anc = $(this).data("name");
            window.location.assign('<?php echo base_url(); ?>'+anc);
        });

        /* header banner animated */
        $(window).bind('scroll', function () {
            if ($(window).scrollTop() > 50) {
                $('.menuType2 ').addClass('fixed');
            } else {
                $('.menuType2').removeClass('fixed');
            }
        });
    });

    (function($) {
        "use strict"

        // Accordion Toggle Items
        var iconOpen = 'fa fa-minus',
            iconClose = 'fa fa-plus';

        $(document).on('show.bs.collapse hide.bs.collapse', '.accordion', function (e) {
            var $target = $(e.target)
            $target.siblings('.accordion-heading')
                .find('i').toggleClass(iconOpen + ' ' + iconClose);
            if(e.type == 'show')
                $target.prev('.accordion-heading').find('.accordion-toggle').addClass('active');
            if(e.type == 'hide')
                $(this).find('.accordion-toggle').not($target).removeClass('active');
        });

    })(jQuery);

    /* script */

    $(document).ready(function () {
        $(".myapplication").click(function(){
            var dataname =  $(this).data('name');
            if(dataname != ""){
                $("#appliedforme").addClass('hide');
                $("#appliedforme select").children("option[value='"+dataname+"']").prop('selected',true);
            }else{
                $("#appliedforme").removeClass('hide');
                $("#appliedforme select").children("option[value='']").prop('selected',true)
            }
        });
        $('#sel').change(function () {
            console.log($(this));
            var value = $(this).val();
            //alert(value);
            var toAppend="";
            if ($(this).val() == 'Other' )
            {
                var toAppend = '<input type="text"  class="form-control"placeholder="Enter country name" name="othercountry" required>';
                $('#mydiv2').html(toAppend);

            } else{

                $('#mydiv2').html(toAppend);

            }
        });

    });

</script>

</body>


</html>