<!DOCTYPE html>
<html lang="en">
<head>
  <title>KalyanaVeena</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
  <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="https://jqueryui.com/resources/demos/style.css">
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="js/api/brahim-core.js"></script>
  <script src="js/api/app-core.js"></script>
  <script src="js/api/bootstrap-switch.js"></script>
  <link href="styles/bootstrap-switch.css" rel="stylesheet">
<script type="text/javascript">
$(document).ready(function(){
 kvHeaderMenu('kvHeaderMenu-signUp');
});

signUp_mentionProfile_surName
signUp_mentionProfile_name
signUp_mentionProfile_gender
signUp_mentionProfile_motherTongue
signUp_mentionProfile_status
signUp_mentionProfile_hgtFeet
signUp_mentionProfile_hgtInches
signUp_mentionProfile_highestDegree
signUp_mentionProfile_occupation   
signUp_mentionProfile_occupationType
signUp_bzc_birthDate
signUp_bzc_birthTime
signUp_bzc_birthCountry
signUp_bzc_birthState
signUp_bzc_birthLocation
signUp_bzc_birthLocality
signUp_bzc_shakha
signUp_bzc_upaShakha
signUp_bzc_gothram
signUp_bzc_raasi
signUp_bzc_nakshatra
signUp_contactI_address
signUp_contactI_country
signUp_contactI_state
signUp_contactI_location
signUp_contactI_locality
signUp_contactI_mobile
signUp_familyBkg_fatherName
signUp_familyBkg_fatherOccpn
signUp_familyBkg_motherName
signUp_familyBkg_motherOccpn
signUp_familyBkg_noOfBrothers
signUp_familyBkg_noOfSisters
signUp_prefSpouse_highestDegree
signUp_prefSpouse_expectedOccpn
signUp_prefSpouse_expectedOccpnType
signUp_prefSpouse_expectedMTongue
(Optional)
signUp_uploadPic_picture1
signUp_uploadPic_picture2
signUp_uploadPic_picture3
</script>
<style>
.mandatoryField { color:red;font-size:16px; }
</style>
</head>
<body>
 <?php include_once 'templates/api_header.php'; ?>
 <div class="container-fluid">
   <div class="row">
	  <div align="center" class="col-sm-12">
		<h3><b>Sign Up</b></h3>
		<p>Fill your Details, we provide Information about your Partner that matches your Zodiac Information</p>
	  </div>
   </div>
   <div class="row">
     <div class="col-sm-4">
       <?php include_once 'templates/signUp/01_mentionProfile.php'; ?>
	   <?php include_once 'templates/signUp/04_familyBackground.php'; ?>
	 </div>
	 <div class="col-sm-4">
       <?php include_once 'templates/signUp/02_birthZodiacCommunity.php'; ?>
	   <?php include_once 'templates/signUp/05_preferenceOfSpouse.php'; ?>
	 </div>
	 <div class="col-sm-4">
	   <?php include_once 'templates/signUp/03_contactInformation.php'; ?>
	   <?php include_once 'templates/signUp/06_uploadYourPicture.php'; ?>
	 </div>
   </div>
   <div class="row">
	
   </div>
   <div class="row">
	
   </div>
   <div class="row">
     <div align="center" class="col-xs-12 mbot35p">
		<button class="btn btn-primary"><b>SignUp</b></button>
	 </div>
   </div>
 </div>
</body>
</html>