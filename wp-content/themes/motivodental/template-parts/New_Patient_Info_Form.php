<?php
/*
Template Name: New Patient Info Form
*/
get_header();
//error_reporting(1);
?>
<div class="form-wrapper">
<div class="container">	
<div class="row row-bg-design">
	<form action="http://webdevelopers1.com/motivodental/view-first-form/" method="POST" name="myform" id="app_form" class="form-bg-design sigpad" enctype="multipart/form-data">
		<div class="row row_mgn">    
			<div class=" col-sm-8 col-xs-12 text">
				<label>NAME:</label><input type="text" maxlength="56" id="pname" name="pname" class="" value="" />
			</div>
			<div class=" col-sm-4 col-xs-12 text">
				<label>AGE:</label><input type="text" maxlength="24" id="age" name="age" class="" value="" />
			</div>						
		</div>
		<div class="row row_mgn">    
			<div class=" col-sm-6 col-xs-12 text">
				<label>DATE OF BIRTH:</label><input type="text" maxlength="35" id="datepicker" name="dob" class="" value="" />
			</div>
			<div class="col-sm-6 col-md-6 col-xs-12 text textH">
				<div class="row">
					<div class="col-sm-2 col-xs-3"><label>Sex:</label></div>
					<div class="col-sm-3 col-xs-4"><input type="radio" name="agree" id="gender" value="male" /> <label for="y4a1">Male</label></div>
					<div class="col-sm-7 col-xs-5"><input type="radio" name="agree" id="gender" value="female" /> <label for="y4a2">Female</label></div>
				</div>   
            </div>					
		</div>
		<div class="row row_mgn">    
			<div class=" col-sm-6 col-xs-12 text">
				<label>ADDRESS:</label><input type="text" maxlength="38" id="address" name="address" class="" value="" />
			</div>
			<div class=" col-sm-6 col-xs-12 text">
				<label class="">CITY:</label><input type="text" maxlength="40" id="city" name="city" class="" value="" />
			</div>						
		</div>
		<div class="row row_mgn">    
			<div class=" col-sm-6 col-xs-12 text">
				<label>POSTAL CODE:</label><input type="text" maxlength="35" id="postal" name="postal" class="" value="" />
			</div>
			<div class=" col-sm-6 col-xs-12 text">
				<label class="">HOME#</label><input type="text" maxlength="39" id="home" name="home" class="" value="" />
			</div>						
		</div>
		<div class="row row_mgn">    
			<div class=" col-sm-6 col-xs-12 text">
				<label>WORK#</label><input type="text" maxlength="39" id="work" name="work" class="" value="" />
			</div>
			<div class=" col-sm-6 col-xs-12 text">
				<label class="">CELL#</label><input type="text" maxlength="12" id="cell" name="cell" class="" value="" />
			</div>						
		</div>
		<div class="row row_mgn">    
			<div class=" col-sm-12 col-xs-12 text">
				<label>HOW DID YOU HEAR ABOUT US?</label><input type="text" maxlength="74" id="about" name="about" class="" value="" />
			</div>					
		</div>
		<div class="row row_mgn">    
			<div class=" col-sm-12 col-xs-12 text">
				<label>EMAIL:</label><input type="text" maxlength="86" id="email" name="email" class="" value="" />
			</div>					
		</div>
		<div class="row row_mgn">    
			<div class=" col-sm-6 col-xs-12 text">
				<div class="row row_mgn">    
					<div class=" col-sm-12 text">
						<h2 class="insurance-hdg">INSURANCE #1</h2>
					</div>
				</div>
				<div class="row row_mgn">
					<div class=" col-sm-12 col-xs-12 text">
						<label>POLICY HOLDER:</label><input type="text" maxlength="33" id="pholder" name="pholder" class="" value="" />
					</div>
				</div>
				<div class="row row_mgn">
					<div class=" col-sm-12 col-xs-12 text">
						<label>DOB:</label><input type="text" maxlength="39" id="dbo" name="dbo" class="" value="" />
					</div>
				</div>
				<div class="row row_mgn">
					<div class=" col-sm-12 col-xs-12 text">
						<label>EMPLOYER:</label><input type="text" maxlength="35" id="employer" name="employer" class="" value="" />
					</div>
				</div>
				<div class="row row_mgn">
					<div class=" col-sm-12 col-xs-12 text">
						<label>INS. COMPANY:</label><input type="text" maxlength="33" id="icompany" name="icompany" class="" value="" />
					</div>
				</div>
				<div class="row row_mgn">
					<div class=" col-sm-12 col-xs-12 text">
						<label>GROUP/PLAN#</label><input type="text" maxlength="35" id="gplan" name="gplan" class="" value="" />
					</div>
				</div>
				<div class="row row_mgn">
					<div class=" col-sm-12 col-xs-12 text">
						<label>ID/CERT.#</label><input type="text" maxlength="37" id="idcert" name="idcert" class="" value="" />
					</div>
				</div>
			</div>					
			<div class=" col-sm-6 text">
				<div class="row row_mgn">    
					<div class=" col-sm-12 col-xs-12 text">
						<h2 class="insurance-hdg">INSURANCE #2</h2>
					</div>
				</div>
				<div class="row row_mgn">
					<div class=" col-sm-12 col-xs-12 text">
						<label>POLICY HOLDER:</label><input type="text" maxlength="33" id="holder" name="holder" class="" value="" />
					</div>
				</div>
				<div class="row row_mgn">
					<div class=" col-sm-12 col-xs-12 text">
						<label>DOB:</label><input type="text" maxlength="39" id="birthd" name="birthd" class="" value="" />
					</div>
				</div>
				<div class="row row_mgn">
					<div class=" col-sm-12 col-xs-12 text">
						<label>EMPLOYER:</label><input type="text" maxlength="35" id="emp" name="emp" class="" value="" />
					</div>
				</div>
				<div class="row row_mgn">
					<div class=" col-sm-12 col-xs-12 text">
						<label>INS. COMPANY:</label><input type="text" maxlength="33" id="compi" name="compi" class="" value="" />
					</div>
				</div>
				<div class="row row_mgn">
					<div class=" col-sm-12 col-xs-12 text">
						<label>GROUP/PLAN#</label><input type="text" maxlength="35" id="gp" name="gp" class="" value="" />
					</div>
				</div>
				<div class="row row_mgn">
					<div class=" col-sm-12 col-xs-12 text">
						<label>ID/CERT.#</label><input type="text" maxlength="37" id="ici" name="ici" class="" value="" />
					</div>
				</div>
			</div>
			</div>
		<div class="row row_mgn">
					<div class=" col-sm-12 col-xs-12 text">
						<p>I understand that in order for us to provide direct billing to our patients, we will require our patients to provide us with a credit card on file. If we cannot calculate your balance at your dental visit, we will charge the balance to the credit card on file upon receiving payment from your insurance company</p>
						<p>If you do not wish to leave your credit card on file with us, you will be required to leave a 25% deposit following your appointment with us. This alternative may result in a small balance or credit on your account once insurance payment is received. It is important for you to understand that there may be a difference between our fees and what your insurance company will pay towards your treatment, and that you are responsible for any difference in fees.</p>
						<p>Also I give consent to perform the dental and oral procedures deemed necessary for any treatment, including the use of local anesthetic and that I assume responsibility for the fees associated with those procedures.</p>
						<p>If you are in understanding with each statement, please indicate by signing below.</p>
					</div>
				</div>
				<div class="row row_mgn"> 

                <div class="col-md-2 col-sm-3 col-xs-12 text">
                    <label>Patient Signature:</label>                    
                </div> 
                  <div class="col-md-7  col-sm-9 col-xs-12 text ">                   
                    <div class="signature" style="margin-top: 10px;">
                      <input type="hidden" name="sign" id="get_imgid" value="" >
				        <script type="text/javascript">
				                  new sform.Signature({
				                    id: "signature1_canvas",
				                    form_name: "myform",
				                    field_name: "signature1_canvas",
				                    caption: "Signature",
				                    w: 420,
				                    h: 90
				                  });
				        </script>
                    </div>
                  </div>
                  <div class="col-md-3 col-sm-12 col-xs-12 text  ">
                      <label>Date:</label><input type="text" maxlength="12" id="dates" name="dates" class="datepicker" value="" />
                  </div>
                </div>  
				<div class="row row_mgn">
					<div class=" col-xs-12 text text-center">					
					</div>
				</div>
		<div class="row row_mgn">
		  <div class="col-sm-12 col-xs-12  text-center custom-arc">
		  	<button  class="btn btn-primary" type="submit" onclick="return submit_form(event)"> Submit </button>
		  </div>
		</div>
	</form>
