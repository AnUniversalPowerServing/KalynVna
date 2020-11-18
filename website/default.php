<?php 
session_start(); 
include_once 'templates/api_params.php';
// if(!isset($_SESSION["ACCOUNT_TYPE"])){ ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>KalyanaVeena</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="styles/api/core-skeleton.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="<?php echo $_SESSION["PROJECT_URL"];?>js/api/load-data-on-scroll.js"></script>
  <script src="<?php echo $_SESSION["PROJECT_URL"];?>js/api/commons.js"></script>
  <script src="<?php echo $_SESSION["PROJECT_URL"];?>js/api/screen-display.js"></script>
  <?php include_once 'templates/api_js.php'; ?>
  <script type="text/javascript">
  $(document).ready(function(){
    kvHeaderMenu('kvHeaderMenu-Home');
	browseMatrimony.setBasicDisplayList(["gender","ageDiff","martialStatus","occupationType","profession","motherTongue"]);
	browseMatrimony.customerSeekingForm("customerSeekingForm");
  });
  </script>
<style>
body { background-color:#fafafa; }
@media only screen and (max-width:768px ) {
#kvShortDesc { display:none; }
}
.dropdown-toggle.btn-default { text-align:left; }
</style>
</head>
<body>
<?php include_once 'templates/api_header.php'; ?>

<div align="center" style="width:100%;background-color:#630062;color:#fff;"><!-- background-color:#eab15c;color:#333; -->
  <div style="font-family: UniNeue,sans-serif,Helvetica,Arial;font-size:14px;padding:15px;letter-spacing:1px;line-height:26px;font-weight:700;">
    Welcome to the World's No.1 : Highly Secured, most trusted and Successful Matrimonial Search Engine Platform
  </div>
</div>
<div class="container-fluid">
  <div class="row">
	<div class="col-sm-12" style="width:100%;height:600px;background-image: url('images/martimony-wallpaper.jpg');background-position:center;">
	   <div class="col-sm-1"></div>
	   <div class="col-sm-6"></div>
	   <div class="col-sm-2"></div>
	   <div id= "customerSeekingForm" class="col-sm-3" style="text-align:left;margin-top:10px;">
		
	   </div>
	</div>
  </div>
  <div align="center" class="row">
    <div style="padding:6px;"><h3 style="line-height:38px;"><b>This Trusted Platform is Simple, Fast and Secure</b><br/>
	<b>World's First Highly Secure and Safe Matrimony Search Engine Platform Features</b></h3></div>
  </div>
  <div class="row">
   <div class="col-sm-6" style="padding-left:15px;">
	  <div class="list-group">
		  <div class="list-group-item">
		    <div><h4 style="color:green;"><b>Your Profile Pictures and Photos - <i class="fa fa-check-circle"></i> Stays Confidential</b></h4></div>
			<div align="justify" style="font-size:14px;">When you keep your Profile Pictures and Photos on Internet at Other Matrimonial Sites, 
			there will be a chance of misusing them by Cyber Attackers - Preventing them and Keeping your data secure is our Primary Duty. </div>
		  </div><!--/.list-group-item -->
		 </div><!--/.list-group -->
	
	  <div class="list-group">
		  <div class="list-group-item">
		    <div><h4 style="color:green;"><b>Registration and Profiles Access - <i class="fa fa-check-circle"></i> 90% Free</b></h4></div>
			<div align="justify" style="font-size:14px;">
			
			</div>
		  </div><!--/.list-group-item -->
		 </div><!--/.list-group -->
		 
	   <div class="list-group">
		  <div class="list-group-item">
		    <div><h4 style="color:green;"><b>Finding Suitable Partner - <i class="fa fa-check-circle"></i> 100% Match Making within 24 Weeks</b></h4></div>
			<div align="justify" style="font-size:14px;">
			
			</div>
		  </div><!--/.list-group-item -->
		 </div><!--/.list-group -->
		 
		<div class="list-group">
		  <div class="list-group-item">
		    <div><h4 style="color:green;"><b>Select your Partner - <i class="fa fa-check-circle"></i> Our Representative gohead with MatchTalks</b></h4></div>
			<div align="justify" style="font-size:14px;">
			
			</div>
		  </div><!--/.list-group-item -->
		 </div><!--/.list-group -->
		 
   </div><!--/.col-sm-7 -->
  </div><!--/.row -->
  <div class="row"  style="background-color:#ff9800;">
	<div class="col-sm-7">
	  <div class="col-sm-12 mtop15p mbot15p">
	    <div align="center"><h4 style="font-family:kvfont002;font-size:22px;"><b>Your Profiles in KalyanaVeena.com are more Safer than any Other Matrimony Platform.</b></h4></div>
		<div align="center"><h4 style="font-family:kvfont002;font-size:22px;"><b>We keep your Data safe and Secure.</b></h4></div>
	  </div>
	</div>
	<div class="col-sm-5">
	  <div class="col-sm-1"></div>
	  <div class="col-sm-10 mbot25p" style="margin-top:25px;">
	    <div align="center">
		  <h4 style="font-family:kvfont002;font-size:22px;"><b>Find your Known by Profile Id</b></h4>
		</div>
		<div class="mbot15p">
		<div class = "input-group">
         <input type="text" class="form-control" placeholder="Enter your Profile Id" style="border:2px solid #000;"/>
		 <span class="input-group-addon" style="background-color:#fff;border-top:2px solid #000;border-bottom:2px solid #000;border-right:2px solid #000;color:#000;"><b>Search Profile</b></span>
		</div>
		</div>
	  </div>
	  <div class="col-sm-1"></div>
	</div>
  </div>
</div>

<?php include_once 'templates/api_bottom.php'; ?>
</body>
</html>
<?php//  } else {  
     //  if($_SESSION["ACCOUNT_TYPE"]=='CUSTOMER'){  header("Location: ".$_SESSION["PROJECT_URL"].'customer/dashboard'); }
  // else if($_SESSION["ACCOUNT_TYPE"]=='ADMINISTRATOR'){ header("Location: ".$_SESSION["PROJECT_URL"].'admin/dashboard');  }
 // }
?>