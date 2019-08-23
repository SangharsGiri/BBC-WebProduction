<?php
$settings = $this->site_settings_model->get_site_settings();
?>
<!-- Footer -->


<div class="fullWidth backGroundft footer showHide_content" >

    <div class="foooter_space border_bottom"></div>
    <hr>

    <div class="container">

        <div class="row-fluid">
            <div class="footer-top">
                <div class="col-md-9 footer_links3 hide-sm">
                    <?php
                    $parents =  $this->crud_model->get_parent_footer_menu();
                    if(!empty($parents))
                    {

                        $i= 1;


                        foreach ($parents as $parent)
                        {
                            //$md= ($i=="5")?"3":"2";
                            ?>
                            <div class="col-md-4 col-sm-4 col-xs-12">

                                <h4 class="footer-header"><?php echo $parent['content_page_title'];?> </h4>
                                <ul class="footer-links">
                                    <?php
                                    $child_menu =  $this->crud_model->get_parent_footer_sub_menu($parent['content_id']);
                                    if(! empty($child_menu))
                                    {
                                        foreach ($child_menu as $child) {

                                            $active =  (isset($menu) && $menu== $child['content_url'])?"active":"";

                                            ?>
                                            <li class="<?php echo $active;?>">
                                                <?php
                                                if($child['content_page_title'] == "Home")
                                                {
                                                    ?>
                                                    <i class="fa fa-angle-right"></i> <a href="<?php echo  site_url('home');?>">
                                                        <?php echo $child['content_page_title'];?>
                                                    </a>
                                                    <?php
                                                }
                                                else
                                                {
                                                    ?>
                                                    <i class="fa fa-angle-right"></i> <a href="<?php echo  site_url('content/'.$child['content_url']);?>">
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

                                </ul>

                            </div>
                            <?php
                            $i++;
                        }
                    }
                    ?>








                </div>



                <div class="col-md-3 ">
                    <div class="footer_links1">
                        <h5>Contact</h5>
                        <ul>
                            <li><?php echo (isset($settings['contact_details']) && $settings['contact_details'] !="")? $settings['contact_details']:"";?></li>

                        </ul>


                        <h5>Subscribe Us</h5>
                        <form action="<?php echo base_url('home/subscribe'); ?>" method="post">
                            <div class="input-group">
                                <input  name="email" class="form-control" id="email" type="email" placeholder="Your Email" required>

                                <button  type="submit" class="btn btn-primary" style="margin-top: 2%;">SUBSCRIBE NOW</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <hr>
    </div>

    <div class="copy_right">
        <div class="container">
            <div class="col-md-12 footerb text-center">
                <h6> Copyright © 2018. <a target="_blank" href="#">Finaxis Management Consultancy
                    </a> | Developed by <a target="_blank" href="http://almawadahit.ae/">Al Mawadah IT</a> </h6>

            </div>
        </div>
    </div>

</div>

<!-- Footer -->



<!-- Popup overly inline content is placed inside the below popup_inlines class div -->

<div class="popup_inlines">
    <div class="container" id="sample_popup_inline">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <h4>Marena Studio & interactive LTD</h4>
            <p>sunt in culpa qui officia deserunt mollit anim id est laborum.  irure dolor in pvelit esse cillum dolore eu fugiat nulla pariatur.</p>
            <p class="tiny_font">Totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>

<!-- Apply Form -->

<?php

$this->load->view('career');

?>
</div>

<!-- Apply Form -->

<?php

$this->load->view('career');

?>

</div>

