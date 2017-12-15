<div class="item span9">





<?php

foreach ($business_data as $item) {
	?>
<div class="panel panel-default" style="margin-top: 20px">

<div class="container-fluide">

<div class="row">
  <div class="span8">

    <div class="row">
      <div class="span5">
        <a href="#" class="thumbnail" style="width: 200px">
           <?php echo "<img src='" . base_url() . "assets/business/" . $item->logo_path . "' alt=''/>" ?>
        </a>
      </div>
        <div class="span2">
                 <h5><?php echo $item->name; ?></h5>
                 <p><?php echo $item->description; ?></p>


                 <span class="fa fa-star checked"></span>
                 <span class="fa fa-star checked"></span>
                 <span class="fa fa-star checked"></span>
                 <span class="fa fa-star"></span>
                 <span class="fa fa-star"></span>
                 <!-- <h4><a class="btn" href="">VIEW</a> -->

                     <!-- <span class="pull-right">$222.00</span></h4> -->
        </div>
         <button class="btn btn-info" style="margin-top:40px; margin-left: 10px">View</button><br>
    </div>

  </div>
</div>
</div>
</div>
<hr>

<?php }?>

