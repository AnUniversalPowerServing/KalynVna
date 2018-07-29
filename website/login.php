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
  <script src="js/api/brahim-core.js"></script>
  <script src="js/api/bootstrap-switch.js"></script>
  <link href="styles/bootstrap-switch.css" rel="stylesheet">
<script type="text/javascript">
$(document).ready(function(){
 kvHeaderMenu('kvHeaderMenu-login');
});
</script>
</head>
<body>
 <?php include_once 'templates/api_header.php'; ?>
 <div class="container-fluid">
	<div class="col-md-7" style="">
	  <div style="margin-top:5%;border-right:1px solid #c0c0c0;height:510px;">
	    <div style="padding-left:15px;">
	      <div align="center" class="fom-group">
		    <h4 style="line-height:26px;color:orange;">
			  If you are Already a Member of KalyanaVeena.com, <br/>you can login here or else go for Signup.
			</h4>
		  </div>
		</div>
	  </div>
	</div>
	<div class="col-md-4">
	  <div style="margin-top:25%;">
	   <div style="padding:5px;border-bottom:1px solid #c0c0c0;margin-bottom:30px;"><h4>Login into your Account</h4></div>
	   <div class="form-group">
		<label>Profile Id</label>
		<input type="text" class="form-control" placeholder="Enter your Profile Id"/>
	   </div>
	   <div class="form-group">
		<label>Password</label>
		<input type="text" class="form-control" placeholder="Enter your Password"/>
	   </div>
	   <div align="right" class="form-group">
		<label>Forgot Password?</label>
	   </div>
	   <div class="form-group">
		 <button class="btn btn-primary form-control"><b>Login</b></button>
	   </div>
	  </div>
	</div>
	<div class="col-md-1"></div>
 </div>
</body>
</html>