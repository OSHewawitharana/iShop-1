<?php if ($this->session->userdata('loggedin')) {
      include 'loggedin/header.php';
    }
    else{
       include 'partials/header.php';
    }
    
?>

<div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">About <small>Us !</small></h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?php echo base_url(); ?>">Home</a>
            </li>
            <li class="breadcrumb-item active">About</li>
        </ol>

        <!-- Intro Content -->
        <div class="row">
            <div class="col-lg-6">
                <img class="img-fluid rounded mb-4" src="<?php echo base_url(); ?>assets/images/About.jpg" alt="about">
            </div>
            <div class="col-lg-6">
                <h2>iShop</h2>
                <p>Time is precious! Managing it wisely is what makes we are successful in our life. At iShop we facilitate B2C approach more precise by bringing customers known of what your shop has at that time, everytime they create a list. </p>
                <p>iShop advertises what your business is capable of providing by suggesting our customer base everytime they want to buy something. Ultimately, if they choose you, you get a fixed customer right at hand who follows to buy from you!</p>
                <p>Best feature comes last! "the Beacons" , will notify your customers about the offers you have right at that time as they step near the shop! We, at iShop, gurantee you that this will be a amazing trick to expand your market.</p>
            </div>
        </div>
        <!-- /.row -->

        <!-- Team Members -->
        <h2>Our Team</h2>
        <hr>

        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="card h-100 text-center">
                    <img class="card-img-top" src="http://placehold.it/750x450" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Oshani Weerakoon</h4>
                        <h6 class="card-subtitle mb-2 text-muted">Stack Developer</h6>
                        <p class="card-text">Proud undergratuate of Uinversity of Colombo school of Computing. Volunteering for a cause is her passion!</p>
                    </div>
                    <div class="card-footer">
                        <a href="#">oshani@teamishop.com</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card h-100 text-center">
                    <img class="card-img-top" src="http://placehold.it/750x450" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Oshani Hewawitharana</h4>
                        <h6 class="card-subtitle mb-2 text-muted">Developer</h6>
                        <p class="card-text">All rounder girl, with an unstoppabale desire to reach the top as much as she can. She defines what it called to be energetic!</p>
                    </div>
                    <div class="card-footer">
                        <a href="#">oshewawitharana123@teamishop.com</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card h-100 text-center">
                    <img class="card-img-top" src="http://placehold.it/750x450" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Kulan Shachinthana</h4>
                        <h6 class="card-subtitle mb-2 text-muted">Java Developer</h6>
                        <p class="card-text">A linux lover who undertakes the task of the iShop andorid application that you can download directly through Google Play Store</p>
                    </div>
                    <div class="card-footer">
                        <a href="#">kulan@teamishop.com</a>
                    </div>
                </div>
            </div>
             <div class="col-lg-4 mb-4">
                <div class="card h-100 text-center">
                    <img class="card-img-top" src="http://placehold.it/750x450" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Jayanaka Fonseka</h4>
                        <h6 class="card-subtitle mb-2 text-muted">Lead</h6>
                        <p class="card-text">Administrator for the iShop web application</p>
                    </div>
                    <div class="card-footer">
                        <a href="#">jayanaka@teamishop.com</a>
                    </div>
                </div>
            </div>
             <div class="col-lg-4 mb-4">
                <div class="card h-100 text-center">
                    <img class="card-img-top" src="http://placehold.it/750x450" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Tharindu Rukshan</h4>
                        <h6 class="card-subtitle mb-2 text-muted">Java Developer</h6>
                        <p class="card-text">Andorid developer who work behind the stage</p>
                    </div>
                    <div class="card-footer">
                        <a href="#">rukshan@teamishop.com</a>
                    </div>
                </div>
            </div>
             <div class="col-lg-4 mb-4">
                <div class="card h-100 text-center">
                    <img class="card-img-top" src="http://placehold.it/750x450" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Shamal Samarakoon </h4>
                        <h6 class="card-subtitle mb-2 text-muted">Position</h6>
                        <p class="card-text">The silent thread of the team</p>
                    </div>
                    <div class="card-footer">
                        <a href="#">shamal@teamishop.com</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->
    
    <?php include 'partials/footer.php'; ?>
