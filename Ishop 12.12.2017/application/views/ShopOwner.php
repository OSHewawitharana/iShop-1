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
      <h1 class="mt-4 mb-3">Welcome
        <small><?php echo $this->session->userdata('full_name'); ?>..</small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="<?php echo base_url(); ?>">Home</a>
        </li>
        <li class="breadcrumb-item active">Profile</li>
      </ol>

      <!-- Content Row -->
      <div class="row">
        <!-- Sidebar Column -->
        <div class="col-lg-3 mb-4">
          <div class="list-group text-center" >
            <a href="<?php echo base_url('ShopOwner/Home'); ?>" class="list-group-item active">Profile</a>
            <a href="<?php echo base_url('itemController/addItem'); ?>" class="list-group-item">Add Item Details</a>
            <a href="<?php echo base_url('itemController/viewItems'); ?>" class="list-group-item">View Item Details</a>
            <a href="<?php echo base_url('ManageDiscounts/viewDiscounts/'.$_SESSION['user_id']); ?>" class="list-group-item">Manage Discounts</a>
            <a href="<?php echo base_url('TransactionUpdate/viewUsers/'.$_SESSION['user_id']); ?>" class="list-group-item">Transaction Table</a>
            <a href="<?php echo base_url('ShopOwner/Reports'); ?>" class="list-group-item">Reports</a>
          </div>

          <br>
          <h4><i class="fa fa-cogs fa-2x" aria-hidden="true"></i> Account Settings</h4>
          <br>
          <div class="list-group text-center">
            <a href="<?php echo base_url('ManageUsers/updateProfile/'.$_SESSION['user_id']); ?>" class="list-group-item active">Update Profile</a>
          </div><br>
          <div class="list-group text-center">
            <a href="<?php echo base_url('ShopOwner/deactivateUser/'.$_SESSION['user_id']); ?>" class="list-group-item active" onclick="return checkDeactivateUser()">Deactivate My Account!</a>
          </div>
        </div>
        <!-- Content Column -->
        <div class="col-lg-9 mb-4">

        <div class="row">
        <div class="col-lg-8 mb-4">
          <h2>Personal Details</h2><br>
        </div>

        <div class="col-lg-4 mb-4">
          <div class="profile-header-container">   
              <div class="profile-header-img">
                <img class="img-circle" src="<?php echo base_url(); ?>assets/images/profile.jpg" style="width: 200px; height: 200px; position: absolute;" />
              </div>
          </div>
          </div>
        </div>

          <div class="caption">
                          <table class="table" style="font-size: 22px">
                            <tbody>
                                <tr>
                                <td><i class="fa fa-user-circle-o" aria-hidden="true"></i> Full Name</td>
                                <td><?php echo $_SESSION['full_name']; ?></td>
                                </tr>
                                <tr>
                                    <td><i class="fa fa-registered" aria-hidden="true"></i> NIC</td>
                                    <td><?php echo $_SESSION['nic']; ?></td>
                                </tr>
                                <tr>
                                    <td><i class="fa fa-institution" aria-hidden="true"></i> Address</td>
                                    <td><?php echo $_SESSION['address']; ?></td>
                                </tr>
                                <tr>
                                <td><i class="fa fa-envelope-o" aria-hidden="true"></i> Email</td>
                                <td><?php echo $_SESSION['email']; ?></td>
                                </tr>
                                <tr>
                                    <td><i class="fa fa-phone" aria-hidden="true"></i> Contact Number</td>
                                    <td><?php echo $_SESSION['contact_number']; ?></td>
                                </tr>
                                <tr>
                                    <td><i class="fa fa-building" aria-hidden="true"></i> Shop Name</td>
                                    <td><?php echo $_SESSION['shop_name']; ?></td>
                                </tr>
                                <tr>
                                    <td><i class="fa fa-caret-square-o-down" aria-hidden="true"></i> Shop Category</td>
                                    <td><?php echo $_SESSION['shop_category']; ?></td>
                                </tr>
                                <tr>
                                    <td><i class="fa fa-phone" aria-hidden="true"></i> Shop Contact Number</td>
                                    <td><?php echo $_SESSION['shop_contact_number']; ?></td>
                                </tr>
                                <tr>
                                    <td><i class="fa fa-institution" aria-hidden="true"></i> Shop Address</td>
                                    <td><?php echo $_SESSION['shop_address']; ?></td>
                                </tr>
                                <tr>
                                    <td><i class="fa fa-paragraph" aria-hidden="true"></i> Description</td>
                                    <td><?php echo $_SESSION['description']; ?></td>
                                </tr>
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
