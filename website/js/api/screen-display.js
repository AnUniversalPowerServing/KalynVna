/** Global Variables */
var infoMenu_gender = ["Male","Female"];
var infoMenu_ageDiff=["21-25","26-30","31-35","36-40","41-45"];
var infoMenu_martialStatus = ["UnMarried","Divorced","Widow"];
var infoMenu_profession = ["Accountant","Teacher","Physician","Engineer","Laborer","Technician","Lawyer","Veterinary Physician","Psychologist","Pharmacist",
						   "Dietitian","Midwife","Surveyor","Mechanic","Electrician","Architect","Software Engineer","Butcher","Surgeon","Radiographer",
						   "Health Professional","Actor","Consultant","Dentist","Designer","Judge","Secretary","Police"];
var infoMenu_occupationType = ["Private Company","Government / Public Sector","Defence / Civil Services","Business / Self Employeed"];
var infoMenu_motherTongue = ["Hindi","Bengali","Marathi","Telugu","Tamil","Gujarati","Urdu","Kannada","Odia","Malayalam","Punjabi","Assamese","Maithili"];

function bootstrap_formField_alert(type, div_Id, message){
  var alertMessage = 'success'; if(type==='error'){ alertMessage = 'danger'; }
  var content='<div class="alert alert-'+alertMessage+' alert-dismissible" style="margin-bottom:0px;">';
      content+='<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> <strong>Alert!</strong><br/> '+message+'</div>';
	  content+='</div>';
  document.getElementById(div_Id).innerHTML=content;
}

function toSentenceCase(val){
 return val.charAt(0).toUpperCase() + val.substr(1).toLowerCase();	
}

function toCamelCase(val){
 return val.charAt(0).toUpperCase() + val.substr(1);	
}

function validateGender(id){
 var gender = $('#'+id).val();
 var isValid = false;
 if(gender.length>0){
	bootstrap_formField_trigger('success',id);
	isValid = true;
 } else {
	 bootstrap_formField_trigger('error',id);
 }
 return isValid;
}	

function validateAgeDiff(id){
 var ageDiff = $('#'+id).val();
 var isValid = false;
 if(ageDiff.length>0){
	bootstrap_formField_trigger('success',id);
	isValid = true;
 } else {
	 bootstrap_formField_trigger('error',id);
 }
 return isValid;
}

function validateMartialStatus(id){
 var martialStatus = $('#'+id).val();
 var isValid = false;
 if(martialStatus.length>0){
	bootstrap_formField_trigger('success',id);
	isValid = true;
 } else {
	 bootstrap_formField_trigger('error',id);
 }
 return isValid;
}

function validateMartialStatus(id){
 var martialStatus = $('#'+id).val();
 var isValid = false;
 if(martialStatus.length>0){
	bootstrap_formField_trigger('success',id);
	isValid = true;
 } else {
	 bootstrap_formField_trigger('error',id);
 }
 return isValid;
}

function validateCountry(id){
 var country = $('#'+id).val();
 var isValid = false;
 if(country.length>0){
	bootstrap_formField_trigger('success',id);
	isValid = true;
 } else {
	 bootstrap_formField_trigger('error',id);
 }
 return isValid;
}

function validateState(id){
 var state = $('#'+id).val();
 var isValid = false;
 if(state.length>0){
	bootstrap_formField_trigger('success',id);
	isValid = true;
 } else {
	 bootstrap_formField_trigger('error',id);
 }
 return isValid;
}

function validateOccupationType(id){
 var occupationType = $('#'+id).val();
 var isValid = false;
 if(occupationType.length>0){
	bootstrap_formField_trigger('success',id);
	isValid = true;
 } else {
	 bootstrap_formField_trigger('error',id);
 }
 return isValid;
}

function validateProfession(id){
 var profession = $('#'+id).val();
 var isValid = false;
 if(profession.length>0){
	bootstrap_formField_trigger('success',id);
	isValid = true;
 } else {
	 bootstrap_formField_trigger('error',id);
 }
 return isValid;
}

function validateMotherTongue(id){
 var motherTongue = $('#'+id).val();
 var isValid = false;
 if(motherTongue.length>0){
	bootstrap_formField_trigger('success',id);
	isValid = true;
 } else {
	 bootstrap_formField_trigger('error',id);
 }
 return isValid;
}

function display_selOpt_occupationType(id, onChange, defaultMessage){
 var content='<select id="'+id+'" class="form-control" onClick="javascript:'+onChange+';">';
	 content+='<option value="">'+defaultMessage+'</option>';
	 for(var index=0;index<infoMenu_occupationType.length;index++){
	  content+='<option value="'+infoMenu_occupationType[index]+'">'+infoMenu_occupationType[index]+'</option>';
	 }
	content+='</select>';
 return content;
}		

function display_selOpt_motherTongue(id, onChange, defaultMessage){
 var content='<select id="'+id+'" class="form-control" onchange="javascript:'+onChange+'">';
 content+='<option value="">'+defaultMessage+'</option>';
 for(var index=0;index<infoMenu_motherTongue.length;index++){
  content+='<option value="'+infoMenu_motherTongue[index]+'">'+infoMenu_motherTongue[index]+'</option>';
 }
 content+='</select>';
 return content;
}

function display_selOpt_martialStatus(id, onChange, defaultMessage){
var content='<select id="'+id+'" class="form-control" onClick="javascript:'+onChange+'">';
 content+='<option value="">'+defaultMessage+'</option>';
 for(var index=0;index<infoMenu_martialStatus.length;index++){
  content+='<option value="'+infoMenu_martialStatus[index]+'">'+infoMenu_martialStatus[index]+'</option>';
 }
 content+='</select>';
 return content;
}

function display_selOpt_gender(id, onChange, defaultMessage){
 var content='<select id="'+id+'" class="form-control" onClick="javascript:'+onChange+';">';
 content+='<option value="">'+defaultMessage+'</option>';
 for(var index=0;index<infoMenu_gender.length;index++){
  content+='<option value="'+infoMenu_gender[index]+'">'+infoMenu_gender[index]+'</option>';
 }
 content+='</select>';
 return content;
}

