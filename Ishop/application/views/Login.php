    <?php if ($this->session->userdata('loggedin')) {
      include 'loggedin/header.php';
    }
    else{
       include 'partials/header.php';
    }

    ?>


<div class="container" style="min-height: 402px;">

	<h1 class="mt-4 mb-3">Login</h1>

	<?php if ($this->session->flashdata('errmsg')) {
		echo "<h3>".$this->session->flashdata('errmsg')."</h3>";
	}
	?>

	<hr>

	<?php echo validation_errors(); ?>
	<?php echo form_open('Login/LoginUser'); ?>

	<div class="col-lg-6">
	  <div class="form-group">
	    <label for="exampleInputEmail1">Email address</label>
	    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email">
	  </div>

	  <div class="form-group">
	    <label for="exampleInputPassword1">Password</label>
	    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
	  </div>

	  <button type="submit" class="btn btn-success">Submit</button>

	<?php echo form_close(); ?>
</div>
</div>

<?php include 'partials/footer.php'; ?>