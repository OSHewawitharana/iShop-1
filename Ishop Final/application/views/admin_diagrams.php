<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>iShop Smart Customer Assistant</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>assets/css/modern-business.css" rel="stylesheet">
    
    <script src="<?php echo base_url('assets/Chartsjs2/js/Chart.min.js');?>"></script>
	<script src="https://code.jquery.com/jquery-2.0.0.min.js" integrity="sha256-1IKHGl6UjLSIT6CXLqmKgavKBXtr0/jJlaGMEkh+dhw=" crossorigin="anonymous"></script>

  </head>
  <style>
    .pie-chart-container{
        width: 360px;
        height: 360px;
        /*float: right;*/
    }
  </style>

  <body>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="<?php echo base_url(); ?>">iShop Smart Customer Assistant</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <!--<li class="nav-item">
              <a class="nav-link" href="<?php #echo base_url('Home/register'); ?>">Register</a>
            </li>  -->
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url(); ?>">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('Home/services'); ?>">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('Home/contact'); ?>">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url(); ?>">FAQ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('Home/about'); ?>">About</a>
            </li>
            
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php echo $this->session->userdata('full_name')?>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                <a class="dropdown-item" href="<?php echo base_url('ShopOwner/admin'); ?>"> Profile</a>
                <a class="dropdown-item" href="<?php echo base_url('Login/logout'); ?>"> Logout</a>
              </div>
            </li> 

          </ul>
        </div>
      
    </nav>

		<div id='myAreaChart2'>
		  <canvas id="myAreaChart">    
		  </canvas>
		</div>
	</div>
 				<script>
                    $(document).ready(function(){
                        $.ajax({
                            type:'get',
                            contentType: 'application/json',
                            url:'<?php echo base_url()?>/adminDiagrams/viewDiagrams/',
                            success: function(data){
                                console.log('data' + data);
                                //console.log(data[0][0]);
                                var parameters = [];
                                var parameterv =[];
                                var len=data.length;
                                for(var i=0; i<len; i++ ){
                                    parameters.push(data[i].label);
                                    parameterv.push(data[i].value);
                                }
                                //console.log(parameters);
                                //console.log(parameterv);

                                //var paramValues=[];
                                var data={
                                    labels:parameters,
                                    datasets:[{
                                        label:"Amount of Quantity",
                                        data:parameterv,
                                        backgroundColor:"blue",
                                        borderColor:"lightblue",
                                        fill: false,
                                        lineTension:0,
                                        pointRadius:5
                                    }]
                                };

                                var ctx=$('#myAreaChart');
                                var chart = new Chart(ctx,{
                                    type:"line",
                                    data:data,
                                    options:{}
                                });
							}
							});
						});

				</script>
<?php include 'partials/footer.php'; ?>