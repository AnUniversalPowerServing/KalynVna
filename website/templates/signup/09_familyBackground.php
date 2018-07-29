<!--
signUp_familyBkg_fatherName
signUp_familyBkg_fatherOccpn
signUp_familyBkg_fatherProfService
signUp_familyBkg_fatherProfRetired
signUp_familyBkg_fatherResAddress
signUp_familyBkg_fatherState
signUp_familyBkg_fatherCountry
signUp_familyBkg_fatherStaysWith
signUp_familyBkg_motherName
signUp_familyBkg_motherOccpn
signUp_familyBkg_motherProfService
signUp_familyBkg_motherProfRetired
signUp_familyBkg_motherProfHouseWife
signUp_familyBkg_motherResAddress
signUp_familyBkg_motherState
signUp_familyBkg_motherCountry
signUp_familyBkg_motherStaysWith
signUp_familyBkg_noOfBrothers
signUp_familyBkg_noOfSisters
signUp_familyBkg_brotherStudying1
signUp_familyBkg_brotherEmployed1
signUp_familyBkg_brotherMarried1
signUp_familyBkg_sisterStudying1
signUp_familyBkg_sisterEmployed1
signUp_familyBkg_sisterMarried1
-->
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
				  <label>Father Name <span class="mandatoryField">*</span></label>
				  <input id="signUp_familyBkg_fatherName" type="text" class="form-control" placeholder="Enter your Father Name"/>
				</div>
				<div class="form-group">
				  <label>Occupation <span class="mandatoryField">*</span></label>
				  <input id="signUp_familyBkg_fatherOccpn" type="text" class="form-control" placeholder="Enter your Occupation"/>
				</div>
				<div class="form-group">
				  <label>Profession <span class="mandatoryField">*</span></label>
				  <div class="col-xs-12 mbot10p">
					<div class="col-xs-6 pad0"><input id="signUp_familyBkg_fatherProfService" type="checkbox"/>&nbsp;Service</div>
					<div class="col-xs-6 pad0"><input id="signUp_familyBkg_fatherProfRetired" type="checkbox"/>&nbsp;Retired</div>
				  </div>
				</div>
				<div class="form-group">
				  <label>Residential Address <span class="mandatoryField">*</span></label>
				  <textarea id="signUp_familyBkg_fatherResAddress" class="form-control" placeholder="Enter your Residential Address"></textarea>
				</div>
				<div class="form-group">
				  <label>State <span class="mandatoryField">*</span></label>
				  <select id="signUp_familyBkg_fatherState" class="form-control">
					<option value="">Select your State</option>
				  </select>
				</div>
				<div class="form-group">
				   <label>Country <span class="mandatoryField">*</span></label>
				   <select id="signUp_familyBkg_fatherCountry" class="form-control">
					  <option value="">Select your Country</option>
				   </select>
				</div>
				<div align="right" class="form-group">
				  <input id="signUp_familyBkg_fatherStaysWith" type="checkbox"/>&nbsp;Stays with Son / Daughter Residence
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
				  <label>Mother Name <span class="mandatoryField">*</span></label>
				  <input id="signUp_familyBkg_motherName" type="text" class="form-control" placeholder="Enter your Mother Name"/>
				</div>
				<div class="form-group">
				  <label>Occupation <span class="mandatoryField">*</span></label>
				  <input id="signUp_familyBkg_motherOccpn" type="text" class="form-control" placeholder="Enter your Occupation"/>
				</div>
				<div class="form-group">
				  <label>Profession <span class="mandatoryField">*</span></label>
				  <div class="col-xs-12 mbot10p">
					<div class="col-xs-4 pad0"><input id="signUp_familyBkg_motherProfService" type="checkbox"/>&nbsp;Service</div>
					<div class="col-xs-4 pad0"><input id="signUp_familyBkg_motherProfRetired" type="checkbox"/>&nbsp;Retired</div>
					<div class="col-xs-4 pad0"><input id="signUp_familyBkg_motherProfHouseWife" type="checkbox"/>&nbsp;HouseWife</div>
				  </div>
				</div>
				<div class="form-group">
				  <label>Residential Address <span class="mandatoryField">*</span></label>
				  <textarea id="signUp_familyBkg_motherResAddress" class="form-control" placeholder="Enter your Residential Address"></textarea>
				</div>
				<div class="form-group">
				  <label>State <span class="mandatoryField">*</span></label>
				  <select id="signUp_familyBkg_motherState" class="form-control">
					<option value="">Select your State</option>
				  </select>
				</div>
				<div class="form-group">
				   <label>Country <span class="mandatoryField">*</span></label>
				   <select id="signUp_familyBkg_motherCountry" class="form-control">
					  <option value="">Select your Country</option>
				   </select>
				</div>
				<div align="right" class="form-group">
				  <input id="signUp_familyBkg_motherStaysWith" type="checkbox"/>&nbsp;Stays with Son / Daughter Residence
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
				  <label>Number of Brothers <span class="mandatoryField">*</span></label>
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
				  <label>Number of Sisters <span class="mandatoryField">*</span></label>
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
				<div class="list-group">
				  <div class="list-group-item">
				    <div class="container-fluid pad0">
					  <label>BROTHER # 1</label>
					  <div class="col-xs-12 pad0">
						<div class="col-xs-4 pad0"><input id="signUp_familyBkg_brotherStudying" type="checkbox"/>&nbsp;Studying</div>
						<div class="col-xs-4 pad0"><input id="signUp_familyBkg_brotherEmployed" type="checkbox"/>&nbsp;Employed</div>
						<div class="col-xs-4 pad0"><input id="signUp_familyBkg_brotherMarried" type="checkbox"/>&nbsp;Married</div>
					  </div>
				    </div>
				  </div>
				</div>
				<div class="list-group">
				  <div class="list-group-item">
				    <div class="container-fluid pad0">
					  <label>SISTER # 1</label>
					  <div class="col-xs-12 pad0">
						<div class="col-xs-4 pad0"><input id="signUp_familyBkg_sisterStudying1" type="checkbox"/>&nbsp;Studying</div>
						<div class="col-xs-4 pad0"><input id="signUp_familyBkg_sisterEmployed1" type="checkbox"/>&nbsp;Employed</div>
						<div class="col-xs-4 pad0"><input id="signUp_familyBkg_sisterMarried1" type="checkbox"/>&nbsp;Married</div>
					  </div>
				    </div>
				  </div>
				  
				</div>
			</div>
		   </div>
		</div>
	  </div>
   