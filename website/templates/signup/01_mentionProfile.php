<script>
  $(function() {
    var availableTags = ["ActionScript","AppleScript","Asp","BASIC","C","C++","Clojure","COBOL","ColdFusion","Erlang",
			"Fortran","Groovy","Haskell","Java","JavaScript","Lisp","Perl","PHP","Python","Ruby","Scala","Scheme"];
    $( "#signUp_mentionProfile_surName" ).autocomplete({ source: availableTags });
  });
function sentenceCase(str) {
 var response='';
  for(var index=0;index<str.length;index++){
    if(index==0){ response+=str.charAt(index).toUpperCase(); }
	else { response+=str.charAt(index).toLowerCase();  }
  }
 return response;
}
function sentenceCase_SurName(str){
  document.getElementById("signUp_mentionProfile_surName").value=sentenceCase(str);
}
</script>
<h4 style="color:#000;padding:8px;border-bottom:1px solid #c0c0c0;margin-bottom:25px;">
  1. Mention your Profile
</h4>
<div class="form-group ui-widget">
  <label>SurName <span class="mandatoryField">*</span></label>
  <input id="signUp_mentionProfile_surName" type="text" class="form-control" placeholder="Enter your SurName" onchange="sentenceCase_SurName(this.value)"/>
</div>
<div class="form-group">
  <label>Name <span class="mandatoryField">*</span></label>
  <input type="text" class="form-control" placeholder="Enter your Name"/>
</div>
<div class="form-group">
  <label>Gender <span class="mandatoryField">*</span></label>
  <select class="form-control">
	<option value="">Select your Gender</option>
    <option value="Male">Male</option>
	<option value="Female">Female</option>
  </select>
</div>
<div class="form-group">
   <label>Mother Tongue <span class="mandatoryField">*</span></label>
   <select class="form-control">
	 <option value="">Select your Mother Tongue</option>
	 <option value="Telugu">Telugu</option>
	 <option value="Hindi">Hindi</option>
   </select>
</div>
<div class="form-group">
   <label>Status <span class="mandatoryField">*</span></label>
   <select class="form-control">
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
<div class="form-group">
  <label>About Me <span class="mandatoryField">*</span></label>
  <textarea class="form-control" placeholder="Say something about Me"></textarea>
</div>
<div class="form-group">
  <label>Your Skintone<span class="mandatoryField">*</span></label>
  <select class="form-control">
	<option value="">Choose your Color</option>
  </select>
</div>