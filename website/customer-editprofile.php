<?php session_start(); 
include_once 'templates/api_params.php';
if(isset($_SESSION["ACCOUNT_TYPE"])){ 
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
<script type="text/javascript">
var USER_PROFILE_ID='<?php if(isset($_GET["1"])){ echo $_GET["1"]; } ?>';
$(document).ready(function(){
  get_data_userProfileId();
});
function get_data_userProfileId(){
 js_ajax("GET",PROJECT_URL+'backend/php/dac/controller.module.app.authentication.php',
 { action:'GETUSERPROFILE',account_Id:USER_PROFILE_ID },function(response){
   console.log(response);
 });
}
function set_data_userProfileId(){
 js_ajax("GET",PROJECT_URL+'backend/php/dac/controller.module.app.authentication.php',
 { action:'USEREDITPROFILE' },function(response){
 
 });
}
</script>
</head>
<body>
<?php include_once 'templates/api_header.php'; ?>
<div class="container-fluid mtop15p">
  <div class="row">
   <div class="col-sm-4">
     <div><h5><b>User Profile</b></h5><hr/></div>
     <?php include_once 'templates/signup/01_mentionProfile.php'; ?>
   </div>
   <div class="col-sm-4">
   
   </div>
   <div class="col-sm-4">
   
   </div>
  </div>
</div>
</body>
</html>
<?php } else { header("Location:".$_SESSION["PROJECT_URL"]); } ?>