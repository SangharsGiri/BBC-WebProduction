
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
                                        <label>Category Name<span class="asterisk">*</span></label>
                                        <input type="text" name="category_name" value= "<?php echo $records['category_name']; ?>" data-validation="required" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>slug<span class="asterisk">*</span></label>
                                        <input type="text" name="slug" value= "<?php echo $records['slug']; ?>" data-validation="required" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Rank<span class="asterisk">*</span></label>
                                        <input type="number" name="rank" value= "<?php echo $records['rank']; ?>" data-validation="required" class="form-control" />
                                    </div>
                                </div>
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




