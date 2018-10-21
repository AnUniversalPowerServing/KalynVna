$(document).ready(function(){
 kvHeaderMenu('kvHeaderMenu-signUp');
 sel_signup_menu("signup_menu_mentionprofile");
 build_countryOption('signUp_bzc_birthCountry');
 display_list_shakha('signUp_bzc_shakha');
 display_list_gothram('signUp_bzc_gothram');
 display_list_Raasi('signUp_bzc_raasi');
 build_countryOption('signUp_contactI_country');
 load_autocomplete_surName('signUp_mentionProfile_surName');
 load_autocomplete_highDegree('signUp_mentionProfile_highestDegree');
 load_autocomplete_occupation('signUp_mentionProfile_occupation');
 load_autocomplete_occupation('signUp_familyBkg_fatherOccpn');
 load_autocomplete_occupation('signUp_familyBkg_motherOccpn');
 load_autocomplete_occupation('signUp_prefSpouse_expectedOccpn');
 load_autocomplete_highDegree('signUp_prefSpouse_highestDegree');
});

var signup_authentication_form1;
var signup_authentication_form2;
var signup_authentication_form3;
var signup_authentication_form4;
var signup_authentication_form5;

function sel_signup_menu(id){
// sel_signup_menuTab(id);
 if(id==='signup_menu_mentionprofile'){  sel_signup_menuTab(id); }
 else if(id==='signup_menu_birthAndCommunityBg'){
   if(signup_authentication_form1==='COMPLETED'){ sel_signup_menuTab(id); }
 }
 else if(id==='signup_menu_contactInf'){
   if(signup_authentication_form2==='COMPLETED'){ sel_signup_menuTab(id); }
 }
 else if(id==='signup_menu_familyBackground'){
   if(signup_authentication_form3==='COMPLETED'){ sel_signup_menuTab(id); }
 }
 else if(id==='signup_menu_preferenceOfSpouse'){
   if(signup_authentication_form4==='COMPLETED'){ sel_signup_menuTab(id); }
 }
 else if(id==='signup_menu_finish'){
  if(signup_authentication_form5==='COMPLETED'){ sel_signup_menuTab(id); }
 } 
}

function sel_signup_menuTab(id){
var arry_menu=["signup_menu_mentionprofile","signup_menu_birthAndCommunityBg","signup_menu_contactInf",
"signup_menu_familyBackground","signup_menu_preferenceOfSpouse","signup_menu_finish"];
var arry_menu_content=["signup_content_mentionprofile","signup_content_birthAndCommunityBg","signup_content_contactInf",
"signup_content_familyBackground","signup_content_preferenceOfSpouse","signup_content_finish"];
for(var index=0;index<arry_menu.length;index++){
  if(id===arry_menu[index]){
     if(!$('#'+arry_menu[index]).hasClass('active')){ $('#'+arry_menu[index]).addClass('active'); }
	 if($('#'+arry_menu_content[index]).hasClass('hide-block')){ $('#'+arry_menu_content[index]).removeClass('hide-block'); }
  } else {
     if($('#'+arry_menu[index]).hasClass('active')){  $('#'+arry_menu[index]).removeClass('active'); }
	 if(!$('#'+arry_menu_content[index]).hasClass('hide-block')){ $('#'+arry_menu_content[index]).addClass('hide-block'); }
  }
}
}

var signUp_mentionProfile_surName;
var signUp_mentionProfile_name;
var signUp_mentionProfile_gender;
var signUp_mentionProfile_motherTongue;
var signUp_mentionProfile_status;
var signUp_mentionProfile_hgtFeet;
var signUp_mentionProfile_hgtInches;
var signUp_mentionProfile_highestDegree;
var signUp_mentionProfile_occupation;
var signUp_mentionProfile_occupationType;

