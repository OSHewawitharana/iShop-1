<?php if ($this->session->userdata('loggedin')) {
      include 'loggedin/header.php';
    }
    else{
       include 'partials/header.php';
    }
    
?>

    <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('<?php echo base_url(); ?>assets/images/1.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <!-- <h3>First Slide</h3>
              <p>This is a description for the first slide.</p> -->
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('<?php echo base_url(); ?>assets/images/2.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <!-- <h3>Second Slide</h3>
              <p>This is a description for the second slide.</p> -->
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('<?php echo base_url(); ?>assets/images/3.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <!-- <h3>Third Slide</h3>
              <p>This is a description for the third slide.</p> -->
            </div>
            <!-- Slide four - Set the background image for this slide in the line below -->
          

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
      <hr>
      <h1 class="my-4 text-center">Welcome to iShop !</h1>
      <hr>


      <!-- Portfolio Section -->

      <div class="row">
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="<?php echo base_url(); ?>assets/images/update.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Update your Stack</a>
              </h4>
              <p class="card-text">

                    You can signup/login to our databse and update the items available on that day! So that cusotmers who want buy any of items in the list will see your shop there.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="<?php echo base_url(); ?>assets/images/offers.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Add daily offers</a>
              </h4>
              <p class="card-text">
                  

                  Make your cusotmer known of what offers you run on that day! You can run promotional period of offers as well.
                  </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="<?php echo base_url(); ?>assets/images/beacon.jpg" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Make use of Beacon</a>
              </h4>
              <p class="card-text">
                  

                  We set up a beacon at the your door step! So what you offer today will reach to every customer passing buy, who uses BLE.
                  </p>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
            <div class="col-lg-6">
                <h2>Why Beacons ?</h2>
                <p>Watch this amazing video by Estimote about what we actually do! You will feel lucky..</p>
            </div>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" width="560" height="315" src="https://www.youtube.com/embed/SrsHBjzt2E8?ecver=1" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>

      <!-- Call to Action Section -->

    </div>
    <!-- /.container -->

<?php include 'partials/footer.php'; ?>
