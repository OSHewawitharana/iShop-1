<?php 
session_start();
require ("../../db_connect.php");
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Administrator</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="../assets/css/material-dashboard.css?v=1.2.0" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <!-- //<link href="../assets/css/demo.css" rel="stylesheet" /> -->
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-color="purple" data-image="../assets/img/sidebar-1.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="logo">
                <a href="../../index.php" class="simple-text">
                    <img src="../../img/logo.png" align="center">
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li>
                        <a href="dashboard.php">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="active">
                        <a href="./user.php">
                            <i class="material-icons">person</i>
                            <p>User Profile</p>
                        </a>
                    </li>
                    <li>
                        <a href="./table.php">
                            <i class="material-icons">content_paste</i>
                            <p>Table List</p>
                        </a>
                    </li>
                    <li>
                        <a href="./notifications.php">
                            <i class="material-icons text-gray">notifications</i>
                            <p>Notifications</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                          <form class="navbar-form navbar-right" role="search">
                            <div class="form-group  is-empty">
                                <input type="text" class="form-control" placeholder="Search">
                                <span class="material-input"></span>
                            </div>
                            <button type="submit" class="btn btn-white btn-round btn-just-icon">
                                <i class="material-icons">search</i>
                                <div class="ripple-container"></div>
                            </button>
                        </form>                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">dashboard</i>
                                    <p class="hidden-lg hidden-md">Dashboard</p>
                                </a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">notifications</i>
                                    <span class="notification">1</span><!-- number of notifications -->
                                    <p class="hidden-lg hidden-md">Notifications</p>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- data fetch here from db -->
                                    <li>
                                        <a href="./notifications.php">Mike John responded to your email</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">person</i>
                                    <p class="hidden-lg hidden-md">Profile</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-11">
                            <div class="card">
                                <div class="card-header" data-background-color="purple">
                                    <h4 class="title">Edit Profile</h4>
                                </div>
                                <div class="card-content">
                                    <form action="user.php" method="POST">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Username</label>
                                                    <input id="username" name="username" type="text" class="form-control">
                                                </div>
                                            </div>
                                          <!--   <div class="col-md-5">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">New Password</label>
                                                    <input id="password" name="password" type="password" class="form-control">
                                                </div>
                                            </div>  -->   
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">First Name</label>
                                                    <input id="fname" name="fname" type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Last Name</label>
                                                    <input id="lname" name="lname" type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-5">
                                                  <div class="form-group label-floating">
                                                      <label class="control-label">Email address</label>
                                                      <input id="email" name="email" type="email" class="form-control">
                                                  </div>
                                            </div>
                                            <div class="col-md-5">
                                                  <div class="form-group label-floating">
                                                      <label class="control-label">Address</label>
                                                      <input id="address" name="address" type="text" class="form-control">
                                                  </div>
                                            </div>
                                       </div>
                                         <div class="row">
                                            <div class="col-md-10">
                                                <div class="form-group">
                                                    <label>About Me</label>
                                                    <div class="form-group label-floating">
                                                        <textarea id="aboutme" name="aboutme" class="form-control" rows="1"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary pull-right">Update Profile</button>
                                        <div class="clearfix"></div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             <!--   Core JS Files   -->
                <script src="../assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
                <script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
                <script src="../assets/js/material.min.js" type="text/javascript"></script>
                <!--  Charts Plugin -->
                <script src="../assets/js/chartist.min.js"></script>
                <!--  Dynamic Elements plugin -->
                <script src="../assets/js/arrive.min.js"></script>
                <!--  PerfectScrollbar Library -->
                <script src="../assets/js/perfect-scrollbar.jquery.min.js"></script>
                <!--  Notifications Plugin    -->
                <script src="../assets/js/bootstrap-notify.js"></script>
                <!--  Google Maps Plugin    -->
                <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
                <!-- Material Dashboard javascript methods -->
                <script src="../assets/js/material-dashboard.js?v=1.2.0"></script>
                <!-- Material Dashboard DEMO methods, don't include it in your project! -->
                <script src="../assets/js/demo.js"></script>
            <footer class="footer">
                <div class="container-fluid">
                   <p class="m-0 text-center text-white">Copyright &copy; iShop 2017</p>
                </div>
            </footer>
        </div>
    </div>
</body>
</html>