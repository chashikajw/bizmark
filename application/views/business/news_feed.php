
        <!-- page content -->
       <center>
 <!--
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
            </div> -->



             <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3><b>My Addvertisment</b></h3>
              </div>

           
            </div>

             <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        
                          <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                        <button onclick="document.getElementById('id01').style.display='block'" class="btn btn-success">Post New Add</button>
                                    </div>
                                </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                      
                        <!-- content -->
                        <div class="col-md-7 col-sm-7 col-xs-9">

                            <div class="profile_title">
                                <div class="col-md-5">
                                    <h2>Posted Adds</h2>
                                </div>
                            </div>
                            <br>
                           
                           
                            <div id="id01" class="modal">
                            <!-- Form update -->
                            <form id="demo-form2" data-parsley-validate enctype="multipart/form-data" class="modal-content animate" action="<?php echo base_url() ?>Business/postadd" method="POST" >

                              

                               <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>

                            
                                 
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
                          <button class="btn btn-primary" type="button" onclick="document.getElementById('id01').style.display='none'">Cancel</button>
                          <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>


                            </form>


                          </div>
                          <div class="scroll" >

                      <div class="item span12">

  <div class="container main-content" >


      <?php foreach ($posts_data as $item): ?>

      <a href="#">
      <div class="row span6 business-item" style="height: 140px">
        <div class="panel panel-default">
          <div class="panel-body">
            <div class="panel-more1 span2">
              <a href="#" class="thumbnail panel-more1" style="width: 120px">
                <?php echo "<img src='" . base_url() . "assets/business/" . $item->image_path . "' alt=''/>" ?>
              </a>
            </div>
            <div class="panel-info span2">
              <p><strong><?= $item->title; ?></strong></p>
              <p><?= $item->content; ?></p>
            </div>
           
            <div class="panel-more1 span1">
              <p><?= $item->datetime; ?></p>
              
            </div>
            <!-- <div class="panel-more1 span1">
              <button class="btn btn-info" style="margin-top:40px; margin-left: 10px">View</button>
            </div> -->
          </div>
        </div>


      </div>
    </a>
    <button onclick="document.getElementById('id01').style.display='block'" class="btn btn-primary">Edit</button>
    <button class="btn btn-danger" type="button">Delete</button>
    <?php endforeach; ?>

  </div>
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







        </center>

        <script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
