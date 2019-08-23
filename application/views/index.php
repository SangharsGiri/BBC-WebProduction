
            <main id="content">
                
                <!-- BEGIN .huge-slider -->
                <div class="container">
                                <div class="ot-do-large-space">
                                    <a><?php

                   $Ads1 = $this->db->query("SELECT * FROM igc_ads WHERE location = 'index-top' AND status ='Active'");
                   $Adss1 = $Ads1->result_array();

                   ?>

                       <?php
                       $path = 'uploads/ads/';
                       foreach ($Adss1 as $key => $value) {
                           ?>

<a href="<?php echo $value['ads_url'] ?>" target="_blank"><img  src="<?php echo $path.$value['featured_img'];?>"  alt="<?php echo $value['ads_name']; ?>" class="ads-image"/></a>
                           <?php
                       }
?></a>
                                </div>
                            </div>
<div class="container">
                    <div class="ot-block-article-slider otg otg-items-1 breaking_news">
                    <div class="ot-content-block ot-featured-author-block" id="media">
                        <?php foreach($active_breaking_news as $row) { ?> 
                            <h3 class="h3-breaking"><a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>"><?php echo $row['content_title']; ?></a></h3>


                                <?php
                               if (!empty($row['youtube_link'])){
                                   ?>
                                   <div class="otg-item item slidersss">
                                   <iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?php echo base_url('news/detail/'.$row['youtube_link']) ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                               <?php }
                               elseif (!empty($row['server_image'])) {
                                ?>

                                          <div class="otg-item item slidersss">
                                   <a href="<?php echo base_url('news/detail/'.$row['content_id']) ?>">
                                       <img src="<?php echo $row['server_image'];?>" />
                                   </a>
                                
                               
                               <?php }
                               else{
                                   ?>
                                   <div class="otg-item item slidersss">
                                   <a href="<?php echo base_url('news/detail/'.$row['content_id']) ?>">
                                       <img src="<?php echo base_url('uploads/pictures/banner.jpg') ?>" class="img-responsive"/>
                                   </a>
                               <?php } ?>
                                     <?php
                           $string = $row['content_body'];;
                           $string = word_limiter($string, 20);
                           ?>
                                    <span class="wordsss">
                                           
                           <?php echo $string;?>
                                        </span>
                                
                        </div>  
                        <?php }  ?>   
                    </div>

                <!-- END .wrapper -->
                </div>
                <div class="huge-slider">
                     <?php
                                       
                                        foreach($blogs as $blog)
                                        {
                                            ?>
                    <?php
                               if (!empty($blog['youtube_link'])){
                                   ?>
                                    <div class="huge-slider-frame">
                                        <a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>" class="hude-slider-image">
                                            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?php echo base_url('news/detail/'.$blog['youtube_link']) ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                                    <img src="" width="200" height="100">
                                                <span class="huge-slider-content ttxts">
                                                    <strong><?php echo $blog['content_title'];?></strong>
                                                    <span class="meta-items">
                                                    </span>
                                                </span>
                                        </a>
                                    </div>
                               <?php }
                               elseif (!empty($blog['server_image'])) {
                                ?>

                                          <div class="huge-slider-frame">
                                        <a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>" class="hude-slider-image">
                                            <?php
                                                                    $base = base_url();
                                                                    $path = $base.'/uploads/content/';
                                                                    ?>
                                                                    <img src="" width="200" height="100">
                                            <span class="huge-slider-image-block" style="background-image: url(<?php echo $blog['server_image'];?>)">
                                                <span class="huge-slider-content ttxts">
                                                    <strong><?php echo $blog['content_title'];?></strong>
                                                    <span class="meta-items">
                                                    </span>
                                                </span>
                                            </span>
                                        </a>
                                    </div> 
                                
                               
                               <?php }
                               else{
                                   ?>
                                   <div class="huge-slider-frame">
                                        <a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>" class="hude-slider-image">
                                            <?php
                                                                    $base = base_url();
                                                                    $path = $base.'/uploads/content/';
                                                                    ?>
                                                                    <img src="" width="200" height="100">
                                            <span class="huge-slider-image-block" style="background-image: url(<?php echo base_url('uploads/pictures/banner.jpg') ?>)">
                                                <span class="huge-slider-content ttxts">
                                                    <strong><?php echo $blog['content_title'];?></strong>
                                                    <span class="meta-items">
                                                    </span>
                                                </span>
                                            </span>
                                        </a>
                                    </div> 
                               <?php } ?>
                    <?php
                                        }
                                        ?>
                
                                        <?php
                                       
                                        foreach($blogs_offset1 as $blog)
                                        {
                                            ?>
                    <?php
                               if (!empty($blog['youtube_link'])){
                                   ?>
                                    <div class="huge-slider-frame">
                                        <a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>" class="hude-slider-image">
                                            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?php echo base_url('news/detail/'.$blog['youtube_link']) ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                                    <img src="" width="200" height="100">
                                                <span class="huge-slider-content ttxts">
                                                    <strong><?php echo $blog['content_title'];?></strong>
                                                    <span class="meta-items">
                                                    </span>
                                                </span>
                                        </a>
                                    </div>
                               <?php }
                               elseif (!empty($blog['server_image'])) {
                                ?>

                                          <div class="huge-slider-frame">
                                        <a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>" class="hude-slider-image">
                                            <?php
                                                                    $base = base_url();
                                                                    $path = $base.'/uploads/content/';
                                                                    ?>
                                                                    <img src="" width="200" height="100">
                                            <span class="huge-slider-image-block" style="background-image: url(<?php echo $blog['server_image'];?>)">
                                                <span class="huge-slider-content ttxts">
                                                    <strong><?php echo $blog['content_title'];?></strong>
                                                    <span class="meta-items">
                                                    </span>
                                                </span>
                                            </span>
                                        </a>
                                    </div> 
                                
                               
                               <?php }
                               else{
                                   ?>
                                   <div class="huge-slider-frame">
                                        <a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>" class="hude-slider-image">
                                            <?php
                                                                    $base = base_url();
                                                                    $path = $base.'/uploads/content/';
                                                                    ?>
                                                                    <img src="" width="200" height="100">
                                            <span class="huge-slider-image-block" style="background-image: url(<?php echo base_url('uploads/pictures/banner.jpg') ?>)">
                                                <span class="huge-slider-content ttxts">
                                                    <strong><?php echo $blog['content_title'];?></strong>
                                                    <span class="meta-items">
                                                    </span>
                                                </span>
                                            </span>
                                        </a>
                                    </div> 
                               <?php } ?>
                    <?php
                                        }
                                        ?>
                                         <?php

                                        foreach($blogs_offset2 as $blog)
                                        {
                                            ?>
                    <?php
                               if (!empty($blog['youtube_link'])){
                                   ?>
                                    <div class="huge-slider-frame">
                                        <a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>" class="hude-slider-image">
                                            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?php echo base_url('news/detail/'.$blog['youtube_link']) ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                                    <img src="" width="200" height="100">
                                                <span class="huge-slider-content ttxts">
                                                    <strong><?php echo $blog['content_title'];?></strong>
                                                    <span class="meta-items">
                                                    </span>
                                                </span>
                                        </a>
                                    </div>
                               <?php }
                               elseif (!empty($blog['server_image'])) {
                                ?>

                                          <div class="huge-slider-frame">
                                        <a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>" class="hude-slider-image">
                                            <?php
                                                                    $base = base_url();
                                                                    $path = $base.'/uploads/content/';
                                                                    ?>
                                                                    <img src="" width="200" height="100">
                                            <span class="huge-slider-image-block" style="background-image: url(<?php echo $blog['server_image'];?>)">
                                                <span class="huge-slider-content ttxts">
                                                    <strong><?php echo $blog['content_title'];?></strong>
                                                    <span class="meta-items">
                                                    </span>
                                                </span>
                                            </span>
                                        </a>
                                    </div> 
                                
                               
                               <?php }
                               else{
                                   ?>
                                   <div class="huge-slider-frame">
                                        <a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>" class="hude-slider-image">
                                            <?php
                                                                    $base = base_url();
                                                                    $path = $base.'/uploads/content/';
                                                                    ?>
                                                                    <img src="" width="200" height="100">
                                            <span class="huge-slider-image-block" style="background-image: url(<?php echo base_url('uploads/pictures/banner.jpg') ?>)">
                                                <span class="huge-slider-content ttxts">
                                                    <strong><?php echo $blog['content_title'];?></strong>
                                                    <span class="meta-items">
                                                    </span>
                                                </span>
                                            </span>
                                        </a>
                                    </div> 
                               <?php } ?>
                    <?php
                                        }
                                        ?>
                                        <?php
                                       
                                        foreach($blogs_offset3 as $blog)
                                        {
                                            ?>
                    
                    <?php
                               if (!empty($blog['youtube_link'])){
                                   ?>
                                    <div class="huge-slider-frame">
                                        <a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>" class="hude-slider-image">
                                            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?php echo base_url('news/detail/'.$blog['youtube_link']) ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                                    <img src="" width="200" height="100">
                                                <span class="huge-slider-content ttxts">
                                                    <strong><?php echo $blog['content_title'];?></strong>
                                                    <span class="meta-items">
                                                    </span>
                                                </span>
                                        </a>
                                    </div>
                               <?php }
                               elseif (!empty($blog['server_image'])) {
                                ?>

                                          <div class="huge-slider-frame">
                                        <a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>" class="hude-slider-image">
                                            <?php
                                                                    $base = base_url();
                                                                    $path = $base.'/uploads/content/';
                                                                    ?>
                                                                    <img src="" width="200" height="100">
                                            <span class="huge-slider-image-block" style="background-image: url(<?php echo $blog['server_image'];?>)">
                                                <span class="huge-slider-content ttxts">
                                                    <strong><?php echo $blog['content_title'];?></strong>
                                                    <span class="meta-items">
                                                    </span>
                                                </span>
                                            </span>
                                        </a>
                                    </div> 
                                
                               
                               <?php }
                               else{
                                   ?>
                                   <div class="huge-slider-frame">
                                        <a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>" class="hude-slider-image">
                                            <?php
                                                                    $base = base_url();
                                                                    $path = $base.'/uploads/content/';
                                                                    ?>
                                                                    <img src="" width="200" height="100">
                                            <span class="huge-slider-image-block" style="background-image: url(<?php echo base_url('uploads/pictures/banner.jpg') ?>)">
                                                <span class="huge-slider-content ttxts">
                                                    <strong><?php echo $blog['content_title'];?></strong>
                                                    <span class="meta-items">
                                                    </span>
                                                </span>
                                            </span>
                                        </a>
                                    </div> 
                               <?php } ?>
                    <?php
                                        }
                                        ?>

                <!-- END .huge-slider -->
                </div>
                
                <!-- BEGIN .wrapper -->
                <div class="wrapper">
                    
                    <div class="ot-content-with-sidebar-right">
                        
                        <div class="ot-main-page-content">
                            
                            <div class="ot-title-block">
                                <h2>Entertainment</h2>
                              <!--   <div class="ot-title-selector">
                                    <a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>" data-ot-tab="all" class="active">All</a>
                                    <a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>" data-ot-tab="style">Style hunter</a>
                                    <a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>" data-ot-tab="vogue">Vogue</a>
                                    <a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>" data-ot-tab="health">Health &amp; Fitness</a>
                                    <span class="ot-title-selector-drop">
                                        <a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>">More<i class="material-icons">arrow_drop_down</i></a>
                                        <span>
                                            <a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>" data-ot-tab="finance">Finance</a>
                                            <a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>" data-ot-tab="marketing">Marketing</a>
                                            <a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>" data-ot-tab="sports">Sports</a>
                                        </span>
                                    </span>
                                </div> -->
                            </div>
                            
                            <div class="ot-content-block ot-content-tabs">
                            
                                <div data-ot-tab="all" class="ot-content-tab active">
                                    <div class="otg otg-items-2 otg-h-30 otg-v-30">
                                           <?php
                                       
                                        foreach($shortcodes as $shortcode)
                                        {
                                            ?>
                                        <div class="otg-item">
                                            <div class="ot-articles-material-blog-list">

                                                <div class="item item-vertical">

                                                    <?php
                               if (!empty($shortcode['youtube_link'])){
                                   ?>
                                   <div class="item-header">
                                                        <a href="<?php echo base_url('/news/detail/'.$shortcode['content_id']) ?>" class="item-header-image">
                                                        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?php echo base_url('news/detail/'.$shortcode['youtube_link']) ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                        </a>
                                                    </div> 
                               <?php }
                               elseif (!empty($shortcode['server_image'])) {
                                ?>


                                    <div class="item-header">
                                                        <a href="<?php echo base_url('/news/detail/'.$shortcode['content_id']) ?>" class="item-header-image">
                                                        <img src="<?php echo $shortcode['server_image'];?>" alt="">
                                                        </a>
                                                    </div> 
                                
                               
                               <?php }
                               else{
                                   ?> 
                                    <div class="item-header">
                                                        <a href="<?php echo base_url('/news/detail/'.$shortcode['content_id']) ?>" class="item-header-image">
                                                        <img src="<?php echo base_url('uploads/pictures/banner.jpg') ?>" alt="">
                                                        </a>
                                                    </div>
                               <?php } ?>
                                                <div class="item-content">
                                                        <h2><a href="<?php echo base_url('/news/detail/'.$shortcode['content_id']) ?>"><?php echo $shortcode['content_title'];?></a></h2>
                                                        <span class="item-meta">
                                                            <span class="item-meta-item"><i class="material-icons">access_time</i><?php echo $shortcode['created'];?></span>
                                                        </span>
                                                       <?php
                           $string = $shortcode['content_body'];;
                           $string = word_limiter($string, 20);
                           ?>
                           <?php echo $string;?>
                                                    </div>
                                                </div>
                                            
                                            </div>
                                        </div>
                                        <?php
                                        }
                                        ?>
                                        <div class="otg-item">
                                            <div class="ot-articles-blog-list">
                                                <?php
                                       
                                        foreach($shortcodes_offset1 as $shortcode)
                                        {
                                            ?>

                                            <?php
                               if (!empty($shortcode['youtube_link'])){
                                   ?>
                                   <div class="item item-small">
                                                    <div class="item-header">
                                                        <a href="<?php echo base_url('/news/detail/'.$shortcode['content_id']) ?>" class="item-header-image">
                                                        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?php echo base_url('news/detail/'.$shortcode['youtube_link']) ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                        </a>
                                                    </div>
                                                    <div class="item-content">
                                                        <h2><a href="<?php echo base_url('/news/detail/'.$shortcode['content_id']) ?>"><?php echo $shortcode['content_title'];?></a></h2>
                                                    </div>
                                                </div>
                               <?php }
                               elseif (!empty($shortcode['server_image'])) {
                                ?>


                                    <div class="item item-small">
                                                    <div class="item-header">
                                                        <a href="<?php echo base_url('/news/detail/'.$shortcode['content_id']) ?>" class="item-header-image">
                                                        <img src="<?php echo $shortcode['server_image'];?>" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="item-content">
                                                        <h2><a href="<?php echo base_url('/news/detail/'.$shortcode['content_id']) ?>"><?php echo $shortcode['content_title'];?></a></h2>
                                                    </div>
                                                </div>
                               
                               <?php }
                               else{
                                   ?>
                                                    <div class="item item-small">
                                                    <div class="item-header">
                                                        <a href="<?php echo base_url('/news/detail/'.$shortcode['content_id']) ?>" class="item-header-image">
                                                        <img src="<?php echo base_url('uploads/pictures/banner.jpg') ?>" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="item-content">
                                                        <h2><a href="<?php echo base_url('/news/detail/'.$shortcode['content_id']) ?>"><?php echo $shortcode['content_title'];?></a></h2>
                                                    </div>
                                                </div>
                               <?php } ?>

                                                <?php
                                        }
                                        ?>
                                       
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            
                                <div data-ot-tab="style" class="ot-content-tab">
                                    <div class="otg otg-items-2 otg-h-30 otg-v-30">
                                        <div class="otg-item">
                                            <div class="ot-articles-material-blog-list">

                                                <div class="item item-vertical">
                                                    <div class="item-header">
                                                        <a href="<?php echo base_url('/news/detail/'.$shortcode['content_id']) ?>" class="item-header-image"><img src="themes/images/photos/image-20.jpg" alt=""></a>
                                                    </div>
                                                    <div class="item-content">
                                                        <h2><a href="<?php echo base_url('/news/detail/'.$shortcode['content_id']) ?>"> You Spot This Fun Indiana Jones Easter Egg In Star Wars 7: The Force Awakens?</a></h2>
                                                        <span class="item-meta">
                                                            <span class="item-meta-item"><i class="material-icons">access_time</i>January 12, 2015</span>
                                                        </span>
                                                        <p>As far as hammer blows to the cultural brain stem go, the death of David Bowie on January 10 was particularly brutal. One of the very few true icons of popular culture...</p>
                                                    </div>
                                                </div>
                                            
                                            </div>

                                            <div class="ot-articles-blog-list">

                                                <div class="item item-small">
                                                    <div class="item-header">
                                                        <a href="<?php echo base_url('/news/detail/'.$shortcode['content_id']) ?>" class="item-header-image"><img src="themes/images/photos/image-17.jpg" alt=""></a>
                                                    </div>
                                                    <div class="item-content">
                                                        <h2><a href="<?php echo base_url('/news/detail/'.$shortcode['content_id']) ?>">Ut duo detraxit moderatius. No mel erat nobis, in quas praesent vis, option detracto appareat vis ei.</a></h2>
                                                    </div>
                                                </div>

                                                <div class="item item-small">
                                                    <div class="item-header">
                                                        <a href="<?php echo base_url('/news/detail/'.$shortcode['content_id']) ?>" class="item-header-image"><img src="themes/images/photos/image-16.jpg" alt=""></a>
                                                    </div>
                                                    <div class="item-content">
                                                        <h2><a href="<?php echo base_url('/news/detail/'.$shortcode['content_id']) ?>">Did You Spot This Fun Indiana Jones Easter Egg In Star Wars 7: The Force Awakens?</a></h2>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="otg-item">
                                            <div class="ot-articles-material-blog-list">

                                                <div class="item item-vertical">
                                                    <div class="item-header">
                                                        <a href="<?php echo base_url('/news/detail/'.$shortcode['content_id']) ?>" class="item-header-image"><img src="themes/images/photos/image-18.jpg" alt=""></a>
                                                    </div>
                                                    <div class="item-content">
                                                        <h2><a href="<?php echo base_url('/news/detail/'.$shortcode['content_id']) ?>">Did You Spot This Fun Indiana Jones Easter Egg In Star Wars 7: The Force Awakens?</a></h2>
                                                        <span class="item-meta">
                                                            <span class="item-meta-item"><i class="material-icons">access_time</i>January 12, 2015</span>
                                                        </span>
                                                        <p>As far as hammer blows to the cultural brain stem go, the death of David Bowie on January 10 was particularly brutal. One of the very few true icons of popular culture...</p>
                                                    </div>
                                                </div>
                                            
                                            </div>

                                            <div class="ot-articles-blog-list">

                                                <div class="item item-small">
                                                    <div class="item-header">
                                                        <a href="<?php echo base_url('/news/detail/'.$shortcode['content_id']) ?>" class="item-header-image"><img src="themes/images/photos/image-19.jpg" alt=""></a>
                                                    </div>
                                                    <div class="item-content">
                                                        <h2><a href="<?php echo base_url('/news/detail/'.$shortcode['content_id']) ?>">Ut duo detraxit moderatius. No mel erat nobis, in quas praesent vis, option detracto appareat vis ei.</a></h2>
                                                    </div>
                                                </div>

                                                <div class="item item-small">
                                                    <div class="item-header">
                                                        <a href="<?php echo base_url('/news/detail/'.$shortcode['content_id']) ?>" class="item-header-image"><img src="themes/images/photos/image-15.jpg" alt=""></a>
                                                    </div>
                                                    <div class="item-content">
                                                        <h2><a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>">Did You Spot This Fun Indiana Jones Easter Egg In Star Wars 7: The Force Awakens?</a></h2>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                                <div data-ot-tab="vogue" class="ot-content-tab">
                                    <div class="otg otg-items-2 otg-h-30 otg-v-30">
                                        <div class="otg-item">
                                            <div class="ot-articles-material-blog-list">

                                                <div class="item item-vertical">
                                                    <div class="item-header">
                                                        <a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>" class="item-header-image"><img src="themes/images/photos/image-20.jpg" alt=""></a>
                                                    </div>
                                                    <div class="item-content">
                                                        <h2><a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>">Did You Spot This Fun Indiana Jones Easter Egg In Star Wars 7: The Force Awakens?</a></h2>
                                                        <span class="item-meta">
                                                            <span class="item-meta-item"><i class="material-icons">access_time</i>January 12, 2015</span>
                                                            <a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>" class="item-meta-item"><i class="material-icons">chat_bubble_outline</i>35</a>
                                                        </span>
                                                        <p>As far as hammer blows to the cultural brain stem go, the death of David Bowie on January 10 was particularly brutal. One of the very few true icons of popular culture...</p>
                                                    </div>
                                                </div>
                                            
                                            </div>
                                        </div>
                                        <div class="otg-item">
                                            <div class="ot-articles-blog-list">

                                                <div class="item item-small">
                                                    <div class="item-header">
                                                        <a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>" class="item-header-image"><img src="themes/images/photos/image-16.jpg" alt=""></a>
                                                    </div>
                                                    <div class="item-content">
                                                        <h2><a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>">Ut duo detraxit moderatius. No mel erat nobis, in quas praesent vis, option detracto appareat vis ei.</a></h2>
                                                    </div>
                                                </div>

                                                <div class="item item-small">
                                                    <div class="item-header">
                                                        <a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>" class="item-header-image"><img src="themes/images/photos/image-17.jpg" alt=""></a>
                                                    </div>
                                                    <div class="item-content">
                                                        <h2><a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>">Did You Spot This Fun Indiana Jones Easter Egg In Star Wars 7: The Force Awakens?</a></h2>
                                                    </div>
                                                </div>

                                                <div class="item item-small">
                                                    <div class="item-header">
                                                        <a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>" class="item-header-image"><img src="themes/images/photos/image-18.jpg" alt=""></a>
                                                    </div>
                                                    <div class="item-content">
                                                        <h2><a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>">Ut simul tractatos mel, vis choro commune an. No graecis sententiae pro, aliquando his.</a></h2>
                                                    </div>
                                                </div>

                                                <div class="item item-small">
                                                    <div class="item-header">
                                                        <a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>" class="item-header-image"><img src="themes/images/photos/image-19.jpg" alt=""></a>
                                                    </div>
                                                    <div class="item-content">
                                                        <h2><a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>">Et platonem sapientem qualisque mel, mei no movet oporteat platonem. Sea alia.</a></h2>
                                                    </div>
                                                </div>

                                                <div class="item item-small">
                                                    <div class="item-header">
                                                        <a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>" class="item-header-image"><img src="themes/images/photos/image-15.jpg" alt=""></a>
                                                    </div>
                                                    <div class="item-content">
                                                        <h2><a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>">Per eu fuisset senserit interesset, legere scripta sapientem an sed. Cum ea sonet antiopam.</a></h2>
                                                    </div>
                                                </div>
                                            
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            
                                <div data-ot-tab="health" class="ot-content-tab">
                                    <div class="otg otg-items-2 otg-h-30 otg-v-30">
                                        <div class="otg-item">
                                            <div class="ot-articles-material-blog-list">

                                                <div class="item item-vertical">
                                                    <div class="item-header">
                                                        <a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>" class="item-header-image"><img src="themes/images/photos/image-20.jpg" alt=""></a>
                                                    </div>
                                                    <div class="item-content">
                                                        <h2><a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>">Did You Spot This Fun Indiana Jones Easter Egg In Star Wars 7: The Force Awakens?</a></h2>
                                                        <span class="item-meta">
                                                            <span class="item-meta-item"><i class="material-icons">access_time</i>January 12, 2015</span>
                                                            <a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>" class="item-meta-item"><i class="material-icons">chat_bubble_outline</i>35</a>
                                                        </span>
                                                        <p>As far as hammer blows to the cultural brain stem go, the death of David Bowie on January 10 was particularly brutal. One of the very few true icons of popular culture...</p>
                                                    </div>
                                                </div>
                                            
                                            </div>
                                        </div>
                                        <div class="otg-item">
                                            <div class="ot-articles-blog-list">

                                                <div class="item item-small">
                                                    <div class="item-header">
                                                        <a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>" class="item-header-image"><img src="themes/images/photos/image-16.jpg" alt=""></a>
                                                    </div>
                                                    <div class="item-content">
                                                        <h2><a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>">Ut duo detraxit moderatius. No mel erat nobis, in quas praesent vis, option detracto appareat vis ei.</a></h2>
                                                    </div>
                                                </div>

                                                <div class="item item-small">
                                                    <div class="item-header">
                                                        <a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>" class="item-header-image"><img src="themes/images/photos/image-17.jpg" alt=""></a>
                                                    </div>
                                                    <div class="item-content">
                                                        <h2><a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>">Did You Spot This Fun Indiana Jones Easter Egg In Star Wars 7: The Force Awakens?</a></h2>
                                                    </div>
                                                </div>

                                                <div class="item item-small">
                                                    <div class="item-header">
                                                        <a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>" class="item-header-image"><img src="themes/images/photos/image-18.jpg" alt=""></a>
                                                    </div>
                                                    <div class="item-content">
                                                        <h2><a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>">Ut simul tractatos mel, vis choro commune an. No graecis sententiae pro, aliquando his.</a></h2>
                                                    </div>
                                                </div>

                                                <div class="item item-small">
                                                    <div class="item-header">
                                                        <a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>" class="item-header-image"><img src="themes/images/photos/image-19.jpg" alt=""></a>
                                                    </div>
                                                    <div class="item-content">
                                                        <h2><a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>">Et platonem sapientem qualisque mel, mei no movet oporteat platonem. Sea alia.</a></h2>
                                                    </div>
                                                </div>

                                                <div class="item item-small">
                                                    <div class="item-header">
                                                        <a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>" class="item-header-image"><img src="themes/images/photos/image-15.jpg" alt=""></a>
                                                    </div>
                                                    <div class="item-content">
                                                        <h2><a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>">Per eu fuisset senserit interesset, legere scripta sapientem an sed. Cum ea sonet antiopam.</a></h2>
                                                    </div>
                                                </div>
                                            
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            
                                <div data-ot-tab="finance" class="ot-content-tab">
                                    <div class="otg otg-items-2 otg-h-30 otg-v-30">
                                        <div class="otg-item">
                                            <div class="ot-articles-material-blog-list">

                                                <div class="item item-vertical">
                                                    <div class="item-header">
                                                        <a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>" class="item-header-image"><img src="themes/images/photos/image-20.jpg" alt=""></a>
                                                    </div>
                                                    <div class="item-content">
                                                        <h2><a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>">Did You Spot This Fun Indiana Jones Easter Egg In Star Wars 7: The Force Awakens?</a></h2>
                                                        <span class="item-meta">
                                                            <span class="item-meta-item"><i class="material-icons">access_time</i>January 12, 2015</span>
                                                            <a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>" class="item-meta-item"><i class="material-icons">chat_bubble_outline</i>35</a>
                                                        </span>
                                                        <p>As far as hammer blows to the cultural brain stem go, the death of David Bowie on January 10 was particularly brutal. One of the very few true icons of popular culture...</p>
                                                    </div>
                                                </div>
                                            
                                            </div>
                                        </div>
                                        <div class="otg-item">
                                            <div class="ot-articles-blog-list">

                                                <div class="item item-small">
                                                    <div class="item-header">
                                                        <a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>" class="item-header-image"><img src="themes/images/photos/image-16.jpg" alt=""></a>
                                                    </div>
                                                    <div class="item-content">
                                                        <h2><a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>">Ut duo detraxit moderatius. No mel erat nobis, in quas praesent vis, option detracto appareat vis ei.</a></h2>
                                                    </div>
                                                </div>

                                                <div class="item item-small">
                                                    <div class="item-header">
                                                        <a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>" class="item-header-image"><img src="themes/images/photos/image-17.jpg" alt=""></a>
                                                    </div>
                                                    <div class="item-content">
                                                        <h2><a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>">Did You Spot This Fun Indiana Jones Easter Egg In Star Wars 7: The Force Awakens?</a></h2>
                                                    </div>
                                                </div>

                                                <div class="item item-small">
                                                    <div class="item-header">
                                                        <a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>" class="item-header-image"><img src="themes/images/photos/image-18.jpg" alt=""></a>
                                                    </div>
                                                    <div class="item-content">
                                                        <h2><a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>">Ut simul tractatos mel, vis choro commune an. No graecis sententiae pro, aliquando his.</a></h2>
                                                    </div>
                                                </div>

                                                <div class="item item-small">
                                                    <div class="item-header">
                                                        <a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>" class="item-header-image"><img src="themes/images/photos/image-19.jpg" alt=""></a>
                                                    </div>
                                                    <div class="item-content">
                                                        <h2><a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>">Et platonem sapientem qualisque mel, mei no movet oporteat platonem. Sea alia.</a></h2>
                                                    </div>
                                                </div>

                                                <div class="item item-small">
                                                    <div class="item-header">
                                                        <a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>" class="item-header-image"><img src="themes/images/photos/image-15.jpg" alt=""></a>
                                                    </div>
                                                    <div class="item-content">
                                                        <h2><a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>">Per eu fuisset senserit interesset, legere scripta sapientem an sed. Cum ea sonet antiopam.</a></h2>
                                                    </div>
                                                </div>
                                            
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            
                                <div data-ot-tab="marketing" class="ot-content-tab">
                                    <div class="otg otg-items-2 otg-h-30 otg-v-30">
                                        <div class="otg-item">
                                            <div class="ot-articles-material-blog-list">

                                                <div class="item item-vertical">
                                                    <div class="item-header">
                                                        <a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>" class="item-header-image"><img src="themes/images/photos/image-20.jpg" alt=""></a>
                                                    </div>
                                                    <div class="item-content">
                                                        <h2><a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>">Did You Spot This Fun Indiana Jones Easter Egg In Star Wars 7: The Force Awakens?</a></h2>
                                                        <span class="item-meta">
                                                            <span class="item-meta-item"><i class="material-icons">access_time</i>January 12, 2015</span>
                                                            <a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>" class="item-meta-item"><i class="material-icons">chat_bubble_outline</i>35</a>
                                                        </span>
                                                        <p>As far as hammer blows to the cultural brain stem go, the death of David Bowie on January 10 was particularly brutal. One of the very few true icons of popular culture...</p>
                                                    </div>
                                                </div>
                                            
                                            </div>
                                        </div>
                                        <div class="otg-item">
                                            <div class="ot-articles-blog-list">

                                                <div class="item item-small">
                                                    <div class="item-header">
                                                        <a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>" class="item-header-image"><img src="themes/images/photos/image-16.jpg" alt=""></a>
                                                    </div>
                                                    <div class="item-content">
                                                        <h2><a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>">Ut duo detraxit moderatius. No mel erat nobis, in quas praesent vis, option detracto appareat vis ei.</a></h2>
                                                    </div>
                                                </div>

                                                <div class="item item-small">
                                                    <div class="item-header">
                                                        <a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>" class="item-header-image"><img src="themes/images/photos/image-17.jpg" alt=""></a>
                                                    </div>
                                                    <div class="item-content">
                                                        <h2><a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>">Did You Spot This Fun Indiana Jones Easter Egg In Star Wars 7: The Force Awakens?</a></h2>
                                                    </div>
                                                </div>

                                                <div class="item item-small">
                                                    <div class="item-header">
                                                        <a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>" class="item-header-image"><img src="themes/images/photos/image-18.jpg" alt=""></a>
                                                    </div>
                                                    <div class="item-content">
                                                        <h2><a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>">Ut simul tractatos mel, vis choro commune an. No graecis sententiae pro, aliquando his.</a></h2>
                                                    </div>
                                                </div>

                                                <div class="item item-small">
                                                    <div class="item-header">
                                                        <a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>" class="item-header-image"><img src="themes/images/photos/image-19.jpg" alt=""></a>
                                                    </div>
                                                    <div class="item-content">
                                                        <h2><a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>">Et platonem sapientem qualisque mel, mei no movet oporteat platonem. Sea alia.</a></h2>
                                                    </div>
                                                </div>

                                                <div class="item item-small">
                                                    <div class="item-header">
                                                        <a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>" class="item-header-image"><img src="themes/images/photos/image-15.jpg" alt=""></a>
                                                    </div>
                                                    <div class="item-content">
                                                        <h2><a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>">Per eu fuisset senserit interesset, legere scripta sapientem an sed. Cum ea sonet antiopam.</a></h2>
                                                    </div>
                                                </div>
                                            
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            
                                <div data-ot-tab="sports" class="ot-content-tab">
                                    <div class="otg otg-items-2 otg-h-30 otg-v-30">
                                        <div class="otg-item">
                                            <div class="ot-articles-material-blog-list">

                                                <div class="item item-vertical">
                                                    <div class="item-header">
                                                        <a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>" class="item-header-image"><img src="themes/images/photos/image-20.jpg" alt=""></a>
                                                    </div>
                                                    <div class="item-content">
                                                        <h2><a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>">Did You Spot This Fun Indiana Jones Easter Egg In Star Wars 7: The Force Awakens?</a></h2>
                                                        <span class="item-meta">
                                                            <span class="item-meta-item"><i class="material-icons">access_time</i>January 12, 2015</span>
                                                            <a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>" class="item-meta-item"><i class="material-icons">chat_bubble_outline</i>35</a>
                                                        </span>
                                                        <p>As far as hammer blows to the cultural brain stem go, the death of David Bowie on January 10 was particularly brutal. One of the very few true icons of popular culture...</p>
                                                    </div>
                                                </div>
                                                <!-- HREF NOT DONE FORM DOWNHERE -->
                                            
                                            </div>
                                        </div>
                                        <div class="otg-item">
                                            <div class="ot-articles-blog-list">

                                                <div class="item item-small">
                                                    <div class="item-header">
                                                        <a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>" class="item-header-image"><img src="themes/images/photos/image-16.jpg" alt=""></a>
                                                    </div>
                                                    <div class="item-content">
                                                        <h2><a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>">Ut duo detraxit moderatius. No mel erat nobis, in quas praesent vis, option detracto appareat vis ei.</a></h2>
                                                    </div>
                                                </div>

                                                <div class="item item-small">
                                                    <div class="item-header">
                                                        <a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>" class="item-header-image"><img src="themes/images/photos/image-17.jpg" alt=""></a>
                                                    </div>
                                                    <div class="item-content">
                                                        <h2><a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>">Did You Spot This Fun Indiana Jones Easter Egg In Star Wars 7: The Force Awakens?</a></h2>
                                                    </div>
                                                </div>

                                                <div class="item item-small">
                                                    <div class="item-header">
                                                        <a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>" class="item-header-image"><img src="themes/images/photos/image-18.jpg" alt=""></a>
                                                    </div>
                                                    <div class="item-content">
                                                        <h2><a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>">Ut simul tractatos mel, vis choro commune an. No graecis sententiae pro, aliquando his.</a></h2>
                                                    </div>
                                                </div>

                                                <div class="item item-small">
                                                    <div class="item-header">
                                                        <a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>" class="item-header-image"><img src="themes/images/photos/image-19.jpg" alt=""></a>
                                                    </div>
                                                    <div class="item-content">
                                                        <h2><a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>">Et platonem sapientem qualisque mel, mei no movet oporteat platonem. Sea alia.</a></h2>
                                                    </div>
                                                </div>

                                                <div class="item item-small">
                                                    <div class="item-header">
                                                        <a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>" class="item-header-image"><img src="themes/images/photos/image-15.jpg" alt=""></a>
                                                    </div>
                                                    <div class="item-content">
                                                        <h2><a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>">Per eu fuisset senserit interesset, legere scripta sapientem an sed. Cum ea sonet antiopam.</a></h2>
                                                    </div>
                                                </div>
                                            
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            
                            <div class="ot-title-block">
                                <h2>Today's TV</h2>
                            </div>
                            
                            <div class="ot-content-block">
                            
                                <div class="otg otg-items-2 otg-h-30 otg-v-30">
                                    <div class="otg-item">
                                        <div class="ot-articles-material-blog-list">
                                        
                                            <div class="item item-vertical todaysstv">

                                                <?php
                               if (!empty($gadget_world['youtube_link'])){
                                   ?>
                                    <div class="item-header">
                                                    <a href="<?php echo base_url('/news/detail/'.$gadget_world['content_id']) ?>" class="item-header-image"><iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?php echo base_url('news/detail/'.$gadget_world['youtube_link']) ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></a>
                                                </div>
                               <?php }
                               elseif (!empty($gadget_world['server_image'])) {
                                ?>


                                    <div class="item-header">
                                                    <a href="<?php echo base_url('/news/detail/'.$gadget_world['content_id']) ?>" class="item-header-image"><img src="<?php echo $gadget_world['server_image'];?>" alt=""></a>
                                                </div>
                               
                               <?php }
                               else{
                                   ?>
                                                   <div class="item-header">
                                                    <a href="<?php echo base_url('/news/detail/'.$gadget_world['content_id']) ?>" class="item-header-image"><img src="<?php echo base_url('uploads/pictures/banner.jpg') ?>" alt=""></a>
                                                </div>
                               <?php } ?>
                               <div class="item-content">
                                                    <h2><a href="<?php echo base_url('/news/detail/'.$gadget_world['content_id']) ?>"><?php echo $gadget_world['content_title']; ?></a></h2>
                                                    <span class="item-meta">
                                                        <span class="item-meta-item"><i class="material-icons">access_time</i><?php echo $gadget_world['created']; ?></span>
                                                    </span>
                                                    <?php
                           $string = $gadget_world['content_body'];;
                           $string = word_limiter($string, 20);
                           ?>
                           <?php echo $string;?>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="ot-articles-blog-list">
                                            <?php foreach($gadget_world_small as $row) { ?>

                                                <?php
                               if (!empty($row['youtube_link'])){
                                   ?>
                                    <div class="item item-small">
                                                <div class="item-header">
                                                    <a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>" class="item-header-image">
                                                        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?php echo base_url('news/detail/'.$row['youtube_link']) ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></a>
                                                </div>
                                                <div class="item-content">
                                                    <h2><a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>"><?php echo $row['content_title']; ?></a></h2>
                                                </div>
                                            </div>
                               <?php }
                               elseif (!empty($row['server_image'])) {
                                ?>


                                    <div class="item item-small">
                                                <div class="item-header">
                                                    <a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>" class="item-header-image"><img src="<?php echo $row['server_image'];?>" alt=""></a>
                                                </div>
                                                <div class="item-content">
                                                    <h2><a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>"><?php echo $row['content_title']; ?></a></h2>
                                                </div>
                                            </div>
                               
                               <?php }
                               else{
                                   ?>
                                                <div class="item item-small">
                                                <div class="item-header">
                                                    <a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>" class="item-header-image"><img src="<?php echo base_url('uploads/pictures/banner.jpg') ?>" alt=""></a>
                                                </div>
                                                <div class="item-content">
                                                    <h2><a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>"><?php echo $row['content_title']; ?></a></h2>
                                                </div>
                                            </div>
                               <?php } ?>



                                            
                                            <?php }  ?>
                                        </div>
                                    </div>
                                    <div class="otg-item">
                                        <div class="ot-articles-material-blog-list">
                                            <?php foreach($gadget_world2 as $row) { ?>
                                            <div class="item item-vertical todaysstv">
                                                <?php
                               if (!empty($row['youtube_link'])){
                                   ?>
                                    <div class="item-header">
                                                    <a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>" class="item-header-image"> <iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?php echo base_url('news/detail/'.$row['youtube_link']) ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></a>
                                                </div>
                               <?php }
                               elseif (!empty($row['server_image'])) {
                                ?>


                                    <div class="item-header">
                                                    <a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>" class="item-header-image"><img src="<?php echo $row['server_image'];?>" alt=""></a>
                                                </div>
                               
                               <?php }
                               else{
                                   ?>
                                                   <div class="item-header">
                                                    <a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>" class="item-header-image"><img src="<?php echo base_url('uploads/pictures/banner.jpg') ?>" alt=""></a>
                                                </div>
                               <?php } ?>
                                                <div class="item-content">
                                                    <h2><a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>"><?php echo $row['content_title']; ?></a></h2>
                                                    <span class="item-meta">
                                                        <span class="item-meta-item"><i class="material-icons">access_time</i><?php echo $row['created']; ?></span>
                                                    </span>
                                                   <?php
                           $string = $row['content_body'];;
                           $string = word_limiter($string, 20);
                           ?>
                           <?php echo $string;?>
                                                </div>
                                            </div>
                                            <?php }  ?>
                                        </div>

                                        <div class="ot-articles-blog-list">
                                                <?php foreach($gadget_world2_small as $row) { ?>


                                                    <?php
                               if (!empty($row['youtube_link'])){
                                   ?>
                                    <div class="item item-small">
                                                <div class="item-header">
                                                    <a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>" class="item-header-image"> <iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?php echo base_url('news/detail/'.$row['youtube_link']) ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></a>
                                                </div>
                                                <div class="item-content">
                                                    <h2><a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>"><?php echo $row['content_title']; ?></a></h2>
                                                </div>
                                            </div>
                               <?php }
                               elseif (!empty($row['server_image'])) {
                                ?>


                                    <div class="item item-small">
                                                <div class="item-header">
                                                    <a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>" class="item-header-image"><img src="<?php echo $row['server_image'];?>" alt=""></a>
                                                </div>
                                                <div class="item-content">
                                                    <h2><a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>"><?php echo $row['content_title']; ?></a></h2>
                                                </div>
                                            </div>
                               
                               <?php }
                               else{
                                   ?>
                                   <div class="item item-small">
                                                <div class="item-header">
                                                    <a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>" class="item-header-image"><img src="<?php echo base_url('uploads/pictures/banner.jpg') ?>" alt=""></a>
                                                </div>
                                                <div class="item-content">
                                                    <h2><a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>"><?php echo $row['content_title']; ?></a></h2>
                                                </div>
                                            </div>

                               <?php } ?>
                                            <?php }  ?>
                                        </div>
                                    </div>
                                </div>
                            
                            </div>
                            
                                    
                            <div class="ot-content-block">
                                <div class="ot-do-large-space">
                                    <a><?php

                   $Ads1 = $this->db->query("SELECT * FROM igc_ads WHERE location = 'index-mid' AND status ='Active'");
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
                            
                            <div class="ot-title-block">
                                <h2>Model Watch</h2>
                            </div>
                            
                            <div class="ot-content-block">
                            
                                <div class="ot-articles-blog-list">
                                <?php foreach($latest_articles as $row) { ?>
                                    <div class="item">

                                        <?php
                               if (!empty($row['youtube_link'])){
                                   ?>
                                    <div class="item-header">
                                            <a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>" class="item-header-image"><iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?php echo base_url('news/detail/'.$row['youtube_link']) ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></a>
                                        </div>
                               <?php }
                               elseif (!empty($row['server_image'])) {
                                ?>


                                    <div class="item-header">
                                            <a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>" class="item-header-image"><img src="<?php echo $row['server_image'];?>" alt=""></a>
                                        </div>
                               
                               <?php }
                               else{
                                   ?>
                                  <div class="item-header">
                                            <a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>" class="item-header-image"><img src="<?php echo base_url('uploads/pictures/banner.jpg') ?>" alt=""></a>
                                        </div>

                               <?php } ?>
                                        <div class="item-content">
                                            <h2 class="watchmdl"><a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>"><?php echo $row['content_title']; ?></a></h2>
                                            <span class="item-meta">
                                                <span class="item-meta-item"><i class="material-icons">access_time</i><?php echo $row['created']; ?></span>
                                            </span>
                                             <?php
                           $string = $row['content_body'];;
                           $string = word_limiter($string, 20);
                           ?>
                           <?php echo $string;?>
                                        </div>
                                    </div>
                                    <?php }  ?>
                                </div>
                                
                            </div>
                        </div>
                        
                        <aside class="sidebar">
                        
                           <div class="widget">
                               <!--  <h1 class="adsss"><span>Advertisement space</span></h1> -->
                                <?php

                   $Ads1 = $this->db->query("SELECT * FROM igc_ads WHERE location = 'Below-Menu' AND status ='Active'");
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
                            </div>
                            
                            <div class="widget widget_search">
                                <h3><span>Latest articles</span></h3>
                                <div class="ot-widget-article-list">
                                    <?php foreach($latest_popular_articles as $row) { ?>
                                            <div class="item item-small pop">
                                                <div class="item-header">
                                            <a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>" class="read-later-widget-btn"><i class="material-icons">access_time</i><i class="ot-inline-tooltip">Read more</i></a>


                                                    <?php
                               if (!empty($row['youtube_link'])){
                                   ?>
                                    <a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>" class="item-header-image"><iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?php echo base_url('news/detail/'.$row['youtube_link']) ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></a>
                               <?php }
                               elseif (!empty($row['server_image'])) {
                                ?>


                                    <a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>" class="item-header-image"><img src="<?php echo $row['server_image'];?>" alt=""></a>
                               
                               <?php }
                               else{
                                   ?>
                                  <a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>" class="item-header-image"><img src="<?php echo base_url('uploads/pictures/banner.jpg') ?>" alt=""></a>
                               <?php } ?>


                                                    
                                                </div>
                                                <div class="item-content pop">
                                                    <h5><a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>"><?php echo $row['content_title']; ?></a></h5>
                                                </div>
                                            </div>
                                            <?php }  ?> 
                                </div>
                                <a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>" class="ot-widget-button">View more articles</a>
                            </div>
                            
                            <!-- <div class="widget widget_search">
                                <h3><span>Latest comments</span></h3>
                                <div class="ot-widget-comments-list">
                                
                                    <div class="item">
                                        <div class="item-header">
                                            <a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>"><img src="themes/images/photos/avatar-1.jpg" alt="" /></a>
                                        </div>
                                        <div class="item-content">
                                            <h4><a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>">Orange themess</a></h4>
                                            <p>Cum delenit luptatum et, suscipit legendos nec cu possim minimum philosophia.</p>
                                            <a href="themes/post.html" class="ot-comment-w-read-more">Read comment</a>
                                        </div>
                                    </div>
                                
                                    <div class="item">
                                        <div class="item-header">
                                            <a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>"><img src="themes/images/photos/avatar-2.jpg" alt="" /></a>
                                        </div>
                                        <div class="item-content">
                                            <h4><a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>">Phillis Carmen</a></h4>
                                            <p>Pro in dicunt iudicabit, ne quidam sea salutandi omnium mentitum</p>
                                            <a href="themes/post.html" class="ot-comment-w-read-more">Read comment</a>
                                        </div>
                                    </div>
                                
                                    <div class="item">
                                        <div class="item-header">
                                            <a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>"><img src="themes/images/photos/avatar-1.jpg" alt="" /></a>
                                        </div>
                                        <div class="item-content">
                                            <h4><a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>">Orange themess</a></h4>
                                            <p>Cum delenit luptatum et, suscipit legendos nec cu possim minimum philosophia.</p>
                                            <a href="themes/post.html" class="ot-comment-w-read-more">Read comment</a>
                                        </div>
                                    </div>
                                    
                                </div>
                                <a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>" class="ot-widget-button">View more comments</a>
                            </div> -->
                        
                            <!-- <div class="widget">
                                <h3><span>Tag cloud</span></h3>
                                <div class="tagcloud">
                                    <a href="blog.html">fabulas</a>
                                    <a href="blog.html">similique</a>
                                    <a href="blog.html">oportere</a>
                                    <a href="blog.html">pertinacia</a>
                                    <a href="blog.html">ocurreret</a>
                                    <a href="blog.html">possim</a>
                                    <a href="blog.html">elaboraret</a>
                                    <a href="blog.html">ocurreret</a>
                                    <a href="blog.html">onas</a>
                                    <a href="blog.html">oportere</a>
                                    <a href="blog.html">propriae</a>
                                </div>
                            </div> -->
                        
                            <!-- <div class="widget">
                                <h3><span>Accordion widget</span></h3>
                                <div class="shortcode-content">
                                
                                    <div class="ot-shortcode-accordion accordion">
                                        <div>
                                            <a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>">Accordion number 1</a>
                                            <div>
                                                <p>Everti eloquentiam duo eu, ei vel fugit delenit copiosae. Ius omnesque comprehensam te, iriure gubergren referrentur ex cum. Et pri etiam molestiae, ornatus petentium voluptatibus mel ei. Illum laoreet ocurreret vix ea. No quaeque alterum propriae qui, modo congue cotidieque vel.</p>
                                                <p><a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent button ot-shortcode-button">Button inside accordion</a></p>
                                            </div>
                                        </div>
                                        <div>
                                            <a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>">Opened accordion number 2</a>
                                            <div>
                                                <p>Atqui graeci consequat eum ei. Definiebas theoph us mel ei, mel id mazim efficiendi. Nec an quod apeirian. Dolores omnesque liberavisse te vis. Stet nibh illud ei duo.</p>
                                            </div>
                                        </div>
                                        <div>
                                            <a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>">Closed accordion number 3</a>
                                            <div>
                                                <p>Atqui graeci consequat eum ei. Definiebas theoph us mel ei, mel id mazim efficiendi. Nec an quod apeirian. Dolores omnesque liberavisse te vis. Stet nibh illud ei duo.</p>
                                            </div>
                                        </div>
                                        <div>
                                            <a href="<?php echo base_url('/news/detail/'.$blog['content_id']) ?>">Closed accordion number 4</a>
                                            <div>
                                                <p>Atqui graeci consequat eum ei. Definiebas theoph us mel ei, mel id mazim efficiendi. Nec an quod apeirian. Dolores omnesque liberavisse te vis. Stet nibh illud ei duo.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            
                        </aside>
                        
                    </div>

                <!-- END .wrapper -->
                </div>
                <!-- gallery -->
                <!-- <div class="ot-content-wrapper-full">
                
                    
                    <div class="wrapper">
                        <div class="ot-title-block">
                            <h2>Gallery</h2>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                 <?php foreach($latest_blog_articles as $row) { ?>
                                <div class="galerry">
                                                <a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>" class="item-header-image"><img src="<?php echo base_url('/uploads/content/'.$row['featured_img']); ?>" alt=""></a>
                                </div>
                                <?php }  ?>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                 <?php foreach($latest_blog_articles1 as $row) { ?>
                                <div class="galerry">
                                                <a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>" class="item-header-image"><img src="<?php echo base_url('/uploads/content/'.$row['featured_img']); ?>" alt=""></a>
                                </div>
                                <?php }  ?>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <?php foreach($latest_blog_articles2 as $row) { ?>
                                <div class="galerry">
                                                <a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>" class="item-header-image"><img src="<?php echo base_url('/uploads/content/'.$row['featured_img']); ?>" alt=""></a>
                            </div>
                            <?php }  ?>
                            </div>
                </div>
            </div>
        </div> -->
        <!-- gallery end -->
                
                
                <!-- BEGIN .wrapper -->
                <div class="wrapper">
                    <div class="ot-title-block">
                        <h2>Today's Market</h2>
                    </div>

                    <div class="ot-content-block">

                        <div class="ot-block-article-slider otg otg-items-3 otg-v-20 otg-h-30">
                            <?php
                                       
                                        foreach($articles_in_the_last_hour as $row)
                                        {
                                             
                                           
                                            ?>




                                            <?php
                               if (!empty($row['youtube_link'])){
                                   ?>
                                    <div class="otg-item">
                                <div class="item marketsss">
                                    <a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>">
                                        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?php echo base_url('news/detail/'.$row['youtube_link']) ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        <span class="item-content">
                                            <strong><?php echo $row['content_title']; ?></strong>
                                            <span class="meta-items">
                                                <i class="meta-items-i"><i class="material-icons">person</i><?php echo $row['by-line']; ?></i>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                               <?php }
                               elseif (!empty($row['server_image'])) {
                                ?>


                                    <div class="otg-item">
                                <div class="item marketsss">
                                    <a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>">
                                        <img src="<?php echo $row['server_image'];?>" alt="" />
                                        <span class="item-content">
                                            <strong><?php echo $row['content_title']; ?></strong>
                                            <span class="meta-items">
                                                <i class="meta-items-i"><i class="material-icons">person</i><?php echo $row['by-line']; ?></i>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                               
                               <?php }
                               else{
                                   ?>
                                  <div class="otg-item">
                                <div class="item marketsss">
                                    <a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>">
                                        <img src="<?php echo base_url('uploads/pictures/banner.jpg') ?>" alt="" />
                                        <span class="item-content">
                                            <strong><?php echo $row['content_title']; ?></strong>
                                            <span class="meta-items">
                                                <i class="meta-items-i"><i class="material-icons">person</i><?php echo $row['by-line']; ?></i>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                               <?php } ?>
                            <?php }  ?>
                            <!-- <div class="otg-item">
                                <div class="item">
                                    <a href="themes/post.html">
                                        <img src="themes/images/photos/image-2.jpg" alt="" />
                                        <span class="item-content">
                                            <strong>Per nostro eloquentiam ad augue dolores pericula has an</strong>
                                            <span class="meta-items">
                                                <i class="meta-items-i"><i class="material-icons">person</i>Orange themess</i>
                                                <i class="meta-items-i"><i class="material-icons">access_time</i>23 minutes ago</i>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <div class="otg-item">
                                <div class="item">
                                    <a href="themes/post.html">
                                        <img src="themes/images/photos/image-3.jpg" alt="" />
                                        <span class="item-content">
                                            <strong>Per nostro eloquentiam ad augue dolores pericula has an</strong>
                                            <span class="meta-items">
                                                <i class="meta-items-i"><i class="material-icons">person</i>Orange themess</i>
                                                <i class="meta-items-i"><i class="material-icons">access_time</i>23 minutes ago</i>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <div class="otg-item">
                                <div class="item">
                                    <a href="themes/post.html">
                                        <img src="themes/images/photos/image-4.jpg" alt="" />
                                        <span class="item-content">
                                            <strong>Per nostro eloquentiam ad augue dolores pericula has an</strong>
                                            <span class="meta-items">
                                                <i class="meta-items-i"><i class="material-icons">person</i>Orange themess</i>
                                                <i class="meta-items-i"><i class="material-icons">access_time</i>23 minutes ago</i>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <div class="otg-item">
                                <div class="item">
                                    <a href="themes/post.html">
                                        <img src="themes/images/photos/image-5.jpg" alt="" />
                                        <span class="item-content">
                                            <strong>Per nostro eloquentiam ad augue dolores pericula has an</strong>
                                            <span class="meta-items">
                                                <i class="meta-items-i"><i class="material-icons">person</i>Orange themess</i>
                                                <i class="meta-items-i"><i class="material-icons">access_time</i>23 minutes ago</i>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <div class="otg-item">
                                <div class="item">
                                    <a href="themes/post.html">
                                        <img src="themes/images/photos/image-6.jpg" alt="" />
                                        <span class="item-content">
                                            <strong>Per nostro eloquentiam ad augue dolores pericula has an</strong>
                                            <span class="meta-items">
                                                <i class="meta-items-i"><i class="material-icons">person</i>Orange themess</i>
                                                <i class="meta-items-i"><i class="material-icons">access_time</i>23 minutes ago</i>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div> -->
                        </div>

                    </div>
                <!-- END .wrapper -->
                </div>
                <div class="row">
                    <div class="col-md-8">
                <div class="tab-content">
                        <div class="ot-title-block">
                            <h2 class="provincessss active prov"><a data-toggle="tab" href="#Province">Province</a></h2>
                            <ul class="nav nav-tabs">
                                    <li class="prov padprov"><a data-toggle="tab" href="#Province1">No 1</a></li>
                                    <li class="prov"><a data-toggle="tab" href="#Province2">No 2</a></li>
                                    <li class="prov"><a data-toggle="tab" href="#Province3">No 3</a></li>
                                    <li class="prov"><a data-toggle="tab" href="#Province4">No 4</a></li>
                                    <li class="prov"><a data-toggle="tab" href="#Province5">No 5</a></li>
                                    <li class="prov"><a data-toggle="tab" href="#Province6">No 6</a></li>
                                    <li class="prov"><a data-toggle="tab" href="#Province7">No 7</a></li>
                                    </ul>
                        </div>
                                        <div id="Province" class="tab-pane fade in active">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="ot-articles-material-blog-list">
                                                        <div class="item item-vertical">
                                                            <div class="item-header">
                                                                <a href="<?php echo base_url('/news/detail/'.$world_wide['content_id']) ?>" class="item-header-image"><?php
                               if (!empty($world_wide['youtube_link'])){
                                   ?>
                                   <iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?php echo base_url('news/detail/'.$world_wide['youtube_link']) ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                               <?php }
                               elseif (!empty($world_wide['server_image'])) {
                                ?>


                                    <img src="<?php echo $world_wide['server_image'];?>" alt="" />
                               <?php }
                               else{
                                   ?>
                                  <img src="<?php echo base_url('uploads/pictures/banner.jpg') ?>" alt="" />
                               <?php } ?></a>
                                                            </div>
                                                            <div class="item-content">
                                                                <h2><a href="<?php echo base_url('/news/detail/'.$world_wide['content_id']) ?>"><?php echo $world_wide['content_title']; ?></a></h2>
                                                                <span class="item-meta">
                                                                    <span class="item-meta-item"><i class="material-icons">access_time</i><?php echo $world_wide['created']; ?></span>
                                                                </span>
                                                                <?php
                                                                   $string = $world_wide['content_body'];;
                                                                   $string = word_limiter($string, 20);
                                                                   ?>
                                                                   <?php echo $string;?>
                                                            </div>
                                                        </div>
                                                    </div>  
                                                    <!-- <div class="otg-item">
                                                        <div class="ot-articles-blog-list">
                                                            <?php foreach($world_wide1 as $row) { ?> 
                                                            <div class="item item-small">
                                                                <div class="item-header">
                                                                    <a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>" class="read-later-widget-btn"><i class="material-icons">access_time</i><i class="ot-inline-tooltip">Read more</i></a>
                                                                    <a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>" class="item-header-image"><img src="<?php echo base_url('/uploads/content/'.$row['featured_img']); ?>" alt=""></a>
                                                                </div>
                                                                <div class="item-content">
                                                                    <h2><a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>"><?php echo $row['content_title']; ?></a></h2>
                                                                </div>
                                                            </div>
                                                            <?php }  ?>
                                                        </div>
                                                    </div> -->
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="otg-item world-wide-flot">
                                                        <div class="ot-articles-blog-list">
                                                            <?php foreach($world_wide2 as $row) { ?> 
                                                            <div class="item item-small">
                                                                <div class="item-header">
                                                                    <a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>" class="item-header-image"><?php
                               if (!empty($row['youtube_link'])){
                                   ?>
                                   <iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?php echo base_url('news/detail/'.$row['youtube_link']) ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                               <?php }
                               elseif (!empty($row['server_image'])) {
                                ?>


                                    <img src="<?php echo $row['server_image'];?>" alt="" />
                               <?php }
                               else{
                                   ?>
                                  <img src="<?php echo base_url('uploads/pictures/banner.jpg') ?>" alt="" />
                               <?php } ?></a>
                                                                </div>
                                                                <div class="item-content">
                                                                    <h2><a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>"><?php echo $row['content_title']; ?></a></h2>
                                                                </div>
                                                            </div>
                                                            <?php }  ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                           <div id="Province1" class="tab-pane fade">
                                               <div class="row">
                                                <br>
                                                          <div class="col-sm-6">
                                            <div class="ot-articles-material-blog-list">
                                        
                                            <div class="item item-vertical">
                                                <div class="item-header">
                                                    <a href="<?php echo base_url('/news/detail/'.$national_news['content_id']) ?>" class="item-header-image">
                                                        <?php
                               if (!empty($national_news['youtube_link'])){
                                   ?>
                                   <iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?php echo base_url('news/detail/'.$national_news['youtube_link']) ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                               <?php }
                               elseif (!empty($national_news['server_image'])) {
                                ?>


                                    <img src="<?php echo $national_news['server_image'];?>" alt="" />
                               <?php }
                               else{
                                   ?>
                                  <img src="<?php echo base_url('uploads/pictures/banner.jpg') ?>" alt="" />
                               <?php } ?></a>
                                                </div>
                                                <div class="item-content">
                                                    <h2><a href="<?php echo base_url('/news/detail/'.$national_news['content_id']) ?>"><?php echo $national_news['content_title']; ?></a></h2>
                                                    <span class="item-meta">
                                                        <span class="item-meta-item"><i class="material-icons">access_time</i><?php echo $national_news['created']; ?></span>
                                                    </span>
                                                    <?php
                           $string = $national_news['content_body'];;
                           $string = word_limiter($string, 20);
                           ?>
                           <?php echo $string;?>
                                                </div>
                                            </div>
                                        </div>  
                                    <!-- <div class="otg-item">
                                        <div class="ot-articles-blog-list">
                                            <?php foreach($national_news1 as $row) { ?> 
                                            <div class="item item-small">
                                                <div class="item-header">
                                                    <a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>" class="item-header-image"><img src="<?php echo base_url('/uploads/content/'.$row['featured_img']); ?>" alt=""></a>
                                                </div>
                                                <div class="item-content">
                                                    <h2><a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>"><?php echo $row['content_title']; ?></a></h2>
                                                </div>
                                            </div>
                                            <?php }  ?>
                                        </div>
                                    </div> -->
                                    </div>
                                        <div class="col-sm-6">
                                            <div class="otg-item world-wide-flot">
                                        <div class="ot-articles-blog-list">
                                            <?php foreach($national_news2 as $row) { ?> 
                                            <div class="item item-small">
                                                <div class="item-header">
                                                    <a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>" class="item-header-image"><?php
                               if (!empty($row['youtube_link'])){
                                   ?>
                                   <iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?php echo base_url('news/detail/'.$row['youtube_link']) ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                               <?php }
                               elseif (!empty($row['server_image'])) {
                                ?>


                                    <img src="<?php echo $row['server_image'];?>" alt="" />
                               <?php }
                               else{
                                   ?>
                                  <img src="<?php echo base_url('uploads/pictures/banner.jpg') ?>" alt="" />
                               <?php } ?></a>
                                                </div>
                                                <div class="item-content">
                                                    <h2><a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>"><?php echo $row['content_title']; ?></a></h2>
                                                </div>
                                            </div>
                                            <?php }  ?>
                                        </div>
                                    </div>
                                        </div>
                                               </div>
                                           </div>


                                           <div id="Province2" class="tab-pane fade">
                                               <div class="row">
                                                <br>
                                                          <div class="col-sm-6">
                                            <div class="ot-articles-material-blog-list">
                                        
                                            <div class="item item-vertical">
                                                <div class="item-header">
                                                    <a href="<?php echo base_url('/news/detail/'.$international_news['content_id']) ?>" class="item-header-image">
                                                        <?php
                               if (!empty($international_news['youtube_link'])){
                                   ?>
                                   <iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?php echo base_url('news/detail/'.$international_news['youtube_link']) ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                               <?php }
                               elseif (!empty($international_news['server_image'])) {
                                ?>


                                    <img src="<?php echo $international_news['server_image'];?>" alt="" />
                               <?php }
                               else{
                                   ?>
                                  <img src="<?php echo base_url('uploads/pictures/banner.jpg') ?>" alt="" />
                               <?php } ?></a>
                                                </div>
                                                <div class="item-content">
                                                    <h2><a href="<?php echo base_url('/news/detail/'.$international_news['content_id']) ?>"><?php echo $international_news['content_title']; ?></a></h2>
                                                    <span class="item-meta">
                                                        <span class="item-meta-item"><i class="material-icons">access_time</i><?php echo $international_news['created']; ?></span>
                                                    </span>
                                                    <?php
                           $string = $international_news['content_body'];;
                           $string = word_limiter($string, 20);
                           ?>
                           <?php echo $string;?>
                                                </div>
                                            </div>
                                        </div>  
                                    <!-- <div class="otg-item">
                                        <div class="ot-articles-blog-list">
                                            <?php foreach($international_news1 as $row) { ?> 
                                            <div class="item item-small">
                                                <div class="item-header">
                                                    <a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>" class="item-header-image"><img src="<?php echo base_url('/uploads/content/'.$row['featured_img']); ?>" alt=""></a>
                                                </div>
                                                <div class="item-content">
                                                    <h2><a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>"><?php echo $row['content_title']; ?></a></h2>
                                                </div>
                                            </div>
                                            <?php }  ?>
                                        </div>
                                    </div> -->
                                    </div>
                                        <div class="col-sm-6">
                                            <div class="otg-item world-wide-flot">
                                        <div class="ot-articles-blog-list">
                                            <?php foreach($international_news2 as $row) { ?> 
                                            <div class="item item-small">
                                                <div class="item-header">
                                                    <a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>" class="item-header-image"><?php
                               if (!empty($row['youtube_link'])){
                                   ?>
                                   <iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?php echo base_url('news/detail/'.$row['youtube_link']) ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                               <?php }
                               elseif (!empty($row['server_image'])) {
                                ?>


                                    <img src="<?php echo $row['server_image'];?>" alt="" />
                               <?php }
                               else{
                                   ?>
                                  <img src="<?php echo base_url('uploads/pictures/banner.jpg') ?>" alt="" />
                               <?php } ?></a>
                                                </div>
                                                <div class="item-content">
                                                    <h2><a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>"><?php echo $row['content_title']; ?></a></h2>
                                                </div>
                                            </div>
                                            <?php }  ?>
                                        </div>
                                    </div>
                                        </div>
                                               </div>
                                           </div>



                                           <div id="Province3" class="tab-pane fade">
                                               <div class="row">
                                                <br>
                                                          <div class="col-sm-6">
                                            <div class="ot-articles-material-blog-list">
                                        
                                            <div class="item item-vertical">
                                                <div class="item-header">
                                                    <a href="<?php echo base_url('/news/detail/'.$province3_news['content_id']) ?>" class="item-header-image"><?php
                               if (!empty($province3_news['youtube_link'])){
                                   ?>
                                   <iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?php echo base_url('news/detail/'.$province3_news['youtube_link']) ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                               <?php }
                               elseif (!empty($province3_news['server_image'])) {
                                ?>


                                    <img src="<?php echo $province3_news['server_image'];?>" alt="" />
                               <?php }
                               else{
                                   ?>
                                  <img src="<?php echo base_url('uploads/pictures/banner.jpg') ?>" alt="" />
                               <?php } ?></a>
                                                </div>
                                                <div class="item-content">
                                                    <h2><a href="<?php echo base_url('/news/detail/'.$province3_news['content_id']) ?>"><?php echo $province3_news['content_title']; ?></a></h2>
                                                    <span class="item-meta">
                                                        <span class="item-meta-item"><i class="material-icons">access_time</i><?php echo $province3_news['created']; ?></span>
                                                    </span>
                                                    <?php
                           $string = $province3_news['content_body'];;
                           $string = word_limiter($string, 20);
                           ?>
                           <?php echo $string;?>
                                                </div>
                                            </div>
                                        </div>  
                                    <!-- <div class="otg-item">
                                        <div class="ot-articles-blog-list">
                                            <?php foreach($province3_news1 as $row) { ?> 
                                            <div class="item item-small">
                                                <div class="item-header">
                                                    <a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>" class="item-header-image"><img src="<?php echo base_url('/uploads/content/'.$row['featured_img']); ?>" alt=""></a>
                                                </div>
                                                <div class="item-content">
                                                    <h2><a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>"><?php echo $row['content_title']; ?></a></h2>
                                                </div>
                                            </div>
                                            <?php }  ?>
                                        </div>
                                    </div> -->
                                    </div>
                                        <div class="col-sm-6">
                                            <div class="otg-item world-wide-flot">
                                        <div class="ot-articles-blog-list">
                                            <?php foreach($province3_news2 as $row) { ?> 
                                            <div class="item item-small">
                                                <div class="item-header">
                                                    <a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>" class="item-header-image"><?php
                               if (!empty($row['youtube_link'])){
                                   ?>
                                   <iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?php echo base_url('news/detail/'.$row['youtube_link']) ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                               <?php }
                               elseif (!empty($row['server_image'])) {
                                ?>


                                    <img src="<?php echo $row['server_image'];?>" alt="" />
                               <?php }
                               else{
                                   ?>
                                  <img src="<?php echo base_url('uploads/pictures/banner.jpg') ?>" alt="" />
                               <?php } ?></a>
                                                </div>
                                                <div class="item-content">
                                                    <h2><a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>"><?php echo $row['content_title']; ?></a></h2>
                                                </div>
                                            </div>
                                            <?php }  ?>
                                        </div>
                                    </div>
                                        </div>
                                               </div>
                                           </div>


                                           <div id="Province4" class="tab-pane fade">
                                               <div class="row">
                                                <br>
                                                          <div class="col-sm-6">
                                            <div class="ot-articles-material-blog-list">
                                        
                                            <div class="item item-vertical">
                                                <div class="item-header">
                                                    <a href="<?php echo base_url('/news/detail/'.$province4_news['content_id']) ?>" class="item-header-image"><?php
                               if (!empty($province4_news['youtube_link'])){
                                   ?>
                                   <iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?php echo base_url('news/detail/'.$province4_news['youtube_link']) ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                               <?php }
                               elseif (!empty($province4_news['server_image'])) {
                                ?>


                                    <img src="<?php echo $province4_news['server_image'];?>" alt="" />
                               <?php }
                               else{
                                   ?>
                                  <img src="<?php echo base_url('uploads/pictures/banner.jpg') ?>" alt="" />
                               <?php } ?></a>
                                                </div>
                                                <div class="item-content">
                                                    <h2><a href="<?php echo base_url('/news/detail/'.$province4_news['content_id']) ?>"><?php echo $province4_news['content_title']; ?></a></h2>
                                                    <span class="item-meta">
                                                        <span class="item-meta-item"><i class="material-icons">access_time</i><?php echo $province4_news['created']; ?></span>
                                                    </span>
                                                    <?php
                           $string = $province4_news['content_body'];;
                           $string = word_limiter($string, 20);
                           ?>
                           <?php echo $string;?>
                                                </div>
                                            </div>
                                        </div>  
                                    <!-- <div class="otg-item">
                                        <div class="ot-articles-blog-list">
                                            <?php foreach($province4_news1 as $row) { ?> 
                                            <div class="item item-small">
                                                <div class="item-header">
                                                    <a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>" class="item-header-image"><img src="<?php echo base_url('/uploads/content/'.$row['featured_img']); ?>" alt=""></a>
                                                </div>
                                                <div class="item-content">
                                                    <h2><a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>"><?php echo $row['content_title']; ?></a></h2>
                                                </div>
                                            </div>
                                            <?php }  ?>
                                        </div>
                                    </div> -->
                                    </div>
                                        <div class="col-sm-6">
                                            <div class="otg-item world-wide-flot">
                                        <div class="ot-articles-blog-list">
                                            <?php foreach($province4_news2 as $row) { ?> 
                                            <div class="item item-small">
                                                <div class="item-header">
                                                    <a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>" class="item-header-image"><?php
                               if (!empty($row['youtube_link'])){
                                   ?>
                                   <iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?php echo base_url('news/detail/'.$row['youtube_link']) ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                               <?php }
                               elseif (!empty($row['server_image'])) {
                                ?>


                                    <img src="<?php echo $row['server_image'];?>" alt="" />
                               <?php }
                               else{
                                   ?>
                                  <img src="<?php echo base_url('uploads/pictures/banner.jpg') ?>" alt="" />
                               <?php } ?></a>
                                                </div>
                                                <div class="item-content">
                                                    <h2><a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>"><?php echo $row['content_title']; ?></a></h2>
                                                </div>
                                            </div>
                                            <?php }  ?>
                                        </div>
                                    </div>
                                        </div>
                                               </div>
                                           </div>


                                           <div id="Province5" class="tab-pane fade">
                                               <div class="row">
                                                <br>
                                                          <div class="col-sm-6">
                                            <div class="ot-articles-material-blog-list">
                                        
                                            <div class="item item-vertical">
                                                <div class="item-header">
                                                    <a href="<?php echo base_url('/news/detail/'.$province5_news['content_id']) ?>" class="item-header-image"><?php
                               if (!empty($province5_news['youtube_link'])){
                                   ?>
                                   <iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?php echo base_url('news/detail/'.$province5_news['youtube_link']) ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                               <?php }
                               elseif (!empty($province5_news['server_image'])) {
                                ?>


                                    <img src="<?php echo $province5_news['server_image'];?>" alt="" />
                               <?php }
                               else{
                                   ?>
                                  <img src="<?php echo base_url('uploads/pictures/banner.jpg') ?>" alt="" />
                               <?php } ?></a>
                                                </div>
                                                <div class="item-content">
                                                    <h2><a href="<?php echo base_url('/news/detail/'.$province5_news['content_id']) ?>"><?php echo $province5_news['content_title']; ?></a></h2>
                                                    <span class="item-meta">
                                                        <span class="item-meta-item"><i class="material-icons">access_time</i><?php echo $province5_news['created']; ?></span>
                                                    </span>
                                                    <?php
                           $string = $province5_news['content_body'];;
                           $string = word_limiter($string, 20);
                           ?>
                           <?php echo $string;?>
                                                </div>
                                            </div>
                                        </div>  
                                    <!-- <div class="otg-item">
                                        <div class="ot-articles-blog-list">
                                            <?php foreach($province5_news1 as $row) { ?> 
                                            <div class="item item-small">
                                                <div class="item-header">
                                                    <a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>" class="item-header-image"><img src="<?php echo base_url('/uploads/content/'.$row['featured_img']); ?>" alt=""></a>
                                                </div>
                                                <div class="item-content">
                                                    <h2><a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>"><?php echo $row['content_title']; ?></a></h2>
                                                </div>
                                            </div>
                                            <?php }  ?>
                                        </div>
                                    </div> -->
                                    </div>
                                        <div class="col-sm-6">
                                            <div class="otg-item world-wide-flot">
                                        <div class="ot-articles-blog-list">
                                            <?php foreach($province5_news2 as $row) { ?> 
                                            <div class="item item-small">
                                                <div class="item-header">
                                                    <a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>" class="item-header-image"><?php
                               if (!empty($row['youtube_link'])){
                                   ?>
                                   <iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?php echo base_url('news/detail/'.$row['youtube_link']) ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                               <?php }
                               elseif (!empty($row['server_image'])) {
                                ?>


                                    <img src="<?php echo $row['server_image'];?>" alt="" />
                               <?php }
                               else{
                                   ?>
                                  <img src="<?php echo base_url('uploads/pictures/banner.jpg') ?>" alt="" />
                               <?php } ?></a>
                                                </div>
                                                <div class="item-content">
                                                    <h2><a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>"><?php echo $row['content_title']; ?></a></h2>
                                                </div>
                                            </div>
                                            <?php }  ?>
                                        </div>
                                    </div>
                                        </div>
                                               </div>
                                           </div>


                                           <div id="Province6" class="tab-pane fade">
                                               <div class="row">
                                                <br>
                                                          <div class="col-sm-6">
                                            <div class="ot-articles-material-blog-list">
                                        
                                            <div class="item item-vertical">
                                                <div class="item-header">
                                                    <a href="<?php echo base_url('/news/detail/'.$province6_news['content_id']) ?>" class="item-header-image">
                                                        <?php
                               if (!empty($province6_news['youtube_link'])){
                                   ?>
                                   <iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?php echo base_url('news/detail/'.$province6_news['youtube_link']) ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                               <?php }
                               elseif (!empty($province6_news['server_image'])) {
                                ?>


                                    <img src="<?php echo $province6_news['server_image'];?>" alt="" />
                               <?php }
                               else{
                                   ?>
                                  <img src="<?php echo base_url('uploads/pictures/banner.jpg') ?>" alt="" />
                               <?php } ?></a>
                                                </div>
                                                <div class="item-content">
                                                    <h2><a href="<?php echo base_url('/news/detail/'.$province6_news['content_id']) ?>"><?php echo $province6_news['content_title']; ?></a></h2>
                                                    <span class="item-meta">
                                                        <span class="item-meta-item"><i class="material-icons">access_time</i><?php echo $province6_news['created']; ?></span>
                                                    </span>
                                                    <?php
                           $string = $province6_news['content_body'];;
                           $string = word_limiter($string, 20);
                           ?>
                           <?php echo $string;?>
                                                </div>
                                            </div>
                                        </div>  
                                    <!-- <div class="otg-item">
                                        <div class="ot-articles-blog-list">
                                            <?php foreach($province6_news1 as $row) { ?> 
                                            <div class="item item-small">
                                                <div class="item-header">
                                                    <a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>" class="item-header-image"><img src="<?php echo base_url('/uploads/content/'.$row['featured_img']); ?>" alt=""></a>
                                                </div>
                                                <div class="item-content">
                                                    <h2><a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>"><?php echo $row['content_title']; ?></a></h2>
                                                </div>
                                            </div>
                                            <?php }  ?>
                                        </div>
                                    </div> -->
                                    </div>
                                        <div class="col-sm-6">
                                            <div class="otg-item world-wide-flot">
                                        <div class="ot-articles-blog-list">
                                            <?php foreach($province6_news2 as $row) { ?> 
                                            <div class="item item-small">
                                                <div class="item-header">
                                                    <a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>" class="item-header-image">
                                                        <?php
                               if (!empty($row['youtube_link'])){
                                   ?>
                                   <iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?php echo base_url('news/detail/'.$row['youtube_link']) ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                               <?php }
                               elseif (!empty($row['server_image'])) {
                                ?>


                                    <img src="<?php echo $row['server_image'];?>" alt="" />
                               <?php }
                               else{
                                   ?>
                                  <img src="<?php echo base_url('uploads/pictures/banner.jpg') ?>" alt="" />
                               <?php } ?></a>
                                                </div>
                                                <div class="item-content">
                                                    <h2><a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>"><?php echo $row['content_title']; ?></a></h2>
                                                </div>
                                            </div>
                                            <?php }  ?>
                                        </div>
                                    </div>
                                        </div>
                                               </div>
                                           </div>


                                           <div id="Province7" class="tab-pane fade">
                                               <div class="row">
                                                <br>
                                                          <div class="col-sm-6">
                                            <div class="ot-articles-material-blog-list">
                                        
                                            <div class="item item-vertical">
                                                <div class="item-header">
                                                    <a href="<?php echo base_url('/news/detail/'.$province7_news['content_id']) ?>" class="item-header-image">
                                                        <?php
                               if (!empty($province7_news['youtube_link'])){
                                   ?>
                                   <iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?php echo base_url('news/detail/'.$province7_news['youtube_link']) ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                               <?php }
                               elseif (!empty($province7_news['server_image'])) {
                                ?>


                                    <img src="<?php echo $province7_news['server_image'];?>" alt="" />
                               <?php }
                               else{
                                   ?>
                                  <img src="<?php echo base_url('uploads/pictures/banner.jpg') ?>" alt="" />
                               <?php } ?></a>
                                                </div>
                                                <div class="item-content">
                                                    <h2><a href="<?php echo base_url('/news/detail/'.$province7_news['content_id']) ?>"><?php echo $province7_news['content_title']; ?></a></h2>
                                                    <span class="item-meta">
                                                        <span class="item-meta-item"><i class="material-icons">access_time</i><?php echo $province7_news['created']; ?></span>
                                                    </span>
                                                    <?php
                           $string = $province7_news['content_body'];;
                           $string = word_limiter($string, 20);
                           ?>
                           <?php echo $string;?>
                                                </div>
                                            </div>
                                        </div>  
                                    <!-- <div class="otg-item">
                                        <div class="ot-articles-blog-list">
                                            <?php foreach($province7_news1 as $row) { ?> 
                                            <div class="item item-small">
                                                <div class="item-header">
                                                    <a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>" class="item-header-image"><img src="<?php echo base_url('/uploads/content/'.$row['featured_img']); ?>" alt=""></a>
                                                </div>
                                                <div class="item-content">
                                                    <h2><a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>"><?php echo $row['content_title']; ?></a></h2>
                                                </div>
                                            </div>
                                            <?php }  ?>
                                        </div>
                                    </div> -->
                                    </div>
                                    <div class="col-sm-6">
                                            <div class="otg-item world-wide-flot">
                                        <div class="ot-articles-blog-list">
                                            <?php foreach($province7_news2 as $row) { ?> 
                                            <div class="item item-small">
                                                <div class="item-header">
                                                    <a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>" class="item-header-image">
                                                        <?php
                               if (!empty($row['youtube_link'])){
                                   ?>
                                   <iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?php echo base_url('news/detail/'.$row['youtube_link']) ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                               <?php }
                               elseif (!empty($row['server_image'])) {
                                ?>


                                    <img src="<?php echo $row['server_image'];?>" alt="" />
                               <?php }
                               else{
                                   ?>
                                  <img src="<?php echo base_url('uploads/pictures/banner.jpg') ?>" alt="" />
                               <?php } ?></a>
                                                </div>
                                                <div class="item-content">
                                                    <h2><a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>"><?php echo $row['content_title']; ?></a></h2>
                                                </div>
                                            </div>
                                            <?php }  ?>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                                        
                    </div> 
                </div>
                <div class="col-md-4">  
                <div class="widget aside-province">
                                    <!-- <h1 class="adsss proooo"><span>Advertisement space</span></h1> -->
                                    <?php

                                           $Ads1 = $this->db->query("SELECT * FROM igc_ads WHERE location = 'aside-province' AND status ='Active'");
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
                </div>
            </div>   
            </div>
            <div class="container">
                                    <div class="row">    
                <div class="ot-content-wrapper-full">
                
                    <!-- BEGIN .wrapper -->
                    <div class="wrapper">

                        <!-- <div class="ot-title-block">
                            <h2>News</h2>
                        </div> -->
                       
                        <div class="ot-content-block">

                            <div class="ot-grid-article-list otg otg-items-3 otg-h-30 otg-v-30">
                                  <?php foreach($blogs_offset4 as $row) { ?>   
                                <div class="otg-item news">
                                    <div class="ot-material-card news">
                                        <h3 class="slidwords">News</h3>
                                        <a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>" class="item-header">
                                            <?php
                               if (!empty($row['youtube_link'])){
                                   ?>
                                   <iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?php echo base_url('news/detail/'.$row['youtube_link']) ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                               <?php }
                               elseif (!empty($row['server_image'])) {
                                ?>


                                    <img src="<?php echo $row['server_image'];?>" alt="" />
                               <?php }
                               else{
                                   ?>
                                  <img src="<?php echo base_url('uploads/pictures/banner.jpg') ?>" alt="" />
                               <?php } ?></a>
                                        <div class="item-content content-news">
                                            <h3><a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>"><?php echo $row['content_title']; ?></a></h3> 
                                    </div>
                                    <?php }  ?>
                                       <?php foreach($blogs_offset5 as $row) { ?>   
                                <div class="otg-item newnews">
                                    <div class="ot-material-card news">
                                        <div class="item-content contentsss">
                                            <h3><a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>"><?php echo $row['content_title']; ?></a></h3>
                                           
                                    </div>
                                </div>
                            </div>
                                      <?php }  ?>
                                </div>
                            </div>
                            <?php foreach($shortcodes as $shortcode) { ?>   
                                <div class="otg-item news">
                                    <div class="ot-material-card news">
                                        <h3 class="slidwords">Entertainment</h3>
                                        <a href="<?php echo base_url('/news/detail/'.$shortcode['content_id']) ?>" class="item-header">
                                            <?php
                               if (!empty($shortcode['youtube_link'])){
                                   ?>
                                   <iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?php echo base_url('news/detail/'.$shortcode['youtube_link']) ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                               <?php }
                               elseif (!empty($shortcode['server_image'])) {
                                ?>


                                    <img src="<?php echo $shortcode['server_image'];?>" alt="" />
                               <?php }
                               else{
                                   ?>
                                  <img src="<?php echo base_url('uploads/pictures/banner.jpg') ?>" alt="" />
                               <?php } ?></a>
                                        <div class="item-content content-entertainment">
                                            <h3><a href="<?php echo base_url('/news/detail/'.$shortcode['content_id']) ?>"><?php echo $shortcode['content_title']; ?></a></h3> 
                                    </div>
                                    <?php }  ?>
                                       <?php foreach($shortcodes1 as $shortcode) { ?>   
                                <div class="otg-item newnews">
                                    <div class="ot-material-card news">
                                        <div class="item-content contentsss">
                                            <h3><a href="<?php echo base_url('/news/detail/'.$shortcode['content_id']) ?>"><?php echo $shortcode['content_title']; ?></a></h3>
                                           
                                    </div>
                                </div>
                            </div>
                                      <?php }  ?>
                                </div>
                            </div> 
                                <div class="otg-item news">
                                    <div class="ot-material-card news">
                                        <h3 class="slidwords">Today's Tv</h3>
                                        <a href="<?php echo base_url('/news/detail/'.$gadget_world['content_id']) ?>" class="item-header"> 
                                            <?php
                               if (!empty($gadget_world['youtube_link'])){
                                   ?>
                                   <iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?php echo base_url('news/detail/'.$gadget_world['youtube_link']) ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                               <?php }
                               elseif (!empty($gadget_world['server_image'])) {
                                ?>


                                    <img src="<?php echo $gadget_world['server_image'];?>" alt="" />
                               <?php }
                               else{
                                   ?>
                                  <img src="<?php echo base_url('uploads/pictures/banner.jpg') ?>" alt="" />
                               <?php } ?></a>
                                        <div class="item-content content-todays-tv">
                                            <h3><a href="<?php echo base_url('/news/detail/'.$gadget_world['content_id']) ?>"><?php echo $gadget_world['content_title']; ?></a></h3> 
                                    </div>
                                       <?php foreach($gadget_world1 as $row) { ?>   
                                <div class="otg-item newnews">
                                    <div class="ot-material-card news">
                                        <div class="item-content contentsss">
                                            <h3><a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>"><?php echo $row['content_title']; ?></a></h3>
                                           
                                    </div>
                                </div>
                            </div>
                                      <?php }  ?>
                                </div>
                            </div>
                            </div>

                            </div>
                            

                        </div>

                    <!-- END .wrapper -->
                    </div>

                </div>
              </div>
                
                <div class="container">
                <!-- BEGIN .wrapper -->
                <div class="wrapper">
                    
                    <div class="ot-content-block ot-featured-author-block" id="media">
                            <div class="ot-block-article-slider otg otg-items-4 otg-h-30 otg-slider">
                                     <?php foreach($footer_category as $row) { ?> 
                                    <div class="otg-item item slidersss">
                                    <a href="<?php echo base_url('/news/detail/'.$row['content_id']) ?>">




                                        <?php
                               if (!empty($row['youtube_link'])){
                                   ?>
                                   <iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?php echo base_url('news/detail/'.$row['youtube_link']) ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                               <?php }
                               elseif (!empty($row['server_image'])) {
                                ?>


                                    <img src="<?php echo $row['server_image'];?>" alt="" />
                               <?php }
                               else{
                                   ?>
                                  <img src="<?php echo base_url('uploads/pictures/banner.jpg') ?>" alt="" />
                               <?php } ?>
                                        <span class="item-content">
                                            <span class="item-category">
                                            </span>
                                            <strong><?php echo $row['content_title']; ?></strong>
                                            <span class="meta-items">
                                            </span>
                                        </span>
                                    </a>
                                
                        </div>  
                        <?php }  ?>        
                            </div> 
                    </div>

                <!-- END .wrapper -->
                </div>
                
                </div>

            </div>
                
                
            <!-- BEGIN <?php echo base_url('/news/detail/'.$blog['content_id']) ?>content -->
            
            
            
         