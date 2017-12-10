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
      <h1 class="mt-4 mb-3">Manage Discounts
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="<?php echo base_url(); ?>">Home</a>
        </li>
        <li class="breadcrumb-item active">
          <a href="<?php echo base_url(''); ?>">Profile</a><!-- here link -->
        </li>
      </ol>

      <!-- Content Row -->
      <div class="row">
        <!-- Sidebar Column -->
        <div class="col-lg-3 mb-4">
          <div class="list-group text-center" >
            <a href="<?php echo base_url('ShopOwner/Home'); ?>" class="list-group-item">Profile</a>
            <a href="<?php echo base_url('itemController/addItem'); ?>" class="list-group-item">Add Item Details</a>
            <a href="<?php echo base_url('itemController/viewItems'); ?>" class="list-group-item">View Item Details</a>
            <a href="<?php echo base_url('ManageDiscounts/viewDiscounts/'.$_SESSION['user_id']); ?>" class="list-group-item active">Manage Discounts</a>
            <a href="<?php echo base_url('TransactionUpdate/viewUsers/'.$_SESSION['user_id']); ?>" class="list-group-item">Transaction Table</a>
            <a href="<?php echo base_url(''); ?>" class="list-group-item">View Ratings</a>
            <a href="<?php echo base_url('ShopOwner/Reports'); ?>" class="list-group-item">Reports</a>
          </div>
          <br>
          <br>
        </div>

        <div class="col-lg-9 mb-4">
            <br>

            <table class="table table-striped">

                <tr>
                    <th>&nbsp;&nbsp;&nbsp;&nbsp;Item ID</th>
                    <th>&nbsp;&nbsp;&nbsp;&nbsp;Item Name</th>
                    <th>&nbsp;&nbsp;&nbsp;&nbsp;Discount</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>

                <?php if (count($records)): ?>

                    <?php foreach ($records as $row): ?>

                    <tr>
                        <td class="text-center"><?php echo $row->shop_item_id; ?></td>
                        <td><?php echo $row->item_name ?></td>
                        <td><?php echo $row->discount_description; ?></td>

                        <td><?php echo form_open('ManageDiscounts/updateDiscounts/'.$row->shop_item_id); ?>
                        <div class="form-group">
	                      <input type="text" class="form-control" id="sname" name="newdiscount" value="<?php echo $row->discount_description ?>">
                		    </div>
                        <a href=""><button type='submit' class='btn btn-warning'>Update</button></a>
                        <?php echo form_close(); ?> </td>

                         <td><a href="<?php echo base_url('ManageDiscounts/deleteDiscounts/'.$row->shop_item_id) ?>"><button type='submit' class='btn btn-danger' onclick="return checkDelete()">Delete</button></a></td>

                    </tr>

                    <?php endforeach; ?>

                <?php else: ?>
                    <h3 style="margin-bottom: 50px;">No items in the database</h3>
                <?php endif ?>

            </table>
            <hr>
        </div>
	</div>
</div>

<?php include 'loggedin/footer.php'; ?>
