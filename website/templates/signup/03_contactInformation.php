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
   <div class="row">
    <div class="col-sm-6"><b>3. Contact Information</b></div>
    <div class="col-sm-6">
     <!-- -->
	 <div class="row">
	  <div class="col-sm-7">
	   <div class="progress" style="height:5px;margin-top:5px;margin-bottom:0px;">
		 <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" 
		 style="width:70%;line-height:15px;font-size:10px;font-weight:bold;background-color:#a965b5;color:#000;">
		 </div><!--/.progress-bar -->
	   </div><!--/.progress -->
	  </div><!--/.col-sm-7 -->
	  <div class="col-sm-5"><b>70% Completed</b></div>
	 </div><!--/.row -->
	<!-- -->
   </div><!--/.col-sm-6 -->
  </div><!--/.row -->
  </div><!--/.panel-heading -->
<div class="panel-body">
  <div class="container-fluid">
    <div class="row">
	  <div class="col-xs-12 col-md-12">
	    <div class="form-group">
			<label>Address&nbsp;<span class="font-red">*</span></label>
			<textarea id="signUp_contactI_address" class="form-control" placeholder="Enter your Address"></textarea>
		</div>
	  </div>
	</div>
    <div class="row">
	  <div class="col-xs-12 col-md-6">
		<div class="form-group">
			<label>Country&nbsp;<span class="font-red">*</span></label>
			<select id="signUp_contactI_country" class="form-control"
			onchange="javascript:build_stateOption('signUp_contactI_country','signUp_contactI_state');">
				<option value="">Select your Country</option>
			</select>
		</div>
	  </div>
	  <div class="col-xs-12 col-md-6">
		<div class="form-group">
		  <label>State&nbsp;<span class="font-red">*</span></label>
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
		  <label>Location&nbsp;<span class="font-red">*</span></label>
		  <select id="signUp_contactI_location" class="form-control"
		  onchange="javascript:build_minlocationOption('signUp_contactI_country','signUp_contactI_state','signUp_contactI_location','signUp_contactI_locality');">
			<option value="">Select your Location</option>
		  </select>
		</div>
	  </div>
	  <div class="col-xs-12 col-md-6">
		<div class="form-group">
		  <label>Locality&nbsp;<span class="font-red">*</span></label>
		  <select id="signUp_contactI_locality" class="form-control">
			<option value="">Select your Locality</option>
		  </select>
		</div>
	  </div>
	</div>
	<div class="row">
	  <div class="col-xs-12 col-md-6">
        <div class="form-group">
          <label>Mobile&nbsp;<span class="font-red">*</span></label>
          <input  id="signUp_contactI_mobile" type="text" class="form-control" placeholder="Enter your Mobile"/>
        </div>
	  </div>
	</div>
	<div class="row">
	  <div class="col-xs-12 col-md-4"></div>
	  <div class="col-xs-12 col-md-4">
		<div align="center" class="form-group">
		 <div class="btn-group">
		  <button class="btn btn-default" onclick="javascript:sel_signup_menu('signup_menu_birthAndCommunityBg');"><b>Back</b></button>
		  <button class="btn btn-primary" onclick="javascript:signup_contactInformation();"><b>Next</b></button>
		 </div>
		</div>
	  </div>
	  <div class="col-xs-12 col-md-4"></div>
	 </div> 
	  </div>
	</div>
 </div>
