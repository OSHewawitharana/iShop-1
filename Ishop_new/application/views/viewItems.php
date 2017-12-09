<?php if ($this->session->userdata('loggedin')) {
    include 'loggedin/header.php';
}
else{
    include 'partials/header.php';
}

?>


<!-- Page Content -->
<div class="container" style="min-height: 402px;">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Welcome
        <small><?php echo $this->session->userdata('full_name'); ?>..</small>
    </h1>

    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="<?php echo base_url(); ?>">Home</a>
        </li>
        <li class="breadcrumb-item active">View Items</li>
    </ol>

    <!-- Content Row -->
    <div class="row">
        <!-- Sidebar Column -->
        <div class="col-lg-3 mb-4">
            <div class="list-group text-center" >
                <a href="<?php echo base_url('ShopOwner/Home'); ?>" class="list-group-item">Profile</a>
                <a href="<?php echo base_url('itemController/addItem'); ?>" class="list-group-item">Add Item Details</a>
                <a href="<?php echo base_url('itemController/viewItems'); ?>" class="list-group-item active">View Item Details</a>
                <a href="<?php echo base_url('ManageDiscounts/viewDiscounts/'.$_SESSION['user_id']); ?>" class="list-group-item">Manage Discounts</a>
                <a href="<?php echo base_url('TransactionUpdate/viewUsers/'.$_SESSION['user_id']); ?>" class="list-group-item">Transaction Table</a>
                <a href="<?php echo base_url(''); ?>" class="list-group-item">View Ratings</a>
                <a href="<?php echo base_url('ShopOwner/Reports'); ?>" class="list-group-item">Reports</a>
            </div>
        </div>
        <!-- Content Column -->
        <div class="col-lg-9 mb-4">

            <div class="row">
                <div class="col-lg-8 mb-4">
                    <h1>Item Details</h1><br>
                </div>

<!--                <div class="col-lg-4 mb-4">-->
<!--                    <div class="profile-header-container">-->
<!--                        <div class="profile-header-img">-->
<!--                            <img class="img-circle" src="--><?php //echo base_url(); ?><!--assets/images/profile.jpg" style="width: 200px; height: 200px; position: absolute;" />-->
<!--                        </div>-->
<!--                    </div><tbody>-->
<!--                </div>-->
            </div>



            <div class="table-responsive">
                <table class="table table-striped">
                
                    <tr>
                        <th>Item Id</th>
                        <th>Item Name</th>
                        <th>Unit Price</th>
                        <th>&nbsp;&nbsp;&nbsp;&nbsp;Category</th>
                        <th></th>
                        <th></th>
                    </tr>

                        <?php if (count($records)): ?>
                        <?php foreach ($records as $row): ?>

                    <tr>
                        <td><?php echo $row->shop_item_id ?></td>
                        <td><?php echo $row->item_name; ?></td>
                        <td><?php echo $row->price; ?></td>
                        <td><?php echo $row->category; ?></td>
                        <td><a href="editItems/<?php echo $row->shop_item_id ?>"><button type='button' class='btn btn-primary'>Edit</button></a>        </td>
                        <td><a href="#"><button type='submit' class='btn btn-danger'>Remove</button></a>        </td>

                    </tr>

                    <?php endforeach; ?>
                    <?php else: ?>

                        <br>
                        <p style="margin-bottom: 50px;">No users in the database with the given index</p>
                    <?php endif ?>
                    
                </table>
            </div>

            <p> </p>
        </div>
    </div>
    <!-- /.row -->

</div>
<!-- /.container -->

<?php include 'loggedin/footer.php'; ?>
