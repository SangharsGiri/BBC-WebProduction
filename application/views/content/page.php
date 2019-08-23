<?php if(isset($error)) {


    ?>
    <div class="alert alert-danger alert_box">
        <a href="#" class="close" data-dismiss="alert" aria-label="close"><i
                    class="fa fa-times"></i></a>
        <strong>Error!</strong>  <?php echo $error; ?>.
    </div>
    <?php
}
?>
<?php
if(isset($success)) {
    ?>
    <div class="alert alert-success alert_box">
        <a href="#" class="close alert_message" data-dismiss="alert" aria-label="close"><i
                    class="fa fa-times"></i></a>
        <strong>Success !</strong> <?php echo $success; ?>
    </div>
    <?php
}
?>
<?php if (isset($error)) {


    ?>
    <div class="alert alert-danger alert_box">
        <a href="#" class="close" data-dismiss="alert" aria-label="close"><i
                    class="fa fa-times"></i></a>
        <strong>Error!</strong>  <?php echo isset($error)?$error:"" ; ?>
    </div>
    <?php
}
?>




<?php
if($content['content_type'] =="News"){
    $content_id = $content['content_id'];
    $comments = $this->content->get_content_comments($content_id);
    $tags = $this->content->get_content_tags($content_id);
    $total_cmt = sizeof($comments);


    ?>

    <div id="fb-root"></div>
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12&appId=157463148314623&autoLogAppEvents=1';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

    <?php
    $settings = $this->site_settings_model->get_site_settings();
    ?>
    <div class="container">

        <div class="section">
            <div class="row">
                <div class="col-sm-9">
                    <div id="site-content" class="site-content">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="left-content">
                                    <div class="details-news">
                                        <div class="post">
                                            <div class="post-content">
                                                <h1 class="entry-title">
                                                    <?php echo $content['content_page_title'];?>
                                                </h1>
                                                <div class="entry-content">
                                                    <?php
                                                    $path = 'uploads/content/';
                                                    if (file_exists($path.$content['featured_img']) && $content['featured_img'] !="")
                                                    {
                                                        ?>
                                                        <img src="<?php echo $path.$content['featured_img'];?>" width="100%" />


                                                        <?php
                                                    }

                                                    ?>
                                                    <hr />
                                                    <?php echo $content['content_body']; ?>
                                                    <ul class="list-inline share-link">
                                                        <div class="addthis_inline_share_toolbox"></div>
                                                    </ul>
                                                </div>
                                                <div class="entry-meta">
                                                    <ul class="list-inline">
                                                        <?php

                                                        $UserDetail = $this->crud->get_detail($content['by-line'], 'by-line', 'igc_content');
                                                        ?>
                                                        <li class="views"><i class="fa fa-user"></i><a href="<?php echo site_url('category/author/'.$UserDetail['by-line']);?>"> <?php echo $UserDetail['by-line']; ?></li>
                                                        <li class="publish-date"><a href="<?php echo site_url('category/author/'.$UserDetail['created']);?>"><i class="fa fa-clock-o"></i> <?php echo date_converter($content['created']);?> </a></li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div><!--/post-->
                                    </div><!--/.section-->
                                </div><!--/.left-content-->
                            </div>



                        </div>
                    </div><!--/#site-content-->
                    <div class="row">
                        <div class="col-sm-12">


                            <div class="comments-wrapper">
                                <h1 class="section-title title">Comments</h1>
                                <div class="fb-comments" data-href="<?php echo current_url(); ?>" data-width="100%" data-numposts="5"></div>


                            </div>

                            <div class="section">
                                <?php

                                $CatName = $this->crud->get_detail($content['category_id'], 'category_id', 'igc_package_category');
                                ?>
                                <h1 class="section-title">More in <?php echo $CatName['category_name']; ?></h1>
                                <div class="row">
                                    <?php
                                    foreach ($related_content as $rows) {
                                        $related_path = 'uploads/content/';
                                        $i=0;
                                        ?>
                                        <div class="col-md-6">
                                            <div class="related">
                                                 <div class="post medium-post">
                                                <div class="entry-header">
                                                    <div class="entry-thumbnail">
                                                        <a href="<?php echo site_url('content/'.$rows['content_url']);?>">
                                                        <img class="img-responsive" src="<?php echo $related_path.$rows['featured_img']; ?>" alt="" />
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="post-content">
                                                    <div class="entry-meta">
                                                        <ul class="list-inline">
                                                            <li class="publish-date"><a href="<?php echo site_url('content/'.$rows['content_url']);?>"><i class="fa fa-clock-o"></i> <?php echo date_converter($rows['created']);?> </a></li>

                                                        </ul>
                                                    </div>
                                                    <h2 class="entry-title">
                                                        <a href="<?php echo site_url('content/'.$rows['content_url']);?>"><?php echo $rows['content_page_title']; ?></a>
                                                    </h2>
                                                </div>
                                            </div>
                                            </div>
                                            <!--/post-->
                                            <?php $i++; ?>
                                        </div>
                                        <?php
                                        if ($i%2==0) {?>
                                            <div class="clearfix"></div>
                                        <?php 
                                    }
                                    }
                                    ?>



                                </div>
                            </div><!--/.section -->
                        </div>
                    </div>
                </div><!--/.col-sm-9 -->

                <div class="col-sm-3">
                    <div id="sitebar">


                        <div class="widget follow-us" >
                            <h1 class="section-title title" >Follow Us</h1>
                            <ul class="list-inline social-icons" style="padding-top: 5%">
                                <li><a href="<?php echo $settings['facebook_link']; ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="<?php echo $settings['twiter_link']; ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="<?php echo $settings['google_plus_link']; ?>" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="<?php echo $settings['linked_in']; ?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="<?php echo $settings['youtube_link']; ?>" target="_blank"><i class="fa fa-youtube"></i></a></li>
                            </ul>
                        </div><!--/#widget-->

                        <div class="widget">
                            
                                <h1 class="adsss"><span>Advertisement space</span></h1>
                                <?php

                   $Ads1 = $this->db->query("SELECT * FROM igc_ads WHERE location = 'category-page' AND status ='Active'");
                   $Adss1 = $Ads1->result_array();

                   ?>

                       <?php
                       $path = 'uploads/ads/';
                       foreach ($Adss1 as $key => $value) {
                           ?>

<a href="<?php echo $value['ads_url'] ?>" target="_blank"><img  src="<?php echo $path.$value['featured_img'];?>"  alt="<?php echo $value['ads_name']; ?>" class="img-responsive"/></a>
                           <?php
                       }
?>
                            
                            <h1 class="section-title title">This is Rising!</h1>
                            <ul class="post-list">
                                <?php
                                $NsCat = $this->db->query("SELECT * FROM igc_package_category WHERE publish_status ='1' AND delete_status ='0' AND show_front = '0'");
                                $NsCats = $NsCat->result_array();
                                ?>
                                <?php

                                foreach ($NsCats as $rows) {
                                    $pack_path = 'uploads/package_category/';
                                    ?>
                                    <li>
                                        <div class="post small-post">
                                            <div class="entry-header">
                                                <div class="entry-thumbnail">
                                                    <img class="img-responsive" src="<?php echo $pack_path.$rows['featured_img']; ?>" alt="" />
                                                </div>
                                            </div>
                                            <div class="post-content">
                                                <div class="video-catagory"><a href="<?php echo  site_url('category/article/'.$rows['category_url']);?>"><?php echo $rows['category_name']; ?></a></div>
                                                <h2 class="entry-title">
                                                    <a href="<?php echo  site_url('category/article/'.$rows['category_url']);?>"><?php echo $rows['description']; ?></a>
                                                </h2>
                                            </div>
                                        </div><!--/post-->
                                    </li>

                                    <?php

                                }

                                ?>


                            </ul>
                        </div><!--/#widget-->
                    </div><!--/#sitebar-->
                </div>
            </div>
        </div><!--/.section-->
    </div><!--/.container-->



<?php  }


