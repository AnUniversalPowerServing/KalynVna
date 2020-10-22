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
body { background-color: #fafafa; }
.moduleHeading { border-bottom:2px solid #000;padding-bottom:10px; }
</style>
<script type="text/javascript">
$(document).ready(function(){
 kvHeaderMenu('kvHeaderMenu-customer-myMatchProfiles');
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
<!-- Filter By Profile ::: Start -->
<div id="filterByProfileModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="background-color:#630062;color:#fff;">
        <button type="button" class="close" data-dismiss="modal" style="color:#fff;">&times;</button>
        <h4 class="modal-title"><b>Choose your Profiles to Filter by Match Making Horoscope</b></h4>
      </div>
      <div class="modal-body scroll" style="background-color:#fafafa;max-height:300px;overflow-y:scroll;">
        <!-- -->
		<div class="container-fluid">
		 <div align="right" class="row">
		   <div class="col-sm-12">
		    <div class="btn-group">
			  <button class="btn btn-primary"><b>Select All Profiles</b></button>
			  <button class="btn btn-default"><b>DeSelect All Profiles</b></button>
			</div><!--/.button-group -->
		   </div><!--/.col-sm-12 -->
		 </div>
		 <div class="row mtop15p">
		   <div class="col-sm-6">
		   <!-- -->
		    <div class="list-group">
			 <div class="list-group-item">
			 <!-- -->
			  <div class="container-fluid mbot15p">
				<div class="row">
				  <div class="col-sm-2"><input type="checkbox" style="width:25px;height:25px;margin-top:15px;" checked/></div>
				  <div class="col-sm-10">
				  <!-- -->
					<div><h5 style="line-height:22px;"><b>SurName FirstName LastName</b></h5></div>
					<div style="color:#777;">Profile created for you</div>
				  <!-- -->
				  </div><!--/.col-sm-12 -->
				  </div><!--/.row -->
			   </div><!--/.container-fluid -->
			 <!-- -->
			 </div><!--/.list-group-item -->
			</div><!--/.list-group -->
		   <!-- -->
		   </div><!--/.col-sm-6 -->
		   <div class="col-sm-6">
		   <!-- -->
		    <div class="list-group">
			 <div class="list-group-item">
			  <!-- -->
			  <div class="container-fluid mbot15p">
				<div class="row">
				  <div class="col-sm-2"><input type="checkbox" style="width:25px;height:25px;margin-top:15px;" checked/></div>
				  <div class="col-sm-10">
				  <!-- -->
					<div><h5 style="line-height:22px;"><b>SurName FirstName LastName</b></h5></div>
					<div style="color:#777;">Profile created for your Brother</div>
				  <!-- -->
				  </div><!--/.col-sm-12 -->
				  </div><!--/.row -->
			   </div><!--/.container-fluid -->
			 <!-- -->
			 </div><!--/.list-group-item -->
			</div><!--/.list-group -->
		   <!-- -->
		   </div><!--/.col-sm-6 -->
		 </div><!--/.row -->
		 
		 <div class="row">
		  <div align="center" class="col-sm-12">
		   <button class="btn btn-default"><b>Search Matches</b></button>
		  </div><!--/.col-sm-12 -->
		 </div><!--/.row -->
		</div><!--/.container-fluid -->
		<!-- -->
      </div><!--/.modal-body -->
    </div><!--/.modal-content -->
	<!-- -->
  </div><!--/.modal-dialog -->
</div><!--/.modal -->
<!-- Filter By Profile ::: End -->

<?php include_once 'templates/api_header.php'; ?>
<div class="container-fluid mtop15p">
 <!-- row#1 -->
 <div class="row">
  <div class="col-sm-3 col-xs-12">
   <!-- Published Profiles ::: Start -->
   <div><h5 class="moduleHeading"><b>My Published Profiles</b></h5></div>
   <div class="mtop15p mbot35p">
    <div align="center" style="color:#777;">No Published Profile</div>
   </div>
   <!-- Published Profiles ::: End -->
   
   <!-- Unpublished Profiles ::: Start -->
   <div><h5 class="moduleHeading"><b>My Unpublished Profiles</b></h5></div>
   <div class="mtop15p">
    <div align="center" style="color:#777;">No Unpublished Profile</div>
   </div>
   <!-- Unpublished Profiles ::: End -->
  </div><!--/.col-sm-3 -->  
  <div class="col-sm-9 col-xs-12">
  <!-- -->
    <div><h5 class="moduleHeading"><b>My Matching Profiles</b></h5></div>
	<div align="right">
	  <button class="btn btn-default fs12" data-toggle="modal" data-target="#filterByProfileModal">
	    <i class="fa fa-indent"></i>&nbsp;&nbsp;<b>FILTER BY PROFILE</b>
	  </button>
	</div>
  <!-- -->
  </div><!--/.col-sm-7 -->  
 </div><!--/.row -->   
</div><!--/.container-fluid -->
</body>
</html>
<?php // } else { header("Location:".$_SESSION["PROJECT_URL"]); } ?>
  