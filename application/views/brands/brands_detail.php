<style>


    .item-photo{display:flex;justify-content:center;align-items:center;border-right:1px solid #f6f6f6;}
    .menu-items{list-style-type:none;font-size:11px;display:inline-flex;margin-bottom:0;margin-top:20px}
    .btn-success{width:100%;border-radius:0;}
    .section{width:100%;margin-left:-15px;padding:2px;padding-left:15px;padding-right:15px;background:#f8f9f9}
    .title-price{margin-top:30px;margin-bottom:0;color:black}
    .title-attr{margin-top:0;margin-bottom:0;color:black;}
    .btn-minus{cursor:pointer;font-size:7px;display:flex;align-items:center;padding:5px;padding-left:10px;padding-right:10px;border:1px solid gray;border-radius:2px;border-right:0;}
    .btn-plus{cursor:pointer;font-size:7px;display:flex;align-items:center;padding:5px;padding-left:10px;padding-right:10px;border:1px solid gray;border-radius:2px;border-left:0;}
    div.section > div {width:100%;display:inline-flex;}
    div.section > div > input {margin:0;padding-left:5px;font-size:10px;padding-right:5px;max-width:18%;text-align:center;}
    .attr,.attr2{cursor:pointer;margin-right:5px;height:20px;font-size:10px;padding:2px;border:1px solid gray;border-radius:2px;}
    .attr.active,.attr2.active{ border:1px solid orange;}
    .nav-tabs { border-bottom: 2px solid #DDD; }
    .nav-tabs > li.active > a, .nav-tabs > li.active > a:focus, .nav-tabs > li.active > a:hover { border-width: 0; }
    .nav-tabs > li > a { border: none; color: #666; }
    .nav-tabs > li.active > a, .nav-tabs > li > a:hover { border: none; color: #4285F4 !important; background: transparent; }
    .nav-tabs > li > a::after { content: ""; background: #4285F4; height: 2px; position: absolute; width: 100%; left: 0px; bottom: -1px; transition: all 250ms ease 0s; transform: scale(0); }
    .nav-tabs > li.active > a::after, .nav-tabs > li:hover > a::after { transform: scale(1); }
    .tab-nav > li > a::after { background: #21527d none repeat scroll 0% 0%; color: #fff; }
    .tab-pane { padding: 15px 0; }
    .tab-content{padding:20px}

    .card {background: #FFF none repeat scroll 0% 0%;
        /*box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.3); */
        margin-bottom: 30px; }
    @media (max-width: 426px) {
        .container {margin-top:0px !important;}
        .container > .row{padding:0 !important;}
        .container > .row > .col-xs-12.col-sm-5{
            padding-right:0 ;
        }
        .container > .row > .col-xs-12.col-sm-9 > div > p{
            padding-left:0 !important;
            padding-right:0 !important;
        }
        .container > .row > .col-xs-12.col-sm-9 > div > ul{
            padding-left:10px !important;

        }
        .section{width:104%;}
        .menu-items{padding-left:0;}
    }

</style>


<section class="product-details">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2>
                    </h2>
                <?php if(validation_errors()) {


                    ?>
                    <div class="alert alert-danger alert_box">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close"><i
                                    class="fa fa-times"></i></a>
                        <?php echo validation_errors() ?>.
                    </div>
                    <?php
                }
                ?>

                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-home"></i>
                        </a></li>
                    <?php
                    if($breadcrumb_label !="") {
                        ?>
                        <li><a href="<?php echo site_url('packages/related/'.$breadcrumb_link);?>"><?php echo $breadcrumb_label;?></a></li>
                        <?php
                    }
                    ?>
                    <li class="active"><?php echo $detail['package_duration'];?></li>

                </ol>
            </div>

        </div>
    </div>



</section>

<section >

    <div class="container">
        <div class="row">
<div class="col-sm-6">
    <style>
        /*set a border on the images to prevent shifting*/
        #gallery_01 img{border:2px solid white;}

        /*Change the colour*/
        .active img{border:2px solid #333 !important;}
    </style>
    <script src='themes/zoom/jquery-1.8.3.min.js'></script>
    <script src='themes/zoom/jquery.elevatezoom.js'></script>
    <div class="zoom-wrapper">
        <div class="zoom-left">
            <?php
            $path = 'uploads/package/'.$detail['package_id'].'/';
            ?>

            <img style="border:1px solid #e8e8e6;" id="zoom_09" src="<?php echo $path.$detail['packageimg'];?>" data-zoom-image="<?php echo $path.$detail['packageimg'];?>" width="411">

            <?php
            if(! empty($albums)) {


                $j=0;
                foreach ($albums as $rows) {
                    $actives = ($j == 0) ? "active" : "";
                    $path  =  'uploads/album/'.$rows['path_id'].'/';
                    ?>

            <div id="gallery_09" style="width=" 500pxfloat:left;="" "="">


            <a href="#" style="float:left;" class="elevatezoom-gallery <?php echo $actives; ?>" data-update="" data-image="<?php echo $path.$rows['name'];?>" data-zoom-image="<?php echo $path.$rows['name'];?>">
                <img src="<?php echo $path.$rows['name'];?>" width="80"></a>


        </div>




                    <?php
                    $j++;
                }
            }
            else
            {
                ?>

                <?php
                $path = 'uploads/package/'.$detail['package_id'].'/';
                ?>
                <a href="#" style="float:left;" class="elevatezoom-gallery <?php echo $actives; ?>" data-update="" data-image="<?php echo $path.$detail['packageimg'];?>" data-zoom-image="<?php echo $path.$detail['packageimg'];?>">
                    <img src="<?php echo $path.$rows['name'];?>" width="80"></a>


                <?php
            }
            ?>







    </div>


    <script type="text/javascript">
        $(document).ready(function () {
            $("#zoom_09").elevateZoom({
                gallery : "gallery_09",
                galleryActiveClass: "active"
            });



        });

    </script>
</div>



        </div>
        <div class="col-sm-4" style="border:0px solid gray">
            <!-- Datos del vendedor y titulo del producto -->
            <h3><?php echo $detail['package_duration'];?></h3>
            <h5 style="color:#337ab7">vendido por <a href="#">Samsung</a> · <small style="color:#337ab7">(5054 ventas)</small></h5>

            <!-- Precios -->
            <h6 class="title-price"><small>PRECIO OFERTA</small></h6>
            <!--                <h3 style="margin-top:0px;">U$S 399</h3>-->

            <!-- Detalles especificos del producto -->
            <div class="section">
                <h6 class="title-attr" style="margin-top:15px;" ><small>COLOR</small></h6>
                <div>
                    <div class="attr" style="width:25px;background:#5a5a5a;"></div>
                    <div class="attr" style="width:25px;background:white;"></div>
                </div>
            </div>
            <div class="section" style="padding-bottom:5px;">
                <h6 class="title-attr"><small>CAPACIDAD</small></h6>
                <div>
                    <div class="attr2">16 GB</div>
                    <div class="attr2">32 GB</div>
                </div>
            </div>
            <div class="section" style="padding-bottom:20px;">
                <h6 class="title-attr"><small>CANTIDAD</small></h6>
                <div>
                    <div class="btn-minus"><span class="glyphicon glyphicon-minus"></span></div>
                    <input value="1" />
                    <div class="btn-plus"><span class="glyphicon glyphicon-plus"></span></div>
                </div>
            </div>

            <!-- Botones de compra -->
            <div class="section" style="padding-bottom:20px;">
                <button class="btn btn-success" data-toggle="modal" data-target="#myModal"><span style="margin-right:20px" class="fa fa-shopping-cart" aria-hidden="true"></span> Add To Enquiry</button>
                <h6><a href="#"  ><span class="fa fa-heart-empty" style="cursor:pointer;"></span> Agregar a lista de deseos</a></h6>
            </div>
        </div>
    </div>


    <div class="col-sm-12">

        <div class="card">
            <ul class="nav nav-tabs" role="tablist">
                <?php
                if($detail['tab1'] !="")
                {
                    echo  '  <li role="presentation" class="active"><a href="#b3"   data-toggle="tab">'.$detail['tab1'].'</a></li>';
                }
                if($detail['tab2'] !="")
                {
                    echo '  <li role="presentation" class=""><a href="#b5"   data-toggle="tab">'.$detail['tab2'].'</a></li>';
                }
                if($detail['tab3'] !="")
                {
                    echo ' <li role="presentation" class=""><a href="#b14"  data-toggle="tab">'.$detail['tab3'].'</a></li>';
                }
                if($detail['tab4'] !="")
                {
                    echo '<li role="presentation" class=""><a href="#b34"  data-toggle="tab">'.$detail['tab4'].'</a></li>';
                }
                if($detail['tab5'] !="")
                {
                    echo '<li role="presentation" class=""><a href="#b35" data-toggle="tab">'.$detail['tab5'].'</a></li>';
                }
                ?>






            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <?php
                if($detail['tab1'] !="")
                {
                    ?>
                    <div role="tabpanel" class="tab-pane active"  id="b3">

                        <p>
                            <?php echo $detail['description1'];?>
                        </p>

                    </div>

                    <?php
                }
                if($detail['tab2'] !="")
                {
                    ?>
                    <div role="tabpanel" class="tab-pane"  id="b5">

                        <p><?php echo  $detail['description2'];?></p>

                    </div>

                    <?php
                }

                if($detail['tab3'] !="") {
                    ?>
                    <div role="tabpanel" class="tab-pane"  id="b14">

                        <p> <?php echo  $detail['description3'];?></p>

                    </div>

                    <?php
                }
                if($detail['tab4'] !="") {
                    ?>
                    <div role="tabpanel" class="tab-pane"  id="b34">

                        <p><?php echo $detail['description4']; ?></p>

                    </div>

                    <?php

                }
                if($detail['tab5'] !="") {
                    ?>
                    <div role="tabpanel" class="tab-pane"  id="b35">

                        <p><?php echo $detail['description5']; ?></p>

                    </div>

                    <?php

                }
                ?>

            </div>
        </div>
    </div>
    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">
                    <p>Some text in the modal.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>



</section>
