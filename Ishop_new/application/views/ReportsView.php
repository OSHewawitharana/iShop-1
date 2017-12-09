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
            <a href="<?php echo base_url('ShopOwner/Home'); ?>" class="list-group-item">Profile</a>
            <a href="<?php echo base_url('itemController/addItem'); ?>" class="list-group-item">Add Item Details</a>
            <a href="<?php echo base_url('itemController/viewItems'); ?>" class="list-group-item">View Item Details</a>
            <a href="<?php echo base_url('ManageDiscounts/viewDiscounts/'.$_SESSION['user_id']); ?>" class="list-group-item">Manage Discounts</a>
            <a href="<?php echo base_url('TransactionUpdate/viewUsers/'.$_SESSION['user_id']); ?>" class="list-group-item">Transaction Table</a>
            <a href="<?php echo base_url(''); ?>" class="list-group-item">View Ratings</a>
            <a href="<?php echo base_url('ShopOwner/Reports'); ?>" class="list-group-item active">Reports</a>
          </div>
        </div>

        <div class="col-lg-9 mb-4">
          <div class="card h-10">
            <h3 class="card-header">Item Details</h3>
            <div class="card-body">
              <p>To view all the Details of the Items in the Database
                  <ul>
                  <li>Item Name</li>
                  <li>Item Price</li>
                  <li>Item Quantity</li>
                  <li>Item Category</li>
                  <li>Item Description</li>
                  </ul>
              </p>
              <a href="<?php echo base_url('Pdf_Controller/generate_item_report'); ?>" class="btn btn-primary">Generate Report</a>
            </div>
          </div>

          <br>

          <div class="card h-10">
            <h3 class="card-header">Most Selling Items</h3>
            <div class="card-body">
              <p>To view the Details of Most Selling Items in the Database
                  <ul>
                  <li>Item Name</li>
                  <li>Item Price</li>
                  <li>Item Quantity</li>
                  <li>Item Category</li>
                  <li>Item Description</li>
                  </ul>
              </p>
              <a href="<?php echo base_url('Pdf_Controller/generate_pdf_report'); ?>" class="btn btn-primary">Generate Report</a>
            </div>
          </div>

        </div>

      </div>
    </div>

<?php include 'loggedin/footer.php'; ?>

