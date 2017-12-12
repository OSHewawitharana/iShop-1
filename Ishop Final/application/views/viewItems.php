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
    <h1 class="mt-4 mb-3">View Item Details
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
            <a href="<?php echo base_url('ShopOwner/Reports'); ?>" class="list-group-item">Reports</a>

            </div>
        </div>
        <!-- Content Column -->
        <div class="col-lg-9 mb-4">
            <?php if ($this->session->flashdata('success')) {?>
                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
            <?php  } ?>
            <!-- error messages  -->
            <?php if ($this->session->flashdata('error')) {?>
                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <?php echo $this->session->flashdata('error'); ?>
                </div>
            <?php  } ?>


            <!-- validation messages for taking inputs -->
            <?php echo validation_errors('<div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>','</div>');
            ?>

            <div class="row">
                <!-- <div class="col-lg-8 mb-4">
                    <h1>Item Details</h1><br>
                </div> -->

<!--                <div class="col-lg-4 mb-4">-->
<!--                    <div class="profile-header-container">-->
<!--                        <div class="profile-header-img">-->
<!--                            <img class="img-circle" src="--><?php //echo base_url(); ?><!--assets/images/profile.jpg" style="width: 200px; height: 200px; position: absolute;" />-->
<!--                        </div>-->
<!--                    </div><tbody>-->
<!--                </div>-->
            </div>


            <?php echo form_open('itemController/searchItem',['class'=>'form-inline']); ?>
            <div class="form-group ">
                <input type="text" class="form-control col-lg-8 " id="exampleInputEmail1" placeholder="Enter any keyword.." name="search">&nbsp;&nbsp;&nbsp;&nbsp;
                <button type="submit" class="btn btn-default">Search</button>
            </div>
            <?php echo form_close(); ?>
            <br>

                <table class="table table-striped" >
                    <tr>
                        <!-- <th class="text-center">Item Id</th> -->
                        <th class="text-center">Item Name</th>
                        <th class="text-center">Unit Price</th>
                        <th class="text-center">Item Category</th>
                        <th class="text-center">Quantity</th>
                        <th class="text-center">Unit of Measurment</th>
                       
                        <th class="text-center"></th>
                        <th class="text-center"></th>
                    </tr>

                    <?php if (count($records)): ?>
                        <?php foreach ($records as $row): ?>

                    <tr>
                        <!-- <td class="text-center"><?php echo $row->shop_item_id ?></td> -->
                        <td class="text-center"><?php echo $row->item_name; ?></td>
                        <td class="text-center"><?php echo $row->unit_price; ?></td>
                        <td class="text-center"><?php echo $row->item_category;?></td>
                        <td class="text-center"><?php echo $row->quantity;?></td>
                        <td class="text-center"><?php echo $row->measuring_unit;?></td>
                  
                        <td class="text-center"><a href="editItems/<?php echo $row->shop_item_id ?>"><button type='button' class='btn btn-primary' >Edit</button></a>        </td>
                        <td class="text-center"><a href="deleteItem/<?php echo $row->shop_item_id ?>"><button type='submit' class='btn btn-danger' name='delete'>Remove</button></a>        </td>

                    </tr>

                    <?php endforeach; ?>
                    <?php else: ?>

                        <br>
                        <p style="margin-bottom: 50px;">No such an item in the database with the given index</p>
                    <?php endif ?>
                </table>
        </div>
    </div>

</div>
<!-- /.container -->

<?php include 'loggedin/footer.php'; ?>
