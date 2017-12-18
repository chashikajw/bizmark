<div class="span1" style="height: 100px">

</div>


    <div class="span6" style="">

        </ul>
        <h3> Contact Form</h3>
        <hr class="soft" />
        <div class="well">

              <?php
                    $this->load->helper('form');
                    $error = $this->session->flashdata('error');
                    if ($error) {
                        ?>
                                          <div class="alert alert-danger alert-dismissable">
                                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                          <?php echo $error; ?>
                                      </div>
                                  <?php }
                    $success = $this->session->flashdata('success');
                    if ($success) {
                        ?>
                                        <div class="alert alert-success alert-dismissable">
                                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                          <?php echo $success; ?>
                                      </div>
                                        <?php }?>
            <form class="form-horizontal" style="" action="<?php echo base_url(); ?>Client/sendEmail" method="POST"  >
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