elseif ($content['content_type'] =="About") {
    $content_id= $content['content_id'];
    $tabs = $this->content->get_content_tabs($content_id);
    ?>

    <section>
        <div class="widget-top-title-2 par" style="background: url(<?php
        $path = 'uploads/content/';
        if (file_exists($path.$content['featured_img']) && $content['featured_img'] !="")
        {
            ?>
            <?php echo base_url().$path.$content['featured_img'];?>


            <?php
        }

        ?>); padding-top: 50px; padding-bottom: 50px;">
            <div class="bg-mask">
                <div class="container">
                    <h1><?php echo $content['content_page_title']; ?></h1>
                </div>
            </div>
        </div>
    </section><!-- /.widget geo map-->

    <div class="section section-contents section-pad">
        <div class="container">
            <div class="content row row-vm">

                <div class="col-sm-12 npl pad-r res-m-bttm">
                    <h2 class="heading-lg"><?php echo $content['content_page_title']; ?></h2>
                    <p class="lead">
                        <?php echo $content['content_body']; ?>
                    </p>

                </div>

            </div>
        </div>
    </div>
    <!-- End content -->

    <!-- Why Choose -->
    <div class="section section-contents section-pad light has-bg fixed-bg" style="background-image: url(<?php echo base_url().$path.$content['parallex_img'];?>);">
        <div class="container">
            <div class="content row">

                <h2 class="heading-lg" style="text-align: center">Why Choose Us</h2>
<hr />
                <div class="clear"></div>
                <div class="feature-intro space-top">

                    <div class="row">
                         <?php

                        $whychooseam = $this->db->query("SELECT * FROM igc_content WHERE content_type ='Why' AND delete_status ='0' order by content_id DESC limit 4");
                        $whychooseams = $whychooseam->result_array();

                        ?>

                        <?php
                        $i=1;
                        foreach($whychooseams  as $rows ) {
                            $path_whyam = 'uploads/content/';
                            ?>
                        <div class="col-sm-3 res-s-bttm" style="text-align: center; color: #000000; padding-bottom: 10%; ">
                            <div class=" style-s1">
                                <img width="30%" src="<?php echo $path_whyam.$rows['featured_img'];?>" />
                            </div>
                            <h4><?php echo $rows['content_page_title']; ?></h4>
                            
                                <?php echo $rows['content_body']; ?>
                           
                        </div>
                            <?php
                            $i++;
                        }

                        ?>



                    </div>



                </div>

            </div>
        </div>
    </div>
    <!-- End Why Choose -->











    <main class="container">
        <div class="row" style="padding-top: 40px; padding-bottom: 40px;">
            <div class="col-sm-4  container-overflow-low-xs amritabout">
                <div class="widget widget-rightrecentproperties bg-parallax-e">
                    <div class="widget-header vert-line-r-l vert-line-primary">
                        <h2 class=""><?php echo $content['about_service']; ?></h2>
                    </div>
                    <div class="widget-content properties-grid">
                        <div class="row">
                            <div class="col-xs-12">
                                <?php echo $content['about_service_desc']; ?>
                            </div>

                        </div>
                    </div> <!-- /. recent properties -->


                </div>

            </div>
            <div class="col-sm-4  container-overflow-low-xs ">
                <div class="widget widget-rightrecentproperties bg-parallax-e amritabout">


                    <div class="widget-header vert-line-r-l vert-line-primary">
                        <h2 class=""><?php echo $content['about_choose']; ?></h2>
                    </div>
                    <div class="widget-content properties-grid">
                        <div class="row">
                            <div class="col-xs-12">
                                <?php echo $content['about_choose_desc']; ?>
                            </div>

                        </div>
                    </div> <!-- /. recent properties -->


                </div>

            </div>
            <div class="col-sm-4  container-overflow-low-xs ">
                <div class="widget widget-rightrecentproperties bg-parallax-e amritabout">




                    <div class="widget-header vert-line-r-l vert-line-primary">
                        <h2 class=""><?php echo $content['about_support']; ?></h2>
                    </div>
                    <div class="widget-content properties-grid">
                        <div class="row">
                            <div class="col-xs-12">
                                <?php echo $content['about_support_desc']; ?>
                            </div>

                        </div>
                    </div> <!-- /. recent properties -->
                </div>

            </div>

        </div>
    </main>





<?php  }
elseif ($content['content_type'] =="Page"){
    ?>






    <!-- Single-Service-Start -->
    <section class="single-service-contents">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-5 col-xs-12">
                    <div class="service-sidebar sidebar-wrapper">

                        <div class="widget">
                            <h2 class="widget-title">OUR SERVICES</h2>
                            <ul class="service-list">
                                <?php

                                $servmenu = $this->db->query("SELECT * FROM igc_content WHERE content_type ='Serve' AND delete_status ='0'");
                                $menuside = $servmenu->result_array();



                                ?>


                                <?php
                                foreach($menuside  as $results ) {

                                    ?>

                                    <li><a href="<?php echo  site_url('content/'.$results['content_url']);?>">&rarrhk; <?php echo $results['content_page_title']; ?></a></li>

                                    <?php

                                }

                                ?>

                            </ul>
                        </div><!-- /.widget -->



                        <div class="widget">
                            <h2 class="widget-title">CONTACT DETAIL</h2>
                            <div class="textwidget">

                                <p><?php
                                    $settings = $this->site_settings_model->get_site_settings();
                                    ?>
                                    <?php echo (isset($settings['contact_details']) && $settings['contact_details'] !="")? $settings['contact_details']:"#";?>
                                </p>
                            </div>
                        </div><!-- /.widget -->
                    </div><!-- /.sidebar-wrapper -->
                </div><!-- /.col -->
                <div class="col-md-9 col-sm-7 col-xs-12">
                    <div class="single-service-content">
                        <?php
                        $path = 'uploads/content/';

                        if ($content['featured_img'] !="")
                        {
                            ?>
                            <img  src="<?php echo $path.$content['featured_img'];?>" class="img-responsive " alt="Images">

                            <?php
                        }

                        ?>

                        <p><?php echo $content['content_body'];?></p>
                    </div><!-- /.single-service-content -->

                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
    <!-- Single-Service-End-->




<?php }

