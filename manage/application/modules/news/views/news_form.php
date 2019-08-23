<div class="row">
    <div class="col-lg-12">
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
        <?php if ($this->session->flashdata('error') != "") {

            ?>
            <div class="alert alert-danger alert_box">
                <a href="#" class="close" data-dismiss="alert" aria-label="close"><i
                        class="fa fa-times"></i></a>
                <strong>Error!</strong>  <?php echo $this->session->flashdata('error'); ?>.
            </div>
        <?php
        }
        ?>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-info">
            <div class="panel-heading">
                <?php echo (isset($title) && $title !="") ? $title:""; ?>
            </div>

            <div class="panel-body">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#home" data-toggle="tab">General</a>
                    </li>
                    <li><a href="#meta" data-toggle="tab">Meta</a>
                    </li>

                    <li id="multi_tab"><a href="#settings" data-toggle="tab">Tab</a>
                    </li>
                    <!-- <li><a href="#support" data-toggle="tab">Tabs</a>
                    </li> -->

                </ul>
                <form class="tab_form" method="post" action="" enctype="multipart/form-data">
                    <div class="tab-content">
                        <?php
                        $user_id= $this->session->userdata('admin_id');
                        $this->db->where('user_id', $user_id);
                        $userDetail = $this->db->get('igc_users')->row_array();


                        ?>
                        <div class="tab-pane fade active in" id="home">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="admin_name">Title<span class="asterisk">*</span></label>
                                        <input type="text" name="content_title" id="content_title"  value="<?php echo (isset($content['content_title']) && $content['content_title'] !="") ? $content['content_title']:""; ?>" data-validation="required" autocomplete="off" class="form-control required valid" kl_virtual_keyboard_secure_input="on">
                                        <input type="hidden" name="user_id"  data-validation-allowing="float" value="<?php echo $userDetail['user_id']; ?>" autocomplete="off" class="form-control required valid"  kl_virtual_keyboard_secure_input="on">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="admin_name">Youtube Link<span class="asterisk">*</span></label>
                                        <input type="text" name="youtube_link" id="youtube_link"  value="<?php echo (isset($content['youtube_link']) && $content['youtube_link'] !="") ? $content['youtube_link']:""; ?>"autocomplete="off" class="form-control required valid" kl_virtual_keyboard_secure_input="on">
                                        <input type="hidden" name="user_id"  data-validation-allowing="float" value="<?php echo $userDetail['user_id']; ?>" autocomplete="off" class="form-control required valid"  kl_virtual_keyboard_secure_input="on">
                                    </div>
                                </div>
                            </div>
                             <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="admin_name">Reporter Name<span class="asterisk">*</span></label>
                                        <input type="text" name="by-line" id="by-line"  value="<?php echo (isset($content['by-line']) && $content['by-line'] !="") ? $content['by-line']:""; ?>" data-validation="required" autocomplete="off" class="form-control required valid" kl_virtual_keyboard_secure_input="on">
                                        <input type="hidden" name="user_id"  data-validation-allowing="float" value="<?php echo $userDetail['user_id']; ?>" autocomplete="off" class="form-control required valid"  kl_virtual_keyboard_secure_input="on">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="admin_name">Slug<span class="asterisk">*</span></label>
                                        <input type="text" name="content_url" id="content_url"  value="<?php echo (isset($content['content_url']) && $content['content_url'] !="") ? $content['content_url']:""; ?>" data-validation="required" autocomplete="off" class="form-control required valid" kl_virtual_keyboard_secure_input="on">
                                        <input type="hidden" name="user_id"  data-validation-allowing="float" value="<?php echo $userDetail['user_id']; ?>" autocomplete="off" class="form-control required valid"  kl_virtual_keyboard_secure_input="on">
                                    </div>
                                </div>
                            </div>


                        <div class="row">
                            <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Featured Image</label>
                                       <?php
                                       if(isset($content['server_image']))
                                       {

                                           ?>
                                           <div class="remove_option">

                                               <?php
                                               $path  =  '../uploads/content/';
                                               ?>
                                               <img src="<?php echo $content['server_image'];?>" alt="featured_image" style="width: 50%">

                                               <span class="btn btn-info remove_btn" id="btn_remove">Remove</span>
                                           </div>
                                           <input  type="hidden" name="server_image_prev" value="<?php echo $content['server_image'];?>" >
                                           <div id="image_input">

                                               <span>(image dimension 853*300 px)</span>
                                                            <div class="input-append">
                                                               <input id="fieldID4" type="text"  name="server_image_new" class="form-control" value="" >
                                                               <a data-toggle="modal" href="javascript:;" data-target="#myModal" class="btn btn-default" type="button">Select</a>
                                                           </div>
                                           </div>
                                           <?php
                                       }
                                       else
                                       {
                                           ?>

                                           <span>(Image Dimension 853*405 px)</span>
                                           <div class="input-append">
                                                               <input id="fieldID4" type="text"  name="server_image" class="form-control" value="" >
                                                               <a data-toggle="modal" href="javascript:;" data-target="#myModal" class="btn btn-default" type="button">Select</a>
                                                           </div>
                                           <?php
                                       }
                                       ?>
                                       <div id="myModal" class="modal fade bs-example-modal-xl" role="dialog">
                               <div class="modal-dialog modal-xl">


                                   <div class="modal-content">
                                       <div class="modal-header">
                                           <button type="button" class="close" data-dismiss="modal">&times;</button>
                                           <h4 class="modal-title">Aaja Ko Music</h4>
                                       </div>
                                       <div class="modal-body">
                                           <iframe width="100%" height="400" src="<?php echo base_url(); ?>../filemanager/dialog.php?type=2&field_id=fieldID4'&fldr=" frameborder="0" style="overflow: scroll; overflow-x: hidden; overflow-y: scroll; "></iframe>
                                       </div>
                                       <div class="modal-footer">
                                           <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                       </div>
                                   </div>

                               </div>
                           </div>
                                    </div>
                            </div>
                            <div class="col-sm-6">
                                <form>
                                    <div class="form-group"  onclick="showCheckboxes()">
                                        <label for="slogan">Category<span class="asterisk">*</span> </label>
                                        <select class="form-control" name="">
                                            <option value="">Select category</option>
                                        </select>
                                        <div id="checkboxes">
                                            <?php
                                            foreach($categories as $cat){

                                                ?>
                                            <lable for="one">
                                            <input class="ckboxclk" name="category_id[]" type="checkbox" value="<?php echo $cat['category_id'] ?>" <?php echo (in_array($cat['category_id'], $category_selected))?'checked="checked"':"";?>><?php echo $cat['category_name']; ?>
                                            </lable>
                                            <?php

                                            }

                                            ?>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <script type="text/javascript">
                                var expanded = false;

                            function showCheckboxes() {
                              var checkboxes = document.getElementById("checkboxes");
                              $('.ckboxclk').click(function(){
                                    checkboxes.style.display = "block";
                                    expanded = false && expanded;
                              })
                              if (!expanded) {
                                checkboxes.style.display = "block";
                                expanded = true;
                              } else {
                                checkboxes.style.display = "none";
                                expanded = false;
                              }
                            }
                            </script>
                        </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <label>Content Summary</label>
                                    <textarea  name="content_summary" id="content_summary" class="form-control" rows="6"><?php echo (isset($content['content_summary']) && $content['content_summary'] !="") ? $content['content_summary']:""; ?></textarea>

                                </div>
                            </div>

                            <hr />
                            <div class="row">
                                <div class="col-sm-12">
                                    <label>Content Details</label>
                                    <textarea  name="content_body" id="content_body"><?php echo (isset($content['content_body']) && $content['content_body'] !="") ? $content['content_body']:""; ?></textarea>

                                </div>
                            </div>
                            <hr />

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Published<span class="asterisk">*</span> </label>
                                        <input type="radio" name="publish_status" <?php echo (isset($content['publish_status']) && $content['publish_status'] =="1")?"checked":"";?> class="regular-text" data-validation="required" value="1">Published
                                        <input type="radio" name="publish_status" <?php echo (isset($content['publish_status']) && $content['publish_status'] =="0")?"checked":"";?> class="regular-text" data-validation="required" value="0">Draft

                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Breaking<span class="asterisk">*</span> </label>
                                        <input type="radio" name="breaking" <?php echo (isset($content['breaking']) && $content['breaking'] =="1")?"checked":"";?> class="regular-text" data-validation="required" value="1">Yes
                                        <input type="radio" name="breaking" <?php echo (isset($content['breaking']) && $content['breaking'] =="0")?"checked":"";?> class="regular-text" data-validation="required" value="0">No

                                    </div>
                                </div>
                            </div><!-- 
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Admin verification<span class="asterisk">*</span> </label>
                                        <input type="radio" name="admin_per" <?php echo (isset($content['admin_per']) && $content['admin_per'] =="1")?"checked":"";?> class="regular-text" data-validation="required" value="1">Active
                                        <input type="radio" name="admin_per" <?php echo (isset($content['admin_per']) && $content['admin_per'] =="0")?"checked":"";?> class="regular-text" data-validation="required" value="0">Inactive

                                    </div>
                                </div>
                            </div> -->



                        </div>
                        <div class="tab-pane fade" id="meta">
                            <div class="row">
                                <div class="col-sm-12">
                                    <label for="meta_description">Meta Description </label>
                                    <textarea name="meta_description" id="meta_description" class="form-control"><?php echo (isset($content['meta_description']) && $content['meta_description'] !="") ? $content['meta_description']:""; ?></textarea><br>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <label for="meta_keywords">Meta Keywords </label>
                                    <textarea name="meta_keywords"  class="form-control"><?php echo (isset($content['meta_keywords']) && $content['meta_keywords'] !="") ? $content['meta_keywords']:""; ?></textarea><br>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <label for="meta_title">Meta Title</label>
                                    <textarea name="meta_title"  class="form-control"><?php echo (isset($content['meta_title']) && $content['meta_title'] !="") ? $content['meta_title']:""; ?></textarea><br>

                                </div>
                            </div>

                        </div><!-- 


                        <div class="tab-pane fade" id="support">

                            <table class="form-table">

                                <tbody>
                                <tr valign="top">
                                    <th style="background: transparent none repeat scroll 0% 0%;" scope="row"><label for="about_service">Tab </label></th>
                                    <td style="background: transparent none repeat scroll 0% 0%;">

                                        <input type="text" name="about_service" id="about_service" size="50" value="<?php echo (isset($content['about_service']) && $content['about_service'] !="") ? $content['about_service']:""; ?>"  autocomplete="off" class="regular-text required valid" kl_virtual_keyboard_secure_input="on">

                                        <br>

                                    </td>
                                </tr>
                                <tr valign="top">
                                    <th style="background: transparent none repeat scroll 0% 0%;" scope="row"><label for="about_service_desc">Description </label></th>
                                    <td style="background: transparent none repeat scroll 0% 0%;">

                                        <textarea name="about_service_desc" id="about_service_desc"  rows="5" cols="100"><?php echo (isset($content['about_service_desc']) && $content['about_service_desc'] !="") ? $content['about_service_desc']:""; ?></textarea><br>

                                    </td>
                                </tr>
                                <tr valign="top">
                                   <th style="background: transparent none repeat scroll 0% 0%;" scope="row"><label for="about_service">Link Page </label></th>
                                    <td style="background: transparent none repeat scroll 0% 0%;">
                                        <select name="about_service_link" class="form-control">
                                            <option value=""> Select </option>
                                            <?php

                $conetn_se = $this->db->query("SELECT * FROM igc_content WHERE delete_status ='0'");
                $procontent = $conetn_se->result_array();



                ?>
                                            <?php
                                            
                                            foreach ($procontent  as $rows){
                                              ?>  
                                                
                                             <option value="<?php echo  $rows['content_url'];?>" <?php echo (isset($rows['about_service_link']) && $rows['about_service_link'] !="") ? $rows['about_service_link']:""; ?>><?php echo $rows['content_page_title']; ?></option> 
                                              
                                            <?php    
                                               
                                            }
                                            ?>
                                            
                                            
                                            
                                        </select>
                                        

                                       

                                      
                                    </td> 
                                </tr>




                                <tr valign="top">
                                    <th style="background: transparent none repeat scroll 0% 0%;" scope="row"><label for="about_choose">Tab </label></th>
                                    <td style="background: transparent none repeat scroll 0% 0%;">
                                        <input type="text" name="about_choose" id="about_choose" size="50" value="<?php echo (isset($content['about_choose']) && $content['about_choose'] !="") ? $content['about_choose']:""; ?>"  autocomplete="off" class="regular-text required valid" kl_virtual_keyboard_secure_input="on">


                                    </td>
                                </tr>
                                <tr valign="top">
                                    <th style="background: transparent none repeat scroll 0% 0%;" scope="row"><label for="about_choose_desc">Description </label></th>
                                    <td style="background: transparent none repeat scroll 0% 0%;">
                                        <textarea name="about_choose_desc" id="about_choose_desc"  rows="5" cols="100"><?php echo (isset($content['about_choose_desc']) && $content['about_choose_desc'] !="") ? $content['about_choose_desc']:""; ?></textarea><br>

                                    </td>
                                </tr>
                                <tr valign="top">
                                   <th style="background: transparent none repeat scroll 0% 0%;" scope="row"><label for="about_service">Link Page </label></th>
                                    <td style="background: transparent none repeat scroll 0% 0%;">
                                        <select name="about_choose_link" class="form-control">
                                            <option value=""> Select </option>
                                            <?php

                $conetn_se = $this->db->query("SELECT * FROM igc_content WHERE delete_status ='0'");
                $procontent = $conetn_se->result_array();



                ?>
                                            <?php
                                            
                                            foreach ($procontent  as $rows){
                                              ?>  
                                                
                                             <option value="<?php echo  $rows['content_url'];?>" <?php echo (isset($rows['about_choose_link']) && $rows['about_choose_link'] !="") ? $rows['about_choose_link']:""; ?>><?php echo $rows['content_page_title']; ?></option> 
                                              
                                            <?php    
                                               
                                            }
                                            ?>
                                            
                                            
                                            
                                        </select>
                                        

                                       

                                      
                                    </td> 
                                </tr>
                                
                                
                                

                                <tr valign="top">
                                    <th style="background: transparent none repeat scroll 0% 0%;" scope="row"><label for="about_support">Tab</label></th>
                                    <td style="background: transparent none repeat scroll 0% 0%;">
                                        <input type="text" name="about_support" id="about_support" size="50" value="<?php echo (isset($content['about_support']) && $content['about_support'] !="") ? $content['about_support']:""; ?>"  autocomplete="off" class="regular-text required valid" kl_virtual_keyboard_secure_input="on">


                                    </td>
                                </tr>
                                <tr valign="top">
                                    <th style="background: transparent none repeat scroll 0% 0%;" scope="row"><label for="about_support_desc">Description</label></th>
                                    <td style="background: transparent none repeat scroll 0% 0%;">
                                        <textarea name="about_support_desc" id="about_support_desc"  rows="5" cols="100"><?php echo (isset($content['about_support_desc']) && $content['about_support_desc'] !="") ? $content['about_support_desc']:""; ?></textarea><br>

                                    </td>
                                </tr>

