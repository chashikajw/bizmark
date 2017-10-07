<!DOCTYPE html>
<html lang={{ config('app.locale') }}>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Track the Best rating Services</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">

    <!-- Template styles -->
    <style rel="stylesheet">
        /* TEMPLATE STYLES */
        /* Necessary for full page carousel*/

        html,
        body,
        .view {
            height: 100%;
        }
        /* Navigation*/

        .navbar {
            background-color: transparent;
        }

        .scrolling-navbar {
            -webkit-transition: background .5s ease-in-out, padding .5s ease-in-out;
            -moz-transition: background .5s ease-in-out, padding .5s ease-in-out;
            transition: background .5s ease-in-out, padding .5s ease-in-out;
        }

        .top-nav-collapse {
            background-color: #2b3f66;
        }



        @media only screen and (max-width: 768px) {
            .navbar {
                background-color: #2b3f66;
            }
        }
        /* Carousel*/

        .carousel,
        .carousel-item,
        .active {
            height: 100%;
        }

        .carousel-inner {
            height: 100%;
        }
        /*Caption*/

        .flex-center {
            color: #fff;
        }



        @media (min-width: 776px) {
            .carousel .view ul li {
                display: inline;
            }
            .carousel .view .full-bg-img ul li .flex-item {
                margin-bottom: 1.5rem;
            }
        }
        .navbar .btn-group .dropdown-menu a:hover {
            color: #000 !important;
        }
        .navbar .btn-group .dropdown-menu a:active {
            color: #fff !important;
        }

        .card{
          position: absolute;
          text-align: center;
          width: 21rem;
          height:32rem;
          top: 80px;
          right: 15px;
          left: 50;
          top: 50;
          bottom: 50

          text-shadow: 3px 2px red;
        }


    </style>

</head>


<body>

    <!--Navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
            <div class="container">
                <a class="navbar-brand" href="#">ICON</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>

                    </ul>
                    <form class="form-inline">
                        <input class="form-control mr-sm-2" type="text" placeholder="Username" aria-label="Username">
                        <input class="form-control mr-sm-2" type="text" placeholder="Password" aria-label="Password">
                        <button type="submit" class="btn btn-default btn-rounded btn-sm waves-effect">Log in</button>
                    </form>
                </div>
            </div>
        </nav>
    <!--/.Navbar-->


    <!--Carousel Wrapper-->
    <div id="carousel-example-3" class="carousel slide carousel-fade white-text" data-ride="carousel" data-interval="false">
        <!--Indicators-->

        <!--/.Indicators-->

        <!--Slides-->

            <!-- First slide -->
            <div class="carousel-item active view hm-black-light" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/img%20(40).jpg'); background-repeat: no-repeat; background-size: cover;">

                <!-- Caption -->
                <div class="full-bg-img flex-center white-text">
                    <ul class="animated fadeInUp col-md-12">
                        <li>
                            <h1 class="h1-responsive flex-item font-bold">Track the best rating Services</h1>
                            <li>
                                <p class="flex-item">SriLankan largest service tracking network</p>
                            </li>
                          </li>

                    </ul>
                </div>
                <!-- /.Caption -->

                            <div id="registerCrd" class="card card-outline-secondary mb-3 text-center" style="max-width: 30rem;">

                            <div class="card-block">


                              <blockquote class="card-blockquote">
                                <legend>Sign up here</legend>

                                <?php
                                  $this->load->helper('form');
                                  $error = $this->session->flashdata('error');
                                  if($error)
                                  {
                                      ?>
                                      <div class="alert alert-danger alert-dismissable">
                                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                          <?php echo $error; ?>
                                      </div>
                                  <?php }
                                  $success = $this->session->flashdata('success');
                                  if($success)
                                  {
                                      ?>
                                      <div class="alert alert-success alert-dismissable">
                                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                          <?php echo $success; ?>
                                      </div>
                                        <?php } ?>


                            <form class="register" action="http://localhost/shopRating/index.php/Welcome/registerUser" method="POST">



                                <input class="form-control mr-sm-2" type="text" placeholder="Name" name="name" >
                                <input class="form-control mr-sm-2" type="text" placeholder="Username" name="username" >
                                <input class="form-control mr-sm-2" type="text" placeholder="email" name="email">

                                <input class="form-control mr-sm-2" type="Password" placeholder="Password" name="Password">
                                <input class="form-control mr-sm-2" type="Password" placeholder="Confirm Password" name="confirm_password">
                                <button type="submit" class="btn btn-primary btn-rounded waves-effect">Sign in</button>
                            </form>


                              </blockquote>
                            </div>
                            </div>


                        <!--/.Form-->
                    </div>


            </div>
            <!-- /.First slide -->







    </div>
    <!--/.Carousel Wrapper-->

    <!--/.Main layout-->





    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>

    <!-- Bootstrap dropdown -->
    <script type="text/javascript" src="js/popper.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>

    <script>
    new WOW().init();
    </script>

</body>

</html>
