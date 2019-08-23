<div class="row">
    <div class="col-lg-12">
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
                <?php echo (isset($title) && $title != "") ? $title : ""; ?>
            </div>

            <div class="panel-body">

                <form class="tab_form" method="post" action="" enctype="multipart/form-data">
                    <div class="tab-content">

                        <div class="tab-pane fade active in" id="home">

                           <div class="col-md-6">
                                    <div class="form-group">
                                       <label>Title<span class="asterisk">*</span></label>
                                        <input type="text" name="title" data-validation="required" class="form-control" value="<?php echo (isset($detail['title']) && $detail['title'] != "") ? $detail['title'] : ""; ?>"
                                               autocomplete="off" class="regular-text required valid"
                                               kl_virtual_keyboard_secure_input="on"></td>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                       <label>Slug<span class="asterisk">*</span></label>
                                        <input type="text" name="slug" data-validation="required" class="form-control" value="<?php echo (isset($detail['slug']) && $detail['slug'] != "") ? $detail['slug'] : ""; ?>"
                                               autocomplete="off" class="regular-text required valid"
                                               kl_virtual_keyboard_secure_input="on"></td>


                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                       <label>Sub Title<span class="asterisk">*</span></label>
                                        <input type="text" name="sub-title" data-validation="required" class="form-control" value="<?php echo (isset($detail['sub-title']) && $detail['sub-title'] != "") ? $detail['sub-title'] : ""; ?>"
                                               autocomplete="off" class="regular-text required valid"
                                               kl_virtual_keyboard_secure_input="on"></td>


                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                       <label>category<span class="asterisk">*</span></label>
                                        <select class="form-control" name="category_id" data-validation="required">
                                           <option value="">Select category</option>
                                           <?php
                                           foreach($categories as $cat){

                                               ?>
                                               <option value="<?php echo $cat['category_id'] ?>"><?php echo $cat['category_name']; ?>

                                               </option>
                                               <?php

                                           }

                                           ?>
                                       </select>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                       <label>Tag Line<span class="asterisk">*</span></label>
                                        <input type="text" name="tag-line" data-validation="required" class="form-control" value="<?php echo (isset($detail['tag-line']) && $detail['tag-line'] != "") ? $detail['tag-line'] : ""; ?>"
                                               autocomplete="off" class="regular-text required valid"
                                               kl_virtual_keyboard_secure_input="on"></td>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                       <label>By Line<span class="asterisk">*</span></label>
                                        <input type="text" name="by-line" data-validation="required" class="form-control" value="<?php echo (isset($detail['by-line']) && $detail['by-line'] != "") ? $detail['by-line'] : ""; ?>"
                                               autocomplete="off" class="regular-text required valid"
                                               kl_virtual_keyboard_secure_input="on"></td>

                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label>Image</label>
                                    <?php
                                     if(isset($records['featured_image']))
                                    {

                                        ?>
                                        <div class="remove_option">

                                            <?php
                                            $path  =  '../uploads/article/';
                                            ?>
                                            <img src="<?php echo $path. $records['featured_image'];?>" alt="featured_image" style="max-width: 940px; max-height: 360px;">

                                            <span class="btn btn-info remove_btn" id="btn_remove">Remove</span>
                                        </div>
                                        <input type="hidden" name="pre_featuredimg" value="">
                                        <div id="image_input">
                                            <input type="file" class="form-control" name="featured_image" id="featured_image">
                                            <p id="sig_error1" style="display:none; color:#FF0000;">Image formats should be JPG, JPEG, PNG or GIF.
                                            </p>
                                        </div>
                                        <?php
                                    }
                                    else
                                    {
                                        ?>
                                        <input type="file" class="form-control" name="featured_image"  id="featured_image">
                                        <p id="sig_error1" style="display:none; color:#FF0000;">Image formats should be JPG, JPEG, PNG or GIF.</p>

                                        <?php
                                    }
                                    ?>
                                </div>
                                <div class="col-sm-12">
                                    <label>Body</label>
                                    <textarea rows="5" cols="100" name="body" id="body"><?php echo (isset($records['body']) && $records['body'] !="") ? $records['body']:""; ?></textarea>
                                    
                                </div>
                                <div class="col-sm-12">
                                    <label>show in menu?</label>
                                    <input type="radio" name="show_in_menu" class="regular-text" data-validation="required" value="ACTIVE">Yes
                                    <input type="radio" name="show_in_menu" class="regular-text" data-validation="required" value="IN ACTIVE">No

                                </div>
                                <div class="col-sm-12">
                                    <label>status?</label>
                                    <input type="radio" name="status" class="regular-text" data-validation="required" value="ACTIVE">Yes
                                    <input type="radio" name="status" class="regular-text" data-validation="required" value="IN ACTIVE">No

                                </div>
                    </div>
                    <div class="col-sm-12">
                    <p class="submit">
                            <input type="hidden" name="article_id"
                                   value="<?php echo (isset($detail['article_id']) && $detail['article_id'] != "") ? $detail['article_id'] : ""; ?>">
                            <input type="submit" name="Setting Btn" class="button" value="Save">
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    CKEDITOR.replace( 'body'  ,{

        filebrowserBrowseUrl : '/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserUploadUrl : '/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
        filebrowserImageBrowseUrl : '/filemanager/dialog.php?type=1&editor=ckeditor&fldr='


    } );


    KEDITOR.replace( 'contact-detail' );
</script>
<script>
    $.validate();
</script>