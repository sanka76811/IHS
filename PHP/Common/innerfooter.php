         
         

    <footer class="main-footer">
         <!--Footer Bottom-->
         <div class="footer-bottom">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="copyright">Copyright <a href="#">Radius</a> &copy; 2017</div>
                    </div>
                    <div class="col-md-8 col-sm-12 col-xs-12 text-right">
                    <div class="info-box">
                       <p style="color:white"><span class="flaticon-telephone"></span>&nbsp&nbsp&nbsp(+880)1723801729&nbsp&nbsp&nbsp  |&nbsp&nbsp&nbsp<span><i class="fa fa-envelope" aria-hidden="true"></i></span>&nbsp&nbsp radiousco@gmail.com &nbsp&nbsp&nbsp   |&nbsp&nbsp<span class="flaticon-pin"></span>&nbsp Dhanmondi Road,Dhaka 1230, BD</p>
                       </div>
                    </div>
                </div>
            </div>
         </div>

    </footer>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".main-header"><span class="icon fa fa-long-arrow-up"></span></div>

<script src="/IHS/Res/js/jquery.min.js"></script> 
<script src="/IHS/Res/js/jquery.js"></script> 
<script src="/IHS/Res/js/jquery.validate"></script>
<script src="/IHS/Res/js/bootstrap.min.js"></script>
<script src="/IHS/Res/js/revolution.min.js"></script>
<script src="/IHS/Res/js/jquery.validate.min.js"></script>
<link rel="stylesheet" type="text/css" href="/IHS/Res/css/jquery-ui.css">
<script type="text/javascript" src="/IHS/Res/js/jquery.numeric.js"></script>
<script src="/IHS/Res/js/additional-methods.min.js"></script>
<script src="/IHS/Res/js/jquery-ui.js"></script> 
<script src="/IHS/Res/js/jquery.fancybox.pack.js"></script>
<script src="/IHS/Res/js/jquery.fancybox-media.js"></script>
<script src="/IHS/Res/js/owl.js"></script>
<script src="/IHS/Res/js/wow.js"></script>

<!--Google Map APi Key-->
<script src="http://maps.google.com/maps/api/js?key="></script>
<script src="/IHS/Res/js/map-script.js"></script>
<!--End Google Map APi-->

<script src="/IHS/Res/js/script.js"></script>

</body>
</html>

<script>
        $(document).ready(function(){
           $("#signinform").validate();

            setFooter();
        });


        $(window).resize(function(){
            setFooter();    
        });

        function setFooter(){
            if($('.page-wrapper').height() < $(window).height()){
                $('.page-wrapper').addClass("full-height");
                $('.main-footer').addClass("absolute");
            }
            else{
                $('.page-wrapper').removeClass("full-height");
                $('.main-footer').removeClass("absolute");
            }
        }
</script>