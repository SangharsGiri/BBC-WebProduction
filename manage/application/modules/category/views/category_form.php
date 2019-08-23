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

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                       <label>Category Name<span class="asterisk">*</span></label>
                                        <input type="text" name="category_name" data-validation="required" class="form-control" value="<?php echo (isset($detail['category_name']) && $detail['category_name'] != "") ? $detail['category_name'] : ""; ?>"
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
                                       <label>Rank<span class="asterisk">*</span></label>
                                        <input type="number" name="rank" data-validation="required" class="form-control" value="<?php echo (isset($detail['rank']) && $detail['rank'] != "") ? $detail['rank'] : ""; ?>"
                                               autocomplete="off" class="regular-text required valid"
                                               kl_virtual_keyboard_secure_input="on"></td>
                            </div>
                            <div class="row">
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


                        <p class="submit">
                            <input type="hidden" name="category_id"
                                   value="<?php echo (isset($detail['category_id']) && $detail['category_id'] != "") ? $detail['category_id'] : ""; ?>">
                            <input type="submit" name="Setting Btn" class="button" value="Save">
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