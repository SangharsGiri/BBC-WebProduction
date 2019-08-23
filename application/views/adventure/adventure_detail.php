<section id="login-reg-top">
    <div class="row top-offer blue-bg">
        <div class="container">
            <div class="col-sm-12 content-title">
                <h2><?php echo $detail['activity_name'];?></h2>
            </div>


        </div>
    </div>
    </div>
</section>
<section class="product-details">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="TitreProduit">

                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-home"></i>
                            </a></li>

                        <li class="active"><?php echo $detail['activity_name'];?></li>
                    </ol>
                </div>

            </div>
            <div class="col-sm-12">
                <?php
                $path = 'uploads/activity/';
                if($detail['banner_img']) {
                    ?>
                    <img src="<?php echo $path.$detail['banner_img'];?>" alt="Adventure" class="img-responsive">
                    <?php
                }
                ?>
            </div>
            <div class="col-md-8">
                <div class="social_ad">
                    <div class="addthis_inline_share_toolbox"></div>

                </div>


            </div>
            <div class="col-md-4">
                <div class="asset_links ">


                </div>
            </div>
        </div>




        <div class="row">

            <div class="col-md-8">


                <h3>
                    Trip Descriptions</h3>
               <?php echo $detail['description'];?>

            </div>




        </div>


    </div>
</section>


    <div class="container">

        <div class="package-details" >

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <?php
                if($detail['tab'] !="") {
                    ?>
                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab"
                                                              data-toggle="tab">Information</a></li>
                    <?php
                }
                if(!empty($packages)) {
                    ?>
                    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Related
                            Packages</a></li>
                    <?php

                }
                ?>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <?php
                if($detail['tab'] !="") {
                    ?>
                    <div role="tabpanel" class="tab-pane active" id="home">
                      <?php echo $detail['tab'];?>
                    </div>
                    <?php
                }
                if(!empty($packages)) {
                    ?>


                    <div role="tabpanel" class="tab-pane" id="profile">
                        <div class="related-listing">
                            <?php
                            foreach ($packages as $row) {

                                ?>



                                <div class="col-md-4">
                                    <div class="listing-item">
                                        <div class="listing-item-background">
                                            <div class="listing-item-background-image">
                                                <?php
                                                if($row['featuredimg'] !="")
                                                {
                                                    $path =  'uploads/package/'.$row['package_id'].'/';

                                                    ?>
                                                    <img class="scale-height" alt="product" src="<?php echo $path.$row['featuredimg'];?>">
                                                    <?php
                                                }
                                                else
                                                {
                                                    echo '<img src="themes/images/packagecategory/package1.jpg" alt="product"
                                                 class="scale-height">';
                                                }
                                                ?>
                                            </div>

                                            <div class=" pricetag ">
                                                <div class="price text-white"> <?php echo $row['code'] . " " . $row['pprice'];?></div>
                                            </div>

                                        </div>
                                        <div class="product-list">

                                            <h3><?php echo $row['package_name'];?></h3>
                                            <div class="button">
                                            </div>
                                            <div class="col-md-4 rating-box">
                                                <?php
                                                $total= $row['rating'];
                                                $remaining = 5 - $total;
                                                for($i=0; $i<$total; $i++)
                                                {
                                                    echo '<i class="fa fa-star"></i>';
                                                }
                                                for($j=0; $j<$remaining; $j++)
                                                {

                                                    echo '<i class="fa fa-star-o"></i>';
                                                }
                                                ?>      </div>
                                            <div class="col-md-8 bookingbuttons no-padding">
                               <span class="lft">
                                   <a href="<?php echo site_url('packages/details/'.$row['package_url']);?>">View Details</a>
                               </span>
                                <span class="rt">
                                   <a href="<?php echo site_url('packages/details/'.$row['package_url']);?>">Book Now</a>
                               </span>
                                            </div>

                                        </div>

                                    </div>


                                </div>


















                                <?php
                            }
                            ?>



                        </div>

                    </div>
                    <?php
                }
                ?>
            </div>

        </div>



    </div>

    </section>