function signup_mentionProfile(){
 signUp_mentionProfile_surName = document.getElementById("signUp_mentionProfile_surName").value;
 signUp_mentionProfile_name = document.getElementById("signUp_mentionProfile_name").value;
 signUp_mentionProfile_gender = document.getElementById("signUp_mentionProfile_gender").value;
 signUp_mentionProfile_motherTongue = document.getElementById("signUp_mentionProfile_motherTongue").value;
 signUp_mentionProfile_status = document.getElementById("signUp_mentionProfile_status").value;
 signUp_mentionProfile_hgtFeet = document.getElementById("signUp_mentionProfile_hgtFeet").value;
 signUp_mentionProfile_hgtInches = document.getElementById("signUp_mentionProfile_hgtInches").value;
 signUp_mentionProfile_highestDegree = document.getElementById("signUp_mentionProfile_highestDegree").value;
 signUp_mentionProfile_occupation = document.getElementById("signUp_mentionProfile_occupation").value;
 signUp_mentionProfile_occupationType = document.getElementById("signUp_mentionProfile_occupationType").value;
 signUp_mentionProfile_livingstatus = document.getElementById("signUp_mentionProfile_livingstatus").value;
 if(signUp_mentionProfile_surName.length>0){
 if(signUp_mentionProfile_name.length>0){
 if(signUp_mentionProfile_gender.length>0){
 if(signUp_mentionProfile_motherTongue.length>0){
 if(signUp_mentionProfile_status.length>0){
 //if(signUp_mentionProfile_hgtFeet.length>0){
 //if(signUp_mentionProfile_hgtInches.length>0){
 if(signUp_mentionProfile_highestDegree.length>0){
 if(signUp_mentionProfile_occupation.length>0){
 if(signUp_mentionProfile_occupationType.length>0){
 if(signUp_mentionProfile_livingstatus.length>0){
   signup_authentication_form1='COMPLETED';
   sel_signup_menu('signup_menu_birthAndCommunityBg');
 } else { 
   if(signUp_mentionProfile_gender==='Male'){ alert_display_warning('W040');  }
   else { alert_display_warning('W039'); }
 } 
 } else { alert_display_warning('W010'); } // signUp_mentionProfile_occupationType
 } else { alert_display_warning('W009'); } // signUp_mentionProfile_occupation
 } else { alert_display_warning('W008'); } // signUp_mentionProfile_highestDegree
 //} else { alert_display_warning('W007'); } // signUp_mentionProfile_hgtInches
 //} else { alert_display_warning('W006'); } // signUp_mentionProfile_hgtFeet
 } else { alert_display_warning('W005'); } // signUp_mentionProfile_status
 } else { alert_display_warning('W004'); } // signUp_mentionProfile_motherTongue
 } else { alert_display_warning('W003'); } // signUp_mentionProfile_gender
 } else { alert_display_warning('W002'); } // signUp_mentionProfile_name
 } else { alert_display_warning('W001'); } // signUp_mentionProfile_surName
 console.log("signUp_mentionProfile_surName: "+signUp_mentionProfile_surName);
 console.log("signUp_mentionProfile_name: "+signUp_mentionProfile_name);
 console.log("signUp_mentionProfile_gender: "+signUp_mentionProfile_gender);
 console.log("signUp_mentionProfile_motherTongue: "+signUp_mentionProfile_motherTongue);
 console.log("signUp_mentionProfile_status: "+signUp_mentionProfile_status);
 console.log("signUp_mentionProfile_hgtFeet: "+signUp_mentionProfile_hgtFeet);
 console.log("signUp_mentionProfile_hgtInches: "+signUp_mentionProfile_hgtInches);
 console.log("signUp_mentionProfile_highestDegree: "+signUp_mentionProfile_highestDegree);
 console.log("signUp_mentionProfile_occupation: "+signUp_mentionProfile_occupation);
 console.log("signUp_mentionProfile_occupationType: "+signUp_mentionProfile_occupationType);
}

var signUp_bzc_birthDate;
var signUp_bzc_birthTime;
var signUp_bzc_birthCountry;
var signUp_bzc_birthState;
var signUp_bzc_birthLocation;
var signUp_bzc_birthLocality;
var signUp_bzc_shakha;
var signUp_bzc_upaShakha;
var signUp_bzc_gothram;
var signUp_bzc_raasi;
var signUp_bzc_nakshatra;

