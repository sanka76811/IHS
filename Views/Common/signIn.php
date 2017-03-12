<!DOCTYPE html>
<html>
<head>
    <title>SignIn</title>
    <link href="/IHS/Res/css/bootstrap.css" rel="stylesheet">
    <link href="/IHS/Res/css/style.css" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link href="/IHS/Res/css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/IHS/Res/css/st.css">
    <script type="text/javascript" src="/IHS/Res/js/jquery.min.js"></script>
    <script type="text/javascript" src="/IHS/Res/js/bootstrap.min.js"></script>
</head>






<body class="back">

        <!-- Main Header / Header Style One-->
    <header class="main-header header-style-one">
        
        <!--Header Top-->
        <div class="header-top">
            <div class="auto-container">
                <div class="clearfix">
                    <!--Top Left-->
                    <div class="top-left">
                        <div class="social-icon clearfix">
                            <a href="#"><span class="fa fa-facebook"></span></a>
                            <a href="#"><span class="fa fa-twitter"></span></a>
                            <a href="#"><span class="fa fa-google-plus"></span></a>
                            <a href="#"><span class="fa fa-linkedin"></span></a>
                        </div>
                        <div class="text">Have any question? <a href="contact.html">Call Us Now!!</a></div>
                    </div>
                    
                    <!--Top Right-->
                    <div class="top-right">
                        <ul class="top-nav clearfix">
                            <li><a href="#" role="button" class="btn popovers" data-toggle="popover" data-trigger="focus" data-content="<p><a href='Common/signin.php'>Sign In</a></p><p><a href='Common/signup.php'>Sign Up</a></p>" data-placement="bottom" >Start Now!</a></li>
                            <li><a href="#" style="margin-top: 7px;">Privacy</a></li>
                            <li><a href="#" style="margin-top: 7px;">Support</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <!--Header-Upper-->
        <div class="row">
            <div class="col-md-6 col-md-offset-5" style="margin-top:50px;" >
                <div class="clearfix">
                    
                    <div class="logo-outer">
                        <div class="logo"><a href="index.html"><img src="images/logo.png" alt="Radius" title="Radius"></a></div>
                    </div>
                    
                    <div class="upper-right clearfix">
                     
                        
                    </div>
                    
                </div>
            </div>
        </div>
        
    </header>
    <!--End Main Header -->
    


<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
<!--Default Form-->
                <h2 style="color:white;">Sign In</h2>
                <hr>
         <div class="default-form">
                            <form method="post">
                                <div class="row clearfix">
        
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <div class="group-inner">
                                            <input type="text" name="username" value="" placeholder="Username *" required style="
    background-color: rgba(255, 255, 255, 0.7); border: none;">
                                        </div>
                                    </div>
        
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <div class="group-inner">
                                            <input type="email" name="email" value="" placeholder="Email Address *" required style="
    background-color: rgba(255, 255, 255, 0.7);border: none;">
                                        </div>
                                    </div>
        
                                  
        
                                   
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <button type="submit" class="theme-btn btn-style-one">SIGN IN</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!--End Default Form-->
            




        </div>
    </div>
</div>


<script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover({html:true}); 
});
</script>
                       

</body>
</html>





