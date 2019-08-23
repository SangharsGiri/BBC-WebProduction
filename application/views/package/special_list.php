<section id="login-reg-top">
    <div class="row top-offer blue-bg">
        <div class="container">
            <div class="section-title">
                <div class="col-sm-12 content-title">
                    <h2>
                        &nbsp;</h2>
                </div>


            </div>
        </div>
    </div>
</section>
<div id="content" class="post-wrap product-page  sidebar-left flat-reset">
    <div class="container content-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div id="secondary" class="widget-area">
                    <div class="sidebar_shop_sidebar">
                        <h2 class="widget-title woocommerce-title">BY PRODUCTS</h2>

                        <aside class="widget woocommerce widget_product_categories">

                            <ul class="product-categories">

                                <?php
                                foreach ($packages as $row) {
                                    ?>
                                    <li class="cat-item"><a href="<?php echo site_url('packages/detail/'.$slug.'/'.$row['package_url']);?>"><?php echo $row['package_duration'] ;?></a></li>


                                    <?php
                                }
                                ?>




                            </ul>
                        </aside> <!-- /.widget_product_categories -->






                    </div> <!-- /.sidebar_shop_sidebar -->






                </div> <!-- /#secondary -->

                <div id="primary" class="content-area ">


                    <main class="post-wrap">
                        <ul class="products-grid flat-reset">
                            <?php
                            if(! empty($packages)) {


                                ?>

                                <div class="row">
                                    <?php
                                    foreach ($packages as $row) {
                                        ?>

                                        <li class="item col-md-4 wide-first">
                                            <div class="item-inner">
                                                <div class="item-img">
                                                    <div class="item-img-info">
                                                        <div class="pimg">
                                                            <?php
                                                            if($row['featuredimg'] !="")
                                                            {
                                                                $path =  'uploads/package/'.$row['package_id'].'/';

                                                                ?>
                                                                <img src="<?php echo $path.$row['featuredimg'];?>" width="100%" alt="dsadas" />
                                                                <?php
                                                            }
                                                            else
                                                            {
                                                                echo '<img src="themes/images/packagecategory/package1.jpg" width="100%" alt="dsadas" />';
                                                            }
                                                            ?>

                                                        </div> <!-- /.pimg -->

                                                        <div class="box-hover">
                                                            <ul class="add-to-links">

                                                                <li><a class="add_to_cart_button" href="<?php echo site_url('packages/detail/'.$slug.'/'.$row['package_url']);?>" title="Read More"><i class="fa fa-eye"></i></a></li>

                                                            </ul>
                                                        </div> <!-- /.box-hover -->
                                                    </div> <!-- /.item-img-info -->
                                                </div> <!-- /.item-img -->

                                                <div class="item-info">
                                                    <div class="info-inner">
                                                        <div class="item-title">
                                                            <a href="<?php echo site_url('packages/detail/'.$slug.'/'.$row['package_url']);?>"><?php echo $row['package_duration'];?></a>
                                                        </div> <!-- /.item-title -->

                                                        <div class="item-content">
                                                            <div class="item-price">
                                                                <div class="price-box">
                                                                    <ins><span class="amount"><?php echo $row['tourcode'] ;?></span></ins>
                                                                </div>
                                                            </div> <!-- /.item-price -->


                                                        </div> <!-- /.item-content -->
                                                    </div> <!-- /.info-inner -->
                                                </div> <!-- /.item-info -->
                                            </div> <!-- /.item-inner -->
                                        </li>









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

                            <nav>


                                <?php
                                if(! empty($packages))
                                {
                                    $total_page = ceil($package_total/$per_page);
                                    if($total_page > 1)
                                    {
                                        ?>
                                        <ul class="pagination">
                                            <?php for($i = 1; $i <= $total_page; $i++) { ?>
                                                <li><a href="<?php echo $base_url."/" ?><?php echo $i ?>" class="links <?php echo ($i==$current_page)?"":"in"?>active"><?php echo $i ?></a></li>
                                                <?php
                                            }
                                            ?>
                                        </ul>
                                        <?php
                                    }
                                }
                                ?>

                            </nav>









                        </ul>
                    </main> <!-- /.post-wrap -->



                </div> <!-- /#primary -->
            </div>
        </div>
    </div>
</div>









<section class="search-pg">
    <div class="hero-container bg-black">
        <div class="container">
            <div class="col-md-12 hero-header">
                <p>
                <?php echo (isset($description) && $description !="")? $description:"";?>
                </p></div>


        </div>
    </div>

</section>
<section class="product-listing">

    <div class="container">


    </div>


</section>
<style>
    .pagination .active {
        background-color:#2E608A;
        color:#FFF;
    }

</style>