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
        <li class="breadcrumb-item active">Manage Discounts
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
            <a href="<?php echo base_url('ShopOwner/Reports'); ?>" class="list-group-item">Reports</a>
          </div>
          <br>
          <br>
        </div>

        <div class="col-lg-9 mb-4">
            <br>

            <table class="table table-striped">

                <tr>
                    <th class="text-center">Item ID</th>
                    <th class="text-center">Item Name</th>
                    <th class="text-center">Discount Description</th>
                    <th class="text-center">Update</th>
                    <th class="text-center">Delete</th>
                </tr>

                <?php if (count($records)): ?>

                    <?php foreach ($records as $row): ?>

                    <tr>
                        <td class="text-center"><?php echo $row->shop_item_id; ?></td>
                        <td class="text-center"><?php echo $row->item_name ?></td>
                       

                        <td class="text-center"><?php echo form_open('ManageDiscounts/updateDiscounts/'.$row->shop_item_id); ?>
                        <div class="form-group">
	                      <input type="text" class="form-control" id="sname" name="newdiscount" value="<?php echo $row->discount_description ?>">
                		    </div>
                        </td>
                        <td class="text-center">
                        <a href=""><button type='submit' class='btn btn-warning'>Update</button></a>
                        <?php echo form_close(); ?> </td>

                         <td class="text-center"><a href="<?php echo base_url('ManageDiscounts/deleteDiscounts/'.$row->shop_item_id) ?>"><button type='submit' class='btn btn-danger' onclick="return checkDelete()">Delete</button></a></td>

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
