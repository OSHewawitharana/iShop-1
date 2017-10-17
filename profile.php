<?php
require ("db_connect.php");
session_start();
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
<!--    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">-->
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>SignUp</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!--     Fonts and icons     -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">

    <!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/gsdk-bootstrap-wizard.css" rel="stylesheet" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="assets/css/demo.css" rel="stylesheet" />

</head>

<body>

<?php
// Set session variables
$_SESSION["email"];

?>

<div class="image-container set-full-height" style="background-image: url('assets/img/bck.jpg')">

    <!--   Big container   -->
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">

                <!--      Wizard container        -->
                <div class="wizard-container">

                    <div class="card wizard-card" data-color="blue" id="wizardProfile">
                        <form action="registration.php" method="POST">
                            <!--        You can switch ' data-color="orange" '  with one of the next bright colors: "blue", "green", "orange", "red"          -->

                            <div class="wizard-header">
                                <h3>
                                    <b> PROFILE</b> <br>
                                    <!-- <small>This information will let us know more about you.</small> -->
                                </h3>
                            </div>

                            <div class="wizard-navigation">
                                <ul>
                                    <li><a href="#signUp" data-toggle="tab">Step 1</a></li>
                                    <li><a href="#personalDetails" data-toggle="tab">Step 2</a></li>
                                    <li><a href="#shopDetails" data-toggle="tab">Step 3</a></li>
                                </ul>

                            </div>

                            <div class="tab-content">
                                <div class="tab-pane" id="signUp">
                                    <div class="row">
                                        <h4 class="info-text">Sign Up Details</h4>
                                    </div>
                                        <!-- <div class="col-sm-4 col-sm-offset-1">
                                           <div class="picture-container">
                                                <div class="picture">
                                                    <img src="assets/img/default-avatar.png" class="picture-src" id="wizardPicturePreview" title=""/>
                                                    <input type="file" id="wizard-picture">
                                                </div>
                                                <h6>Choose Picture</h6>
                                            </div>
                                        </div> -->
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>User Name <small>(required)</small></label>
                                                <input name="username" type="text" class="form-control" placeholder="UserName">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Email <small>(required)</small></label>
                                                <input name="email" type="email" class="form-control" placeholder="andrew@creative-tim.com">
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Password<small>(required)</small></label>
                                                <input name="password" type="password" class="form-control" placeholder="Password">
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Confirm Password  <small>(required)</small></label>
                                                <input name="cPassword" type="password" class="form-control" placeholder="Confirm Password">
                                            </div>
                                        </div>
                                </div>

                                <div class="tab-pane" id="personalDetails">
                                        <div class="row">
                                            <h4 class="info-text">Personal Details</h4>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="fullname">Full Name:<small>(required)</small></label>
                                                <input type="text" class="form-control" id="fullname">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="NIC">NIC:<small>(required)</small></label>
                                                <input type="text" class="form-control" id="NIC">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="contactNumber ">Contact Number<small>(required)</small></label>
                                                <input type="text" class="form-control" id="contactNumber">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="address ">Address<small>(required)</small> </label>
                                                <input type="textarea" class="form-control" id="address">
                                            </div>
                                        </div>
                            </div>

                                <div class="tab-pane" id="shopDetails">

                                        <div class="row">
                                            <h4 class="info-text">Shop Details</h4>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="shopName">Shop Name:<small>(required)</small></label>
                                                <input type="text" class="form-control" id="shopName">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="shopCategory">Shop Category:<small>(required)</small></label>
                                                <select name="category" class="form-control">
<!--                                                    <option value="Afghanistan"> Parts & Accessories </option>-->
<!--                                                    <option value="Albania"> Handbags & Accessories - Fashion </option>-->
                                                    <option value="jwellery"> Jewelry - Fashion </option>
                                                    <option value="kid&baby"> Kids & Baby (Kids' Clothing, Shoes & Accs) - Fashion </option>
                                                    <option value="Fashion&Accessories"> Fashion, Accessories & Shoes </option>
<!--                                                    <option value="Angola"> Watches - Fashion </option>-->
                                                    <option value="Camera&phot"> Camera & Photo - Electronics </option>
                                                    <option value="cellPhones&accessories"> Cell Phones & Accessories - Electronics </option>
                                                    <option value="eloctiacal&electronic">Electronics, IT & Telecommunications</option>
                                                    <option value="food&beverage">Food and Beverages </option>
                                                    <option value="supermarket"> Supermarket </option>


                                                    <option value="Algeria"> women's clothing </option>
                                                    <option value="kid&baby"> men's clothing </option>
                                                    <option value="Fashion&Accessories"> food </option>
                                                    <option value="Camera&phot"> service (salons, etc. </option>
                                                    <option value="cellPhones&accessories"> shoes </option>
                                                    <option value="eloctiacal&electronic">jewelry</option>
                                                    <option value="cellPhones&accessories"> family items </option>
                                                    <option value="eloctiacal&electronic">gift</option>


                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="contactNumber ">Contact Number</label>
                                                <input type="text" class="form-control" id="contactNumber">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="shopNumber ">Shop Number <small>(required)</small></label>
                                                <input type="textarea" class="form-control" id="shopNumber ">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="description ">Description </label>
                                                <input type="textarea" class="form-control" id="description  ">
                                            </div>
                                        </div>
                                </div>


                    <div class="wizard-footer height-wizard">
                        <div class="pull-right">
                            <input type='button' class='btn btn-next btn-fill btn-warning btn-wd btn-sm' name='next' value='Next' style="background-color: royalblue;
    border: none; color: white;"/>
<!--                            <input type='button' class='btn btn-next btn-fill btn-warning btn-wd btn-sm' name='next2' value='Next' style="background-color: royalblue;-->
<!--    border: none; color: white;"/>-->
                            <input type='button' class='btn btn-finish btn-fill btn-warning btn-wd btn-sm' name='finish' value='Finish' style="background-color: royalblue; /* Green */
    border: none; color: white;" />

                        </div>

                        <div class="pull-left">
                            <input type='button' class='btn btn-previous btn-fill btn-default btn-wd btn-sm' name='previous' value='Previous' />
                        </div>
                        <div class="clearfix"></div>
                    </div>

                    </form>

                </div>
            </div> <!-- wizard container -->
        </div>
    </div><!-- end row -->
</div> <!--  big container -->

</div>

</body>

<!--   Core JS Files   -->
<script src="assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/jquery.bootstrap.wizard.js" type="text/javascript"></script>

<!--  Plugin for the Wizard -->
<script src="assets/js/gsdk-bootstrap-wizard.js"></script>

<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
<script src="assets/js/jquery.validate.min.js"></script>

</html>
