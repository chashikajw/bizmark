
    <!-- page content -->
<div class="right_col" role="main">
    <div class="">
      <center>


        <div class="page-title">
          <center>
            <div class="title_left">
                <h3> <?= $business_data->name; ?></h3>
            </div>
          </center>
        </div>
        </center>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <li class="span5" style="margin-left: 50px; margin-bottom: 30px ; width: 30%;height:50%">
                    <div class="x_title">
                        <h2> Business Profile </h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                       <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                        <button onclick="document.getElementById('id01').style.display='block'" class="btn btn-success">Post New Add</button>
                                    </div>
                                </div>

                                <div class="span1" style="height: 100px">

</div>


    <div class="span6" style="">

        </ul>
        <h3> Contact Form</h3>
        <hr class="soft" />
        <div class="well">

              
            <form class="modal-content animate" style="" action="<?php echo base_url(); ?>Client/sendEmail" method="POST"  >
                <h3>Message box</h3>
                <div class="control-group">

                    <div class="controls">

                    </div>

                </div>
                 <div class="control-group">
                    <label class="control-label" for="inputLname">Your email <sup>*</sup></label>
                    <div class="controls">
                        <input type="text" id="inputEmail" placeholder="email" name="UEmail" required>
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="inputFname">Message<sup>*</sup></label>
                    <div class="controls">
                        <textarea class="" rows="5" id="inputMessage" placeholder="message" name="UMessage"  required></textarea>
                    </div>
                     
                </div>
                
              

                <div class="control-group">
                    <div class="controls">
                       
                        <input class="btn btn-large" type="submit" value="Send" />
                    </div>
                </div>
            </form>
        </div>

    </div>



                    
                         
                        <div class="span3">
                            <div class="profile_img">
                                <div id="crop-avatar">
                                    <!-- Current avatar -->
                                    <?= "<img class='img-responsive avatar-view' src='" . base_url() . "assets/business/" . $business_data->logo_path . "' alt=''/>" ?>
                                </div>
                            </div>

                            <center>
                            <h3><?= $business_data->name; ?></h3>
                            <ul class="list-unstyled user_data">
                                <li><i class="fa fa-map-marker user-profile-icon"></i>
                                    <?= $business_data->address . ', ' . $business_data->city; ?>
                                </li>

                                <li>
                                    <i class="fa fa-briefcase user-profile-icon"></i>
                                    <?= $business_data->category_name; ?>
                                </li>

                                <li class="m-top-xs">
                                    <i class="fa fa-external-link user-profile-icon"></i>
                                    <a href="<?= base_url('bz/') . $business_data->handler; ?>" target="_blank">
                                        <?= $business_data->handler; ?>
                                    </a>
                                </li>

                                <?php
                                    for ($i=0; $i<5; $i++){
                                        echo "<span class='fa " . ($business_data->rating > $i ? 'fa-star' : 'fa-star-o') . "'></span>";
                                    }
                                 ?>
                            </ul>
                        </center>

                            <!-- <a class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Edit Profile</a> -->

                        </div>
                      </li>
                      <li class="span5" style="margin-left: 75px; margin-bottom: 30px ; width: 50%;height:50%">

                        <!-- content -->
                        <div class="span6">

                            <div class="profile_title">
                                <div class="col-md-6">
                                    <h2>Profile details</h2>
                                </div>
                            </div>
                            <br>

                           

                                <!-- Business name -->
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="businessName"> Business Name
                                    </label>
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="businessName"> <h4><?= $business_data->name ?></h4>
                                    </label>
                                   
                                </div>

                              
                                <!-- Description -->
                                <div class="form-group">
                                    <label for="description" class="control-label col-md-3 col-sm-3 col-xs-12">About Us</label>
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="businessName"> <h4><?= $business_data->description ?></h4>
                                   
                                </div>

                                <!-- Address -->
                                <div class="form-group">
                                    <label for="address" class="control-label col-md-3 col-sm-3 col-xs-12">Address</label>
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="businessName"> <h4><?= $business_data->address ?></h4>
                                    
                                </div>

                                <!-- City -->
                                <div class="form-group">
                                    <label for="city" class="control-label col-md-3 col-sm-3 col-xs-12">City</label>
                                     <label class="control-label col-md-3 col-sm-3 col-xs-12" for="businessName"> <h4><?= $business_data->city ?></h4>
                                   
                                </div>

                                <!-- Category -->
                                <div class="form-group">
                                    <label for="categoryId" class="control-label col-md-3 col-sm-3 col-xs-12">Category 
                                    </label>
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="businessName"> <h4><?= $business_data->category_name; ?></h4>
                                  
                                </div>

                                <!-- Openning Time -->
                                <div class="form-group">
                                    <label for="openingTime" class="control-label col-md-3 col-sm-3 col-xs-12">Opening Time</label>
                                     <label class="control-label col-md-3 col-sm-3 col-xs-12" for="businessName"> <h4><?= date("H:i", strtotime($business_data->opening_time)); ?></h4>
                                    
                                </div>

                                <!-- Closing time -->
                                <div class="form-group">
                                    <label for="closingTime" class="control-label col-md-3 col-sm-3 col-xs-12">Closing Time</label>
                                     <label class="control-label col-md-3 col-sm-3 col-xs-12" for="businessName"> <h4><?= date("H:i", strtotime($business_data->closing_time)); ?></h4>
                                    
                                </div>

                             

                              

                               
                               
                                    <div class="col-md-4">
            <input name="review_id" id="review_id" type="text" value="0">
            <button class="submitButton btn btn-primary btn-lg pull-right" type="submit" style="margin-top:5px;"><i class="fa fa-pencil"></i> Post Review </button>
          </div>
          </div>
                         

                        </div>
                      </li>
                      <hr>


                         <!-- Set location -->
                                <div class="form-group">
                                   
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <div class="span9">
                                            <div id="map"></div>
                                            <script>
                                                var map;

                                                function initMap() {
                                                    map = new google.maps.Map(document.getElementById('map'), {
                                                        zoom: 8,
                                                        center: new google.maps.LatLng(7.2906, 80.6337),
                                                        mapTypeId: 'roadmap'
                                                    });

                                                    google.maps.event.addListener(map, "click", function(event) {
                                                        // get lat/lon of click
                                                        var clickLat = event.latLng.lat();
                                                        var clickLon = event.latLng.lng();

                                                        // show in input box
                                                        document.getElementById("lat").value = clickLat.toFixed(5);
                                                        document.getElementById("lng").value = clickLon.toFixed(5);

                                                        var marker = new google.maps.Marker({
                                                            position: new google.maps.LatLng(clickLat, clickLon),
                                                            map: map
                                                        });
                                                    });

                                                }
                                            </script>
                                            <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASed7m-nA1qJmxaRdN6f-eUFb6p0bhT_M&callback=initMap"></script>

                                        </div>
                                    </div>
                                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->
