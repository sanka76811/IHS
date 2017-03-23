<?php
include 'Common/innerheader.php';
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
	                <h3 style="text-align: center;">Evaluation Form</h3>
	                <hr>

	                    <div class=" form-horizontal form-group col-md-12 col-sm-12 col-xs-12">
	                    
	                        <div class="group-inner">
	                            <label class="questions">1. Country preference order :</label> 
	                        </div>
	                        <div class="col-md-12" style="padding:5px 30px;">
		                        <div class="checkb">
	  								<label><input type="checkbox" value="no" name="nopreference" id="nopreference" onchange="myprference(this);">No prefrence</label>
								</div>
							</div>
						</div>

						<div class=" form-horizontal form-group col-md-12 col-sm-12 col-xs-12" id="countrypreference">

	                        <div class="col-md-12" style="margin-bottom: -12px;">
	                         <label class="col-sm-4 preference">Australia</label>
		                        <div class="group-inner col-md-2">	                                
		                        		<select id="country" style="border:1px solid;border-color:#eeeeee;width: 100%;padding:7px;margin-bottom: 20px;width:100% ">
		                                    <option value="">Select Order</option>
		                                    <option value="1">1</option>
		                                    <option value="2">2</option>
		                                    <option value="3">3 </option>
		                                    <option value="4">4</option>
		                                    <option value="5">5</option>
		                                    <option value="6">6</option>
		                                    <option value="5">7</option>
		                                    <option value="6">8</option>
		                                
		                            	</select>
		                        </div>
		                    </div>

		                     <div class="col-md-12" style="margin-bottom: -12px;">
		                        <label class="col-sm-4 preference">Canada</label>
		                        <div class="group-inner col-md-2">	                                
		                        		<select id="country" style="border:1px solid;border-color:#eeeeee;width: 100%;padding:7px;margin-bottom: 20px;">
		                                    <option value="">Select Order</option>
		                                    <option value="1">1</option>
		                                    <option value="2">2</option>
		                                    <option value="3">3 </option>
		                                    <option value="4">4</option>
		                                    <option value="5">5</option>
		                                    <option value="6">6</option>
		                                    <option value="5">7</option>
		                                    <option value="6">8</option>
		                                
		                            	</select>
		                        </div>
		                     </div>

		                     <div class="col-md-12" style="margin-bottom: -12px;">
		                        <label class="col-sm-4 preference">New Zealand</label>
		                        <div class="group-inner col-md-2">	                                
		                        		<select id="country" style="border:1px solid;border-color:#eeeeee;width: 100%;padding:7px;margin-bottom: 20px;">
		                                    <option value="">Select Order</option>
		                                    <option value="1">1</option>
		                                    <option value="2">2</option>
		                                    <option value="3">3 </option>
		                                    <option value="4">4</option>
		                                    <option value="5">5</option>
		                                    <option value="6">6</option>
		                                    <option value="5">7</option>
		                                    <option value="6">8</option>
		                                
		                            	</select>
		                        </div>
		                     </div>

		                     <div class="col-md-12" style="margin-bottom: -12px;">
		                        <label class="col-sm-4 preference">United Kingdom</label>
		                        <div class="group-inner col-md-2">	                                
		                        		<select id="country" style="border:1px solid;border-color:#eeeeee;width: 100%;padding:7px;margin-bottom: 20px;">
		                                    <option value="">Select Order</option>
		                                    <option value="1">1</option>
		                                    <option value="2">2</option>
		                                    <option value="3">3 </option>
		                                    <option value="4">4</option>
		                                    <option value="5">5</option>
		                                    <option value="6">6</option>
		                                    <option value="5">7</option>
		                                    <option value="6">8</option>
		                                
		                            	</select>
		                        </div>
		                     </div>

		                     <div class="col-md-12" style="margin-bottom: -12px;">
		                        <label class="col-sm-4 preference">USA</label>
		                        <div class="group-inner col-md-2">	                                
		                        		<select id="country" style="border:1px solid;border-color:#eeeeee;width: 100%;padding:7px;margin-bottom: 20px;">
		                                    <option value="">Select Order</option>
		                                    <option value="1">1</option>
		                                    <option value="2">2</option>
		                                    <option value="3">3 </option>
		                                    <option value="4">4</option>
		                                    <option value="5">5</option>
		                                    <option value="6">6</option>
		                                    <option value="5">7</option>
		                                    <option value="6">8</option>
		                                
		                            	</select>
		                        </div>
		                     </div>


		                     <div class="col-md-12" style="margin-bottom: -12px;">
		                        <label class="col-sm-4 preference">Other European countries</label>
		                        <div class="group-inner col-md-2">	                                
		                        		<select id="country" style="border:1px solid;border-color:#eeeeee;width: 100%;padding:7px;margin-bottom: 20px;">
		                                    <option value="">Select Order</option>
		                                    <option value="1">1</option>
		                                    <option value="2">2</option>
		                                    <option value="3">3 </option>
		                                    <option value="4">4</option>
		                                    <option value="5">5</option>
		                                    <option value="6">6</option>
		                                    <option value="5">7</option>
		                                    <option value="6">8</option>
		                                
		                            	</select>
		                        </div>
		                     </div>

		                     

		                     <div class="col-md-12" style="margin-bottom: -12px;">
		                        <label class="col-sm-4 preference">Dubai and other middle east at countries</label>
		                        <div class="group-inner col-md-2">	                                
		                        		<select id="country" style="border:1px solid;border-color:#eeeeee;width: 100%;padding:7px;margin-bottom: 20px;">
		                                    <option value="">Select Order</option>
		                                    <option value="1">1</option>
		                                    <option value="2">2</option>
		                                    <option value="3">3 </option>
		                                    <option value="4">4</option>
		                                    <option value="5">5</option>
		                                    <option value="6">6</option>
		                                    <option value="5">7</option>
		                                    <option value="6">8</option>
		                                
		                            	</select>
		                        </div>
		                     </div>

		                     <div class="col-md-12" style="margin-bottom: -12px;">
		                        <label class="col-sm-4 preference">Other</label>
		                        <div class="group-inner col-md-2">	                                
		                        		<select id="country" style="border:1px solid;border-color:#eeeeee;width: 100%;padding:7px;margin-bottom: 20px;">
		                                    <option value="">Select Order</option>
		                                    <option value="1">1</option>
		                                    <option value="2">2</option>
		                                    <option value="3">3 </option>
		                                    <option value="4">4</option>
		                                    <option value="5">5</option>
		                                    <option value="6">6</option>
		                                    <option value="5">7</option>
		                                    <option value="6">8</option>
		                                
		                            	</select>
		                        </div>
		                     </div>



	                    </div>

	                    <div class="form-group col-md-12 col-sm-12 col-xs-12 main-div">
	                        <div class="group-inner">
	                            <label class="questions">2. Why do you migrate?</label> 
	                        </div>

	                        <div class="col-md-12">
	                        
	                        	<div class="group-inner col-md-3">
	                        		<label class="checkbox-inline" style="padding: 0">
	             
                                         <input type="radio" name="reason" id="reason1" value="option1" style="width:auto;height: auto;">Live permanently
                                    </label>


	                        	</div>
	                        	<div class="group-inner col-md-3">
	                        		<label class="checkbox-inline" style="padding: 0">
                                         <input type="radio" name="reason" id="reason2" value="option1" style="width:auto;height: auto;">Finding a better job 
                                    </label>
	                        	</div>
	                        	<div class="group-inner col-md-3">
	                        		<label class="checkbox-inline" style="padding: 0">
                                         <input type="radio" name="reason" id="reason3" value="option1" style="width:auto;height: auto;">Further study 
                                    </label>
	                        	</div>
	                        	<div class="group-inner col-md-3">
	                        		<label class="checkbox-inline" style="padding: 0">
                                         <input type="radio" name="reason" id="reason4" value="option1" style="width:auto;height: auto;">Medical treatment 
                                    </label>
	                        	</div>
	                        	<div class="group-inner col-md-3">
	                        		<label class="checkbox-inline" style="padding: 0">
                                         <input type="radio" name="reason" id="reason6" value="option1" style="width:auto;height: auto;">Children's education 
                                    </label>
	                        	</div>
	                        	<div class="group-inner col-md-3">
	                        		<label class="checkbox-inline" style="padding: 0">
                                         <input type="radio" name="reason" id="reason7" value="option1" style="width:auto;height: auto;">Joint family
                                    </label>
	                        	</div>
	                        	<div class="group-inner col-md-3">
	                        		<label class="checkbox-inline" style="padding: 0">
                                         <input type="radio" name="reason" id="reason8" value="option1" style="width:auto;height: auto;">Visitor , Tourist  
                                    </label>
	                        	</div>
	                        
	                        </div>
	                    </div>
	                    <div class="form-group col-md-12 col-sm-12 col-xs-12 main-div">
                            <div class="group-inner">
                             	<label class="questions">3. Birthday :</label>   
                            </div>
                            <div class="group-inner col-sm-4">
                            	<input type="text" class="line-gap" name="datepicker"  id="datepicker" value="" placeholder="Birthday *" readonly required>
                            </div>
                        </div>

                        <div class="form-group col-md-12 col-sm-12 col-xs-12 main-div">
	                        <div class="group-inner">
	                            <label class="questions">4. Education qualifications :</label> 
	                        </div>
	                        <div class="col-md-6">
	                        	<div class="group-inner col-md-6">
	                        		<label class="checkbox-inline" style="padding: 0">
                                         <input type="radio" name="education" id="education1" value="10yrs" style="width:auto;height: auto;">10 years school or O/L
                                    </label>
	                        	</div>
	                        	<div class="group-inner col-md-6">
	                        		<label class="checkbox-inline" style="padding: 0">
                                         <input type="radio" name="education" id="education2" value="12yrs" style="width:auto;height: auto;">12 years school or A/L 
                                    </label>
	                        	</div>
	                        	<div class="group-inner col-md-6">
	                        		<label class="checkbox-inline" style="padding: 0">
                                         <input type="radio" name="education" id="education3" value="14yrs" style="width:auto;height: auto;">14 years education or Diploma 
                                    </label>
	                        	</div>

	                        	
	                        	<div class="group-inner col-md-6">
	                        		<label class="checkbox-inline" style="padding: 0">
                                         <input type="radio" name="education" id="education4" value="Degree" style="width:auto;height: auto;">Degree
                                    </label>
	                        	</div>
	                        	<div class="group-inner col-md-6">
	                        		<label class="checkbox-inline rad" style="padding: 0">
                                         <input type="radio" name="education" id="education5" value="Master" style="width:auto;height: auto;">Master/MSc 
                                    </label>
	                        	</div>
	                        	<div class="group-inner col-md-6">
	                        		<label class="checkbox-inline" style="padding: 0">
                                         <input type="radio" name="education" id="education6" value="PHD" style="width:auto;height: auto;">PHD
                                    </label>
	                        	</div>
	                        	<div class="group-inner col-md-6">
	                        		<label class="checkbox-inline" style="padding: 0">
                                         <input type="radio" name="education" id="education7" value="Other" style="width:auto;height: auto;">Other  
                                    </label>
	                        	</div>
	                        </div>


	                        <div class="group-inner col-md-6" id="degree">
		                        <div class="group-inner" >
	                            	<label class="col-xs-6 questions">No of years after degree : </label>
	                            </div>
                            	<div class="col-xs-12">
                                	<input class="numeric" type="text" id="years" value="" placeholder="Years" required>
                                </div>
                            </div>
	                    </div>


	                    <div class="form-group col-md-6 col-sm-12 col-xs-12 main-div">
                            <div class="group-inner" >
                            	<label class="questions">5. Current Occupation : </label>
                            	
                            </div>
                            <div class="group-inner  col-md-12">
                                <input type="text"  class="line-gap" value="" placeholder="Occupation *" required>
                            </div>
                        </div>




                        <div class="form-group col-md-6 col-sm-12 col-xs-12 main-div">
                            <div class="group-inner" >
                            	<label class="questions">6. Work experience : </label>
                            </div>
                            <div class="group-inner col-md-12">
                                <input class="numeric line-gap" type="text" name="workex" id="workex" value="" placeholder="No of Years*" required>
                            </div>
                            
                        </div>
                        <div class="form-group col-md-12 col-sm-12 col-xs-12 main-div">
                            <div class="group-inners" >
                            	<label class="questions">7. Is work experience related to your education?</label>
                            </div>
                            <div class="col-md-12">
	                        	<div class="group-inner col-sm-4">
	                        		<label class="checkbox-inline" style="padding: 0">
                                         <input type="radio" name="experience" id="experience1" value="option1" style="width:auto;height: auto;">Yes
                                    </label>
	                        	</div>
	                        	<div class="group-inner col-sm-4">
	                        		<label class="checkbox-inline" style="padding: 0">
                                         <input type="radio" name="experience" id="experience2" value="option1" style="width:auto;height: auto;">No 
                                    </label>
	                        	</div>
	                        	<div class="group-inner col-sm-4">
	                        		<label class="checkbox-inline" style="padding: 0">
                                         <input type="radio" name="experience" id="experience3" value="option1" style="width:auto;height: auto;">May be 
                                    </label>
	                        	</div>
	                        </div>
                        </div>
                        <div class="form-group col-md-12 col-sm-12 col-xs-12 main-div">
	                        <div class="group-inner">
	                            <label class="questions">8. English qualifications :</label> 
	                        </div>
	                        <div class="col-md-12">
	                        	<div class="group-inner col-md-4">
	                        		<label class="checkbox-inline" style="padding: 0">
                                         <input type="radio" name="engqualification" id="engqualification1" value="option1" style="width:auto;height: auto;">Fair but no IELTS or Toefel
                                    </label>
	                        	</div>
	                        	<div class="group-inner col-md-4">
	                        		<label class="checkbox-inline" style="padding: 0">
                                         <input type="radio" name="engqualification" id="engqualification2" value="option1" style="width:auto;height: auto;">Good but no IELTS or Toefel 
                                    </label>
	                        	</div>
	                        	<div class="group-inner col-md-4">
	                        		<label class="checkbox-inline" style="padding: 0">
                                         <input type="radio" name="engqualification" id="engqualification3" value="option1" style="width:auto;height: auto;">Excellent  But no IELTS or Toefel  
                                    </label>
	                        	</div>
	                        	<div class="group-inner col-md-4">
	                        		<label class="checkbox-inline" style="padding: 0">
                                         <input type="radio" name="engqualification" id="engqualification4" value="option1" style="width:auto;height: auto;">IELTS 
                                    </label>
	                        	</div>
	                        	<div class="group-inner col-md-4">
	                        		<label class="checkbox-inline" style="padding: 0">
                                         <input type="radio" name="engqualification" id="engqualification5" value="option1" style="width:auto;height: auto;">Toefel  
                                    </label>
	                        	</div>
	                        </div>
	                    </div>
	                    <div class="form-horizontal form-group  col-md-6 col-sm-12 col-xs-12 main-div">
                            <div class="group-inner" >
                            	<label class="questions">9. How much you can spend for your immigration work?</label>
                            </div>
                            <div class="group-inner col-md-12 ">
                                <input class="numeric line-gap" type="text"  value="" placeholder="Rs *" required>
                            </div>
                        </div>
                        <div class="form-group col-md-12 col-sm-12 col-xs-12 main-div">
                            <div class="group-inner" >
                            	<label class="questions">10. Do you want to know about loans or other financial options available ?</label>
                            </div>
                            <div class="col-md-12">
	                        	<div class="group-inner col-sm-4">
	                        		<label class="checkbox-inline" style="padding: 0">
                                         <input type="radio" name="loanOption" id="loanOption1" value="yes" style="width:auto;height: auto;">Yes
                                    </label>
	                        	</div>
	                        	<div class="group-inner col-sm-4">
	                        		<label class="checkbox-inline" style="padding: 0">
                                         <input type="radio" name="loanOption" id="loanOption2" value="no" style="width:auto;height: auto;">No 
                                    </label>
	                        	</div>
	                        </div>
                        </div>
                        <div class="form-group col-md-12 col-sm-12 col-xs-12 main-div">
                            <div class="group-inner" >
                            	<label class="questions">11. Any family members who willing to help you in your chosen  countries?</label>
                            </div>

                            <div class="col-md-12">
	                        	<div class="group-inner col-sm-4">
	                        		<label class="checkbox-inline" style="padding: 0">
                                         <input type="radio" name="familyOption" id="familyOption1" value="yes" style="width:auto;height: auto;" required>Yes
                                    </label>
	                        	</div>
	                        	<div class="group-inner col-sm-4">
	                        		<label class="checkbox-inline" style="padding: 0">
                                         <input type="radio" name="familyOption" id="familyOption2" value="no" style="width:auto;height: auto;" required>No 
                                    </label>
	                        	</div>
	                        </div>

	                       </div>

                            <div class="group-inner col-md-12" id="relations">
	                            <div class="group-inner col-sm-4" style="margin-bottom: 5px">
	                                <select id="relationship" style="border:1px solid;border-color:#eeeeee;width: 100%;padding:17px;margin-bottom: 20px;">
	                                    <option value="1">Relationship</option>
	                                    <option value="2">Parents</option>
	                                    <option value="3">Children</option>
	                                    <option value="4">Spouse</option>
	                                    <option value="5">Brothers and Sisters</option>
	                                    <option value="6">First cousins</option>
	                                    <option value="7">Friends</option>
	                                    <option value="8">Other</option>
	                            	</select>
	                            </div>
	                            <div class="group-inner col-sm-6" style="margin-bottom: 5px">
	                                <select id="country" style="border:1px solid;border-color:#eeeeee;width: 100%;padding:17px;margin-bottom: 20px;">
	                                    <option value="1">Australia</option>
	                                    <option value="2">Canada</option>
	                                    <option value="3">New Zealand</option>
	                                    <option value="4">United Kingdom </option>
	                                    <option value="5">Other European countries</option>
	                                    <option value="6">Dubai and other middle east at countries</option>
	                                    <option value="7">Friends</option>
	                                
	                            	</select>
	                            </div>
	                            <a class="btn btn-warning" onclick="Add();">Add more +</a>

	                        </div>

                            
                       
                        <div class="form-group col-md-12 col-sm-12 col-xs-12 main-div">
	                        <div class="group-inner">
	                            <label class="questions">12. Best time for you to travel :</label> 
	                        </div>
	                        <div class="col-md-12">
	                        	<div class="group-inner col-md-4">
	                        		<label class="checkbox-inline" style="padding: 0">
                                         <input type="radio" name="timetotravel" id="timetotravel1" value="option1" style="width:auto;height: auto;">As soon as possible
                                    </label>
	                        	</div>
	                        	<div class="group-inner col-md-4">
	                        		<label class="checkbox-inline" style="padding: 0">
                                         <input type="radio" name="timetotravel" id="timetotravel2" value="option1" style="width:auto;height: auto;">In 6 month  
                                    </label>
	                        	</div>
	                        	<div class="group-inner col-md-4">
	                        		<label class="checkbox-inline" style="padding: 0">
                                         <input type="radio" name="timetotravel" id="timetotravel3" value="option1" style="width:auto;height: auto;">In 1 year  
                                    </label>
	                        	</div>
	                        	<div class="group-inner col-md-4">
	                        		<label class="checkbox-inline" style="padding: 0">
                                         <input type="radio" name="timetotravel" id="timetotravel4" value="option1" style="width:auto;height: auto;">Within 2 years  
                                    </label>
	                        	</div>
	                        	<div class="group-inner col-md-4">
	                        		<label class="checkbox-inline" style="padding: 0">
                                         <input type="radio" name="timetotravel" id="timetotravel5" value="option1" style="width:auto;height: auto;">Let me know when can I go   
                                    </label>
	                        	</div>
	                        </div>
	                    </div>
	                    <div class="form-group col-md-12 col-sm-12 col-xs-12 main-div">
                            <div class="group-inner" >
                            	<label class="questions">13. Do you have a disability (If you have you may be eligible for our "special peoples help" scheme) ?</label>
                            </div>
                            <div class="col-md-12">
	                        	<div class="group-inner col-sm-4">
	                        		<label class="checkbox-inline" style="padding: 0">
                                         <input type="radio" name="disabilityOptions" id="disabilityOption1" value="yes" style="width:auto;height: auto;">Yes
                                    </label>
	                        	</div>
	                        	<div class="group-inner col-sm-4">
	                        		<label class="checkbox-inline" style="padding: 0">
                                         <input type="radio" name="disabilityOptions" id="disabilityOption2" value="no" style="width:auto;height: auto;">No 
                                    </label>
	                        	</div>
	                        </div>
                        </div>

	                    <div class="form-group col-md-12 col-sm-12 col-xs-12">

	                        <button type="submit" class="theme-btn btn-style-one">SUBMIT</button>
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