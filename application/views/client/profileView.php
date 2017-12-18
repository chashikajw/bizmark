

  <li class="span5" style="margin-left: 30px; margin-bottom: 30px ; box-shadow: 5px 5px 5px 5px rgba(20, 2, 4, 0.2);width: 100%;height:50%">

  <div class="row">

      <div class="span3">
      <img class="media-object" src="<?php echo base_url(); ?>assets/business/<?= $business_data->logo_path; ?>" style="margin-left:0px;margin-bottom:10px;margin-top:0px;width:300px ;height:300px; position: relative;left: 32px">
      </div>
      <div class="span9 ">
      <div class="page-header text-center">
        <center><h1><?= $business_data->name; ?></h1></center>
      </div>

      
      </div>

  </div>
</li>

  <div class="container">
  <div class="row">

    <div class="span5" style="position: relative;left: 32px">
      <div class="panel panel-default">
      
        <div class="panel-body">
         
          <button class="submitButton btn btn-primary btn-lg" type="submit" style="margin-top:5px;"><i class="fa fa-pencil"></i> Make complain</button>
        </div>

      </div>

      </div>

      <div class="span7">
        <div class="panel panel-default">
        <div class="panel-heading text-middle">
          <h3 class="panel-title">About Us</h3>
        </div>
        <div class="panel-body">
          <p style="font-size:90%;"><?= $business_data->description; ?></p>
        </div>

      </div>
      </div>
      </div>


    <div class="row">
    <div class="span5" style="position: relative;left: 32px">
       <li class="span5" style="margin-left: 30px; margin-bottom: 30px ; box-shadow: 5px 5px 5px 5px rgba(20, 2, 4, 0.2);width: 75%;height:50%">

      <div class="panel panel-default">
        <div class="panel-heading text-middle">
          <h3 class="panel-title">Contact Details</h3>
        </div>
        <div class="panel-body">

          <p><h4><?= $business_data->handler; ?></h4></p>
          <p><b>City : <?= $business_data->city; ?></p>
          <p>Opening time : <?= $business_data->opening_time; ?></p>
          <p>Closing time : <?= $business_data->closing_time; ?></p>
          <p><img class="media-object" src="<?php echo base_url(); ?>assets/images/Macmap.png" style="width:340px ;height:200px"></p>

        </div>

      </div>
    </li>

      </div>

      <div class="span7">
        <li class="span5" style="margin-left: 30px; margin-bottom: 30px ; box-shadow: 5px 5px 5px 5px rgba(20, 2, 4, 0.2);width: 105%;height:90%">
        <div class="panel panel-default">
        <div class="panel-heading text-middle">
          <h3 class="panel-title">Review</h3>
        </div>
        <div class="panel-body">
          <form>
            <textarea class="field form-control" rows="3" name="review_text" id="review_text" placeholder="Describe your experience at McDonald's..." style="width: 655px; height: 80px"></textarea>
          </form>
          <div class="col-md-8">

          <div class="col-md-4">
            <input name="review_id" id="review_id" type="hidden" value="0">
            <button class="submitButton btn btn-primary btn-lg pull-right" type="submit" style="margin-top:5px;"><i class="fa fa-pencil"></i> Post Review </button>
          </div>
          </div>
        </div>

      </div>
    </li>
      </div>
      </div>
  </div>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
