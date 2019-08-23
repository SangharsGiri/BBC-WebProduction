<section id="login-reg-top">
    <div class="row top-offer blue-bg">
        <div class="container">
            <div class="section-title">
                <div class="col-sm-12 content-title">
                    <h2>
                    fsdfsdfsf   <br ></h2>
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
                        <h2 class="widget-title woocommerce-title">BY CATEGORIES</h2>

                        <aside class="widget woocommerce widget_product_categories">

                            <ul class="product-categories">
                                <?php
                                $path = 'uploads/package_category/';
                                foreach ($categories as $row) {
                                    ?>
                                    <li class="cat-item"><a href="<?php echo site_url('packages/index/'. $row['category_url']);?>"><?php echo $row['category_name'];?></a></li>





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
                                $path = 'uploads/package_category/';
                                foreach ($categories as $row) {
                                    ?>
                                    <li class="item col-md-4 wide-first">
                                        <div class="item-inner">
                                            <div class="item-img">
                                                <div class="item-img-info">
                                                    <div class="pimg">
                                                        <a href="<?php echo site_url('packages/index/'. $row['category_url']);?>" class="product-image">
                                                            <img src="<?php echo $path.$row['featured_img'];?>" class="attachment-shop_catalog" alt="Images">
                                                        </a>
                                                    </div> <!-- /.pimg -->

                                                    <div class="box-hover">
                                                        <ul class="add-to-links">

                                                            <li><a class="add_to_cart_button" href="<?php echo site_url('packages/index/'. $row['category_url']);?>" title="Add card"><i class="fa fa-eye"></i></a></li>

                                                        </ul>
                                                    </div> <!-- /.box-hover -->
                                                </div> <!-- /.item-img-info -->
                                            </div> <!-- /.item-img -->

                                            <div class="item-info">
                                                <div class="info-inner">
                                                    <div class="item-title">
                                                        <a href="<?php echo site_url('packages/index/'. $row['category_url']);?>"><?php echo $row['category_name'];?></a>
                                                    </div> <!-- /.item-title -->
                                                    <div class="item-content">
                                                        <div class="item-price">
                                                            <div class="price-box">
                                                                <ins><span class="amount"><?php
                                                                        $count =  $this->package->count_active_packages($row['category_id']);

                                                                        ?>
                                                                        <?php echo (isset($count) && $count !="")? $count:"";?> Products</span></ins>
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
                <?php echo (isset($description) && $description !="")? $description:"";?>
              </div>
        </div>
    </div>

</section>

<section class="category-listing product-listing">

    <div class="container">




    </div>


</section>