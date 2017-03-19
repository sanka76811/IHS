<?php
include 'Common/innerheader.php';
?>



<div class="container"  style="margin-top: 100px; margin-bottom: 20px;">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
        <h3>Reset Your Password</h3>
        <hr>

        	  <div class="default-form">
                            <form method="post" id="forgotpw">
                                <div class="row clearfix">

                                <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <div class="group-inner">
                                        <p style="color:#38ab14;">Enter your username or email address, and we'll send you a link so you can reset your password.</p>
                                            <input type="email" name="emailfp" id="emailfp" value="" placeholder="Email Address *" required>
                                        </div>


                                    </div>


                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <div class="group-inner">
                                        <button type="submit" class="btn btn-success btn-lg btn-block">SEND</button>
                                        </div>
                                        </div>





                                </div>
                             </form>
              </div>




        </div>
    </div>
</div>





        <?php
include 'Common/innerfooter.php';
?>

<script type="text/javascript">
    $(document).ready(function(){

        $("#forgotpw").validate();
    });
</script>