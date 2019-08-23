<?php
$settings = $this->site_settings_model->get_site_settings();
?>

<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.11&appId=230129584118478';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<nav class="navbar  navbar-fixed-top amritclass" id="sidebar-wrapper" role="navigation">
    <ul class="mcd-menu">
        <li>
            <a href="#!home"  class="active">

                <strong>Home</strong>

            </a>
        </li>

        <li>
            <a href="">

                <strong>Our Solutions</strong>

            </a>
            <ul>
                <?php
                $parents =  $this->crud_model->get_parent_oursolutions_menu();
                if(!empty($parents))
                {

                    $i= 1;


                    foreach ($parents as $parent)
                    {
                        //$md= ($i=="5")?"3":"2";
                        ?>

                        <li><a  href="#"><?php echo $parent['content_page_title'];?></a></li>
                        <?php
                        $child_menu =  $this->crud_model->get_parent_footer_sub_menu($parent['content_id']);
                        if(! empty($child_menu))
                        {
                            foreach ($child_menu as $child) {

                                $active =  (isset($menu) && $menu== $child['content_url'])?"active":"";

                                ?>
                                <li >
                                    <?php
                                    if($child['content_page_title'] == "Home")
                                    {
                                        ?>
                                        <a href="<?php echo  site_url('home');?>">
                                            <?php echo $child['content_page_title'];?>
                                        </a>
                                        <?php
                                    }
                                    else
                                    {
                                        ?>
                                        <a href="<?php echo  site_url('content/'.$child['content_url']);?>">
                                            <?php echo $child['content_page_title'];?>
                                        </a>
                                        <?php
                                    }
                                    ?>

                                </li>
                                <?php
                            }
                        }
                        ?>




                        <?php
                        $i++;
                    }
                }
                ?>






                <li>
                    <a href="#">Consultant</a>
                    <ul>
                        <li><a href="#">Construction</a></li>

                        <li><a href="#">Human Resource</a></li>
                    </ul>
                </li>

            </ul>
        </li>
        <li>
            <a href="">

                <strong>Technologies</strong>

            </a>
            <ul>
                <li><a href="<?php echo base_url(); ?>content/iot">IoT</a></li>
                <li><a href="<?php echo base_url(); ?>content/big-data">Big Data</a></li>

                <li><a href="<?php echo base_url(); ?>content/cloud">Cloud</a></li>
                <li><a href="<?php echo base_url(); ?>content/cyber-security">Cyber Security </a></li>
            </ul>
        </li>
        <li>
            <a href="">

                <strong>Explore Finaxis</strong>

            </a>
            <ul>
                <li><a href="<?php echo base_url(); ?>content/about-us">About Us </a></li>

                <li><a href="<?php echo base_url(); ?>content/message-from-ceo">Message from CEO</a></li>

                <li><a href="<?php echo base_url('blog'); ?>">Blog</a></li>
                <li><a href="<?php echo base_url('testimonials'); ?>">Testimonials</a></li>
            </ul>
        </li>
        <li>
            <a href="<?php echo base_url('jobs'); ?>">

                <strong>Career</strong>

            </a>
        </li>


    </ul>

</nav>




<!--  site loading -->
<div class="pageFade bg_white" >  </div>

<div class="header menuType2 mini_menu mini noborder bgHalfTransparent showHide_content menuOpen" >
    <div class="container-fluid removePadding">
        <div class="row-fluid">
            <!-- Place your logo here -->
            <div class="logo-sm" >
                <a href="<?php echo base_url(); ?>">
                    <?php

                    $logo = $this->db->query("SELECT * FROM igc_pictures WHERE locate ='1' AND delete_status ='0'");
                    $logors = $logo->result_array();



                    ?>
                    <?php
                    foreach($logors  as $logos ){

                        ?>


                        <?php
                        $path = 'uploads/pictures/';
                        if (file_exists($path.$logos['pictures_image']) && $logos['pictures_image'] !="")
                        {
                            ?>
                            <img src="<?php echo base_url().$path.$logos['pictures_image'];?>" class="img-responsive" alt="logo">

                            <?php
                        }

                        ?>

                        <?php
                    }
                    ?>
                </a>
            </div>
            <div class="menu">
                <nav id="ddmenu">
                    <div class="menu-icon"></div>
                    <ul class="resp">
                        <div class="logo" >
                            <a href="<?php echo base_url(); ?>">
                                <?php
                                foreach($logors  as $logos ){

                                    ?>


                                    <?php
                                    $path = 'uploads/pictures/';
                                    if (file_exists($path.$logos['pictures_image']) && $logos['pictures_image'] !="")
                                    {
                                        ?>
                                        <img src="<?php echo base_url().$path.$logos['pictures_image'];?>" class="img-responsive" alt="logo">

                                        <?php
                                    }

                                    ?>

                                    <?php
                                }
                                ?>
                            </a>
                        </div>
                        <li><?php echo (isset($settings['site_slogan']) && $settings['site_slogan'] !="")? $settings['site_slogan']:"";?></li>


                        <li class="no-sub pull-right">
                            <a href="mailto:info@finaxis.net?Subject=Finaxis%20Management" class="top-heading"><i class="fa fa-envelope"></i> info@finaxis.net </a>
                        </li>
                        <li class="no-sub pull-right">
                            <a href="tel: +971 551302629" class="top-heading"> <i class="fa fa-phone"></i> +971 551302629 </a>
                        </li>

                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>