function signup_birthZodiacCommunity(){
 signUp_bzc_birthDate = document.getElementById("signUp_bzc_birthDate").value;
 signUp_bzc_birthTime = document.getElementById("signUp_bzc_birthTime").value;
 signUp_bzc_birthCountry = document.getElementById("signUp_bzc_birthCountry").value;
 signUp_bzc_birthState = document.getElementById("signUp_bzc_birthState").value;
 signUp_bzc_birthLocation = document.getElementById("signUp_bzc_birthLocation").value;
 signUp_bzc_birthLocality = document.getElementById("signUp_bzc_birthLocality").value;
 signUp_bzc_shakha = document.getElementById("signUp_bzc_shakha").value;
 signUp_bzc_upaShakha = document.getElementById("signUp_bzc_upaShakha").value;
 signUp_bzc_gothram = document.getElementById("signUp_bzc_gothram").value;
 signUp_bzc_raasi = document.getElementById("signUp_bzc_raasi").value;
 signUp_bzc_nakshatra = document.getElementById("signUp_bzc_nakshatra").value;
 if(signUp_bzc_birthDate.length>0){
 if(signUp_bzc_birthTime.length>0){
 //if(signUp_bzc_birthCountry.length>0){
 //if(signUp_bzc_birthState.length>0){
 //if(signUp_bzc_birthLocation.length>0){
 //if(signUp_bzc_birthLocality.length>0){
 if(signUp_bzc_shakha.length>0){
 if(signUp_bzc_upaShakha.length>0){
 if(signUp_bzc_gothram.length>0){
 if(signUp_bzc_raasi.length>0){
 if(signUp_bzc_nakshatra.length>0){
    signup_authentication_form2='COMPLETED';
	sel_signup_menu('signup_menu_contactInf');
   } else { alert_display_warning('W021'); } // signUp_bzc_nakshatra
   } else { alert_display_warning('W020'); } // signUp_bzc_raasi
   } else { alert_display_warning('W019'); } // signUp_bzc_gothram
   } else { alert_display_warning('W018'); } // signUp_bzc_upaShakha
   } else { alert_display_warning('W017'); } // signUp_bzc_shakha
// } else { alert_display_warning('W016'); } // signUp_bzc_birthLocality
// } else { alert_display_warning('W015'); } // signUp_bzc_birthLocation
// } else { alert_display_warning('W014'); } // signUp_bzc_birthState
// } else { alert_display_warning('W013'); } // signUp_bzc_birthCountry
   } else { alert_display_warning('W012'); } // signUp_bzc_birthTime
   } else { alert_display_warning('W011'); } // signUp_bzc_birthDate
 console.log("signUp_bzc_birthDate: "+signUp_bzc_birthDate);
 console.log("signUp_bzc_birthTime: "+signUp_bzc_birthTime);
 console.log("signUp_bzc_birthCountry: "+signUp_bzc_birthCountry);
 console.log("signUp_bzc_birthState: "+signUp_bzc_birthState);
 console.log("signUp_bzc_birthLocation: "+signUp_bzc_birthLocation);
 console.log("signUp_bzc_birthLocality: "+signUp_bzc_birthLocality);
 console.log("signUp_bzc_shakha: "+signUp_bzc_shakha);
 console.log("signUp_bzc_upaShakha: "+signUp_bzc_upaShakha);
 console.log("signUp_bzc_gothram: "+signUp_bzc_gothram);
 console.log("signUp_bzc_raasi: "+signUp_bzc_raasi);
 console.log("signUp_bzc_nakshatra: "+signUp_bzc_nakshatra);
}

var signUp_contactI_address;
var signUp_contactI_country;
var signUp_contactI_state;
var signUp_contactI_location;
var signUp_contactI_locality;
var signUp_contactI_mobile;

