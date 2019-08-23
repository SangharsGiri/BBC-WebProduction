   <!-- BEGIN #footer -->
            <footer id="footer">
            <div class="row">
                <div class="col-md-12">
                <div class="wrapper">
                    <div class="footer-classic">
                        <div class="col-md-5">
                        <div class="shortcode-content footer-contacts">
                            <h2 class="aajako">Aajako Khabar</h2>
                                            <div class="img-with-no-margin">
                                                <img src="images/photos/image-44.jpg" alt="" />
                                            </div>
                                            <ul class="fa-ul">
                                                <li>
                                                    <?php if(!empty($contact_number['contact_number'])){?>
                                                          <i class="fa-li fa fa-phone"></i><?php echo $contact_number['contact_number'];?>
                                                    <?php } ?>

                                                </li>
                                                <li><?php if(!empty($contact_number['feedback_email'])){?>
                                                         <i class="fa-li fa fa-envelope"></i><?php echo $contact_number['feedback_email'];?>
                                                    <?php } ?></li>
                                                <li>
                                                    <?php if(!empty($contact_number['contact_address'])){?>
                                                    <i class="fa-li fa fa-map-marker"></i><?php echo $contact_number['contact_address'];?>
                                                    <?php } ?></li>
                                            </ul>
                                        </div>
                    </div>
                    <div class="col-md-3">
                        <h2 class="cate-colour">Categories</h2>
                         <nav class="footer-navsss">
                            <ul class="footer-navss">
                                <li class="footer-navssss"><a href="<?php echo base_url(); ?>">Homepage</a></li>
                                <?php
                       $parents =  $this->crud_model->get_parent_category_menu();



                       if(!empty($parents))
                       {
                           $i= 1;


                           foreach ($parents as $parent)
                           {
                               //$md= ($i=="5")?"3":"2";
                               ?>

                       <li class="footer-navssss">

                           <a href="<?php echo base_url('category/article/'.$parent['category_url']); ?>" ><?php echo $parent['category_name']; ?></a>

                           <?php
                           $child_menu =  $this->crud_model->get_parent_category_sub_menu($parent['category_id']); 
                           if(! empty($child_menu))
                           {
                           ?>

                               <ul class="footer-navss-child">
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
                       <li class="footer-navssss"><a href="pages/contact">Contact us</a></li>
                            </ul>
                        </nav>
                    </div> 
                        <div class="col-md-4">
                  <div style="width: 100%"><iframe width="100%" height="240" src="https://maps.google.com/maps?width=100%&amp;height=440&amp;hl=en&amp;q=Adwait%20Marg%2C%20Bagbazar%2C%20Kathmandu%2C%20Nepal+(My%20Business%20Name)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/map-my-route/">Map a route</a></iframe></div>
                </div> 
                    </div>
                </div>
                </div>
            </div>
            <div class="footer-copyright left">
                            
                            <div class="footer-copyright-logo">
                                <a href="#"><img src="images/logo.png" alt="" /></a>
                            </div>
                            <div class="footer-copyright-content">
                              <div class="left-fttera"><p>&copy; 2019 Copyright <a target="_blank" href="http://aajakokhabar.com.np/">Aaja Ko Khabar.</a>All rights reserved</p></div>
                                <div class="right-fttera"><p>.Powered by <a target="_blank" href="https://www.nectardigit.com/">Nectar Digit</a></p></div>
                            </div>
                        </div>
                  </main>
            <!-- END #footer -->
            </footer>
              

           <!--  <div class="ot-follow-share">
                <a href="#" class="ot-color-facebook" data-h-title="Facebook"><i class="fa fa-facebook"></i></a>
                <a href="#" class="ot-color-twitter" data-h-title="Twitter"><i class="fa fa-twitter"></i></a>
                <a href="#" class="ot-color-google-plus" data-h-title="Google+"><i class="fa fa-google-plus"></i></a>
                <a href="#" class="ot-color-rss" data-h-title="RSS Feed"><i class="fa fa-rss"></i></a>
            </div> -->
            
        <!-- END .boxed -->
        

        <!-- Scripts -->
       <script type="text/javascript" src="themes/jscript/jquery-latest.min.js"></script>
   <script type="text/javascript" src="themes/jscript/owl.carousel.min.js"></script>
   <script type="text/javascript" src="themes/jscript/material.min.js"></script>
   <script type="text/javascript" src="themes/jscript/otmenu.min.js"></script>
   <script type="text/javascript" src="themes/jscript/shortcode-scripts.min.js"></script>
   <script type="text/javascript" src="themes/jscript/theme-scripts.min.js"></script>
   <script type="text/javascript" src="themes/jscript/ot-lightbox.min.js"></script>
   <!-- Demo Only -->
   <script type="text/javascript" src="themes/jscript/_ot-demo.min.js"></script> <!-- Demo Only -->
        


    <!-- END body -->
    <!-- <div class="demo-settings">
        <a href="#" class="demo-button">
            <img src="images/demo/demo-icon.png" alt="">
            <span>Settings</span>
        </a>
        <div class="demo-options">
            <div class="title">
                <span>Orange themes/s</span>
                <strong>Demo Style Switcher</strong>
            </div>
            <div id="demo-s-wrap">
                <div class="ot-settings-reset">
                    
                </div>
                <a href="#" rel="ot-demo-original-panel-0" class="option">
                    <span>Predefined Color Scheme</span>
                </a>
                <div class="option-box" rel="ot-demo-original-panel-0">
                    <div alt="color-options">
                        <p>These are just a few color presets, in reality there are unlimited color possibilities</p>
                        <a href="#" class="color-bulb active" rel="#256dc1" style="background-color: #256dc1;">&nbsp;
                        </a>
                        <a href="#" class="color-bulb" rel="#94be30" style="background-color: #94be30;">&nbsp;
                        </a>
                        <a href="#" class="color-bulb" rel="#4e4e4e" style="background-color: #4e4e4e;">&nbsp;</a>
                        <a href="#" class="color-bulb" rel="#6bb7e2" style="background-color: #6bb7e2;">&nbsp;
                        </a>
                        <a href="#" class="color-bulb" rel="#e95f5f" style="background-color: #e95f5f;">&nbsp;
                        </a>
                        <a href="#" class="color-bulb" rel="#6856C9" style="background-color: #6856C9;">&nbsp;
                        </a>
                        <a href="#" class="color-bulb" rel="#F98639" style="background-color: #F98639;">&nbsp;
                        </a>
                        <a href="#" class="color-bulb" rel="#FD77C0" style="background-color: #FD77C0;">&nbsp;
                        </a>
                    </div>
                </div>
                <div class="option-box" rel="ot-demo-original-panel-0">
                    <p>Turns on dark color scheme instead of light one
                    </p>

                    <div id="ot-demo-item-id-2" alt="header-box">
                        <a href="javascript:void(0);" class="option-bulb" data-type="read-later">
                            <span>Dark color scheme</span>
                            <i>
                                
                            </i>
                        </a>
                    </div>
                </div>
                <a href="#" rel="ot-demo-original-panel-1" class="option">
                    <span>Google Fonts (630+)
                    </span>
                </a>
                <div class="option-box" rel="ot-demo-original-panel-1">
                    <div alt="font-options">
                        <p>These are just a few fonts, in total there are 630+
                        </p>
                        <div id="ot-demo-item-id-3" class="ot-demo-selector" data-demo-address="headers">
                            <div class="ot-demo-selector-preview" style="font-family: &quot;Open Sans&quot;, sans-serif;">Titles &amp; Menu
                            </div>
                            <div class="ot-demo-selector-block" data-current-font="Open Sans">
                                <div class="ot-demo-selector-wrap">
                                    <span style="font-family: 'Open Sans'" class="current">Open Sans (Default)
                                    </span>
                                    <span style="font-family: 'Roboto'">Roboto
                                    </span>
                                    <span style="font-family: 'Lato'">Lato
                                    </span>
                                    <span style="font-family: 'Source Sans Pro'">Source Sans Pro
                                    </span>
                                    <span style="font-family: 'Raleway'">Raleway
                                    </span>
                                    <span style="font-family: 'Playfair Display'">Playfair Display
                                    </span>
                                    <span style="font-family: 'Josefin Sans'">Josefin Sans
                                    </span>
                                    <span style="font-family: 'Orbitron'">Orbitron
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="option-box" rel="ot-demo-original-panel-1">
                    <div alt="font-options">
                        <p>
                            
                        </p>
                        <div id="ot-demo-item-id-4" class="ot-demo-selector" data-demo-address="headers">
                            <div class="ot-demo-selector-preview" style="font-family: &quot;Open Sans&quot;, sans-serif;">Paragraph text
                            </div>
                            <div class="ot-demo-selector-block" data-current-font="Open Sans">
                                <div class="ot-demo-selector-wrap">
                                    <span style="font-family: 'Open Sans'" class="current">Open Sans (Default)
                                    </span>
                                    <span style="font-family: 'Roboto'">Roboto
                                    </span>
                                    <span style="font-family: 'Lato'">Lato
                                    </span>
                                    <span style="font-family: 'Source Sans Pro'">Source Sans Pro
                                    </span>
                                    <span style="font-family: 'Raleway'">Raleway
                                    </span>
                                    <span style="font-family: 'Playfair Display'">Playfair Display
                                    </span>
                                    <span style="font-family: 'Josefin Sans'">Josefin Sans
                                    </span>
                                    <span style="font-family: 'Orbitron'">Orbitron
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="#" rel="ot-demo-original-panel-2" class="option">
                    <span>Main Settings
                    </span>
                </a>
                <div class="option-box" rel="ot-demo-original-panel-2">
                    <p>Control whether main menu will stay on top or not.
                    </p>
                    <div id="ot-demo-item-id-5" alt="header-box">
                        <a href="javascript:void(0);" class="option-bulb active" data-type="boxed-layout">
                            <span>Menu follow on scroll
                            </span>
                            <i>
                                
                            </i>
                        </a>
                    </div>
                </div>
                <div class="option-box" rel="ot-demo-original-panel-2">
                    <p>
                        
                    </p>
                    <div id="ot-demo-item-id-6" alt="header-box">
                        <a href="javascript:void(0);" class="option-bulb" data-type="read-later">
                            <span>Show read panel line
                            </span>
                            <i>
                                
                            </i>
                        </a>
                    </div>
                </div>
                <div class="option-box" rel="ot-demo-original-panel-2">
                    <p>
                        
                    </p>
                    <div id="ot-demo-item-id-7" alt="header-box">
                        <a href="javascript:void(0);" class="option-bulb active" data-type="read-later">
                            <span>Image hover buttons
                            </span>
                            <i>
                                
                            </i>
                        </a>
                    </div>
                </div>
                <a href="#" rel="ot-demo-original-panel-3" class="option">
                    <span>Background Textures
                    </span>
                </a>
                <div class="option-box" rel="ot-demo-original-panel-3">
                    <p>Note: Background textures works only on boxed layout!
                    </p>
                    <div id="ot-demo-item-id-8" alt="header-box">
                        <a href="javascript:void(0);" class="option-bulb" data-type="menu-follow">
                            <span>Boxed Layout
                            </span>
                            <i>
                                
                            </i>
                        </a>
                    </div>
                </div>
                <div class="option-box" rel="ot-demo-original-panel-3">
                    <div alt="color-options">
                        <p>You can also upload custom one
                        </p>
                        <a href="#" class="color-bulb ot-big-bulb active" rel="#f8f8f8" style="background: #f8f8f8;">&nbsp;
                        </a>
                        <a href="#" class="color-bulb ot-big-bulb" rel="url(images/background-texture-1.jpg)" style="background-image: url(images/background-texture-1.jpg);">&nbsp;
                        </a>
                        <a href="#" class="color-bulb ot-big-bulb" rel="url(images/background-texture-2.jpg)" style="background-image: url(images/background-texture-2.jpg);">&nbsp;
                        </a>
                        <a href="#" class="color-bulb ot-big-bulb" rel="url(images/background-texture-3.jpg)" style="background-image: url(images/background-texture-3.jpg);">&nbsp;
                        </a>
                        <a href="#" class="color-bulb ot-big-bulb" rel="url(images/background-texture-4.jpg)" style="background-image: url(images/background-texture-4.jpg);">&nbsp;
                        </a>
                        <a href="#" class="color-bulb ot-big-bulb" rel="url(images/background-texture-5.jpg)" style="background-image: url(images/background-texture-5.jpg);">&nbsp;
                        </a>
                        <a href="#" class="color-bulb ot-big-bulb" rel="url(images/background-photo-1.jpg) fixed 100%" style="background: url(images/background-photo-1.jpg) fixed 100%;">&nbsp;
                        </a>
                        <a href="#" class="color-bulb ot-big-bulb" rel="url(images/background-photo-2.jpg) fixed 100%" style="background: url(images/background-photo-2.jpg) fixed 100%;">&nbsp;</a></div></div></div><div class="ot-demo-set-foot">
                            <a href="http://themes/forest.net/item/portus-responsive-blog-magazine-html-themes//13552039?ref=orange-themes/s" target="_blank" class="ot-d-buy-button">Buy Portus
                            </a>
                            <a href="#" class="ot-d-reset-button">Reset defaults
                            </a>
                        </div>
                    </div>
    </div> -->
                <script type="text/javascript">
                $(document).ready(function() {
  $('#media').carousel({
    pause: true,
    interval: false,
  });
});
</script>

    </body>
<!-- END html -->

<!-- Mirrored from www.orange-themes/s.net/demo/benavente/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 Sep 2018 10:37:00 GMT -->
</html>