function display_selOpt_ageDiff(id, onChange, defaultMessage){
 var content='<select id="'+id+'" class="form-control" onClick="javascript:'+onChange+';">';
 content+='<option value="">'+defaultMessage+'</option>';
 for(var index=0;index<infoMenu_ageDiff.length;index++){
  content+='<option value="'+infoMenu_ageDiff[index]+'">'+infoMenu_ageDiff[index]+'</option>';
 }
 content+='</select>';
 return content;
}

function display_selOpt_occupationType(id, onChange, defaultMessage){
 var content='<select id="'+id+'" class="form-control" onClick="javascript:'+onChange+'">';
 content+='<option value="">'+defaultMessage+'</option>';
 for(var index=0;index<infoMenu_occupationType.length;index++){
 content+='<option value="'+infoMenu_occupationType[index]+'">'+infoMenu_occupationType[index]+'</option>';
 }
 content+='</select>';
 return content;
}

function display_selOpt_profession(id, onChange, defaultMessage){
 var content='<select id="'+id+'" class="form-control" onClick="javascript:'+onChange+';">';
 content+='<option value="">'+defaultMessage+'</option>';
 for(var index=0;index<infoMenu_profession.length;index++){
  content+='<option value="'+infoMenu_profession[index]+'">'+infoMenu_profession[index]+'</option>';
 }
 content+='</select>';
 return content;
}

function display_checkedList_gender(prefix_Id, filterData, onChecked){
 var content='';
 for(var index=0;index<infoMenu_gender.length;index++){
  var gender = infoMenu_gender[index];
  content+='<div><input id="browseMatrimonyFilter_gender_'+toCamelCase(gender)+'" type="checkbox" value="'+gender+'" ';
  if(filterData.gender.includes(gender)){ content+='checked '; }
  content+='onclick="javascript:'+onChecked+'"/>&nbsp;'+gender+'</div>'; // onclick="javascript:load_data_profile();"
 }
 return content;
}

function display_checkedList_ageDiff(prefix_Id, filterData, onChecked){
 var content='';
 for(var index=0;index<infoMenu_ageDiff.length;index++){
  var ageDiff = infoMenu_ageDiff[index];
  content+='<div><input id="browseMatrimony_age_'+ageDiff.replace("-", "_")+'" type="checkbox" value="'+ageDiff+'" ';
  if(filterData.ageDiff.includes(ageDiff)){ content+='checked '; }
  content+='onclick="javascript:'+onChecked+';"/>&nbsp;'+ageDiff+'</div>';
 }
 return content;
}	   

function display_checkedList_martialStatus(prefix_Id, filterData, onChecked){
 var content='';
 for(var index=0;index<infoMenu_martialStatus.length;index++){
  var martialStatus = infoMenu_martialStatus[index];
  content+='<div><input id="browseMatrimony_status_'+toCamelCase(martialStatus)+'" type="checkbox" value="'+martialStatus+'" ';
  if(filterData.martialStatus.includes(martialStatus)){ content+='checked '; }
	content+='onclick="javascript:'+onChecked+';"/>&nbsp;'+martialStatus+'</div>';
  }
 return content;
}

function display_checkedDropDown_occupationType(prefix_Id, filterData, onChecked){
 var content='<div class="form-group">';
	 content+='<label>Occupation Type</label>';
	 content+='<div class="dropdown">';
	 content+='<button align="left" class="btn btn-default form-control dropdown-toggle" type="button" data-toggle="dropdown"><span class="f12">';
	 if(filterData.occupationType.length>0){ content+=filterData.occupationType[0]; } 
	 else { content+='Select Profession'; }
	 content+='</span>&nbsp;';
	 content+='<span class="caret pull-right mtop8p"></span></button>';
	 content+='<ul class="dropdown-menu">';
	 for(var index=0;index<infoMenu_occupationType.length;index++){
	   var occupationType = infoMenu_occupationType[index];
	   content+='<li><a href="#">';
	   content+='<div><input id="browseMatrimony_occupationType_'+toCamelCase(occupationType)+'" type="checkbox" value="'+occupationType+'" ';
	   if(filterData.occupationType.includes(occupationType)){ content+='checked '; }
	   content+='onclick="javascript:'+onChecked+';"/>&nbsp;'+occupationType+'</div>';
	   content+='</a></li>';
	 }
	 content+='</ul>';
	 content+='</div>';
	 content+='</div>';
  return content;
}

function display_checkedDropDown_profession(prefix_Id, filterData, onChecked){
 var content='<div class="form-group">';
	 content+='<label>Profession</label>';
	 content+='<div class="dropdown">';
	 content+='<button align="left" class="btn btn-default form-control dropdown-toggle" type="button" data-toggle="dropdown"><span class="f12">';
	 if(filterData.profession.length>0){  content+=filterData.profession; }
	 else { content+='Select Profession'; }
	 content+='</span>&nbsp;';
	 content+='<span class="caret pull-right mtop8p"></span></button>';
	 content+='<ul class="dropdown-menu">';
	 for(var index=0;index<infoMenu_profession.length;index++){
	  var profession = infoMenu_profession[index];
	  content+='<li><a href="#">';
	  content+='<div><input id="browseMatrimony_profession_'+toCamelCase(profession)+'" type="checkbox" value="'+profession+'" ';
	  if(filterData.profession.includes(profession)){ content+='checked '; }
	  content+='onclick="javascript:'+onChecked+';"/>&nbsp;'+profession+'</div>';
	  content+='</a></li>';
	 }
	 content+='</ul>';
	 content+='</div>';
	 content+='</div>';
  return content;
}

function display_checkedDropDown_motherTongue(prefix_Id, filterData, onChecked){
 var content='<div class="form-group">';
	 content+='<label>Mother Tongue</label>';
	 content+='<div class="dropdown">';
	 content+='<button align="left" class="btn btn-default form-control dropdown-toggle" type="button" data-toggle="dropdown"><span class="f12">';
	 if(filterData.motherTongue.length>0){  content+=filterData.motherTongue; }
	 else { content+='Select Mother Tongue'; }
	 content+='</span>&nbsp;';
	 content+='<span class="caret pull-right mtop8p"></span></button>';
	 content+='<ul class="dropdown-menu">';
	 for(var index=0;index<infoMenu_motherTongue.length;index++){
	  var motherTongue = infoMenu_motherTongue[index];
	  content+='<li><a href="#">';
	  content+='<div><input id="browseMatrimony_profession_'+toCamelCase(motherTongue)+'" type="checkbox" value="'+motherTongue+'" ';
	  if(filterData.motherTongue.includes(motherTongue)){ content+='checked '; }
	  content+='onclick="javascript:'+onChecked+';"/>&nbsp;'+motherTongue+'</div>';
	  content+='</a></li>';
	 }
	 content+='</ul>';
	 content+='</div>';
	 content+='</div>';
 return content;
}




