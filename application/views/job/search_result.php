<style>
.search-form { padding-top: 6%; }
    .search-form .form-group {
  float: right !important;
  transition: all 0.35s, border-radius 0s;
  width: 32px;
  height: 32px;
  background-color: #fff;
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
  border-radius: 25px;
  border: 1px solid #ccc;
}
.search-form .form-group input.form-control {
  padding-right: 20px;
  border: 0 none;
  background: transparent;
  box-shadow: none;
  display:block;
}
.search-form .form-group input.form-control::-webkit-input-placeholder {
  display: none;
}
.search-form .form-group input.form-control:-moz-placeholder {
  /* Firefox 18- */
  display: none;
}
.search-form .form-group input.form-control::-moz-placeholder {
  /* Firefox 19+ */
  display: none;
}
.search-form .form-group input.form-control:-ms-input-placeholder {
  display: none;
}
.search-form .form-group:hover,
.search-form .form-group.hover {
  width: 100%;
  border-radius: 4px 25px 25px 4px;
}
.search-form .form-group span.form-control-feedback {
  position: absolute;
  top: -1px;
  right: -2px;
  z-index: 2;
  display: block;
  width: 34px;
  height: 34px;
  line-height: 34px;
  text-align: center;
  color: #3596e0;
  left: initial;
  font-size: 14px;
}
</style>
<div class="container get_cv_list">
    <div class="row">
        <div class="col-sm-5">
        <h3 style="padding-left: 1%;">
            Search CV
        </h3>
        </div>
        <div class="col-sm-4">
          <form action="search_cv/execute_search" method="post" class="search-form">
                <div class="form-group has-feedback">
            		<label for="search" class="sr-only">Search</label>
            		<input type="text" class="form-control" name="search" id="search" placeholder="search">
              		<span class="fa fa-search form-control-feedback"></span>
            	</div>
            </form>
        </div>
    </div>
    <div class="row">
        
        
       
        <?php
        $i = 1;
        foreach ($results as $val)
        {
        $path = 'uploads/package/'.$val['job_id'].'/';
        ?>
        <div class="col-sm-9 item search-cv-abv">
            <div class="row">
                <div class="maid">
                    <div class="col-sm-3 ">
                        <div class="maidprofile">
                            <img src="<?php echo $path.$val['image'];?>" id="" class="img-responsive">
                        </div>
                    </div>
                    <div class="col-sm-9">

                        <div class="maidprofile_info">
                            <div class="col-sm-12">
                            <div class="profiletop">
                                
                                    <h4 class="user_name pull-left"><?php echo $val['firstname']; ?> <?php echo $entry['lastname']; ?></h4>
                                    
                                
                            </div>
                            </div>

                            <div class="maidprofiledetails" >
                                <div class="col-sm-6">
                                    <p><strong>Nationality: </strong> <span> <?php echo $val['country']; ?></span></p>
                                    <p><strong>Qualification : </strong> <span><?php echo $val['qualification']; ?></span></p>
                                    <p><strong>Job Type : </strong> <span><?php echo $val['jobtype']; ?></span></p>


                                </div>

                                <div class="col-sm-5">
                                    <p><strong>location : </strong> <span><?php echo $val['joblocation']; ?></span></p>
                                    <p><strong>Job Role : </strong> <span><?php echo $val['jobrole']; ?></span></p>
                                    <p><strong>Experience : </strong> <span><?php echo $val['experience']; ?></span></p>

                                </div>
                                <div class="col-sm-1">
     <button type="button" class="btn btn-success pull-right btn-xs get-cv" data-toggle="modal" data-target="#myModal-<?php echo $entry['job_id']; ?>">Get CV</button>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>


                       

                        <!-- Modal -->
                        <div id="myModal-<?php echo $entry['job_id']; ?>" class="modal fade" role="dialog">
                            <div class="modal-dialog  job-search-modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header modal-head-spanio">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <span class="modal-title-spanio">If you need this guys CV please fillup the form below. </span>
                                    </div>
                                    <div class="modal-body">
                                        <form action="<?php base_url('search_cv/form'); ?>" method="post">
                                            <div class="form-group">
                                                <label>Full Name</label>
                                                <input type="tex" class="form-control" required name="fullname" placeholder="Full Name">
                                            </div>
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="email" class="form-control" required name="email" placeholder="Email">
                                            </div>
                                            <div class="form-group">
                                                <label>Contact</label>
                                                <input type="tex" class="form-control" required name="mobile" placeholder="Contact">
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-success" name="submit_cv_data">Send</button>
                                            </div>
                                        </form>
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>


                </div>
            </div>
        </div>


            <?php
        }

        ?>



    </div>
</div>













<script>
    // Get the modal
    var modal = document.getElementById('myModal');

    // Get the button that opens the modal
    <?php

    foreach ($last_entries->result_array() as $entry)
    {

    ?>
    var btn = document.getElementById("<?php echo $entry['job_id']?>");
    <?php
    }
    ?>
    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal
    btn.onclick = function() {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>