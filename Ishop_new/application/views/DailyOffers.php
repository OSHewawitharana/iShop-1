<?php if ($this->session->userdata('loggedin')) {
      include 'loggedin/header.php';
    }
    else{
       include 'partials/header.php';
    }

    ?>

<!DOCTYPE html>
<html>
  <body>


      <div class="container" style="min-height: 500px" id="wrapper">

        <h2>Today's Offers!</h2>
        <br>

        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive table-bordered">
            <br>

            <table class="table table-striped">

                <tr>
                    <th>&nbsp;&nbsp;&nbsp;&nbsp;Shop Name</th>
                    <th>&nbsp;&nbsp;&nbsp;&nbsp;Category</th>
                    <th>&nbsp;&nbsp;&nbsp;&nbsp;Discount</th>
                    <th>&nbsp;&nbsp;&nbsp;&nbsp;Discount Description</th>
                    <!-- <th>&nbsp;&nbsp;&nbsp;&nbsp;Shop Address</th>
                    <th>&nbsp;&nbsp;&nbsp;&nbsp;Telephone</th> -->
                    <th>View More</th>
                </tr>

                <?php if (count($records)): ?>
                    <?php foreach ($records as $row): ?>
                    <tr>
                        <td class="text-center"><?php echo $row->shop_name; ?></td>
                        <td><?php echo $row->shop_category ?></td>
                        <td><?php echo $row->discount ?></td>
                        <td><?php echo $row->discount_description ?></td>
                       <!--  <td><?php echo $row->shop_address ?></td>
                        <td><?php echo $row->shop_contact_number ?></td> -->
                        <th><button type='submit' class='btn btn-warning' onclick="window.location='<?php echo base_url("ContactOffers/viewContactOffers/".$row->shop_shop_id); ?>'"> Contact</button></a></th>
                    </tr>

                    <?php endforeach; ?>

                <?php else: ?>
                    <h3 style="margin-bottom: 50px;">No Offers for today!</h3>
                <?php endif ?>

            </table>
                </div>
            </div>
        </div>        
        </div>

    <!-- JavaScript -->
<?php include 'partials/footer.php'; ?>
  </body>
</html>