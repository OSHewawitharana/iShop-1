<?php 
session_start();
require ("../db_connect.php");
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sign Up!</title>
  <!-- CORE CSS-->
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
  <link href="css/modern-business.css" rel="stylesheet">

<style type="text/css">
html,body {
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

</style>
  
</head>

<body bgcolor="#F1EEEE"
<div id="containers">
<div id="header"></div>
<div id="content_area">
  <!-- Navigation -->
  <div id="login-page" class="row">
    <div class="col s12 z-depth-6 card-panel">
      <form class="login-form" action="signup.php" method="POST">
        <div class="row">
          <div class="input-field col s12 center">
            <img src="../img/logo.png" alt="" class="responsive-img valign profile-image-login">
            <p class="center login-form-text">SignUp Form</p>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input id="name" type="text" class="validate" name="name">
            <label for="name" class="center-align">Name</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-communication-email prefix"></i>
            <input id="email" type="email" class="validate" name="email">
            <label for="email" class="center-align">Email</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input id="password" type="password" class="validate" name="password">
            <label for="password">Password</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input id="password-again" type="password" name="rpassword">
            <label for="rpassword">Re-type password</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input type="submit" name="signup" value="signup" class="btn" align="right">
            <!-- <a href="signup.php" class="btn waves-effect waves-light col s12 ">Sign Up Now!</a> -->
          </div>
          <div class="input-field col s12">
            <p class="margin center medium-small sign-up">Already have an account? <a href="login.php">Login</a></p>
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

<!-- php validation -->

<?php 
      //var_dump($_POST['signup']);
      //var_dump($conn);
  if (isset($_POST['signup'])) {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $rpassword = $_POST['rpassword'];
      $_SESSION['name']=$name;
      // var_dump($conn);
       // var_dump($name); var_dump($email); var_dump($password); var_dump($rpassword);
      if ($password == $rpassword) {
        //echo'here';
         $query1= "SELECT * FROM shopowner WHERE ShopOwnerEmail='$email'";
        /*$query1="SELECT * FROM `shopowner` WHERE email=`$email`";*/
        $query_run1 = mysqli_query($conn , $query1);
        
        if (mysqli_num_rows($query_run1)>0) {
          echo "<script type= 'text/javascript'>alert('Sorry! User already exists.Try another one!');</script>";
          //echo "<div class='msg' id='errmsg'>User already exists!</div><br>";
        }else {
          $query2="INSERT INTO `shopowner`(`ShopOwnerName`, `ShopOwnerEmail`, `ShopOwnerPassword`) VALUES ('$name', '$email','$password')";
          $query_run2 = mysqli_query($conn , $query2);
          if ($query_run2) {
            /*header('location:../index.php');*/
            $_SESSION['user']='user';
            echo "<script type= 'text/javascript'>alert('User Registered Successfully!');</script>";
            echo("<script>location.href = '../index.php?msg=$msg';</script>");
            /*$_SESSION['name']=$name;*/
           /* header('location:../index.php');*/
            //echo "<div class='msg' id='sucmsg'>User registered!</div><br>";
          } else {
            
          //  var_dump($query_run1);
            //echo mysqli_connect_error();
            echo "<script type= 'text/javascript'>alert('Error in Registration!');</script>";
            //echo "<div class='msg' id='errmsg'>Error in Registration!</div><br>";
          }
        }
      }
      else {
        echo "<script type= 'text/javascript'>alert('Password mismatch!');</script>";
        //echo "Password and retyping password do not match";
      }
      //   }elseif(mysqli_num_rows($query_run1)>0) {
      //     /*echo "<div class='msg' id='errmsg'>User already exists.Try another one!</div><br>";*/
      //     echo "<script type= 'text/javascript'>alert('Sorry! User already exists.Try another one!');</script>";
      //   }
      // }else {
      //   echo mysqli_error($conn);
      //   echo "<div class='msg' id='errmsg'>Password and confirm password does not match!</div><br>";
      // }
}
  
  ?>

</body>
</html>