<?php if ($this->session->userdata('loggedin')) {
      include 'loggedin/header.php';
    }
    else{
       include 'partials/header.php';
    }
    
?>


<!-- Page Content -->
    <div class="container" style="min-height: 500px">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3"><i class="fa fa-users fa-2x" aria-hidden="true"></i> Welcome to Dashboard,
        <small><?php echo $this->session->userdata('full_name'); ?></small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="<?php echo base_url(); ?>">Home</a>
        </li>
        <li class="breadcrumb-item active">Profile</li>
      </ol>

      <br>

      <!-- Content Row -->
      <div class="row">
        <!-- Sidebar Column -->
        <div class="col-lg-3 mb-4">
          <div class="list-group text-center" >
            <a href="<?php echo base_url('Login/adminView'); ?>" class="list-group-item active">Profile</a>
            <a href="<?php echo base_url('Requests/viewRequests'); ?>" class="list-group-item">User Requests</a>
            <a href="<?php echo base_url('ManageUsers/viewUsers'); ?>" class="list-group-item">Manage Users</a>
            <a href="<?php echo base_url('Messages/viewMessages'); ?>" class="list-group-item">View Messages</a>
          </div>
        </div>
        <!-- Content Column -->
        <div class="col-lg-9 mb-4">

            <center><h2>Personal Details</h2><br>
            <img class="img-circle" src="<?php echo base_url(); ?>assets/images/profile.jpg" style="width: 200px; height: 200px;" /><br></center>

        <!-- <div class="row">
          <div class="col-lg-6 mb-4">
            <h2>Personal Details</h2><br>
          </div>

          <div class="col-lg-4 mb-4">
            <div class="profile-header-container"> 

                <div class="profile-header-img">
                  <img class="img-circle" src="<?php echo base_url(); ?>assets/images/profile.jpg" style="width: 200px; height: 200px;" />
                </div>

            </div>
          </div>
        </div> -->

          <div class="caption">
                          <table class="table" style="font-size: 22px">
                            <tbody>
                                <tr>
                                <td><i class="fa fa-user-circle-o" aria-hidden="true"></i> Full Name</td>
                                <td><?php echo $_SESSION['full_name']; ?></td>
                                </tr>
                                <tr>
                                <td><i class="fa fa-envelope-o" aria-hidden="true"></i> Email</td>
                                <td><?php echo $_SESSION['email']; ?></td>
                                </tr>
                                <tr>
                                    <td><i class="fa fa-phone" aria-hidden="true"></i> Contact Number</td>
                                    <td><?php echo $_SESSION['contact_no']; ?></td>
                                </tr>                                
                                <!-- <tr>
                                    <td><i class="fa fa-key" aria-hidden="true"></i>Password</td>
                                    <td><i class="fa fa-lock" aria-hidden="true"></i><a href="<?php #echo site_url('Users/getPassword/'.$_SESSION['user_id']) ?>" class="btn btn-link">Change</a></td>
                                </tr> -->
                            </tbody>
                          </table>
                        </div>

          <p> </p>
        </div>
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

<?php include 'loggedin/footer.php'; ?>
