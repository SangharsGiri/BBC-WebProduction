<section id="login-reg-top">
    <div class="row top-offer blue-bg">
        <div class="container">
            <div class="col-sm-12 content-title">
                <h2>
                    <?php echo $sub_title;?></h2>
            </div>


        </div>
    </div>
    </div>
</section>


<section class="product-listing">

    <div class="container">

        <?php
        if(! empty($records)) {

            $path =  'uploads/activity/'.'/';
            ?>

            <div class="row gulf-travel-adv">
                <?php
                foreach ($records as $row) {
                    ?>
                    <div class="col-sm-3">
                        <div class="listing-item">
                            <a href="<?php echo site_url('adventure/detail/'.$row['activity_url']);?>">
                                <div class="listing-item-background">
                                    <div class="listing-item-background-image">
                                        <?php
                                        if($row['featured_img'] !="")
                                        {


                                            ?>
                                            <img src="<?php echo $path.$row['featured_img'];?>" alt="adeveture"
                                                 class="scale-height">
                                            <?php
                                        }
                                        else
                                        {
                                            echo '<img src="themes/images/packagecategory/package1.jpg" alt="product"
                                                 class="scale-height">';
                                        }
                                        ?>
                                    </div>
                                    <div class="background-overlay opacity-20"></div>
                                </div>
                                <div class="listing-item-content with-background">
                                    <div class="listing-item-content-inner">
                                        <h3><?php echo $row['activity_name'];?></h3>

                                        <div class="button">

                                        </div>

                                    </div>
                                </div>
                            </a></div>


                    </div>
                    <?php
                }
                ?>

            </div>
            <?php
        }
        else
        {
            ?>
            <div class="row">
                <div class="col-md-7 col-md-offset-2 errormsg text-center">

                    <h1>Sorry !!!</h1>

                    <p>No Records Founds.</p>

                    <img src="themes/images/error.png">
                    <a href="#" class="btn btn-primary" >Back To Home</a>




                </div>

            </div>
            <?php
        }
        ?>

       
    </div>


</section>
<style>
    .pagination .active {
        background-color:#2E608A;
        color:#FFF;
    }

</style>