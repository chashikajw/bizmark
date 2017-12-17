<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="row top_tiles">
            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                    <div class="icon"><i class="fa fa-bullseye"></i></div>
                    <div class="count">
                        <?= $business_report[0]->page_visit_count ?>
                    </div>
                    <h3>New Page Visits</h3>
                    <p>Page visits of this month</p>
                </div>
            </div>
            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                    <div class="icon"><i class="fa fa-commenting"></i></div>
                    <div class="count">
                        <?= $business_report[0]->review_count ?>
                    </div>
                    <h3>New Reviews</h3>
                    <p>Reviews of this month</p>
                </div>
            </div>
            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                    <div class="icon"><i class="fa fa-check-square-o"></i></div>
                    <div class="count">
                        <?= $business_report[0]->subscription_count ?>
                    </div>
                    <h3>New Subscriptions</h3>
                    <p>Subscriptions of this month</p>
                </div>
            </div>
            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                    <div class="icon"><i class="fa fa-exclamation-circle"></i></div>
                    <div class="count">
                        <?= $business_report[0]->complain_count ?>
                    </div>
                    <h3>New Complains</h3>
                    <p>Complains of this month</p>
                </div>
            </div>
        </div>






        <!-- LATEST REVIES -->
        <div class="row">
            <div class="col-md-4">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Latest Reviews</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <!-- Add items -->
                        <?php foreach (array_slice($review, 0, 5, true) as $item): ?>
                            <article class="media event">
                                <a class="pull-left date">
                                    <p class="day">
                                        <small> <span class="fa fa-star checked"></span></small><?= $item->value; ?>
                                    </p>
                                </a>
                                <div class="media-body">
                                    <a class="title" href="#"> <?= $item->name; ?> </a>
                                    <p> <?= $item->comment; ?> </p>
                                </div>
                            </article>
                        <?php endforeach; ?>

                    </div>
                </div>
            </div>

            <!-- TOP USERS -->
            <div class="col-md-4">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Top Users</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <!-- Add items -->
                        <?php foreach (array_slice($top_users, 0, 5, true) as $item): ?>
                            <article class="media event">
                                <a class="pull-left date">
                                    <p class="month"></p>
                                    <p class="day"><?= $item->count; ?></p>
                                </a>
                                <div class="media-body">
                                    <a class="title" href="#"><?= $item->name; ?></a>
                                    <p><?= $item->city; ?></p>
                                </div>
                            </article>
                        <?php endforeach; ?>

                    </div>
                </div>
            </div>

            <!-- LATEST SUBSCRIBERS -->
            <div class="col-md-4">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Latest Subscribers</h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">


                        <!-- Add items -->
                        <?php foreach (array_slice($subscribers, 0, 5, true) as $item): ?>
                            <article class="media event">
                                <a class="pull-left date">
                                    <?php $datetime = new DateTime($item->datetime); ?>
                                    <p class="month"><?= $datetime->format('M'); ?></p>
                                    <p class="day"><?= $datetime->format('d'); ?></p>
                                </a>
                                <div class="media-body">
                                    <a class="title" href="#"><?= $item->name; ?></a>
                                    <p><?= $datetime->format('d M Y H:i'); ?></p>
                                    <p><?= $item->city; ?></p>
                                </div>
                            </article>
                        <?php endforeach; ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->
