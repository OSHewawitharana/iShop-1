<?php if ($this->session->userdata('loggedin')) {
      include 'loggedin/header.php';
    }
    else{
       include 'partials/header.php';
    }
    
?>


<div class="container" style="min-height: 500px">

    <h1 class="mt-4 mb-3"><i class="fa fa-user fa-2x" aria-hidden="true"></i> Registered users in the System </h1>


    <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="<?php echo base_url(); ?>">Home</a>
        </li>
        <li class="breadcrumb-item active">Manage Users</li>
    </ol>

    <br>

    <div class="row">
        <!-- Sidebar Column -->
        <div class="col-lg-3 mb-4">
          <div class="list-group text-center" >
            <a href="<?php echo base_url('Login/adminView'); ?>" class="list-group-item">Profile</a>
            <a href="<?php echo base_url('Requests/viewRequests'); ?>" class="list-group-item">User Requests</a>
            <a href="<?php echo base_url('ManageUsers/viewUsers'); ?>" class="list-group-item active">Manage Users</a>
            <a href="<?php echo base_url('Messages/viewMessages'); ?>" class="list-group-item">View Messages</a>
          </div>
        </div>

        <div class="col-lg-9 mb-4">

            <?php echo form_open('ManageUsers/searchUsers',['class'=>'form-inline']); ?>
            <div class="form-group ">
                <input type="text" class="form-control col-lg-8 " id="exampleInputEmail1" placeholder="Enter any keyword.." name="search">&nbsp;&nbsp;&nbsp;&nbsp;
                <button type="submit" class="btn btn-default">Search</button>
            </div>
            <?php echo form_close(); ?>
            <br>

            <table class="table table-striped">

                <tr>
                    <th class="text-center">ID</th>
                    <th>&nbsp;&nbsp;&nbsp;&nbsp;Name</th>
                    <th>&nbsp;&nbsp;&nbsp;&nbsp;Email</th>
                    <th>&nbsp;&nbsp;&nbsp;&nbsp;NIC</th>
                    <th>&nbsp;&nbsp;&nbsp;&nbsp;Address</th>
                    <th>&nbsp;&nbsp;&nbsp;&nbsp;Edit</th>
                    <th>Remove</th>
                </tr>

                <?php if (count($records)): ?>

                    <?php foreach ($records as $row): ?>

                    <tr>
                        <td class="text-center"><?php echo $row->user_id; ?></td>
                        <td><?php echo $row->full_name ?></td>
                        <td><?php echo $row->user_name; ?></td>
                        <td><?php echo $row->nic; ?></td>
                        <td><?php echo $row->address; ?></td>
                        <th><a href="<?php echo base_url('ManageUsers/editUser/'.$row->user_id) ?>"><button type='submit' class='btn btn-warning'>Update</button></a></th>
                        <th><a href="<?php echo base_url('ManageUsers/RemoveUser/'.$row->user_id) ?>"><button type='submit' class='btn btn-danger' onclick="return checkDelete()">Delete</button></a></th>
                    </tr>

                    <?php endforeach; ?>

                <?php else: ?>
                    <h3 style="margin-bottom: 50px;">No users in the database</h3>
                <?php endif ?>

            </table>
            <hr>
        </div>
    </div>
</div>





<?php include 'partials/footer.php'; ?>