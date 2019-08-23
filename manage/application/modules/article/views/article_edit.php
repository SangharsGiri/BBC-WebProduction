
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
                <?php echo (isset($title) && $title !="") ? $title:""; ?>
            </div>

            <div class="panel-body">

                <form class="tab_form" method="post" action="" enctype="multipart/form-data">
                    <div class="tab-content">

                        <div class="tab-pane fade active in" id="home">
                        <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Title<span class="asterisk">*</span></label>
                                        <input type="text" name="title" value= "<?php echo $records['title']; ?>" data-validation="required" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Sub Title<span class="asterisk">*</span></label>
                                        <input type="text" name="sub-title" value= "<?php echo $records['sub-title']; ?>" data-validation="required" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Slug<span class="asterisk">*</span></label>
                                        <input type="text" name="slug" value= "<?php echo $records['slug']; ?>" data-validation="required" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>category<span class="asterisk">*</span></label>
                                        <input type="text" name="category_id" value= "<?php echo $records['category_id']; ?>" data-validation="required" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Tag Line<span class="asterisk">*</span></label>
                                        <input type="text" name="tag-line" value= "<?php echo $records['tag-line']; ?>" data-validation="required" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>By Line<span class="asterisk">*</span></label>
                                        <input type="text" name="by-line" value= "<?php echo $records['by-line']; ?>" data-validation="required" class="form-control" />
                                    </div>
                                </div>
                            </div> 
                            <div class="row">
                                <div class="col-sm-12">
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
                                        <input type="hidden" name="pre_testimg" value="" data-validation="required">
                                        <div id="image_input">
                                            <input type="file" class="form-control" name="featured_image" id="featured_image" data-validation="required">
                                            <p id="sig_error1" style="display:none; color:#FF0000;">Image formats should be JPG, JPEG, PNG or GIF.
                                            </p>
                                        </div>
                                        <?php
                                    }
                                    else
                                    {
                                        ?>
                                        <input type="file" class="form-control" name="test_image" id="test_image" data-validation="required">
                                        <p id="sig_error1" style="display:none; color:#FF0000;">Image formats should be JPG, JPEG, PNG or GIF.</p>

                                        <?php
                                    }
                                    ?>
                                </div>
                            </div> 
                            <div class="col-sm-12">
                                    <label>Body</label>
                                    <textarea rows="5" cols="100" name="body" id="body"><?php echo (isset($records['body']) && $records['body'] !="") ? $records['body']:""; ?></textarea>
                                    
                                </div>  
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>show in menu </label>
                                        <input type="radio" name="show_in_menu" <?php echo (isset($records['show_in_menu']) && $records['show_in_menu'] =="ACTIVE")?"checked":"";?> class="regular-text" data-validation="required" value="ACTIVE">Yes
                                        <input type="radio" name="show_in_menu" <?php echo (isset($records['show_in_menu']) && $records['show_in_menu'] =="IN ACTIVE")?"checked":"";?> class="regular-text" data-validation="required" value="IN ACTIVE">No

                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>status </label>
                                        <input type="radio" name="status" <?php echo (isset($records['status']) && $records['status'] =="ACTIVE")?"checked":"";?> class="regular-text" data-validation="required" value="ACTIVE">Yes
                                        <input type="radio" name="status" <?php echo (isset($records['status']) && $records['status'] =="IN ACTIVE")?"checked":"";?> class="regular-text" data-validation="required" value="IN ACTIVE">No

                                    </div>
                                </div>
                            </div>
                       

                        </div>
                        <p class="submit"> 
                            <input type="submit" name="submit" id="submit" class="btn btn-danger" value="Save">
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
</body>
</html>




