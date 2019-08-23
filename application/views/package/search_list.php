<section class="product-listing search-list">

    <div class="container">

        <?php
        if(! empty($packages)) {

            ?>

            <div class="row">
                <?php
                foreach ($packages as $row) {
                    ?>
                    <div class="col-md-4">
                        <div class="listing-item">

                                <div class="listing-item-background">
                                    <div class="listing-item-background-image">
                                        <?php
                                        if($row['featuredimg'] !="")
                                        {
                                            $path =  'uploads/package/'.$row['package_id'].'/';

                                            ?>
                                            <img src="<?php echo $path.$row['featuredimg'];?>" alt="product"
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
                                    <div class=" pricetag ">
                                       <div class="price text-white"><span><?php echo $row['code'];?></span><?php echo $row['pprice'];?></div>
                                    </div>
                                </div>
                                <div class="product-list">

                                    <h3><?php echo $row['package_name'] ;?></h3>
                                    <h6 class="days"><?php echo $row['package_duration'];?></h6>
                                    <div class="col-md-4 rating-box">
                                        <?php
                                        $total= $row['rating'];
                                        $remaining = 5 - $total;
                                        for($i=0; $i<$total; $i++)
                                        {
                                            echo '<i class="fa fa-star"></i>';
                                        }
                                        for($j=0; $j<$remaining; $j++)
                                        {

                                            echo '<i class="fa fa-star-o"></i>';
                                        }
                                        ?>
                                    </div>
                                    <div class="col-md-8 bookingbuttons">
                               <span class="lft">
                                   <a href="<?php echo site_url('packages/detail/'.'search'.'/'.$row['package_url']);?>">View Details</a>
                               </span>
                                <span class="rt">
                                   <a href="<?php echo site_url('packages/detail/'.'search'.'/'.$row['package_url']);?>">Book Now</a>
                               </span>
                                    </div>

                                </div>
                        </div>


                    </div>
                    <?php
                }
                ?>

            </div>
            <?php
        }
        else if(empty($packages)){
            if(!empty($search)){
            ?>
             <div class="row">
                <?php
                foreach ($search as $row) {
                    ?>
                    <div class="col-md-4">
                        <div class="listing-item">

                                <div class="listing-item-background">
                                    <div class="listing-item-background-image">
                                        <?php
                                        if($row['featuredimg'] !="")
                                        {
                                            $path =  'uploads/package/'.$row['package_id'].'/';

                                            ?>
                                            <img src="<?php echo $path.$row['featuredimg'];?>" alt="product"
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
                                    <div class=" pricetag ">
                                       <div class="price text-white"><span><?php echo $row['code'];?></span><?php echo $row['pprice'];?></div>
                                    </div>
                                </div>
                                <div class="product-list">

                                    <h3><?php echo $row['package_name'] ;?></h3>
                                    <h6 class="days"><?php echo $row['package_duration'];?></h6>
                                    <div class="col-md-4 rating-box">
                                        <?php
                                        $total= $row['rating'];
                                        $remaining = 5 - $total;
                                        for($i=0; $i<$total; $i++)
                                        {
                                            echo '<i class="fa fa-star"></i>';
                                        }
                                        for($j=0; $j<$remaining; $j++)
                                        {

                                            echo '<i class="fa fa-star-o"></i>';
                                        }
                                        ?>
                                    </div>
                                    <div class="col-md-8 bookingbuttons">
                               <span class="lft">
                                   <a href="<?php echo site_url('packages/detail/'.'search'.'/'.$row['package_url']);?>">View Details</a>
                               </span>
                                <span class="rt">
                                   <a href="<?php echo site_url('packages/detail/'.'search'.'/'.$row['package_url']);?>">Book Now</a>
                               </span>
                                    </div>

                                </div>
                        </div>


                    </div>
                    <?php
                }

                ?>

            </div>
            <?php
        }
    
        else if(empty($search))
        {
            ?>
            <div class="row">
                <div class="col-md-7 col-md-offset-2 errormsg text-center">

                    <h1>Sorry !!!</h1>

                    <p>No Records Found.</p>

                </div>

            </div>
            <?php
        }
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