<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
<!--    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">-->
    <link rel="icon" type="image/png" href="<?php base_url('')?>assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>SignUp</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!--     Fonts and icons     -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">

    <!-- CSS Files -->
    <link href="<?php  echo base_url('');?>/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo base_url('');?>/assets/css/gsdk-bootstrap-wizard.css" rel="stylesheet" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
<!--    <link href="--><?php // echo base_url('');?><!--/assets/css/demo.css" rel="stylesheet" />-->

</head>

<body>


    <!--   Big container   -->
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">

                <!--      Wizard container        -->
                <div class="wizard-container">

                    <div class="card wizard-card" data-color="blue" id="wizardProfile">
                        <?php echo form_open('profileController/insertData') ?>
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

                                        <div class="col-sm-10 col-sm-offset-1">
                                           <div class="picture-container">
                                                <div class="picture">
                                                    <img src="assets/img/default-avatar.png" class="picture-src" id="wizardPicturePreview" title=""/>
                                                    <input type="file" id="wizard-picture">
                                                </div>
                                                <h6>Choose Picture</h6>
                                               <br>
                                               <br>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Username <small>(required)</small></label>
                                                <input name="username" type="email" class="form-control" placeholder="andrew@creative-tim.com" required>
                                            </div>
                                        </div>


                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Password<small>(required)</small></label>
                                                <input name="password" type="password" class="form-control" placeholder="Password" required>
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Confirm Password  <small>(required)</small></label>
                                                <input name="cPassword" type="password" class="form-control" placeholder="Confirm Password" required>
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
                                                <input type="text" class="form-control" id="fullname" name="fullname">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="NIC">NIC:<small>(required)</small></label>
                                                <input type="text" class="form-control" id="NIC" name="NIC" >
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="contactNumber ">Contact Number<small>(required)</small></label>
                                                <input type="text" class="form-control" id="contactNumber" name="shopName">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="address ">Address<small>(required)</small> </label>
                                                <input type="textarea" class="form-control" id="address" name="address">
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
                                                <input type="text" class="form-control" id="shopName" name="shopName">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="shopCategory">Shop Category:<small>(required)</small></label>
                                                <select name="shopCategory" class="form-control">
<!--                                                    <option value="Afghanistan"> Parts & Accessories </option>-->
<!--                                                    <option value="Albania"> Handbags & Accessories - Fashion </option>-->
                                                    <option value="Books and Stationary"> Books and Stationary </option>
                                                    <option value="Cellular and Communication"> Cellular and Communication </option>
                                                    <option value="Clothing and Accessories"> Clothing and Accessories  </option>
                                                    <!--                                                    <option value="Angola"> Watches - Fashion </option>-->
                                                    <option value=" Eye Care"> Eye Care</option>
                                                    <option value="Fashion Accessories ">Fashion Accessories </option>
                                                    <option value="Food and Beverages">Food and Beverages</option>
                                                    <option value="Footware and Accessories">Footware and Accessories </option>
                                                    <option value="Games and Toys"> Games and Toys </option>


                                                    <option value="Graphics,Cameras and Studio"> Graphics,Cameras and Studio </option>
                                                    <option value="Handbags and Leather Goods"> Handbags and Leather Goods </option>
<!--                                                    <option value=" food"> food </option>-->
                                                    <option value=" Household and Consumable"> Household and Consumable </option>
                                                    <option value="Music and Videos"> Music and Videos </option>
                                                    <option value="Perfumes and Cosmetics">Perfumes and Cosmetics</option>
                                                    <option value="Supermarkets "> Supermarkets </option>
                                                    <option value="Gift item">Gift item</option>
                                                    <option value="Salon and Cosmetic"> Salon and Cosmetic</option>
                                                    <option value="Shoe Repair and Key cutting">Shoe Repair and Key cutting</option>
                                                    <option value=" Watches and Accessories "> Watches and Accessories </option>
                                                    <option value="Sports and Fitness  Equipments">Sports and Fitness  Equipments</option>


                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="contactNumber ">Telephone Number</label>
                                                <input type="text" class="form-control" id="contactNumber" name="contactNumber">
                                            </div>
                                        </div>
<!--                                        <div class="col-sm-12">-->
<!--                                            <div class="form-group">-->
<!--                                                <label for="shopNumber ">Shop Id <small>(required)</small></label>-->
<!--                                                <input type="textarea" class="form-control" id="shopNumber " name="shopNumber">-->
<!--                                            </div>-->
<!--                                        </div>-->
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="shopAddress ">Shop Address <small>(required)</small></label>
                                            <input type="textarea" class="form-control" id="shopAddress " name="shopAddress">
                                        </div>
                                    </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="description ">Description </label>
                                                <input type="textarea" class="form-control" id="description" name="description" >
                                            </div>
                                        </div>
                                </div>


                    <div class="wizard-footer height-wizard">
                        <div class="pull-right">
                            <input type='button' class='btn btn-next btn-fill btn-warning btn-wd btn-sm' name='next' value='Next' type='' style="background-color: royalblue; /* Green */
    border: none; color: white;"/>
<!--                            <input type='button' class='btn btn-next btn-fill btn-warning btn-wd btn-sm' name='next2' value='Next' style="background-color: royalblue;-->
<!--    border: none; color: white;"/>-->
                            <input type='submit' class='btn btn-finish btn-fill btn-warning btn-wd btn-sm' name='finish' value='Finish' style="background-color: royalblue; /* Green */
    border: none; color: white;" />

                        </div>

                        <div class="pull-left">
                            <input type='button' class='btn btn-previous btn-fill btn-default btn-wd btn-sm' name='previous' value='Previous' />
                        </div>
                        <div class="clearfix"></div>
                    </div>

                                <?php if ($this->session->flashdata('success')) {?>
                                    <div class="alert alert-success alert-dismissible" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <?php echo $this->session->flashdata('success'); ?>
                                    </div>
                                <?php  } ?>
                                <?php if ($this->session->flashdata('error')) {?>
                                    <div class="alert alert-success alert-dismissible" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <?php echo $this->session->flashdata('error'); ?>
                                    </div>
                                <?php  } ?>


                                <!-- validation messages for taking inputs -->
                                <?php echo validation_errors('<div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>','</div>');
                                ?>

                </div>
            </div> <!-- wizard container -->
        </div>
    </div><!-- end row -->
</div> <!--  big container -->

<!--</div>-->

</body>

<!--   Core JS Files   -->
<script src="<?php echo base_url('');?>assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
<script src="<?php echo base_url('');?>assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url('');?>assets/js/jquery.bootstrap.wizard.js" type="text/javascript"></script>

<!--  Plugin for the Wizard -->
<script src="<?php echo base_url('');?>assets/js/gsdk-bootstrap-wizard.js"></script>

<!--  More information about jquery.valida.5te here: http://jqueryvalidation.org/	 -->
<script src="<?php echo base_url('');?>assets/js/jquery.validate.min.js"></script>

</html>
