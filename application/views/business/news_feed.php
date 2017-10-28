
        <!-- page content -->
       <center>

<div class="right_col" role="main">
          <div class="">
            <div class="page-title">

<div class="row" style="width: 700px; margin-top: 10px">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Post addvertisment</h2>
                    <ul class="nav navbar-right panel_toolbox">
                    
                    
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />

                    <form id="demo-form2" data-parsley-validate  enctype="multipart/form-data" class="form-horizontal form-label-left" action="<?php echo base_url() ?>Business/postadd" method="POST" >

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="businessName"> Title
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="title" id="title" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                     
                        <div class="form-group">
                        <label for="description" class="control-label col-md-3 col-sm-3 col-xs-12">Description</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea class="form-control" rows="5" name="description"></textarea>
                        </div>
                        </div>
                      
                      <div class="form-group">
                          <label  for="image" class="control-label col-md-3 col-sm-3 col-xs-12">Image
                          </label>
                          <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="file" name="logo" id="logo" class="form-control col-md-7 col-xs-12">
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
