
<div class="panel panel-primary mtop10p">
  <div class="panel-heading"> 
   <div class="row">
    <div class="col-sm-6"><b>2. Birth, Zodiac and Community Background</b></div>
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
	     <div class="col-xs-12 col-md-6">
		    <div class="form-group">
			  <label>Date and Time of Birth&nbsp;<span class="font-red">*</span></label>
			  <div class="col-xs-12 mbot10p pad0">
				<div class="col-xs-6 pad0">
				  <input type="date" id="signUp_bzc_birthDate" class="form-control"/>
				</div>
				<div class="col-xs-6 pad0">
				  <input type="time" id="signUp_bzc_birthTime" class="form-control"/>
				</div>
			  </div>
			</div>
		 </div>
		 <div class="col-xs-12 col-md-6">
			<div class="form-group">
			  <label>Born in Country</label>
			  <select id="signUp_bzc_birthCountry" class="form-control" 
			  onchange="javascript:build_stateOption('signUp_bzc_birthCountry','signUp_bzc_birthState');">
				<option value="">Select your Country</option>
			  </select>
			</div>
		  </div>
	  </div>
	  <div class="row">
	     <div class="col-xs-12 col-md-6">
		   <div class="form-group">
			  <label>Shakha&nbsp;<span class="font-red">*</span></label>
			  <select id="signUp_bzc_shakha" class="form-control" 
				onchange="display_list_upaShakha('signUp_bzc_shakha','signUp_bzc_upaShakha');">
				<option value="">Select your Shakha</option>
			  </select>
           </div>
		 </div>
		 <div class="col-xs-12 col-md-6">
		   <div class="form-group">
			  <label>Born in State</label>
			  <select id="signUp_bzc_birthState" class="form-control"
			  onchange="javascript:build_locationOption('signUp_bzc_birthCountry','signUp_bzc_birthState','signUp_bzc_birthLocation');">
				<option value="">Select your State</option>
			  </select>
			</div>
		 </div>
	  </div>
	  <div class="row">
	     <div class="col-xs-12 col-md-6">
		   <div class="form-group">
			  <label>UpaShakha&nbsp;<span class="font-red">*</span></label>
			  <select id="signUp_bzc_upaShakha" class="form-control">
				<option value="">Select your UpaShakha</option>
			  </select>
		   </div>
		 </div>
		 <div class="col-xs-12 col-md-6">
		   <div class="form-group">
			  <label>Born in Location</label>
			  <select id="signUp_bzc_birthLocation" class="form-control"
			  onchange="javascript:build_minlocationOption('signUp_bzc_birthCountry','signUp_bzc_birthState','signUp_bzc_birthLocation','signUp_bzc_birthLocality');">>
				<option value="">Select your Location</option>
			  </select>
		   </div>
		 </div>
	  </div>
	  <div class="row">
	     <div class="col-xs-12 col-md-6">
		   <div class="form-group">
			  <label>Gothram&nbsp;<span class="font-red">*</span></label>
			  <select id="signUp_bzc_gothram" class="form-control">
				<option value="">Select your Gothram</option>
			  </select>
		   </div>
		 </div>
		 <div class="col-xs-12 col-md-6">
		   <div class="form-group">
			  <label>Born in Locality</label>
			  <select id="signUp_bzc_birthLocality" class="form-control">
				<option value="">Select your Locality</option>
			  </select>
		   </div>
		 </div>
	  </div>
	  <div class="row">
	     <div class="col-xs-12 col-md-6">
		    <div class="form-group">
			  <label>Raasi (Zodaic Sign)&nbsp;<span class="font-red">*</span></label>
			  <select id="signUp_bzc_raasi" class="form-control" 
					onchange="javascript:display_list_Nakshatra('signUp_bzc_raasi','signUp_bzc_nakshatra');">
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
		 </div>
		 <div class="col-xs-12 col-md-6">
		    <div class="form-group">
			  <label>Star (Nakshatra)&nbsp;<span class="font-red">*</span></label>
			  <select id="signUp_bzc_nakshatra" class="form-control">
				<option value="">Select your Star (Nakshatra)</option>
			  </select>
			</div>
		 </div>
	  </div>
	  <div class="row">
	    <div class="col-xs-12 col-md-4"></div>
		<div class="col-xs-12 col-md-4">
          <div align="center" class="form-group">
		    <div class="btn-group">
		    <button class="btn btn-default" onclick="javascript:sel_signup_menu('signup_menu_mentionprofile');"><b>Back</b></button>
			<button class="btn btn-primary" onclick="javascript:signup_birthZodiacCommunity();"><b>Next</b></button>
			</div>
		  </div>
	    </div>
		<div class="col-xs-12 col-md-4"></div>
	  </div>	  

	     </div>
	  </div>
	</div>