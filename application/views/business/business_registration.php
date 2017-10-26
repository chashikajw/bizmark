
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">


<div class="row">
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
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo base_url() ?>index.php/Business/shopRegistration" method="post" >

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name"> Name
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="name" required="required" class="form-control col-md-7 col-xs-12">
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
                        <label  for="cId" class="control-label col-md-3 col-sm-3 col-xs-12">Category ID
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="cId" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text" name= "cId">
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
                        <label for="ltd" class="control-label col-md-3 col-sm-3 col-xs-12">Latitude</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="ltd" class="form-control col-md-7 col-xs-12" type="text" name="ltd">
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="lotd" class="control-label col-md-3 col-sm-3 col-xs-12">Longitude</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="lotd" class="form-control col-md-7 col-xs-12" type="text" name="lotd">
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