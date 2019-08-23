<section id="inner-page-search">
    <div class="row top-offer blue-bg">
        <div class="container">
            <div class="section-title">
                <h2><?php echo $name;?>  Booking</h2>

            </div>
        </div>
    </div>

</section>

<section class="content">
    <div class="container">
        <div class="row">

            <div class="col-lg-12">


                <?php if (isset($error)) {

                    ?>
                    <div class="alert alert-danger alert_box">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close"><i
                                class="fa fa-times"></i></a>
                        <strong>Error!</strong>  <?php  echo $error;?>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
        <div class="row">

            <div class="col-md-9 ">

                <div class="main-container">

                    <h3 class="trek-title">
                        Choose Booking Options
                    </h3>
                </div>


            </div>


        </div>
        <div class="row">


            <div class="col-md-9">

                <div class="book_con">
                    <form method="post" name="package_frm" id="package_frm" action="">



                       <div class="row form-group">
                            <div class="col-md-6">
                                <input type="radio"  value="register" name="booking_type"  required="required"> &nbsp;   &nbsp;  <label class=" control-label">Booking As Register </label></div>
                            <div class="col-md-6">



                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-6">
                                <input type="radio"   value="guest" name="booking_type" required="required"> &nbsp; &nbsp;<label class=" control-label">Booking As Guest </label>  </div>
                            <div class="col-md-6">



                            </div>
                        </div>





                        <div class="row form-group">

                            <div class="col-md-5 col-md-offset-4 col-sm-5 col-xs-12 clear-padding">
                                <button type="submit" class="subscribe hovereffect text-white">Continue Booking</button>
                            </div>


                        </div>

                    </form>
                </div>

            </div></div>


    </div>


</section>
