<!--
signUp_familyBkg_fatherName
signUp_familyBkg_fatherOccpn
signUp_familyBkg_motherName
signUp_familyBkg_motherOccpn
signUp_familyBkg_noOfBrothers
signUp_familyBkg_noOfSisters
-->
<div class="panel panel-primary mtop10p">
<div class="panel-heading"><b>4. Family Background</b></div>
<div class="panel-body">
  <div class="container-fluid">
    <div class="row">
	  <div class="col-xs-12 col-md-6">
		<div align="center" class="form-group">
		  <h5><b>FATHER DETAILS</b></h5>
		</div>
		<div class="form-group">
		  <label>Father Name</label>
		  <input id="signUp_familyBkg_fatherName" type="text" class="form-control" placeholder="Enter your Father Name"/>
		</div>
		<div class="form-group">
		   <label>Occupation</label>
		   <input id="signUp_familyBkg_fatherOccpn" type="text" class="form-control" placeholder="Enter your Occupation"/>
	    </div>
	  </div>
	  <div class="col-xs-12 col-md-6">
	    <div align="center" class="form-group">
		 <h5><b>MOTHER DETAILS</b></h5>
	    </div>
	    <div class="form-group">
		   <label>Mother Name</label>
		   <input id="signUp_familyBkg_motherName" type="text" class="form-control" placeholder="Enter your Mother Name"/>
	    </div>
	    <div class="form-group">
		   <label>Occupation</label>
		   <input id="signUp_familyBkg_motherOccpn" type="text" class="form-control" placeholder="Enter your Occupation"/>
	    </div>
	  </div>
	</div>
	<div class="row">
      <div class="col-xs-12 col-md-6">
	   <div align="center" class="form-group">
		  <h5><b>SIBLINGS DETAILS</b></h5>
	   </div>
	   <div class="form-group">
		    <label>Number of Brothers</label>
		    <select id="signUp_familyBkg_noOfBrothers" class="form-control">
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
			<select id="signUp_familyBkg_noOfSisters" class="form-control">
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
	  </div>
	</div>
	<div class="row">
	  <div class="col-xs-12 col-md-4"></div>
      <div class="col-xs-12 col-md-4">
		<div align="center" class="form-group">
		 <div class="btn-group">
		  <button class="btn btn-default" onclick="javascript:sel_signup_menu('signup_menu_contactInf');"><b>Back</b></button>
		  <button class="btn btn-primary" onclick="javascript:signup_familyBackground();"><b>Next</b></button>
		 </div>
		</div>
	  </div>
	  <div class="col-xs-12 col-md-4"></div>
	  </div>
	
    </div>
  </div>
</div>
