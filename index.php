<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Welcome to iShop</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">
    <style>

    .video-responsive{
    overflow:hidden;
    padding-bottom:56.25%;
    position:relative;
    height:0;
        }
    .video-responsive iframe{
    left:0;
    top:0;
    height:100%;
    width:100%;
    position:absolute;
        }
    </style>
</head>

<body bgcolor="#F2FFAD">

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
                <li class="nav-item">
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
                        <a class="dropdown-item" href="./signup/login.php"> Login</a>
                        <a class="dropdown-item" href="./signup/signup.php"> SignUp</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <header>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <!-- Slide One - Set the background image for this slide in the line below -->
                <div class="carousel-item active" style="background-image: url('./img/1.jpg')">
                    <div class="carousel-caption d-none d-md-block">
                    </div>
                </div>
                <!-- Slide Two - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url('./img/2.jpg')">
                    <div class="carousel-caption d-none d-md-block">
                    </div>
                </div>
                <!-- Slide Three - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url('./img/3.jpg')">
                    <div class="carousel-caption d-none d-md-block">
                    </div>
                </div>
                <div class="carousel-item" style="background-image: url('./img/4.jpg')">
                    <div class="carousel-caption d-none d-md-block">
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </header>

    <!-- Page Content -->
    <div class="container">

        <h1 class="my-4">Welcome to iShop !</h1>

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <h4 class="card-header">Update your Stack</h4>
                    <div class="card-body">
                        <p class="card-text">You can signup/login to our databse and update the items available on that day! So that cusotmers who want buy any of items in the list will see your shop there.</p>
                    </div>
                    <!-- <div class="card-footer">
                        <a href="./services.php" class="btn btn-primary">Learn More</a>
                    </div> -->
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <h4 class="card-header">Add daily offers</h4>
                    <div class="card-body">
                        <p class="card-text">Make your cusotmer known of what offers you run on that day! You can run promotional period of offers as well</p>
                    </div>
                    <!-- <div class="card-footer">
                        <a href="./services.php" class="btn btn-primary">Learn More</a>
                    </div> -->
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <h4 class="card-header">Make use of Beacon</h4>
                    <div class="card-body">
                        <p class="card-text">We set up a beacon at the your door step! So what you offer today will reach to every customer passing buy, who uses BLE.</p>
                    </div>
                    <!-- <div class="card-footer">
                        <a href="./services.php" class="btn btn-primary">Learn More</a>
                    </div> -->
                </div>
            </div>
        </div>
        <!-- /.row -->

        <!-- Features Section -->
        <div class="row">
            <div class="col-lg-6">
                <h2>Why Beacons ?</h2>
                <p>Watch this amazing video by Estimote about what we actually do! You will feel lucky..</p>
            </div>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/SrsHBjzt2E8?ecver=1" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
        <!-- /.row -->

        <!-- Call to Action Section -->
        <div class="row mb-4">
            <div class="col-md-4">
            <br><br>
                <a class="btn btn-lg btn-secondary btn-block" href="./signup/signup.php">Join us Now!</a>
            </div>
        </div>

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
