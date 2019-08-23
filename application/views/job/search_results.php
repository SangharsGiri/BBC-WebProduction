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
</style>

<?php

$logo = $this->db->query("SELECT * FROM igc_pictures WHERE locate ='6' AND delete_status ='0'");
$logors = $logo->result_array();

?>




<!--Page Title-->
<section class="page-title" style="background-image: url(<?php
foreach($logors  as $logos ){

    ?>


    <?php
    $path = 'uploads/pictures/';
    if (file_exists($path.$logos['pictures_image']) && $logos['pictures_image'] !="")
    {
        ?>
        <?php echo $path.$logos['pictures_image'];?>

        <?php
    }

    ?>

    <?php
}
?>);">
    <div class="auto-container">
        <h1>Job Search Result </h1>
    </div>
    <!--Page Info-->
    <div class="page-info">
        <div class="auto-container clearfix">
            <div class="pull-left">
                <ul class="bread-crumb clearfix">
                    <li><a href="<?php echo base_url(); ?>">Home</a></li>
                    <li>Job Search Result </li>
                </ul>
            </div>

        </div>
    </div>
    <!--End Page Info-->
</section>
<!--End Page Title-->


<section class="job-listing-spino">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
               &nbsp;
            </div>
            <div class="col-sm-5">
                <form action="jobs/execute_job_search" method="post" class="search-form">
                <div class="form-group has-feedback">
            		<label for="search" class="sr-only">Search</label>
            		<input type="text" class="form-control" name="search" id="search" placeholder="search">
              		<span class="fa fa-search form-control-feedback"></span>
            	</div>
            </form>
            </div>
            <div class="col-sm-9">
                
                <?php
                if(!empty($job_result))
                {
                    ?>
                    <div class="banner-bg">
                        <?php

                        $i=1;
                        foreach($job_result as $rows) {

                            $actives = (isset($i) && $i == "1") ? "active" : "";
                            ?>

                            <div class="col-sm-12 apply-jobs-match <?php echo $actives;?>">

                                <div class="col-sm-9 job-short-detail">

                                    <a href="#" data-toggle="modal" data-target="#myModal-<?php echo $rows['news_id'];?>">
                                        <h3 class="spanio-job"><?php echo $rows['news_title'];?></h3></a>
                                    <p><strong>Posted On : </strong> <?php echo $rows['created'];?></p>
                                    <p><strong>Job Location : </strong> <?php echo $rows['job_location'];?></p>
                                    <p><strong>No. of Vacancy :</strong><?php echo $rows['no_of_vacancy'];?></p>


                                    <!-- Modal -->
                                    <div id="myModal-<?php echo $rows['news_id'];?>" class="modal fade" role="dialog">
                                        <div class="modal-dialog modal-lg">

                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header job-detail-modal">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h3><?php echo $rows['news_title'];?></h3>
                                                </div>
                                                <div class="modal-body" style="padding: 0px !important;">
                                                    <div class="col-sm-12" style="padding: 10px;">
                                                        <div class="content-body">
                                                            <div class="job-desc" itemprop="description">
                                                                <div class="job_main_detail">

                                                                    <span class="pull-left"><strong>Posted On : </strong> <?php echo $rows['publish_date'];?></span><br>
                                                                    <span class="pull-left"><strong>Expire On : </strong> <?php echo $rows['expire_date'];?></span><br>
                                                                    <p></p>
                                                                    <p>
                                                                        <i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp; <?php echo $rows['job_location'];?>                                </p>

                                                                </div>
                                                                <div class="single_desc">
                                                                    <h4>Job Description</h4>
                                                                    <?php echo $rows['news_content'];?>

                                                                </div>

                                                                <div class="single_desc">
                                                                    <h4>Responsibilities</h4>
                                                                    <?php echo $rows['meta_description'];?>
                                                                </div>

                                                                <div class="single_desc">
                                                                    <h4>Job Requirements</h4>
                                                                    <?php echo $rows['meta_keywords'];?>
                                                                </div>

                                                                <div class="single_desc spino-more-info-job">
                                                                    <div class="job-custom-fields ">
                                                                        <h4>More Information</h4>
                                                                    </div>
                                                                    <?php echo $rows['meta_title'];?>
                                                                </div>

                                                                <div class="single_desc ">
                                                                    <h4>How To Apply</h4>
                                                                    <p style="color: #bd7920;">Before apply on this job, please read all the job description carefully.</p>
                                                                    <form method="post">
                                                                        <a href="<?php echo base_url(); ?>apply_now/form" class="btn btn-success">Apply Now</a>
                                                                    </form>
                                                                    <br>
                                                                    <p class="send_cv_h4">OR, you can send you full CV with us in 'cv@spaniollc.com' <span>While send you CV in email please mention the job position.</span></p>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>






                                </div><!--end .item-->
                                <div class="col-sm-3 basic-salary-job">
                                    <div class="left_price">
                                        <span>Basic Salary</span><br>
                                        <span class="month_salary"><?php echo $rows['basic_salary'];?></span><span class="per_month"> / Month</span><br>
                                        <a href="<?php echo base_url(); ?>apply_now/form" class="btn btn-success btn-xs">Apply Now</a>
                                        <a href="#" data-toggle="modal" class="btn btn-primary btn-xs" data-target="#myModal-<?php echo $rows['news_id'];?>">View Detail</a>
                                    </div>
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




            <div class="col-sm-3">
                    &nbsp;
            </div>
        </div>
    </div>



</section>