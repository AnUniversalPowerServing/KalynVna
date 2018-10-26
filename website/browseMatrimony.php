<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Kalyana Veena</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php include_once 'templates/api_params.php'; ?>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="styles/api/core-skeleton.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="<?php echo $_SESSION["PROJECT_URL"];?>js/api/load-data-on-scroll.js"></script>
  <?php include_once 'templates/api_js.php'; ?>
<script type="text/javascript">
$(document).ready(function(){
 kvHeaderMenu('kvHeaderMenu-browseMatrimony');
 load_data_profile();
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
       { action:'GET_DATA_BROWSEMATRIMONYPROFILES', gender:arry_gender, motherTongue:arry_motherTongue, 
	     status:arry_status, occupationType:arry_occupationType, age:arry_age, limit_start:limit_start, 
		 limit_end:limit_end  }, function(response){
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
    var account_Id = response[index].account_Id;
    var name = response[index].name;
    var gender = response[index].gender;
    var motherTongue = response[index].motherTongue;
    var status = response[index].status;
    var ft_hgt = response[index].ft_hgt;
    var inch_hgt = response[index].inch_hgt;
    var highDegree = response[index].highDegree;
    var occupation = response[index].occupation;
    var occType = response[index].occType;
	var living_status = response[index].living_status;
    var exp_highDegree = response[index].exp_highDegree;
    var exp_occupation = response[index].exp_occupation;
    var exp_occType = response[index].exp_occType;
    var exp_motherTongue = response[index].exp_motherTongue;
	var exp_living_status = response[index].exp_living_status;
	console.log("row_separator: "+row_separator);
	if(row_separator===0){
	 content+='<div class="row mtop15p">';
	}
     content+='<div class="col-sm-4">';
     content+='<div class="list-group">';
	 content+='<div class="list-group-item pad0">';
	 content+='<div class="container-fluid mtop15p">';
	 content+='<div class="row">';
	 content+='<div align="center" class="col-sm-12">';
	 if(gender==='Male'){
     content+='<img src="'+PROJECT_URL+'/images/men.jpg" class="profile_pic_img"/>';
	 } else {
	 content+='<img src="'+PROJECT_URL+'/images/women.jpg" class="profile_pic_img"/>';
	 }
	 content+='</div>';
	 content+='</div>';
	 content+='<div class="row">';
	 content+='<div align="center" class="col-sm-12 mtop15p">';
	 content+='<h5><b>'+name+'</b></h5>';
	 content+='</div>';
	 content+='</div>';
	 content+='</div>';
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
	 content+='<tr><td><b>Occupation Type</b></td><td>'+occType+'</td></tr>';
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
	 content+='<tr><td><b>Occupation Type</b></td><td>'+exp_occType+'</td></tr>';
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
	 if(row_separator===2){
	 content+='</div>';
	 row_separator=0;
	} else {
	row_separator++;
	}
}
 
  return content;
}
</script>
<style>
body { font-size:14px; }
</style>
  </head>
<body>
<?php include_once 'templates/api_header.php'; ?>
 
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-3">
      <h5 style="border-bottom:2px solid #000;padding-bottom:10px;"><b>Filter Search</b></h5>
      <div class="list-group">
	    <div class="list-group-item" data-toggle="collapse" data-target="#filter_gender">
		  Gender&nbsp;
		  <i class="fa fa-angle-double-down pull-right" aria-hidden="true"></i>
		</div>
		<div id="filter_gender" class="collapse">
			<div class="list-group-item">
			   <div><input id="browseMatrimony_male" type="checkbox" onclick="javascript:load_data_profile();"/>&nbsp;Male</div>
			   <div><input id="browseMatrimony_female" type="checkbox" onclick="javascript:load_data_profile();"/>&nbsp;Female</div>
			</div>
		</div>
		<div class="list-group-item" data-toggle="collapse" data-target="#filter_ageGroup">
		  Age Group&nbsp;
		  <i class="fa fa-angle-double-down pull-right" aria-hidden="true"></i>
		</div>
		<div id="filter_ageGroup" class="collapse">
			<div class="list-group-item"> 
			   <div><input id="browseMatrimony_age_21_25" type="checkbox" onclick="javascript:load_data_profile();"/>&nbsp;21-25</div>
			   <div><input id="browseMatrimony_age_26_30" type="checkbox" onclick="javascript:load_data_profile();"/>&nbsp;26-30</div>
			   <div><input id="browseMatrimony_age_31_35" type="checkbox" onclick="javascript:load_data_profile();"/>&nbsp;31-35</div>
			   <div><input id="browseMatrimony_age_36_40" type="checkbox" onclick="javascript:load_data_profile();"/>&nbsp;36-40</div>
			   <div><input id="browseMatrimony_age_41_45" type="checkbox" onclick="javascript:load_data_profile();"/>&nbsp;41-45</div>
			</div>
		</div>
		<div class="list-group-item" data-toggle="collapse" data-target="#filter_martialStatus">
		  Martial Status&nbsp;
		  <i class="fa fa-angle-double-down pull-right" aria-hidden="true"></i>
		</div>
		<div id="filter_martialStatus" class="collapse">
			<div class="list-group-item">
			   <div><input id="browseMatrimony_status_unMarried" type="checkbox" onclick="javascript:load_data_profile();"/>&nbsp;UnMarried</div>
			   <div><input id="browseMatrimony_status_divorced" type="checkbox" onclick="javascript:load_data_profile();"/>&nbsp;Divorced</div>
			   <div><input id="browseMatrimony_status_widow" type="checkbox" onclick="javascript:load_data_profile();"/>&nbsp;Widow</div>
			</div>
		</div>
		<div class="list-group-item" data-toggle="collapse" data-target="#filter_occupationType">
		  Occupation Type&nbsp;
		  <i class="fa fa-angle-double-down pull-right" aria-hidden="true"></i>
		</div>
		<div id="filter_occupationType" class="collapse">
			<div class="list-group-item">
				<div><input id="browseMatrimony_occupationType_privateCompany" type="checkbox" onclick="javascript:load_data_profile();"/>&nbsp;Private Company</div>
				<div><input id="browseMatrimony_occupationType_govt" type="checkbox" onclick="javascript:load_data_profile();"/>&nbsp;Government / Public Sector</div>
				<div><input id="browseMatrimony_occupationType_defence" type="checkbox" onclick="javascript:load_data_profile();"/>&nbsp;Defence / Civil Services</div>
				<div><input id="browseMatrimony_occupationType_biz" type="checkbox" onclick="javascript:load_data_profile();"/>&nbsp;Business / Self Employeed</div>
			</div>
		</div>
		<div class="list-group-item" data-toggle="collapse" data-target="#filter_motherTongue">
		  Mother Tongue&nbsp;
		  <i class="fa fa-angle-double-down pull-right" aria-hidden="true"></i>
		</div>
		<div id="filter_motherTongue" class="collapse">
			<div class="list-group-item">
			   <div><input id="browseMatrimony_motherTongue_telugu" type="checkbox" onclick="javascript:load_data_profile();"/>&nbsp;Telugu</div>
			   <div><input id="browseMatrimony_motherTongue_hindi" type="checkbox" onclick="javascript:load_data_profile();"/>&nbsp;Hindi</div>
			</div>
		</div>
	  </div>
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
