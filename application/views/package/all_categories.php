

<section class="kc-elm kc-css-710361 kc_row">
    <div class="kc-row-container  kc-container">
        <div class="kc-wrap-columns">
            <div class="kc-elm kc-css-173658 kc_col-sm-12 kc_column kc_col-sm-12">
                <div class="kc-col-container">
                    <div class="kc-elm kc-css-100649 kc_row kc_row_inner">
                        <div class="kc-elm kc-css-743301 kc_col-sm-12 kc_column_inner kc_col-sm-12">
                            <div class="kc_wrapper kc-col-inner-container" style="margin-top: 3%;">


                                <div class="row service_list_row">

                                    <?php
                                    $path = 'uploads/package_category/';
                                    foreach ($categories as $row) {
                                        ?>
                                        <!-- Service Single -->
                                        <div class="col-sm-6 col-xs-12 col-md-3 ">
                                            <div class="service-single  mb-40">
                                                <img width="588" height="200" src="<?php echo $path.$row['featured_img'];?>" class="attachment-carspa_service_thumbnail size-carspa_service_thumbnail wp-post-image" alt="" srcset="<?php echo $path.$row['featured_img'];?> 800w, <?php echo $path.$row['featured_img'];?> 300w, <?php echo $path.$row['featured_img'];?> 768w" sizes="(max-width: 588px) 100vw, 588px" />
                                                <div class="service-titel text-center">
                                                    <h6>
                                                        <a href="#"><?php echo mb_substr($row["category_name"] , 0,20 ,'UTF-8'); ?></a>
                                                        <span><a href="#"><i class="fa fa-plus"></i></a></span>
                                                    </h6>
                                                </div>
                                                <div class="service-hover text-center">
                                                    <span class="amount"><?php
                                                            $count =  $this->package->count_active_packages($row['category_id']);

                                                            ?>
                                                            <?php echo (isset($count) && $count !="")? $count:"";?> Products</span>			
                                                            
                                                    <h6><?php echo mb_substr($row["category_name"] , 0,20 ,'UTF-8'); ?></h6>
                                                    <p><?php echo mb_substr($row["description"] , 0,50 ,'UTF-8'); ?> </p>
                                                    <a href="<?php echo site_url('packages/index/'. $row['category_url']);?>">DETAILS</a>
                                                </div>
                                            </div>
                                        </div>



                                        <?php
                                    }
                                    ?>



                                    <style type="text/css">
                                        .service-hover { background: #d42f38}
                                        .service-hover p,.service-hover h6{ color: #ffffff}
                                        .service-hover a{
                                            background: ;
                                            color:#ffffff;
                                        }
                                        .service-hover a:hover{
                                            background: #ffffff;
                                            color:#d42f38;
                                        }
                                    </style>

                                </div>










                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <div class="container ">
        <div class="row">
            <div class="col-md-12">





            </div>
        </div>
    </div>






