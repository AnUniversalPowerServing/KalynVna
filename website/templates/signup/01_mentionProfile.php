<script type="text/javascript">
  $(function() {
    var availableTags = ["ActionScript","AppleScript","Asp","BASIC","C","C++","Clojure","COBOL","ColdFusion","Erlang",
			"Fortran","Groovy","Haskell","Java","JavaScript","Lisp","Perl","PHP","Python","Ruby","Scala","Scheme"];
    $( "#signUp_mentionProfile_surName" ).autocomplete({ source: availableTags });
  });
function sentenceCase_SurName(str){
  document.getElementById("signUp_mentionProfile_surName").value=sentenceCase(str);
}
</script>

<div class="panel panel-primary mtop10p">
  <div class="panel-heading"><b>1. Mention Profile</b></div>
  <div class="panel-body">
    <div class="container-fluid">
      <div class="row">
	    <div class="col-xs-12">
		  <div class="form-group ui-widget">
			<label>SurName <span class="mandatoryField">*</span></label>
			<input id="signUp_mentionProfile_surName" type="text" class="form-control" 
			placeholder="Enter your SurName" onchange="sentenceCase_SurName(this.value)"/>
		  </div>
		  
		  <div class="form-group">
			<label>Name <span class="mandatoryField">*</span></label>
			<input id="signUp_mentionProfile_name" type="text" class="form-control" placeholder="Enter your Name"/>
		  </div>

		  <div class="form-group">
			<label>Gender <span class="mandatoryField">*</span></label>
			<select id="signUp_mentionProfile_gender" class="form-control">
				<option value="">Select your Gender</option>
				<option value="Male">Male</option>
				<option value="Female">Female</option>
			</select>
		  </div>
		  
		  <div class="form-group">
			<label>Mother Tongue <span class="mandatoryField">*</span></label>
			<select id="signUp_mentionProfile_motherTongue" class="form-control">
				<option value="">Select your Mother Tongue</option>
				<option value="Telugu">Telugu</option>
				<option value="Hindi">Hindi</option>
			</select>
		   </div>
		  
		   <div class="form-group">
			  <label>Status <span class="mandatoryField">*</span></label>
			  <select id="signUp_mentionProfile_status" class="form-control">
				<option value="">Select your Status</option>
				<option value="UnMarried">UnMarried</option>
				<option value="Divorced">Divorced</option>
				<option value="Widow">Widow</option>
			  </select>
		   </div>

		   <div class="form-group">
			  <label>Height <span class="mandatoryField">*</span></label>
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
		  
		  <div class="form-group">
			 <label>Highest Degree <span class="mandatoryField">*</span></label>
			 <input id="signUp_mentionProfile_highestDegree" type="text" class="form-control" 
			 placeholder="Enter your Highest Degree"/>
		  </div>	
		  
		  <div class="form-group">
			<label>Occupation <span class="mandatoryField">*</span></label>
			<input id="signUp_mentionProfile_occupation" type="text" class="form-control" 
			placeholder="Enter your Occupation"/>
		  </div>
		  
		  <div class="form-group">
			<label>Occupation Type <span class="mandatoryField">*</span></label>
			<select id="signUp_mentionProfile_occupationType" class="form-control">
			    <option value="">Select Occupation Type</option>
				<option value="Private Company">Private Company</option>
				<option value="Government / Public Sector">Government / Public Sector</option>
				<option value="Defence / Civil Services">Defence / Civil Services</option>
				<option value="Business / Self Employeed">Business / Self Employeed</option>
			</select>
		  </div>
		  
		  <div class="form-group">
		    <button class="btn btn-primary pull-right" onclick="javascript:signup_mentionProfile();"><b>Next</b></button>
		  </div>
		</div>
	  </div>
    </div>	
  </div>
</div>