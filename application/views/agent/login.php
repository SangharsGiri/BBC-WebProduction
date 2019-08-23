<section id="login-reg-top">
    <div class="row top-offer blue-bg">
        <div class="container">
            <div class="section-title">
                <h2>&nbsp;</h2>

            </div>
        </div>
    </div>
</section>
<section class="content">
    <!-- BEGIN: SEARCH SECTION -->
    <div class="row full-width-search">
        <div class="container clear-padding">
            <div class="login-box">



                <div class="col-md-12 login-container">

                    <div class="col-md-9 col-md-offset-1 login-form-box">
                        <?php
                        if(validation_errors())
                        {
                            ?>
                            <div class="alert  alert-danger alert_box">
                                <a href="#" class="close alert_message" data-dismiss="alert" aria-label="close"><i
                                        class="fa fa-times"></i></a>
                                <?php echo validation_errors();?>
                            </div>
                         
                            <?php
                        }
                        ?>

                        <?php if (isset($error)) {


                            ?>
                            <div class="alert alert-danger alert_box">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close"><i
                                        class="fa fa-times"></i></a>
                                <strong>Error!</strong>  <?php echo isset($error)?$error:"" ; ?>.
                            </div>
                            <?php
                        }
                        ?>
                        <?php
                        if ($this->session->flashdata('success') != "") {
                            ?>
                            <div class="alert alert-success alert_box">
                                <a href="#" class="close alert_message" data-dismiss="alert" aria-label="close"><i
                                        class="fa fa-times"></i></a>
                                <strong>Success !</strong> <?php echo $this->session->flashdata('success'); ?>.
                            </div>
                            <?php
                        }
                        ?>
                        <?php
                        if ($this->session->flashdata('error') != "") {
                            ?>
                            <div class="alert alert-danger alert_box">
                                <a href="#" class="close alert_message" data-dismiss="alert" aria-label="close"><i
                                        class="fa fa-times"></i></a>
                                <strong>Success !</strong> <?php echo $this->session->flashdata('error'); ?>.
                            </div>
                            <?php
                        }
                        ?>





                                <form id="login-form" action="<?php echo site_url('login/index');?>" method="post" role="form" style="display: block;">
                                    <div class="col-sm-3">

                                        &nbsp;

                                    </div>
                                    <div class="col-sm-6">
                                        <h3 class="text-left login-heading">Login To Access Your Histroy</h3>
                                        <div class="form-group">
                                            <label class="string optional">Email</label>

                                            <input type="text" name="email" data-validation="required email" class="form-control"  placeholder="Email" value="<?php echo set_value('email');?>">


                                        </div>
                                        <div class="form-group">
                                            <label class="string optional">Password</label>
                                            <input type="password" name="password" data-validation="required confirmation length"  data-validation-length="max50" tabindex="2" class="form-control"  placeholder="Password" value="<?php echo set_value('password');?>">
                                        </div>
                                        <div class="form-group">
                                            <label class="string optional">Retype Password</label>
                                            <input type="password" name="pass_confirmation" data-validation="required length"  data-validation-length="max50" class="form-control" placeholder="Password" value="<?php echo set_value('pass_confirmation');?>">
                                            <span id="retype_error"></span>
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="">
                                                        <a class="forgot-password" data-toggle="modal" data-target="#myModalforget">Forgot Password?</a>


                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn-primary btn btn-login" value="Log In">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">

                                            </div>
                                        </div></div>
                                    <div class="col-sm-3">

                                        &nbsp;

                                    </div>




                                </form>

                        <!-- Modal to rest password -->
                        <form method="post" id="password-reset" action="<?php echo site_url('login/password_rest');?>" role="form">
                            <div class="modal fade" id="myModalforget" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Forgot Password</h4>
                                            <p>Enter email address associated with us.</p>
                                        </div>
                                        <div class="modal-body">

                                            <label for="recipient-name" class="control-label">Email:</label>
                                            <div class="form-group">
                                                <input type="text" name="user_email" class="form-control" data-validation="required email">

                                            </div>


                                        </div>
                                        <div class="modal-footer">

                                            <button type="submit"  class="form-control btn-primary btn btn-login">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>



                    </div>
                </div>
                <!-- END: SEARCH SECTION -->
    </section>

<script>
    $.validate();
</script>
