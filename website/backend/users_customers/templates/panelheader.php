<style>
@font-face { font-family: "kvfont001";src: url("fonts/Acratica-demo-font.otf"); }
.hide-block { display:none; }
</style>
<!-- -->
<div id="userProfileModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="background-color:#607d8b;">
        <button type="button" class="close" data-dismiss="modal" style="color:#fff;">&times;</button>
        <h5 align="center" class="modal-title" style="color:#fff;"><b>My Profile</b></h5>
      </div>
<script type="text/javascript">
function user_logout(){
 js_ajax('POST',PROJECT_URL+'backend/php/api/app.session.php',{ action:'DestroySession' },
 function(response){ console.log(response);window.location.href=PROJECT_URL; });
}
function modal_userProfile(){
 $('#userProfileModal').modal();
 userprofile_initialForm();
}
function userprofile_formDisabled(){
 document.getElementById("userprofileform_surname").disabled=true;
 document.getElementById("userprofileform_name").disabled=true;
 document.getElementById("userprofileform_mobile").disabled=true;
}
function userprofile_formEnabled(){
 document.getElementById("userprofileform_surname").disabled=false;
 document.getElementById("userprofileform_name").disabled=false;
 document.getElementById("userprofileform_mobile").disabled=false;
}
function userprofile_initialForm(){
 document.getElementById("userprofileform_surname").value=CUSTOMERACCOUNT_SURNAME;
 document.getElementById("userprofileform_name").value=CUSTOMERACCOUNT_NAME;
 document.getElementById("userprofileform_mobile").value=CUSTOMERACCOUNT_MOBILE; 
 userprofile_formDisabled();
 userprofile_editBtn();
 userprofile_disable_otpcode();
 userprofile_reset_otpcode();
}
function userprofile_editForm(){
 userprofile_formEnabled();
 userprofile_saveBtn();
}
var USERPROFILE_UPDATE_OTPCODE=Math.floor(Math.random() * (99999-10000)+1)+10000;
function userprofile_saveForm(){
 /* Update using Ajax Call */
 var surname = document.getElementById("userprofileform_surname").value;
 var name = document.getElementById("userprofileform_name").value;
 var new_mobile = document.getElementById("userprofileform_mobile").value; 
 var prev_mobile = CUSTOMERACCOUNT_MOBILE;
 
 if(surname.length>0){
  if(name.length>0){
    if(new_mobile.length>0){
	    if(new_mobile===prev_mobile){
			js_ajax('GET',PROJECT_URL+'backend/php/dac/controller.module.app.authentication.php', 
			{ action:'UPDATE_PROFILE', surName:surname, name:name, prev_mobile:prev_mobile },  function(response){
			  console.log(response);  
			  CUSTOMERACCOUNT_MOBILE = prev_mobile;
              CUSTOMERACCOUNT_SURNAME = surname;
              CUSTOMERACCOUNT_NAME = name;
	          userprofile_formDisabled();
              userprofile_editBtn();
           });
        } else {
          /* Display OTPCode to update */
          userprofile_enable_otpcode();
          var otpcode = document.getElementById("userprofileform_otpcode").value;
          console.log("USERPROFILE_UPDATE_OTPCODE: "+USERPROFILE_UPDATE_OTPCODE);
          if(parseInt(otpcode) === parseInt(USERPROFILE_UPDATE_OTPCODE)){
            js_ajax('GET',PROJECT_URL+'backend/php/dac/controller.module.app.authentication.php', 
              { action:'UPDATE_PROFILE', surName:surname, name:name, prev_mobile:prev_mobile, new_mobile:new_mobile },  
             function(response){  console.log(response);
			   CUSTOMERACCOUNT_MOBILE = prev_mobile;
               CUSTOMERACCOUNT_SURNAME = surname;
               CUSTOMERACCOUNT_NAME = name;
			   userprofile_formDisabled();
               userprofile_editBtn();
			   userprofile_disable_otpcode();
			   userprofile_reset_otpcode();
             });
           }
       }
	   
	} else { div_display_warning('userprofileform_warning','W026'); }
  } else { div_display_warning('userprofileform_warning','W002'); }
 } else { div_display_warning('userprofileform_warning','W001'); } 
}
function userprofile_reset_otpcode(){
  document.getElementById("userprofileform_otpcode").value='';
}
function userprofile_enable_otpcode(){
 if($('#userprofileform_otpcode_form').hasClass('hide-block')){ 
  $('#userprofileform_otpcode_form').removeClass('hide-block');
 }
}
function userprofile_disable_otpcode(){
 if(!$('#userprofileform_otpcode_form').hasClass('hide-block')){ 
  $('#userprofileform_otpcode_form').addClass('hide-block');
 }
}
function userprofile_editBtn(){
 if($("#userprofileform_editProfileBtn").hasClass('hide-block')){ 
  $("#userprofileform_editProfileBtn").removeClass('hide-block');
 }
 if(!$("#userprofileform_saveProfileBtn").hasClass('hide-block')){ 
  $("#userprofileform_saveProfileBtn").addClass('hide-block');
 }
 if($("#userprofileform_resetProfileBtn").hasClass('hide-block')){ 
  $("#userprofileform_resetProfileBtn").removeClass('hide-block');
 }
}
function userprofile_saveBtn(){
 if(!$("#userprofileform_editProfileBtn").hasClass('hide-block')){ 
  $("#userprofileform_editProfileBtn").addClass('hide-block');
 }
 if($("#userprofileform_saveProfileBtn").hasClass('hide-block')){ 
  $("#userprofileform_saveProfileBtn").removeClass('hide-block');
 }
 if($("#userprofileform_resetProfileBtn").hasClass('hide-block')){ 
  $("#userprofileform_resetProfileBtn").removeClass('hide-block');
 }
}
</script>
      <div class="modal-body">
        <div class="container-fluid">
		  <div class="row">
		   <div class="col-xs-12">
		    <!-- -->
			<div id="userprofileform_warning" class="form-group">
			
			</div>
			<!-- -->
		    <!-- -->
		    <div class="form-group">
			  <label>SurName</label>
			  <input id="userprofileform_surname" type="text" class="form-control" placeholder="Enter your SurName"/>
			</div>
			<!-- -->
		    <!-- -->
		    <div class="form-group">
			  <label>Name</label>
			  <input id="userprofileform_name" type="text" class="form-control" placeholder="Enter your Name"/>
			</div>
			<!-- -->
			<!-- -->
		    <div class="form-group">
			  <label>Mobile</label>
			  <div class="input-group">
			    <span class="input-group-addon"><b>+91</b></span>
			    <input id="userprofileform_mobile" type="text" class="form-control" placeholder="Enter your Mobile"/>
			  </div>
			</div>
			<!-- -->
			<!-- -->
			<div id="userprofileform_otpcode_form" class="hide-block">
			<div class="form-group">
		      <div class="alert alert-success">
			    <b>An OTP Code is sent to your Mobile Number. Please Enter your OTP Code below to 
			    validate your Mobile Number.</b>
			  </div>
		    </div>
			<div class="form-group">
			  <label>OTPCode</label>
			  <input id="userprofileform_otpcode" type="text" class="form-control" placeholder="Enter your OTPCode"/>
			</div>
			</div>
			<!-- -->
			<!-- -->
			<div align="center" class="form-group">
			  <div class="btn-group">
			    <button id="userprofileform_editProfileBtn" class="btn btn-primary hide-block" 
				onclick="javascript:userprofile_editForm();"><b>Edit Profile</b></button>
				<button id="userprofileform_saveProfileBtn" class="btn btn-success hide-block"
				onclick="javascript:userprofile_saveForm();"><b>Save Profile</b></button>
				<button id="userprofileform_resetProfileBtn" class="btn btn-danger hide-block" 
				onclick="javascript:userprofile_initialForm();"><b>Reset</b></button>
			  </div>
			</div>
			<!-- -->
		   </div>
		  </div>
		</div>
      </div>
    </div>

  </div>
