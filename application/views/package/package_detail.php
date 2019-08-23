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
    .tab-content{padding-top:10px}

    .card {

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


    .modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    margin-top: 3%;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

</style>

<div class="widget-top-title container container-palette">
    <div class="color-secondary">
        <div class="bg-mask">
            <div class="container">
                <h1><?php echo $detail['package_name'];?></h1>
            </div>
        </div>
    </div>
</div><!-- /.widget geo map-->


<main class="container container-overflow-high-xs">
    <div class="windget-topslideroverview">
        <div class="row section-slim-md">
            <div class="col-md-3">
                <div class="notice-info">
                    <div class="clearfix">
                        <div class="col-xs-12"><strong>Size:</strong> <?php echo $detail['product_size'];?></div>

                    </div>
                </div>
                <div class="widget widget-overview box-fill box">
                    <div class="widget-header vert-line-r-l vert-line-primary">
                        <h2>SPECIFICATION</h2>
                    </div>
                    <div class="widget-content">
                        <?php echo $detail['summary']; ?>


                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <?php
                $path = 'uploads/package/'.$detail['package_id'].'/';
                ?>
                <div class="widget widget-property-slider">
                    <div id="carousel-example-generic" class="carousel slide carousel-slider-preview" data-ride="carousel">
                        <!-- Indicators -->

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <?php
                            if(! empty($albums)) {


                            $j=0;
                            foreach ($albums as $rows) {
                            $actives = ($j == 0) ? "active" : "";
                            $path  =  'uploads/album/'.$rows['path_id'].'/';
                            ?>
                            <div class="item image-cover-div <?php echo $actives; ?>">
                                <img src="<?php echo $path.$rows['name'];?>" alt="" />

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

                            <div class="item image-cover-div active">
                                <img src="<?php echo $path.$detail['featuredimg'];?>" alt="" />

                            </div>




                            <?php
                            $i++;
                        }
                        ?>






                        </div>
                        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="box-fill box section">
        <div class="row">
            <div class="col-md-3 side-left-slim-md">
                <div class="widget widgt-agents widgt-agents-single">
                    <div class="widget-header vert-line-r-l vert-line-primary">
                        <h2>Product Drawing</h2>
                    </div>
                    <div class="widget-content">
                        <a href="<?php echo $path.$detail['packageimg'];?>">
                        <img src="<?php echo $path.$detail['packageimg'];?>" alt="" />
                        </a>
                    </div>
                </div> <!-- /. agents-list -->


            </div>
            <div class="col-md-9">
                <div class="widget widget-property-description">
                    <div class="widget-header property-btns clearfix">
                        <ul class="clearfix sharing-buttons pull-left" style="padding-top: 0;">
                            <li>
                               Product Code: <?php echo $detail['tourcode']; ?>
                            </li>

                        </ul>
                        <div class="pull-right">
                            <?php
                            if($detail['show_front'] == 1){
                                ?>
                                <button class="btn bbtn-custom btn-custom-success" width="50px;"> IN STOCK</button>
                                <?php

                            }else{
                                ?>
                                <button class="btnbtn-custom btn-custom-success"> OUT STOCK</button>

                                <?php

                            }


                            ?>
                            <?php
                             if(!empty($detail['pdfup'])){
                                 ?>

                                 <a href="<?php echo $path.$detail['pdfup']; ?>" class="btn btn-primary" download>Downloads</a>
                            <?php
                             }


                            ?>


                               </div>
                    </div>
                    <div class="widget-content">
                        <p>
                            <?php echo $detail['description']; ?>
                        </p>
                    </div>
                </div>



            </div>
        </div>
    </div>
</main>
















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


            </div>

        </div>
    </div>



</section>

<section >

    <div class="container">



<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <section class="container">
		<div class="container-page">
			<div class="col-md-6">
			<form action="<?php echo site_url('home/product_query');?>" method="post" enctype="multipart/form-data">
				<div class="form-group col-lg-12">
					<label>Company Name</label>
					<input type="hidden" name="product_name" value="<?php echo $detail['package_name'];?>" >

					<input type="hidden" name="product_code" value="<?php echo $detail['tourcode'];?>" >
					<input type="hidden" name="description" value="<?php echo $detail['description']; ?>" >
					<input type="text" name="company_name" class="form-control" id="" value="">
				</div>

				<div class="form-group col-lg-6">
					<label>Your Name</label>
					<input type="text" name="fullname" class="form-control" id="" value="">
				</div>

				<div class="form-group col-lg-6">
					<label>Phone</label>
					<input type="text" name="phone" class="form-control" id="" value="">
				</div>

				<div class="form-group col-lg-6">
					<label>Mobile</label>
					<input type="text" name="mobile" class="form-control" id="" value="">
				</div>

				<div class="form-group col-lg-6">
					<label>Email Address</label>
					<input type="email" name="email" class="form-control" id="" value="">
				</div>

				<div class="form-group col-lg-12">
					<label>Enquiry</label>
					 <textarea class="form-control" name="query" type="textarea" id="message" placeholder="Message" maxlength="140" rows="7"></textarea>
				</div>

				<div class="col-sm-12">
				&nbsp;
				</div>



			<div class="col-sm-6">
			<button type="submit" class="btn btn-primary">Enquire Now</button>




			</div>
			</form>
			</div>

			<div class="col-md-4">
				<h3 class="dark-grey">Summary</h3>
				<h4>Product Name: <span class="product_detail"><?php echo $detail['package_name'];?></span></h4>




            <h5 style="color:#337ab7">Product Code: <span class="product_detail"><?php echo $detail['tourcode'];?></span></h5>

				<p>
					<?php echo $detail['summary']; ?>
				</p>


			</div>
		</div>
	</section>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>







</section>
