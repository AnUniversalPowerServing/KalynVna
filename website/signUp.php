<!DOCTYPE html>
<html lang="en">
<head>
  <title>KalyanaVeena</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
  <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
  <script src="js/api/brahim-core.js"></script>
  <script src="js/api/bootstrap-switch.js"></script>
  <link href="styles/bootstrap-switch.css" rel="stylesheet">
<script type="text/javascript">
$(document).ready(function(){
 kvHeaderMenu('kvHeaderMenu-signUp');
});
</script>
</head>
<body>
 <?php include_once 'templates/api_header.php'; ?>
 <div class="container-fluid">
   <div class="row">
	  <div align="center" class="col-sm-12">
		<h3><b>Sign Up</b></h3>
		<p>Fill your Details, we provide Information about your Partner that matches your Zodiac Information</p>
	  </div>
   </div>
   <div class="row">
    <div class="col-sm-4">
      <h4 style="color:#000;padding:8px;border-bottom:1px solid #c0c0c0;margin-bottom:25px;">
	    1. Mention your Profile
	  </h4>
	
	  <div class="form-group">
		<label>SurName</label>
		<input type="text" class="form-control" placeholder="Enter your SurName"/>
	  </div>
      <div class="form-group">
		<label>Name</label>
		<input type="text" class="form-control" placeholder="Enter your Name"/>
	  </div>
	  <div class="form-group">
		<label>Gender</label>
		<select class="form-control">
		  <option value="">Select your Gender</option>
		  <option value="Male">Male</option>
		  <option value="Female">Female</option>
		</select>
	  </div>
	  <div class="form-group">
		<label>Mother Tongue</label>
		<select class="form-control">
			<option value="">Select your Mother Tongue</option>
			<option value="Telugu">Telugu</option>
			<option value="Hindi">Hindi</option>
		</select>
	  </div>
	  <div class="form-group">
		<label>Status</label>
		<select class="form-control">
			<option value="">Select your Status</option>
			<option value="UnMarried">UnMarried</option>
			<option value="Divorced">Divorced</option>
			<option value="Widow">Widow</option>
		</select>
	  </div>
	  <div class="form-group">
		  <label>Height</label>
		  <div class="col-xs-12 pad0 mbot35p">
			<div class="col-xs-6 pad0">
		      <select class="form-control">
			    <option value="">Select your Feet</option>
				<option value="4">4 Feet</option>
				<option value="5">5 Feet</option>
				<option value="6">6 Feet</option>
				<option value="7">7 Feet</option>
				<option value="8">8 Feet</option>
				<option value="9">9 Feet</option>
			  </select>
			</div>
			<div class="col-xs-6 pad0">
		      <select class="form-control">
			    <option value="">Select your Inches</option>
				<option value="1">1 inch</option>
				<option value="2">2 inches</option>
				<option value="3">3 inches</option>
				<option value="4">4 inches</option>
				<option value="5">5 inches</option>
				<option value="6">6 inches</option>
				<option value="7">7 inches</option>
				<option value="8">8 inches</option>
				<option value="9">9 inches</option>
				<option value="10">10 inches</option>
				<option value="11">11 inches</option>
				<option value="12">12 inches</option>
			  </select>
			</div>
		  </div>
	    </div>
	  <h4 style="color:#000;padding:8px;border-bottom:1px solid #c0c0c0;margin-bottom:25px;">
	    4. Contact Information
	  </h4>   
      <div class="form-group">
		<label>Residential Address</label>
		<textarea class="form-control" placeholder="Enter your Residential Address"></textarea>
	  </div>
	  <div class="form-group">
		<label>State</label>
		<select id="reg_user_state" class="form-control">
			<option value="">Select your State</option>
		</select>
	  </div>
	  <div class="form-group">
		<label>Country</label>
		<select id="reg_user_state" class="form-control">
			<option value="">Select your Country</option>
		</select>
	  </div> 
	  <div class="form-group">
		<label>Mobile</label>
		<input type="text" class="form-control" placeholder="Enter your Mobile"/>
	  </div>
	  <h4 style="color:#000;padding:8px;border-bottom:1px solid #c0c0c0;margin-bottom:25px;">
	    7. Property Information
	  </h4> 
	  <div class="form-group">
		<label>You owned</label>
		<div class="col-xs-12 mbot15p">
		  <div class="col-xs-4"><input type="checkbox"/>&nbsp;House</div>
		  <div class="col-xs-4"><input type="checkbox"/>&nbsp;Flat</div>
		  <div class="col-xs-4"><input type="checkbox"/>&nbsp;Land</div>
		</div>
	  </div>
	  <div class="form-group">
		<label>Property Value</label>
		<select class="form-control">
		  <option value="">Select your Property Value</option>
		</select>
	  </div>
    </div>
  
    <div class="col-sm-4">
      <h4 style="color:#000;padding:8px;border-bottom:1px solid #c0c0c0;margin-bottom:25px;">
	    2. Birth, Zodiac and Community Background
	  </h4>
	  <div class="form-group">
		<label>Date and Time of Birth</label>
		<div class="col-xs-12 mbot10p pad0">
		  <div class="col-xs-6 pad0">
		    <input type="date" id="reg_user_shakha" class="form-control"/>
		  </div>
		  <div class="col-xs-6 pad0">
		    <input type="time" id="reg_user_shakha" class="form-control"/>
		  </div>
		</div>
	  </div>
	  <div class="form-group">
		<label>Place of Birth</label>
		<input type="text" id="reg_user_shakha" class="form-control" placeholder="Enter your Place of Birth"/>
	  </div>
      <div class="form-group">
		<label>Shakha</label>
		<select id="reg_user_shakha" class="form-control" onchange="display_list_upaShakha('reg_user_shakha','reg_user_upaShakha');">
			<option value="">Select your Shakha</option>
		</select>
	  </div>
	  <div class="form-group">
		<label>UpaShakha</label>
		<select id="reg_user_upaShakha" class="form-control">
			<option value="">Select your UpaShakha</option>
		</select>
	  </div>
	  <div class="form-group">
		<label>Gothram</label>
		<select id="reg_user_gothram" class="form-control">
		  <option value="">Select your Gothram</option>
		</select>
	  </div>
	  <div class="form-group">
		<label>Raasi (Zodaic Sign)</label>
		<select id="reg_user_raasi" class="form-control" onchange="javascript:display_list_Nakshatra('reg_user_raasi','reg_user_nakshatra');">
			<option value="">Select your Raasi (Zodiac Sign)</option>
			<option value="Aries (Mesha Raasi)">Aries (Mesha Raasi)</option>
			<option value="Taurus (Vrushabha Raasi)">Taurus (Vrushabha Raasi)</option>
			<option value="Gemini (Midhuna Raasi)">Gemini (Midhuna Raasi)</option>
			<option value="Cancer (Karkataka Raasi)">Cancer (Karkataka Raasi)</option>
			<option value="Leo (Simha Raasi)">Leo (Simha Raasi)</option>
			<option value="Virgo (Kanya Raasi)">Virgo (Kanya Raasi)</option>
			<option value="Libra (Thula Raasi)">Libra (Thula Raasi)</option>
			<option value="Scorpio (Vruchika Raasi)">Scorpio (Vruchika Raasi)</option>
			<option value="Saggitarius (Dhanur Raasi)">Saggitarius (Dhanur Raasi)</option>
			<option value="Capricorn (Makara Raasi)">Capricorn (Makara Raasi)</option>
			<option value="Aquarius (Khumbha Raasi)">Aquarius (Khumbha Raasi)</option>
			<option value="Pisces (Meena Raasi)">Pisces (Meena Raasi)</option>
		</select>
	  </div>
	  <div class="form-group">
		<label>Star (Nakshatra)</label>
		<select id="reg_user_nakshatra" class="form-control">
			<option value="">Select your Star (Nakshatra)</option>
		</select>
	  </div>
	  <h4 style="color:#000;padding:8px;border-bottom:1px solid #c0c0c0;margin-bottom:25px;">
	       5. Preference of Spouse
	  </h4>
	  <div class="form-group">
		<label>Qualifications</label>
		<select id="reg_user_Expqualifications" class="form-control">
			<option value="">Select your Qualifications</option>
		</select>
	  </div>
	  <div class="form-group">
		<label>Job</label>
		<select id="reg_user_ExpJob" class="form-control">
			<option value="">Select your Job</option>
		</select>
	  </div>
	  <div class="form-group">
		<label>Mother Tongue</label>
		<select id="reg_user_ExpMotherTongue" class="form-control">
			<option value="">Select your Mother Tongue</option>
		</select>
	  </div>
    </div>
	
    <div class="col-sm-4">
      
	    <h4 style="color:#000;padding:8px;border-bottom:1px solid #c0c0c0;margin-bottom:25px;">
	       3. Academics and Education Background
	    </h4>
	    <div class="form-group">
		  <label>Highest Degree</label>
		  <input type="text" class="form-control" placeholder="Enter your Highest Degree"/>
	    </div>
		<div class="form-group">
		  <label>From University</label>
		  <input type="text" class="form-control" placeholder="Enter your University"/>
	    </div>
		<div class="form-group">
		  <label>State</label>
		  <select id="reg_user_state" class="form-control">
			<option value="">Select your State</option>
		  </select>
	    </div>
	    <div class="form-group">
		  <label>Country</label>
		  <select id="reg_user_state" class="form-control">
			<option value="">Select your Country</option>
		  </select>
	    </div> 
		<h4 style="color:#000;padding:8px;border-bottom:1px solid #c0c0c0;margin-bottom:25px;">
	       6. Occupation Background
	    </h4>
		<div class="form-group">
		  <label>Occupation</label>
		  <input type="text" class="form-control" placeholder="Enter your Occupation"/>
	    </div>
		<div class="form-group">
		  <label>Occupation Type</label>
		  <select class="form-control">
			<option value="Private Company">Private Company</option>
			<option value="Government / Public Sector">Government / Public Sector</option>
			<option value="Defence / Civil Services">Defence / Civil Services</option>
			<option value="Business / Self Employeed">Business / Self Employeed</option>
		  </select>
	    </div>
		<div class="form-group">
		<label>Office Address</label>
		<textarea class="form-control" placeholder="Enter your Residential Address"></textarea>
	  </div>
	  <div class="form-group">
		<label>Annual Package</label>
		<select id="reg_user_state" class="form-control">
			<option value="">Select your Package</option>
		</select>
	  </div>
	  <div class="form-group">
		<label>State</label>
		<select id="reg_user_state" class="form-control">
			<option value="">Select your State</option>
		</select>
	  </div>
	  <div class="form-group">
		<label>Country</label>
		<select id="reg_user_state" class="form-control">
			<option value="">Select your Country</option>
		</select>
	  </div> 
	  <h4 style="color:#000;padding:8px;border-bottom:1px solid #c0c0c0;margin-bottom:25px;">
	     8. Upload your Picture
	  </h4>
	  <div class="col-xs-12">
		<div class="col-xs-4" style="padding:5px;">
		 <div style="width:100%;height:200px;background-color:#ccc;"></div>
		</div>
		<div class="col-xs-4" style="padding:5px;">
		 <div style="width:100%;height:200px;background-color:#ccc;"></div>
		</div>
		<div class="col-xs-4" style="padding:5px;">
		 <div style="width:100%;height:200px;background-color:#ccc;"></div>
		</div>
	  </div>
    </div>
	
  </div>
   <div class="row">
	  <div class="col-sm-4">
	   
	  </div>
	  
	  <div class="col-sm-12">
		<h4 style="color:#000;padding:8px;border-bottom:1px solid #c0c0c0;margin-bottom:25px;">
	       9. Family Background
	    </h4>
		
		<div class="col-sm-4">
		<div class="list-group">
			<div class="list-group-item">
			    <div align="center" class="form-group">
				  <h5><b>FATHER DETAILS</b></h5>
				</div>
				<div class="form-group">
				  <label>Father Name</label>
				  <input type="text" class="form-control" placeholder="Enter your Father Name"/>
				</div>
				<div class="form-group">
				  <label>Occupation</label>
				  <input type="text" class="form-control" placeholder="Enter your Occupation"/>
				</div>
				<div class="form-group">
				  <label>Profession</label>
				  <div class="col-xs-12 mbot10p">
					<div class="col-xs-6 pad0"><input type="checkbox"/>&nbsp;Service</div>
					<div class="col-xs-6 pad0"><input type="checkbox"/>&nbsp;Retired</div>
				  </div>
				</div>
				<div class="form-group">
				  <label>Residential Address</label>
				  <textarea class="form-control" placeholder="Enter your Residential Address"></textarea>
				</div>
				<div class="form-group">
				  <label>State</label>
				  <select id="reg_user_state" class="form-control">
					<option value="">Select your State</option>
				  </select>
				</div>
				<div class="form-group">
				   <label>Country</label>
				   <select id="reg_user_state" class="form-control">
					  <option value="">Select your Country</option>
				   </select>
				</div>
				<div align="right" class="form-group">
				  <input type="checkbox"/>&nbsp;Stays with Son / Daughter Residence
				</div>
			</div>
		</div>
		</div>
		
		<div class="col-sm-4">
		<div class="list-group">
			<div class="list-group-item">
			    <div align="center" class="form-group">
				  <h5><b>MOTHER DETAILS</b></h5>
				</div>
				<div class="form-group">
				  <label>Mother Name</label>
				  <input type="text" class="form-control" placeholder="Enter your Mother Name"/>
				</div>
				<div class="form-group">
				  <label>Occupation</label>
				  <input type="text" class="form-control" placeholder="Enter your Occupation"/>
				</div>
				<div class="form-group">
				  <label>Profession</label>
				  <div class="col-xs-12 mbot10p">
					<div class="col-xs-4 pad0"><input type="checkbox"/>&nbsp;Service</div>
					<div class="col-xs-4 pad0"><input type="checkbox"/>&nbsp;Retired</div>
					<div class="col-xs-4 pad0"><input type="checkbox"/>&nbsp;HouseWife</div>
				  </div>
				</div>
				<div class="form-group">
				  <label>Residential Address</label>
				  <textarea class="form-control" placeholder="Enter your Residential Address"></textarea>
				</div>
				<div class="form-group">
				  <label>State</label>
				  <select id="reg_user_state" class="form-control">
					<option value="">Select your State</option>
				  </select>
				</div>
				<div class="form-group">
				   <label>Country</label>
				   <select id="reg_user_state" class="form-control">
					  <option value="">Select your Country</option>
				   </select>
				</div>
				<div align="right" class="form-group">
				  <input type="checkbox"/>&nbsp;Stays with Son / Daughter Residence
				</div>
			</div>
		</div>
		</div>
		
		<div class="col-sm-4">
		   <div class="list-group">
			<div class="list-group-item">
			    <div align="center" class="form-group">
				  <h5><b>SIBLINGS DETAILS</b></h5>
				</div>
				<div class="form-group">
				  <label>Number of Brothers</label>
				  <select class="form-control">
					<option value="">Select Number of Brothers</option>
					<option value="1">1 Brother</option>
					<option value="2">2 Brothers</option>
					<option value="3">3 Brothers</option>
					<option value="4">4 Brothers</option>
					<option value="5">5 Brothers</option>
					<option value="6">6 Brothers</option>
					<option value="7">7 Brothers</option>
					<option value="8">8 Brothers</option>
					<option value="9">9 Brothers</option>
					<option value="10">10 Brothers</option>
				  </select>
				</div>
				<div class="form-group">
				  <label>Number of Sisters</label>
				  <select class="form-control">
					<option value="">Select Number of Sisters</option>
					<option value="1">1 Sister</option>
					<option value="2">2 Sisters</option>
					<option value="3">3 Sisters</option>
					<option value="4">4 Sisters</option>
					<option value="5">5 Sisters</option>
					<option value="6">6 Sisters</option>
					<option value="7">7 Sisters</option>
					<option value="8">8 Sisters</option>
					<option value="9">9 Sisters</option>
					<option value="10">10 Sisters</option>
				  </select>
				</div>
				<div class="list-group">
				  <div class="list-group-item">
				    <div class="container-fluid pad0">
					  <label>BROTHER # 1</label>
					  <div class="col-xs-12 pad0">
						<div class="col-xs-4 pad0"><input type="checkbox"/>&nbsp;Studying</div>
						<div class="col-xs-4 pad0"><input type="checkbox"/>&nbsp;Employed</div>
						<div class="col-xs-4 pad0"><input type="checkbox"/>&nbsp;Married</div>
					  </div>
				    </div>
				  </div>
				  <div class="list-group-item">
				    <div class="container-fluid pad0">
					  <label>BROTHER # 2</label>
					  <div class="col-xs-12 pad0">
						<div class="col-xs-4 pad0"><input type="checkbox"/>&nbsp;Studying</div>
						<div class="col-xs-4 pad0"><input type="checkbox"/>&nbsp;Employed</div>
						<div class="col-xs-4 pad0"><input type="checkbox"/>&nbsp;Married</div>
					  </div>
				    </div>
				  </div>
				</div>
				<div class="list-group">
				  <div class="list-group-item">
				    <div class="container-fluid pad0">
					  <label>SISTER # 1</label>
					  <div class="col-xs-12 pad0">
						<div class="col-xs-4 pad0"><input type="checkbox"/>&nbsp;Studying</div>
						<div class="col-xs-4 pad0"><input type="checkbox"/>&nbsp;Employed</div>
						<div class="col-xs-4 pad0"><input type="checkbox"/>&nbsp;Married</div>
					  </div>
				    </div>
				  </div>
				  <div class="list-group-item">
				    <div class="container-fluid pad0">
					  <label>SISTER # 2</label>
					  <div class="col-xs-12 pad0">
						<div class="col-xs-4 pad0"><input type="checkbox"/>&nbsp;Studying</div>
						<div class="col-xs-4 pad0"><input type="checkbox"/>&nbsp;Employed</div>
						<div class="col-xs-4 pad0"><input type="checkbox"/>&nbsp;Married</div>
					  </div>
				    </div>
				  </div>
				</div>
			</div>
		   </div>
		</div>
	  </div>
   </div>
   <div class="row">
	  <div class="col-xs-12">
		<h4 style="color:#000;padding:8px;border-bottom:1px solid #c0c0c0;margin-bottom:25px;">
	       10. References
	    </h4>
	  </div>
	  <div class="col-xs-12">
		<div class="col-xs-4">
		  <div class="list-group">
			<div class="list-group-item">
			    <div align="center"><h5><b>REFERENCE # 1</b></h5></div>
				<div class="form-group">
					<label>Name</label>
					<input type="text" class="form-control" placeholder="Enter Referencer Name"/>
				</div>
				<div class="form-group">
					<label>Relationship</label>
					<input type="text" class="form-control" placeholder="Enter Relationship"/>
				</div>
				<div class="form-group">
				  <label>Residential Address</label>
				  <textarea class="form-control" placeholder="Enter your Residential Address"></textarea>
			    </div>
			    <div class="form-group">
				  <label>State</label>
				  <select id="reg_user_state" class="form-control">
					<option value="">Select your State</option>
				  </select>
			    </div>
				<div class="form-group">
				  <label>Country</label>
		          <select id="reg_user_state" class="form-control">
			         <option value="">Select your Country</option>
		          </select>
				</div> 
				<div class="form-group">
					<label>Mobile Number</label>
					<input type="text" class="form-control" placeholder="Enter Mobile Number"/>
				</div>
		    </div>
		  </div>
	    </div>
		
		<div class="col-xs-4">
		  <div class="list-group">
			<div class="list-group-item">
			    <div align="center"><h5><b>REFERENCE # 2</b></h5></div>
				<div class="form-group">
					<label>Name</label>
					<input type="text" class="form-control" placeholder="Enter Referencer Name"/>
				</div>
				<div class="form-group">
					<label>Relationship</label>
					<input type="text" class="form-control" placeholder="Enter Relationship"/>
				</div>
				<div class="form-group">
				  <label>Residential Address</label>
				  <textarea class="form-control" placeholder="Enter your Residential Address"></textarea>
			    </div>
			    <div class="form-group">
				  <label>State</label>
				  <select id="reg_user_state" class="form-control">
					<option value="">Select your State</option>
				  </select>
			    </div>
				<div class="form-group">
				  <label>Country</label>
		          <select id="reg_user_state" class="form-control">
			         <option value="">Select your Country</option>
		          </select>
				</div> 
				<div class="form-group">
					<label>Mobile Number</label>
					<input type="text" class="form-control" placeholder="Enter Mobile Number"/>
				</div>
		    </div>
		  </div>
	    </div>
		
		<div class="col-xs-4">
		  <div class="list-group">
			<div class="list-group-item">
			    <div align="center"><h5><b>REFERENCE # 3</b></h5></div>
				<div class="form-group">
					<label>Name</label>
					<input type="text" class="form-control" placeholder="Enter Referencer Name"/>
				</div>
				<div class="form-group">
					<label>Relationship</label>
					<input type="text" class="form-control" placeholder="Enter Relationship"/>
				</div>
				<div class="form-group">
				  <label>Residential Address</label>
				  <textarea class="form-control" placeholder="Enter your Residential Address"></textarea>
			    </div>
			    <div class="form-group">
				  <label>State</label>
				  <select id="reg_user_state" class="form-control">
					<option value="">Select your State</option>
				  </select>
			    </div>
				<div class="form-group">
				  <label>Country</label>
		          <select id="reg_user_state" class="form-control">
			         <option value="">Select your Country</option>
		          </select>
				</div> 
				<div class="form-group">
					<label>Mobile Number</label>
					<input type="text" class="form-control" placeholder="Enter Mobile Number"/>
				</div>
		    </div>
		  </div>
	    </div>
		
	  </div>
   </div>
   <div class="row">
     <div align="center" class="col-xs-12 mbot35p">
		<button class="btn btn-default"><b>SignUp</b></button>
	 </div>
   </div>
 </div>
</body>
</html>