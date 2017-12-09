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
        <li class="breadcrumb-item active">Shop Items</li>
    </ol>

    <!-- Content Row -->
    <div class="row">
        <!-- Sidebar Column -->
        <div class="col-lg-3 mb-4">
            <div class="list-group text-center" >
                <a href="<?php echo base_url('ShopOwner/Home'); ?>" class="list-group-item">Profile</a>
                <a href="<?php echo base_url('itemController/addItem'); ?>" class="list-group-item active">Add Item Details</a>
                <a href="<?php echo base_url('itemController/viewItems'); ?>" class="list-group-item">View Item Details</a>
                <a href="<?php echo base_url('ManageDiscounts/viewDiscounts/'.$_SESSION['user_id']); ?>" class="list-group-item">Manage Discounts</a>
                <a href="<?php echo base_url('TransactionUpdate/viewUsers/'.$_SESSION['user_id']); ?>" class="list-group-item">Transaction Table</a>
                <a href="<?php echo base_url(''); ?>" class="list-group-item">View Ratings</a>
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

                <div class="col-lg-8 mb-6">
                    <h2>Add Item Details</h2><br>
                </div>
            </div>
            <div class="container">

                <?php echo form_open('itemController/addItem' ,['class =>in-line']);?>
                <div class="col-sm-12">
                    <div class="form-group" >
                        <label>Item Category </label>
                        <select name="itemCategory" class="form-control col-sm-10" style="margin-right: 15px;" >

                            <?php if (count($cat)): ?>
                                <?php foreach ($cat as $row): ?>
                                    <option value="<?php echo $row ?>"><?php echo $row?></option>
                                <?php endforeach; ?>
                                <!--    --><?php //else: ?>
                                <!--    <option value="none" disabled>----No category to select.----</a></option>-->
                            <?php endif ?>
                        </select>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="form-group" >
                        <label>Item Name </label>
                        <input name="itemName" type="text" class="form-control col-sm-10" placeholder="mobile phones" required>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group " >
                        <label >Quantity</label>
                        <div class="form-inline " >
                            <input name="quantity" type="text" class="form-control col-sm-6" placeholder="500" required>
                            <select name="measuring_unit" class="form-control col-sm-4"  style="margin-left: 5px;" required  placeholder="select unit of measurement">
                                <option value="Select Measuring Unit" disabled="disabled" selected>Select Measuring Unit</option>
                                <option value="Letre"> letre </option>
                                <option value="kilogram"> kilogram </option>
                                <option value="packets"> packets  </option>
                                <option value="items"> items</option>
                                <option value="meter"> meter</option>
                                <option value=" bundle">bundle</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="form-group" >
                        <label >Unit Price(Rs)</label>
                        <input name="price" type="text"  class="form-control col-sm-10" placeholder="Rs.50000.00" required>

                    </div>
                </div>

                <!--                <div class="col-sm-12">-->
                <!--                    <div class="form-group">-->
                <!--                        <label>Brand</label>-->
                <!--                        <input name="brand" type="textarea"  class="form-control col-sm-10" placeholder="Samsung" required>-->
                <!--                    </div>-->
                <!--                </div>-->

                <div class="col-sm-12">
                    <div class="form-group" >
                        <label >Description</label>
                        <input name="description" type="textarea"  class="form-control col-sm-10" placeholder="brand,model etc" required>
                    </div>
                </div>

                <br>

                <div class="form-group">
                    <div class="pull-center" style="padding-right: 30px;padding-left: 200px;border-left-width: 50px; margin-left: 350px;">
                        <button type="submit" class="btn btn-info" style="padding-right: 30px;padding-left: 30px;" name="add">Add</button>
                    </div>
                </div>

                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
    <p> </p>
</div>


<?php include 'loggedin/footer.php'; ?>