class Commons {
  pageHeadingTitle(title){
	return ('<div><h5 style="border-bottom:2px solid #000;padding-bottom:10px;"><b>'+title+'</b></h5></div>');
  }
}

class ViewProfiles {
 unPublishedProfile(response){
  return('<div class="list-group" style="cursor:pointer;">'
  
		+'<div class="list-group-item pad0" style="background-color:#fff8f8;border:1px solid #f44336;">'
		
		+'<div style="margin-top:4px;">'
		+'<span style="text-transform:uppercase;letter-spacing:0.5px;font-weight:bold;background-color:#f44336;;padding:5px;color:#fff;font-size:10px;">'
		+'Not Published</span>'
		+'</div>'
		
		+'<div class="container-fluid mtop10p mbot15p">'
		+'<div class="row">'
		+'<div class="col-sm-12">'
		
		+'<div><h5 style="font-weight:700;font-size:1.20rem;letter-spacing:0.8px;">SurName FirstName LastName</h5></div>'
		+'<div style="color:#777;"><span style="padding:5px;letter-spacing:0.5px;"><i>Your Profile</i></span></div>'
		
		+'<div align="right" class="mtop15p">'
		+'<div style="color:#777;">&nbsp;Profile created on 06 October 2020, 12:30 PM</div>'
		+'<div style="color:#777;">&nbsp;Waiting to publish ...</div>'
		+'</div>'
		
		+'</div>'
		+'</div>'
		+'</div>'
		
		// +'<div><hr style="margin-top:5px;margin-bottom:5px;border:1px solid #ccc;"/></div>'
		// +'</div>'
		
		// +'<div class="list-group-item pad0" style="background-color:#ffebe9;border:1px solid #f44336;">'
		
		// +'<div class="container-fluid mbot10p">'
		// +'<div class="row">'
		// +'<div class="col-sm-12">'
		
		// +'<div class="row">'
		// +'<div class="col-sm-7">'
		
		// +'<div class="progress" style="height:5px;margin-top:5px;margin-bottom:0px;background-color:#ccc;">'
		// +'<div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"'
		// +'style="width:70%;line-height:15px;font-size:10px;font-weight:bold;background-color:#777;color:#000;">'
		
		// +'</div>'
		// +'</div>'
		
		// +'</div>'
		
		// +'<div class="col-sm-5"><b>70% Completed</b></div>'
		
		// +'</div>'
		
		// +'</div>'
		// +'</div>'
		// +'</div>'
		
		+'</div>'
		+'</div>');
 }
 publishedProfile(response){
  return('<div class="list-group" style="cursor:pointer;">'
  
		+'<div class="list-group-item pad0" style="background-color:#f4fff4;border:1px solid #009688;">'
		
		+'<div style="margin-top:4px;">'
		+'<span style="text-transform:uppercase;letter-spacing:0.5px;font-weight:bold;background-color:#21a726;padding:5px;color:#fff;font-size:10px;">'
		+'Published</span>'
		+'</div>'
		
		+'<div class="container-fluid mtop10p mbot15p">'
		+'<div class="row">'
		+'<div class="col-sm-12">'
		
		+'<div><h5 style="font-weight:700;font-size:1.20rem;letter-spacing:0.8px;">SurName FirstName LastName</h5></div>'
		+'<div style="color:#777;"><span style="padding:5px;letter-spacing:0.5px;"><i>Your Profile</i></span></div>'
		
		+'<div align="right" class="mtop15p">'
		+'<div style="color:#777;">&nbsp;Profile published on 06 October 2020, 12:30 PM</div>'
		+'<div style="color:#777;">&nbsp;Profile deactivates on 06 October 2020, 12:30 PM</div>'
		+'</div>'
		
		+'</div>'
		+'</div>'
		+'</div>'
		// +'<div><hr style="margin-top:5px;margin-bottom:5px;border:1px solid #ccc;"/></div>'
	    +'</div>'
		// +'<div class="list-group-item pad0" style="background-color:#d6ffd7;border:1px solid #009688;">'
		
		// +'<div class="container-fluid mtop5p" style="margin-bottom:3px;">'
		// +'<div class="row">'
		// +'<div align="center" class="col-sm-2">'
		// +'<i class="fa fa-thumbs-up" style="font-size:20px;color:#777;" aria-hidden="true"></i>'
		// +'</div>'
		// +'<div align="center" class="col-sm-2"><span style="color:#777;font-size:18px;">0</span></div>'
		// +'<div align="center" class="col-sm-2">'
		// +'<i class="fa fa-balance-scale" style="font-size:20px;color:#777;" aria-hidden="true"></i>'
		// +'</div>'
		// +'<div align="center" class="col-sm-2"><span style="color:#777;font-size:18px;">0</span></div>'
		// +'<div align="center" class="col-sm-2">'
		// +'<i class="fa fa-area-chart" style="font-size:20px;color:#777;" aria-hidden="true"></i>'
		// +'</div>'
		// +'<div align="center" class="col-sm-2"><span style="color:#777;font-size:18px;">0</span></div>'
		// +'</div>'
		// +'</div>'
		
		// +'</div>'
		
		+'</div>');
 }
 simpleProfile(response){
 /***
   =================
   TEST DATA:
   =================
   [{"account_Id":"CA1218751586147","logo":"images\/men.jpg","name":"Rakesh",
     "gender":"Male","motherTongue":"Telugu","status":"UnMarried","ft_hgt":"5",
	 "inch_hgt":"9","highDegree":"B-TECH ","occupation":"Software engineer",
	 "occupationType":"Private Company","living_status":"Living in India",
	 "exp_highDegree":"B-TECH \/ M-TECH \/ MCA \/ MBA","exp_occupation":" Govt. emplopyee \/ Software engineer ",
	 "exp_occupationType":"Government \/ Public Secto","exp_motherTongue":"Telugu",
	 "exp_living_status":"Living in India"}]
   -----------------
  **/
  var account_Id = response.account_Id;
  var name = response.name;
  var profile_pic = response.logo;
  var gender = response.gender;
  var motherTongue = response.motherTongue;
  var status = response.status;
  var favourites = response.favourites;
  var ft_hgt = response.ft_hgt;
  var inch_hgt = response.inch_hgt;
  var highDegree = response.highDegree;
  var occupation = response.occupation;
  var occupationType = response.occupationType;
  var living_status = response.living_status;
  var exp_highDegree = response.exp_highDegree;
  var exp_occupation = response.exp_occupation;
  var exp_occupationType = response.exp_occupationType;
  var exp_motherTongue = response.exp_motherTongue;
  var exp_living_status = response.exp_living_status;
  
  var content='<div class="col-sm-4">';
      content+='<div id="viewprofile'+account_Id+'" class="list-group">';
	  content+='<div class="list-group-item pad0">';
	  content+='<div class="container-fluid">';
	  // If Admin 
  if(ACCOUNT_TYPE.length>0 && ACCOUNT_TYPE==='ADMINISTRATOR'){
	  content+='<div class="row">';
	  content+='<div align="right" class="col-sm-12" style="color:#aaa;">';
	  content+='<i class="fa fa-edit" aria-hidden="true" ';
	  content+='onclick="javascript:urlTransfer(\''+PROJECT_URL+'customer/editprofile/'+account_Id+'\')"></i></a>&nbsp;';
	  content+='<i class="fa fa-close" aria-hidden="true" onclick="javascript:deleteAprofile(\''+account_Id+'\');"></i>';
	  content+='</div>';
	  content+='</div>';
  } else if(ACCOUNT_TYPE.length>0 && ACCOUNT_TYPE==='CUSTOMER'){
	  content+='<div class="row">';
	  content+='<div align="right" class="col-sm-12" style="color:#aaa;">';
	  if(favourites==undefined || favourites==='NO'){
	  content+='<i id="browseMatrimony-fav-'+account_Id+'" class="fa fa-star-o" aria-hidden="true" ';
	  content+='onclick="javascript:userBrowseMatrimonyFav(\''+account_Id+'\');"></i>&nbsp;';
      } else {
	  content+='<i id="browseMatrimony-fav-'+account_Id+'" class="fa fa-star" aria-hidden="true" ';
	  content+='style="color:#ff9800;" onclick="javascript:userBrowseMatrimonyFav(\''+account_Id+'\');"></i>&nbsp;';
      }
	  content+='</div>';
	  content+='</div>';
  }
	  // If Admin 
	  content+='<div class="row">';
	  content+='<div align="center" class="col-sm-6">';
	  content+='<img src="'+profile_pic+'" class="profile_pic_img mtop45p"/>';
	  content+='</div>';
	  content+='<div  align="center" class="col-sm-6 pad0">';
	 
	  content+='<div class="list-group mbot10p">';
	  content+='<div class="list-group-item bg-purple-dark" style="border:0px;padding:5px;border-top-left-radius:0px;"><b>SCAN AND VIEW</b></div>';
	  content+='<div class="list-group-item pad0" style="border:0px;background-color:#f8dbfd;border-top-left-radius:0px;border-bottom-right-radius:0px;">';
	 
	  content+='<div style="padding:5px;"><b>User Media Gallery at</b></div>';
	  content+='<img src="qrcode/'+account_Id+'" style="margin-top:-2px;"/>';
	  content+='<div style="padding:5px;"><b>Kalyanaveena.com <br/>MOBILE APP</b></div>';
	  content+='</div>';
	 
	  content+='</div>';
	  content+='</div>';
	 
	  content+='</div>';
	  content+='</div>';
	 
	  content+='</div>';
	  content+='<div align="center" class="list-group-item">';
	  content+='<b>'+name.toUpperCase()+'</b>'; 
	  content+='</div>';
	  content+='<div class="list-group-item pad0">';
	  content+='<div class="container-fluid mtop15p">';
	  content+='<div class="row">';
	  content+='<div align="center" class="col-sm-12">';
	  content+='<div class="table-responsive">';
	  content+='<table class="table">';
	  content+='<thead style="background-color:#e7e7e7;">';
	  content+='<tr>';
	  content+='<th>General</th>';
	  content+='<th>Details</th>';
	  content+='</tr>';
	  content+='</thead>';
	  content+='<tbody>';
	  content+='<tr><td><b>Gender</b></td><td>'+gender+'</td></tr>';
	  content+='<tr><td><b>Mother Tongue</b></td><td>'+motherTongue+'</td></tr>';
	  content+='<tr><td><b>Status</b></td><td>'+status+'</td></tr>';
	  content+='<tr><td><b>Highest Degree</b></td><td>'+highDegree+'</td></tr>';
	  content+='<tr><td><b>Occupation</b></td><td>'+occupation+'</td></tr>';
	  content+='<tr><td><b>Occupation Type</b></td><td>'+occupationType+'</td></tr>';
	  content+='<tr><td><b>Living Status</b></td><td>'+living_status+'</td></tr>';
	  content+='</tbody>';
	  content+='</table>';
	  content+='</div>';
      content+='</div>';
	  content+='</div>';
	  content+='</div>';
	  content+='</div>';
	  content+='<div align="center" class="list-group-item pad0" style="background-color:#e7e7e7;">';
	  content+='<h5><b>';
	  if(gender==='Male'){
	  content+='HE';
	  } else {
	  content+='SHE';
	  }
	  content+=' IS LOOKING FOR</b></h5>';
	  content+='</div>';
	  content+='<div align="center" class="list-group-item pad0">';
	  content+='<div class="container-fluid mtop15p">';
	  content+='<div class="row">';
	  content+='<div align="center" class="col-sm-12">';
	  content+='<div class="table-responsive">';        
	  content+='<table class="table">';
	  content+='<thead style="background-color:#e7e7e7;">';
	  content+='<tr><th>General</th><th>Details</th></tr>';
	  content+='</thead>';
	  content+='<tbody>';
	  content+='<tr><td><b>Mother Tongue</b></td><td>'+exp_motherTongue+'</td></tr>';
	  content+='<tr><td><b>Highest Degree</b></td><td>'+exp_highDegree+'</td></tr>';
	  content+='<tr><td><b>Occupation</b></td><td>'+exp_occupation+'</td></tr>';
	  content+='<tr><td><b>Occupation Type</b></td><td>'+exp_occupationType+'</td></tr>';
	  content+='<tr><td><b>Living Status</b></td><td>'+exp_living_status+'</td></tr>';
	  content+='</tbody>';
	  content+='</table>';
	  content+='</div>';
      content+='</div>';
	  content+='</div>';
	  content+='</div>';
	  content+='</div>';
	  content+='<div align="center" class="list-group-item pad0">';
	  content+='<div class="container-fluid pad0">';
	  content+='<div class="row">';
	  content+='<div class="col-sm-12">';
	  content+='<a href="'+PROJECT_URL+'app/user/'+account_Id+'">';
	  content+='<button class="btn btn-primary form-control"><b>View Profile</b></button>';
	  content+='</a>';
	  content+='</div>';
	  content+='</div>';
	  content+='</div>';
	  content+='</div>';
	  content+='</div>';
	  content+='</div>';	
  return content;
 }
}

