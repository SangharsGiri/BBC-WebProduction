<section class="search-pg">
    <div class="hero-container bg-black">
        <div class="container">
            <div class="col-md-12 hero-header"> <h1 class="stronger">Forex Exchange</h1>
               </div>

        </div>
    </div>

</section>

<section class="inner-details">
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="TitreProduit">

                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-home"></i>
                            </a></li>

                        <li class="active">Forex </li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-md-6">
                <form method="post" action="">
                <label>
                    Forex Date
                </label>
                <div class="input-group">
                    <input type="text" class="form-control"
                           value="" class="" id="datepicker_arrival"
                           name="date" data-validation="date" data-validation-format="mm/dd/yyyy" onchange="forex(this)">
                    </div>


      <span class="input-group-btn">
<!--<button type="submit" class="btn btn-app-download btn-primary" >Search</button>-->
<a type="submit" class="btn btn-app-download btn-primary" onclick="forex(this)">Search</a>

    SEARCH
      </span>
                </form>
                </div><!-- /input-group -->



        </div>

        <div class="row">
            <div class="col-md-12">
                <h3 id="date_heading">
                    Forex rates as on <?php echo date_convert(date($forex_date)) ;?></h3>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Currency</th>
                            <th>Currency Code</th>
                            <th>Unit</th>
                            <th>Buying Rate</th>
                            <th>Selling Rate</th>
                        </tr>
                        </thead>
                        <tbody id="forex">
                        <?php
                        if(!empty($records)) {
                            foreach ($records as $row) {
                                ?>
                                <tr>
                                <th scope="row"><?php echo $row['currency'];?> </th >
                                <td> <?php echo $row['currency_code'];?></td >
                                <td> <?php echo $row['unit'];?></td >
                                <td> <?php echo $row['buying_rate'];?></td >
                                <td> <?php echo $row['selling_rate'];?></td >
                            </tr >
                            <?php
                                    }
                        }
                        else
                        {
                            ?>
                            <tr>

                                <td colspan="5">No Records</td>
                            </tr>

                       <?php
                        }
                        ?>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

    <script>
    $(function() {
       
        $( "#datepicker_arrival" ).datepicker();
    });

</script>

<script type="text/javascript">
    $(document).ready(function() {
        $.getJSON("<?= base_url()?>exchange", function( data ) {
            console.log(data);
            var htm="";
            var today=data['today'];
            var currency=data['currency'];
            for(var key in today){
                for(var i in currency){
                    if(currency[i]['currency_code']==today[key]['BaseCurrency']){
                        var tr='<tr role="row" class="odd">';
                        tr+='<td class="sorting_1">'+currency[i]['currency']+'</td>';
                        tr+='<td>'+today[key]['BaseCurrency']+'</td>';
                        tr+='<td>'+today[key]['BaseValue']+'</td>';
                        tr+='<td>'+today[key]['TargetBuy']+'</td>';
                        tr+='<td>'+today[key]['TargetSell']+'</td>';
                        tr+='</tr>';
                        htm+=tr;
                    }
                }

            }
            $('#forex').html(htm);
        });
    });
</script>

<script>
    $.validate();
</script>
<script>
    function forex(el){
        var desired=$('#datepicker_arrival').val();
        $.getJSON("<?= base_url()?>exchange/index/"+desired, function(data) {
            $('#date_heading').text('Forex rates as on '+data['new_date']);
            var htm="";
            var today=data['today'];
            var currency=data['currency'];
            for(var key in today){
                for(var i in currency){
                    if(currency[i]['currency_code']==today[key]['BaseCurrency']){
                        var tr='<tr role="row" class="odd">';
                        tr+='<td class="sorting_1">'+currency[i]['currency']+'</td>';
                        tr+='<td>'+today[key]['BaseCurrency']+'</td>';
                        tr+='<td>'+today[key]['BaseValue']+'</td>';
                        tr+='<td>'+today[key]['TargetBuy']+'</td>';
                        tr+='<td>'+today[key]['TargetSell']+'</td>';
                        tr+='</tr>';
                        htm+=tr;
                    }
                }

            }
            if(htm !=""){
                $('#forex').html(htm);
            }else{
                $('#forex').html('<tr><td colspan="5">No Records</td></tr>');
            }
        });
    }
</script>