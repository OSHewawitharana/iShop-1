
    <?php if ($this->session->userdata('loggedin')) {
      include 'loggedin/header.php';
    }
    else{
       include 'partials/header.php';
    }

    ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">Contact <small>Offer !</small></h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="DailyOffers/viewDailyOffers">Contact Offer</a>
            </li>
            <li class="breadcrumb-item active">Details</li>
        </ol>

        <div class="col-lg-8">
            <div class="table-responsive">
            <table class="table table-striped">
                 <?php if (count($records)): ?>

                 <?php foreach($records as $row):  ?>
                    <tr>
                        <td>Shop Name</td>
                        <td><?php echo $row->shop_name ?></td>
                    </tr>
                    <tr>
                        <td>Shop Category</td>
                        <td><?php echo $row->shop_category ?></td>
                    </tr>
                    <tr>
                        <td>Shop Address</td>
                        <td><?php echo $row->shop_address ?></td>
                    </tr>
                    <tr>
                        <td>Contact Number</td>
                        <td><?php echo $row->shop_contact_number ?></td>
                    </tr>        
                <?php endforeach ?>

            <?php endif ?>
            </table>          
        </div>
        <!-- Contact Form -->
        <div class="row">
            <div class="col-lg-8 mb-4">
                <h3>Send us a Message</h3>
            <hr>           
            <?php echo validation_errors(); ?>
            <?php echo form_open('Contact/ContactUser'); ?>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Full Name:</label>
                            <input type="text" class="form-control" id="name" name="fullname" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Phone Number:</label>
                            <input type="tel" class="form-control" id="phone" name="telenumber" required data-validation-required-message="Please enter your phone number.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Email Address:</label>
                            <input type="email" class="form-control" id="email" name="email" required data-validation-required-message="Please enter your email address.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Message:</label>
                            <textarea rows="10" cols="100" class="form-control" id="message" name="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-primary">Send Message</button>
            </div>
            <?php echo form_close(); ?>
        </div>
        <!-- /.row -->    
   <?php include 'partials/footer.php'; ?>