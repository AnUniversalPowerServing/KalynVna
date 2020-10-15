<?php session_start(); 
include_once 'templates/api_params.php';
if(!isset($_SESSION["ACCOUNT_TYPE"])){ ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>KalyanaVeena</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php include_once 'templates/api_params.php'; ?>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"/>
  <link rel="stylesheet" href="https://jqueryui.com/resources/demos/style.css"/>
  <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet"/>
  <link href="<?php echo $_SESSION["PROJECT_URL"]; ?>styles/api/bootstrap-switch.css" rel="stylesheet"/>
  <link href="<?php echo $_SESSION["PROJECT_URL"]; ?>styles/api/core-skeleton.css" rel="stylesheet"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="<?php echo $_SESSION["PROJECT_URL"]; ?>js/api/brahim-core.js"></script>
  <script src="<?php echo $_SESSION["PROJECT_URL"]; ?>js/api/app-core.js"></script>
  <script src="<?php echo $_SESSION["PROJECT_URL"]; ?>js/api/bootstrap-switch.js"></script>
  <script src="<?php echo $_SESSION["PROJECT_URL"]; ?>js/pages/signup.js"></script>
  <script src="<?php echo $_SESSION["PROJECT_URL"]; ?>js/api/core-skeleton.js"></script>
  
<style>
.hide-block { display:none; }
.mandatoryField { color:red;font-size:16px; }
/* Phones */
@media only screen and (max-width:768px) { 
#signup_header_btns { display:none; }
}
/* Tablets */
@media only screen and (min-width:769px) and (max-width:992px) { 
#signup_header_btns { display:none; }
}
/* Laptops */
@media only screen and (min-width:993px) and (max-width:1200px) { 
#signup_header_btns { display:block; }
}
/* Large-Screens */
@media only screen and (min-width:1201px) { 
#signup_header_btns { display:block; }
}
ul.nav-stacked>li.active>a { color:#fff; }
ul.nav-stacked>li>a { color:#000; }
ul.nav-stacked>li { background-color:#ccc; }
</style>
<script type="text/javascript">

</script>
</head>
<body>
 <?php include_once 'templates/api_header.php'; ?>
 <?php include_once 'templates/api_js.php'; ?>
 <div class="container-fluid">
   <div class="row">
	  <div align="center" class="col-sm-12">
		<h3><b>Sign Up</b></h3>
		<p>Fill your Details, we provide Information about your Partner that matches your Zodiac Information</p>
	  </div>
   </div>
    <div class="row">
	  <div class="col-xs-12 col-md-3 col-sm-4 col-lg-3 mtop15p">
	    <ul class="nav nav-pills nav-stacked">
		  <li id="signup_menu_mentionprofile" onclick="javascript:sel_signup_menu(this.id);"><a href="#"><b>1. Mention Profile</b></a></li>
		  <li id="signup_menu_birthAndCommunityBg" onclick="javascript:sel_signup_menu(this.id);"><a href="#"><b>2. Birth and Community Background</b></a></li>
		  <li id="signup_menu_contactInf" onclick="javascript:sel_signup_menu(this.id);"><a href="#"><b>3. Contact Information</b></a></li>
		  <li id="signup_menu_familyBackground" onclick="javascript:sel_signup_menu(this.id);"><a href="#"><b>4. Family Background</b></a></li>
		  <li id="signup_menu_preferenceOfSpouse" onclick="javascript:sel_signup_menu(this.id);"><a href="#"><b>5. Preference Of Spouse</b></a></li>
		  <!--li id="signup_menu_uploadPicture" onclick="javascript:sel_signup_menu(this.id);"><a href="#"><b>6. Upload Picture</b></a></li-->
		  <li id="signup_menu_finish" onclick="javascript:sel_signup_menu(this.id);"><a href="#"><b>6. Finish</b></a></li>
		</ul>
	  </div>
	  <div class="col-xs-12 col-md-9 col-sm-8 col-lg-8">
	    <div id="signup_content_mentionprofile" class="hide-block"><?php include_once 'templates/signup/01_mentionProfile.php'; ?></div>
		<div id="signup_content_birthAndCommunityBg" class="hide-block"><?php include_once 'templates/signup/02_birthZodiacCommunity.php'; ?></div>
		<div id="signup_content_contactInf" class="hide-block"><?php include_once 'templates/signup/03_contactInformation.php'; ?></div>
		<div id="signup_content_familyBackground" class="hide-block"><?php include_once 'templates/signup/04_familyBackground.php'; ?></div>
		<div id="signup_content_preferenceOfSpouse" class="hide-block"><?php include_once 'templates/signup/05_preferenceOfSpouse.php'; ?></div>
		<div id="signup_content_finish" class="hide-block"><?php include_once 'templates/signup/06_finish.php'; ?></div>
	  </div>
	</div>
 </div>
 
		<?php include_once 'templates/signup/02_birthZodiacCommunity.php'; ?>
		<?php include_once 'templates/signup/03_contactInformation.php'; ?>
		<?php include_once 'templates/signup/04_familyBackground.php'; ?>
		<?php include_once 'templates/signup/05_preferenceOfSpouse.php'; ?>
		<?php include_once 'templates/signup/06_finish.php'; ?></div>
</body>
</html>
<?php } else { header("Location: ".$_SESSION["PROJECT_URL"]); } ?>