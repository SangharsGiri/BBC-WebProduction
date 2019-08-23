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
                    <div class="tab-ads">

                        <div class="tab-pane fade active in" id="home">
                            <div class="col-md-12">
                                    <div class="form-group">
                                       <label>ADS NAME<span class="asterisk">*</span></label>
                                        <input type="text" name="ads_name" data-validation="required" class="form-control" value="<?php echo (isset($detail['ads_name']) && $detail['ads_name'] != "") ? $detail['ads_name'] : ""; ?>"
                                               autocomplete="off" class="regular-text required valid"
                                               kl_virtual_keyboard_secure_input="on">
                                           </div>
                                       </div>
                            
                                <div class="col-md-12">
                                    <div class="form-group">
                                       <label>URL<span class="asterisk">*</span></label>
                                        <input type="text" name="ads_url" data-validation="required" class="form-control" value="<?php echo (isset($detail['ads_url']) && $detail['ads_url'] != "") ? $detail['ads_url'] : ""; ?>"
                                               autocomplete="off" class="regular-text required valid"
                                               kl_virtual_keyboard_secure_input="on">
                                           </div>
                                       </div>  
                                       <div class="col-md-12">
                                            <div class="form-group">
                                               <label>Location<span class="asterisk">*</span></label>
                                                <select class="form-control" name="location" data-validation="required">
                                                <option value="">Select Location</option>
                                                    <option value="Sidebar-Top">Single page sidebar top</option>
                                                    <option value="category-page">category page</option>
                                                    <option value="index-mid">Index Mid</option>
                                                    <option value="index-top">Index Top</option>
                                                    <option value="aside-province">Aside Province</option>
                                                    <option value="page-mid">Page Mid</option>
                                                    <option value="header-side">Header Side</option>
                                                     <option value="Below-Menu">Below Menu</option>
                                            </select>
                                            </div>
                                       </div>      
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label>Featured Image</label>
                                                        <?php
                                                        if(isset($ads['featured_img']))
                                                        {

                                                            ?>
                                                            <div class="remove_option">

                                                                <?php
                                                                $path  =  '../uploads/ads/';
                                                                ?>
                                                                <img src="<?php echo $path. $ads['featured_img'];?>" alt="featured_image" style="width: 50%">

                                                                <span class="btn btn-info remove_btn" id="btn_remove">Remove</span>
                                                            </div>
                                                            <input type="hidden" name="pre_featuredimg" value="<?php echo $ads['featured_img']; ?>">
                                                            <div id="image_input">

                                                                <span>(Image Dimension 853*405 px)</span>
                                                                <input type="file" class="form-control" name="featured_img" id="featuredimg">
                                                                <span id="type_error"></span>
                                                            </div>
                                                            <?php
                                                        }
                                                        else
                                                        {
                                                            ?>

                                                            <span>(Image Dimension 853*405 px)</span>
                                                            <input type="file" name="featured_img" class="form-control"  id="featuredimg">
                                                            <span id="type_error"></span>
                                                            <?php
                                                        }
                                                        ?>
                                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <label>status?</label>
                                    <input type="radio" name="status" class="regular-text" data-validation="required" value="ACTIVE">Yes
                                    <input type="radio" name="status" class="regular-text" data-validation="required" value="IN ACTIVE">No

                                </div>
                        </div>

                        <div class="col-sm-12">
                        <p class="submit">
                            <input type="submit" name="Setting Btn" class="button" value="Save">
                        </p>
                    </div>
                    </div>
                </form>
            </div>
        </div>


    </div>
</div>
<script>
    $.validate();
</script>