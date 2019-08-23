<?php
$settings = $this->site_settings_model->get_site_settings();
?>
<style>
.search-form { padding-top: 6%; }
    .search-form .form-group {
  float: right !important;
  transition: all 0.35s, border-radius 0s;
  width: 32px;
  height: 32px;
  background-color: #fff;
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
  border-radius: 25px;
  border: 1px solid #ccc;
}
.search-form .form-group input.form-control {
  padding-right: 20px;
  border: 0 none;
  background: transparent;
  box-shadow: none;
  display:block;
}
.search-form .form-group input.form-control::-webkit-input-placeholder {
  display: none;
}
.search-form .form-group input.form-control:-moz-placeholder {
  /* Firefox 18- */
  display: none;
}
.search-form .form-group input.form-control::-moz-placeholder {
  /* Firefox 19+ */
  display: none;
}
.search-form .form-group input.form-control:-ms-input-placeholder {
  display: none;
}
.search-form .form-group:hover,
.search-form .form-group.hover {
  width: 100%;
  border-radius: 4px 25px 25px 4px;
}
.search-form .form-group span.form-control-feedback {
  position: absolute;
  top: -1px;
  right: -2px;
  z-index: 2;
  display: block;
  width: 34px;
  height: 34px;
  line-height: 34px;
  text-align: center;
  color: #3596e0;
  left: initial;
  font-size: 14px;
}

    .accordion-heading { background-color: #eeeeee; padding: 15px; margin-bottom: 12px; }
</style>
<?php

$professional = $this->db->query("SELECT * FROM igc_pictures WHERE locate ='2' AND delete_status ='0'");
$professionals = $professional->result_array();

?>
<section>
    <div class="widget-top-title-2 par" style="background: url(<?php
    foreach($professionals  as $rows ){

        ?>


        <?php
        $path = 'uploads/pictures/';
        if (file_exists($path.$rows['pictures_image']) && $rows['pictures_image'] !="")
        {
            ?>
            <?php echo base_url().$path.$rows['pictures_image'];?>

            <?php
        }

        ?>

        <?php
    }
    ?>); padding-top: 100px; padding-bottom: 100px;">
        <div class="bg-mask">
            <div class="container">
                <h2>Current Openings</h2>
            </div>
        </div>
    </div>
</section><!-- /.widget geo map-->
<div class="bodyContainer">
    <div class="mainContent" >



        <div data-id="!opning" class="contentWrapper autoPosition portfolioPage m-Scrollbar backGround" >

            <div class="top_space"> </div>

            <div class="fullWidth removePadding" >
                <div class="container">
                    <hr class="space_mini">
                    <hr class="space_mini">
                    <div class="row"  data-animated-time="0" data-animated-in="animated fadeInUp" data-animated-innerContent="yes" >
                        <div class="col-md-12 textAlignCenter">
                            <h3 class="upperCase">Current Openings</h3>
                        </div>
                    </div>

                    <div class="top_space"> </div>
                    <hr>

                    <!-- Portfolio Category Navigation -->
                    <div id="accordion-first" class="clearfix" data-animated-time="10" data-animated-in="animated fadeInUp" data-animated-innerContent="yes" >
                        <div class="accordion" id="accordion2">
                            <?php
                            if(!empty($jobs))
                            {
                            ?>

                                <?php

                                $i=1;
                                foreach($jobs as $rows) {

                                $actives = (isset($i) && $i == "1") ? "active" : "";
                                ?>



                            <div class="accordion-group">
                                <div class="accordion-heading">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion<?php echo $i; ?>" href="#collapse<?php echo $i; ?>">
                                        <i class="fa fa-plus"></i> <?php echo $rows['news_title']; ?> </a>

                                    <a href="<?php echo base_url('apply_now'); ?>" >
                                        <span class="link_desc"></span>
                                        <button type="button" class="btn btn-warning pull-right btn-sm top myapplication" data-name="Business Development">Apply</button>
                                    </a>
                                </div>
                                <div style="height: 0px;" id="collapse<?php echo $i; ?>" class="accordion-body collapse">

                                    <div class="accordion-inner">
                                        <hr>
                                        <h4>Location: <?php echo $rows['job_location'];?></h4>
                                        <h4>Job brief: </h4>
                                        <p><?php echo $rows['news_content'];?> </p>
                                        <h4>Key responsibilities: </h4>
                                        <p>
                                            <?php echo $rows['meta_description'];?>
                                        </p>
                                        <h4>Requirements: </h4>
                                        <p>
                                            <?php echo $rows['meta_keywords'];?>
                                        </p>
                                        <h4>More Information: </h4>
                                        <p>
                                            <?php echo $rows['meta_title'];?>
                                        </p>
                                        <h4>How to Apply: </h4>
                                        <p style="color: #bd7920;">Before apply on this job, please read all the job description carefully.</p>
                                        <form method="post">
                                            <a href="<?php echo base_url(); ?>apply_now/form/<?php echo $rows['news_id']; ?>" class="btn btn-success">Apply Now</a>
                                        </form>
                                        <br>
                                        <p class="send_cv_h4">OR, you can send you full CV with us in '<?php echo (isset($settings['feedback_email']) && $settings['feedback_email'] !="")? $settings['feedback_email']:"";?>' <span>While send you CV in email please mention the job position.</span></p>

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



                        </div><!-- end accordion -->
                    </div>

                    <div class="top_space"> </div>
                    <hr>


                </div>
            </div>
            <hr class="separator_max">
        </div>






<!--Page Title-->



    </div>