elseif ($content['content_type'] =="Contact"){
    ?>

    <section>
        <div class="widget-top-title-2 par" style="background: url(<?php
        $path = 'uploads/content/';
        if (file_exists($path.$content['featured_img']) && $content['featured_img'] !="")
        {
            ?>
            <?php echo base_url().$path.$content['featured_img'];?>


            <?php
        }

        ?>);  padding-top: 50px; padding-bottom: 50px;">

                <div class="container ">
                    <h1><?php echo $content['content_page_title']; ?></h1>
                </div>

        </div>
    </section><!-- /.widget geo map-->

<div data-id="!contactus" class="contentWrapper contactPage fullWidth fullHeight removePadding autoPosition m-Scrollbar backGround" >


    <main class="page-main">
        <!-- Page Banner Start -->



        <div class="block fullwidth no-pad">
            <div id="content" class="flat-row-fix row-contact" style="margin-bottom:3%; margin-top: 3%;">
                <div class="container content-wrapper">
                    <div class="row">
                        <div class="col-md-12">

                            <?php echo $content['content_body'];?>
                        </div>

                        <div class="col-md-8">
                            <h3 style="margin-left: 2%;">Leave your message</h3>

                            <form action="<?php echo site_url('home/feedback');?>" method="post" enctype="multipart/form-data"  role="form"   data-parsley-validate novalidate >
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="name" id="name" placeholder="Full Name" data-parsley-required-message=" Full Name required" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-parsley-required-message="Email required" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="mobile" id="lname" placeholder="Phone"  data-parsley-required-message=" Mobile Number required "   data-parsley-pattern-message="Please enter a valid 10 digit mobile number"  required>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="country" id="country" placeholder="country"  data-parsley-required-message=" Country "   data-parsley-pattern-message="Country"  required>


                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">


                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="company" id="company" placeholder="Company" data-parsley-required-message="Company Name required" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="industry" id="industry" placeholder="Industry" data-parsley-required-message="Industry required " required>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6" >
                                    <div class="form-group" id="mydiv"></div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="services" id="services" placeholder="Services/Technologies" data-parsley-required-message="Services/Technologies required " required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select id="sel" class="form-control" name="solution" style="margin-top: 10px;" data-parsley-required-message="This feild required "  required>
                                                    <option >Select category</option>
                                                    <?php

                                                    $service = $this->db->query("SELECT * FROM igc_content WHERE content_type ='OS' AND delete_status ='0' order by content_id DESC ");
                                                    $services = $service->result_array();

                                                    ?>

                                                    <?php
                                                    $i=1;
                                                    foreach($services  as $rows ){

                                                        ?>
                                                        <option value="<?php echo $rows['content_page_title']; ?>"><?php echo $rows['content_page_title']; ?></option>

                                                        <?php
                                                        $i++;

                                                    }
                                                    ?>


                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="col-md-12">
                                            <p><i>How can we help you?</i></p>
                                            <div class="form-group">
                                                <textarea class="form-control" name="message" id="exampleTextarea" rows="3" data-parsley-required-message="This feild required " required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6" id="mydiv"></div>
                                <div class="row mt-20">
                                    <div class="col-md-12">

                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <button type="submit" name="submit" class="btn  btn-block btn-primary btn-lg btn-huge">Send</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>



                        </div><!-- /.col-md-8 -->

                        <div class="col-md-4">
                            <div class="contact-side-am">
                                <h3>Contact Address</h3>
                                <?php
                                $settings = $this->site_settings_model->get_site_settings();
                                ?>

                                <?php echo (isset($settings['contact_details']) && $settings['contact_details'] !="")? $settings['contact_details']:"#";?>

                            </div>
                            <div class="map">
                                <?php echo (isset($settings['location_map']) && $settings['location_map'] !="")? $settings['location_map']:"#";?>
                            </div>
                        </div><!-- /.col-md-4 -->
                    </div><!-- /.row -->
                </div><!-- /.container -->

            </div>
        </div>


    </main>