<tr valign="top">
                                   <th style="background: transparent none repeat scroll 0% 0%;" scope="row"><label for="about_service">Link Page </label></th>
                                    <td style="background: transparent none repeat scroll 0% 0%;">
                                        <select name="about_support_link" class="form-control">
                                            <option value=""> Select </option>
                                            <?php

                $conetn_se = $this->db->query("SELECT * FROM igc_content WHERE delete_status ='0'");
                $procontent = $conetn_se->result_array();



                ?>
                                            <?php
                                            
                                            foreach ($procontent  as $rows){
                                              ?>  
                                                
                                             <option value="<?php echo  $rows['content_url'];?>" <?php echo (isset($rows['about_support_link']) && $rows['about_support_link'] !="") ? $rows['about_support_link']:""; ?>><?php echo $rows['content_page_title']; ?></option> 
                                              
                                            <?php    
                                               
                                            }
                                            ?>
                                            
                                            
                                            
                                        </select>
                                        

                                       

                                      
                                    </td> 
                                </tr>


                                </tbody>
                            </table>

                        </div> -->


                        <div class="tab-pane fade" id="settings">

                            <table class="form-table">

                                <tbody>
                                <tr valign="top">
                                    <th style="background: transparent none repeat scroll 0% 0%;" scope="row"><label>Tab Name</label></th>
                                    <td style="background: transparent none repeat scroll 0% 0%;">
                                        <input type="text" name="tab1"  size="28" value="<?php echo (isset($content['tab1']) && $content['tab1'] !="") ? $content['tab1']:""; ?>" autocomplete="off" kl_virtual_keyboard_secure_input="on">

                                    </td>
                                </tr>

                                <tr valign="top">
                                    <th style="background: transparent none repeat scroll 0% 0%;" scope="row"><label>Description </label></th>
                                    <td style="background: transparent none repeat scroll 0% 0%;">
                                        <textarea name="description1" id="tab-body" rows="5" cols="100"><?php echo (isset($content['description1']) && $content['description1'] !="") ? $content['description1']:""; ?></textarea><br>

                                    </td>
                                </tr>
                                <tr valign="top">
                                    <th style="background: transparent none repeat scroll 0% 0%;" scope="row"><label>Tab Name</label></th>
                                    <td style="background: transparent none repeat scroll 0% 0%;">
                                        <input type="text" name="tab2"  size="28" value="<?php echo (isset($content['tab2']) && $content['tab2'] !="") ? $content['tab2']:""; ?>" autocomplete="off" kl_virtual_keyboard_secure_input="on">

                                    </td>
                                </tr>

                                <tr valign="top">
                                    <th style="background: transparent none repeat scroll 0% 0%;" scope="row"><label>Description </label></th>
                                    <td style="background: transparent none repeat scroll 0% 0%;">
                                        <textarea name="description2" id="tab-body2" rows="5" cols="100"><?php echo (isset($content['description2']) && $content['description2'] !="") ? $content['description2']:""; ?></textarea><br>

                                    </td>
                                </tr>
                                <tr valign="top">
                                    <th style="background: transparent none repeat scroll 0% 0%;" scope="row"><label>Tab Name</label></th>
                                    <td style="background: transparent none repeat scroll 0% 0%;">
                                        <input type="text" name="tab3"  size="28" value="<?php echo (isset($content['tab3']) && $content['tab3'] !="") ? $content['tab3']:""; ?>" autocomplete="off" kl_virtual_keyboard_secure_input="on">

                                    </td>
                                </tr>

                                <tr valign="top">
                                    <th style="background: transparent none repeat scroll 0% 0%;" scope="row"><label>Description </label></th>
                                    <td style="background: transparent none repeat scroll 0% 0%;">
                                        <textarea name="description3" id="tab-body3" rows="5" cols="100"><?php echo (isset($content['description3']) && $content['description3'] !="") ? $content['description3']:""; ?></textarea><br>

                                    </td>
                                </tr>
                                <tr valign="top">
                                    <th style="background: transparent none repeat scroll 0% 0%;" scope="row"><label>Tab Name</label></th>
                                    <td style="background: transparent none repeat scroll 0% 0%;">
                                        <input type="text" name="tab4"  size="28" value="<?php echo (isset($content['tab4']) && $content['tab4'] !="") ? $content['tab4']:""; ?>" autocomplete="off" kl_virtual_keyboard_secure_input="on">

                                    </td>
                                </tr>

                                <tr valign="top">
                                    <th style="background: transparent none repeat scroll 0% 0%;" scope="row"><label>Description </label></th>
                                    <td style="background: transparent none repeat scroll 0% 0%;">
                                        <textarea name="description4" id="tab-body4" rows="5" cols="100"><?php echo (isset($content['description4']) && $content['description4'] !="") ? $content['description4']:""; ?></textarea><br>

                                    </td>
                                </tr>
                                <tr valign="top">
                                    <th style="background: transparent none repeat scroll 0% 0%;" scope="row"><label>Tab Name</label></th>
                                    <td style="background: transparent none repeat scroll 0% 0%;">
                                        <input type="text" name="tab5"  size="28" value="<?php echo (isset($content['tab5']) && $content['tab5'] !="") ? $content['tab5']:""; ?>" autocomplete="off" kl_virtual_keyboard_secure_input="on">

                                    </td>
                                </tr>

                                <tr valign="top">
                                    <th style="background: transparent none repeat scroll 0% 0%;" scope="row"><label>Description </label></th>
                                    <td style="background: transparent none repeat scroll 0% 0%;">
                                        <textarea name="description5" id="tab-body5" rows="5" cols="100"><?php echo (isset($content['description5']) && $content['description5'] !="") ? $content['description5']:""; ?></textarea><br>

                                    </td>
                                </tr>

                                <tr valign="top">
                                    <th style="background: transparent none repeat scroll 0% 0%;" scope="row"><label>Tab Name</label></th>
                                    <td style="background: transparent none repeat scroll 0% 0%;">
                                        <input type="text" name="tab6"  size="28" value="<?php echo (isset($content['tab6']) && $content['tab6'] !="") ? $content['tab6']:""; ?>" autocomplete="off" kl_virtual_keyboard_secure_input="on">

                                    </td>
                                </tr>

                                <tr valign="top">
                                    <th style="background: transparent none repeat scroll 0% 0%;" scope="row"><label>Description </label></th>
                                    <td style="background: transparent none repeat scroll 0% 0%;">
                                        <textarea name="description6" id="tab-body6" rows="5" cols="100"><?php echo (isset($content['description6']) && $content['description6'] !="") ? $content['description6']:""; ?></textarea><br>

                                    </td>
                                </tr>



                                </tbody>
                            </table>

                        </div>

                        <p class="submit">
                            <input type="hidden" name="content_id" value="<?php echo (isset($content['content_id']) && $content['content_id'] !="") ? $content['content_id']:""; ?>">
                            <input type="submit" name="Setting Btn" class="button" id="save_content" value="Save Settings">
                        </p>



                    </div>
                </form>
            </div>
        </div>


    </div>
