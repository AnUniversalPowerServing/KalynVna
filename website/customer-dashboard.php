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
<script type="text/javascript">
$(document).ready(function(){
 kvHeaderMenu('kvHeaderMenu-customer-myDashboard');
 var phoneNumber = '<?php if(isset($_SESSION["CUSTOMERACCOUNT_MOBILE"])) { echo $_SESSION["CUSTOMERACCOUNT_MOBILE"]; } ?>';
 js_ajax('GET',PROJECT_URL+'backend/php/dac/controller.module.app.authentication.php',
 { action: 'SIGNIN_DATA_AUTHENTICATION', phoneNumber: phoneNumber },function(response){
   console.log(response);
   /*
   response=JSON.parse(response);
   for(var index=0;index<response.length;index++){
   var account_Id = response[index].account_Id;
   var surName = response[index].surName;
   var name = response[index].name;
   var today_views = response[index].today_views;
   var yesterday_views = response[index].yesterday_views;
   var content='<div class="table-responsive">';
	   content='<table class="table">';
       content+='<thead style="background-color:#ccc;">';
	   content+='<tr>';
	   content+='<th>#</th>';
	   content+='<th>Profile</th>';
	   content+='<th>Visitors Yesterday</th>';
	   content+='<th>Visitors Today</th>';
	   content+='</tr>';
	   content+='</thead>';
	   content+='<tbody>';
	   content+='<tr>';
	   content+='<td>'+(index+1)+'</td>';
	   content+='<td>'+surName+' '+name+'</td>';
	   content+='<td>'+yesterday_views+'</td>';
	   content+='<td>'+today_views+'</td>';
	   content+='</tr>';
	   content+='</tbody>';
	   content+='</table>';
	   content+='</div>'; 
   }
   document.getElementById("customer-dashboard-table").innerHTML=content; */
 });
});
</script>
</head>
<body>

<?php include_once 'templates/api_header.php'; ?>
<div class="container-fluid mtop15p">
 <!-- row#1 -->
 <div class="row">
  <div class="col-md-6 col-xs-12">
  <!-- -->
  <div class="col-md-6 col-xs-12">
    <div class="list-group">
	  <div align="center" class="list-group-item" style="background-color:#e91e63;color:#fff;"><b>Your Profiles</b></div>
	  <div align="center" class="list-group-item">
	   <h4><b><?php if(isset($_SESSION["CUSTOMERACCOUNT_PROFILES"])){ echo $_SESSION["CUSTOMERACCOUNT_PROFILES"]; } ?></b></h4>
	  </div>
	</div>
  </div>
  <!-- -->
  <div class="col-md-6 col-xs-12">
    <div class="list-group">
	  <div align="center" class="list-group-item" style="background-color:#e91e63;color:#fff;"><b>Your Credits</b></div>
	  <div align="center" class="list-group-item">
	   <h4><b><?php if(isset($_SESSION["CUSTOMERACCOUNT_BALANCE"])){ echo $_SESSION["CUSTOMERACCOUNT_BALANCE"]; } ?></b></h4>
	  </div>
	</div>
  </div>
  <!-- -->
  <div class="col-md-6 col-xs-12">
   <button class="btn btn-primary form-control"><b>Buy Credits</b></button>
  </div>
  </div>
  <div class="col-md-6 col-xs-12">
    <div><h5><b>My Profiles</b></h5><hr/></div>
	<div id="customer-dashboard-table">
	
	</div>
  </div>
  <!-- -->
   
 </div>
 <!-- row#2 -->
 <div class="row">
   
 </div>
</div>
</body>
</html>
<?php // } else { header("Location:".$_SESSION["PROJECT_URL"]); } ?>
  