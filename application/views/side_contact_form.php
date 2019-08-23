<?php
$settings = $this->site_settings_model->get_site_settings();
?>

<div id="slider" style="right:-347px;">
    <div id="sidebar" onclick="open_panel()"><img src="<?php echo base_url(); ?>templates/images/contact.png"></div>
    <div id="header">
        <h2>Contact Form</h2>
        <p>If you'd like us to contact you, please fill out the form.</p>
        <form action="<?php echo site_url('home/feedback');?>" method="post" enctype="multipart/form-data"  role="form" data-parsley-validate novalidate>

            <p>
            <div class="form-group">
                <input type="text" class="form-control" name="name"  placeholder="Full Name" data-parsley-required-message=" Full Name required" required>
            </div>
            </p>

            <p>
            <div class="form-group">
                <input type="email" class="form-control"name="email"   placeholder="Email" data-parsley-required-message="Email required" required>
            </div>
            </p>
            <p>
            <div class="form-group">
                <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone"   data-parsley-required-message=" Mobile Number required "  data-parsley-pattern-message="Please enter a valid 10 digit mobile number" data-parsley-maxlength="10"  required>
            </div>
            </p>
            <p>
            <div class="form-group">
                <select class="form-control"  name="country" id="sel" style="margin-top: 10px;" required>
                    <option value="">Country</option>
                    <option value="India">India</option>
                    <option value="Australia & New Zealand">Australia & New Zealand</option>
                    <option value="Canada">Canada</option>
                    <option value="Other">Other</option>
                </select>
            </div>
            </p>
            <p>
            <div class="form-group" id="mydiv2"></div></p>
            <p>
            <div class="form-group">
                <input type="text" class="form-control"  name="company" id="company" placeholder="Company" data-parsley-required-message="Company Name required" required>
            </div>
            </p>
            <p>
            <div class="form-group">
                <input type="text" class="form-control"  name="industry" id="lname" placeholder="Industry" data-parsley-required-message="Industry required " required>
            </div>
            </p>
            <p>
            <div class="form-group">
                <input type="text" class="form-control" id="services" name="services"  placeholder="Services/Technologies" data-parsley-required-message="Services/Technologies required " required>
            </div>
            </p>
            <p>
            <div class="form-group">
                <select class="form-control" name="solution"  style="margin-top: 10px;" required>
                    <option value="">Select category</option>
                    <option value="Supply Chain Transformation">Supply Chain Transformation</option>
                    <option value="Digital Re-engineering">Digital Re-engineering</option>
                    <<option value="Finance Transformation">Finance Transformation</option>
                    <option value="Buisness Consulting">Buisness Consulting</option>

                </select>
            </div>
            </p>

            <p>
            <p><i>How can we help you?</i></p>
            <div class="form-group">
                <textarea class="form-control"  name="message"  rows="3" data-parsley-required-message="This feild required " required></textarea>
            </div>
            </p>
            <div class="row mt-20">
                <div class="col-md-12">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <button type="submit" class="btn  btn-block btn-warning btn-sm btn-huge">Clear</button>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <button type="submit" name="submitform"  class="btn  btn-block btn-primary btn-sm btn-huge">Send</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>