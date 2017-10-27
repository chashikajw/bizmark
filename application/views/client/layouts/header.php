<!DOCTYPE html>

<?php $logged_in = $this->session->userdata('userdata') ==! null;  ?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bizmark | Business and Services review platform</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

	<!-- Less styles
	<link rel="stylesheet/less" type="text/css" href="less/bootsshop.less">
	<script src="less.js" type="text/javascript"></script>
	 -->

    <!-- Le styles  -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet"/>
    <link href="<?php echo base_url(); ?>assets/css/bootstrap-responsive.css" rel="stylesheet"/>
	<link href="<?php echo base_url(); ?>assets/css/docs.css" rel="stylesheet"/>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->

    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet"/>
    <link href="<?php echo base_url(); ?>assets/css/main.css" rel="stylesheet"/>
	<link href="<?php echo base_url(); ?>assets/js/google-code-prettify/prettify.css" rel="stylesheet"/>


    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Load bootstrap -->
    <!-- <link href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- <script src="<?php echo base_url(); ?>assets/jquery/jquery-3.2.1.min"></script> -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script> -->


    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url(); ?>assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url(); ?>assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url(); ?>assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>assets/ico/apple-touch-icon-57-precomposed.png">
  </head>
<body>
  <!-- Navbar
    ================================================== -->
<div class="navbar navbar-fixed-top">
              <div class="navbar-inner">
                <div class="container">
					<a id="logoM" href="index.html"><img src="<?php echo base_url(); ?>assets/img/logo.png" alt="Bootsshop"/></a>
                  <a data-target="#sidebar" data-toggle="collapse" class="btn btn-navbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </a>
                  <div class="nav-collapse">
                    <ul class="nav">
					  <li class="active"><a href="<?php echo base_url(''); ?>">Home	</a></li>
                      <li class=""><a href="<?php echo base_url('Client/newsfeed'); ?>">Offers & Discounts</a></li>
                      <li class=""><a href="<?php echo base_url('/Client/browse'); ?>">Browse	</a></li>
					  <li class=""><a href="">Contact</a></li>
					</ul>

                    <form  class="navbar-search pull-left" >
                     <input id="srchFld" type="text" placeholder="I'm looking for ..." class="search-query span5"/>
                    </form>
                    <ul class="nav pull-right">
                    <li class=""><a href="<?php echo base_url('Client/mapView'); ?>">Track Location</a></li>
                    <?php if ($logged_in) {
                        echo "<li class=''><a href='" . base_url('business') . "'><b>My Business</b></a></li>";
                    } ?>


            <!-- login button -->
            <?php if (!$logged_in){ ?>
                    <li class="dropdown">
						<a data-toggle="dropdown" class="dropdown-toggle" href="#">Login <b class="caret"></b></a>
						<div class="dropdown-menu">

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

					<form class="form-horizontal loginFrm" action="<?php echo base_url(); ?>Client/loginUser" method="POST">
						  <div class="control-group">
							<input type="text" class="span2" id="inputEmail" placeholder="Email" name="email" required="">
						  </div>
						  <div class="control-group">
							<input type="password" class="span2" id="inputPassword" placeholder="Password" name="password" required="">

						  </div>
						  <div class="control-group">
							<label class="checkbox">
							<input type="checkbox"> Remember me
							</label>
                            <a class="btn btn-warning pull-left" href="<?php echo base_url('Client/signup'); ?>">Sign up</a>
							<button type="submit" class="btn pull-right">Sign in</button>
						  </div>
						</form>
						</div>
					</li>
            <?php } else { ?>
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#"><?php echo "<b>" . $this->session->userdata('userdata')['username'] . "</b>";  ?><b class="caret"></b></a>
                    <div class="dropdown-menu" style="padding: 10px; text-align:right;">
                        <?php $user = $this->session->userdata('userdata');
                        echo $user['username'] . '<br>' . $user['email'] . '<br>'; ?>
                        <a class="btn btn-warning pull-right" href="<?php echo base_url('Client/logoutUser'); ?>">Log out</a>
                    </div>
                </li>
             <?php } ?>

					</ul>
                  </div><!-- /.nav-collapse -->
                </div>
              </div><!-- /navbar-inner -->
            </div>
<!-- ======================================================================================================================== -->
<div id="mainBody" class="container">
<header id="header">
<div class="row">
<div class="span12">
	<a href="index.html"><img src="<?php echo base_url(); ?>assets/img/logo.png" alt="Bootsshop"/></a>
<div class="pull-right"> <br/>
	<!-- <a href="product_summary.html"> <span class="btn btn-mini btn-warning"> <i class="icon-shopping-cart icon-white"></i> [ 3 ] </span> </a> -->
	<!-- <a href="product_summary.html"><span class="btn btn-mini active">$155.00</span></a> -->
	<!-- <span class="btn btn-mini">&pound;</span> -->
	<!-- <span class="btn btn-mini">&euro;</span> -->
</div>
</div>
</div>
<div class="clr"></div>
</header>
<!-- ==================================================Header End====================================================================== -->