class Dashboard {
 display(){
   return ('<div class="container-fluid mtop15p">'+
		   '<div class="row">'+
		   '<div class="col-md-12 col-xs-12">'+commons.pageHeadingTitle('My Dashboard')+'</div>'+
		   '</div>'+
		   '<div class="row mtop15p">'+
		   '<div class="col-md-3 col-xs-12">'+dashboard.menu()+'</div>'+
		   '<div class="col-md-9 col-xs-12">'+
		   '<div id="">'+dashboard.summaryContent()+'</div>'+
		   '</div>'+
		   '</div>'+
		   '</div>');
 }
 menu(){
   return ('<style>'+
		   '.nav-pills>li>a { border:1px solid #630062;color:#630062;background-color:#fff; }'+
		   '.nav-pills>li>a:hover { background-color:#e91e63;border:1px solid #e91e63;color:#fff;font-weight:bold; }'+
		   '</style>'+
		   '<ul class="nav nav-pills nav-stacked">'+
		   '<li class="active"><a href="#"><b>Summary</b></a></li>'+
		   '<li><a href="#"><b>Your Watched List</b></a></li>'+
		   '<li><a href="#"><b>Our Match Suggestions</b></a></li>'+
		   '<li><a href="#"><b>People watched you</b></a></li>'+
		   '</ul>'); 
 }
 summaryContent(){
   return ('<div>'+
		   '<div class="row">'+
		   '<div class="col-md-3 col-xs-12">'+dashboard.summary_display_creditBal()+'</div>'+
		   '<div class="col-md-4 col-xs-12">'+dashboard.summary_display_statistics_today()+'</div>'+
		   '<div class="col-md-4 col-xs-12">'+dashboard.summary_display_statistics_overall()+'</div>'+
           '</div>'+ 
		   '<div class="row">'+
		   '<div class="col-md-12 col-xs-12">'+commons.pageHeadingTitle('My Profiles')+'</div>'+
		   '</div>'+
		   '<div class="row mtop15p">'+
		   '<div class="col-md-4 col-xs-12">'+viewProfiles.publishedProfile('')+'</div>'+
		   '<div class="col-md-4 col-xs-12">'+viewProfiles.unPublishedProfile('')+'</div>'+
		   '</div>'+
		   '</div>');
 }
 summary_display_creditBal(){
   return ('<div>'+
		   '<div class="list-group">'+
		   '<div class="list-group-item" style="background-color:#f6fbc4;border:1px solid #bbce05;">'+
		   '<div>'+'<b>Your Balance</b>'+'</div>'+
		   '<div align="right">'+'<h4><b>1000 <span class="fs12">bucks</span></b></h4>'+'</div>'+
		   '</div>'+
		   '</div>'+
		   '<div class="list-group">'+
		   '<div class="list-group-item" style="background-color:#ffebaf;border:1px solid #ff9800;">'+
		   '<div>'+'<b>You can view complete details of profile you interested. But, to get Contact Details of it - You need Bucks</b>'+'</div>'+
		   '<div align="right"><button class="btn btn-default btn-xs"><b>Buy Bucks Now</b></button></div>'+
		   '</div>'+
		   '</div>'+
		   '</div>'
		   ); 
 }
 summary_display_horoscopeMatches(){
   return ('<div class="list-group">'+
		   '<div class="list-group-item">'+
		   '<div>'+'<b>Your Horoscope Matches</b>'+'</div>'+
		   '<div align="right">'+'<h4><b>1000 <span class="fs12">profiles</span></b></h4>'+'</div>'+
		   '</div>'+
		   '</div>'); 
 }
 summary_display_statistics_today(){
   return ('<div class="list-group">'+
		   '<div class="list-group-item" style="background-color:#ebceef;border:1px solid #673ab7;">'+'<b>Your Today\'s Statistics</b>'+'</div>'+
		   '<div class="list-group-item pad0" style="background-color:#f8e6fb;border:1px solid #673ab7;">'+
		   '<div>'+
		   '<table class="table mbot0">'+
		   '<tbody>'+
		   '<tr>'+
		   '<td><b>New Profile Created</b></td>'+
		   '<td>0</td>'+
		   '</tr>'+
		   '<tr>'+
		   '<td><b>Profiles you watched today</b></td>'+
		   '<td>0</td>'+
		   '</tr>'+
		   '<tr>'+
		   '<td><b>Your Horoscope matched profiles</b></td>'+
		   '<td>0</td>'+
		   '</tr>'+
		   '<tr>'+
		   '<td><b>People watched you</b></td>'+
		   '<td>0</td>'+
		   '</tr>'+
		   '<tr>'+
		   '<td><b>Bucks Spent</b></td>'+
		   '<td>0</td>'+
		   '</tr>'+
		   '</tbody>'+
		   '</table>'+
		   '</div>'+
		   '</div>'+
		   '</div>');  
 }
 summary_display_statistics_overall(){
   return ('<div class="list-group">'+
		   '<div class="list-group-item" style="background-color:#b4e5fb;border: 1px solid #2196F3;">'+'<b>Overall Statistics</b>'+'</div>'+
		   '<div class="list-group-item pad0" style="border: 1px solid #2196F3;background-color:#edf6fb;">'+
    
		   '<div>'+
		   '<table class="table mbot0">'+
		   '<tbody>'+
		   '<tr>'+
		   '<td><b>Profile Created</b></td>'+
		   '<td>0</td>'+
		   '</tr>'+
		   '<tr>'+
		   '<tr>'+
		   '<td><b>Profiles you watched today</b></td>'+
		   '<td>0</td>'+
		   '</tr>'+
		   '<tr>'+
		   '<td><b>Your Horoscope matched profiles</b></td>'+
		   '<td>0</td>'+
		   '</tr>'+
		   '<tr>'+
		   '<td><b>People watched you</b></td>'+
		   '<td>0</td>'+
		   '</tr>'+
		   '<tr>'+
		   '<td><b>Bucks Spent</b></td>'+
		   '<td>0</td>'+
		   '</tr>'+
		   '</tbody>'+
		   '</table>'+
		   '</div>'+
		   '</div>'+
		   '</div>');  
 } 
}

