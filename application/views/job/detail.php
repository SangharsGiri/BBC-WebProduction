<div class="container">
    <div class="row">
        <?php foreach($jobs as $rows){?>
        <div class="col-sm-9">
            <h3><?php  echo $rows->news_title;?></h3>

        </div>
        <?php }?>
        <div class="col-sm-3">

        </div>
    </div>
</div>



<?php foreach($jobs as $rows){?>
    <tr>
        <td><?php  echo $rows->news_id;?></td>
        <td><?php  echo $rows->news_title;?></td>
        <td><?php  echo $rows->job_location;?></td>
        <td><?php  echo $rows->no_of_vacancy;?></td>

    </tr>
<?php }?>