<div class="hero-area">
    <div class="page-header dark">
        <div class="container">
            <!-- Breadcrumb -->
            <ol class="breadcrumb">
                <li><a href="<?php echo base_url(); ?>">Home</a></li>
                <li class="active">Blog</li>
            </ol>
            <h1>Blog</h1>
        </div>
    </div>
</div>
<!-- Main Content -->
<div id="main-container">
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="row">
                        <ul class="grid-holder isotope" data-sort-id="gallery">
                            <?php
                            if(! empty($blogs))
                            {
                                foreach($blogs as $rows)
                                {

                                    ?>
                                    <li class="col-md-4 col-sm-4 grid-item blog-grid-item format-standard">
                                        <div class="grid-item-inner">
                                            <a href="<?php echo site_url('blog/detail/'.$rows['content_url']);?>" class="media-box">
                                                <?php
                                                $path = 'uploads/content/';

                                                if ($rows['featured_img'] !="")
                                                {
                                                    ?>
                                                    <img  src="<?php echo base_url().$path.$rows['featured_img'];?>"  alt="Images">

                                                    <?php
                                                }

                                                ?>


                                            </span>
                                            </a>
                                            <div class="grid-item-content">
                                                <h3 class="blog-title"><a href="<?php echo site_url('blog/detail/'.$rows['content_url']);?>"><?php echo $rows['content_page_title'] ;?></a></h3>
                                                <div class="blog-item-meta">
                                                    <div><a href="<?php echo site_url('blog/detail/'.$rows['content_url']);?>" class="meta-data"><i class="fa fa-clock-o"></i> <?php echo date_converter($rows['created']);?></a></div>

                                                </div>
                                                <p><?php echo substr($rows['content_body'], 0,160);?></p>

                                            </div>
                                        </div>
                                    </li>




                                    <?php
                                }

                            }
                            ?>


                        </ul>
                    </div>
                    <!-- Page Pagination -->

                </div>

            </div>
        </div>
    </div>
</div>