class CustomerSeekingForm { // HomePage
  isValidGender = false; isValidAgeDiff = false; isValidMartialStatus = false; 
  isValidOccupationType = false; isValidProfession = false; isValidMotherTongue = false;

  onChangeGender(){
	this.isValidGender = validateGender('customerSeekingForm_gender');
	customerSeekingForm.resetForm();
  }
  
  onChangeAgeDiff(){
	this.isValidAgeDiff = validateAgeDiff('customerSeekingForm_ageDiff');
	customerSeekingForm.resetForm();
  }
  
  onChangeMartialStatus(){
	this.isValidMartialStatus = validateMartialStatus('customerSeekingForm_martialStatus');
	customerSeekingForm.resetForm();
  }
  
  onChangeOccupationType(){
	this.isValidOccupationType= validateState('customerSeekingForm_occupationType');
	customerSeekingForm.resetForm();
  }
  
  onChangeProfession(){
	this.isValidProfession = validateState('customerSeekingForm_profession');
	customerSeekingForm.resetForm();
  }
  
  onChangeMotherTongue(){
	this.isValidMotherTongue = validateMotherTongue('customerSeekingForm_motherTongue');
	customerSeekingForm.resetForm();
  }
  
  resetForm(){
	document.getElementById("customerSeekingForm_alert").innerHTML='';
	bootstrap_formField_trigger('remove',["customerSeekingForm_gender","customerSeekingForm_ageDiff","customerSeekingForm_martialStatus",
	"customerSeekingForm_occupationType","customerSeekingForm_profession","customerSeekingForm_motherTongue"]);  
  }
  
