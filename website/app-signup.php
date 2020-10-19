<?php session_start(); 
include_once 'templates/api_params.php';
// if(!isset($_SESSION["ACCOUNT_TYPE"])){ ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>KalyanaVeena</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
  <script src="<?php echo $_SESSION["PROJECT_URL"]; ?>js/api/bootstrap-advanced.js"></script>
  <script src="<?php echo $_SESSION["PROJECT_URL"]; ?>js/api/core-skeleton.js"></script>
  <script src="<?php echo $_SESSION["PROJECT_URL"]; ?>js/common/endpoints.auth.user.js"></script>
  <script src="<?php echo $_SESSION["PROJECT_URL"]; ?>js/common/session.js"></script>
  <script src="<?php echo $_SESSION["PROJECT_URL"]; ?>js/common/validations.js"></script>
  <script src="<?php echo $_SESSION["PROJECT_URL"]; ?>js/auth/user-accounts-reg.js"></script>
  <script src="<?php echo $_SESSION["PROJECT_URL"]; ?>js/auth/user-accounts-login.js"></script>
  <script src="<?php echo $_SESSION["PROJECT_URL"]; ?>js/auth/user-accounts-retrieve-withOTP.js"></script>
  <script src="<?php echo $_SESSION["PROJECT_URL"]; ?>js/auth/user-accounts-retrieve-withSQ.js"></script>
<style>
body { background-color:purple;color:#fff; }
.mtop15p { margin-top:15px; }
.mtop65p { margin-top:65px; }
.mbot35p { margin-bottom:35px; }
/* Page Related CSS ::: Start */
.step-badges { height:40px;cursor:pointer;margin-top:15px; }
.step-badges>div>span.badge { font-size:30px;background-color:#fff;color:purple; }
.step-badges>div>span.badge.active { font-size:30px;background-color:#fff5c4;color:purple; }
.hide-block { display:none; }
/* Page Related CSS ::: End */
</style>
</head>
<body>
 <?php include_once 'templates/api_header.php'; ?>
 <?php include_once 'templates/api_js.php'; ?>

<div class="container-fluid mtop65p">
<div class="row">
<div class="col-xs-12 col-md-2 col-sm-12"></div>
<div class="col-xs-12 col-md-4 col-sm-6">
 <?php include_once 'templates/auth/user-account-reg.php'; ?>
</div><!--/.col-xs-12 col-md-4 col-sm-4 -->
<div class="col-xs-12 col-md-4 col-sm-6">
 <!-- -->
 <div align="center"><h4 class="mbot35p"><b>Login to your Account</b></h4></div>
 <?php include_once 'templates/auth/user-account-login.php'; ?>
 <?php include_once 'templates/auth/user-account-retreive-withOtp.php'; ?>
 <?php include_once 'templates/auth/user-account-retreive-withSQ.php'; ?>

 <div id="auth-login-access-userAccountForm" align="right" class="form-group hide-block curpoint"
   onclick="javascript:showHide_auth_accountAccessForm(this.id);">
	<b><u>Login to your Account</u></b>
 </div><!--/.form-group -->
 <div id="auth-login-access-retrievePwdWithMobileForm" align="right" class="form-group hide-block curpoint"
   onclick="javascript:showHide_auth_accountAccessForm(this.id);">
    <b><u>Remember Mobile Number, but Forgot Password?</u></b>
 </div><!--/.form-group -->
 <div id="auth-login-access-retrieveAccountWithoutInfoForm" align="right" class="form-group hide-block curpoint"
   onclick="javascript:showHide_auth_accountAccessForm(this.id);">
    <b><u>Forgot Password and Mobile Number changed?</u></b>
 </div><!--/.form-group -->
 <!-- -->
</div><!--/.col-xs-12 col-md-4 col-sm-4 -->
<div class="col-xs-12 col-md-2 col-sm-12"></div>
</div><!--/.row -->
</div><!--/.container-fluid -->
</body>
</html>
<?php // } else { header("Location: ".$_SESSION["PROJECT_URL"]); } ?>