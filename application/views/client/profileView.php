
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

                            <a href="<?= base_url('client/showReviewForm/') . $business_data->id; ?>"> <button type="button" class="btn btn-primary">Review</button></a>
                            <a href="<?= base_url('client/showComplainForm/') . $business_data->id; ?>"> <button type="button" class="btn btn-danger">Complain</button></a>


                        </center>






                        <!-- Middle section -->


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
