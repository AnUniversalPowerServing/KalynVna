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
var APP_USERPROFILE_ID='<?php if(isset($_GET["1"])){ echo $_GET["1"]; } ?>';
$(document).ready(function(){
kvHeaderMenu('kvHeaderMenu-browseMatrimony');
load_profile_data();
});
function load_profile_data(){
 js_ajax('GET',PROJECT_URL+'backend/php/dac/controller.module.app.search.php',
 { action:'GET_DATA_PROFILEBYID',account_Id:APP_USERPROFILE_ID}, function(response){ 
   console.log(response);load_profile_content(response); });
}
function load_profile_content(response){
 response = JSON.parse(response);
 var name = response.profile_data[0].name;
 var gender = response.profile_data[0].gender;
 var motherTongue = response.profile_data[0].motherTongue;
 var status = response.profile_data[0].status;
 var ft_hgt = response.profile_data[0].ft_hgt;
 var inch_hgt = response.profile_data[0].inch_hgt;
 var highDegree = response.profile_data[0].highDegree;
 var occupation = response.profile_data[0].occupation;
 var occType = response.profile_data[0].occType;
 var dob = response.profile_data[0].dob;
 var birthCountry = response.profile_data[0].birthCountry;
 var birthState = response.profile_data[0].birthState;
 var birthLocation = response.profile_data[0].birthLocation;
 var birthLocality = response.profile_data[0].birthLocality;
 var shakha = response.profile_data[0].shakha;
 var upashakha = response.profile_data[0].upashakha;
 var gothram = response.profile_data[0].gothram;
 var raasi = response.profile_data[0].raasi;
 var nakshatram = response.profile_data[0].nakshatram;
 var fatherOccupation = response.profile_data[0].fatherOccupation;
 var motherOccupation = response.profile_data[0].motherOccupation;
 var NoOfBrothers = response.profile_data[0].NoOfBrothers;
 var NoOfSisters = response.profile_data[0].NoOfSisters;
 var exp_highDegree = response.profile_data[0].exp_highDegree;
 var exp_occupation = response.profile_data[0].exp_occupation;
 var exp_occType = response.profile_data[0].exp_occType;
 var exp_motherTongue = response.profile_data[0].exp_motherTongue;
 var suggestedAccounts = response.profile_data[0].suggestedAccounts;
var content='<div class="list-group">';
	content+='<div class="list-group-item">';
	content+='<div class="container-fluid mtop15p">';
	content+='<div class="row">';
	content+='<div class="col-sm-4">';
	if(gender=='Male'){
	content+='<div align="center"><img src="'+PROJECT_URL+'images/men.jpg" class="profile_pic_img"/></div>';
	} else {
	content+='<div align="center"><img src="'+PROJECT_URL+'images/women.jpg" class="profile_pic_img"/></div>';
	}
	content+='</div>';
	content+='<div class="col-sm-8">';
	content+='<div><h4><b>'+name+'</b></h4><hr/></div>';
	content+='<div class="responsive">';
	content+='<table class="table">';
	content+='<thead style="background-color:#ccc;">';
	content+='<tr><th>Details</th><th>Description</th></tr>';
	content+='</thead>';
	content+='<tbody>';
	content+='<tr><td><b>Gender</b></td><td>'+gender+'</td></tr>';
	content+='<tr><td><b>Mother Tongue</b></td><td>'+motherTongue+'</td></tr>';
	content+='<tr><td><b>Status</b></td><td>'+status+'</td></tr>';
	content+='<tr><td><b>Height</b></td><td>'+ft_hgt+' feet '+inch_hgt+' Inches</td></tr>';
	content+='<tr><td><b>Highest Degree</b></td><td>'+highDegree+'</td></tr>';
	content+='<tr><td><b>Occupation</b></td><td>'+occupation+'</td></tr>';
	content+='<tr><td><b>Occupation Type</b></td><td>'+occType+'</td></tr>';
	content+='</tbody>';
	content+='</table>';
	content+='</div>';
	content+='</div>';
	content+='</div>';
	content+='<div class="row">';
	content+='<div class="col-sm-12">';
	content+='<h4><b>Birth, Zodaic and Community Background</b></h4><hr/>';
	content+='</div>';
	content+='<div class="col-sm-12">';
	content+='<div class="responsive">';
	content+='<table class="table">';
	content+='<thead style="background-color:#ccc;">';
	content+='<tr><th>Details</th><th>Description</th></tr>';
	content+='</thead>';
	content+='<tbody>';
	content+='<tr><td><b>Date and Time of Birth</b></td><td>'+get_stdDateTimeFormat01(dob)+'</td></tr>';
	content+='<tr><td><b>Birth Place</b></td><td>'+birthLocality+', '+birthLocation+', '+birthState+', '+birthCountry+'</td></tr>';
	content+='<tr><td><b>Shakha</b></td><td>'+shakha+'</td></tr>';
	content+='<tr><td><b>Upashakha</b></td><td>'+upashakha+'</td></tr>';
	content+='<tr><td><b>Gothram</b></td><td>'+gothram+'</td></tr>';
	content+='<tr><td><b>Zodiac Sign (Raasi)</b></td><td>'+raasi+'</td></tr>';
	content+='<tr><td><b>Star (Nakshatram)</b></td><td>'+nakshatram+'</td></tr>';
	content+='</tbody>';
	content+='</table>';
	content+='</div>';
	content+='</div>';
	content+='</div>';
	content+='<div class="row">';
	content+='<div class="col-sm-12">';
	content+='<h4><b>Family Background</b></h4><hr/>';
	content+='</div>';
	content+='<div class="col-sm-12">';
	content+='<div class="responsive">';
	content+='<table class="table">';
	content+='<thead style="background-color:#ccc;">';
	content+='<tr><th>Details</th><th>Description</th></tr>';
	content+='</thead>';
	content+='<tbody>';
	content+='<tr><td>Father Occupation</td><td>'+fatherOccupation+'<td></tr>';
	content+='<tr><td>Mother Occupation</td><td>'+motherOccupation+'<td></tr>';
	content+='<tr><td>Number of Brothers</td><td>'+NoOfBrothers+'<td></tr>';
	content+='<tr><td>Number of Sisters</td><td>'+NoOfSisters+'<td></tr>';
	content+='</tbody>';
	content+='</table>';
	content+='</div>';
	content+='</div>';
	content+='</div>';
	content+='<div class="row">';
	content+='<div class="col-sm-12">';
	if(gender=='Male'){
	content+='<h4><b>He is looking for</b></h4><hr/>';
	} else {
	content+='<h4><b>She is looking for</b></h4><hr/>';
	}
	content+='</div>';
	content+='<div class="col-sm-12">';
	content+='<div class="responsive">';
	content+='<table class="table">';
	content+='<thead style="background-color:#ccc;">';
	content+='<tr><th>Details</th><th>Description</th></tr>';
	content+='</thead>';
	content+='<tbody>';
	content+='<tr><td>Mother Tongue</td><td>'+exp_motherTongue+'<td></tr>';
	content+='<tr><td>Highest Degree</td><td>'+exp_highDegree+'<td></tr>';
	content+='<tr><td>Occupation</td><td>'+exp_occupation+'<td></tr>';
	content+='<tr><td>Occupation Type</td><td>'+exp_occType+'<td></tr>';
	content+='</tbody>';
	content+='</table>';
	content+='</div>';
	content+='</div>';
	content+='</div>';
	content+='</div>';
	content+='<div>';
	content+='</div>';
	content+='</div>';
	content+='</div>';
 document.getElementById("app-user-profile").innerHTML=content;
}
</script>
</head>
<body>
<?php include_once 'templates/api_header.php'; ?>
<div class="container-fluid mtop15p">
  <div class="row">
    <div id="app-user-profile" class="col-sm-8">
	
	
	</div>
	<div class="col-sm-4">
	
	<div class="list-group">
	<div class="list-group-item"><b>Some Suggested Profiles</b></div>
	<div class="list-group-item">
	  <div class="contaner-fluid pad0 mtop10p mbot10p">
	  <div class="row">
	  <div class="col-sm-4">
	    <div align="center"><img src="<?php echo $_SESSION["PROJECT_URL"]; ?>images/men.jpg" class="profile_pic_img"/></div>
	  </div>
	  <div class="col-sm-8">
	   <div><h5><b>Name</b></h5></div>
	   <div class="mtop10p"><b>Highest Degree:</b> B.Tech in Computer Science and Engineering</div>
	   <div class="mtop10p"><b>Occupation:</b> Software Engineering</div>
	   <div align="right" class="mtop10p">
	    <button class="btn btn-primary">View Profile</button>
	   </div>
	  </div>
	  </div>
	  </div>
	</div>
	</div>
	
	</div>
  </div>
</div>
</body>
</html>