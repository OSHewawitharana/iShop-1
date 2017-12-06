<?php if ($this->session->userdata('loggedin')) {
      include 'loggedin/header.php';
    }
    else{
       include 'partials/header.php';
    }
    
?>

<div class="container" style="min-height: 500px">

	<h1 class="mt-4 mb-3"><i class="fa fa-user-plus fa-2x" aria-hidden="true"></i> User Requests </h1>


	<ol class="breadcrumb">
	    <li class="breadcrumb-item">
	      <a href="<?php echo base_url(); ?>">Home</a>
	    </li>
	    <li class="breadcrumb-item active">User Requests</li>
	</ol>

	<br>

	<div class="row">
	    <!-- Sidebar Column -->
	    <div class="col-lg-3 mb-4">
	      <div class="list-group text-center" >
            <a href="<?php echo base_url('Login/adminView'); ?>" class="list-group-item">Profile</a>
            <a href="<?php echo base_url('Requests/viewRequests'); ?>" class="list-group-item active">User Requests</a>
            <a href="<?php echo base_url('ManageUsers/viewUsers'); ?>" class="list-group-item">Manage Users</a>
            <a href="<?php echo base_url('Messages/viewMessages'); ?>" class="list-group-item">View Messages</a>
          </div>
	    </div>

	    <div class="col-lg-9 mb-4">
	    	<table class="table table-striped">

                <tr>
                    <th class="text-center">ID</th>
                    <th>&nbsp;&nbsp;&nbsp;&nbsp;Name</th>
                    <th>&nbsp;&nbsp;&nbsp;&nbsp;Email</th>
                    <th>&nbsp;&nbsp;&nbsp;&nbsp;NIC</th>
                    <th>&nbsp;&nbsp;&nbsp;&nbsp;Address</th>
                    <th>&nbsp;&nbsp;&nbsp;&nbsp;Profile</th>
                    <th>&nbsp;&nbsp;Action</th>
                </tr>

                <?php if (count($records)): ?>

                    <?php foreach ($records as $row): ?>

                    <tr>
                        <td class="text-center"><?php echo $row->user_id; ?></td>
                        <td><?php echo $row->full_name ?></td>
                        <td><?php echo $row->user_name; ?></td>
                        <td><?php echo $row->nic; ?></td>
                        <td><?php echo $row->address; ?></td>
                        <th><a href="<?php echo base_url('Requests/viewProfile/'.$row->user_id) ?>"><button type='submit' class='btn btn-info'>View More</button></a></th>

                        <th><a href="<?php echo base_url('ManageUsers/acceptUser/'.$row->user_id) ?>"><button type='submit' class='btn btn-success' style="margin-bottom: 10px" onclick="return checkAccept()">Accept</button></a> <a href="<?php echo base_url('ManageUsers/RejectUser/'.$row->user_id) ?>"><button type='submit' class='btn btn-danger' onclick="return checkDelete()">Reject</button></a></th>
                    </tr>

                    <?php endforeach; ?>

                <?php else: ?>
                    <h3 style="margin-bottom: 50px;">No user requests in the database</h3>
                <?php endif ?>

            </table>
            <hr>
	    </div>


	</div>
</div>


<?php include 'partials/footer.php'; ?>