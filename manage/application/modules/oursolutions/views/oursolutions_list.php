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
        <!-- Advanced Tables -->
        <div class="panel panel-info">
            <div class="panel-heading">
                <i class="fa fa-plus-square-o"></i><a href="<?php echo site_url('oursolutions/form');?>"> Add New </a>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>S.N</th>
                            <th>Title</th>

                            <th>Status</th>

                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $i = 1;
                        foreach($records as $row)
                        {
                            ?>

                            <tr class="odd gradeX">
                                <td><?php echo $i++;?></td>
                                <td><?php echo $row['content_page_title'];?></td>

                                <td><?php
                                    echo(isset($row['publish_status']) and $row['publish_status'] == "1") ? "Active" : "Inactive";
                                    ?></td>

                                <td class="center">
                                    <div class="btn-group">
                                        <a href="<?php echo site_url('oursolutions/form/'. $row['content_id']);?>" class="btn btn-success" title="Edit"><i class="fa fa-pencil-square-o"></i></a>
                                       
                                        <a class="btn btn-danger" data-target="#myModal_delete<?php echo $row['content_id'];?>" data-toggle="modal" title="Delete"><i class="fa fa-trash-o"></i></a>
                                    </div>
                                    
                                     <div class="btn-group">
                                        <?php if($row['shows_with'] == 'model'): ?>
                                            <a class="btn btn-primary" href="<?php echo site_url('oursolutions/list_photos/'. $row['content_id']);?>" data-toggle="tooltip" title="Image Gallery"><i class="fa fa-image"></i></a>
                                        <?php endif; ?>
                                        
                                        <?php if($row['shows_with'] == 'product'): ?>
                                            <a class="btn btn-primary" href="<?php echo site_url('oursolutions/list_photos/'. $row['content_id']);?>" data-toggle="tooltip" title="Image Gallery"><i class="fa fa-image"></i></a>
                                            <a class="btn btn-default" href="<?php echo site_url('oursolutions/list_products/'. $row['content_id']);?>" data-toggle="tooltip" title="Image Gallery" style="background-color: #444;color: #f4f4f4;"><i class="fa fa-product-hunt"></i> </a>    
                                        <?php endif; ?>
                                    </div>
                                    
                                    <!-- Modal for news -->
                                    <div id="myModal_news<?php echo $row['content_id'];?>" class="modal fade" role="dialog">
                                        <div class="modal-dialog">

                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">NewsLetter Confirmation</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Are you sure to send this Information</p>
                                                </div>

                                                <div class="modal-footer">
                                                    <input type="hidden" class="hidden_link_news" value="<?php echo site_url('oursolutions/send/'. $row['content_id']); ?>">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                                    <button type="button" class="btn btn-default news_send">Ok</button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!--modal-->
                                    <!-- Modal for  delete -->
                                    <div id="myModal_delete<?php echo $row['content_id'];?>" class="modal fade" role="dialog">
                                        <div class="modal-dialog">

                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Content Delete Confirmation</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Are you sure to delete this Information</p>
                                                </div>

                                                <div class="modal-footer">
                                                    <input type="hidden" class="hidden_link_delete" value="<?php echo site_url('oursolutions/delete/'. $row['content_id']); ?>">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                                    <button type="button" class="btn btn-default delete">Ok</button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!--modal-->
                                </td>
                            </tr>
                        <?php
                        }
                        ?>

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        <!--End Advanced Tables -->
    </div>
</div>
<!-- /. ROW  -->
<script>
    $.validate();
</script>
<script>
    $('.delete').click(function(){

        var values = $(this).parent() .find('.hidden_link_delete').val();
        window.location =  values;
    });

</script>

<script>
    $('.news_send').click(function(){

        var values = $(this).parent() .find('.hidden_link_news').val();
        window.location =  values;
    });

</script>