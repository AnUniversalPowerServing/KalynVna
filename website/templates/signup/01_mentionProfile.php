<script type="text/javascript">
function load_autocomplete_surName(id){
 var surName = document.getElementById(id).value;
 js_ajax('GET',PROJECT_URL+'backend/php/dac/controller.module.app.authentication.php',
 { action:'GET_DATA_SURNAME', searchQuery:surName },
 function(response){ console.log(response);response = response.split(','); 
     $( "#"+id ).autocomplete({ source: response });
 });
}
function load_autocomplete_highDegree(id){ 
 var highDegree = document.getElementById(id).value;
 js_ajax('GET',PROJECT_URL+'backend/php/dac/controller.module.app.authentication.php',
 { action:'GET_DATA_HIGHESTDEGREE', searchQuery:highDegree },
 function(response){ console.log(response);response = response.split(','); 
     $( "#"+id ).autocomplete({ source: response });
 });
}
function load_autocomplete_occupation(id){
 var occupation = document.getElementById(id).value;
 js_ajax('GET',PROJECT_URL+'backend/php/dac/controller.module.app.authentication.php',
 { action:'GET_DATA_OCCUPATION', searchQuery:occupation },
 function(response){ console.log(response);response = response.split(','); 
     $( "#"+id ).autocomplete({ source: response });
 });
}
function sentenceCase_SurName(str){
  document.getElementById("signUp_mentionProfile_surName").value=sentenceCase(str);
}
</script>

<div class="panel panel-primary mtop10p">
  <div class="panel-heading">
  <div class="row">
   <div class="col-sm-6"><b>1. Mention Profile</b></div>
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
		  <div class="form-group ui-widget">
			<label>You are creating Profile for &nbsp;<span class="font-red">*</span></label>
			<select id="signUp_mentionProfile_profileBelongsTo" class="form-control">
			 <option value="SELF">Self</option>
			</select>
		  </div>
		</div>
	  </div>
	  <div class="row"><hr/></div>
      <div class="row">
	    <div class="col-xs-12 col-md-6">
		  <div class="form-group ui-widget">
			<label>SurName&nbsp;<span class="font-red">*</span></label>
			<input id="signUp_mentionProfile_surName" type="text" class="form-control" 
			placeholder="Enter your SurName" onchange="sentenceCase_SurName(this.value)"/>
		  </div>
		</div>
		<div class="col-xs-12 col-md-6">
		  <div class="form-group">
			<label>Name&nbsp;<span class="font-red">*</span></label>
			<input id="signUp_mentionProfile_name" type="text" class="form-control" placeholder="Enter your Name"/>
		  </div>
		</div> 
	  </div>
	  <div class="row">
	    <div class="col-xs-12 col-md-6">
		  <div class="form-group">
			<label>Gender&nbsp;<span class="font-red">*</span></label>
			<select id="signUp_mentionProfile_gender" class="form-control">
				<option value="">Select your Gender</option>
				<option value="Male">Male</option>
				<option value="Female">Female</option>
			</select>
		  </div>
		</div> 
		<div class="col-xs-12 col-md-6">
		  <div class="form-group">
			<label>Mother Tongue&nbsp;<span class="font-red">*</span></label>
			<select id="signUp_mentionProfile_motherTongue" class="form-control">
				<option value="">Select your Mother Tongue</option>
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
	  </div> 
	  <div class="row">
	    <div class="col-xs-12 col-md-6">
		   <div class="form-group">
			  <label>Status&nbsp;<span class="font-red">*</span></label>
			  <select id="signUp_mentionProfile_status" class="form-control">
				<option value="">Select your Status</option>
				<option value="UnMarried">UnMarried</option>
				<option value="Divorced">Divorced</option>
				<option value="Widow">Widow</option>
			  </select>
		   </div>
		</div>
		<div class="col-xs-12 col-md-6">
		   <div class="form-group">
			  <label>Height</label>
			  <div class="col-xs-12 pad0 mbot15p">
				<div class="col-xs-6 pad0">
				  <select id="signUp_mentionProfile_hgtFeet" class="form-control">
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
				  <select id="signUp_mentionProfile_hgtInches" class="form-control">
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
		</div>
		</div>
		<div class="row">
		<div class="col-xs-12 col-md-6">
		  <div class="form-group">
			<label>Occupation&nbsp;<span class="font-red">*</span></label>
			<input id="signUp_mentionProfile_occupation" type="text" class="form-control" 
			placeholder="Enter your Occupation"/>
		  </div>
		  <div class="form-group">
			<label>Occupation Type&nbsp;<span class="font-red">*</span></label>
			<select id="signUp_mentionProfile_occupationType" class="form-control">
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
			 <label>Highest Degree&nbsp;<span class="font-red">*</span></label>
			 <input id="signUp_mentionProfile_highestDegree" type="text" class="form-control" 
			 placeholder="Enter your Highest Degree"/>
		  </div>	
		</div>
		<div class="col-xs-12 col-md-6">
		  <div class="form-group">
			<label>Your Living Status&nbsp;<span class="font-red">*</span></label>
			<select id="signUp_mentionProfile_livingstatus" class="form-control">
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
		    <button class="btn btn-primary" onclick="javascript:signup_mentionProfile();"><b>Next</b></button>
		  </div>
		</div>
		<div class="col-xs-12 col-md-4"></div>
	  </div>
    </div>	
  </div>
</div>