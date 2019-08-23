<?php
$settings = $this->site_settings_model->get_site_settings();
?>

<!DOCTYPE HTML>
<!-- BEGIN html -->
<html lang = "en">
    <!-- BEGIN head -->
    
<!-- Mirrored from www.orange-themes.net/demo/benavente/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 Sep 2018 10:37:00 GMT -->
<head>
       

        <!-- Meta Tags -->
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="description" content="" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<meta name="title" content="<?php echo strip_tags((isset($meta_title) && $meta_title !="")? $meta_title: $settings['meta_title']) ;?>">
    <meta name="description" content="<?php echo strip_tags((isset($meta_description) && $meta_description !="")? $meta_description:$settings['meta_description'] );?>">
    <meta name="keywords" content="<?php echo strip_tags((isset($meta_keywords) && $meta_keywords !="")? $meta_keywords:$settings['meta_keywords']) ;?>">
    <title><?php echo strip_tags((isset($meta_title) && $meta_title !="")? $meta_title:$settings['meta_title']);?></title>
    <meta property="og:url"           content="<?php echo base_url();?><?php echo (isset($og_url) && $og_url !="") ? $og_url:"" ;?>"/>
    <meta property="og:type"          content="article" />
    <meta property="og:title"         content="<?php echo strip_tags((isset($og_title) && $og_title !="") ? $og_title:"") ;?>" />
    <meta property="og:description"   content="<?php echo strip_tags((isset($og_description) && $og_description !="") ? $og_description:"") ;?>" />
    <meta property="og:image"         content="<?php echo base_url();?><?php echo (isset($og_image) && $og_image !="") ? $og_image:"" ;?>" />
    <!-- PAGE TITLE -->
    <title><?php echo strip_tags((isset($meta_title) && $meta_title !="")? $meta_title:$settings['meta_title']);?></title>
    <base href="<?php echo base_url() ?>" />
        <!-- Favicon -->
        <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon" />

        <!-- Stylesheets -->
        <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Material+Icons%7CRoboto:400,500,700&amp;subset=latin,latin-ext" />
        <link type="text/css" rel="stylesheet" href="themes/css/reset.min.css" />
        <link type="text/css" rel="stylesheet" href="themes/css/material.min.css" />
        <link type="text/css" rel="stylesheet" href="themes/css/font-awesome.min.css" />
        <link type="text/css" rel="stylesheet" href="themes/css/owl.carousel.min.css" />
        <link type="text/css" rel="stylesheet" href="themes/css/shortcodes.min.css" />
        <link type="text/css" rel="stylesheet" href="themes/css/main-stylesheet.min.css" />
        <link type="text/css" rel="stylesheet" href="themes/css/otgrid.min.css" />
        <link type="text/css" rel="stylesheet" href="themes/css/custom-styles.min.css" />
        <link type="text/css" rel="stylesheet" href="themes/css/ot-lightbox.min.css" />
        <link type="text/css" rel="stylesheet" href="themes/css/styling.min.css" />
        <link type="text/css" rel="stylesheet" href="themes/css/responsive.min.css" />
        <link type="text/css" rel="stylesheet" href="themes/css/style.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


        


        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!--[if lte IE 8]>
        <link type="text/css" rel="stylesheet" href="css/ie-ancient.min.css" />
        <![endif]-->

        <!-- Demo Only -->
        <link type="text/css" rel="stylesheet" href="themes/css/_ot-demo.min.css" />


    <!-- END head -->

    </head>

    <!-- BEGIN body -->
<!--    <body class="ot_debug">-->
    <body class="ot-menu-will-follow">
<div class="ot-responsive-menu-content-c-header"><a href="#" id="ot-menu-burger-2" class="ot-responsive-menu-header-burger"></a>
</div>
<div class="ot-responsive-menu-content">
  <div class="ot-responsive-menu-content-inner has-search">
    <form action="<?php echo site_url('all_news/search') ?>" method="post">
      <input type="text" name="search" placeholder="Search" />
      <input type="submit" value="">
    </form>
    <ul id="responsive-menu-holder"></ul>
  </div>
