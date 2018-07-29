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
	   <?php include_once 'templates/signUp/04_contactInformation.php'; ?>
	   <?php include_once 'templates/signUp/07_propertyInformation.php'; ?>
	 </div>
	 <div class="col-sm-4">
       <?php include_once 'templates/signUp/02_birthZodiacCommunity.php'; ?>
	   <?php include_once 'templates/signUp/05_preferenceOfSpouse.php'; ?>
	 </div>
	 <div class="col-sm-4">
       <?php include_once 'templates/signUp/03_academicEducation.php'; ?>
	   <?php include_once 'templates/signUp/06_occupation.php'; ?>
	   <?php include_once 'templates/signUp/08_uploadYourPicture.php'; ?>
	 </div>
   </div>
   <div class="row">
	<?php include_once 'templates/signUp/09_familyBackground.php'; ?>
   </div>
   <div class="row">
	<?php include_once 'templates/signUp/10_references.php'; ?> 
   </div>
   <div class="row">
     <div align="center" class="col-xs-12 mbot35p">
		<button class="btn btn-primary"><b>SignUp</b></button>
	 </div>
   </div>
 </div>
</body>
</html>