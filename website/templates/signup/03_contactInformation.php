<!--
signUp_contactI_address
signUp_contactI_country
signUp_contactI_state
signUp_contactI_location
signUp_contactI_locality
signUp_contactI_mobile
-->
<div class="panel panel-primary mtop10p">
<div class="panel-heading">
<b>3. Contact Information</b>
</div>
<div class="panel-body">
  <div class="container-fluid">
    <div class="row">
	  <div class="col-xs-12 col-md-12">
	    <div class="form-group">
			<label>Address <span class="mandatoryField">*</span></label>
			<textarea id="signUp_contactI_address" class="form-control" placeholder="Enter your Address"></textarea>
		</div>
	  </div>
	</div>
    <div class="row">
	  <div class="col-xs-12 col-md-6">
		<div class="form-group">
			<label>Country <span class="mandatoryField">*</span></label>
			<select id="signUp_contactI_country" class="form-control"
			onchange="javascript:build_stateOption('signUp_contactI_country','signUp_contactI_state');">
				<option value="">Select your Country</option>
			</select>
		</div>
	  </div>
	  <div class="col-xs-12 col-md-6">
		<div class="form-group">
		  <label>State <span class="mandatoryField">*</span></label>
		  <select id="signUp_contactI_state" class="form-control"
		  onchange="javascript:build_locationOption('signUp_contactI_country','signUp_contactI_state','signUp_contactI_location');">
			<option value="">Select your State</option>
		  </select>
		</div>
	 </div>
	</div>
	<div class="row">
	  <div class="col-xs-12 col-md-6">
		<div class="form-group">
		  <label>Location <span class="mandatoryField">*</span></label>
		  <select id="signUp_contactI_location" class="form-control"
		  onchange="javascript:build_minlocationOption('signUp_contactI_country','signUp_contactI_state','signUp_contactI_location','signUp_contactI_locality');">
			<option value="">Select your Location</option>
		  </select>
		</div>
	  </div>
	  <div class="col-xs-12 col-md-6">
		<div class="form-group">
		  <label>Locality <span class="mandatoryField">*</span></label>
		  <select id="signUp_contactI_locality" class="form-control">
			<option value="">Select your Locality</option>
		  </select>
		</div>
	  </div>
	</div>
	<div class="row">
	  <div class="col-xs-12 col-md-6">
        <div class="form-group">
          <label>Mobile <span class="mandatoryField">*</span></label>
          <input  id="signUp_contactI_mobile" type="text" class="form-control" placeholder="Enter your Mobile"/>
        </div>
	  </div>
	</div>
	<div class="row">
	  <div class="col-xs-12 col-md-4"></div>
	  <div class="col-xs-12 col-md-4">
		<div class="form-group">
		  <button class="btn btn-primary form-control" onclick="javascript:signup_contactInformation();"><b>Next</b></button>
		</div>
	  </div>
	  <div class="col-xs-12 col-md-4"></div>
	 </div> 
	  </div>
	</div>
 </div>
