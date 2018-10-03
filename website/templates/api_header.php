<?php
if(!isset($_SESSION["PROJECT_URL"])){ $_SESSION["PROJECT_URL"]="http://".$_SERVER["HTTP_HOST"]."/KalynVna/website/"; }
if(!isset($_SESSION["PROJECT_MODE"])){ $_SESSION["PROJECT_MODE"]='DEBUG'; }
?>
<style>
.curpoint { cursor:pointer; }
.hide-block { display:none; }
body { overflow-x:hidden; }
.pad0 { padding:0px; }
.mtop5p { margin-top:5px; }
.mtop10p { margin-top:10px; }
.mtop15p { margin-top:15px; }
.mtop20p { margin-top:20px; }
.mtop25p { margin-top:25px; }
.mbot5p { margin-bottom:5px; }
.mbot10p { margin-bottom:10px; }
.mbot15p { margin-bottom:15px; }
.mbot20p { margin-bottom:20px; }
.mbot25p { margin-bottom:25px; }
.mbot30p { margin-bottom:30px; }
.mbot35p { margin-bottom:35px; }
a { color:#fff; }
.navbar { border-radius:0px;margin-bottom:0px; }
.navbar-purple { background-color: #630062; border-color: #630062; }
.navbar-purple .navbar-toggle { border-color: #fff; }
.navbar-purple .navbar-toggle .icon-bar { background-color: #fff; }
.navbar-brand,.navbar-brand:hover { height:45px;color:#fff; }
@media (min-width: 768px) {
// #kvHeaderMenu { margin-top:5px; }
}
body::-webkit-scrollbar-track { -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);background-color: #F5F5F5; }         
body::-webkit-scrollbar { width: 6px;background-color: #F5F5F5; }        
body::-webkit-scrollbar-thumb { background-color: #000000; }
body { overflow-x:hidden; }
@font-face { font-family: "kvfont001";src: url("fonts/Acratica-demo-font.otf"); }
@font-face { font-family: "kvfont002";src: url("fonts/Boogaloo-Regular.otf"); }
.slidecontainer { width: 100%; }
.slider { -webkit-appearance: none;width: 100%;height: 15px;border-radius: 5px;background: #d3d3d3;
		  outline: none;opacity: 0.7;-webkit-transition: .2s;transition: opacity .2s; }
.slider:hover { opacity: 1; }
.slider::-webkit-slider-thumb { -webkit-appearance:none;appearance:none;width:25px;height:25px;border-radius:50%;
								background:#4CAF50;cursor:pointer; }
.slider::-moz-range-thumb { width:25px;height:25px;border-radius:50%;background:#4CAF50;cursor:pointer; }
</style>
<!-- background-color:#630062;-->
<!--div style="height:100px;">
<nav class="navbar" style="">
  <div class="container-fluid">
    <div class="navbar-header" style="height:100px;">
	  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <i class="fa fa-2x fa-align-justify" style="color:#fff;" aria-hidden="true"></i>
      </button>
      <a class="navbar-brand" href="#">
	    <img src="images/logo.png" style="width:180px;height:auto;"/>
	  </a>
    </div>
	<div class="collapse navbar-collapse" id="myNavbar" style="background-color:#630062;">
      <ul class="nav navbar-nav" style="margin-top:20px;">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="profileView.php">Browse Matrimony</a></li>
        <li><a href="fillYourDetails.php">Fill your Details</a></li>
        <li><a href="#">Page 3</a></li>
      </ul>
	</div>
  </div>
</nav>
</div-->
<div>
<style>
.navbar-nav>li.active>a { background-color:#fff;color:#000; }
</style>
<script type="text/javascript">
var CURRENT_TAB_ID;
function kvHeaderMenu(id){
 if(id!=='kvHeaderMenu-login'){ CURRENT_TAB_ID=id; }
 var arry=["kvHeaderMenu-Home","kvHeaderMenu-howItWorks","kvHeaderMenu-browseMatrimony",
 "kvHeaderMenu-matchCalculator","kvHeaderMenu-signUp"];
 for(var index=0;index<arry.length;index++){
   if(id===arry[index]) { if(!$('#'+arry[index]).hasClass('active')) { $('#'+arry[index]).addClass('active'); } }
   else { if($('#'+arry[index]).hasClass('active')) { $('#'+arry[index]).removeClass('active'); } }
 }
}
function loginForm(id){
 kvHeaderMenu(id);
 $('#loginModal').modal();
 $('.modal-open').css('padding-right','0px');
}
function closeLogin(){
 console.log('CURRENT_TAB_ID: '+CURRENT_TAB_ID);
 kvHeaderMenu(CURRENT_TAB_ID);
 $('#loginModal').modal('hide');
}
function display_div_otpcode(){
 if($('#div_otpcode').hasClass('hide-block')){ $('#div_otpcode').removeClass('hide-block'); }
 if(!$('#div_btn_otpcode').hasClass('hide-block')){ $('#div_btn_otpcode').addClass('hide-block'); }
}
function display_btn_otpcode(){
 if(!$('#div_otpcode').hasClass('hide-block')){ $('#div_otpcode').addClass('hide-block'); }
 if($('#div_btn_otpcode').hasClass('hide-block')){ $('#div_btn_otpcode').removeClass('hide-block'); }
}
function sendOTPCode(){ 
var mobile = document.getElementById("kvlogin_mobileNumber").value;
 js_ajax('GET',PROJECT_URL+'backend/php/dac/controller.module.app.authentication.php',
 { action: 'VALIDATE_PHONENUMBER', phoneNumber:mobile },function(tota_data){ 
   tota_data=parseInt(tota_data);
   console.log(tota_data); 
   if(tota_data>0){  display_div_otpcode(); }
   else { div_display_warning('alert_div_loginModal','W038'); }
 });
 
}
</script>
<nav class="navbar navbar-purple">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#kvHeaderMenu">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="#"><!--img src="images/logo.png" style="width:180px;height:auto;"/-->
	    <span style="font-family:kvfont001;font-size:24px;">KalyanaVeena.com</span>
	  </a>
    </div>
    <div id="kvHeaderMenu" class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
        <li id="kvHeaderMenu-Home" onclick="javascript:kvHeaderMenu(this.id);"><a href="<?php if(isset($_SESSION["PROJECT_URL"])){ echo $_SESSION["PROJECT_URL"]; } ?>"><b>Home</b></a></li>
		<li id="kvHeaderMenu-howItWorks" onclick="javascript:kvHeaderMenu(this.id);"><a href="<?php if(isset($_SESSION["PROJECT_URL"])){ echo $_SESSION["PROJECT_URL"]; } ?>app/howItWorks"><b>How it works?</b></a></li>
        <li id="kvHeaderMenu-browseMatrimony" onclick="javascript:kvHeaderMenu(this.id);"><a href="<?php if(isset($_SESSION["PROJECT_URL"])){ echo $_SESSION["PROJECT_URL"]; } ?>app/browseMatrimony"><b>Browse Matrimony</b></a></li>
		<li id="kvHeaderMenu-matchCalculator" onclick="javascript:kvHeaderMenu(this.id);"><a href="<?php if(isset($_SESSION["PROJECT_URL"])){ echo $_SESSION["PROJECT_URL"]; } ?>app/matchCalculator"><b>Match Calculator</b></a></li>
        <li id="kvHeaderMenu-signUp" onclick="javascript:kvHeaderMenu(this.id);"><a href="<?php if(isset($_SESSION["PROJECT_URL"])){ echo $_SESSION["PROJECT_URL"]; } ?>app/signup"><span class="glyphicon glyphicon-user"></span> <b>SignUp</b></a></li> 
		<li id="kvHeaderMenu-login" onclick="javascript:loginForm(this.id);"><a href="#"><span class="glyphicon glyphicon-log-in"></span> <b>Login</b></a></li>
      </ul>
    </div>
  </div>
</nav>
</div>

<div id="loginModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" onclick="javascript:closeLogin();">&times;</button>
        <h5 align="center" class="modal-title"><b>Login / SignIn Authentication</b></h5>
      </div>
      <div class="modal-body">
	    <!-- Start -->
        <div class="container-fluid">
		  <div class="row">
		    <div class="col-xs-12 col-md-2"></div>
		    <div class="col-xs-12 col-md-8">
			  <div id="alert_div_loginModal" class="form-group"></div>
			</div>
			<div class="col-xs-12 col-md-2"></div>
		  </div>
		  <div class="row">
		    <div class="col-xs-12 col-md-2"></div>
		    <div class="col-xs-12 col-md-8">
			  <div class="form-group">
			    <label>Mobile Number</label>
				<div class="input-group">
				<span class="input-group-addon"><b>+91</b></span>
				<input id="kvlogin_mobileNumber" type="text" class="form-control" placeholder="Enter your Mobile Number"/>
				</div>
			  </div>
			</div>
			<div class="col-xs-12 col-md-2"></div>
		  </div>
		  <div id="div_otpcode" class="row hide-block">
		    <div class="col-xs-12 col-md-2"></div>
			<div class="col-xs-12 col-xs-8">
			  <div class="form-group">
			    <label>OTP Code</label>
				<div class="input-group">
				  <input type="text" class="form-control" placeholder="Enter your OTP Code"/>
				  <span class="input-group-addon curpoint"><b>Resend OTPCode</b></span>
				</div>
			  </div>
			  <div class="form-group">
			    <button class="btn btn-primary form-control"><b>login</b></button>
			  </div>
			</div>
			<div class="col-xs-12 col-md-2"></div>
		  </div>
		  <div id="div_btn_otpcode" class="row">
		    <div class="col-xs-12 col-md-2"></div>
			<div class="col-xs-12 col-md-8">
			  <div class="form-group">
			    <button class="btn btn-primary form-control" onclick="javascript:sendOTPCode();"><b>Send OTP Code</b></button>
			  </div>
			</div>
			<div class="col-xs-12 col-md-2"></div>
		  </div>
		  </div>
		</div>
		<!-- End -->
      </div>
    </div>

  </div>
</div>