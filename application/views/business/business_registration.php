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

                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo base_url() ?>Business/businessRegistration" method="POST" >

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="businessName"> Business Name
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="businessName" id="businessName" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="handler">Handler
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="handler" name="handler" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                        <div class="form-group">
                        <label for="description" class="control-label col-md-3 col-sm-3 col-xs-12">Description</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea class="form-control" rows="3" name="description"></textarea>
                        </div>
                        </div>
                        <div class="form-group">
                        <label for="address" class="control-label col-md-3 col-sm-3 col-xs-12">Address</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea class="form-control" rows="3" name="address"></textarea>
                        </div>
                        </div>

                      <div class="form-group">
                        <label for="city" class="control-label col-md-3 col-sm-3 col-xs-12">City</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="city" class="form-control col-md-7 col-xs-12" type="text" name="city">
                        </div>
                      </div>


                      <div class="form-group">
                        <label  for="categoryId" class="control-label col-md-3 col-sm-3 col-xs-12">Category ID
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



                      <div class="form-group">
                        <label for="openingTime" class="control-label col-md-3 col-sm-3 col-xs-12">Opening Time</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="openingTime" class="form-control col-md-7 col-xs-12" type="time" name="openingTime">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="closingTime" class="control-label col-md-3 col-sm-3 col-xs-12">Closing Time</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="closingTime" class="form-control col-md-7 col-xs-12" type="time" name="closingTime">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="lat" class="control-label col-md-3 col-sm-3 col-xs-12">Latitude</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="lat" class="form-control col-md-7 col-xs-12" type="text" name="lat">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="lng" class="control-label col-md-3 col-sm-3 col-xs-12">Longitude</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="lng" class="form-control col-md-7 col-xs-12" type="text" name="lng">
                        </div>
                      </div>

                      <div class="form-group">
                          <label  for="logo" class="control-label col-md-3 col-sm-3 col-xs-12">Logo
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="file" name="logo" id="logo" class="form-control col-md-7 col-xs-12">
                              <!-- <input id="lotd" class="form-control col-md-7 col-xs-12" type="text" name="lotd"> -->
                          </div>
                      </div>


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
