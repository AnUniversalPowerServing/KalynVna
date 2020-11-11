<?php session_start();
include_once 'templates/api_params.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Kalyana Veena</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="styles/api/core-skeleton.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="<?php echo $_SESSION["PROJECT_URL"];?>js/api/load-data-on-scroll.js"></script>
  <script src="<?php echo $_SESSION["PROJECT_URL"];?>js/api/screen-display.js"></script>
  <?php include_once 'templates/api_js.php'; ?>
<style>
body { background-color:#fafafa; }
.f12 { font-size:12px; }
.dropdown>.btn { text-align:left; }
.mtop8p { margin-top:8px; }
</style>
<script type="text/javascript">
$(document).ready(function(){
 kvHeaderMenu('kvHeaderMenu-browseMatrimony');
// load_data_profile();
 // Session Storage 
 var filterData = {};
 if(sessionStorage.getItem("PAGE_BROWSEMATRIMONY").length>0){
  filterData = JSON.parse(sessionStorage.getItem("PAGE_BROWSEMATRIMONY"));
  console.log(filterData);
 }
 document.getElementById("browseMatrimony_filterSearch").innerHTML = filterSearch.displayBrowseMatrimonyFilter(filterData);
 
 
});
var browseMatrimony_male;
var browseMatrimony_female;
var browseMatrimony_age_21_25;
var browseMatrimony_age_26_30;
var browseMatrimony_age_31_35;
var browseMatrimony_age_36_40; 
var browseMatrimony_age_41_45;
var browseMatrimony_status_unMarried;
var browseMatrimony_status_divorced;
var browseMatrimony_status_widow;
var browseMatrimony_occupationType_privateCompany;
var browseMatrimony_occupationType_govt;
var browseMatrimony_occupationType_defence;
var browseMatrimony_occupationType_biz;
var browseMatrimony_motherTongue_telugu;
var browseMatrimony_motherTongue_hindi;
function setBrowseParameters(){
 browseMatrimony_male = document.getElementById("browseMatrimony_male").checked;
 browseMatrimony_female = document.getElementById("browseMatrimony_female").checked;
 browseMatrimony_age_21_25 = document.getElementById("browseMatrimony_age_21_25").checked;
 browseMatrimony_age_26_30 = document.getElementById("browseMatrimony_age_26_30").checked;
 browseMatrimony_age_31_35 = document.getElementById("browseMatrimony_age_31_35").checked;
 browseMatrimony_age_36_40 = document.getElementById("browseMatrimony_age_36_40").checked; 
 browseMatrimony_age_41_45 = document.getElementById("browseMatrimony_age_41_45").checked;
 browseMatrimony_status_unMarried = document.getElementById("browseMatrimony_status_unMarried").checked;
 browseMatrimony_status_divorced = document.getElementById("browseMatrimony_status_divorced").checked;
 browseMatrimony_status_widow = document.getElementById("browseMatrimony_status_widow").checked;
 browseMatrimony_occupationType_privateCompany = document.getElementById("browseMatrimony_occupationType_privateCompany").checked;
 browseMatrimony_occupationType_govt = document.getElementById("browseMatrimony_occupationType_govt").checked;
 browseMatrimony_occupationType_defence = document.getElementById("browseMatrimony_occupationType_defence").checked;
 browseMatrimony_occupationType_biz = document.getElementById("browseMatrimony_occupationType_biz").checked;
 browseMatrimony_motherTongue_telugu = document.getElementById("browseMatrimony_motherTongue_telugu").checked;
 browseMatrimony_motherTongue_hindi = document.getElementById("browseMatrimony_motherTongue_hindi").checked; 
}
function load_data_profile(){
 setBrowseParameters();
 initailize_data();
}
function initailize_data(){
document.getElementById("browse_results").innerHTML='';
document.getElementById("browse_result_content0").innerHTML='';
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
       { action:'GET_COUNT_BROWSEMATRIMONYPROFILES', gender:arry_gender, motherTongue:arry_motherTongue, 
	     status:arry_status, occupationType:arry_occupationType, age:arry_age }, 
	   function(total_data){ 
	    console.log("total_data:"+total_data);
	    total_data=parseInt(total_data);
		if(total_data>0){
		  var content='';
		  if(total_data==1){ content='<b>Your Search Results:</b>&nbsp;'+total_data+'&nbsp;profile.'; }
		  else { content='<b>Your Search Results:</b>&nbsp;'+total_data+'&nbsp;profiles.'; }
		   document.getElementById("browse_results").innerHTML=content;
		   scroll_loadInitializer('browse_result_content',9,initailizeContentData,total_data);
		} else {
		   var content='<div align="center" class="col-sm-12">';
		       content+='<span style="color:#ccc;">No Profile matches with your Search Results.</span>';
			   content+='</div>';
		   document.getElementById("browse_results").innerHTML='';
		   document.getElementById("browse_result_content0").innerHTML=content;
		}
	   console.log(total_data); });
} 
function initailizeContentData(div_view, appendContent,limit_start,limit_end){ 
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
function browseData_contentDisplayer(response){
response=JSON.parse(response);
var content = '';
var row_separator=0;
for(var index=0;index<response.length;index++){
	console.log("row_separator: "+row_separator);
	if(row_separator===0){
	 content+='<div class="row mtop15p">';
	}
     content+=viewProfiles.simpleProfile(response[index]);
	 if(row_separator===2){
	 content+='</div>';
	 row_separator=0;
	} else {
	row_separator++;
	}
}
 
  return content;
}
function userBrowseMatrimonyFav(account_Id){
 if($('#browseMatrimony-fav-'+account_Id).hasClass('fa-star-o') && 
   !$('#browseMatrimony-fav-'+account_Id).hasClass('fa-star')){ 
   $('#browseMatrimony-fav-'+account_Id).removeClass('fa-star-o');
   $('#browseMatrimony-fav-'+account_Id).addClass('fa-star');
   $('#browseMatrimony-fav-'+account_Id).css('color','#ff9800');
   /* USER_ADD_FAVOURITES */
   js_ajax('GET',PROJECT_URL+'backend/php/dac/controller.module.app.authentication.php', { action:'USER_ADD_FAVOURITES', 
   mob_code:CUSTOMERACCOUNT_MOBCODE, mobile:CUSTOMERACCOUNT_MOBILE, user_Id:account_Id },function(response){
     console.log('response: '+response);
   });
 }
 else {
   $('#browseMatrimony-fav-'+account_Id).addClass('fa-star-o');
   $('#browseMatrimony-fav-'+account_Id).removeClass('fa-star');
   $('#browseMatrimony-fav-'+account_Id).css('color','#ccc');
   /* USER_DELETE_FAVOURITES */
   js_ajax('GET',PROJECT_URL+'backend/php/dac/controller.module.app.authentication.php', { action:'USER_DELETE_FAVOURITES', 
   mob_code:CUSTOMERACCOUNT_MOBCODE, mobile:CUSTOMERACCOUNT_MOBILE, user_Id:account_Id },function(response){
    console.log('response: '+response);
   });
 }
}
function deleteAprofile(account_Id){
 $('#viewprofile'+account_Id).hide(1000);
 js_ajax('GET',PROJECT_URL+'backend/php/dac/controller.module.app.authentication.php', 
 { action:'DELETEPROFILE', account_Id:account_Id },function(response){
    console.log('response: '+response);
 });
}
</script>
<style>
body { font-size:14px; }
</style>
  </head>
<body>
<?php include_once 'templates/api_header.php'; ?>
 
<div class="container-fluid mbot500p">
  <div class="row">
    <div id="browseMatrimony_filterSearch" class="col-sm-3">
      
	  
	  
	  
	  
    </div>
    <div class="col-sm-9">
      <div class="container-fluid mtop15p">
	    <div class="row">
		   <div id="browse_results" class="col-sm-4 mtop15p mbot15p"></div>
		</div>
	    <div id="browse_result_content0">
		</div>
    </div>
  </div>
</div>

</body>
</html>
