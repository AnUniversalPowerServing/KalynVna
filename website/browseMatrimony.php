<!DOCTYPE html>
<html lang="en">
<head>
  <title>Kalyana Veena</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
 kvHeaderMenu('kvHeaderMenu-browseMatrimony');
});
</script>
<style>
body { font-size:14px; }
</style>
  </head>
<body>
<?php include_once 'templates/api_header.php'; ?>
 
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-3">
      <h5 style="border-bottom:2px solid #000;padding-bottom:10px;"><b>Filter Search</b></h5>
      <div class="list-group">
		<div class="list-group-item" data-toggle="collapse" data-target="#filter_ageGroup">
		  Age Group&nbsp;
		  <i class="fa fa-angle-double-down pull-right" aria-hidden="true"></i>
		</div>
		<div id="filter_ageGroup" class="collapse">
			<div class="list-group-item">
			   <div><input type="checkbox"/>&nbsp;21-25</div>
			   <div><input type="checkbox"/>&nbsp;25-30</div>
			   <div><input type="checkbox"/>&nbsp;30-35</div>
			   <div><input type="checkbox"/>&nbsp;35-40</div>
			   <div><input type="checkbox"/>&nbsp;40-45</div>
			</div>
		</div>
		<div class="list-group-item" data-toggle="collapse" data-target="#filter_martialStatus">
		  Martial Status&nbsp;
		  <i class="fa fa-angle-double-down pull-right" aria-hidden="true"></i>
		</div>
		<div id="filter_martialStatus" class="collapse">
			<div class="list-group-item">
			   <div><input type="checkbox"/>&nbsp;UnMarried</div>
			   <div><input type="checkbox"/>&nbsp;Divorced</div>
			   <div><input type="checkbox"/>&nbsp;Widow</div>
			</div>
		</div>
		<div class="list-group-item" data-toggle="collapse" data-target="#filter_currentResidence">
		   Current Residence&nbsp;
		  <i class="fa fa-angle-double-down pull-right" aria-hidden="true"></i>
		</div>
		<div id="filter_currentResidence" class="collapse">
			<div class="list-group-item">
			   <div><input type="checkbox"/>&nbsp;India</div>
			   <div><input type="checkbox"/>&nbsp;USA</div>
			   <div><input type="checkbox"/>&nbsp;UK</div>
			   <div><input type="checkbox"/>&nbsp;Malyasia</div>
			   <div><input type="checkbox"/>&nbsp;Australia</div>
			</div>
		</div>
		<div class="list-group-item" data-toggle="collapse" data-target="#filter_community">
		  Community&nbsp;
		  <i class="fa fa-angle-double-down pull-right" aria-hidden="true"></i>
		</div>
		<div id="filter_community" class="collapse">
			<div class="list-group-item">
			   <div><input type="checkbox"/>&nbsp;Hindu</div>
			   <div><input type="checkbox"/>&nbsp;Muslim</div>
			   <div><input type="checkbox"/>&nbsp;Christian</div>
			   <div><input type="checkbox"/>&nbsp;Sikh</div>
			</div>
		</div>
		<div class="list-group-item" data-toggle="collapse" data-target="#filter_education">
		  Education&nbsp;
		  <i class="fa fa-angle-double-down pull-right" aria-hidden="true"></i>
		</div>
		<div id="filter_education" class="collapse">
			<div class="list-group-item">
			
			</div>
		</div>
		<div class="list-group-item" data-toggle="collapse" data-target="#filter_occupation">
		  Occupation&nbsp;
		  <i class="fa fa-angle-double-down pull-right" aria-hidden="true"></i>
		</div>
		<div id="filter_occupation" class="collapse">
			<div class="list-group-item">
			
			</div>
		</div>
		<div class="list-group-item" data-toggle="collapse" data-target="#filter_occupationType">
		  Occupation Type&nbsp;
		  <i class="fa fa-angle-double-down pull-right" aria-hidden="true"></i>
		</div>
		<div id="filter_occupationType" class="collapse">
			<div class="list-group-item">
				<div><input type="checkbox"/>&nbsp;Private Company</div>
				<div><input type="checkbox"/>&nbsp;Government / Public Sector</div>
				<div><input type="checkbox"/>&nbsp;Defence / Civil Services</div>
				<div><input type="checkbox"/>&nbsp;Business / Self Employeed</div>
				<div><input type="checkbox"/>&nbsp;Non-Working</div>
			</div>
		</div>
		<div class="list-group-item" data-toggle="collapse" data-target="#filter_motherTongue">
		  Mother Tongue&nbsp;
		  <i class="fa fa-angle-double-down pull-right" aria-hidden="true"></i>
		</div>
		<div id="filter_motherTongue" class="collapse">
			<div class="list-group-item">
			
			</div>
		</div>
		<div class="list-group-item" data-toggle="collapse" data-target="#filter_diet">
		  Diet&nbsp;
		  <i class="fa fa-angle-double-down pull-right" aria-hidden="true"></i>
		</div>
		<div id="filter_diet" class="collapse">
			<div class="list-group-item">
				<div><input type="checkbox"/>&nbsp;Vegetarian</div>
				<div><input type="checkbox"/>&nbsp;Non-Vegetarian</div>
				<div><input type="checkbox"/>&nbsp;Eggetarian</div>
				<div><input type="checkbox"/>&nbsp;Jain</div>
				<div><input type="checkbox"/>&nbsp;All</div>
			</div>
		</div>
		<div class="list-group-item" data-toggle="collapse" data-target="#filter_personalHabits">
		  Personal Habits&nbsp;
		  <i class="fa fa-angle-double-down pull-right" aria-hidden="true"></i>
		</div>
		<div id="filter_personalHabits" class="collapse">
			<div class="list-group-item">
			
			</div>
		</div>
	  </div>
    </div>
    <div class="col-sm-9">
      <h3>Column 2</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
  </div>
</div>

</body>
</html>
