<?php session_start(); 
include_once 'templates/api_params.php';
if(isset($_SESSION["ACCOUNT_TYPE"])){
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
.mtop15p { margin-top:50px; }
</style>
<script type="text/javascript">
$(document).ready(function(){
  kvHeaderMenu('kvHeaderMenu-admin-mydashboard');
  admin_summaryStatistics();
});
function admin_summaryStatistics(){
  js_ajax('GET',PROJECT_URL+'backend/php/dac/controller.module.matches.management.php',
  { action: 'STATISTICS_SUMMARY' }, function(response){
    console.log(response);
	response=JSON.parse(response);
	document.getElementById("dashboard_profilesRegisteredToday").innerHTML='<h4><b>'+response[0].profilesRegisteredToday+'</b></h4>'; 
	document.getElementById("dashboard_totalActiveMatches").innerHTML='<h4><b>'+response[0].totalActiveMatches+'</b></h4>'; 
	document.getElementById("dashboard_activeProfiles").innerHTML='<h4><b>'+response[0].totalActiveProfiles+'</b></h4>'; 
    document.getElementById("dashboard_inactiveProfiles").innerHTML='<h4><b>'+response[0].totalInActiveProfiles+'</b></h4>'; 
	document.getElementById("dashboard_totalProfiles").innerHTML='<h4><b>'+response[0].totalProfiles+'</b></h4>'; 
  });
}
</script>
</head>
<body>
 <?php include_once 'templates/api_header.php'; ?>
 <div class="container-fluid">
   <div class="row">
   
     <div class="col-md-12 col-xs-12" style="background-color:#f8f8f8;border-bottom:1px solid #e7e7e7;">
	   <div class="mtop15p mbot15p">Hi 
	   <b><?php echo $_SESSION["ADMIN_ACCOUNT_SURNAME"]; ?> <?php echo $_SESSION["ADMIN_ACCOUNT_NAME"]; ?></b>, 
	   welcome to Kalyanaveena Administrator Dashboard.</div>
	 </div>
	
	 
     <div class="col-md-12 col-xs-12 pad0">
		<!-- Start -->
	    <div class="container-fluid mtop15p">
		  <div class="row">
		    <!-- Profiles Registered Today ::: Start -->
			<div class="col-md-3 col-xs-12">
				<div class="list-group">
			      <div align="center" class="list-group-item" style="background-color:#f44336;color:#fff;">
				    <b>Profiles Registered Today</b>
				  </div>
				  <div id="dashboard_profilesRegisteredToday" align="center" class="list-group-item">
				     <h4><b>0</b></h4>
				  </div>
				</div>
			</div>
			<!-- Profiles Registered Today ::: End -->
			<!-- Total Active Matches ::: Start -->
			<div class="col-md-3 col-xs-12">
				<div class="list-group">
			      <div align="center" class="list-group-item" style="background-color:#ff5722;color:#fff;">
				    <b>Total Active Matches</b>
				  </div>
				  <div id="dashboard_totalActiveMatches" align="center" class="list-group-item">
				     <h4><b>0</b></h4>
				  </div>
				</div>
			</div> 
	
			<!-- Total Active Matches ::: End -->
			<!-- Active Profiles ::: Start -->
			<div class="col-md-3 col-xs-12">
				<div class="list-group">
			      <div align="center" class="list-group-item" style="background-color:#009688;color:#fff;">
				    <b>Active Profiles</b>
				  </div>
				  <div id="dashboard_activeProfiles" align="center" class="list-group-item">
				     <h4><b>0</b></h4>
				  </div>
				</div>
			</div> 
			<!-- Active Profiles ::: End -->
			<!-- InActive Profiles ::: Start -->
			<div class="col-md-3 col-xs-12">
				<div class="list-group">
			      <div align="center" class="list-group-item" style="background-color:#9c27b0;color:#fff;">
				    <b>InActive Profiles</b>
				  </div>
				  <div id="dashboard_inactiveProfiles" align="center" class="list-group-item">
				     <h4><b>0</b></h4>
				  </div>
				</div> 
			</div>
			<!-- InActive Profiles ::: End -->
		   </div>
		  <div class="row">
		    <!-- Total Profiles ::: Start -->
			<div class="col-md-3 col-xs-12">
				<div class="list-group">
			      <div align="center" class="list-group-item" style="background-color:#038dcc;color:#fff;">
				    <b>Total Profiles</b>
				  </div>
				  <div id="dashboard_totalProfiles" align="center" class="list-group-item">
				     <h4><b>0</b></h4>
				  </div>
				</div>
			</div>
			<!-- Total Profiles ::: End -->
		   </div>
		</div>
		<!-- End -->
	 </div>
	 
   </div>
 </div>
</body>
</html>
<?php } else { header("Location:".$_SESSION["PROJECT_URL"]."admin/home"); } ?>

