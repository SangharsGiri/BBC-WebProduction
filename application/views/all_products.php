

<?php

$logo = $this->db->query("SELECT * FROM igc_pictures WHERE locate ='6' AND delete_status ='0'");
$logors = $logo->result_array();



?>
<div class="container container-palette">
    <div class="widget-top-title-2 par" style="background: url(<?php
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
        <div class="bg-mask">
            <div class="container">
                <h1>Our Products</h1>
            </div>
        </div>
    </div>
</div><!-- /.widget geo map-->


<div class="container" style="margin-top: 3%;">
<div class="col-sm-3">
    <div class="nav-side-menu">
        <div class="brand">PRODUCT CATEGORIES</div>
        <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>

        <div class="menu-list">

            <ul id="menu-content" class="menu-content collapse out">
                <?php
                $IH_parent =  $this->crud_model->get_parent_header_menu('HM');


                if(!empty($IH_parent)) {
                    $i=1;
                    foreach ($IH_parent as $IHP) {
                        $child_menu =  $this->crud_model->get_parent_header_sub_menu($IHP['category_id']);
                        ?>


                        <li  data-toggle="collapse" data-target="#products<?php echo $i; ?>" class="collapsed active">
                            <a href="<?php echo site_url('product/product_list/'.$IHP['category_url']);?>"> <?php echo $IHP['category_name'];?> <?php  if(! empty($child_menu)){ echo "<span class=\"arrow\"></span>";  } ?></a>
                        </li>
                        <ul class="sub-menu collapse" id="products<?php echo $i; ?>">
                            <?php

                            if(! empty($child_menu))
                            {
                                foreach ($child_menu as $child) {

                                    $active =  (isset($menu) && $menu== $child['category_url'])?"active":"";

                                    ?>
                                    <li>
                                        <?php
                                        if($child['category_name'] == "Home")
                                        {
                                            ?>
                                            <a href="<?php echo  site_url('home');?>">
                                                <?php echo $child['category_name'];?>
                                            </a>
                                            <?php
                                        }
                                        else
                                        {
                                            ?>
                                            <a href="<?php echo site_url('product/product_list/'.$child['category_url']);?>">
                                                <?php echo $child['category_name'];?>
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
                        <?php
                        $i++;
                    }
                }
                ?>


            </ul>
        </div>
    </div>


</div>
<div class="col-sm-9">
    <?php
    if(!empty($results))
    {
        ?>
        <div id="products" class="row list-group">
            <?php

            $i=1;
            foreach($results as $rows) {
                $packages_path  = 'uploads/package/'.$rows['package_id'].'/';
                $actives = (isset($i) && $i == "1") ? "active" : "";
                ?>

                <div class="item  col-sm-4 <?php echo $i; ?>">
                    <div class="thumbnail amkothumbnail">
                        <a href="<?php echo site_url('packages/product_detail/'.$rows['package_url']);?>">
                            <img class="group list-group-image" src="<?php echo $packages_path.$rows['featuredimg'];?>" alt="" />
                        </a>
                        <div class="caption">
                            <h4 class="group inner list-group-item-heading">
                                <?php echo mb_substr($rows["package_name"] , 0,20 ,'UTF-8'); ?></h4>
                            <p><?php echo mb_substr($rows["summary"] , 0,120 ,'UTF-8'); ?></p>
                            <div class="row">
                                <div class="col-sm-8">
                                    <p class="">
                                        <strong>Size:</strong> <?php echo mb_substr($rows["product_size"] , 0,50 ,'UTF-8'); ?></p>
                                </div>
                                <div class="col-sm-4">
                                    <a class="btn btn-success btn-xs" href="<?php echo site_url('packages/product_detail/'.$rows['package_url']);?>">DETAIL</a>
                                </div>
                            </div>
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

</div>





<section class="product-listing">
    <div class="container">
        <nav>


            <?php
            if(!empty($results))
            {
                $total_page = ceil($product_total/$per_page);
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
    </div>
    </div>


</section>
<style>
    .pagination .active {
        background-color:#2E608A;
        color:#FFF;
    }
    .pagination li a { color: #000000; }

</style>
