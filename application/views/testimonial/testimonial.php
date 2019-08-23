<style>
    .testi-spino { text-align: center; border-radius: 50%;}
    blockquote cite { color: #222222;}
    blockquote p { color: #222222;}
</style>
<div data-id="!contactus" class="contentWrapper contactPage fullWidth fullHeight removePadding autoPosition m-Scrollbar backGround" >

    <hr class="space_max">
    <div class="top_space"> </div>
    <div class="mobile_topSpc"></div>
    <!-- Content display with Background image -->
    <div class="fullWidth parallax top_bot_pad" data-src="images/background/image9.jpg" data-src-small="images/background/image9_s.html" >
        <!-- Background image overlay -->
        <div class="overlayBg highlight"></div>

        <div class="container" data-animated-in="animated fadeInUp" data-animated-time="0" >
            <div class="row-fluid" >
                <div class="col-md-12 textAlignCenter amko" >
                    <h1 class="white_color">Testimonials</h1>

                    <br>
                </div>
            </div>
        </div>
    </div>

<!-- Start Testimonials -->
<section class="testimonials">

    <!-- Start Video Background -->
    <div id="video_testimonials" data-vide-bg="video/ocean" data-vide-options="position: 0% 50%"></div>
    <div class="video_gradient"></div>
    <!-- End Video Background -->

    <div class="container">
        <div class="row">

            <!-- Start Preamble -->
            <div class="preamble">
                <h3>&nbsp;</h3>
                <img src="img/divisor2.png" alt="" class="divisor">
            </div>
            <!-- End Preamble -->


                <?php
                if(!empty($review))
                {
                    ?>
                    <div id="owl-testimonials" class="owl-carousel owl-theme">
                        <?php
                        $review_path  = 'uploads/slider/';
                        $i=1;
                        foreach($review as $reviews) {

                            $actives = (isset($i) && $i == "1") ? "active" : "";
                            ?>

<div class="col-sm-6">

                                                               <!-- Start Item -->

                                <div class="testi-spino">
                                <img src="<?php echo $review_path.$reviews['slider_image'];?>" class="img-circle" />
                                </div>
                                <blockquote class="quote">
                                    <cite><b style="font-size: 14px;"><?php echo $reviews['review_by']; ?>, </b><span class="job"> <?php echo $reviews['review_title']; ?></span></cite>

                                    <?php echo $reviews['review_text']; ?>                                </blockquote>

                            <!-- End Item -->
</div>
                            <?php
                            $i++;
                        }
                        ?>



                    </div>
                    <?php
                }
                ?>




        </div>
    </div>
</section>
<!-- End Testimonials -->