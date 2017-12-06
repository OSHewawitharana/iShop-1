<?php if ($this->session->userdata('loggedin')) {
      include 'loggedin/header.php';
    }
    else{
       include 'partials/header.php';
    }
    
?>

<div class='container'>

<h1 class="mt-4 mb-3"><i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i> Update User Details </h1>


    <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="<?php echo base_url(); ?>">Home</a>
        </li>
        <li class="breadcrumb-item active">Update User Details</li>
    </ol>

    <div class="row">
        <div class="col-lg-6">

            <center><h2 class="heading" >Personal Details</h2></center>

            <!-- <div class="col-md-6" style="margin-top: 30px; "> -->

            <?php echo form_open('ManageUsers/editUser/'.$row->user_id); ?>

                <div class="form-group">
                    <label for="sid">User ID</label>
                    <input type="text" class="form-control" id="sid" name="id" value="<?php echo $row->user_id ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="regno">Full Name</label>
                    <input type="text" class="form-control" id="sregno" name="fullname" value="<?php echo $row->full_name ?>">
                </div>
                <div class="form-group">
                    <label for="sname">Address</label>
                    <input type="text" class="form-control" id="sname" name="address" value="<?php echo $row->address ?>">
                </div>
                <div class="form-group">
                    <label for="sname">NIC</label>
                    <input type="text" class="form-control" id="sname" name="NIC" value="<?php echo $row->nic ?>">
                </div>
                <div class="form-group">
                    <label for="suni">Email</label>
                    <input type="text" class="form-control" id="suni" name="username" value="<?php echo $row->user_name ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="sname">Contact Number</label>
                    <input type="text" class="form-control" id="sname" name="contactNumber" value="<?php echo $row->contact_number ?>">
                </div>

        </div>

        <div class="col-lg-6">

            <center><h2 class="heading">Shop Details</h2></center>

            <div class="form-group">
                <label for="sname">Shop Name</label>
                <input type="text" class="form-control" id="sname" name="shopName" value="<?php echo $row2->shop_name ?>">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Shop Category</label>
                <select id="" class="form-control" name="shopCategory" value="<?php echo $row2->shop_category ?>">
                    <option value="" disabled="disabled">Select Shop Category</option>

                    <option <?=$row2->shop_category =="Books and Stationary" ? "selected" : ""?> value="Books and Stationary">Books and Stationary</option>

                    <option <?=$row2->shop_category =="Cellular and Communication" ? "selected" : ""?> value="Cellular and Communication">Cellular and Communication</option>

                    <option <?=$row2->shop_category =="Clothing and Accessories" ? "selected" : ""?> value="Clothing and Accessories">Clothing and Accessories</option>

                    <option <?=$row2->shop_category =="Eye Care" ? "selected" : ""?> value="Eye Care">Eye Care</option>

                    <option <?=$row2->shop_category =="Fashion Accessories" ? "selected" : ""?> value="Fashion Accessories">Fashion Accessories</option>

                    <option <?=$row2->shop_category =="Food and Beverages" ? "selected" : ""?> value="Food and Beverages">Food and Beverages</option>

                    <option <?=$row2->shop_category =="Footware and Accessories" ? "selected" : ""?> value="Footware and Accessories">Footware and Accessories</option>

                    <option <?=$row2->shop_category =="Games and Toys" ? "selected" : ""?> value="Games and Toys">Games and Toys</option>

                    <option <?=$row2->shop_category =="Graphics,Cameras and Studio" ? "selected" : ""?> value="Graphics,Cameras and Studio">Graphics,Cameras and Studio</option>

                    <option <?=$row2->shop_category =="Handbags and Leather Goods" ? "selected" : ""?> value="Handbags and Leather Goods">Handbags and Leather Goods</option>

                    <option <?=$row2->shop_category =="Household and Consumable" ? "selected" : ""?> value="Household and Consumable">Household and Consumable</option>

                    <option <?=$row2->shop_category =="Music and Videos" ? "selected" : ""?> value="Music and Videos">Music and Videos</option>

                    <option <?=$row2->shop_category =="Perfumes and Cosmetics" ? "selected" : ""?> value="Perfumes and Cosmetics">Perfumes and Cosmetics</option>

                    <option <?=$row2->shop_category =="Supermarkets" ? "selected" : ""?> value="Supermarkets">Supermarkets</option>

                    <option <?=$row2->shop_category =="Gift item" ? "selected" : ""?> value="Gift item">Gift item</option>

                    <option <?=$row2->shop_category =="Salon and Cosmetic" ? "selected" : ""?> value="Salon and Cosmetic">Salon and Cosmetic</option>

                    <option <?=$row2->shop_category =="Shoe Repair and Key cutting" ? "selected" : ""?> value="Shoe Repair and Key cutting">Shoe Repair and Key cutting</option>

                    <option <?=$row2->shop_category =="Watches and Accessories" ? "selected" : ""?> value="Watches and Accessories">Watches and Accessories</option>

                    <option <?=$row2->shop_category =="Sports and Fitness  Equipments" ? "selected" : ""?> value="Sports and Fitness  Equipments">Sports and Fitness  Equipments</option>

                  </select>
            </div>

            <div class="form-group">
                <label for="sname">Shop Contact Number</label>
                <input type="text" class="form-control" id="sname" name="ShopcontactNumber" value="<?php echo $row2->shop_contact_number ?>">
            </div>

            <div class="form-group">
                <label for="sname">Shop Address</label>
                <input type="text" class="form-control" id="sname" name="shopAddress" value="<?php echo $row2->shop_address ?>">
            </div>

            <div class="form-group">
                <label for="sname">Description</label>
                <input type="text" class="form-control" id="sname" name="description" value="<?php echo $row2->description ?>">
            </div>

            <a href="<?php echo base_url('ManageUsers/viewUsers'); ?>" class='btn btn-primary' name='back' style='margin-left: 150px;'>Back</a>

            <button class='btn btn-success' name='update' style='margin-left: 80px;'>Update</button>
            <?php echo form_close(); ?>

            <hr>

        </div>
    </div>

</div>

<div class="col-md-6" style="margin-top: 60px; ">

<?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <?php echo $this->session->flashdata('success'); ?>
        </div>
    <?php elseif ($this->session->flashdata('error')): ?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <?php echo $this->session->flashdata('error'); ?>
        </div>

    <?php else: ?>
<?php endif; ?>

</div>
</div>

<?php include 'loggedin/footer.php'; ?>
