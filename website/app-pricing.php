<?php session_start(); 
include_once 'templates/api_params.php';
if(!isset($_SESSION["ACCOUNT_TYPE"])){ ?>
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
  <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script type="text/javascript">
$(document).ready(function(){
 kvHeaderMenu('kvHeaderMenu-pricing');
});
</script>
<script type="text/javascript">

</script>
<style>
.bg-pink { background-color:#f44336;color:#fff; }
.bg-green { background-color:#4caf50;color:#fff; }
.bg-yellow { background-color:#ff9800;color:#fff; }
.bg-blue { background-color:#2196f3;color:#fff; }
</style>
</head>
<body>
<?php include_once 'templates/api_header.php'; ?>
<div class="container-fluid mtop15p">
<div class="row">
<!-- Bronze Plan ::: START -->
<div class="col-md-3">
<div class="list-group"> 
<div align="center" class="list-group-item bg-pink"><h4><b>BRONZE PLAN</b></h4></div>
<div class="list-group-item">
  <div class="container-fluid">
  <div class="row">
    <div class="mtop15p" class="col-xs-12"><b>Features</b></div>
  </div>
  <div class="row mtop15p">
    <div class="col-xs-2">
     <i class="fa fa-2x fa-check"></i>
    </div>
    <div class="col-xs-10">You can Sense only <b>1</b> full profile.</div>
  </div>
  <div class="row mtop15p">
    <div class="col-xs-2">
     <i class="fa fa-2x fa-check"></i>
    </div>
    <div class="col-xs-10">Profile Balance Valid upto <b>1</b> Month.</div>
  </div>
  <div class="row mtop15p">
    <div class="col-xs-2">
     <i class="fa fa-2x fa-check"></i>
    </div>
    <div class="col-xs-10">Interested Profile can be add to User Favourites.</div>
  </div>
  <div class="row mtop15p">
    <div class="col-xs-2">
     <i class="fa fa-2x fa-check"></i>
    </div>
    <div class="col-xs-10">Once your Profile is filled, your matching profiles are sent to your Dashboard 
	by calculating your Horoscope.</div>
  </div>
  <div class="row mtop15p">
    <div class="col-xs-2">
     <i class="fa fa-2x fa-check"></i>
    </div>
    <div class="col-xs-10">Once your Profile is filled, profiles that you are expecting qualifications are sent to your 
	Dashboard based on you expecting occupation, highest degree and living status.</div>
  </div>
  <div class="row mtop15p">
    <div class="col-xs-12">
	    <button class="btn bg-pink form-control"><b>Buy Credits</b></button>
	</div>
  </div>
  </div>
</div>
</div>

</div>
<!-- Bronze Plan ::: END -->
<!-- Silver Plan ::: START -->
<div class="col-md-3">
<div class="list-group"> 
<div align="center" class="list-group-item bg-green"><h4><b>SILVER PLAN</b></h4></div>
<div class="list-group-item">
  <div class="container-fluid">
  <div class="row">
    <div class="mtop15p" class="col-xs-12"><b>Features</b></div>
  </div>
  <div class="row mtop15p">
    <div class="col-xs-2">
     <i class="fa fa-2x fa-check"></i>
    </div>
    <div class="col-xs-10">You can Sense <b>10</b> full profiles.</div>
  </div>
  <div class="row mtop15p">
    <div class="col-xs-2">
     <i class="fa fa-2x fa-check"></i>
    </div>
    <div class="col-xs-10">Profile Balance Valid upto <b>3</b> Month.</div>
  </div>
  <div class="row mtop15p">
    <div class="col-xs-2">
     <i class="fa fa-2x fa-check"></i>
    </div>
    <div class="col-xs-10">Interested Profile can be add to User Favourites.</div>
  </div>
  <div class="row mtop15p">
    <div class="col-xs-2">
     <i class="fa fa-2x fa-check"></i>
    </div>
    <div class="col-xs-10">Once your Profile is filled, your matching profiles are sent to your Dashboard 
	by calculating your Horoscope.</div>
  </div>
  <div class="row mtop15p">
    <div class="col-xs-2">
     <i class="fa fa-2x fa-check"></i>
    </div>
    <div class="col-xs-10">Once your Profile is filled, profiles that you are expecting qualifications are sent to your 
	Dashboard based on you expecting occupation, highest degree and living status.</div>
  </div>
  <div class="row mtop15p">
    <div class="col-xs-12">
	  <button class="btn bg-green form-control"><b>Buy Credits</b></button>
	</div>
  </div>
  </div>
</div>
</div>
</div>
<!-- Silver Plan ::: END -->
<!-- Gold Plan ::: START -->
<div class="col-md-3">
<div class="list-group">
<div align="center" class="list-group-item bg-yellow"><h4><b>GOLD PLAN</b></h4></div>
<div class="list-group-item">
  <div class="container-fluid">
  <div class="row">
    <div class="mtop15p" class="col-xs-12"><b>Features</b></div>
  </div>
  <div class="row mtop15p">
    <div class="col-xs-2">
     <i class="fa fa-2x fa-check"></i>
    </div>
    <div class="col-xs-10">You can Sense <b>30</b> full profiles.</div>
  </div>
  <div class="row mtop15p">
    <div class="col-xs-2">
     <i class="fa fa-2x fa-check"></i>
    </div>
    <div class="col-xs-10">Profile Balance Valid upto <b>3</b> Month.</div>
  </div>
  <div class="row mtop15p">
    <div class="col-xs-2">
     <i class="fa fa-2x fa-check"></i>
    </div>
    <div class="col-xs-10">Interested Profile can be add to User Favourites.</div>
  </div>
  <div class="row mtop15p">
    <div class="col-xs-2">
     <i class="fa fa-2x fa-check"></i>
    </div>
    <div class="col-xs-10">Once your Profile is filled, your matching profiles are sent to your Dashboard 
	by calculating your Horoscope.</div>
  </div>
  <div class="row mtop15p">
    <div class="col-xs-2">
     <i class="fa fa-2x fa-check"></i>
    </div>
    <div class="col-xs-10">Once your Profile is filled, profiles that you are expecting qualifications are sent to your 
	Dashboard based on you expecting occupation, highest degree and living status.</div>
  </div>
  <div class="row mtop15p">
    <div class="col-xs-12">
	    <button class="btn bg-yellow form-control"><b>Buy Credits</b></button>
	</div>
  </div>
  </div>
</div>
</div>

</div>
<!-- Gold Plan ::: END -->
<!-- Free Plan ::: START -->
<div class="col-md-3">
<div class="list-group">
<div align="center" class="list-group-item bg-blue"><h4><b>FREE PLAN</b></h4></div>
<div class="list-group-item">
  <div class="container-fluid">
  <div class="row">
    <div class="mtop15p" class="col-xs-12"><b>Features</b></div>
  </div>
  <div class="row mtop15p">
    <div class="col-xs-2">
     <i class="fa fa-2x fa-check"></i>
    </div>
    <div class="col-xs-10">You can Sense <b>partial</b> full profiles.</div>
  </div>
  <div class="row mtop15p">
    <div class="col-xs-2">
     <i class="fa fa-2x fa-check"></i>
    </div>
    <div class="col-xs-10">No Profile Balance Available.</div>
  </div>
  <div class="row mtop15p">
    <div class="col-xs-2">
     <i class="fa fa-2x fa-check"></i>
    </div>
    <div class="col-xs-10">Interested Profile can be add to User Favourites.</div>
  </div>
  <div class="row mtop15p">
    <div class="col-xs-2">
     <i class="fa fa-2x fa-check"></i>
    </div>
    <div class="col-xs-10">Once your Profile is filled, your matching profiles are sent to your Dashboard 
	by calculating your Horoscope.</div>
  </div>
  <div class="row mtop15p">
    <div class="col-xs-2">
     <i class="fa fa-2x fa-check"></i>
    </div>
    <div class="col-xs-10">Once your Profile is filled, profiles that you are expecting qualifications are sent to your 
	Dashboard based on you expecting occupation, highest degree and living status.</div>
  </div>
  <div class="row mtop15p">
    <div class="col-xs-12">
	  <a href="<?php echo $_SESSION["PROJECT_URL"];?>app/signup/free">
	  <button class="btn bg-blue form-control"><b>Signup</b></button>
	  </a>
	</div>
  </div>
  </div>
</div>
</div>
</div>
<!-- Free Plan ::: END -->
</div>
</body>
</html>
<?php } else { header("Location: ".$_SESSION["PROJECT_URL"]); } ?>