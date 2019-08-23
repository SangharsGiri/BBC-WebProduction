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
        <h1>News & Events </h1>
    </div>
    <!--Page Info-->
    <div class="page-info">
        <div class="auto-container clearfix">
            <div class="pull-left">
                <ul class="bread-crumb clearfix">
                    <li><a href="<?php echo base_url(); ?>">Home</a></li>
                    <li>News & Events </li>
                </ul>
            </div>

        </div>
    </div>
    <!--End Page Info-->
</section>
<!--End Page Title-->
<div class="section-padding" style="margin-top: 4%; margin-bottom: 4%">
    <div class="container">
    <div class="row">
        <?php
         date_default_timezone_set('Asia/Dubai');

                $query2 = $this->db->query("SELECT * FROM igc_content WHERE content_type ='EV' AND delete_status ='0' ");
                $result2 = $query2->result_array();



                ?>
<?php
if(!empty( $result2 )){
    ?>
    <?php
    $i=1;
    foreach($result2  as $results ){
        $path = 'uploads/content/';
        ?>
        <div class="col-md-6">
            <div class="well well-sm">
                <div class="row">




                    <div class="col-xs-12 col-md-12 section-box">
                        <h2>
                            <a href="<?php echo  site_url('content/'.$results['content_url']);?>"><?php echo $results['content_page_title'] ?></a>
                        </h2>
                        <p>
                            <?php
                            $ams = substr($results["content_body"] , 0,150);
                            $ams = preg_replace("/<img[^>]+\>/i", "", $ams);
                            echo $ams;
                            ?>

                        </p>
                        <hr />
                        <div class="row rating-desc">
                            <div class="col-md-12">
                                <i class="fa fa-calendar" aria-hidden="true"></i> Date: <?php
                                $currentDate = $results['ev_date'];
                                $newDate = date('d-M-Y', strtotime($currentDate));

                                echo $newDate; ?>
                                |
                                <i class="fa fa-clock-o" aria-hidden="true"></i> Time:  <?php

                                $currentDateTime = $results['ev_time'];
                                $newDateTime = date('h:i A', strtotime($currentDateTime));


                                echo  $newDateTime; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        $i++;

    }
    ?>

  <?php

}
        else {

        ?>

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="error-template">
                            <h1>
                                Oops!</h1>
                            <h2>
                                404 Not Found</h2>
                            <div class="error-details">
                                Sorry, an error has occured, Requested page not found!
                            </div>
                            <div class="error-actions">
                                <a href="<?php echo base_url(); ?>" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-home"></span>
                                    Take Me Home </a><a href="<?php echo base_url(); ?>content/contact" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-envelope"></span> Contact Support </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <?php
        }

?>

        
    </div>
</div>

</div>


<style>
    .error-template {padding: 40px 15px;text-align: center;}
    .error-actions {margin-top:15px;margin-bottom:15px;}
    .error-actions .btn { margin-right:10px; }

    .glyphicon { margin-right:5px;}

.section-box h2 a { font-size:24px; }
.glyphicon-heart { color:#e74c3c;}
.glyphicon-comment { color:#27ae60;}
.separator { padding-right:5px;padding-left:5px; }
.section-box hr {margin-top: 0;margin-bottom: 5px;border: 0;border-top: 1px solid rgb(199, 199, 199);}
</style>



