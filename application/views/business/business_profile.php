<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3> <?= $business_data->name; ?></h3>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2> Business Profile </h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
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
                                    <a href="<?= base_url() . '/' . $business_data->handler; ?>" target="_blank">
                                        <?= $business_data->handler; ?>
                                    </a>
                                </li>
                            </ul>
                        </center>

                            <!-- <a class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Edit Profile</a> -->

                        </div>

                        <!-- content -->
                        <div class="col-md-9 col-sm-9 col-xs-12">

                            <div class="profile_title">
                                <div class="col-md-6">
                                    <h2>Update profile</h2>
                                </div>
                            </div>
                            <br>

                            <!-- Form update -->
                            <form id="demo-form2" data-parsley-validate enctype="multipart/form-data" class="form-horizontal form-label-left" action="<?php echo base_url() . "Business/update/" . $business_data->id ?>" method="POST">

                                <!-- Business name -->
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="businessName"> Business Name
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="businessName" id="businessName" required="required" class="form-control col-md-7 col-xs-12" value="<?= $business_data->name ?>">
                                    </div>
                                </div>

                                <!-- Handler -->
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="handler">Handler
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="handler" name="handler" required="required" class="form-control col-md-7 col-xs-12" value="<?= $business_data->handler ?>">
                                    </div>
                                </div>

                                <!-- Description -->
                                <div class="form-group">
                                    <label for="description" class="control-label col-md-3 col-sm-3 col-xs-12">Description</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea class="form-control" rows="3" name="description"><?= $business_data->description ?></textarea>
                                    </div>
                                </div>

                                <!-- Address -->
                                <div class="form-group">
                                    <label for="address" class="control-label col-md-3 col-sm-3 col-xs-12">Address</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <textarea class="form-control" rows="3" name="address"><?= $business_data->address ?></textarea>
                                    </div>
                                </div>

                                <!-- City -->
                                <div class="form-group">
                                    <label for="city" class="control-label col-md-3 col-sm-3 col-xs-12">City</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="city" class="form-control col-md-7 col-xs-12" type="text" name="city" value="<?= $business_data->city ?>">
                                    </div>
                                </div>

                                <!-- Category -->
                                <div class="form-group">
                                    <label for="categoryId" class="control-label col-md-3 col-sm-3 col-xs-12">Category ID
                                    </label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">

                                        <select name="categoryId" class="date-picker form-control col-md-7 col-xs-12">
                                            <option value='-1'>--</option>
                                            <?php
                                            foreach ($categorylist as $item){
                                                echo "<option value='$item->id' ";
                                                if ($item->id == $business_data->category_id){ echo "selected = 'selected'"; }
                                                echo '>' . $item->name;
                                                echo "</option>";
                                            }
                                         ?>
                                        </select>
                                    </div>
                                </div>

                                <!-- Openning Time -->
                                <div class="form-group">
                                    <label for="openingTime" class="control-label col-md-3 col-sm-3 col-xs-12">Opening Time</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="openingTime" class="form-control col-md-7 col-xs-12" type="time" name="openingTime" value="<?= date("H:i", strtotime($business_data->opening_time)); ?>">
                                    </div>
                                </div>

                                <!-- Closing time -->
                                <div class="form-group">
                                    <label for="closingTime" class="control-label col-md-3 col-sm-3 col-xs-12">Closing Time</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="closingTime" class="form-control col-md-7 col-xs-12" type="time" name="closingTime" value="<?= date("H:i", strtotime($business_data->closing_time)); ?>">
                                    </div>
                                </div>

                                <!-- Latitude -->
                                <div class="form-group">
                                    <label for="lat" class="control-label col-md-3 col-sm-3 col-xs-12">Latitude</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="lat" class="form-control col-md-7 col-xs-12" type="text" name="lat" value="<?= $business_data->lat ?>">
                                    </div>
                                </div>

                                <!-- Longitude -->
                                <div class="form-group">
                                    <label for="lng" class="control-label col-md-3 col-sm-3 col-xs-12">Longitude</label>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input id="lng" class="form-control col-md-7 col-xs-12" type="text" name="lng" value="<?= $business_data->lng; ?>">
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
                                        <button type="submit" class="btn btn-success">Update</button>
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
<!-- /page content -->