</div>
<script>
    $.validate();
</script>
<script>
    CKEDITOR.replace( 'content_body'  ,{

          filebrowserBrowseUrl : '<?php echo base_url(); ?>../filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserUploadUrl : '<?php echo base_url(); ?>../filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserImageBrowseUrl : '<?php echo base_url(); ?>../filemanager/dialog.php?type=1&editor=ckeditor&fldr='


    } );

    CKEDITOR.replace( 'tab-body'  ,{

        filebrowserBrowseUrl : '<?php echo base_url(); ?>/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserUploadUrl : '<?php echo base_url(); ?>/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserImageBrowseUrl : '<?php echo base_url(); ?>/filemanager/dialog.php?type=1&editor=ckeditor&fldr='


    } );

    CKEDITOR.replace( 'tab-body2'  ,{

        filebrowserBrowseUrl : '/demo/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserUploadUrl : '/demo/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserImageBrowseUrl : '/demo/dubaisetup/filemanager/dialog.php?type=1&editor=ckeditor&fldr='


    } );
    CKEDITOR.replace( 'tab-body3'  ,{

        filebrowserBrowseUrl : '/demo/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserUploadUrl : '/demo/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserImageBrowseUrl : '/demo/filemanager/dialog.php?type=1&editor=ckeditor&fldr='


    } );CKEDITOR.replace( 'tab-body4'  ,{

        filebrowserBrowseUrl : '/demo/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserUploadUrl : '/demo/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserImageBrowseUrl : '/demo/filemanager/dialog.php?type=1&editor=ckeditor&fldr='


    } );
    CKEDITOR.replace( 'tab-body5'  ,{

        filebrowserBrowseUrl : '/demo/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserUploadUrl : '/demo/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserImageBrowseUrl : '/demo/filemanager/dialog.php?type=1&editor=ckeditor&fldr='


    } );
    CKEDITOR.replace( 'tab-body6'  ,{

        filebrowserBrowseUrl : '/demo/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserUploadUrl : '/demo/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserImageBrowseUrl : '/demo/filemanager/dialog.php?type=1&editor=ckeditor&fldr='


    } );
    
    
    
     CKEDITOR.replace( 'about_service_desc'  ,{

        filebrowserBrowseUrl : '/demo/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserUploadUrl : '/demo/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserImageBrowseUrl : '/demo/filemanager/dialog.php?type=1&editor=ckeditor&fldr='


    } );
    
     CKEDITOR.replace( 'about_choose_desc'  ,{

        filebrowserBrowseUrl : '/demo/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserUploadUrl : '/demo/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserImageBrowseUrl : '/demo/filemanager/dialog.php?type=1&editor=ckeditor&fldr='


    } );
    
     CKEDITOR.replace( 'about_support_desc'  ,{

        filebrowserBrowseUrl : '/demo/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserUploadUrl : '/demo/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserImageBrowseUrl : '/demo/filemanager/dialog.php?type=1&editor=ckeditor&fldr='


    } );
    
    
    
    