function signup_contactInformation(){
 signUp_contactI_address = document.getElementById("signUp_contactI_address").value;
 signUp_contactI_country = document.getElementById("signUp_contactI_country").value;
 signUp_contactI_state = document.getElementById("signUp_contactI_state").value;
 signUp_contactI_location = document.getElementById("signUp_contactI_location").value;
 signUp_contactI_locality = document.getElementById("signUp_contactI_locality").value;
 signUp_contactI_mobile = document.getElementById("signUp_contactI_mobile").value;
  if(signUp_contactI_address.length>0){
  if(signUp_contactI_country.length>0){
  if(signUp_contactI_state.length>0){
  if(signUp_contactI_location.length>0){
  if(signUp_contactI_locality.length>0){
  if(signUp_contactI_mobile.length>0){
    signup_authentication_form3='COMPLETED';
	sel_signup_menu('signup_menu_familyBackground');
  } else { alert_display_warning('W026'); }
  } else { alert_display_warning('W025'); }
  } else { alert_display_warning('W024'); }
  } else { alert_display_warning('W023'); }
  } else { alert_display_warning('W022'); }
  } else { alert_display_warning('W037'); }
 
 console.log("signUp_contactI_address: "+signUp_contactI_address);
 console.log("signUp_contactI_country: "+signUp_contactI_country);
 console.log("signUp_contactI_state: "+signUp_contactI_state);
 console.log("signUp_contactI_location: "+signUp_contactI_location);
 console.log("signUp_contactI_locality: "+signUp_contactI_locality);
 console.log("signUp_contactI_mobile: "+signUp_contactI_mobile);
}

var signUp_familyBkg_fatherName;
var signUp_familyBkg_fatherOccpn;
var signUp_familyBkg_motherName;
var signUp_familyBkg_motherOccpn;
var signUp_familyBkg_noOfBrothers;
var signUp_familyBkg_noOfSisters;

function signup_familyBackground(){
 signUp_familyBkg_fatherName = document.getElementById("signUp_familyBkg_fatherName").value;
 signUp_familyBkg_fatherOccpn = document.getElementById("signUp_familyBkg_fatherOccpn").value;
 signUp_familyBkg_motherName = document.getElementById("signUp_familyBkg_motherName").value;
 signUp_familyBkg_motherOccpn = document.getElementById("signUp_familyBkg_motherOccpn").value;
 signUp_familyBkg_noOfBrothers = document.getElementById("signUp_familyBkg_noOfBrothers").value;
 signUp_familyBkg_noOfSisters = document.getElementById("signUp_familyBkg_noOfSisters").value;
 //if(signUp_familyBkg_fatherName.length>0){
 //if(signUp_familyBkg_fatherOccpn.length>0){
 //if(signUp_familyBkg_motherName.length>0){
 //if(signUp_familyBkg_motherOccpn.length>0){
 //if(signUp_familyBkg_noOfBrothers.length>0){
 //if(signUp_familyBkg_noOfSisters.length>0){
   signup_authentication_form4='COMPLETED';
   sel_signup_menu('signup_menu_preferenceOfSpouse');
   if(signUp_mentionProfile_gender==='Male'){
     document.getElementById("signUp_prefSpouse_display_livingstatus").innerHTML='Bride';  
   } else { document.getElementById("signUp_prefSpouse_display_livingstatus").innerHTML='Bridegroom';   }
 //} else { alert_display_warning('W032'); } 
 //} else { alert_display_warning('W031'); } 
 //} else { alert_display_warning('W030'); } 
 //} else { alert_display_warning('W029'); } 
 //} else { alert_display_warning('W028'); } 
 //} else { alert_display_warning('W027'); } 
 
 console.log("signUp_familyBkg_fatherName: "+signUp_familyBkg_fatherName);
 console.log("signUp_familyBkg_fatherOccpn: "+signUp_familyBkg_fatherOccpn);
 console.log("signUp_familyBkg_motherName: "+signUp_familyBkg_motherName);
 console.log("signUp_familyBkg_motherOccpn: "+signUp_familyBkg_motherOccpn);
 console.log("signUp_familyBkg_noOfBrothers: "+signUp_familyBkg_noOfBrothers);
 console.log("signUp_familyBkg_noOfSisters: "+signUp_familyBkg_noOfSisters);
}

