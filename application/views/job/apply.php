<?php

$professional = $this->db->query("SELECT * FROM igc_pictures WHERE locate ='2' AND delete_status ='0'");
$professionals = $professional->result_array();

?>
<section>
    <div class="widget-top-title-2 par" style="background: url(<?php
    foreach($professionals  as $rows ){

        ?>


        <?php
        $path = 'uploads/pictures/';
        if (file_exists($path.$rows['pictures_image']) && $rows['pictures_image'] !="")
        {
            ?>
            <?php echo base_url().$path.$rows['pictures_image'];?>

            <?php
        }

        ?>

        <?php
    }
    ?>); padding-top: 50px; padding-bottom: 50px;">
        <div class="bg-mask">
            <div class="container" style="text-align: center; ">
                <h2>Job Application form</h2>
                <h5 class="white_color">Fill up the form and submit  </h5>
            </div>
        </div>
    </div>
</section><!-- /.widget geo map-->
<div data-id="!contactus" class="contentWrapper contactPage fullWidth fullHeight removePadding autoPosition m-Scrollbar backGround" >

    <hr class="space_max">
    <div class="top_space"> </div>
    <div class="mobile_topSpc"></div>
    <!-- Content display with Background image -->




<div class="container" style=" margin-bottom: 2%;">
    <div class="row">

        <div class="col-sm-12">

            <div class="col-sm-1">
                &nbsp;
            </div>
            <div class="col-sm-10 application-form-spino">

                <form role="form" method="post" id="form-a" action="<?php echo site_url('apply_now/form');?>" enctype="multipart/form-data">

                    <div class="form-group">
                        <div class="col-sm-6">

                        <input type="text" class="form-control" required name="firstname" placeholder="First Name" >

                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-6">

                        <input type="text" class="form-control" required name="lastname" placeholder="Last Name" >
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-6">
                            <label for="email">&nbsp;</label>
                    <input type="email" class="form-control" required name="email" placeholder="Email Address" >
                        </div>

                    </div>
                    <div class="form-group">
                        <div class="col-sm-6">
                            <label for="phone">&nbsp;</label>
                    <input type="text" class="form-control" required name="phone" placeholder="Phone" >
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-6">
                            <label for="city">&nbsp;</label>
                    <input type="text" class="form-control" required name="city" placeholder="City" >
                        </div>

                    </div>
                    <div class="form-group">
                        <div class="col-sm-6">
                            <label for="address">&nbsp;</label>
                    <input type="text" class="form-control" required name="address" placeholder="Address" >
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-6">
                            <label for="country">&nbsp;</label>
                    <select id="country" class="form-control" name="country">
                        <option  selected="selected" value="">Select Country</option>
                        <option value="Albania"> Albania</option>
                        <option value="Algeria"> Algeria</option>
                        <option value="Andorra"> Andorra</option>
                        <option value="Angola"> Angola</option>
                        <option value="Anguilla"> Anguilla</option>
                        <option value="Antigua"> Antigua &amp; Barbuda</option><
                        <option value="AR"> Argentina</option>
                        <option value="Argentina"> Armenia</option>
                        <option value="Aruba"> Aruba</option>
                        <option value="Australia"> Australia</option>
                        <option value="Austria"> Austria</option>
                        <option value="Azerbaijan"> Azerbaijan</option>
                        <option value="Bahamas"> Bahamas</option>
                        <option value="Bahrain"> Bahrain</option>
                        <option value="Barbados"> Barbados</option>
                        <option value="Belarus"> Belarus</option>
                        <option value="Belgium"> Belgium</option>
                        <option value="Belize"> Belize</option>
                        <option value="Benin"> Benin</option>
                        <option value="Bermuda"> Bermuda</option>
                        <option value="Bhutan"> Bhutan</option>
                        <option value="Bolivia"> Bolivia</option>
                        <option value="Bosnia &amp; Herzegovina"> Bosnia &amp; Herzegovina</option>
                        <option value="Botswana"> Botswana</option>
                        <option value="Brazil"> Brazil</option>
                        <option value="British Virgin Islands"> British Virgin Islands</option>
                        <option value="Brunei"> Brunei</option>
                        <option value="Bulgaria"> Bulgaria</option>
                        <option value="Burkina Faso"> Burkina Faso</option>
                        <option value="Burundi"> Burundi</option>
                        <option value="Cambodia"> Cambodia</option>
                        <option value="Cameroon"> Cameroon</option>
                        <option value="Canada"> Canada</option>
                        <option value="Cape Verde"> Cape Verde</option>
                        <option value="Cayman Islands"> Cayman Islands</option>
                        <option value="Chad"> Chad</option>
                        <option value="Chile"> Chile</option>
                        <option value="China"> China</option>
                        <option value="Colombia"> Colombia</option>
                        <option value="Comoros"> Comoros</option>
                        <option value="Congo - Brazzaville"> Congo - Brazzaville</option>
                        <option value="Congo - Kinshasa"> Congo - Kinshasa</option>
                        <option value="Cook Islands"> Cook Islands</option>
                        <option value="Costa Rica"> Costa Rica</option>
                        <option value="Côte d’Ivoire"> Côte d’Ivoire</option>
                        <option value="Croatia"> Croatia</option>
                        <option value="Cyprus"> Cyprus</option>
                        <option value="Czech Republic"> Czech Republic</option>
                        <option value="Denmark"> Denmark</option>
                        <option value="Djibouti"> Djibouti</option>
                        <option value="Dominica"> Dominica</option>
                        <option value="Dominican Republic"> Dominican Republic</option>
                        <option value="Ecuador"> Ecuador</option>
                        <option value="Egypt"> Egypt</option>
                        <option value="Eritrea"> El Salvador</option>
                        <option value="Eritrea"> Eritrea</option>
                        <option value="Estonia"> Estonia</option>
                        <option value="Ethiopia"> Ethiopia</option>
                        <option value="Falkland Islands"> Falkland Islands</option>
                        <option value="Faroe Islands"> Faroe Islands</option>
                        <option value="Fiji"> Fiji</option>
                        <option value="Finland"> Finland</option>
                        <option value="France"> France</option>
                        <option value="French Guiana"> French Guiana</option>
                        <option value="French Polynesia"> French Polynesia</option>
                        <option value="Gabon"> Gabon</option>
                        <option value="Gambia"> Gambia</option>
                        <option value="Georgia"> Georgia</option>
                        <option value="Germany"> Germany</option>
                        <option value="Gibraltar"> Gibraltar</option>
                        <option value="Greece"> Greece</option>
                        <option value="Greenland"> Greenland</option>
                        <option value="Grenada"> Grenada</option>
                        <option value="Guadeloupe"> Guadeloupe</option>
                        <option value="Guatemala"> Guatemala</option>
                        <option value="Guinea"> Guinea</option>
                        <option value="Guinea-Bissau"> Guinea-Bissau</option>
                        <option value="Guyana"> Guyana</option>
                        <option value="Honduras"> Honduras</option>
                        <option value="Hong Kong SAR China"> Hong Kong SAR China</option>
                        <option value="Hungary"> Hungary</option>
                        <option value="Iceland"> Iceland</option>
                        <option value="India"> India</option>
                        <option value="Indonesia"> Indonesia</option>
                        <option value="Ireland"> Ireland</option>
                        <option value="Israel"> Israel</option>
                        <option value="Italy"> Italy</option>
                        <option value="Jamaica"> Jamaica</option>
                        <option value="Japan"> Japan</option>
                        <option value="Jordan"> Jordan</option>
                        <option value="Kazakhstan"> Kazakhstan</option>
                        <option value="Kenya"> Kenya</option>
                        <option value="Kiribati"> Kiribati</option>
                        <option value="Kuwait"> Kuwait</option>
                        <option value="Kyrgyzstan"> Kyrgyzstan</option>
                        <option value="Laos"> Laos</option>
                        <option value="Latvia"> Latvia</option>
                        <option value="Lesotho"> Lesotho</option>
                        <option value="Liechtenstein"> Liechtenstein</option>
                        <option value="Lithuania"> Lithuania</option>
                        <option value="Luxembourg"> Luxembourg</option>
                        <option value="Macedonia"> Macedonia</option>
                        <option value="Madagascar"> Madagascar</option>
                        <option value="Malawi"> Malawi</option>
                        <option value="Malaysia"> Malaysia</option>
                        <option value="Maldives"> Maldives</option>
                        <option value="Mali"> Mali</option>
                        <option value="Malta"> Malta</option>
                        <option value="Marshall Islands"> Marshall Islands</option>
                        <option value="Martinique"> Martinique</option>
                        <option value="Mauritania"> Mauritania</option>
                        <option value="Mauritius"> Mauritius</option>
                        <option value="Mayotte"> Mayotte</option>
                        <option value="Mexico"> Mexico</option>
                        <option value="Micronesia"> Micronesia</option>
                        <option value="Moldova"> Moldova</option>
                        <option value="Monaco"> Monaco</option>
                        <option value="Mongolia"> Mongolia</option>
                        <option value="Montenegro"> Montenegro</option>
                        <option value="Montserrat"> Montserrat</option>
                        <option value="Morocco"> Morocco</option>
                        <option value="Mozambique"> Mozambique</option>
                        <option value="Namibia"> Namibia</option>
                        <option value="Nauru"> Nauru</option>
                        <option value="Nepal"> Nepal</option>
                        <option value="Netherlands"> Netherlands</option>
                        <option value="Netherlands Antilles"> Netherlands Antilles</option>
                        <option value="New Caledonia"> New Caledonia</option>
                        <option value="New Zealand"> New Zealand</option>
                        <option value="Nicaragua"> Nicaragua</option>
                        <option value="Niger"> Niger</option>
                        <option value="Nigeria"> Nigeria</option>
                        <option value="Niue"> Niue</option>
                        <option value="Norfolk Island"> Norfolk Island</option>
                        <option value="Norway"> Norway</option>
                        <option value="Oman"> Oman</option>
                        <option value="Palau"> Palau</option>
                        <option value="Panama"> Panama</option>
                        <option value="Papua New Guinea"> Papua New Guinea</option>
                        <option value="Paraguay"> Paraguay</option>
                        <option value="Peru"> Peru</option>
                        <option value="Philippines"> Philippines</option>
                        <option value="Pitcairn Islands"> Pitcairn Islands</option>
                        <option value="Poland"> Poland</option>
                        <option value="Portugal"> Portugal</option>
                        <option value="Qatar"> Qatar</option>
                        <option value="Réunion"> Réunion</option>
                        <option value="Romania"> Romania</option>
                        <option value="Russia"> Russia</option>
                        <option value="Rwanda"> Rwanda</option>
                        <option value="Samoa"> Samoa</option>
                        <option value="San Marino"> San Marino</option>
                        <option value="São Tomé &amp; Príncipe"> São Tomé &amp; Príncipe</option>
                        <option value="Saudi Arabia"> Saudi Arabia</option>
                        <option value="Senegal"> Senegal</option>
                        <option value="Serbia"> Serbia</option>
                        <option value="Seychelles"> Seychelles</option>
                        <option value="Sierra Leone"> Sierra Leone</option>
                        <option value="Singapore"> Singapore</option>
                        <option value="Slovakia"> Slovakia</option>
                        <option value="Slovenia"> Slovenia</option>
                        <option value="Solomon Islands"> Solomon Islands</option>
                        <option value="Somalia"> Somalia</option>
                        <option value="South Africa"> South Africa</option>
                        <option value="South Korea"> South Korea</option>
                        <option value="Spain"> Spain</option>
                        <option value="St. Helena"> St. Helena</option>
                        <option value="St. Helena"> St. Helena</option>
                        <option value="St. Kitts &amp; Nevis"> St. Kitts &amp; Nevis</option>
                        <option value="St. Lucia"> St. Lucia</option>
                        <option value="St. Pierre &amp; Miquelon"> St. Pierre &amp; Miquelon</option>
                        <option value="St. Vincent &amp; Grenadines"> St. Vincent &amp; Grenadines</option>
                        <option value="Suriname"> Suriname</option>
                        <option value="Svalbard"> Svalbard &amp; Jan Mayen</option>
                        <option value="Swaziland"> Swaziland</option>
                        <option value="Sweden"> Sweden</option>
                        <option value="Switzerland"> Switzerland</option>
                        <option value="Taiwan"> Taiwan</option>
                        <option value="Tajikistan"> Tajikistan</option>
                        <option value="Tanzania"> Tanzania</option>
                        <option value="Thailand"> Thailand</option>
                        <option value="Togo"> Togo</option>
                        <option value="Tonga"> Tonga</option>
                        <option value="Trinidad &amp; Tobago"> Trinidad &amp; Tobago</option>
                        <option value="Tunisia"> Tunisia</option>
                        <option value="Turkmenistan"> Turkmenistan</option>
                        <option value="Turks &amp; Caicos Islands"> Turks &amp; Caicos Islands</option>
                        <option value="Tuvalu"> Tuvalu</option>
                        <option value="Uganda"> Uganda</option>
                        <option value="Ukraine"> Ukraine</option>
                        <option value="United Arab Emirates"> United Arab Emirates</option>
                        <option value="United Kingdom"> United Kingdom</option>
                        <option value="United States"> United States</option>
                        <option value="Uruguay"> Uruguay</option>
                        <option value="Vanuatu"> Vanuatu</option>
                        <option value="Vatican City"> Vatican City</option>
                        <option value="Venezuela"> Venezuela</option>
                        <option value="Vietnam"> Vietnam</option>
                        <option value="Wallis"> Wallis &amp; Futuna</option>
                        <option value="Yemen"> Yemen</option>
                        <option value="Zambia"> Zambia</option>
                        <option value="Zimbabwe"> Zimbabwe</option>
                    </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-6">
                            <label for="joblocation">&nbsp;</label>
                    <select id="joblocation" class="form-control" name="joblocation" class="span3">
                        <option value="">Job Location</option>
                        <option value="Abu Dhabi">Abu Dhabi</option>
                        <option value="Ajman">Ajman</option>
                        <option value="Sharjah ">Sharjah </option>
                        <option value="Dubai">Dubai</option>
                        <option value="Fujairah">Fujairah</option>
                        <option value="Ras Al Khaimah ">Ras Al Khaimah </option>
                        <option value="Umm Al Quwain">Umm Al Quwain</option>
                    </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-6">
                            <label for="jobtype">&nbsp;</label>
                    <select id="jobtype" class="form-control" name="jobtype" class="span3">
                        <option value="">Job Type</option>
                        
                        <option value="Full Time">Full Time</option>
                        <option value="Part Time">Part Time</option>
                    </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-6">
                            <label for="jobrole">&nbsp;</label>
                    <select id="jobrole" class="form-control" name="jobrole" class="span3">
                        <option value="">Select </option>
                        <option value="A/C Technicia">A/C Technician</option>
                        <option value="Driver">Driver</option>
                        <option value="Carpenter">Carpenter</option>
                        <option value="Tile Fixer">Tile Fixer</option>
                        <option value="Electricial">Electricial</option>
                        <option value="Plumber">Plumber</option>
                        <option value="Painter">Painter</option>
                        <option value="Electrical Mechanics">Electrical Mechanics</option>
                        <option value="Floor Cleaner">Floor Cleaner</option>
                        <option value="Wallpaper Fixer">Wallpaper Fixer</option>
                        <option value="Supervisor">Supervisor</option>
                        <option value="Technician">Technician</option>
                        <option value="Others">Others</option>
                    </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-6">
                            <label for="qualification">&nbsp;</label>
                    <select id="qualification" class="form-control" name="qualification" class="span3">
                        <option value="">Qualification</option>
                        <option value="Certification / Diploma">Certification / Diploma</option>
                        <option value="Bachelor's degree / higher diploma">Bachelor's degree / Higher diploma</option>
                        <option value="Master's degree">Master's degree</option>
                        <option value="Doctorate">Doctorate</option>

                    </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-6">
                            <label for="experience">&nbsp;</label>
                    <select id="experience" class="form-control" name="experience" class="span3">
                        <option value="">Experience</option>
                        <option value="0 - 1 Years">0 - 1 Years</option>
                        <option value="1 - 2 Years">1 - 2 Years</option>
                        <option value="2 - 3 Years">2 - 3 Years</option>
                        <option value="3 - 4 Years">3 - 4 Years</option>
                        <option value="Above 5 Years">Above 5 Yeasr</option>
                    </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-6">
                            <label for="careerlevel">&nbsp;</label>
                    <select id="careerlevel" class="form-control" name="careerlevel" class="span3">
                        <option value="">Career Level</option>
                        <option value="Begineer">Begineer</option>
                        <option value="Mid">Mid</option>
                        <option value="Senior">Senior</option>

                    </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-6">
                            <label for="passportno">&nbsp;</label>
                    <input type="text" class="form-control" required placeholder="Passport No." name="passportno" class="span3">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-6">
                    <label>Image</label>
                    <input type="file" class="form-control" required  name="image" class="span6">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-6">

                    <label>Upload Resume</label>
                    <input type="file" class="form-control" required  name="cv" class="span6">
                        </div>

                    </div>
                    <div class="form-group">
                        <div class="col-sm-6">
                            <label>
                                <input type="checkbox" required name="terms"> I agree with the <a href="#">Terms and Conditions</a>.</label>
                        </div>

                        <div class="col-sm-8">
                            <label for="reset">&nbsp;</label>
                            <input type="reset" class="btn secondary-btn" value="Reset">
                        </div>
                        <div class="col-sm-4">
                            <label for="submit">&nbsp;</label>
                            <input type="submit" value="Apply Now" class="btn btn-primary pull-right">
                        </div>

                    </div>


                    <div class="clearfix"></div>
                </form>
            </div>
            <div class="col-sm-1">
                &nbsp;
            </div>

        </div>
    </div>
</div>


</div>
