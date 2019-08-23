<main>
    <div class="breadcrumbs">
        <div class="container-fluid">
            <div class="boxed">
                <ul>
                    <li><a href="<?php echo base_url(); ?>">Home</a></li>
                    <li><a href="<?php echo current_url(); ?>">Search Result</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container-fluid md-overflow-hidden">
        <div class="boxed">
            <div class="listing">

                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="control">


                            <div class="float-block">
                                <div class="btn-list-block">
                                    <a href="#" class="btn-list-view-1 list">
                                        <span class="icon icon-th-list"></span>
                                    </a>
                                    <a href="#" class="btn-list-view-2 grid active">
                                        <span class="icon icon-th"></span>
                                    </a>
                                </div>

                            </div>

                        </div>
                        <div class="row products-wrapper product-grid product-lg-4 product-md-2 product-sm-2 product-xs-2 ">
                            <ul>
                                <?php
                                if($results){
                                ?>
                                <?php

                                foreach ($results as $row)
                                {


                                ?>

                                        <li>
                                            <div class="product"  data-product-id="9">
                                                <div class="substrate"></div>
                                                <div class="product-main-inside">
                                                    <div class="product-image-block">
                                                        <a href="<?php echo site_url('product/detail/'.$row['product_slug']); ?>">
                                                            <img src="<?php echo base_url(); ?>uploads/product/<?php echo $row['product_code']; ?>_1.<?php echo $row['product_image_1']; ?>" alt="<?php echo ($this->crud->get_site_language() == 'ar') ? $row['product_title_ar'] : $row['product_title'] ?>"/>
                                                        </a>




                                                        <div class="curtain-1 curtain">
                                                            <div class="fon"></div>

                                                        </div>

                                                        <a href="#" class="product-button-add icon-add"></a>
                                                    </div>
                                                    <div class="product-info-block">
                                                        <div class="row">
                                                            <div class="col-left">
                                                                <div class="product-description">
                                                                    <a href="<?php echo site_url('product/detail/'.$row['product_slug']); ?>"><?php echo $row['product_title']; ?></a>
                                                                    <?php echo $row['product_features']; ?>
                                                                </div>



                                                                <p class="price">
                                                                    <span class="text">Selling price:</span>
                                                                    <span class="special-price"><?php echo $row['product_price_currency']; ?> <?php echo number_format($row['product_sell_price'],2); ?></span>

                                                                </p>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="product-hidden-block-2">
                                                    <ul class="preview-images-wrapp">
                                                        <?php
                                                        if(!empty($row['product_image_1'])){
                                                            ?>

                                                            <li>
                                                                <img src="<?php echo base_url(); ?>uploads/product/<?php echo $row['product_code']; ?>_1.<?php echo $row['product_image_1']; ?>" alt="preview" data-preview="<?php echo base_url(); ?>uploads/product/<?php echo $row['product_code']; ?>_1.<?php echo $row['product_image_1']; ?>"/>
                                                            </li>

                                                            <?php
                                                        }

                                                        ?>

                                                        <?php
                                                        if(!empty($row['product_image_2'])){
                                                            ?>

                                                            <li>
                                                                <img src="<?php echo base_url(); ?>uploads/product/<?php echo $row['product_code']; ?>_2.<?php echo $row['product_image_1']; ?>" alt="preview" data-preview="<?php echo base_url(); ?>uploads/product/<?php echo $row['product_code']; ?>_2.<?php echo $row['product_image_1']; ?>"/>
                                                            </li>

                                                            <?php

                                                        }
                                                        ?>

                                                        <?php
                                                        if(!empty($row['product_image_3'])){
                                                            ?>

                                                            <li>
                                                                <img src="<?php echo base_url(); ?>uploads/product/<?php echo $row['product_code']; ?>_3.<?php echo $row['product_image_1']; ?>" alt="preview" data-preview="<?php echo base_url(); ?>uploads/product/<?php echo $row['product_code']; ?>_3.<?php echo $row['product_image_1']; ?>"/>
                                                            </li>

                                                            <?php

                                                        }
                                                        ?>

                                                        <?php
                                                        if(!empty($row['product_image_4'])){
                                                            ?>


                                                            <li>
                                                                <img src="<?php echo base_url(); ?>uploads/product/<?php echo $row['product_code']; ?>_4.<?php echo $row['product_image_1']; ?>" alt="preview" data-preview="<?php echo base_url(); ?>uploads/product/<?php echo $row['product_code']; ?>_4.<?php echo $row['product_image_1']; ?>"/>
                                                            </li>

                                                            <?php

                                                        }
                                                        ?>



                                                    </ul>
                                                </div>
                                            </div>
                                        </li>

                                    <?php
                                }

                                    ?>
                                    <?php

                                }else{

                                    ?>
                                    <div class="container">
                                        <style>
                                            .error-template {padding: 40px 15px;text-align: center;}
                                            .error-actions {margin-top:15px;margin-bottom:15px;}
                                            .error-actions .btn { margin-right:10px; }
                                        </style>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="error-template">

                                                    <div class="error-details">
                                                        Sorry, searched result not found!
                                                    </div>
                                                    <div class="error-actions">
                                                        <a href="<?php echo base_url(); ?>" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-home"></span>
                                                            Take Me Home </a><a href="<?php echo base_url(); ?>contact" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-envelope"></span> Contact Support </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <?php
                                }


                                ?>
                            </ul>
                        </div>

                    </div>



                </div>
            </div>
        </div>
    </div>
    </div>
</main>