</div>

        <div class="hentry">
            <span class="entry-title" style="display: none;">Home</span>
            <span class="vcard" style="display: none;">
                <span class="fn"><a href="#" title="Posts by admin" rel="author">Sanghars Giri</a></span>
            </span>
            <span class="updated" style="display:none;">2016-04-18T08:17:28+00:00</span>
        </div>

        <!-- BEGIN #boxed -->
        <div id="boxed">
            
            <header id="header-benavente">
            
                <div id="header-top-block">
                    <!-- <div class="wrapper menus">
                        <nav class="left">
                            <ul>
                                <li><a href="<?php echo base_url(); ?>">Homepage</a></li>
                                <?php
                       $parents =  $this->crud_model->get_parent_category_menu();



                       if(!empty($parents))
                       {
                           $i= 1;


                           foreach ($parents as $parent)
                           {
                               //$md= ($i=="5")?"3":"2";
                               ?>

                       <li class="business dropdown">

                           <a href="<?php echo base_url('category/article/'.$parent['category_url']); ?>" ><?php echo $parent['category_name']; ?></a>

                           <?php
                           $child_menu =  $this->crud_model->get_parent_category_sub_menu($parent['category_id']); 
                           if(! empty($child_menu))
                           {
                           ?>

                               <ul class="dropdown-menu">
                               <?php
                               foreach ($child_menu as $child) {

                                   $active = (isset($menu) && $menu == $child['category_url']) ? "active" : "";

                                   ?>

                                   <?php
                                   if ($child['category_name'] == "Home") {
                                       ?>
                                       <li>
                                       <a href="<?php echo site_url('home'); ?>">
                                           <?php echo $child['category_name']; ?>
                                       </a>
                                       </li>
                                       <?php
                                   } else {
                                       ?>
                                       <li>
                                           <a href="../uploads/news/">
                                               <?php echo $child['category_name']; ?>
                                           </a>
                                       </li>

                                       <?php
                                   }
                                   }
                                   ?>

                                   </ul>

                               <?php


                           }
                           ?>

                       </li>

                               <?php
                               $i++;
                           }
                       }
                       ?> -->
                                <!-- <li><a href="/am/pages/contact">Contact us</a></li> -->
                            <!-- </ul>
                        </nav> -->
                        
                        <!-- <nav class="right header-socials-top">
                            <ul>
                                <li><a href="<?php echo strip_tags((isset($facebook_link) && $facebook_link !="")? $facebook_link:$settings['facebook_link']);?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="<?php echo strip_tags((isset($twiter_link) && $twiter_link !="")? $twiter_link:$settings['twiter_link']);?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="<?php echo strip_tags((isset($google_plus_link) && $google_plus_link !="")? $google_plus_link:$settings['google_plus_link']);?>" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="<?php echo strip_tags((isset($youtube_link) && $youtube_link !="")? $youtube_link:$settings['youtube_link']);?>" target="_blank"><i class="fa fa-youtube"></i></a></li>
                                <li><a href="<?php echo strip_tags((isset($linked_in) && $linked_in !="")? $linked_in:$settings['linked_in']);?>" target="_blank"><i class="fa fa-linkedin"></i></a></li> -->
                                <!-- <li><a href="<?php echo strip_tags((isset($google_plus_link) && $google_plus_link !="")? $google_plus_link:$settings['google_plus_link']);?>" target="_blank"><i class="fa fa-rss"></i></a></li> -->
                            <!-- </ul>
                        </nav>
                    </div> -->
                </div>
                
                <div class="container">
                    <div class="header-blocks">
                    
                        <div class="header-blocks-logo">
                            <!--<h1 id="header-logo-text"><a href="index.html">Benavente</a></h1>-->
                            <a><?php

                   $logo1 = $this->db->query("SELECT * FROM igc_pictures WHERE locate = '1' AND delete_status ='0'");
                   $logos1 = $logo1->result_array();

                   ?>

                       <?php
                        $path = 'uploads/pictures/';
                       foreach ($logos1 as $key => $value) {
                           ?>

                              <a href="<?php echo base_url(); ?>"><img  src="<?php echo base_url('/uploads/pictures/'.$value['pictures_image']); ?>"  alt="logo" class="img-responsive"/></a>
                           <?php
                       }
?></a>
                        </div>
                        
                        <div class="header-blocks-aspace">
                            <a><?php

                   $Ads1 = $this->db->query("SELECT * FROM igc_ads WHERE location = 'header-side' AND status ='Active'");
                   $Adss1 = $Ads1->result_array();

                   ?>

                       <?php
                       $path = 'uploads/ads/';
                       foreach ($Adss1 as $key => $value) {
                           ?>

<a href="<?php echo $value['ads_url'] ?>" target="_blank"><img  src="<?php echo $path.$value['featured_img'];?>"  alt="<?php echo $value['ads_name']; ?>" class="img-responsive"/></a>
                           <?php
                       }
?></a>
                        </div>
                        
                    </div>
                </div>

                    
                <div class="main-menu-placeholder">
                    <div class="container">
                        <nav id="main-menu" class="otm otm-follow">
                            <ul class="load-responsive nav nav-navbar" id="nav">
                                <li class="active"><a href="<?php echo base_url(); ?>">Home</a></li>
                             
                               <?php
                       $parents =  $this->crud_model->get_parent_category_menu();



                       if(!empty($parents))
                       {
                           $i= 1;


                           foreach ($parents as $parent)
                           {
                               //$md= ($i=="5")?"3":"2";
                               ?>

                       <li class="business dropdown">

                           <a href="<?php echo base_url('category/article/'.$parent['category_url']); ?>" ><?php echo $parent['category_name']; ?></a>

                           <?php
                           $child_menu =  $this->crud_model->get_parent_category_sub_menu($parent['category_id']); 
                           if(! empty($child_menu))
                           {
                           ?>

                               <ul class="dropdown-menu">
                               <?php
                               foreach ($child_menu as $child) {

                                   $active = (isset($menu) && $menu == $child['category_url']) ? "active" : "";

                                   ?>

                                   <?php
                                   if ($child['category_name'] == "Home") {
                                       ?>
                                       <li>
                                       <a href="<?php echo site_url('home'); ?>">
                                           <?php echo $child['category_name']; ?>
                                       </a>
                                       </li>
                                       <?php
                                   } else {
                                       ?>
                                       <li>
                                           <a href="../uploads/news/">
                                               <?php echo $child['category_name']; ?>
                                           </a>
                                       </li>

                                       <?php
                                   }
                                   }
                                   ?>

                                   </ul>

                               <?php


                           }
                           ?>

                       </li>

                               <?php
                               $i++;
                           }
                       }
                       ?>
                       <li><a href="pages/contact">Contact us</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </header>
            <script type="text/javascript">
   $(document).ready(function () {
       var url = window.location;
       $("#nav li").removeClass("active"); //Remove any previously "active" li
       $('ul.nav a[href="'+ url +'"]').parent().addClass('active');
       $('ul.nav a').filter(function() {
            return this.href == url;
       }).parent().addClass('active');
   });
</script>


            <!-- http://localhost/phpmyadmin/sql.php?db=nucicom_db&table=igc_content -->