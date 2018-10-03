<!--
signUp_prefSpouse_highestDegree
signUp_prefSpouse_expectedOccpn
signUp_prefSpouse_expectedOccpnType
signUp_prefSpouse_expectedMTongue
-->
<div class="panel panel-primary mtop10p">
  <div class="panel-heading"><b>5. Preference of Spouse</b></div>
  <div class="panel-body">
    <div class="container-fluid">
	  <div class="row">
	    <div class="col-xs-12 col-md-6">
		
		  <div class="form-group">
			<label>Expected Highest Degree <span class="mandatoryField">*</span></label>
			<input id="signUp_prefSpouse_highestDegree" type="text" class="form-control"
			placeholder="Enter Highest Degree"/>
		  </div>
		</div>
		<div class="col-xs-12 col-md-6">
		  <div class="form-group">
			<label>Expected Occupation <span class="mandatoryField">*</span></label>
			<input id="signUp_prefSpouse_expectedOccpn" type="text" class="form-control" 
			placeholder="Enter your Occupation"/>
		  </div>
		</div>
	  </div>
	  <div class="row">
	    <div class="col-xs-12 col-md-6">
		  <div class="form-group">
			<label>Expected Occupation Type <span class="mandatoryField">*</span></label>
			<select id="signUp_prefSpouse_expectedOccpnType" class="form-control">
			    <option value="">Select Occupation Type</option>
				<option value="Private Company">Private Company</option>
				<option value="Government / Public Sector">Government / Public Sector</option>
				<option value="Defence / Civil Services">Defence / Civil Services</option>
				<option value="Business / Self Employeed">Business / Self Employeed</option>
			</select>
		  </div>
		</div>
		<div class="col-xs-12 col-md-6">
		  <div class="form-group">
			<label>Expected Mother Tongue <span class="mandatoryField">*</span></label>
			<select id="signUp_prefSpouse_expectedMTongue" class="form-control">
				<option value="">Select Mother Tongue</option>
				<option value="Telugu">Telugu</option>
				<option value="Hindi">Hindi</option>
			</select>
		  </div>
		</div> 
	  </div>
	  <div class="row">
	    <div class="col-xs-12 col-md-4"></div>
	    <div class="col-xs-12 col-md-4">
		  <div class="form-group">
		    <button class="btn btn-primary form-control" onclick="javascript:signup_preferenceOfSpouse();"><b>Next</b></button>
		  </div>
		</div>
		<div class="col-xs-12 col-md-4"></div>
	  </div>
	</div>
  </div>
</div>


