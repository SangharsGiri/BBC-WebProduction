<!-- Page Banner Start -->
<section id="page_banner" class="border_b">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header">
                    <h2>OUR TEAM</h2>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-right">
                <ol class="breadcrumb">
                    <li><a href="#">You are here:</a></li>
                    <li><a href="<?php echo base_url(); ?>">Home</a></li>
                    <li class="active">Our Team</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<!-- Page Banner End -->

<!-- Our Team Start -->
<section id="our_team_3" class="p-t-100 m-b-100">
    <div class="container">
        <div class="row p-b-60">
            <div class="col-md-12">
                <div class="heading">
                    <div class="heading_border "></div>

                    <h2>&nbsp;</span></h2>
                </div>
            </div>
        </div>

        <div id="our_team_slider_3" class="owl-carousel">
            <?php
            if(!empty($team))
            {
                ?>

                <?php

                $i=1;
                foreach($team as $rows) {
                    $path  = 'uploads/team/';
                    $actives = (isset($i) && $i == "1") ? "active" : "";
                    ?>
                    <div class="item">

                        <div class="single-effect">
                            <figure class="wpf-demo-gallery">
                                <a href="#"><img src="<?php echo $path.$rows['team_image'];?>" alt="img"></a>
                                <figcaption class="view-caption">
                                    <a href="#" data-toggle="modal" data-target="#team<?php echo  $rows['team_id'];?>"><i class="icon-focus"></i></a>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="team_text">
                            <h3><?php echo $rows['team_title']; ?></h3>
                            <span><strong><?php echo $rows['team_caption']; ?></strong></span>
                          <?php echo $rows['team_description']; ?>

                        </div>



                    </div>










                    <?php
                    $i++;
                }
                ?>





                <?php
            }
            ?>

             </div>
    </div>
</section>
<!-- Our Team end -->