  findMatch(){
	var gender = $('#customerSeekingForm_gender').val();
	var ageDiff = $('#customerSeekingForm_ageDiff').val();
	var martialStatus = $('#customerSeekingForm_martialStatus').val();
	var occupationType = $('#customerSeekingForm_occupationType').val();
	var profession = $('#customerSeekingForm_profession').val();
	var motherTongue = $('#customerSeekingForm_motherTongue').val();
	
	if(this.isValidGender || this.isValidAgeDiff || this.isValidMartialStatus
	  || this.isValidOccupationType || this.isValidProfession || this.isValidMotherTongue){
		// Call to BrowseMatrimony Page
		var filterData = { gender: [gender], ageDiff:[ageDiff], martialStatus:[martialStatus], 
						   occupationType:[occupationType], profession:[profession], motherTongue:[motherTongue] };
		sessionStorage.setItem("PAGE_BROWSEMATRIMONY", JSON.stringify(filterData));
		window.location.href=PROJECT_URL+'app/browseMatrimony';
	
	} else {
		var errorMsg='Missing';
		var display_errors=[];
		if(!this.isValidGender){ errorMsg+=' Gender,';display_errors[display_errors.length] = "customerSeekingForm_gender";  }
		if(!this.isValidAgeDiff){ errorMsg+=' Age,';display_errors[display_errors.length] = "customerSeekingForm_ageDiff";  }
		if(!this.isValidMartialStatus){ errorMsg+=' Martial Status,';display_errors[display_errors.length] = "customerSeekingForm_martialStatus";  }
		if(!this.isValidOccupationType){ errorMsg+=' Occupation Type,';display_errors[display_errors.length] = "customerSeekingForm_occupationType";  }
		if(!this.isValidProfession){ errorMsg+=' Profession,';display_errors[display_errors.length] = "customerSeekingForm_profession";  }
		if(!this.isValidMotherTongue){ errorMsg+=' MotherTongue,';display_errors[display_errors.length] = "customerSeekingForm_motherTongue";  }
		errorMsg = errorMsg.substring(0, errorMsg.length-2);
		bootstrap_formField_trigger('error',display_errors);
		bootstrap_formField_alert('error', 'customerSeekingForm_alert', 'Select atleast one Field');
	}
  }
  
