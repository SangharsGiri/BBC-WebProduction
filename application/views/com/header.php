<?php
$settings = $this->site_settings_model->get_site_settings();
?>

<!DOCTYPE html>

<html lang="en">

<head>

    <!-- Basic Page Needs
  ================================================== -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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


    <!-- Mobile Specific Metas
  ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- CSS
  ================================================== -->

    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->


    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>templates/images/favicon.png">
    <!-- Included CSS files
	================================================== -->

    <link rel="stylesheet" type="text/css"  href="<?php echo base_url(); ?>templates/css/bootstrap.css">
    <link rel="stylesheet" type="text/css"  href="<?php echo base_url(); ?>templates/css/bootstrap-responsive.css">
    <link rel="stylesheet" type="text/css"  href="<?php echo base_url(); ?>templates/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css"  href="<?php echo base_url(); ?>templates/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css"  href="<?php echo base_url(); ?>templates/css/picons.css">
    <link rel="stylesheet" type="text/css"  href="<?php echo base_url(); ?>templates/css/animate.css">
    <link rel="stylesheet" type="text/css"  href="<?php echo base_url(); ?>templates/css/main.min.css">
    <link rel="stylesheet" type="text/css"  href="<?php echo base_url(); ?>templates/css/style.min.css">
    <link rel="stylesheet" type="text/css"  href="<?php echo base_url(); ?>templates/css/base.min.css">
    <link rel="stylesheet" type="text/css"  href="<?php echo base_url(); ?>templates/css/font-style1.css" id="set_font" >
    <link rel="stylesheet" type="text/css"  href="<?php echo base_url(); ?>templates/css/color-night.css" id="set_color">
    <link rel="stylesheet" type="text/css"  href="<?php echo base_url(); ?>templates/css/elastislide.css">
    <link rel="stylesheet" type="text/css"  href="<?php echo base_url(); ?>templates/css/jquery.mCustomScrollbar.css" />
    <link rel="stylesheet" type="text/css"  href="<?php echo base_url(); ?>templates/css/bigvideo.css">
    <link rel="stylesheet" type="text/css"  href="<?php echo base_url(); ?>templates/css/magnific-popup.css" media="screen" />
    <link rel="stylesheet" type="text/css"  href="<?php echo base_url(); ?>templates/css/flexslider.min.css" media="screen" />
    <link rel="stylesheet" type="text/css"  href="<?php echo base_url(); ?>templates/css/supersized.min.css" media="screen" />
    <link rel="stylesheet" type="text/css"  href="<?php echo base_url(); ?>templates/css/supersized.shutter.min.css" media="screen" />

    <link rel="stylesheet" type="text/css"  href="<?php echo base_url(); ?>templates/css/custom.css" media="screen" />

    <!-- REVOLUTION BANNER CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>templates/rs-plugin/css/style.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>templates/rs-plugin/css/extralayers.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>templates/rs-plugin/css/settings.css" media="screen" />

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->



    <script type="text/javascript" src="<?php echo base_url(); ?>templates/js/modernizr.min.js"></script>
</head>


<body class="white_ver high_mobile_performance" >
<!--  loading Objects -->
<div class="loading_objects">
    <div class="loading_2x">
        <div class="track"></div>
        <div class="ball"></div>
        <div class="text"></div>
    </div>

    <div class="loading_x">
        <div class="track"></div>
        <div class="ball"></div>
    </div>
</div>


<!-- Contact form fixed -->
<?php

$this->load->view('side_contact_form');

?>

<!-- Social fixed -->
<?php

$this->load->view('social');

?>

<?php

$this->load->view('navigation');

?>
<div class="preloadimages_inline">
    <img alt="image_alt_text" class="preload cssBackground" src="<?php echo base_url(); ?>templates/images/0.png" data-src="<?php echo base_url(); ?>templates/images/sprite.png" data-src-2x="<?php echo base_url(); ?>templates/images/sprite@2x.png">
    <img alt="image_alt_text" class="preload" src="<?php echo base_url(); ?>templates/images/0.png" data-src="<?php echo base_url(); ?>templates/images/home_slider/home_slide_image5.jpg" data-src-small="<?php echo base_url(); ?>templates/images/home_slider/home_slide_image5_s.jpg">
</div>



