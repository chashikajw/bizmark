
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Ratings & Reviews</h3>
              </div>




            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_content">
                     <!-- <center> -->
                    <div class="row">

                        <!-- Add items -->
                       <?php foreach ($review as $item): ?>
                            <article class="media event">
                                <a class="pull-left date">
                                    <?php $datetime = new DateTime($item->datetime); ?>
                                    <p class="month"><?= $datetime->format('M'); ?></p>
                                    <p class="day"><?= $datetime->format('d'); ?></p>
                                </a>
                                <div class="media-body">
                                    <a class="title" href="#"> <?= $item->name; ?> </a>
                                    <p> <?= $item->comment; ?> </p>

                                <?php
                                    for ($i=0; $i<5; $i++){
                                        echo "<span class='fa " . ($item->value > $i ? 'fa-star' : 'fa-star-o') . "'></span>";
                                    }
                                 ?>
                             </div>
                            </article>
                        <?php endforeach; ?>
                    </div>

                  </div>
                  <!-- </center> -->
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
