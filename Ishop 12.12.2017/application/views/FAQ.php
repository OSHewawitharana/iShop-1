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
      <h1 class="mt-4 mb-3">FAQ
        <small>Subheading</small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="<?php echo base_url(); ?>">Home</a>
        </li>
        <li class="breadcrumb-item active">FAQ</li>
      </ol>

      <div class="mb-4" id="accordion" role="tablist" aria-multiselectable="true">

        <div class="card">
          <div class="card-header" role="tab" id="headingOne">
            <h5 class="mb-0">
              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                <h2>How can I join with iShop?</h2></a>
            </h5>
          </div>
          <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne">
            <div class="card-body">
              To join with iShop, you have to be a member at iShop. For that follow these steps:
              <ol>
                <li>Click Register and fill necessary details and Submit.</li>
                <li>Wait for the confirmation mail from iShop.</li>
                <li>Click on the confirmation link and sign into your account.</li>
              </ol>
              After these steps, you have joined to iShop.
            </div>
          </div>
        </div>


        <div class="card">
          <div class="card-header" role="tab" id="headingTwo">
            <h5 class="mb-0">
              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                <h2>What if I Lost my Password?</h2></a>
            </h5>
          </div>
          <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
            <div class="card-body">
              To reset your password, please try the following:
              <ol>
                <li>Click the "Forgot Password?" link from the <a href="<?php echo base_url('/Home/login');?>">login page.</a></li>
                <li>Enter the email address associated with your iShop account and click 'Submit'.</li>
                <li>We'll send you a link you can use to set a new password.</li>
              </ol>
              <p><b>Note</b>:If you no longer have access to the email address used on your iShop account and you are unable to recall your login information, you can send a message to <a href="<?php echo base_url('/Home/Contact');?>">Contact us</a> for assistance.</p>
            </div>
          </div>
        </div>


        <div class="card">
          <div class="card-header" role="tab" id="headingThree">
            <h5 class="mb-0">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                <h2>How can I update my profile?</h2></a>
            </h5>
          </div>
          <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
            <div class="card-body">
              To update your profile,try the following:
              <ol>
                <li>Go to your profile.</li>
                <li>Click the "Update" button.</li>
                <li>Change the details that you want and click the "Update" button below.</li>
              </ol>
            </div>
          </div>
        </div>


        <div class="card">
          <div class="card-header" role="tab" id="headingFour">
            <h5 class="mb-0">
              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                <h2>How can I update my shop details?</h2></a>
            </h5>
          </div>
          <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour">
            <div class="card-body">
              To update your shop details:
              <ol>
                <li>Go to your profile.</li>
                <li>Select "Update shop details" tab.</li>
                <li>After changing your shop details, click Update.</li>
              </ol>
            </div>
          </div>
        </div>


        <div class="card">
          <div class="card-header" role="tab" id="headingFive">
            <h5 class="mb-0">
              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                <h2>How to add new products?</h2></a>
            </h5>
          </div>
          <div id="collapseFive" class="collapse" role="tabpanel" aria-labelledby="headingFive">
            <div class="card-body">
              
            </div>
          </div>
        </div>


        <div class="card">
          <div class="card-header" role="tab" id="headingSix">
            <h5 class="mb-0">
              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                <h2>How to make promotions?</h2></a>
            </h5>
          </div>
          <div id="collapseSix" class="collapse" role="tabpanel" aria-labelledby="headingSix">
            <div class="card-body">
              
            </div>
          </div>
        </div>


        <div class="card">
          <div class="card-header" role="tab" id="headingSeven">
            <h5 class="mb-0">
              <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                <h2>How to delete my profile?</h2></a>
            </h5>
          </div>
          <div id="collapseSeven" class="collapse" role="tabpanel" aria-labelledby="headingSeven">
            <div class="card-body">
              Follow these steps:
              <ul>
                <li>Go to your profile</li>
                <li>Click "Delete my profile".</li>
                <li>You'll be taken to a page to confirm the deletion of your account.</li>
              </ul>
              <b>Note</b>:There is no way to un-delete an account.That means all of your profile details and shop details will be lost.
            </div>
          </div>
        </div>

      </div>

    </div>
    <!-- /.container -->

<?php include 'partials/footer.php'; ?>
