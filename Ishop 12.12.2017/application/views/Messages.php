<?php if ($this->session->userdata('loggedin')) {
      include 'loggedin/header.php';
    }
    else{
       include 'partials/header.php';
    }
    
?>

<div class="container" style="min-height: 500px">

	<h1 class="mt-4 mb-3"><i class="fa fa-envelope fa-2x" aria-hidden="true"></i> Messages</h1>


	<ol class="breadcrumb">
	    <li class="breadcrumb-item">
	      <a href="<?php echo base_url(); ?>">Home</a>
	    </li>
	    <li class="breadcrumb-item active">Messages</li>
	</ol>

	<br>

	<div class="row">
	    <!-- Sidebar Column -->
	    <div class="col-lg-3 mb-4">
	      <div class="list-group text-center" >
            <a href="<?php echo base_url('Login/adminView'); ?>" class="list-group-item">Profile</a>
            <a href="<?php echo base_url('Requests/viewRequests'); ?>" class="list-group-item">User Requests</a>
            <a href="<?php echo base_url('ManageUsers/viewUsers'); ?>" class="list-group-item">Manage Users</a>
            <a href="<?php echo base_url('Messages/viewMessages'); ?>" class="list-group-item active">View Messages</a>
          </div>
	    </div>

	    <div class="col-lg-9 mb-4">

	    	<?php if (count($records)): ?>

	        <?php foreach ($records as $row): ?>

	        	<div class="mb-4" id="accordion" role="tablist" aria-multiselectable="true">
			        <div class="card">
			          <div class="card-header" role="tab" id="headingOne">
			            <h4 class="mb-0">
			              <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><?php echo $row->full_name; ?></a>
			            </h4>
			          </div>

			          <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
			            <div class="card-body">
			               	<?php echo $row->message; ?><br><br>
			               	<a href="mailto:<?php echo $row->email; ?>"><?php echo $row->email; ?></a><br>
			            	<?php echo $row->tele_number; ?>
			            </div>
			          </div>
			        </div>
			    </div>
		    <hr>

	      <?php endforeach; ?>

	        <?php else: ?>
	            <h3 style="margin-bottom: 50px;">No new Messages..</h3>
	        <?php endif ?>

	    </div>
	</div>
</div>


<?php include 'loggedin/footer.php'; ?>
