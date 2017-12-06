<?php if ($this->session->userdata('loggedin')) {
      include 'loggedin/header.php';
    }
    else{
       include 'partials/header.php';
    }
    
?>


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

<?php include 'partials/footer.php'; ?>
