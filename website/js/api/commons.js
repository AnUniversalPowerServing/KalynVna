/** Global Variables */
var infoMenu_gender = ["Male","Female"];
var infoMenu_ageDiff=["21-25","26-30","31-35","36-40","41-45"];
var infoMenu_martialStatus = ["UnMarried","Divorced","Widow"];
var infoMenu_profession = ["Accountant","Teacher","Physician","Engineer","Laborer","Technician","Lawyer","Veterinary Physician","Psychologist","Pharmacist",
						   "Dietitian","Midwife","Surveyor","Mechanic","Electrician","Architect","Software Engineer","Butcher","Surgeon","Radiographer",
						   "Health Professional","Actor","Consultant","Dentist","Designer","Judge","Secretary","Police"];
var infoMenu_occupationType = ["Private Company","Government / Public Sector","Defence / Civil Services","Business / Self Employeed"];
var infoMenu_motherTongue = ["Hindi","Bengali","Marathi","Telugu","Tamil","Gujarati","Urdu","Kannada","Odia","Malayalam","Punjabi","Assamese","Maithili"];

function defaultConfiguration(){
  $('.dropdown-menu').click(function(event){  event.stopPropagation(); });  // Stops DropDown Menu default closing
}

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

function checkBoxToggle(elem_Id){
  if(document.getElementById(elem_Id).checked){ document.getElementById(elem_Id).checked = false; }
  else { document.getElementById(elem_Id).checked = true; }
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

function display_selOpt_menu(info){
 var id = info.id;
 var menu = info.menu;
 var onChange = info.onChange;
 var defaultMessage = info.defaultMessage;
 var content='<select id="'+id+'" class="form-control" onClick="javascript:'+onChange+'">';
 content+='<option value="">'+defaultMessage+'</option>';
 for(var index=0;index<menu.length;index++){
 content+='<option value="'+menu[index]+'">'+menu[index]+'</option>';
 }
 content+='</select>';
 return content;
}

function display_checkedList_menu(info){
 var prefix_Id = info.prefix_Id;
 var menu = info.menu;
 var filterData = info.filterData;
 var filterWith = info.filterWith;
 var onChecked = info.onChecked;
 var content='';
 for(var index=0;index<menu.length;index++){
  var data = menu[index];
  content+='<div><input id="'+prefix_Id+toCamelCase(data)+'" type="checkbox" value="'+data+'" ';
  if(filterData!==undefined && filterData[filterWith]!==undefined && filterData[filterWith].includes(data)){ content+='checked '; }
  content+='onclick="javascript:'+onChecked+'"/>&nbsp;'+data+'</div>'; // onclick="javascript:load_data_profile();"
 }
 return content;
}

function checkAndPushIntoArray(element_Id, paramArray){
	console.log(element_Id);
  // Gets value from HTMLElement, checks whether it exists before and pushes into Array if it not exists
	var param_Id = document.getElementById(element_Id);
	var isExists = paramArray.includes(param_Id.value);
	if(param_Id.checked){ // add
	  if(!isExists){ paramArray.push(param_Id.value); } 
	} else { // remove
		if(isExists){ paramArray.splice(paramArray.indexOf(param_Id.value), 1); }
	}
}

function display_checkedDropDown_onChecked(it,paramArray){
  var elem = $(it).find('input');
  var elem_Id = elem.attr('id');
  var elem_val = elem.val();
  checkBoxToggle(elem_Id);
  checkAndPushIntoArray(elem_Id, paramArray);
}

function display_checkedDropDown_selectDeselect(it, type, prefix_Id, paramArray){
  $(it).closest('ul').find('li').each(function(i){
	var elem_Id = $(this).find('input').attr('id');
	if(elem_Id!==undefined){
	 console.log(paramArray);
	 if(type==='deSelectAll'){ 
	   document.getElementById(elem_Id).checked = false; 
	 }
     else if(type==='selectAll'){ 
	   document.getElementById(elem_Id).checked = true;
	 }
	 checkAndPushIntoArray(elem_Id, paramArray); 
	}
  });
}

function display_checkedDropDown_menu(info, paramArray){ 
/**
 * info - Get the list of information required to display in the dropdown (Dynamically)
 *        It consists of 
 *			prefix_Id  -
 *			menu -
 *			filterData -
 *			filterWith -
 *			onChecked -
 *			default Message -
 * paramArray - Get the list of information select by User (Dynamically)
 */
 var prefix_Id = info.prefix_Id;
 var menu = info.menu;
 var filterData = info.filterData;
 var filterWith = info.filterWith;
 var onChecked = info.onChecked;
 var defaultMessage = info.defaultMessage;
 var content='<div class="dropdown">';
	 content+='<button align="left" class="btn btn-default form-control dropdown-toggle" type="button" data-toggle="dropdown"><span class="f12">';
	 if(filterData!==undefined && filterData[filterWith]!==undefined && filterData[filterWith].length>0){ content+=filterData[filterWith][0]; } 
	 else { content+=defaultMessage; }
	 content+='</span>&nbsp;';
	 content+='<span class="caret pull-right mtop8p"></span></button>';
	 content+='<ul class="dropdown-menu"  role="menu">';
	 
	 content+='<li><a href="#">';
	 content+='<div class="btn-group pull-right">';
	 content+='<button class="btn btn-default btn-xs" onclick="display_checkedDropDown_selectDeselect(this,\'selectAll\',\''+prefix_Id+'\','+paramArray+');"><b>Select All</b></button>';
	 content+='<button class="btn btn-default btn-xs" onclick="display_checkedDropDown_selectDeselect(this,\'deSelectAll\',\''+prefix_Id+'\','+paramArray+');"><b>DeSelect All</b></button>';
	 content+='</div>';
	 content+='</a></li>';
	  
	 for(var index=0;index<menu.length;index++){
	   var data = menu[index];
	   content+='<li onclick="javascript:display_checkedDropDown_onChecked(this,'+paramArray+');"><a href="#">'; // onChecked
	   content+='<div><input id="'+prefix_Id+toCamelCase(data)+'" type="checkbox" value="'+data+'" onclick="javascript:checkBoxToggle(this.id);" ';
	   if(filterData!==undefined && filterData[filterWith]!==undefined && filterData[filterWith].includes(data)){ content+='checked '; }
	   content+='/>&nbsp;'+data+'</div>';
	   content+='</a></li>';
	 }
	 content+='</ul>';
	 content+='</div>';
  return content;
}