  display(){
	var content='<div class="list-group">';
		content+='<div class="list-group-item pad0" style="color:#000;">';
		content+='<div class="container-fluid">';
		content+='<div align="left" class="col-xs-12 mtop10p" style="border-bottom:1px solid #ccc;padding:5px;">';
		content+='<h4>You are seeking for</h4>';
		content+='</div>';
		content+='<div id="customerSeekingForm_alert" class="col-xs-12 mtop10p"></div>'; // Alert Message
		content+='<div align="center" class="col-xs-12 mtop10p pad0"><b>PROFILE</b></div>';
		content+='<div class="col-xs-12 mtop10p pad0">';
		content+='<div class="col-xs-4 mtop5p"><b>Gender</b></div>';
		content+='<div class="col-xs-8">';
		content+='<div class="form-group">';
		content+=display_selOpt_gender('customerSeekingForm_gender', 'customerSeekingForm.onChangeGender()', 'You are looking for');
		content+='</div>';
		content+='</div>';
		content+='</div>';
		content+='<div class="col-xs-12 pad0">';
		content+='<div class="col-xs-4 mtop5p"><b>Age</b></div>';
		content+='<div class="col-xs-8">';
		content+='<div class="form-group">';
		content+=display_selOpt_ageDiff('customerSeekingForm_ageDiff', 'customerSeekingForm.onChangeAgeDiff()', 'You are looking for');
		content+='</div>';
		content+='</div>';
		content+='</div>';
		content+='<div class="col-xs-12 pad0">';
		content+='<div class="col-xs-4 mtop5p"><b>Martial Status</b></div>';
		content+='<div class="col-xs-8">';
		content+='<div class="form-group">';
		content+=display_selOpt_martialStatus('customerSeekingForm_martialStatus', 'customerSeekingForm.onChangeMartialStatus()', 'You are looking for');
		content+='</div>'; 
		content+='</div>';
		content+='</div>';
		
		content+='<div class="col-xs-12 pad0">';
		content+='<div class="col-xs-4 mtop5p"><b>Mother Tongue</b></div>';
		content+='<div class="col-xs-8">';
		content+='<div class="form-group">';
		content+=display_selOpt_motherTongue('customerSeekingForm_motherTongue', 'customerSeekingForm.onChangeMotherTongue()','You are looking for');
		content+='</div>';
		content+='</div>';
		content+='</div>';
		
		content+='<div align="center" class="col-xs-12 pad0">';
		content+='<b>LIVELIHOOD</b>';
		content+='</div>'; 
		
		content+='<div class="col-xs-12 mtop10p pad0">';
		content+='<div class="col-xs-4 mtop5p"><b>Occupation Type</b></div>';
		content+='<div class="col-xs-8">';
		content+='<div class="form-group">';
		content+=display_selOpt_occupationType('customerSeekingForm_occupationType', 'customerSeekingForm.onChangeOccupationType()', 'You are looking for');
		content+='</div>';
		content+='</div>';
		content+='</div>';
		content+='<div class="col-xs-12 pad0">';
		content+='<div class="col-xs-4 mtop5p"><b>Profession</b></div>';
		content+='<div class="col-xs-8">';
		content+='<div class="form-group">';
		content+=display_selOpt_profession('customerSeekingForm_profession', 'customerSeekingForm.onChangeProfession()', 'You are looking for');
		content+='</div>';
		content+='</div>';
		content+='</div>';
		
		content+='<div class="col-xs-12 pad0">';
		content+='<div class="col-xs-12">';
		content+='<button class="btn btn-success mbot15p form-control" onclick="javascript:customerSeekingForm.findMatch();"><b>Find Matches</b></button>';
		content+='</div>';
		content+='</div>';
		content+='<div align="center" class="col-xs-12">';
		content+='</div>';
		content+='</div>';
		content+='</div>';
		content+='</div>';
	return content;    
  }
	
}

class BrowseMatrimony { // All Filters of Application 
  gender=[];ageDiff=[];martialStatus=[];occupationType=[];profession=[];motherTongue=[];

  checkAndPushIntoArray(element_Id, paramArray){
  // Gets value from HTMLElement, checks whether it exists before and pushes into Array if it not exists
	var param_Id = document.getElementById(element_Id);
	var isExists = paramArray.includes(param_Id.value);
	if(param_Id.checked){ // add
	  if(!isExists){ paramArray.push(param_Id.value); } 
	} else { // remove
		if(isExists){ paramArray.splice(paramArray.indexOf(param_Id.value), 1); }
	}
  }
  
  onCheckedGender(id){
	browseMatrimony.checkAndPushIntoArray(id, this.gender);
	browseMatrimony.profileloader_display();
  }
  
  onCheckedAgeDiff(id){
	browseMatrimony.checkAndPushIntoArray(id, this.ageDiff);
	browseMatrimony.profileloader_display();
  }
  
  onCheckedMartialStatus(id){
	browseMatrimony.checkAndPushIntoArray(id, this.martialStatus);
	browseMatrimony.profileloader_display();
  }
  
  onCheckedOccupationType(id){
	browseMatrimony.checkAndPushIntoArray(id, this.occupationType);
	browseMatrimony.profileloader_display();
  }
  
  onCheckedProfession(id){
	browseMatrimony.checkAndPushIntoArray(id, this.profession);
	browseMatrimony.profileloader_display();
  }
  
  onCheckedMotherTongue(id){
	browseMatrimony.checkAndPushIntoArray(id, this.motherTongue);
	browseMatrimony.profileloader_display();
  }
  
  display(id,filterData){
	this.gender = filterData.gender;
	this.ageDiff = filterData.ageDiff;
	this.martialStatus = filterData.martialStatus;
	this.motherTongue = filterData.motherTongue;
	this.occupationType = filterData.occupationType;
	this.profession = filterData.profession;
	document.getElementById(id).innerHTML = browseMatrimony.displayFilter(filterData);
	browseMatrimony.profileloader_display();
  }
  
  displayFilter(filterData){ // BrowseMatrimony
   var content='<div><h5 style="border-bottom:2px solid #000;padding-bottom:10px;"><b>Filter Search</b></h5></div>';
	   content+='<div class="list-group">';
	   content+='<div class="list-group-item bg-purple" data-toggle="collapse" data-target="#filter_gender">';
	   content+='<b>Gender</b>&nbsp;<i class="fa fa-angle-double-down pull-right" aria-hidden="true"></i>';
	   content+='</div>';
	   content+='<div id="filter_gender" class="collapse ';
	   if(filterData.gender.length>0){ content+='in'; }
	   content+='">';
	   content+='<div class="list-group-item">';
	   content+=display_checkedList_gender('browseMatrimony_gender_', filterData, 'browseMatrimony.onCheckedGender(this.id)');
	   content+='</div>';
	   content+='</div>';
	   content+='<div class="list-group-item bg-purple" data-toggle="collapse" data-target="#filter_ageGroup">';
	   content+='<b>Age Group</b>&nbsp;<i class="fa fa-angle-double-down pull-right" aria-hidden="true"></i>';
	   content+='</div>';
	   content+='<div id="filter_ageGroup" class="collapse ';
	   if(filterData.ageDiff.length>0){ content+='in'; }
	   content+='">';
	   content+='<div class="list-group-item">';
	   content+=display_checkedList_ageDiff('browseMatrimony_ageDiff_', filterData, 'browseMatrimony.onCheckedAgeDiff(this.id)');
	   content+='</div>';
	   content+='</div>';
	   content+='<div class="list-group-item bg-purple" data-toggle="collapse" data-target="#filter_martialStatus">';
	   content+='<b>Martial Status</b>&nbsp;<i class="fa fa-angle-double-down pull-right" aria-hidden="true"></i>';
	   content+='</div>';
	   content+='<div id="filter_martialStatus" class="collapse ';
	   if(filterData.martialStatus.length>0){ content+='in'; }
	   content+='">';
	   content+='<div class="list-group-item">';
	   content+=display_checkedList_martialStatus('browseMatrimony_martialStatus_', filterData, 'browseMatrimony.onCheckedMartialStatus(this.id)');
	   content+='</div>';
	   content+='</div>';
	   content+='<div class="list-group-item bg-purple" data-toggle="collapse" data-target="#filter_occupationType">';
	   content+='<b>Occupation</b>&nbsp; <i class="fa fa-angle-double-down pull-right" aria-hidden="true"></i>';
	   content+='</div>';
	   content+='<div id="filter_occupationType" class="collapse ';
	   if(filterData.occupationType.length>0 || filterData.profession.length>0){ content+='in'; }
	   content+='">';
	   content+='<div class="list-group-item">';
	   content+=display_checkedDropDown_occupationType('browseMatrimony_occupationType_', filterData, 'browseMatrimony.onCheckedOccupationType(this.id)');
	   content+=display_checkedDropDown_profession('browseMatrimony_profession_',filterData, 'browseMatrimony.onCheckedProfession(this.id)');
	   content+='</div>';
	   content+='</div>';
	   content+='<div class="list-group-item bg-purple" data-toggle="collapse" data-target="#filter_motherTongue">';
	   content+='<b>Mother Tongue</b>&nbsp;<i class="fa fa-angle-double-down pull-right" aria-hidden="true"></i>';
	   content+='</div>';
	   content+='<div id="filter_motherTongue" class="collapse ';
	   if(filterData.motherTongue.length>0){ content+='in'; }
	   content+='">';
	   content+='<div class="list-group-item">';
	   content+=display_checkedDropDown_motherTongue('browseMatrimony_motherTongue_',filterData, 'browseMatrimony.onCheckedMotherTongue(this.id)');
	   content+='</div>';
	   content+='</div>';
	   content+='</div>';
	return content;
  }
  
