<?php if ($this->session->userdata('loggedin')) {
    include 'loggedin/header.php';
}
else{
    include 'partials/header.php';
}

?>

<?php echo form_open('itemController/addNewUnit' )?>


    <h2 style="text-align: center">Add New Unit of Measuring</h2>
    <span></span>
    <br>
    <br>

<?php if ($this->session->flashdata('success')) {?>
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <?php echo $this->session->flashdata('success'); ?>
    </div>
<?php  } ?>

    <!-- validation messages for taking inputs -->
<?php echo validation_errors('<div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>','</div>');
?>



    <div class="col-sm-10">

        <center style="border-left-width: 80px;margin-left: 320px;">

            <div class="form-group form-inline">
                <label class="control-label col-sm-3" for="email">Shop category:</label>
                <!--        <div class="col-sm-10">-->
                <input type="text" class="form-control col-sm-8"  id="shopcategory" placeholder="Meter" read="" readonly="">
                <!--        </div>-->
            </div>
            <div class="form-group form-inline">
                <label class="control-label col-sm-3" for="pwd">Unit of measurement:</label>
                <!--        <div class="col-sm-10">-->
                <input type="text" class="form-control col-sm-8"  name="unit" placeholder="Enter new measuring unit">
                <!--        </div>-->
            </div>

            <br>
            <br>
            <br>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Submit</button>
                </div>
            </div>



        </center>




    </div>
<?php echo form_close(); ?>

<?php
include 'partials/footer.php';
?>