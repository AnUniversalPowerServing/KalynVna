<?php session_start(); 

include_once 'templates/api_params.php';
// if(isset($_SESSION["ACCOUNT_TYPE"])){ 
?>
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
<style>
body { background-color:#fafafa; }
</style>
<script type="text/javascript">
$(document).ready(function(){
 kvHeaderMenu('kvHeaderMenu-customer-createNewProfile');
});
</script>
</head>
<body>

<?php include_once 'templates/api_header.php'; ?>
<div class="container-fluid mtop15p">
<div class="row">
<div class="col-sm-9">
 <div><h5 style="border-bottom:2px solid #000;padding-bottom:10px;"><b>Create New Profile</b></h5></div>
 <!-- -->
 <div class="alert alert-info alert-dismissible">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Success!</strong> Indicates a successful or positive action.
 </div>
 <!-- -->
 <div class="row">
<div class="col-sm-4">
 <div class="list-group mtop10p">
  <div class="list-group-item">1. Mention Profile</div><!--/.list-group-item -->
  <div class="list-group-item">2. Birth, Zodiac and Community Background</div><!--/.list-group-item -->
  <div class="list-group-item">3. Contact Information</div><!--/.list-group-item -->
  <div class="list-group-item">4. Family Background</div><!--/.list-group-item -->
  <div class="list-group-item">5. Preference of Spouse</div><!--/.list-group-item -->
  <div class="list-group-item">6. Upload Picture</div><!--/.list-group-item -->
  <div class="list-group-item">7. Finish</div><!--/.list-group-item -->
 </div><!--/.list-group -->
</div><!--/.col-sm-2 -->
<div class="col-sm-8">
 <div><?php include_once 'templates/signup/01_mentionProfile.php'; ?></div>
 <div><?php include_once 'templates/signup/02_birthZodiacCommunity.php'; ?></div>
 <div><?php include_once 'templates/signup/03_contactInformation.php'; ?></div>
 <div><?php include_once 'templates/signup/04_familyBackground.php'; ?></div>
 <div><?php include_once 'templates/signup/05_preferenceOfSpouse.php'; ?></div>
 <div><?php include_once 'templates/signup/06_uploadYourPicture.php'; ?></div>
 <div><?php include_once 'templates/signup/07_finish.php'; ?></div>
</div><!--/.col-sm-7 -->
</div><!--/.row -->
</div><!--/.col-sm-9 -->
<div class="col-sm-3">
 <div><h5 style="border-bottom:2px solid #000;padding-bottom:10px;"><b>Your Other Profiles</b></h5></div>
 <!-- -->
<div class="list-group" style="cursor:pointer;">
<div class="list-group-item pad0">

 <div style="margin-top:4px;">
   <span style="text-transform:uppercase;letter-spacing:0.5px;font-weight:bold;background-color:#630062;padding:5px;color:#fff;font-size:10px;">
   Not Published</span>
 </div>
 
 <div class="container-fluid mbot15p">
  <div class="row">
   <div class="col-sm-12">
    <!-- -->
	<div class="mtop15p"><h5><b>SurName FirstName LastName</b></h5></div>
	<div style="color:#777;"><span class="label label-default" style="padding:5px;letter-spacing:0.8px;">Your Profile</span></div>
	<div class="mtop15p" align="right" style="color:#777;">&nbsp;Profile created on 06 October 2020, 12:30 PM</div>
	
	<!-- -->
   </div><!--/.col-sm-12 -->
  </div><!--/.row -->
 </div><!--/.container-fluid -->
	
 
</div><!--/.list-group-item -->
<div class="list-group-item pad0">
 <!-- -->
 <div class="container-fluid mbot15p">
  <div class="row">
   <div class="col-sm-12">
    <!-- -->
	<div class="row mtop15p">
	 <div class="col-sm-7">
	  <div class="progress" style="height:5px;margin-top:5px;margin-bottom:0px;background-color:#a965b5;">
	   <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" 
		style="width:70%;line-height:15px;font-size:10px;font-weight:bold;background-color:#630062;color:#000;">
	   </div><!--/.progress-bar -->
      </div><!--/.progress -->
	 </div><!--/.col-sm-6 -->
	 <div class="col-sm-5"><b>70% Completed</b></div>
	</div><!--/.row -->
	<!-- -->
   </div><!--/.col-sm-12 -->
  </div><!--/.row -->
 </div><!--/.container-fluid -->
 <!-- --> 

</div><!--/.list-group-item -->
</div><!--/.list-group -->
<!-- -->
</div><!--/.col-sm-3 -->
</div><!--/.row -->
</div><!--/.container-fluid -->

</body>
</html>