  profileloader_display(){
	js_ajax('GET',PROJECT_URL+'backend/php/dac/controller.module.app.search.php',
       { action:'GET_COUNT_BROWSEMATRIMONYPROFILES', gender:this.gender, motherTongue:this.motherTongue, 
	     status:this.martialStatus, occupationType:this.occupationType, profession:this.profession, age:this.ageDiff }, 
	   function(total_data){ 
	     console.log(total_data);
		 total_data = JSON.parse(total_data);
		 if(total_data>0){
		  var content='';
		  if(total_data==1){ content='<b>Your Search Results:</b>&nbsp;'+total_data+'&nbsp;profile.'; }
		  else { content='<b>Your Search Results:</b>&nbsp;'+total_data+'&nbsp;profiles.'; }
		   document.getElementById("browse_results").innerHTML=content;
		   // scroll_loadInitializer('browse_result_content',9,browseMatrimony.profileloader_data,total_data);
		 } else {
		   var content='<div align="center" class="col-sm-12">';
		       content+='<span style="color:#ccc;">No Profile matches with your Search Results.</span>';
			   content+='</div>';
		   document.getElementById("browse_results").innerHTML='';
		   document.getElementById("browse_result_content0").innerHTML=content;
		 }
		 
	   });
  }
  
  profileloader_data(div_view, appendContent,limit_start,limit_end){ 
var arry_gender=[];
 if(browseMatrimony_male){ arry_gender[arry_gender.length]='Male'; }
 if(browseMatrimony_female){ arry_gender[arry_gender.length]='Female'; }
 var arry_age=[];
 if(browseMatrimony_age_21_25){ arry_age[arry_age.length]={"from":21,"to":25}; }
 if(browseMatrimony_age_26_30){ arry_age[arry_age.length]={"from":26,"to":30}; }
 if(browseMatrimony_age_31_35){ arry_age[arry_age.length]={"from":31,"to":35}; }
 if(browseMatrimony_age_36_40){ arry_age[arry_age.length]={"from":35,"to":40}; }
 if(browseMatrimony_age_41_45){ arry_age[arry_age.length]={"from":40,"to":45}; }
 var arry_status=[]; 
 if(browseMatrimony_status_unMarried){ arry_status[arry_status.length]='UnMarried'; } 
 if(browseMatrimony_status_divorced){ arry_status[arry_status.length]='Divorced'; }
 if(browseMatrimony_status_widow){ arry_status[arry_status.length]='Widow'; }
 var arry_occupationType=[];
 if(browseMatrimony_occupationType_privateCompany){ arry_occupationType[arry_occupationType.length]='Private Company'; }
 if(browseMatrimony_occupationType_govt){ arry_occupationType[arry_occupationType.length]='Government / Public Sector';}
 if(browseMatrimony_occupationType_defence){ arry_occupationType[arry_occupationType.length]='Defence / Civil Services';}
 if(browseMatrimony_occupationType_biz){arry_occupationType[arry_occupationType.length]='Business / Self Employeed';  }
 var arry_motherTongue=[];
 if(browseMatrimony_motherTongue_telugu){ arry_motherTongue[arry_motherTongue.length]='Telugu'; }
 if(browseMatrimony_motherTongue_hindi){ arry_motherTongue[arry_motherTongue.length]='Hindi'; }
 console.log('arry_gender: '+JSON.stringify(arry_gender));
 console.log('arry_motherTongue: '+JSON.stringify(arry_motherTongue));
 console.log('arry_occupationType: '+JSON.stringify(arry_occupationType));
 console.log('arry_age: '+JSON.stringify(arry_age));
  js_ajax('GET',PROJECT_URL+'backend/php/dac/controller.module.app.search.php',
  { action:'GET_DATA_BROWSEMATRIMONYPROFILES', gender:arry_gender, motherTongue:arry_motherTongue, status:arry_status, 
    occupationType:arry_occupationType, age:arry_age, mob_code:CUSTOMERACCOUNT_MOBCODE, mobile:CUSTOMERACCOUNT_MOBILE,
	accountType:'CUSTOMER', limit_start:limit_start, limit_end:limit_end }, function(response){
   console.log(response); 
   var content=browseData_contentDisplayer(response);
	   content+=appendContent;
   document.getElementById(div_view).innerHTML=content;
  });
}
}

var commons = new Commons();
var viewProfiles = new ViewProfiles();
var dashboard = new Dashboard();
var customerSeekingForm = new CustomerSeekingForm();
var browseMatrimony = new BrowseMatrimony();