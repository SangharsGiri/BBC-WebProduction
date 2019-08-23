<?php

$logo = $this->db->query("SELECT * FROM igc_pictures WHERE locate ='6' AND delete_status ='0'");
$logors = $logo->result_array();

?>
<!-- Inner Intro -->
<div class="inner-intro inner-intro-bg" style="background-image: url(<?php
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
?>)">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="page-title">Gallery</h3>
                <ul class="breadcrumb breadcrumb-area">
                    <li><a href="<?php echo base_url(); ?>">Home</a></li>
                    <li class="active">Gallery</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="section-padding">
    <div class="container">

        <div class="row">
            <div class="margin-balance">


                <div class="grid filter-grid collum-3 flexo-gallery">
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

                    <div class="grid-item apps">
                        <a href="<?php echo $path.$rows['portfolio_image'];?>" class="image-popup-vertical-fit">
                            <img src="<?php echo $path.$rows['portfolio_image'];?>" class="img-responsive" alt="FlexO Image Gallery">
                            <div class="overlay">
                                <i class="fa fa-search-plus"></i>
                            </div>
                        </a>
                    </div>
                        <?php
                        $i++;
                    }
                        ?>





                        <?php
                    }
                    ?>



                </div>
            </div>
        </div>
    </div>
</div>




