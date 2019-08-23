<section id="inner-page-search">
    <div class="row top-offer blue-bg">
        <div class="container">
            <div class="section-title">
                <h3>&nbsp;</h3>

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
                                <strong>Error!</strong>  <?php echo isset($error)?$error:"" ; ?>
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
                                <strong>Success !</strong> <?php echo $this->session->flashdata('success'); ?>
                            </div>
                            <?php
                        }
                        ?>
                        <?php
                        if ($this->session->flashdata('error') != "") {
                            ?>
                            <div class="alert  alert-danger alert_box">
                                <a href="#" class="close alert_message" data-dismiss="alert" aria-label="close"><i
                                        class="fa fa-times"></i></a>
                                <strong>Success !</strong> <?php echo $this->session->flashdata('error'); ?>.
                            </div>
                            <?php
                        }
                        ?>






                        <form id="register-form" action="" method="post" role="form" style="display: block;">
                            <div class="col-sm-12">
                                <h3 class="text-left login-heading">Be a part of Gulf Travel. Register Here</h3>
                            </div>


                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="string optional">Title <i class="red">*</i></label>
                                    <select data-validation="required" id="selectbasic" name="customer_title" class="form-control" >
                                        <option value="Mr">Mr.</option>
                                        <option value="Mrs">Mrs.</option>
                                        <option value="Ms">Ms.</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="string optional">First Name <i class="red">*</i></label>
                                    <input type="text" name="first_name" id="first_name" data-validation="required length custom" data-validation-length="max50" data-validation-regexp="^([\w\s]+)$" class="form-control" placeholder="First Name" value="<?php echo set_value('first_name');?>" >
                                </div>
                                </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="string optional">Middle Name</label>
                                    <input type="text" name="middle_name" id="middle_name" data-validation="length custom" data-validation-optional="true"  data-validation-length="max50" data-validation-regexp="^([\w\s]+)$" class="form-control" value="<?php echo set_value('middle_name');?>" placeholder="Middle Name">
                                </div>
                                </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="string optional">Last Name <i class="red">*</i></label>
                                    <input type="text" name="last_name" data-validation="required length custom" data-validation-length="max50" data-validation-regexp="^([\w\s]+)$" class="form-control" placeholder="Last Name" value="<?php echo set_value('last_name');?>">
                                </div>
                            </div>
                            <div class="col-md-6">

                                <div class="form-group">
                                    <label class="string optional"> Email <i class="red">* </i></label>
                                    <input type="text" name="email"  id="register_email" class="form-control" placeholder="Email Address" value="<?php echo set_value('email');?>" data-validation="required email">

                                </div>
                            </div>


                            <div class="col-md-6">

                                <div class="form-group">
                                    <label class="string optional">Country <i class="red">*</i></label>
                                    <input type="text" name="country" class="form-control" data-validation="country"  id="country-suggestions" placeholder="Your Country" value="<?php echo set_value('country');?>" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="string optional">City <i class="red">*</i></label>
                                    <input type="text" name="city" class="form-control" placeholder="City" data-validation="required length custom" data-validation-length="max150" data-validation-regexp="^([\w\s]+)$" value="<?php echo set_value('city');?>" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="string optional">Phone Number <i class="red">*</i></label>
                                    <input type="text" name="contact_number"  data-validation="required length alphanumeric" data-validation-length="max50"   data-validation-allowing="-+ " value="<?php echo set_value('contact_number');?>" class="form-control"   placeholder="Contact Number" >
                                </div>
                            </div>
                            <div class="col-md-6">

                                <div class="form-group">
                                    <label class="string optional">Password</label>
                                    <input type="password" name="password" data-validation="required length" id="password"  data-validation-length="max50" tabindex="2" class="form-control"  placeholder="Password" value="<?php echo set_value('password');?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="string optional">Retype Password</label>
                                    <input type="password" name="confirm_password" data-validation="required length"  id="confirm-password" data-validation-length="max50" class="form-control" placeholder="Password" value="<?php echo set_value('confirm_password');?>">
                                    <span id="retype_error"></span>
                                </div>
                            </div>




                            <div class="col-md-12">

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6 pull-right">
                                            <input type="submit" name="login-submit" id="register-submit" tabindex="4" class="form-control btn-primary btn btn-login" value="Register Now">
                                        </div>
                                    </div>
                                </div>

                            </div>





                        </form>




                    </div>
                </div>
                <!-- END: SEARCH SECTION -->
</section>


<script type="text/javascript">

    $('#confirm-password').bind("cut copy paste",function(e) {
        e.preventDefault();
    });

</script>
<script>
    $('#register-submit').click(function (e){

        $('#retype_error').text('');
        var password= $('#password').val();
        var confirmpassword= $('#confirm-password').val();

        if(password == confirmpassword)
        {
            e.submit();
        }
        else {

            $('#retype_error').text("Password Confirmation Can't Match");
            $("#retype_error").css("color","red");
            e.preventDefault();
        }


    });

</script>
<script>
    (function($, window) {
        // Add a new validator
        $.formUtils.addValidator({
            name : 'even_number',
            validatorFunction : function(value, $el, config, language, $form) {
                return parseInt(value, 10) % 2 === 0;
            }

        });

        window.applyValidation = function(validateOnBlur, forms, messagePosition, xtraModule) {
            $.validate({

                lang : 'en',
                //sanitizeAll : 'trim', // only used on form C
                // borderColorOnError : 'purple',
                modules : 'security, sanitize, location, sweden, file,' +
                ' uk, brazil' +( xtraModule ? ','+xtraModule:''),
                onModulesLoaded: function() {
                    $('#country-suggestions').suggestCountry();


                },
                onValidate : function($f) {

                    console.log('about to validate form '+$f.attr('id'));

                    var $callbackInput = $('#callback');
                    if( $callbackInput.val() == 1 ) {
                        return {
                            element : $callbackInput,
                            message : 'This validation was made in a callback'
                        };
                    }
                }

            });
        };

        $('#text-area').restrictLength($('#max-len'));


        window.applyValidation(true, '#register-form', 'top');



    })(jQuery, window);
</script>
