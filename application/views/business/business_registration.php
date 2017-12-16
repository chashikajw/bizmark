<center>

    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">

                <div class="row" style="width: 700px; margin-top: 10px">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Bussiness Registration</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Settings 1</a>
                                            </li>
                                            <li><a href="#">Settings 2</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <br />

                                <form id="demo-form2" data-parsley-validate enctype="multipart/form-data" class="form-horizontal form-label-left" action="<?php echo base_url() ?>Business/register" method="POST">

                                    <!-- Business Name -->
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="businessName"> Business Name
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" name="businessName" id="businessName" required="required" class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>

                                    <!-- Handler -->
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="handler">Handler
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" id="handler" name="handler" required="required" class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>

                                    <!-- Description -->
                                    <div class="form-group">
                                        <label for="description" class="control-label col-md-3 col-sm-3 col-xs-12">Description</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <textarea class="form-control" rows="3" name="description"></textarea>
                                        </div>
                                    </div>

                                    <!-- Address -->
                                    <div class="form-group">
                                        <label for="address" class="control-label col-md-3 col-sm-3 col-xs-12">Address</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <textarea class="form-control" rows="3" name="address"></textarea>
                                        </div>
                                    </div>

                                    <!-- City -->
                                    <div class="form-group">
                                        <label for="city" class="control-label col-md-3 col-sm-3 col-xs-12">City</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="city" class="form-control col-md-7 col-xs-12" type="text" name="city">
                                        </div>
                                    </div>

                                    <!-- Category ID -->
                                    <div class="form-group">
                                        <label for="categoryId" class="control-label col-md-3 col-sm-3 col-xs-12">Category ID
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">

                                            <select name="categoryId" class="date-picker form-control col-md-7 col-xs-12">
                                                <option value='-1'>--</option>
                                                <?php
                                                foreach ($categorylist as $item){
                                                    echo "<option value='$item->id'>";
                                                    echo $item->name;
                                                    echo "</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Opening Time -->
                                    <div class="form-group">
                                        <label for="openingTime" class="control-label col-md-3 col-sm-3 col-xs-12">Opening Time</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="openingTime" class="form-control col-md-7 col-xs-12" type="time" name="openingTime">
                                        </div>
                                    </div>

                                    <!-- Closing Time -->
                                    <div class="form-group">
                                        <label for="closingTime" class="control-label col-md-3 col-sm-3 col-xs-12">Closing Time</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="closingTime" class="form-control col-md-7 col-xs-12" type="time" name="closingTime">
                                        </div>
                                    </div>

                                    <!-- Set location -->
                                    <div class="form-group">
                                        <label for="lat" class="control-label col-md-3 col-sm-3 col-xs-12">Set Location</label>
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

                                    <!-- Latitude -->
                                    <div class="form-group">
                                        <label for="lng" class="control-label col-md-3 col-sm-3 col-xs-12">Lattitude</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="lat" class="form-control col-md-7 col-xs-12" type="text" name="lat">
                                        </div>
                                    </div>

                                    <!-- Longitude -->
                                    <div class="form-group">
                                        <label for="lng" class="control-label col-md-3 col-sm-3 col-xs-12">Longitude</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="lng" class="form-control col-md-7 col-xs-12" type="text" name="lng">
                                        </div>
                                    </div>

                                    <!-- Logo -->
                                    <div class="form-group">
                                        <label for="logo" class="control-label col-md-3 col-sm-3 col-xs-12">Logo
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="file" name="logo" id="logo" class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>

                                    <!-- Form buttons -->
                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                            <button class="btn btn-primary" type="button">Cancel</button>
                                            <button class="btn btn-primary" type="reset">Reset</button>
                                            <button type="submit" class="btn btn-success">Submit</button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</center>
