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
                    <div class="form-group " >
                        <label>Item Category </label>
                        <div class="form-inline" >
                        <select name="itemCategory" class="form-control col-sm-7" style="margin-right: 15px;" >

                            <option value="Item Category" disabled="disabled" selected>Select item category</option>
                            <?php if (count($cat)): ?>
                                <?php foreach ($cat as $row): ?>
                                    <option value="<?php echo $row ?>"><?php echo $row?></option>
                                <?php endforeach; ?>
                            <?php endif ?>
                        </select>
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">Add new Category</button>


                        <!-- Modal -->
                        <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
<!--                                        <div class="alert alert-danger alert-dismissible" role="alert">-->
<!--                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">-->
<!--                                                <span aria-hidden="true">&times;</span></button></div>-->
                                        <h6 class="modal-title">Add new category</h6>
                                    </div>
                                    <div class="modal-body">

                                        <!--form inside the model-->
                                        <?php echo form_open('itemController/addnewCategory' );?>


                                            <div class="form-group form-horizontal">
                                                <label for="contactNumber " style="margin-right: 5px;">New Category Name:</label>
                                                <input type="text" class="form-control" id="newCategoryName" name="newCategoryName" required style="margin-right: 15px;">



                                        <div class="form-group">
                                                <button type="submit" class="btn btn-default" name="add">Add</button>

                                        </div>

                                        </div>


                                        <?php echo form_close(); ?>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>

                            </div>
                        </div>



                    </div>
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

                                <?php if (count($unit)): ?>
                                    <?php foreach ($unit as $unit): ?>
                                        <option value="<?php echo $unit ?>"><?php echo $unit?></option>
                                    <?php endforeach; ?>
                                <?php endif ?>

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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!---->
<!--<script>-->
<!--    // Validating Empty Field-->
<!--    function check_empty() {-->
<!--        if (document.getElementById('name').value == "" || document.getElementById('email').value == "" || document.getElementById('msg').value == "") {-->
<!--            alert("Fill All Fields !");-->
<!--        } else {-->
<!--            document.getElementById('form').submit();-->
<!--            alert("Form Submitted Successfully...");-->
<!--        }-->
<!--    }-->
<!--    //Function To Display Popup-->
<!--    function div_show() {-->
<!--        document.getElementById('abc').style.display = "block";-->
<!--    }-->
<!--    //Function to Hide Popup-->
<!--    function div_hide() {-->
<!--        document.getElementById('abc').style.display = "none";-->
<!---->
<!--    }-->
<!--</script>-->






