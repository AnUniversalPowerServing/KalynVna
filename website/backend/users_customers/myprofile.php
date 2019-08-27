<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo $_SESSION["PROJECT_URL"];?>backend/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo $_SESSION["PROJECT_URL"];?>backend/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo $_SESSION["PROJECT_URL"];?>backend/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo $_SESSION["PROJECT_URL"];?>backend/vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo $_SESSION["PROJECT_URL"];?>backend/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php  include_once '../../templates/api_params.php'; ?>
    <?php  include_once '../../templates/api_js.php'; ?>
</head>

<body>

    <div id="wrapper">
		<?php include_once 'templates/panelheader.php'; ?>
        <div id="page-wrapper">
            <div class="row">
			    <div class="col-lg-1"></div>
                <div class="col-lg-4">
				
                  <div class="form-group">
				    <h4 class="page-header"><b>My Profile</b></h4>
				  </div>
				  
				  <div class="form-group">
				    <label>Surname</label>
					<input type="text" class="form-control" placeholder="Enter your SurName"/>
				  </div>
				  
				  <div class="form-group">
				    <label>Name</label>
					<input type="text" class="form-control" placeholder="Enter your Name"/>
				  </div>
				  
				  <div class="form-group">
				    <label>Mobile Number</label>
					<div class="input-group">
					  <span class="input-group-addon"><b>+91</b></span>
					  <input type="text" class="form-control" placeholder="Enter your Mobile Number"/>
					</div>
				  </div>
				  
                </div>
				<div class="col-lg-2"></div>
				<div class="col-lg-4">
                    <h4 class="page-header"><b>Update Account Password</b></h4>
                </div>
				<div class="col-lg-1"></div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                   
                </div>
            </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo $_SESSION["PROJECT_URL"];?>backend/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo $_SESSION["PROJECT_URL"];?>backend/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo $_SESSION["PROJECT_URL"];?>backend/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo $_SESSION["PROJECT_URL"];?>backend/dist/js/sb-admin-2.js"></script>

</body>

</html>
