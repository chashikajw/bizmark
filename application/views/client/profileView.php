

  <div class="span12">
    <img src="<?php echo base_url(); ?>assets/images/food.png" style="margin-right:130px;margin-bottom:20px;margin-top:0px;width:1110px ;height:450px"/>
  </div>
  <div class="row">

      <div class="span3">
      <img class="media-object" src="<?php echo base_url(); ?>assets/images/macdonald.png" style="margin-left:0px;margin-bottom:10px;margin-top:0px;width:100px ;height:100px; position: relative;left: 32px">
      </div>
      <div class="span9 ">
      <div class="page-header text-center">
        <h1><?= $business_data->name; ?></h1>
      </div>
      
      </div>

  </div>

  <div class="container">
  <div class="row">
    <div class="span5" style="position: relative;left: 32px">
      <div class="panel panel-default">
        <div class="panel-heading text-middle">
          <h3 class="panel-title">Followers</h3>
        </div>
        <div class="panel-body">
          Followers:<input type="text" name="Followers" value=" ">
          <button type="button" class="btn btn-default" style="position: relative;bottom: 5px">+Follows</button>
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
      <div class="panel panel-default">
        <div class="panel-heading text-middle">
          <h3 class="panel-title">Contact Details</h3>
        </div>
        <div class="panel-body">

          <p><?= $business_data->handler; ?></p>
          <p><?= $business_data->city; ?></p>
          <p><?= $business_data->opening_time; ?></p>
          <p><?= $business_data->closing_time; ?></p>
          <p><img class="media-object" src="<?php echo base_url(); ?>assets/images/Macmap.png" style="width:340px ;height:200px"></p>

        </div>

      </div>

      </div>

      <div class="span7">
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
      </div>
      </div>
  </div>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
