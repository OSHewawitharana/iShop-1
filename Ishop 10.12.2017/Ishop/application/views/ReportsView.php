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
        <?php echo form_open('Pdf_Controller/generate_item_report'); ?>
        
          <div class="row">
            <div class="col-lg-4 mb-4">
              <div class="form-group">
                <h5>Report Type</h5>
                <select id="" class="form-control" name="shopCategory" value="">
                    <option value="" selected="selected" disabled="disabled">Select Report Type</option>
                    <option value="Type1">Report Type 1</option>
                    <option value="Type1">Report Type 1</option>
                    <option value="Type1">Report Type 1</option>
                    <option value="Type1">Report Type 1</option>
                </select>
              </div>
            </div>
          </div>

          
          <div class="row">
            <div class="col-lg-4 mb-4">
              <div class="form-group">
                <h5>Date From</h5>
                  <div class="input-group date" data-provide="datepicker">
                    <input type="text" class="form-control" name="datepicker1" placeholder="Select Date">
                    <div class="input-group-addon">
                      <span><i class="fa fa-calendar" aria-hidden="true"></i></span>
                    </div>
                  </div>
              </div>
            </div> 
            <div class="col-lg-4 mb-4">
              <div class="form-group">
                <h5>Date To</h5>
                  <div class="input-group date" data-provide="datepicker">
                    <input type="text" class="form-control" name="datepicker2" placeholder="Select Date">
                    <div class="input-group-addon">
                      <span><i class="fa fa-calendar" aria-hidden="true"></i></span>
                    </div>
                  </div>
              </div>
            </div> 
          </div>

          <div class="row">
            <div class="col-lg-1 mb-4"></div>
            <div class="col-lg-2 mb-4">
              <a href="" class="btn btn-primary">Generate Report</a>
            </div>
            <div class="col-lg-2 mb-4">
              <button class='btn btn-success' name='update' style='margin-left: 80px;'>Print Report</button>
            </div>
          </div>

        <?php echo form_close(); ?>
        </div>
      </div>
    </div>

<script>
    $(function(){
       $('.datepicker1').datepicker({
            format: 'mm/dd/yyyy',
            startDate: '-3d'
        });
    });
</script>

<script>
    $(function(){
       $('.datepicker2').datepicker({
        format: 'mm/dd/yyyy',
        startDate: '-3d'
});
    });
</script>


<script src="<?php echo base_url(); ?>assets/dist/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>



<?php include 'loggedin/footer.php'; ?>

