<?php if ($this->session->userdata('loggedin')) {
      include 'loggedin/header.php';
    }
    else{
       include 'partials/header.php';
    }
    
?>


<script type="text/javascript">
    var check = function() {
        if (document.getElementById('password').value ==
            document.getElementById('cpassword').value) {
            document.getElementById('message').style.color = 'green';
            document.getElementById('message').innerHTML = 'Password matching';
        } else {
            document.getElementById('message').style.color = 'red';
            document.getElementById('message').innerHTML = 'Password not matching';
        }
    }
</script>


    <!--   Big container   -->
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">

                <!--      Wizard container        -->
                <div class="wizard-container">

                    <div class="card wizard-card" data-color="blue" id="wizardProfile">
                        <?php echo form_open('Register/RegisterUser') ?>
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
                                                <label>Username </label>
                                                <input name="username" type="email" class="form-control" placeholder="andrew@creative-tim.com">
                                            </div>
                                        </div>


                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input name="password" type="password"  id="password"  class="form-control" placeholder="Password" >
                                            </div>
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Confirm Password  </label>
                                                <input name="cPassword" type="password" id="cpassword"  class="form-control" placeholder="Confirm Password" onkeyup='check();'>
                                            <span id='message'></span><br><br>
                                            </div>

                                        </div>

                                </div>

                                <div class="tab-pane" id="personalDetails">
                                        <div class="row">
                                            <h4 class="info-text">Personal Details</h4>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="fullname">Full Name:</label>
                                                <input type="text" class="form-control" id="fullname" name="fullname">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="NIC">NIC:</label>
                                                <input type="text" class="form-control" id="NIC" name="NIC">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="contactNumber ">Contact Number</label>
                                                <input type="text" class="form-control" id="contactNumber" name="contactNumber">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="address ">Address </label>
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
                                                <label for="shopName">Shop Name:</label>
                                                <input type="text" class="form-control" id="shopName" name="shopName">
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="shopCategory">Shop Category:</label>
                                                <select name="shopCategory" class="form-control">
                                                    <option value="Books and Stationary"> Books and Stationary </option>

                                                    <option value="Cellular and Communication"> Cellular and Communication </option>

                                                    <option value="Clothing and Accessories"> Clothing and Accessories  </option>

                                                    <option value=" Eye Care"> Eye Care</option>

                                                    <option value="Fashion Accessories ">Fashion Accessories </option>

                                                    <option value="Food and Beverages">Food and Beverages</option>

                                                    <option value="Footware and Accessories">Footware and Accessories </option>

                                                    <option value="Games and Toys"> Games and Toys </option>

                                                    <option value="Graphics,Cameras and Studio"> Graphics,Cameras and Studio </option>

                                                    <option value="Handbags and Leather Goods"> Handbags and Leather Goods </option>

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
                                                <label for="shopcontactNumber ">Shop Contact Number</label>
                                                <input type="text" class="form-control" id="shopcontactNumber" name="shopcontactNumber" >
                                            </div>
                                        </div>

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="shopAddress ">Shop Address </label>
                                            <input type="textarea" class="form-control" id="shopAddress " name="shopAddress">
                                        </div>
                                    </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="description ">Description </label>
                                                <input type="textarea" class="form-control" id="description" name="description">
                                            </div>
                                        </div>
                                </div>


                                <div class="wizard-footer height-wizard">
                                    <div class="pull-right">
                                        <input type='button' class='btn btn-next btn-fill btn-warning btn-wd btn-sm' name='next' value='Next' type='' style="background-color: #007bff; border: none; color: white;"/>
                                        <input type='submit' class='btn btn-finish btn-fill btn-warning btn-wd btn-sm' name='finish' value='Finish' style="background-color: #007bff; border: none; color: white;" />

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
                                <?php echo validation_errors('<div class="alert alert-danger alert-dismissible" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button>','</div>');
                                ?>

                            </div>
                    </div> 
                </div><!-- wizard container -->
            </div>
        </div><!-- end row -->
    </div> <!--  big container -->

<!--</div>-->




<?php include 'partials/footer.php'; ?>


<!--   Core JS Files   -->
<script src="<?php echo base_url('');?>assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
<script src="<?php echo base_url('');?>assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url('');?>assets/js/jquery.bootstrap.wizard.js" type="text/javascript"></script>

<!--  Plugin for the Wizard -->
<script src="<?php echo base_url('');?>assets/js/gsdk-bootstrap-wizard.js"></script>

<!--  More information about jquery.valida.5te here: http://jqueryvalidation.org/	 -->
<script src="<?php echo base_url('');?>assets/js/jquery.validate.min.js"></script>

</body>
</html>
