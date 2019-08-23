<?php
$settings = $this->site_settings_model->get_site_settings();
?>

<div class="popup_inlines">
    <div class="container" id="sample_popup_inline1">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div id="con-form">
                <p class="text-center">If you'd like us to contact you, please fill out the form.</p>
                <form method="post"  role="form" data-parsley-validate novalidate enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="fname"  placeholder="First Name" data-parsley-required-message=" First Name required" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="lname" placeholder="Last Name" data-parsley-required-message="Last Name required " required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Email" data-parsley-required-message="Email required" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="contact" placeholder="Primary Contact Number" data-parsley-pattern="[789][0-9]{9}"  data-parsley-required-message="Contact Number required "   data-parsley-pattern-message="Please enter a valid 10 digit mobile number" data-parsley-maxlength="10"  required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="altcontact" pattern="[7-9]{1}[0-9]{9}"  placeholder="Alternate Contact Number">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" name="cname" placeholder="Current Company" data-parsley-required-message="Company Name required" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control"  name="designation" placeholder="Current Designation" data-parsley-required-message="Current Designation required" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <select class="form-control" name="expyear" style="margin-top: 10px;" data-parsley-required-message="This feild required " required>
                                    <option value="">Total Experience in Year</option>
                                    <option value="1 year">1 year</option>
                                    <option value="2 year">2 year</option>
                                    <option value="3 year">3 year</option>
                                    <option value="3 year">3 year +</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <select class="form-control"name="expmonth" style="margin-top: 10px;" data-parsley-required-message="This feild required " required>
                                    <option value="" >Total Experience in Month</option>
                                    <option value="1 Month">1 Month</option>
                                    <option value="2 Month">2 Month</option>
                                    <option value="3 Month">3 Month</option>
                                    <option value="4 Month">4 Month</option>
                                    <option value="5 Month">5 Month</option>
                                    <option value="6 Month">6 Month</option>
                                    <option value="7 Month">7 Month</option>
                                    <option value="8 Month">8 Month</option>
                                    <option value="9 Month">9 Month</option>
                                    <option value="10 Month">10 Month</option>
                                    <option value="11 Month">11 Month</option>
                                    <option value="12 Month">12 Month</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <select class="form-control" name="rexpyear" style="margin-top: 10px;" data-parsley-required-message="This feild required " required>
                                    <option value="">Relevant Experience in Year</option>
                                    <option value="1 year">1 year</option>
                                    <option value="2 year">2 year</option>
                                    <option value="3 year">3 year</option>
                                    <option value="3 year">4 year</option>
                                    <option value="3 year">4 year +</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <select class="form-control"name="rexpmonth" style="margin-top: 10px;" data-parsley-required-message="This feild required " required>
                                    <option value="">Relevant Experience in Month</option>
                                    <option value="1 Month">1 Month</option>
                                    <option value="2 Month">2 Month</option>
                                    <option value="3 Month">3 Month</option>
                                    <option value="4 Month">4 Month</option>
                                    <option value="5 Month">5 Month</option>
                                    <option value="6 Month">6 Month</option>
                                    <option value="7 Month">7 Month</option>
                                    <option value="8 Month">8 Month</option>
                                    <option value="9 Month">9 Month</option>
                                    <option value="10 Month">10 Month</option>
                                    <option value="11 Month">11 Month</option>
                                    <option value="12 Month">12 Month</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <select class="form-control" name="education" style="margin-top: 10px;" data-parsley-required-message="This feild required " required>
                                    <option value="">Highest Education</option>
                                    <option value="Doctorate">Doctorate</option>
                                    <option value="Masters" >Masters</option>
                                    <option value="Distance Degree">Distance Degree</option>
                                    <option value="Executive Degree">Executive Degree</option>
                                    <option value="Post-Graduation">Post-Graduation</option>
                                    <option value="Graduation">Graduation</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6" id="appliedforme">
                            <div class="form-group">
                                <select class="form-control"name="role" style="margin-top: 10px;" data-parsley-required-message="This feild required " required>
                                    <option value="">Role Interested in</option>
                                    <option value="Business Development">Business Development</option>
                                    <option value="Data Analyst">Data Analyst</option>
                                    <option value="Consultant">Consultant</option>
                                    <option value="HR">HR</option>
                                    <option value="Finance">Finance</option>
                                    <option value="Legal">Legal</option>
                                    <option value="Technical">Technical</option>
                                    <option value="Strategy">Strategy</option>
                                    <option value="Sales">Sales</option>
                                    <option value="Marketing">Marketing</option>
                                    <option value="Operations">Operations</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <p><i>Cover Letter/Resume</i></p>
                            <div class="form-group">
                                <textarea class="form-control" name="resumeletter" rows="3" data-parsley-required-message="This feild required " required></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                            <span id="fileselector">
                          <div class="col-md-6">
                           <p><i>Upload Resume</i></p> <input type="file"  class="btn btn-primary btn-sm" name="resume" data-parsley-required-message="This feild required "required>

                            </span>
                    </div>
            </div>
            <hr>
            <div class="row mt-20">
                <div class="col-sm-4">
                    <div class="form-group">
                        <button type="submit" class="btn  btn-block btn-warning btn-lg btn-huge" type="reset" value="Reset">Clear</button>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <input type="submit" value="Submit" name="careerform"class="btn  btn-block btn-primary btn-lg btn-huge">
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
    <div class="col-md-3"></div>
</div>