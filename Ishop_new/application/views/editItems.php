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
                <a href="<?php echo base_url('itemController/addItem'); ?>" class="list-group-item">Add Item Details</a>
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


                    <h2>Edit Item Details</h2><br>


                </div>
            </div>
            <div class="container">



                <?php echo form_open('itemController/editItems/<?php echo $row->shop_item_id ?>') ?>

                

                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Item Id: </label>
                        <input type="text" class="form-control" id="itemId" name="itemId" value="<?php echo $row->shop_item_id ?>" readonly>
                    </div>
                </div>



                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Item Name </label>
                        <input name="itemName" type="text" class="form-control" value="<?php echo $row->item_name ?>" required>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Item Category </label>
                        <select name="itemCategory" class="form-control" required value="<?php echo $row->category ?>">
                            <!--                                                    <option value="Afghanistan"> Parts & Accessories </option>-->
                            <!--                                                    <option value="Albania"> Handbags & Accessories - Fashion </option>-->
                            <option value="Books and Stationary"> Books and Stationary </option>
                            <option value="Cellular and Communication"> Cellular and Communication </option>
                            <option value="Clothing and Accessories"> Clothing and Accessories  </option>
                            <!--                                                    <option value="Angola"> Watches - Fashion </option>-->
                            <option value=" Eye Care"> Eye Care</option>
                            <option value="Fashion Accessories ">Fashion Accessories </option>
                            <option value="Food and Beverages">Food and Beverages</option>
                            <option value="Footware and Accessories">Footware and Accessories </option>
                            <option value="Games and Toys"> Games and Toys </option>


                            <option value="Graphics,Cameras and Studio"> Graphics,Cameras and Studio </option>
                            <option value="Handbags and Leather Goods"> Handbags and Leather Goods </option>
                            <!--                                                    <option value=" food"> food </option>-->
                            <option value=" Household and Consumable"> Household and Consumable </option>
                            <option value="Music and Videos"> Music and Videos </option>
                            <option value="Perfumes and Cosmetics">Perfumes and Cosmetics</option>
                            <option value="Supermarkets "> Supermarkets </option>
                            <option value="Gift item">Gift item</option>
                            <option value="Salon and Cosmetic"> Salon and Cosmetic</option>
                            <option value="Shoe Repair and Key cutting">Shoe Repair and Key cutting</option>
                            <option value=" Watches and Accessories "> Watches and Accessories </option>
                            <option value="Sports and Fitness  Equipments">Sports and Fitness  Equipments</option>


                        </select>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Price</label>
                        <input name="price" type="text" class="form-control" value="<?php echo $row->shop_item_id ?>" required>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Description</label>
                        <input name="description" type="textarea" class="form-control" value="<?php echo $row->description ?>" required>
                    </div>
                </div>

                <br>
                <div class="form-group" >
                    <div class="pull-right">
                        <input type="submit" class="btn btn-info" value="Submit">
                    </div>
                </div>

                <?php echo form_close(); ?>






            </div>
        </div>
    </div>

    <p> </p>
</div>
</div>


</div>

<?php include 'loggedin/footer.php'; ?>