var signUp_prefSpouse_highestDegree;
var signUp_prefSpouse_expectedOccpn;
var signUp_prefSpouse_expectedOccpnType;
var signUp_prefSpouse_expectedMTongue;
var signUp_prefSpouse_livingstatus;
function signup_preferenceOfSpouse(){
 signUp_prefSpouse_highestDegree = document.getElementById("signUp_prefSpouse_highestDegree").value;
 signUp_prefSpouse_expectedOccpn = document.getElementById("signUp_prefSpouse_expectedOccpn").value;
 signUp_prefSpouse_expectedOccpnType = document.getElementById("signUp_prefSpouse_expectedOccpnType").value;
 signUp_prefSpouse_expectedMTongue = document.getElementById("signUp_prefSpouse_expectedMTongue").value;
 signUp_prefSpouse_livingstatus  = document.getElementById("signUp_prefSpouse_livingstatus").value;
 if(signUp_prefSpouse_highestDegree.length>0){
 if(signUp_prefSpouse_expectedOccpn.length>0){
 if(signUp_prefSpouse_expectedOccpnType.length>0){
 if(signUp_prefSpouse_expectedMTongue.length>0){
 if(signUp_prefSpouse_livingstatus.length>0){
    /* Signup */
	signup_authentication_form5='COMPLETED';
	sel_signup_menu('signup_menu_finish');
	add_signup_data();
 } else {
   if(signUp_mentionProfile_gender==='Male'){ alert_display_warning('W041');  }
   else { alert_display_warning('W042'); }
 }
 } else { alert_display_warning('W036'); }
 } else { alert_display_warning('W035'); }
 } else { alert_display_warning('W034'); }
 } else { alert_display_warning('W033'); }
 console.log("signUp_prefSpouse_highestDegree: "+signUp_prefSpouse_highestDegree);
 console.log("signUp_prefSpouse_expectedOccpn: "+signUp_prefSpouse_expectedOccpn);
 console.log("signUp_prefSpouse_expectedOccpnType: "+signUp_prefSpouse_expectedOccpnType);
 console.log("signUp_prefSpouse_expectedMTongue: "+signUp_prefSpouse_expectedMTongue);
}

function add_signup_data(){
js_ajax('GET',PROJECT_URL+'backend/php/dac/controller.module.app.authentication.php',
{ action:'SIGNUP_AUTHENTICATION', surName: signUp_mentionProfile_surName, name: signUp_mentionProfile_name, 
  gender:signUp_mentionProfile_gender, motherTongue: signUp_mentionProfile_motherTongue, status:signUp_mentionProfile_status,
  ft_hgt: signUp_mentionProfile_hgtFeet, inch_hgt: signUp_mentionProfile_hgtInches, 
  highDegree: signUp_mentionProfile_highestDegree, occupation: signUp_mentionProfile_occupation, 
  occType: signUp_mentionProfile_occupationType, living_status: signUp_mentionProfile_livingstatus,
  dob:signUp_bzc_birthDate+" "+signUp_bzc_birthTime, birthCountry:signUp_bzc_birthCountry,
  birthState:signUp_bzc_birthState, birthLocation:signUp_bzc_birthLocation, birthLocality:signUp_bzc_birthLocality,
 shakha:signUp_bzc_shakha, upashakha:signUp_bzc_upaShakha, gothram:signUp_bzc_gothram, raasi:signUp_bzc_raasi, 
 nakshatram:signUp_bzc_nakshatra, address:signUp_contactI_address, country:signUp_contactI_country, 
 state:signUp_contactI_state, location:signUp_contactI_location, minlocation:signUp_contactI_locality,
 mobile:signUp_contactI_mobile, fatherName:signUp_familyBkg_fatherName, fatherOccupation:signUp_familyBkg_fatherOccpn, 
 motherName:signUp_familyBkg_motherName, motherOccupation:signUp_familyBkg_motherOccpn, 
 NoOfBrothers: signUp_familyBkg_noOfBrothers, NoOfSisters: signUp_familyBkg_noOfSisters,
exp_highDegree: signUp_prefSpouse_highestDegree, exp_occupation: signUp_prefSpouse_expectedOccpn, 
exp_occType: signUp_prefSpouse_expectedOccpnType, exp_motherTongue: signUp_prefSpouse_expectedMTongue,exp_living_status:
signUp_prefSpouse_livingstatus },
function(response){
  console.log(response);
});


}

var signUp_uploadPic_picture1_url;
var signUp_uploadPic_picture2_url;
var signUp_uploadPic_picture3_url;