</div>
</div>
	</div>
<script type="text/javascript">
	function submit_form(event){
		var testCanvas = document.getElementById('signature1_canvas_canvas');
                  var canvasData = testCanvas.toDataURL("image/png");
                  //alert(canvasData);
                  document.getElementById("get_imgid").value = canvasData; 
				//window.open(canvasData.toDataURL("image/png"));
                  // var tests = document.getElementById('signature1_canvas');
                  // var canvass = testCanvas.toDataURL("image/png");
                  // document.getElementById("ims").value = canvass; 
//Validation fields
					var yourName = document.getElementById('pname').value;
		     		   if (yourName == "") {
						   alert('Please Enter the Name field!..');
					            //$('#pname').attr('placeholder', 'Please Enter the Name field!..' );
					            //$('#pname').css('border-color','red');
					            return false;}
		
		var emailId =document.getElementById('email').value;
					     //alert(email);
					    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
					    if (!filter.test(emailId)){
							alert('Please Enter the Email Field!..');
					    	//$('#email').attr('placeholder', 'Please Enter the Email Field!..' );
					    	//$('#email').css('border-color','red');
					    	return false;}
		var Date = document.getElementById('dates').value;
		     		   if (Date == "") {
						   alert('Please Enter the Date field!..');
					            //$('#dates').attr('placeholder', 'Please Enter the Date field!..' );
					           // $('#dates').css('border-color','red');
					            return false;}
		
		
		document.getElementById("app_form").submit();
}
</script>
<?php get_footer(); ?>