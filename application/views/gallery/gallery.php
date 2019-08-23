<?php

$whyamrits = $this->db->query("SELECT * FROM igc_pictures WHERE locate ='4' AND delete_status ='0'");
$whyamritsd = $whyamrits->result_array();



?>

<section>
    <div class="widget-top-title-2 par" style="background: url(<?php
    $path_amd = 'uploads/pictures/';
    foreach($whyamritsd  as $rows ){

        ?>

        <?php echo $path_amd.$rows['pictures_image'];?>


        <?php
    }
    ?>); padding-top: 50px; padding-bottom: 50px;">
        <div class="bg-mask">
            <div class="container">
                <h2>Our Gallery</h2>
            </div>
        </div>
    </div>
</section><!-- /.widget geo map-->





<div class="container portfolio-spanio" style="padding-bottom: 50px">
   <div class="row">

       <div class="gaps size-lg"></div>

       <!-- Gallery -Photo #D -->
       <div class="gallery gallery-col3 gallery-grids gallery-lightbox hover-zoom">
           <ul class="gallery-list">
               <?php
               if(!empty($galleries))
               {
               ?>

               <?php
               $path  = 'uploads/gallery/';
               $i=1;
               foreach($galleries as $rows) {

               $actives = (isset($i) && $i == "1") ? "active" : "";
               ?>
               <li>
                   <a href="<?php echo $path.$rows['gallery_image'];?>" title="<?php echo $rows['gallery_caption']; ?>">
                       <div class="gallery-item">
                           <img src="<?php echo $path.$rows['gallery_image'];?>" alt="<?php echo $rows['gallery_title']; ?>">
                       </div>
                   </a>
               </li>

                   <?php
                   $i++;
               }
                   ?>


                   <?php
               }
               ?>


           </ul>
       </div>

   </div>
</div>


