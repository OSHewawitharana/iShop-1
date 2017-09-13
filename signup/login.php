<?php 
session_start();
include ("../db_connect.php")
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login</title>
  <!-- CORE CSS-->
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">

<style type="text/css">
html,
body {
    height: 100%;
}
html {
    display: table;
    margin: auto;
}
body {
    display: table-cell;
    vertical-align: middle;
}
.margin {
  margin: 0 !important;
}

.login
</style>
  
</head>

<body bgcolor="#F1EEEE">

<div id="containers">
<div id="header"></div>
<div id="content_area">
  <div id="login-page" class="row">
    <div class="col s12 z-depth-6 card-panel">
      <form class="login-form" action="login.php" method="POST">
        <div class="row">
          <div class="input-field col s12 center">
            <img src="../img/logo.png" alt="" class="responsive-img valign profile-image-login">
            <p class="center login-form-text">Login Form</p>
          </div>
        </div>
       <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input id="name" type="text" class="validate" name="name">
            <label for="name" class="center-align">Shop Name</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input class="validate" id="email" type="email" name="email">
            <label for="email" data-error="wrong" data-success="right" class="center-align">Email</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input id="password" type="password" name="password">
            <label for="password">Password</label>
          </div>
        </div>
        <div class="row">          
          <div class="input-field col s12 m12 l12  login-text">
              <input type="checkbox" id="remember-me" />
              <label for="remember-me">Remember me</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
          <input type="submit" name="login" value="login" class="btn" align="right">
            <!-- <a href="login.php" class="btn waves-effect waves-light col s12">Log In</a> -->
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6 m6 l6">
            <p class="margin medium-small">
            <!-- <input type="submit" name="login" value="login" class="btn" align="right"> -->
            <a href="signup.php">Sign Up Now!</a></p>
          </div>
          <div class="input-field col s6 m6 l6">
              <p class="margin right-align medium-small"><a href="forgot-password.php">Forgot password?</a></p>
          </div>          
        </div>

      </form>
    </div>
  </div>
  </div>
  <!-- ================================================
    Scripts
    ================================================ -->

  <!-- jQuery Library -->
 <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <!--materialize js-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>

  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-27820211-3', 'auto');
  ga('send', 'pageview');

</script><script src="//load.sumome.com/" data-sumo-site-id="1cf2c3d548b156a57050bff06ee37284c67d0884b086bebd8e957ca1c34e99a1" async="async"></script>


   <footer class="page-footer">
    <p style="text-align: center; color: white">© 2017 iShop Inc. </p>       
   </footer>
  </div>
  </div>

<?php
    
if(isset($_POST["login"])){

$name = $_POST['name'];
$email = mysqli_real_escape_string($conn,$_POST['email']);
$password = mysqli_real_escape_string($conn,$_POST['password']); 
//$_SESSION['name']=$name;

if ($name=='admin' && $email=='ishop@123' && $password=='ishop@2017') {
   echo("<script>location.href = '../admin.php?msg=$msg';</script>");
}else{

$sql = "SELECT `name` FROM `shopowner` WHERE email='$email' AND password='$password'";


$result_set=mysqli_query($conn, $sql);
if ($result_set) {
  if (mysqli_num_rows($result_set)==1){
    $_SESSION['name']=$name;
    $_SESSION['user']='user';
    /*header('location:../index.php');*/
    echo("<script>location.href = '../index.php?msg=$msg';</script>");
  }else{
    echo "<script type= 'text/javascript'>alert('Sorry! Your Login Name or Password is invalid');</script>";
  }
}

/*$result = mysqli_query($conn,$sql);
var_dump($result);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
var_dump($row);*/

//$active = $row['active'];
/*$count = mysqli_num_rows($result);
  
// If result matched $username and $password, table row must be 1 row
    
  if($count == 1) {
    //session_register("username");
    $_SESSION['name'] = $name;      
    header("location: index.php"); //LANDING PAGE          }
  }else {
   // echo "<br>" . "<h2>Sorry! Your Login Name or Password is invalid</h2>";
    echo "<script type= 'text/javascript'>alert('Sorry! Your Login Name or Password is invalid');</script>";
  }     */ 

$conn->close();
}
}
?>

</body>
</html>