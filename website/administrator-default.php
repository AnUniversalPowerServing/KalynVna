<?php session_start(); 
include_once 'templates/api_params.php';
if(!isset($_SESSION["ACCOUNT_TYPE"])){
?>
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
  <script src="<?php echo $_SESSION["PROJECT_URL"]; ?>js/api/bootstrap-switch.js"></script>
  <link href="<?php echo $_SESSION["PROJECT_URL"]; ?>styles/api/bootstrap-switch.css" rel="stylesheet">
   <?php include_once 'templates/api_js.php'; ?>
<style>
body { background-color:#630062; }
.mtop15p { margin-top:50px; }
</style>
<script type="text/javascript">
function admin_login(){
 var admin_email = document.getElementById("admin_email").value;
 var admin_password = document.getElementById("admin_password").value;
 js_ajax("GET",PROJECT_URL+'backend/php/dac/controller.module.admin.authentication.php',
 { action:'GET_DATA_AUTHENTICATION',admin_email:admin_email, admin_password:admin_password },function(response){
   console.log(response);
   if(response.trim()==='VALID_ACCOUNT'){
    window.location.href=PROJECT_URL+'admin/dashboard';
   }
   else {
     alert_display_warning('W045');
   }
 });
}
</script>
</head>
<body>
 <?php include_once 'templates/api_admin_header.php'; ?>
 
 <div class="container-fluid">
   <div class="row">
     <div class="col-md-4 col-xs-12"></div>
     <div class="col-md-4 col-xs-12">
	 <!-- Start -->
	 <div class="list-group mtop15p">
       <div class="list-group-item">
         <b>Login</b>
       </div>
	   <div class="list-group-item">
	     <div class="form-group">
		   <label>Email</label>
		   <input id="admin_email" type="text" class="form-control" placeholder="Enter Email Address" 
		   value="naveenkanvasa@gmail.com"/>
		 </div>
		 <div class="form-group">
		   <label>Password</label>
		   <input id="admin_password" type="password" class="form-control" placeholder="Enter Password"
		   value="kanvasa123"/>
		 </div>
		 <div class="form-group">
		   <button class="btn btn-primary form-control" onclick="javascript:admin_login();"><b>login</b></button>
		 </div>
	   </div>
     </div>
	 <!-- End -->
	 </div>
	 <div class="col-md-4 col-xs-12"></div>
   </div>
 </div>
 
 <?php include_once 'templates/api_admin_bottom.php'; ?>
 
</body>
</html>
<?php } else { header("Location:".$_SESSION["PROJECT_URL"]."admin/dashboard"); } ?>