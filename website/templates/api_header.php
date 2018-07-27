<style>
a { color:#fff; }
.navbar { border-radius:0px;margin-bottom:0px; }
.navbar-purple { background-color: #630062; border-color: #630062; }
.navbar-purple .navbar-toggle { border-color: #fff; }
.navbar-purple .navbar-toggle .icon-bar { background-color: #fff; }
.navbar-brand,.navbar-brand:hover { height:45px;color:#fff; }
@media (min-width: 768px) {
// #kvHeaderMenu { margin-top:5px; }
}
</style>
<style>
body::-webkit-scrollbar-track { -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);background-color: #F5F5F5; }         
body::-webkit-scrollbar { width: 6px;background-color: #F5F5F5; }        
body::-webkit-scrollbar-thumb { background-color: #000000; }
body { overflow-x:hidden; }
@font-face { font-family: "kvfont001";src: url("fonts/Acratica-demo-font.otf"); }
@font-face { font-family: "kvfont002";src: url("fonts/Boogaloo-Regular.otf"); }
</style>
<style>
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
<nav class="navbar navbar-purple">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#kvHeaderMenu">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="#"><!--img src="images/logo.png" style="width:180px;height:auto;"/-->
	    <span style="font-family:kvfont001;font-size:32px;">KalyanaVeena.com</span>
	  </a>
    </div>
    <div id="kvHeaderMenu" class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="#"><b>Home</b></a></li>
		<li><a href="#"><b>How it works?</b></a></li>
        <li><a href="#"><b>Browse Matrimony</b></a></li>
        <li><a href="#"><b>Fill your Details</b></a></li> 
		<li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
</div>