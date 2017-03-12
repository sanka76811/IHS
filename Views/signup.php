<?php
include 'Common/innerheader.php';
?>
    <div class="container"  style="margin-top: 100px; margin-bottom: 20px;">
    <div class="row">
        <div class="col-md-5">

        		<!--Default Form-->
        		<h3 style="text-align: center;">Sign Up with</h3>
                <hr>
                    	<div class="default-form">
                            <form method="post">
                                <div class="row clearfix">

                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <div class="group-inner">
                                <button type="button" class="btn btn-primary btn-lg btn-block"><i class="fa fa-facebook" style="margin-right:10px;" aria-hidden="true"></i>Facebook</button>
                                <button type="button" class="btn btn-danger btn-lg btn-block"><i class="fa fa-google" aria-hidden="true" style="margin-right:7px;margin-left: -17px;"></i>Google</button>
                                </div>
                                </div>
                                <br>


                                </div>
                                </form>
                                </div>
                                </div>


                    <div class="col-md-7">
                         <div class="default-form">
                            <form method="post">
                                <div class="row clearfix">
                                <h3 style="text-align: center;">Sign Up With E-mail</h3>
                                <hr>
        
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <div class="group-inner">
                                            <input type="text" name="fname" value="" placeholder="First Name*" required> 
                                        </div>


                                    </div>

                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <div class="group-inner">
                                            <input type="text" name="lname" value="" placeholder="Last Name *" required> 
                                        </div>
                                    </div>
        
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <div class="group-inner">
                                            <input type="email" name="email" value="" placeholder="Email Address *" required>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <div class="group-inner">
                                            <input type="password" name="p1" value="" placeholder="Password *" required>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <div class="group-inner">
                                            <input type="password" name="p2" value="" placeholder="Confirm Password *" required>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <div class="group-inner">
                                         <label style="margin-left: 22px;">Birthday</label>
                                            <input type="date" name="bday" value="" placeholder="Birthday *" required>
                                        </div>
                                    </div>


                                     <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <div class="group-inner">
                                         <label style="margin-left: 22px;">Gender</label><br>
                                         <label class="checkbox-inline rad">
                                         <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked="checked" style="width:auto;height: auto;">Male
                                         </label>
                                         <label class="checkbox-inline rad">
                                         <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" style="width:auto;height: auto;"> Female
                                         </label>
										
										
                                            
                                        </div>
                                    </div>

                                     <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <div class="group-inner">
                                            <input type="text" name="location" value="" placeholder="Location *" required>

                                        </div>
                                    </div>



        
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">

                                        <button type="submit" class="theme-btn btn-style-one">REGISTER NOW</button>
                                    </div>
                                </div>
                            </form>
                    	</div>
                    	<!--End Default Form-->


        </div>
        </div>
        </div>

        <?php
include 'Common/innerfooter.php';
?>