</script>
<!-- script to add new tags-->
<script>
    $('.add-tag').click(function(){
        var value = $(this).attr("id");
        $('#new_tags').val($('#new_tags').val() + value);
    });
</script>
<!-- script to remove tags-->
<script>
    $('.remtag').click(function(){

        var term = $(this).attr("id");
        var content = $('#content_id').val();

        var postData = {
            'term_id' : term,
            'content_id' : content
        };


        $.ajax({
            type: "POST",
            url: '<?php echo base_url() ?>index.php/content/rmv_content_tag',
            dataType: "html",

            data: postData, // appears as $_GET['id'] @ your backend side
            success: function(data) {

                location.reload();

            }

        });
    });


</script>
<script>
    $(document).ready(function(e){

        var  value = $('.page_type').val();

        if (value == "Page") {

            $('#multi_tab').show();
        }
        else if(value == "About") {
            $('#multi_tab').hide();
        }
        else if(value == "Services") {
            $('#multi_tab').show();
        }
        else if(value == "Article") {
            $('#multi_tab').show();
        }
        else if(value == "Contact"){
            $('#multi_tab').show();
        }
        else {
            $('#multi_tab').hide();
        }

        $('.page_type').change(function(){
            var  value = $('.page_type').val();
            if (value == "Page") {

                $('#multi_tab').show();
            }
            else if(value == "About") {
                $('#multi_tab').hide();
            }
            else if(value == "Services") {
                $('#multi_tab').show();
            }
            else if(value == "Article") {
                $('#multi_tab').show();
            }
            else if(value == "Contact"){
                $('#multi_tab').hide();
            }
            else {
                $('#multi_tab').hide();
            }
        })
    })
</script>

<script>

    $('#save_content').click(function(e)
    {

        $("#type_error").text("");
        $("#parallex_error").text("");
        var a=0;
        var b=0;

        var ext1 =  $('#featuredimg').val().split('.').pop().toLowerCase();
        var ext2 =  $('#paralleximg').val().split('.').pop().toLowerCase();

        if(ext1 == "")
        {
            a = 1;
        }
        else
        {
            if($.inArray(ext1, ['gif','png','jpg','jpeg']) == -1)
            {
                a = 0
            }
            else
            {

                a = 1;
            }
        }


        if(ext2 == "")
        {
            b = 1;
        }
        else
        {
            if($.inArray(ext1, ['gif','png','jpg','jpeg']) == -1)
            {
                b = 0
            }
            else
            {

                b = 1;
            }
        }





    });
</script>

<style type="text/css">
    <style type="text/css">
  .multiselect {
  width: 200px;
}

.selectBox {
  position: relative;
}

.selectBox select {
  width: 100%;
  font-weight: bold;
}

.overSelect {
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
}

#checkboxes {
  display: none;
  border: 1px #dadada solid;
}

#checkboxes label {
  display: block;
}

#checkboxes label:hover {
  background-color: #1e90ff;
}
</style>
</style>
