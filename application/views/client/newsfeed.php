
 <!--<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
      <script type="text/javascript">
        $(document).ready(function(){
          setInterval(function(){
            $('#show').load('<?php echo base_url(); ?>application/views/client/newsfeed.php')
          },3000);
        });

      </script> -->



<div class="item span9">
  <div class="item span9" >
    <ul class="thumbnails">

<?php

$i = 0;
foreach ($post_data as $item) {
	?>
    <center>

         <li class="span5" style="margin-left: 300px; margin-bottom: 30px ; box-shadow: 5px 5px 5px 5px rgba(20, 2, 4, 0.2);width: 65%">

           <div class="thumbnail">
            <h3><?php echo $item->title; ?></h3>
               <?php echo "<img src='" . base_url() . "assets/business/" . $item->image_path . "' alt=''/>" ?>
               <div class="caption">

                 <p><?php echo $item->content; ?></p>
                 <center>

                 <span class="fa fa-star checked"></span>
                 <span class="fa fa-star checked"></span>
                 <span class="fa fa-star checked"></span>
                 <span class="fa fa-star"></span>
                 <span class="fa fa-star"></span>
                 <!-- <h4><a class="btn" href="">VIEW</a> -->
                 </center>
                     <!-- <span class="pull-right">$222.00</span></h4> -->
               </div>
           </div>
         </li>


<?php
$i += 1;
	?>

</ul>
</div>
<div class="item span9">
    <ul class="thumbnails">


<?php }
?>

</ul>
</div>

    </div>
</div>












