</div>
<?php }
else if ($content['content_type'] =="Services"){
    $content_id= $content['content_id'];
    $tabs = $this->content->get_content_tabs($content_id);
    ?>
    <section>
        <div class="widget-top-title-2 par" style="background: url(<?php
        $path = 'uploads/content/';
        if (file_exists($path.$content['featured_img']) && $content['featured_img'] !="")
        {
            ?>
            <?php echo base_url().$path.$content['featured_img'];?>


            <?php
        }

        ?>); padding-top: 50px; padding-bottom: 50px;">
            <div class="bg-mask">
                <div class="container">
                    <h1><?php echo $content['content_page_title']; ?></h1>
                </div>
            </div>
        </div>
    </section><!-- /.widget geo map-->



    <!--Page Title-->





    <div class="info-box section-padding" style="margin-top:3%; margin-bottom: 2%;">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    &nbsp;
                </div>
                <div class="col-sm-8" style="margin-bottom: 4%;">
                    <h2 class="text-center h-lg h-decor"><?php echo $content['content_page_title'] ?></h2>
                    <p class="text-center"><?php echo $content['content_body'];?></p>
                </div>
                <div class="col-sm-2">
                    &nbsp;
                </div>
                <div class="margin-balance">
    <?php

    $query2 = $this->db->query("SELECT * FROM igc_content WHERE content_type ='OS' AND delete_status ='0'");
    $result2 = $query2->result_array();



    ?>

    <?php
    $path = 'uploads/content/';
    foreach($result2 as $results){

        ?>

        <div class="col-sm-3">
                        <div class="feature-box amritdesign text-center">
                            <img src="<?php echo $path.$results['featured_img'];?>" width="100%" />
                            <h4 class="title"><?php echo $results['content_page_title']; ?></h4>
                            <p class="subtext"><?php
                                $ams = substr($results["content_body"] , 0,140);
                                $ams = preg_replace("/<img[^>]+\>/i", "", $ams);
                                echo $ams;
                                ?></p>

                            <a href="<?php echo  site_url('content/'.$results['content_url']);?>" class="btn btn-primary">Read More <i class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

        <?php


    }

    ?>


                </div>
            </div>
        </div>
    </div>

    <?php
    }
    else if($content['content_type'] == "Themes") {
    ?>

        <div id="fb-root"></div>
        <script>(function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12&appId=157463148314623&autoLogAppEvents=1';
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>

        <?php
        $settings = $this->site_settings_model->get_site_settings();
        ?>
        <div class="container">

            <div class="section">
                <div class="row">
                    <div class="col-sm-9">
                        <div id="site-content" class="site-content">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="left-content">
                                        <div class="details-news">
                                            <div class="post">

                                                <div class="post-content">

                                                    <h2 class="entry-title">
                                                        <?php echo $content['content_page_title'];?>
                                                    </h2>
                                                    <div class="entry-meta">
                                                        <ul class="list-inline">
                                                            <?php

                                                            $UserDetail = $this->crud->get_detail($content['user_id'], 'user_id', 'igc_users');
                                                            ?>
                                                            <li class="views">By: <a href="<?php echo site_url('category/author/'.$UserDetail['username']);?>"> <?php echo $UserDetail['full_name']; ?></li>
                                                            <li class="publish-date"><a href="#"><i class="fa fa-clock-o"></i> <?php echo date_converter($content['created']);?> </a></li>

                                                        </ul>
                                                    </div>
                                                    <div class="entry-content">
                                                        <?php
                                                        $path = 'uploads/content/';
                                                        if (file_exists($path.$content['featured_img']) && $content['featured_img'] !="")
                                                        {
                                                            ?>
                                                            <img src="<?php echo $path.$content['featured_img'];?>" />


                                                            <?php
                                                        }

                                                        ?>
                                                        <hr />

                                                        <?php echo $content['content_body']; ?>
                                                        <ul class="list-inline share-link">
                                                            <div class="addthis_inline_share_toolbox"></div>
                                                        </ul>
                                                    </div>


                                                </div>
                                            </div><!--/post-->
                                        </div><!--/.section-->
                                    </div><!--/.left-content-->
                                </div>



                            </div>
                        </div><!--/#site-content-->
                        <div class="row">
                            <div class="col-sm-12">


                                <div class="comments-wrapper">
                                    <h1 class="section-title title">Comments</h1>
                                    <div class="fb-comments" data-href="<?php echo current_url(); ?>" data-width="100%" data-numposts="5"></div>


                                </div>

                                <div class="section">
                                    <?php

                                    $CatName = $this->crud->get_detail($content['category_id'], 'category_id', 'igc_package_category');
                                    ?>
                                    <h1 class="section-title">More in <?php echo $CatName['category_name']; ?></h1>
                                    <div class="row">
                                        <?php
                                        foreach ($related_content as $rows) {
                                            $related_path = 'uploads/content/';
                                            ?>
                                            <div class="col-sm-4">
                                                <div class="post medium-post">
                                                    <div class="entry-header">
                                                        <div class="entry-thumbnail">
                                                            <a href="<?php echo site_url('content/'.$rows['content_url']);?>">
                                                                <img class="img-responsive" src="<?php echo $related_path.$rows['featured_img']; ?>" alt="" />
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="post-content">
                                                        <div class="entry-meta">
                                                            <ul class="list-inline">
                                                                <li class="publish-date"><a href="<?php echo site_url('content/'.$rows['content_url']);?>"><i class="fa fa-clock-o"></i> <?php echo date_converter($rows['created']);?> </a></li>

                                                            </ul>
                                                        </div>
                                                        <h2 class="entry-title">
                                                            <a href="<?php echo site_url('content/'.$rows['content_url']);?>"><?php echo $rows['content_page_title']; ?></a>
                                                        </h2>
                                                    </div>
                                                </div><!--/post-->

                                            </div>
                                            <?php
                                        }
                                        ?>



                                    </div>
                                </div><!--/.section -->
                            </div>
                        </div>
                    </div><!--/.col-sm-9 -->

                    <div class="col-sm-3">
                        <div id="sitebar">


                            <div class="widget follow-us">
                                <h1 class="section-title title">Follow Us</h1>
                                <ul class="list-inline social-icons" style="padding-top: 5%">
                                    <li><a href="<?php echo $settings['facebook_link']; ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="<?php echo $settings['twiter_link']; ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="<?php echo $settings['google_plus_link']; ?>" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="<?php echo $settings['linked_in']; ?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="<?php echo $settings['youtube_link']; ?>" target="_blank"><i class="fa fa-youtube"></i></a></li>
                                </ul>
                            </div><!--/#widget-->

                            <div class="widget">
                                <h1 class="section-title title">This is Rising!</h1>
                                <ul class="post-list">
                                    <?php
                                    $NsCat = $this->db->query("SELECT * FROM igc_package_category WHERE publish_status ='1' AND delete_status ='0' AND show_front = '0'");
                                    $NsCats = $NsCat->result_array();
                                    ?>
                                    <?php

                                    foreach ($NsCats as $rows) {
                                        $pack_path = 'uploads/package_category/';
                                        ?>
                                        <li>
                                            <div class="post small-post">
                                                <div class="entry-header">
                                                    <div class="entry-thumbnail">
                                                        <img class="img-responsive" src="<?php echo $pack_path.$rows['featured_img']; ?>" alt="" />
                                                    </div>
                                                </div>
                                                <div class="post-content">
                                                    <div class="video-catagory"><a href="<?php echo  site_url('category/article/'.$rows['category_url']);?>"><?php echo $rows['category_name']; ?></a></div>
                                                    <h2 class="entry-title">
                                                        <a href="<?php echo  site_url('category/article/'.$rows['category_url']);?>"><?php echo $rows['description']; ?></a>
                                                    </h2>
                                                </div>
                                            </div><!--/post-->
                                        </li>

                                        <?php

                                    }

                                    ?>


                                </ul>
                            </div><!--/#widget-->
                        </div><!--/#sitebar-->
                    </div>
                </div>
            </div><!--/.section-->
        </div><!--/.container-->




<?php }
else if($content['content_type'] =="Brand"){

    ?>
    <section id="OurProcess" data-kc-fullwidth="row" class="kc-elm kc-css-340207 kc_row our_process_section">
        <div class="kc-row-container  kc-container">
            <div class="kc-wrap-columns">
                <div class="kc-elm kc-css-840185 kc_col-sm-12 kc_column kc_col-sm-12">
                    <div class="kc-col-container">
                        <div class="kc-elm kc-css-169530 kc-title-wrap ">

                            
                        </div>

                        <!-- The Team -->
                        <div class="home-doctors  clearfix">

                            <div class="container">
                                <?php
                                $brands = $this->crud_model->get_active_records('igc_clients');

//                                print_r(  $brands);
//                                exit();
                                if(!empty($brands))
                                {
                                    ?>
                                    <div class="row">
                                        <?php
                                        $path  = 'uploads/clients/';
                                        $i=1;
                                        foreach($brands as $rows) {
                                            $actives = (isset($i) && $i == "1") ? "active" : "";
                                            ?>
                                            <!-- entry1 -->
                                            <div class="col-sm-2  text-center doc-item <?php echo $actives;?>">
                                                <div class="common-doctor animated fadeInUp clearfix ae-animation-fadeInUp">
                                                    <figure>
                                                        <a href="<?php echo site_url('brands/brands_list/'.$rows['slug']);?> "> <img width="670" height="200" src="<?php echo $path.$rows['clients_image'];?>" class="doc-img animate attachment-gallery-post-single wp-post-image" alt="doctor-2"></a>
                                                    </figure>
                                                </div>
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
                        <!-- //The Team -->
                    </div>
                </div>
            </div>
        </div>
    </section>



    <?php
}
else if($content['content_type'] =="Team"){
    ?>





    <!-- team-->
    <section class="team">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-center">
<!--                    <h2 class="section-title">Our employees</h2>-->
                    <span class="section-sub"><?php echo $content['content_body'];?></span>
                </div>
            </div>

            <div class="team-members">
                <div class="row">
                    <?php
                    if(!empty($portfolios))
                    {
                        ?>

                        <?php
                        $path  = 'uploads/portfolio/';
                        $i=1;
                        foreach($portfolios as $rows) {

                            $actives = (isset($i) && $i == "1") ? "active" : "";
                            ?>

                            <div class="col-sm-4 col-xs-12 <?php echo $actives;?>">
                                <figure class="team-member">
                                    <div class="member-thumbnail">
                                        <img src="<?php echo $path.$rows['portfolio_image'];?>" alt="Image">
<!--                                        <a class="member-link" href="about-member.html" title=""><i class="fa fa-link"></i></a>-->
                                    </div>

                                    <div class="member-info">
                                        <h3><?php echo $rows['portfolio_title']; ?>
                                            <small><?php echo $rows['portfolio_caption']; ?></small>
                                        </h3>
                                    </div>

                                </figure>
                            </div><!-- /.col-->





                            <?php
                            $i++;
                        }
                        ?>





                        <?php
                    }
                    ?>










                </div><!-- /.row-->
            </div><!-- /.team-members -->

        </div><!-- /.container-->
    </section>
    <!-- /.team-->







<?php
}
else if($content['content_type'] =="FAQ"){
    
    ?>
    <!-- Inner Intro -->
    <div class="inner-intro inner-intro-bg" style="background-image: url(<?php
    $path = 'uploads/content/';
    if (file_exists($path.$content['featured_img']) && $content['featured_img'] !="")
    {
        ?>
        <?php echo $path.$content['featured_img'];?>


        <?php
    }

    ?>);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="page-title"><?php echo $content['content_page_title']; ?></h3>
                    <ul class="breadcrumb breadcrumb-area">
                        <li><a href="<?php echo base_url(); ?>">Home</a></li>

                        <li class="active"><?php echo $content['content_page_title']; ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Inner Intro End -->
<div class="section-padding-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <p class="text-center"><?php echo $content['content_body'];?></p>
                </div>
                <div class="col-md-9">
                    <div class="col-sm-mb-sp">
                        <h3 class="accordion-title">Frequently Asked Questions</h3>
                        <div class="accordion-default accordion-before">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <?php


                                $faq = $this->crud_model->get_active_records('igc_services');



                                //                                                            print_r(  $faq);
                                //                                                            exit();
                                if(!empty($faq))
                                {
                                    ?>

                                    <?php

                                    $i=1;
                                    foreach($faq as $rows) {
                                        $actives = (isset($i) && $i == "1") ? "active" : "";
                                        ?>
                                        <div class="panel panel-default">
                                            <div class="panel-heading style-none" role="tab" id="heading<?php echo $i; ?>">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $i; ?>" aria-expanded="false" aria-controls="collapse<?php echo $i; ?>">
                                                        <?php echo $rows['services_title']; ?>

                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapse<?php echo $i; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?php echo $i; ?>">
                                                <div class="panel-body">
                                                    <p><?php echo $rows['services_caption']; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                        $i++;
                                    }
                                    ?>

                                    <?php
                                }
                                ?>
                                <hr />


                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3 aside">
                    <br />
                    <aside class="widget widget-catagory">
                        <div class="widget-inner">

                            <h3 class="widget-title">OUR SERVICES</h3>
                            <ul>
                                <?php

                                $servmenu = $this->db->query("SELECT * FROM igc_content WHERE content_type ='Serve' AND delete_status ='0'");
                                $menuside = $servmenu->result_array();



                                ?>


                                <?php
                                foreach($menuside  as $results ) {

                                    ?>
                                    <li>
                                        <a href="<?php echo  site_url('content/'.$results['content_url']);?>"><?php echo $results['content_page_title']; ?></a>
                                    </li>
                                    <?php

                                }

                                ?>

                            </ul>
                        </div>
                    </aside>

                </div>

            </div>
        </div>

    </div>




<?php
} 
else if($content['content_type'] =="ProService"){
    
    ?>
    
    
    
    <section class="team-intro">
						<div class="container-fluid">
							<div class="row">
								<div class="col-sm-6">
									
									    <?php
                                        $path = 'uploads/content/';
                                        if (file_exists($path.$content['featured_img']) && $content['featured_img'] !="")
                                        {
                                            ?>
                                            <img src="<?php echo $path.$content['featured_img'];?>" class="img-responsive" />
                                            <?php
                                        }

                                        ?>
									
									
								</div><!--/.col-->
								<div class="col-sm-6 ">
									
									<?php echo $content['content_body'];?>
									
								</div><!--/.col-->
							</div><!--/.row-->
						</div><!-- /.container-->
					</section>
    
    
    
  
<div class="row noPadding am-footer">
  <div class="col-md-12 noPadding box" >
    <div class="col-md-4 first">
        <div class="textbox">
           
            
             <?php
             
               $mainlandlist= $content['content_url'];
               

                $mainland = $this->db->query("SELECT * FROM igc_content WHERE content_type ='MainLand' AND freezone_page_type='$mainlandlist' AND delete_status ='0'");
                $mainlands = $mainland->result_array();



                ?>
                
                <?php
                foreach($mainlands as $mainlandk){
                    ?>
                    
                     <h1><?php echo $mainlandk['content_page_title']; ?></h1>
            <hr>
            <?php echo substr($mainlandk["content_body"] , 0,350); ?>
            <br />
            <a href="<?php echo  site_url('content/'.$mainlandk['content_url']);?>">Read More</a>
                
                    
                    
                    
                    <?php
                }
                
                
                ?>
           
                
                
                
            
        </div>
    </div>
    <div class="col-md-4 second">
        <div class="textbox">
            
             
            
            <h1>Free Zones</h1>
            <hr>
            
            <?php
               $freezonelist= $content['content_url'];
               

                $freezone = $this->db->query("SELECT * FROM igc_content WHERE content_type ='FreeZone' AND freezone_page_type='$freezonelist' AND delete_status ='0'");
                $freezones = $freezone->result_array();



                ?>

            
            
            <?php
            foreach($freezones as $rows){
                ?>
                
                <ul>
                    <li><a href="<?php echo  site_url('content/'.$rows['content_url']);?>"><?php echo $rows['content_page_title']; ?></a> </li>
                    
                </ul>
                
                
                <?php
            }
            
            
            ?>
    
            
            
            
            
          
        </div>
    </div>
    <div class="col-md-4 thrid">
                <div class="textbox">
            <h1><?php echo $content['about_support']; ?></h1>
            <hr>
            <p><?php echo $content['about_support_desc']; ?></p>
            <a href="<?php echo  site_url('content/'.$content['about_support_link']);?>">Read More</a>
        </div>
    </div>
    
  </div>
</div>
    
    <?php 
}
else if($content['content_type'] =="BizSetup"){
    ?>
    <section >
        <?php
                                        $path = 'uploads/content/';
                                        if (file_exists($path.$content['featured_img']) && $content['featured_img'] !="")
                                        {
                                            ?>
                                            <img src="<?php echo $path.$content['featured_img'];?>" />

                                            <?php
                                        }

                                        ?>
        
    </section>
    <section>
        <div class="container" style="margin-top: 3%; margin-bottom: 3%;">
           <div class="row">
               <div class="col-sm-12">
                    <?php echo $content['content_body']; ?>
               </div>
           </div>
       </div>
    </section>
    
    <section id="business-setup-services" style="background-color:#eee;">

       
        <div class="areas-wrap">
            <div class="areas-wrap">
                <?php

                $proserv = $this->db->query("SELECT * FROM igc_content WHERE content_type ='ProService' AND delete_status ='0'");
                $proservices = $proserv->result_array();



                ?>

                <?php
                foreach($proservices  as $results ){
                    $path = 'uploads/content/';
                    ?>
                   <div class="box">
                        <a href="<?php echo  site_url('content/'.$results['content_url']);?>">
                        <img width="400" height="150" src="<?php echo $path.$results['featured_img'];?>" class="attachment-medium size-medium wp-post-image" alt="business setup in dubai" srcset="<?php echo $path.$results['featured_img'];?> 300w, <?php echo $path.$results['featured_img'];?> 768w, <?php echo $path.$results['featured_img'];?> 1024w" sizes="(max-width: 300px) 100vw, 300px">
                        </a>
                        
                        
                        <div class="text-service-am">
                            <h3> <?php echo $results['content_page_title'] ?></h3>
                         <?php
                                $am = substr($results["content_body"] , 0,170);
                                $am = preg_replace("/<img[^>]+\>/i", "", $am);
                                echo $am;
                                ?>
                                <div class="clearfix"></div>
                                <a href="<?php echo  site_url('content/'.$results['content_url']);?>" class="btn btn-primary">Read More</a>
                        </div>
                        
                    </div>


                    <?php

                }
                ?>



            </div>
        </div>
        <div class="clearfix"></div>
    </section>

    
<?php
}
else if($content['content_type'] =="FreeZone"){
?>    

 <section >
        <?php
                                        $path = 'uploads/content/';
                                        if (file_exists($path.$content['featured_img']) && $content['featured_img'] !="")
                                        {
                                            ?>
                                            <img width="100%" src="<?php echo $path.$content['featured_img'];?>" />

                                            <?php
                                        }

                                        ?>
        
    </section>
    <section>
        <div class="container" style="margin-top: 3%; margin-bottom: 3%;">
           <div class="row">
               <div class="col-sm-12">
                    <?php echo $content['content_body']; ?>
               </div>
           </div>
       </div>
    </section>
    
    <section id="" style="background-color:#eee; margin-bottom: 3%">

       
        <div class="bg-overlay" style="background-image: url(<?php
                                        $path = 'uploads/content/';
                                        if (file_exists($path.$content['freezone_img']) && $content['freezone_img'] !="")
                                        {
                                            ?>
                                            <?php echo $path.$content['freezone_img'];?>

                                            <?php
                                        }

                                        ?>);">
	<div class="row">
		<div class="col-sm-7">
		    &nbsp;
		</div>
		
		
		<div class="col-sm-5 facilities_benifit" style="background-color: #000000; color: #ffffff; height: 560px; margin-top: -50px; border-left: 3px solid #9e0000;">
		    <h3 class="text-center" style="font-weight: 700; padding-top: 20px;">Facilities and Benifites</h3>
		    <?php
                                $facilityicon = $this->crud_model->get_active_records('igc_gallery');

//                                print_r(  $brands);
//                                exit();
                                if(!empty($facilityicon))
                                {
                                    ?>
                                    <ul>
                                        <?php
                                        
                                        $i=1;
                                        foreach($facilityicon as $rows) {
                                            $path = 'uploads/gallery/';
                                            $actives = (isset($i) && $i == "1") ? "active" : "";
                                            ?>
                                            
                                            <li><img src="<?php echo $path.$rows['gallery_image'];?>" width="8%" /> <?php echo $rows['gallery_title']; ?></li>
                                            
                                    
                                            
                                            
                                            
                                            
                                            
                                            <?php
                                            $i++;
                                        }
                                        ?>
                                    </ul>
                                    <?php
                                }
                                ?>
		    
		    
		    
		    
		    <ul>
	
        </li></ul>
		</div>
		
	</div>
</div>
        <div class="clearfix"></div>
    </section>
<div class="row noPadding am-footer">
  <div class="col-md-12 noPadding box" >
    <div class="col-md-6 first">
        <div class="textbox">
            <h1><?php echo $content['about_service']; ?></h1>
            <hr>
            <p><?php echo $content['about_service_desc']; ?></p>
            <!--<a href="<?php echo  site_url('content/'.$content['about_service_link']);?>">Read More</a>-->
        </div>
    </div>
    <div class="col-md-6 second">
        <div class="textbox">
            <h1><?php echo $content['about_choose']; ?></h1>
            <hr>
            <p><?php echo $content['about_choose_desc']; ?></p>
            <!--<a href="<?php echo  site_url('content/'.$content['about_choose_link']);?>">Read More</a>-->
        </div>
    </div>
    
    
  </div>
</div>





<?php 
}
else if($content['content_type'] =="MainLand"){
?>
    <section>
        <div class="widget-top-title-2 par" style="background: url(<?php
        $path = 'uploads/content/';
        if (file_exists($path.$content['featured_img']) && $content['featured_img'] !="")
        {
            ?>
            <?php echo base_url().$path.$content['featured_img'];?>


            <?php
        }

        ?>); padding-top: 50px; padding-bottom: 50px;">
            <div class="bg-mask">
                <div class="container">
                    <h1><?php echo $content['content_page_title']; ?></h1>
                </div>
            </div>
        </div>
    </section><!-- /.widget geo map-->



    <!--Page Title-->

    <div id="main-container">
        <div class="content">
            <div class="container">

                <div class="row">
                    <ul class="sort-destination isotope project-items format-gallery" data-sort-id="projects">
                        <?php

                        $query2 = $this->db->query("SELECT * FROM igc_content WHERE content_type ='BF' AND delete_status ='0'");
                        $result2 = $query2->result_array();



                        ?>

                        <?php
                        $path = 'uploads/content/';
                        foreach($result2 as $results){

                            ?>
                            <li class="col-md-4 col-sm-6 col-xs-6 grid-item project-grid-item paving format-image">
                                <a href="<?php echo $path.$results['featured_img'];?>" title="<?php
                                $ams = substr($results["content_body"] , 0,960);
                                $ams = preg_replace("/<img[^>]+\>/i", "", $ams);
                                echo $ams;
                                ?>" class="popup-image media-box">
                                    <img src="<?php echo $path.$results['featured_img'];?>" alt="<?php echo $results['content_page_title']; ?>">
                                </a>
                            </li>




                            <?php


                        }

                        ?>



                    </ul>
                </div>
            </div>
        </div>
    </div>





<?php 
}
else if($content['content_type'] =="Message"){
    ?>
    <div class="bodyContainer">
        <div class="mainContent" >

            <!-- home-->
<?php
$path = 'uploads/content/';

?>
            <div  data-id="!home" class="contentWrapper m-Scrollbar fullHeight removeNexPrevBtn backGround parallax" data-src="<?php echo base_url().$path.$content['parallex_img'];?>" data-src-small="<?php echo base_url().$path.$content['parallex_img'];?>" >

                <!-- overlay -->
                <div class=" overlayBg highlight_bgColor1"></div>

                <div class="fullScreenSlider fullWidth">

                    <hr class="separator_max">
                    <div class="container" >
                        <div class="row">
                            <div class="col-md-12" data-animated-time="5"  data-animated-in="animated fadeInUp"  data-animated-innerContent="yes">
                                <div class="col-md-12 textAlignCenter">
                                    <h3 style="color: #000000; "><?php echo $content['content_page_title']; ?></h3>
                                </div>
                                <hr class="separator_max">
                                <div class="col-md-1"></div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <div class="team-image">
                                        <a href="#">
                                            <img alt="" src="<?php echo base_url().$path.$content['featured_img'];?>" class="primary-image" width="100%">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                    <div class="single-team-content-area">
                                        <div class="content">
                                       <p>
                                           <?php echo $content['content_body']; ?>

                                       </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="separator_mini">
            </div>

            <!-- Core values-->



        </div>
    </div>

    <?php
    }
    else if($content['content_type'] =="Tutorial"){
    ?>



        <div id="fb-root"></div>
        <script>(function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12&appId=157463148314623&autoLogAppEvents=1';
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>

        <?php
        $settings = $this->site_settings_model->get_site_settings();
        ?>
        <div class="container">

            <div class="section">
                <div class="row">
                    <?php

                    $CatName = $this->crud->get_detail($content['category_id'], 'category_id', 'igc_package_category');
                    ?>


                    <div class="col-sm-9">
                        <div id="site-content" class="site-content">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="left-content">
                                        <div class="details-news">
                                            <div class="post">

                                                <div class="post-content">

                                                    <h2 class="entry-title">
                                                        <?php echo $content['content_page_title'];?>
                                                    </h2>
                                                    <div class="entry-meta">
                                                        <ul class="list-inline">
                                                            <?php

                                                            $UserDetail = $this->crud->get_detail($content['user_id'], 'user_id', 'igc_users');
                                                            ?>
                                                            <li class="views">By: <a href="<?php echo site_url('category/author/'.$UserDetail['username']);?>"> <?php echo $UserDetail['full_name']; ?></li>
                                                            <li class="publish-date"><a href="#"><i class="fa fa-clock-o"></i> <?php echo date_converter($content['created']);?> </a></li>

                                                        </ul>
                                                    </div>
                                                    <div class="entry-content">
                                                        <?php
                                                        $path = 'uploads/content/';
                                                        if (file_exists($path.$content['featured_img']) && $content['featured_img'] !="")
                                                        {
                                                            ?>
                                                            <img src="<?php echo $path.$content['featured_img'];?>" width="100%" />


                                                            <?php
                                                        }

                                                        ?>
                                                        <hr />
                                                        <?php echo $content['content_body']; ?>
                                                        <ul class="list-inline share-link">
                                                            <div class="addthis_inline_share_toolbox"></div>
                                                        </ul>
                                                    </div>


                                                </div>
                                            </div><!--/post-->
                                        </div><!--/.section-->
                                    </div><!--/.left-content-->
                                </div>



                            </div>
                        </div><!--/#site-content-->
                        <div class="row">
                            <div class="col-sm-12">


                                <div class="comments-wrapper">
                                    <h1 class="section-title title">Comments</h1>
                                    <div class="fb-comments" data-href="<?php echo current_url(); ?>" data-width="100%" data-numposts="5"></div>


                                </div>


                            </div>
                        </div>
                    </div><!--/.col-sm-9 -->
                    <div class="col-sm-3">
                        <h1 class="section-title title"><?php echo $CatName['category_name']; ?></h1>
                        <div class="list-post">
                            <ul>
                                <?php
                                foreach ($related_content as $rows) {
                                    $related_path = 'uploads/content/';
                                    ?>
                                    <li><a href="<?php echo site_url('content/'.$rows['content_url']);?>"><?php echo $rows['content_page_title']; ?><i class="fa fa-angle-right"></i></a></li>


                                    <?php
                                }
                                ?>

                            </ul>
                        </div><!--/list-post-->
                    </div>


                </div>
            </div><!--/.section-->
        </div><!--/.container-->






        <?php
}
else {
    ?>

    <div id="fb-root"></div>
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12&appId=157463148314623&autoLogAppEvents=1';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

    <?php
    $settings = $this->site_settings_model->get_site_settings();
    ?>
    <div class="container">

        <div class="section">
            <div class="row">
                <div class="col-sm-9">
                    <div id="site-content" class="site-content">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="left-content">
                                    <div class="details-news">
                                        <div class="post">

                                            <div class="post-content">

                                                <h2 class="entry-title">
                                                    <?php echo $content['content_page_title'];?>
                                                </h2>
                                                <div class="entry-meta">
                                                    <ul class="list-inline">
                                                        <?php

                                                        $UserDetail = $this->crud->get_detail($content['user_id'], 'user_id', 'igc_users');
                                                        ?>
                                                        <li class="views">By: <a href="<?php echo site_url('category/author/'.$UserDetail['username']);?>"> <?php echo $UserDetail['full_name']; ?></li>
                                                        <li class="publish-date"><a href="#"><i class="fa fa-clock-o"></i> <?php echo date_converter($content['created']);?> </a></li>

                                                    </ul>
                                                </div>
                                                <div class="entry-content">
                                                    <?php
                                                    $path = 'uploads/content/';
                                                    if (file_exists($path.$content['featured_img']) && $content['featured_img'] !="")
                                                    {
                                                        ?>
                                                        <img src="<?php echo $path.$content['featured_img'];?>" width="100%" />


                                                        <?php
                                                    }

                                                    ?>
                                                    <hr />
                                                    <?php echo $content['content_body']; ?>
                                                    <ul class="list-inline share-link">
                                                        <div class="addthis_inline_share_toolbox"></div>
                                                    </ul>
                                                </div>


                                            </div>
                                        </div><!--/post-->
                                    </div><!--/.section-->
                                </div><!--/.left-content-->
                            </div>



                        </div>
                    </div><!--/#site-content-->
                    <div class="row">
                        <div class="col-sm-12">


                            <div class="comments-wrapper">
                                <h1 class="section-title title">Comments</h1>
                                <div class="fb-comments" data-href="<?php echo current_url(); ?>" data-width="100%" data-numposts="5"></div>


                            </div>

                            <div class="section">
                                <?php

                                $CatName = $this->crud->get_detail($content['category_id'], 'category_id', 'igc_package_category');
                                ?>
                                <h1 class="section-title">More in <?php echo $CatName['category_name']; ?></h1>
                                <div class="row">
                                    <?php
                                    foreach ($related_content as $rows) {
                                        $related_path = 'uploads/content/';
                                        ?>
                                        <div class="col-md-6">
                                            <div class="post medium-post">
                                                <div class="entry-header">
                                                    <div class="entry-thumbnail">
                                                        <a href="<?php echo site_url('content/'.$rows['content_url']);?>">
                                                            <img class="img-responsive" src="<?php echo $related_path.$rows['featured_img']; ?>" alt="" />
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="post-content">
                                                    <div class="entry-meta">
                                                        <ul class="list-inline">
                                                            <li class="publish-date"><a href="<?php echo site_url('content/'.$rows['content_url']);?>"><i class="fa fa-clock-o"></i> <?php echo date_converter($rows['created']);?> </a></li>

                                                        </ul>
                                                    </div>
                                                    <h2 class="entry-title">
                                                        <a href="<?php echo site_url('content/'.$rows['content_url']);?>"><?php echo $rows['content_page_title']; ?></a>
                                                    </h2>
                                                </div>
                                            </div><!--/post-->

                                        </div>
                                        <?php
                                    }
                                    ?>



                                </div>
                            </div><!--/.section -->
                        </div>
                    </div>
                </div><!--/.col-sm-9 -->

                <div class="col-sm-3">
                    <div id="sitebar">


                        <div class="widget follow-us">
                            <h1 class="section-title title">Follow Us</h1>
                            <ul class="list-inline social-icons">
                                <li><a href="<?php echo $settings['facebook_link']; ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="<?php echo $settings['twiter_link']; ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="<?php echo $settings['google_plus_link']; ?>" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="<?php echo $settings['linked_in']; ?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="<?php echo $settings['youtube_link']; ?>" target="_blank"><i class="fa fa-youtube"></i></a></li>
                            </ul>
                        </div><!--/#widget-->

                        <div class="widget">
                            <h1 class="section-title title">This is Rising!</h1>
                            <ul class="post-list">
                                <?php
                                $NsCat = $this->db->query("SELECT * FROM igc_package_category WHERE publish_status ='1' AND delete_status ='0' AND show_front = '0'");
                                $NsCats = $NsCat->result_array();
                                ?>
                                <?php

                                foreach ($NsCats as $rows) {
                                    $pack_path = 'uploads/package_category/';
                                    ?>
                                    <li>
                                        <div class="post small-post">
                                            <div class="entry-header">
                                                <div class="entry-thumbnail">
                                                    <img class="img-responsive" src="<?php echo $pack_path.$rows['featured_img']; ?>" alt="" />
                                                </div>
                                            </div>
                                            <div class="post-content">
                                                <div class="video-catagory"><a href="<?php echo  site_url('category/article/'.$rows['category_url']);?>"><?php echo $rows['category_name']; ?></a></div>
                                                <h2 class="entry-title">
                                                    <a href="<?php echo  site_url('category/article/'.$rows['category_url']);?>"><?php echo $rows['description']; ?></a>
                                                </h2>
                                            </div>
                                        </div><!--/post-->
                                    </li>

                                    <?php

                                }

                                ?>


                            </ul>
                        </div><!--/#widget-->
                    </div><!--/#sitebar-->
                </div>
            </div>
        </div><!--/.section-->
    </div><!--/.container-->


<?php
}


?>




<style>
    
    .thumbnail {
        min-height: 238px;
    position:relative;
    overflow:hidden;
}
 .caption h4 { font-weight: bold; }
.caption {
    position:absolute;
    top:-100%;
    right:0;
    background:#d42f38;
    width:100%;
    height:100%;
    padding:2%;
    text-align:center;
    color:#fff !important;
    z-index:2;
    -webkit-transition: all 0.5s ease-in-out;
    -moz-transition: all 0.5s ease-in-out;
    -o-transition: all 0.5s ease-in-out;
    -ms-transition: all 0.5s ease-in-out;
    transition: all 0.5s ease-in-out;
}
.thumbnail:hover .caption {
    top:0%;
}
</style>




<script>
    $.validate();
</script>

<script>
    $.ajax({
        type: "POST",
        url: '<?php echo base_url() ?>index.php/content/captcha',
        dataType: "html",

        //data: postData, // appears as $_GET['id'] @ your backend side
        success: function(data) {

            $('.content_captcha_img').html(data);

        }

    });

    $('#content_captcha_refresh').click(function(){
        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>index.php/content/captcha',
            dataType: "html",

            //data: postData, // appears as $_GET['id'] @ your backend side
            success: function(data) {

                $('.content_captcha_img').html(data);

            }

        });
    });
</script>