<?php
/**
Template Name: Medical History Form
**/
get_header();
?>
<div class="form-wrapper">
<div class="container">	
<div class="row row-bg-design">
<div class="">
	<form method="POST" name="myform" id="app_form" class="form-bg-design sigpad" enctype="multipart/form-data" action="http://webdevelopers1.com/motivodental/view-medical-form/">
		<div class="row row_mgn">    
			<div class=" col-sm-12 col-xs-12 text">
				<label>Patient Name:</label><input type="text" maxlength="85" id="pname" name="pname" class="" value="" />
			</div>
									
		</div>
		<div class="row row_mgn">    
			<div class=" col-sm-6 col-xs-12 text">
				<label>Emergency Contact:</label><input type="text" maxlength="12" id="econt" name="econt" class="" value="" />
			</div>
			<div class=" col-sm-6 col-xs-12 text">
				<label>Phone:</label><input type="text" maxlength="12" id="phone" name="phone" class="" value="" />
			</div>
		</div>
		<div class="row row_mgn">    
			<div class=" col-sm-12 col-xs-12 text">
				<label>Relationship:</label><input type="text" maxlength="85" id="relation" name="relation" class="" value="" />
			</div>
									
		</div>
		
		<div class="row row_mgn">    
			<div class=" col-sm-8 col-xs-12 text">
				<label>Name of Family Doctor:</label><input type="text" maxlength="48" id="nofd" name="nofd" class="" value="" />
			</div>
			<div class=" col-sm-4 col-xs-12 text">
				<label class="">Phone:</label><input type="text" maxlength="12" id="dphone" name="dphone" class="" value="" />
			</div>						
		</div>
		<div class="row row_mgn">    
			<div class="col-sm-12 col-md-12 col-xs-12 text textH">
				<div class="row ">    
					<div class=" col-sm-12 text">
						<h2 class="insurance-hdg">Dental History</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-5 col-sm-8 col-xs-12"><label>Have you had regular dental exams in the past?</label></div>
					<div class="col-md-1 col-sm-2 col-xs-3"><input type="radio" name="6" id="6a" value="6a" /> <label for="y4a1">Yes</label></div>
					<div class="col-md-6 col-sm-2  col-xs-9"><input type="radio" name="6" id="6b" value="6b" /> <label for="y4a2">No</label></div>
				</div>
				<div class="row">
					<div class="col-md-5 col-sm-8 col-xs-12"><label>Have you had dental x-rays in past year?</label></div>
					<div class="col-md-1 col-sm-2  col-xs-3"><input type="radio" name="7" id="7a" value="7a" /> <label for="y4a1">Yes</label></div>
					<div class="col-md-6 col-sm-2  col-xs-9"><input type="radio" name="7" id="7b" value="7b" /> <label for="y4a2">No</label></div>
				</div>
				<div class="row">
					<div class="col-md-5 col-sm-8 col-xs-12"><label>Have you had your teeth extracted in the past year?</label></div>
					<div class="col-md-1 col-sm-2  col-xs-3"><input type="radio" name="8" id="8a" value="8a" /> <label for="y4a1">Yes</label></div>
					<div class="col-md-6 col-sm-2  col-xs-9"><input type="radio" name="8" id="8b" value="8b" /> <label for="y4a2">No</label></div>
				</div>
				<div class="row">
					<div class="col-md-5 col-sm-8 col-xs-12"><label>Do you have any fixed bridges, partial dentures, full dentures?</label></div>
					<div class="col-md-1 col-sm-2  col-xs-3"><input type="radio" name="9" id="9b" value="9a" /> <label for="y4a1">Yes</label></div>
					<div class="col-md-6 col-sm-2  col-xs-9"><input type="radio" name="9" id="9b" value="9b" /> <label for="y4a2">No</label></div>
				</div>
				<div class="row">
					<div class="col-md-5 col-sm-8 col-xs-12"><label>Have the above replacements been satisfactory?</label></div>
					<div class="col-md-1 col-sm-2  col-xs-3"><input type="radio" name="10" id="10a" value="10a" /> <label for="y4a1">Yes</label></div>
					<div class="col-md-6 col-sm-2  col-xs-9"><input type="radio" name="10" id="10b" value="10b" /> <label for="y4a2">No</label></div>
				</div>
				<div class="row">
					<div class="col-md-5 col-sm-8 col-xs-12"><label>Have you ever had root canal therapy?</label></div>
					<div class="col-md-1 col-sm-2  col-xs-3"><input type="radio" name="11" id="11a" value="11a" /> <label for="y4a1">Yes</label></div>
					<div class="col-md-6 col-sm-2  col-xs-9"><input type="radio" name="11" id="11b" value="11b" /> <label for="y4a2">No</label></div>
				</div>
				<div class="row">
					<div class="col-md-5 col-sm-8 col-xs-12"><label>Have you ever had periodontal (gum) disease?</label></div>
					<div class="col-md-1 col-sm-2  col-xs-3"><input type="radio" name="12" id="12a" value="12a" /> <label for="y4a1">Yes</label></div>
					<div class="col-md-6 col-sm-2  col-xs-9"><input type="radio" name="12" id="12b" value="12b" /> <label for="y4a2">No</label></div>
				</div>
				<div class="row">
					<div class="col-md-5 col-sm-8 col-xs-12"><label>Have you ever had abscessed teeth, sore gums, sore mouth?</label></div>
					<div class="col-md-1 col-sm-2  col-xs-3"><input type="radio" name="13" id="13a" value="13a" /> <label for="y4a1">Yes</label></div>
					<div class="col-md-6 col-sm-2  col-xs-9"><input type="radio" name="13" id="13b" value="13b" /> <label for="y4a2">No</label></div>
				</div> 
				<div class="row">
					<div class="col-md-5 col-sm-8 col-xs-12"><label>Do you have any habits that may affect your teeth?<br>(Such as clenching, grinding, nail biting etc.)</label></div>
					<div class="col-md-1 col-sm-2  col-xs-3"><input type="radio" name="14" id="14a" value="14a" /> <label for="y4a1">Yes</label></div>
					<div class="col-md-6 col-sm-2  col-xs-9"><input type="radio" name="14" id="14b" value="14b" /> <label for="y4a2">No</label></div>
				</div> 				
            </div>					
		</div>
		
		<div class="row row_mgn">    
			<div class=" col-sm-12 col-xs-12 text">
				<label>How often do you brush your teeth?</label><input type="text" maxlength="74" id="" name="how_often" class="" value="" />
			</div>						
		</div>
		<div class="row row_mgn">    
			<div class=" col-sm-12 col-xs-12 text">
				<label>How often do you floss your teeth? </label><input type="text" maxlength="74" id="floss" name="floss" class="" value="" />
			</div>						
		</div>
		<div class="row row_mgn">    
			<div class=" col-sm-12 col-xs-12 text">
				<label>How often do you use mouthwash?</label><input type="text" maxlength="74" id="mouthwash" name="mouthwash" class="" value="" />
			</div>						
		</div>
		<div class="row row_mgn">    
			<div class="col-sm-12 col-md-12 col-xs-12 text textH">
				<div class="row ">    
					<div class=" col-sm-12 text">
						<h2 class="insurance-hdg">Medical History</h2>
					</div>
				</div>
				<div class="row row_mgn">
					<div class="col-md-7 col-sm-8 col-xs-12"><label>Are you being treated for any medical condition at the present time or within the last year?</label></div>
					<div class="col-md-1  col-sm-2  col-xs-3"><input type="radio" name="15" id="15a" value="15a" /> <label for="y4a1">Yes</label></div>
					<div class="col-md-4  col-sm-2 col-xs-9"><input type="radio" name="15" id="15b" value="15b" /> <label for="y4a2">No</label></div>
				</div> 
				<div class="row row_mgn">    
					<div class=" col-sm-12 col-xs-12 text">
						<label>Details:</label><input type="text" maxlength="87" id="details" name="details" class="" value="" />
					</div>						
				</div>
				<div class="row row_mgn">    
					<div class=" col-sm-12 col-xs-12 text">
						<label>When was your last<br class="visible-xs"> medical check up?:</label><input type="text" maxlength="70" id="medical_check" name="medical_check" class="" value="" />
					</div>						
				</div>
				<div class="row row_mgn">
					<div class="col-md-7 col-sm-8 col-xs-12"><label>Has there been any change in your general health in the past year?  </label></div>
					<div class="col-md-1 col-sm-2 col-xs-3"><input type="radio" name="16" id="16a" value="16a" /> <label for="y4a1">Yes</label></div>
					<div class="col-md-4 col-sm-2 col-xs-9"><input type="radio" name="16" id="16b" value="16b" /> <label for="y4a2">No</label></div>
				</div> 
				<div class="row row_mgn">    
					<div class=" col-sm-12 col-xs-12 text">
						<label>Details:</label><input type="text" maxlength="87" id="theres" name="theres" class="" value="" />
					</div>						
				</div>
				<div class="row row_mgn">
					<div class="col-md-7 col-sm-8 col-xs-12"><label>Are you presently taking any medications? Please list below </label></div>
					<div class="col-md-1 col-sm-2 col-xs-3"><input type="radio" name="17" id="17a" value="17a" /> <label for="y4a1">Yes</label></div>
					<div class="col-md-4 col-sm-2 col-xs-9"><input type="radio" name="17" id="17b" value="17b" /> <label for="y4a2">No</label></div>
				</div> 
				<div class="row row_mgn">    
					<div class=" col-sm-12 col-xs-12 text">
						<label>Details:</label><input type="text" maxlength="87" id="takings" name="takings" class="" value="" />
					</div>						
				</div>
				<div class="row row_mgn">
					<div class="col-md-7 col-sm-8 col-xs-12"><label>Do you have any allergies?</label></div>
					<div class="col-md-1 col-sm-2 col-xs-3"><input type="radio" name="18" id="18a" value="18a" /> <label for="y4a1">Yes</label></div>
					<div class="col-md-4 col-sm-2 col-xs-9"><input type="radio" name="18" id="18b" value="18b" /> <label for="y4a2">No</label></div>
				</div> 
				<div class="row row_mgn">    
					<div class=" col-sm-12 col-xs-12 text">
						<label>Details (Please list reactions):</label><input type="text" maxlength="75" id="reactions" name="reactions" class="" value="" />
					</div>						
				</div>
				<div class="row row_mgn">
					<div class="col-md-7 col-sm-8 col-xs-12"><label>Do you have or have you ever had asthma?</label></div>
					<div class="col-md-1 col-sm-2 col-xs-3"><input type="radio" name="19" id="19a" value="19a" /> <label for="y4a1">Yes</label></div>
					<div class="col-md-4 col-sm-2 col-xs-9"><input type="radio" name="19" id="19b" value="19b" /> <label for="y4a2">No</label></div>
				</div>
				<div class="row row_mgn">
					<div class="col-md-7 col-sm-8 col-xs-12"><label>Do you have or have you ever had any heart or blood pressure problems?  </label></div>
					<div class="col-md-1 col-sm-2 col-xs-3"><input type="radio" name="20" id="20a" value="20a" /> <label for="y4a1">Yes</label></div>
					<div class="col-md-4 col-sm-2 col-xs-9"><input type="radio" name="20" id="20b" value="20b" /> <label for="y4a2">No</label></div>
				</div>
				<div class="row row_mgn">
					<div class="col-md-7 col-sm-8 col-xs-12"><label>Do you have or have you ever had a heart murmur, mitral valve prolapsed or rheumatic fever?</label></div>
					<div class="col-md-1 col-sm-2 col-xs-3"><input type="radio" name="21" id="21a" value="21a" /> <label for="y4a1">Yes</label></div>
					<div class="col-md-4 col-sm-2 col-xs-9"><input type="radio" name="21" id="21b" value="21b" /> <label for="y4a2">No</label></div>
				</div>
				<div class="row row_mgn">
					<div class="col-md-7 col-sm-8 col-xs-12"><label>Do you have a prosthetic or artificial joints</label></div>
					<div class="col-md-1 col-sm-2 col-xs-3"><input type="radio" name="22" id="22a" value="22a" /> <label for="y4a1">Yes</label></div>
					<div class="col-md-4 col-sm-2 col-xs-9"><input type="radio" name="22" id="22b" value="22b" /> <label for="y4a2">No</label></div>
				</div>
				<div class="row row_mgn">    
					<div class=" col-sm-12 col-xs-12 text">
						<label>Details:</label><input type="text" maxlength="87" id="artificials" name="artificials" class="" value="" />
					</div>						
				</div>
				<div class="row row_mgn">
					<div class="col-md-7 col-sm-8 col-xs-12"><label>Do you have any conditions or therapies that could affect your immune system?<br> I.e. leukemia, Aids, HIV infection,  radiotherapy, chemotherapy?</label></div>
					<div class="col-md-1 col-sm-2 col-xs-3"><input type="radio" name="23" id="23a" value="23a" /> <label for="y4a1">Yes</label></div>
					<div class="col-md-4 col-sm-2 col-xs-9"><input type="radio" name="23" id="23b" value="23b" /> <label for="y4a2">No</label></div>
				</div>
				<div class="row row_mgn">    
					<div class=" col-sm-12 col-xs-12 text">
						<label>Details:</label><input type="text" maxlength="87" id="infection" name="infection" class="" value="" />
					</div>						
				</div>
				<div class="row row_mgn">
					<div class="col-md-7 col-sm-8 col-xs-12"><label>Have you ever had hepatitis, Jaundice, or liver disease?</label></div>
					<div class="col-md-1 col-sm-2 col-xs-3"><input type="radio" name="24" id="24a" value="24a" /> <label for="y4a1">Yes</label></div>
					<div class="col-md-4 col-sm-2 col-xs-9"><input type="radio" name="24" id="24b" value="24b" /> <label for="y4a2">No</label></div>
				</div>
				<div class="row row_mgn">    
					<div class=" col-sm-12 col-xs-12 text">
						<label>Details:</label><input type="text" maxlength="87" id="hepatitis" name="hepatitis" class="" value="" />
					</div>						
				</div>
				<div class="row row_mgn">
					<div class="col-md-7 col-sm-8 col-xs-12"><label>Do you have a bleeding problem or bleeding disorder?</label></div>
					<div class="col-md-1 col-sm-2 col-xs-3"><input type="radio" name="25" id="25a" value="25a" /> <label for="y4a1">Yes</label></div>
					<div class="col-md-4 col-sm-2 col-xs-9"><input type="radio" name="25" id="25b" value="25b" /> <label for="y4a2">No</label></div>
				</div>
				<div class="row row_mgn">    
					<div class=" col-sm-12 col-xs-12 text">
						<label>Details:</label><input type="text" maxlength="87" id="bleeding" name="bleeding" class="" value="" />
					</div>						
				</div>
				<div class="row row_mgn">
					<div class="col-md-7 col-sm-8 col-xs-12"><label>Have you ever been hospitalized for any illness or operations?</label></div>
					<div class="col-md-1 col-sm-2 col-xs-3"><input type="radio" name="26" id="26a" value="26a" /> <label for="y4a1">Yes</label></div>
					<div class="col-md-4 col-sm-2 col-xs-9"><input type="radio" name="26" id="26b" value="26b" /> <label for="y4a2">No</label></div>
				</div>
				<div class="row row_mgn">    
					<div class=" col-sm-12 col-xs-12 text">
						<label>Details:</label><input type="text" maxlength="87" id="hospitalized" name="hospitalized" class="" value="" />
					</div>						
				</div>
				<div class="row ">    
					<div class=" col-sm-12 text">
						<h2 class="insurance-hdg">Do you have or have you ever had any of the following? Please Check</h2>
					</div>
				</div>
				<div class="row row_mgn row_mgn_mobile">
					<div class="col-sm-3 col-xs-12"><input type="checkbox" name="chest[]" id="" value="1" /> <label for="y4a1">Chest Pain/Angina</label></div>
					<div class="col-sm-3 col-xs-12"><input type="checkbox" name="chest[]" id="" value="2" /> <label for="y4a1">Shortness of Breath </label></div>
					<div class="col-sm-3 col-xs-12"><input type="checkbox" name="chest[]" id="" value="3" /> <label for="y4a1">Pacemaker             </label></div>
					<div class="col-sm-3 col-xs-12"><input type="checkbox" name="chest[]" id="" value="4" /> <label for="y4a1">Steroid Therapy </label></div>
				</div>
				<div class="row row_mgn row_mgn_mobile">
					<div class="col-sm-3 col-xs-12"><input type="checkbox" name="chest[]" id="" value="5" /> <label for="y4a1">Seizures (epilepsy) </label></div>
					<div class="col-sm-3 col-xs-12"><input type="checkbox" name="chest[]" id="" value="6" /> <label for="y4a1">Heart Attack </label></div>
					<div class="col-sm-3 col-xs-12"><input type="checkbox" name="chest[]" id="" value="7" /> <label for="y4a1">Lung Disease      </label></div>
					<div class="col-sm-3 col-xs-12"><input type="checkbox" name="chest[]" id="" value="8" /> <label for="y4a1">Diabetes             </label></div>
				</div>
				<div class="row row_mgn row_mgn_mobile">
					<div class="col-sm-3 col-xs-12"><input type="checkbox" name="chest[]" id="" value="9" /> <label for="y4a1">Kidney Disease  </label></div>
					<div class="col-sm-3 col-xs-12"><input type="checkbox" name="chest[]" id="" value="10" /> <label for="y4a1">Stroke</label></div>
					<div class="col-sm-3 col-xs-12"><input type="checkbox" name="chest[]" id="" value="11" /> <label for="y4a1">Prosthetic Heart Valve</label></div>
					<div class="col-sm-3 col-xs-12"><input type="checkbox" name="chest[]" id="" value="12" /> <label for="y4a1">Tuberculosis          </label></div>
				</div>
				<div class="row row_mgn row_mgn_mobile">
					<div class="col-sm-3 col-xs-12"><input type="checkbox" name="chest[]" id="" value="13" /> <label for="y4a1">Stomach Ulcers   </label></div>
					<div class="col-sm-3 col-xs-12"><input type="checkbox" name="chest[]" id="" value="14" /> <label for="y4a1">Thyroid Disease </label></div>
					<div class="col-sm-3 col-xs-12"><input type="checkbox" name="chest[]" id="" value="15" /> <label for="y4a1">Cancer             </label></div>
					<div class="col-sm-3 col-xs-12"><input type="checkbox" name="chest[]" id="" value="16" /> <label for="y4a1">Arthritis  </label></div>
				</div>
				<div class="row row_mgn row_mgn_mobile">
					<div class="col-sm-3 col-xs-12"><input type="checkbox" name="chest[]" id="" value="17" /> <label for="y4a1">Diet Pill Therapy  </label></div>
					
				</div>
					<div class="row row_mgn">
					<div class="col-md-7 col-sm-8 col-xs-12"><label>Are there any conditions or disease not listed above that you have or have had? </label></div>
					<div class="col-md-1 col-sm-2 col-xs-3"><input type="radio" name="27" id="27a" value="27a" /> <label for="y4a1">Yes</label></div>
					<div class="col-md-4 col-sm-2 col-xs-9"><input type="radio" name="27" id="27b" value="27b" /> <label for="y4a2">No</label></div>
				</div>
				<div class="row row_mgn">    
					<div class=" col-sm-12 col-xs-12 text">
						<label>Details:</label><input type="text" maxlength="87" id="conditions" name="conditions" class="" value="" />
					</div>						
				</div>
					<div class="row row_mgn">
					<div class="col-md-7 col-sm-8 col-xs-12"><label>Are there any diseases or medical problems that run into your family? </label></div>
					<div class="col-md-1 col-sm-2 col-xs-3"><input type="radio" name="28" id="28a" value="28a" /> <label for="y4a1">Yes</label></div>
					<div class="col-md-4 col-sm-2 col-xs-9"><input type="radio" name="28" id="28b" value="28b" /> <label for="y4a2">No</label></div>
				</div>
				<div class="row row_mgn">    
					<div class=" col-sm-12 col-xs-12 text">
						<label>Details:</label><input type="text" maxlength="87" id="diseases" name="diseases" class="" value="" />
					</div>						
				</div>
					<div class="row row_mgn">
					<div class="col-md-7 col-sm-8 col-xs-12"><label>Do you drink alcohol and if so, how often?</label></div>
					<div class="col-md-1 col-sm-2 col-xs-3"><input type="radio" name="29" id="29a" value="29a" /> <label for="y4a1">Yes</label></div>
					<div class="col-md-4 col-sm-2 col-xs-9"><input type="radio" name="29" id="29b" value="29b" /> <label for="y4a2">No</label></div>
				</div>
				<div class="row row_mgn">    
					<div class=" col-sm-12 col-xs-12 text">
						<label>Details:</label><input type="text" maxlength="87" id="alcohol" name="alcohol" class="" value="" />
					</div>						
				</div>
					<div class="row row_mgn">
					<div class="col-md-7 col-sm-8 col-xs-12"><label>Do you or have you ever used recreational drugs? 	</label></div>
					<div class="col-md-1 col-sm-2 col-xs-3"><input type="radio" name="30" id="30a" value="30a" /> <label for="y4a1">Yes</label></div>
					<div class="col-md-4 col-sm-2 col-xs-9"><input type="radio" name="30" id="30b" value="30b" /> <label for="y4a2">No</label></div>
				</div>
				<div class="row row_mgn">    
					<div class=" col-sm-12 col-xs-12 text">
						<label>Details (Please list):</label><input type="text" maxlength="75" id="recreational" name="recreational" class="" value="" />
					</div>						
				</div>
				<div class="row row_mgn">
					<div class="col-md-7 col-sm-8 col-xs-12"><label>Do you smoke or chew tobacco products?</label></div>
					<div class="col-md-1 col-sm-2 col-xs-3"><input type="radio" name="31" id="31a" value="31a" /> <label for="y4a1">Yes</label></div>
					<div class="col-md-4 col-sm-2 col-xs-9"><input type="radio" name="31" id="31b" value="31b" /> <label for="y4a2">No</label></div>
				</div>
				<div class="row row_mgn">
					<div class="col-md-7 col-sm-8 col-xs-12"><label>Are you nervous during dental treatment?</label></div>
					<div class="col-md-1 col-sm-2 col-xs-3"><input type="radio" name="33" id="33a" value="33a" /> <label for="y4a1">Yes</label></div>
					<div class="col-md-4 col-sm-2 col-xs-9"><input type="radio" name="33" id="33b" value="33b" /> <label for="y4a2">No</label></div>
				</div>
				<div class="row row_mgn">
					<div class="col-md-7 col-sm-8 col-xs-12"><label>For Women Only: Are you breast-feeding or pregnant?    </label></div>
					<div class="col-md-1 col-sm-2 col-xs-3"><input type="radio" name="34" id="34a" value="34a" /> <label for="y4a1">Yes</label></div>
					<div class="col-md-4 col-sm-2 col-xs-9"><input type="radio" name="34" id="34b" value="34b" /> <label for="y4a2">No</label></div>
				</div>
				<div class="row row_mgn">
					<div class="col-sm-12 col-xs-12">
						<p>To the best of my knowledge, the above information is correct:</p>
					</div>
				</div>
            </div>					
		</div>
		
				<div class="row row_mgn"> 
                <div class="col-md-2 col-sm-2 col-xs-12 text">
                    <label>Signature:</label>
                    
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
                  <div class="col-md-3 col-sm-5 col-xs-12 text  ">
                      <label>Date:</label><input type="text" maxlength="12" id="dates" name="dates" class="datepicker" value="" />
                  </div>
                </div>  
				<div class="row row_mgn">
					<div class=" col-xs-12 text text-center">					
					</div>
				</div>
				
		
		
		
		
		
		<div class="row row_mgn">
		  <div class="col-sm-12 col-xs-12  text-center custom-arc">
			<input type="submit" value="Submit" name="Submit" onclick="return submit_form(event)" class="btn btn-primary">
		  </div>
		</div>
	</form>
</div>
</div>
</div>
</div>
<?php get_footer(); ?>

<script type="text/javascript">
	function submit_form(event){
		var testCanvas = document.getElementById('signature1_canvas_canvas');
                  var canvasData = testCanvas.toDataURL("image/png");
                  //alert(canvasData);
                  document.getElementById("get_imgid").value = canvasData; 
                  
                  //Validation fields
					var yourName = document.getElementById('pname').value;
		     		   if (yourName == "") {
						   alert('Please Enter the Name field!..');
					            //$('#pname').attr('placeholder', 'Please Enter the Name field!..' );
					            //$('#pname').css('border-color','red');
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
