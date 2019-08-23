<?php
$settings = $this->site_settings_model->get_site_settings();
?>
<?php

$logo = $this->db->query("SELECT * FROM igc_pictures WHERE locate ='6' AND delete_status ='0'");
$logors = $logo->result_array();

?>
<!-- Inner Intro -->
<div class="inner-intro inner-intro-bg" style="background-image: url(<?php
foreach($logors  as $logos ){

    ?>


    <?php
    $path = 'uploads/pictures/';
    if (file_exists($path.$logos['pictures_image']) && $logos['pictures_image'] !="")
    {
        ?>
        <?php echo $path.$logos['pictures_image'];?>

        <?php
    }

    ?>

    <?php
}
?>)">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="page-title">Gallery</h3>
                <ul class="breadcrumb breadcrumb-area">
                    <li><a href="<?php echo base_url(); ?>">Home</a></li>
                    <li class="active">Gallery</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-12" style="margin-top: 4%; margin-bottom: 4%;">
            <div class="col-sm-1">
                &nbsp;
            </div>
            <div class="col-sm-10" style="background-color: #fbfbfb; padding-top: 20px; padding-bottom: 20px; border-radius: 5px;">
                <h3 style="text-align: center;">Top Cloud HR & Management Consultancy </h3>
                <p style="text-align: center;">Please, fill up the form to get your questions answer</p>
                <br />
                <form class="form-horizontal" role="form" action="<?php echo site_url('home/questions');?>" method="post" >
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="name">Full Name</label>
                                    <input id="name" name="fullname" type="text" class="form-control" required placeholder="Full Name">
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-4">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input id="email" name="email" type="email" class="form-control" required placeholder="Email address">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="phone">Contact Number</label>
                                    <input id="phone" name="phone" type="text" class="form-control"  placeholder="Contact Number">
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row">




                        <div class="col-sm-12">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <select id="basic" name="query" class="selectpicker show-tick form-control" data-live-search="true">
                                        <option>Choose Question</option>
                                        <?php

                                        $question = $this->db->query("SELECT * FROM igc_content WHERE content_type ='QA' AND delete_status ='0' ");
                                        $questions= $question->result_array();



                                        ?>

                                        <?php
                                        foreach($questions as $rows){
                                            ?>
                                            <option value="<strong><?php echo $rows['content_page_title']; ?></strong> <br /> <?php echo $rows['content_body']; ?>"><?php echo $rows['content_page_title']; ?></option>



                                            <?php
                                        }
                                        ?>


                                        </optgroup>
                                    </select>
                                </div>
                            </div>

                        </div>



                    </div>



                    <div class="col-sm-12">
                        <div class="form-group">
                            <div class="g-recaptcha" data-sitekey="6LeOlzsUAAAAAESYx24V_LmwrKYPArj60MXlxssR"></div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Send Query</button>
                </form>
            </div>
            <div class="col-sm-1">
                &nbsp;
            </div>
        </div>
    </div>
</div>

