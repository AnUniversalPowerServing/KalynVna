<!--
signUp_prefSpouse_highestDegree
signUp_prefSpouse_expectedOccpn
signUp_prefSpouse_expectedOccpnType
signUp_prefSpouse_expectedMTongue
-->
<div class="panel panel-primary mtop10p">
  <div class="panel-heading"> 
   <div class="row">
    <div class="col-sm-6"><b>5. Preference of Spouse</b></div>
    <div class="col-sm-6">
     <!-- -->
	 <div class="progress" style="height:15px;margin-bottom:0px;">
	 <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" 
	 style="width:70%;line-height:15px;font-size:10px;font-weight:bold;background-color:#a965b5;color:#000;">
	  70% Completed
     </div>
    </div>
	<!-- -->
    </div><!--/.col-sm-6 -->
   </div><!--/.row -->
  </div><!--/.panel-heading -->
  <div class="panel-body">
    <div class="container-fluid">
	  <div class="row">
	    <div class="col-xs-12 col-md-6">
		
		  <div class="form-group">
			<label>Expected Highest Degree&nbsp;<span class="font-red">*</span></label>
			<input id="signUp_prefSpouse_highestDegree" type="text" class="form-control"
			placeholder="Enter Highest Degree"/>
		  </div>
		</div>
		<div class="col-xs-12 col-md-6">
		  <div class="form-group">
			<label>Expected Occupation&nbsp;<span class="font-red">*</span></label>
			<input id="signUp_prefSpouse_expectedOccpn" type="text" class="form-control" 
			placeholder="Enter your Occupation"/>
		  </div>
		</div>
	  </div>
	  <div class="row">
	    <div class="col-xs-12 col-md-6">
		  <div class="form-group">
			<label>Expected Occupation Type&nbsp;<span class="font-red">*</span></label>
			<select id="signUp_prefSpouse_expectedOccpnType" class="form-control">
			    <option value="">Select Occupation Type</option>
				<option value="Private Company">Private Company</option>
				<option value="Government / Public Sector">Government / Public Sector</option>
				<option value="Defence / Civil Services">Defence / Civil Services</option>
				<option value="Business / Self Employeed">Business / Self Employeed</option>
				<option value="None of the Above">None of the Above</option>
			</select>
		  </div>
		</div>
		<div class="col-xs-12 col-md-6">
		  <div class="form-group">
			<label>Expected Mother Tongue&nbsp;<span class="font-red">*</span></label>
			<select id="signUp_prefSpouse_expectedMTongue" class="form-control">
				<option value="">Select Mother Tongue</option>
				<option value="Telugu">Telugu</option>
				<option value="Hindi">Hindi</option>
				<option value="Tamil">Tamil</option>
				<option value="Kannada">Kannada</option>
				<option value="Malayalam">Malayalam</option>
				<option value="Marathi">Marathi</option>
				<option value="Oriya">Oriya</option>
			</select>
		  </div>
		</div>
		<div class="col-xs-12 col-md-6">
		  <div class="form-group">
			<label>Expected <span id="signUp_prefSpouse_display_livingstatus"></span> Living Status
			&nbsp;<span class="font-red">*</span></label>
			<select id="signUp_prefSpouse_livingstatus" class="form-control">
				<option value="">Select Living Status</option>
				<option value="Living in India">Living in India</option>
				<option value="Living in Abroad">Living in Abroad</option>
			</select>
		  </div>
		</div>
	  </div>
	  <div class="row">
	    <div class="col-xs-12 col-md-4"></div>
	    <div class="col-xs-12 col-md-4">
		  <div align="center" class="form-group">
		   <div class="btn-group">
		    <button class="btn btn-default" onclick="javascript:sel_signup_menu('signup_menu_familyBackground');"><b>Back</b></button>
		    <button class="btn btn-primary" onclick="javascript:signup_preferenceOfSpouse();"><b>Next</b></button>
		   </div>
		  </div>
		</div>
		<div class="col-xs-12 col-md-4"></div>
	  </div>
	</div>
  </div>
</div>


