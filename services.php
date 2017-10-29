<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>What we Offer!</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="index.php">iShop</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="services.php">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="faq.php">FAQ</a>
                </li>
                 <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            My Account
                        </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                        <?php                
                        if (isset($_SESSION['user'])){
                           echo "<button type='button' class='btn btn-default' style='background-color:white'><a href='./signup/logout.php'  style='text-decoration:none'> Log Out</a> </button>";
                        }else{
                            echo "<button type='button' class='btn btn-default' style='background-color:white'><a href='./signup/login.php'  style='text-decoration:none'> Log In</a> </button><br>";
                            echo "<button type='button' class='btn btn-default' style='background-color:white'><a href='./signup/signup.php'  style='text-decoration:none'> SignUp</a> </button>";
                        }
                        ?>
                    </div>
                </li>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">Services <small>we offer</small></h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active">Services</li>
        </ol>

        <!-- Image Header -->
        <img class="img-fluid rounded mb-4" src="http://placehold.it/1200x300" alt="">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <h4 class="card-header">Update your Stack</h4>
                    <div class="card-body">
                        <p class="card-text">You can signup/login to our databse and update the items available on that day! So that cusotmers who want buy any of items in the list will see your shop there.</p>
                    </div>
                    <div class="card-footer">
                        <!-- <a href="#" class="btn btn-primary">Learn More</a> -->
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <h4 class="card-header">Add daily offers</h4>
                    <div class="card-body">
                        <p class="card-text">Make your cusotmer known of what offers you run on that day! You can run promotional period of offers as well</p>
                    </div>
                    <div class="card-footer">
                        <!-- <a href="#" class="btn btn-primary">Learn More</a> -->
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <h4 class="card-header">Make use of Beacon</h4>
                    <div class="card-body">
                        <p class="card-text">We set up a beacon at the your door step! So what you offer today will reach to every customer passing buy, who uses BLE.</p>
                    </div>
                    <div class="card-footer">
                        <!-- <a href="#" class="btn btn-primary">Learn More</a> -->
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
        </div>
        <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
