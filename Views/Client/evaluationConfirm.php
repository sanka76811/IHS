<?php
include '../Common/innerheader.php';
?>

<style>
  #sortable { list-style-type: none; margin: 0; padding: 0; width: 60%; }
  #sortable li { margin: 0 5px 5px 5px; padding: 5px;color: #777777;}

  #num  li { margin: 0 5px 5px 5px;color: white;background-color: rgba(255, 132, 50, 0.78);width: 60%;
    text-align: center;height: 39px;}
  </style>


 

<div class="container"  style="margin-top: 100px; margin-bottom: 20px;">
    <div class="row">
		<div class="col-md-12">
	        <div class="default-form">
	            <form method="post" id="evaluationform">
	                <div class="row clearfix">
	                <h3 style="text-align: center;">Evaluation Form Confirmation</h3>
	                <hr>

	                    <div class=" form-horizontal form-group col-md-12 col-sm-12 col-xs-12">
	                    
	                        <div class="group-inner">
	                            <label class="questions">1. Country preference order :</label> 
	                        </div>
	                        <div class="col-md-12" style="padding:5px 30px;">
	  							<label>No prefrence</label>
							</div>
						</div>
	                    <div class="form-group col-md-12 col-sm-12 col-xs-12 main-div">
	                        <div class="group-inner">
	                            <label class="questions">2. Why do you migrate?</label> 
	                        </div>

	                        <div class="col-md-12">
	                        	<label>Live permanently</label>
	                        </div>
	                    </div>
	                    <div class="form-group col-md-12 col-sm-12 col-xs-12 main-div">
                            <div class="group-inner">
                             	<label class="questions">3. Birthday :</label>   
                            </div>
                            <div class="col-md-12">
                            	<label>Live permanently</label>
                            </div>
                        </div>

                        <div class="form-group col-md-12 col-sm-12 col-xs-12 main-div">
	                        <div class="group-inner">
	                            <label class="questions">4. Education qualifications :</label> 
	                        </div>
	                        <div class="col-md-12">
	                        	<label>Master/MSc</label>
                            </div>
	                    </div>


	                    <div class="form-group col-md-6 col-sm-12 col-xs-12 main-div">
                            <div class="group-inner" >
                            	<label class="questions">5. Current Occupation : </label>
                            	
                            </div>
                            <div class="col-md-12">
                                <label>Master/MSc</label>
                            </div>
                        </div>




                        <div class="form-group col-md-6 col-sm-12 col-xs-12 main-div">
                            <div class="group-inner" >
                            	<label class="questions">6. Work experience : </label>
                            </div>
                            <div class="col-md-12">
                            	<label>5 years</label>
                            </div>
                            
                        </div>
                        <div class="form-group col-md-12 col-sm-12 col-xs-12 main-div">
                            <div class="group-inners" >
                            	<label class="questions">7. Is work experience related to your education?</label>
                            </div>
                            <div class="col-md-12">
                            	<label>Yes</label>
	                        </div>
                        </div>
                        <div class="form-group col-md-12 col-sm-12 col-xs-12 main-div">
	                        <div class="group-inner">
	                            <label class="questions">8. English qualifications :</label> 
	                        </div>
	                        <div class="col-md-12">
	                        	<label>IELTS</label>
	                        </div>
	                    </div>
	                    <div class="form-horizontal form-group  col-md-6 col-sm-12 col-xs-12 main-div">
                            <div class="group-inner" >
                            	<label class="questions">9. How much you can spend for your immigration work?</label>
                            </div>
                            <div class="col-md-12 ">
                            	<label>Rs 200,000</label>
                            </div>
                        </div>
                        <div class="form-group col-md-12 col-sm-12 col-xs-12 main-div">
                            <div class="group-inner" >
                            	<label class="questions">10. Do you want to know about loans or other financial options available ?</label>
                            </div>
                            <div class="col-md-12">
                            	<label>Yes</label>
	                        </div>
                        </div>
                        <div class="form-group col-md-12 col-sm-12 col-xs-12 main-div">
                            <div class="group-inner" >
                            	<label class="questions">11. Any family members who willing to help you in your chosen  countries?</label>
                            </div>

                            <div class="col-md-12">
                            	<label>NO</label>
	                        </div>

	                    </div>

                            
                       
                        <div class="form-group col-md-12 col-sm-12 col-xs-12 main-div">
	                        <div class="group-inner">
	                            <label class="questions">12. Best time for you to travel :</label> 
	                        </div>
	                        <div class="col-md-12">
	                        	<label>As soon as possible</label>
	                        </div>
	                    </div>
	                    <div class="form-group col-md-12 col-sm-12 col-xs-12 main-div">
                            <div class="group-inner" >
                            	<label class="questions">13. Do you have a disability (If you have you may be eligible for our "special peoples help" scheme) ?</label>
                            </div>
                            <div class="col-md-12">
                            	<label>No</label>
	                        </div>
                        </div>

	                    <div class="form-group col-md-12 col-sm-12 col-xs-12">

	                        <button type="submit" class="theme-btn btn-style-one">Confirm</button>
	                    </div>
	                </div>
	            </form>
	    	</div>
	    </div>
	</div>
</div>
<?php
include '../Common/innerfooter.php';
?>

<script type="text/javascript">
	var i = 1
	$(document).ready(function(){
		$( "#datepicker" ).datepicker({
            changeMonth: true,
            changeYear: true,
            maxDate: '0',
            dateFormat: 'dd-mm-yy'

   		});

		$("#degree").hide();

		$('input[type=radio][name=education]').change(function() {
			var val = this.value;
			if(val == "Degree" || val == "Master" || val == "PHD"){
				$("#degree").show();
			}
			else{
				$("#degree").hide();
			}
			
		});

		$("#relations").hide();
		$('input[type=radio][name=familyOption]').change(function() {
			var val2 = this.value;
			if(val2 == "yes"){
				$("#relations").show();
			}
			else{
				$("#relations").hide();
			}
			
		});

		


	$('#nopreference').on('click', function () {
    $(this).val(this.checked ? 1 : 0);

	    if(this.value=="1"){
	    	$("#countrypreference").hide();
	    }else{
	    	$("#countrypreference").show();
	    }
    
});





		$("input.numeric").numeric();

		
    
   
	});

	function Add() {
		var element = '<div class="group-inner col-sm-4"><select id="relationship" style="border:1px solid;border-color:#eeeeee;width: 100%;padding:17px;margin-bottom: 20px;"><option value="1">Relationship</option><option value="2">Parents</option><option value="3">Children</option><option value="4">Spouse</option><option value="5">Brothers and Sisters</option><option value="6">First cousins</option><option value="7">Friends</option><option value="8">Other</option></select></div><div class="group-inner col-sm-6" style="margin-bottom: 5px"><select id="country" style="border:1px solid;border-color:#eeeeee;width: 100%;padding:17px;margin-bottom: 20px;"><option value="1">Australia</option><option value="2">Canada</option><option value="3">New Zealand</option><option value="4">United Kingdom </option><option value="5">Other European countries</option><option value="6">Dubai and other middle east at countries</option><option value="7">Friends</option></select></div>';

		$('#relations').append(element);
		
	}
</script>