</div>
<!-- -->
<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
	<a class="navbar-brand" href="#">
      <span style="font-family:kvfont001;font-size:24px;">
	    <span style="color:#e91e63;">Kalyana</span><span style="color:#ff5722;">Veena</span><span style="color:#03a9f4;">.com</span>
	  </span>
	</a>
  </div>
  <!-- /.navbar-header -->
  <ul class="nav navbar-top-links navbar-right">
    <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">
         <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
      </a>
      <ul class="dropdown-menu dropdown-messages">
        <li>
          <a href="#">
            <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 1</strong>
                                        <span class="pull-right text-muted">40% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 2</strong>
                                        <span class="pull-right text-muted">20% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 3</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 4</strong>
                                        <span class="pull-right text-muted">80% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li ><!-- onclick="javascript:modal_userProfile();" -->
						  <a href="<?php echo $_SESSION["PROJECT_URL"]; ?>customer/myprofile">
							<i class="fa fa-user fa-fw"></i> My Profile
						  </a>
                        </li>
                        <li onclick="javascript:user_logout();"><a href="#"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Charts<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="flot.html">Flot Charts</a>
                                </li>
                                <li>
                                    <a href="morris.html">Morris.js Charts</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="tables.html"><i class="fa fa-table fa-fw"></i> Tables</a>
                        </li>
                        <li>
                            <a href="forms.html"><i class="fa fa-edit fa-fw"></i> Forms</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> UI Elements<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="panels-wells.html">Panels and Wells</a>
                                </li>
                                <li>
                                    <a href="buttons.html">Buttons</a>
                                </li>
                                <li>
                                    <a href="notifications.html">Notifications</a>
                                </li>
                                <li>
                                    <a href="typography.html">Typography</a>
                                </li>
                                <li>
                                    <a href="icons.html"> Icons</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grid</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Second Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Third Level <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                        <li>
                                            <a href="#">Third Level Item</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="blank.html">Blank Page</a>
                                </li>
                                <li>
                                    <a href="login.html">Login Page</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
