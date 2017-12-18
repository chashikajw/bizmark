
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>User ratings</h3>
              </div>

            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_content">
                     <center>
                    <div class="row">
                     

                      <div class="clearfix"></div>
                     
                      <div class="col-md-4 col-sm-8 col-xs-12 profile_details">
                         <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Reviews</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <!-- Add items -->
                       <?php foreach ($review as $item): ?>
                            <article class="media event">
                                <a class="pull-left date">
                                    <p class="day">
                                        <small> <span class="fa fa-star checked"></span></small><?= $item->value; ?>
                                    </p>
                                </a>
                                <div class="media-body">
                                    <a class="title" href="#"> <?= $item->name; ?> </a>
                                    <p> <?= $item->comment; ?> </p>
                                    <p> <?= $item->datetime; ?> </p>
                                </div>
                            </article>
                        <?php endforeach; ?>


                    </div>
                </div>
            </div>
                    
                    </div>

                  </div>
                  </center>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->