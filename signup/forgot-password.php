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
  <title>Forgot Password ?</title>
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
</style>
  
</head>
<body bgcolor="#F1EEEE">

  <div id="login-page" class="row">
    <div class="col s12 z-depth-6 card-panel">
      <form class="login-form" method="POST" action="forgot-password.php">
        <div class="row">
          <div class="input-field col s12 center">
            <img src="../img/logo.png" alt="" class="responsive-img valign profile-image-login">
            <p class="center login-form-text">Enter Your Username here!</p>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input class="validate" id="email" type="email">
            <label for="email" data-error="wrong" data-success="right" class="center-align">Email</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input class="validate" id="password" type="password">
            <label for="password" data-error="wrong" data-success="right" class="center-align">New Password</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input class="validate" id="password-again" type="email">
            <label for="rpassword" data-error="wrong" data-success="right" class="center-align">Re-type password</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
           <input type="submit" name="recover" value="Recover Password" class="btn" align="right">
            <!-- <a href="forgot-password.php" class="btn waves-effect waves-light col s12">Recover my Password</a> -->
          </div>
        </div>

        <div class="row">
          <div class="input-field col s6 m6 l6">
            <p class="margin medium-small"><a href="signup.php">Register Now!</a></p>
          </div>
          <div class="input-field col s6 m6 l6">
              <p class="margin right-align medium-small"><a href="login.php">Login</a></p>
          </div>          
        </div>

      </form>
    </div>
  </div>


  <!-- jQuery Library -->
  <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js">
  </script>
  <!-- materialize js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js">
  </script>


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

<?php 
      //var_dump($_POST['signup']);
      //var_dump($conn);
  if (isset($_POST['recover'])) {

      $email = $_POST['email'];
      $password = $_POST['password'];
      $rpassword = $_POST['rpassword'];

      // var_dump($conn);
       // var_dump($name); var_dump($email); var_dump($password); var_dump($rpassword);

      if ($password == $rpassword) {
        //echo'here';
         $query1= "SELECT * FROM shopowner WHERE email='$email'";
        /*$query1="SELECT * FROM `shopowner` WHERE email=`$email`";*/
        $query_run1 = mysqli_query($conn , $query1);
        

        if (mysqli_num_rows($query_run1)>0) {
          echo "<script type= 'text/javascript'>alert('Sorry! User already exists.Try another one!');</script>";

          //echo "<div class='msg' id='errmsg'>User already exists!</div><br>";

        }else {

          $query2="INSERT INTO shopowner ( `name`, `email`, `password`) VALUES ('$name', '$email','$password')";
          $query_run2 = mysqli_query($conn , $query2);

          if ($query_run2) {
            echo "<script type= 'text/javascript'>alert('User Registered Successfully!');</script>";
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
        echo "<script type= 'text/javascript'>alert('Password mismatched!');</script>";
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