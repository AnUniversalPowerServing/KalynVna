<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
  <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
  <script src="js/api/charts.js"></script>
<style>
/* Basic ::: Start */
.mtop5p { margin-top: 5px; }
.mtop10p { margin-top: 10px; }
.mtop15p { margin-top: 15px; }
.mbot15p { margin-bottom: 15px; }
.mtop35p { margin-top: 35px; }
.mbot35p { margin-bottom:35px; }
.mtop45p { margin-top:45px; }
.mtop65p { margin-top:85px; }
 hr { margin-bottom: 10px; }
.hr-red { border-color: red; }
.pad0 { padding: 0px; }
.hide-block { display: none; }
.font-red { color: red; }
.font-grey { color:#555; }
.font-mdm-grey { color:#666; }
.font-lgt-grey { color:#ccc; }
.bg-grey { background-color:#f5f5f5; }
code { font-weight: bold;font-size: 11px; }
table>thead>tr { background-color:#eee;color:#000; }
/* Basic ::: End */

/* Content ::: Start */
ol#contents li { color:#F44336; }
ol#sub-contents li { color:#000;line-height:22px;cursor:pointer; }
.hgl-content { font-weight:bold;color:#2196f3; }
/* Content ::: End */
</style>
<script type="text/javascript">
$(document).ready(function(){
 loadPage('content-01-chartAnalysis-01-introduction');
});
function loadPage(id){
 $("[id^='content-']").css('color','#000');
 $("[id^='content-']").css('font-weight','400');
 $('ol#sub-contents li#'+id).css('color','#2196f3');
 $('ol#sub-contents li#'+id).css('font-weight','bold');
 id = id.replace("content-", "");
 $('#data').load("templates/"+id+".php");
}
</script>
</head>
<body>

<div class="container-fluid mtop15p">
  <div class="row">
    <div class="col-sm-4">
     <!-- -->
	 <?php include_once 'templates/00-contents.php'; ?>
	 <!-- -->
    </div><!--/.col-sm-4 -->
    <div id="data" class="col-sm-8">
      
    </div><!--/.col-sm-8 -->
  </div><!--/.row -->
</div><!--/.container-fluid -->

</body>
</html>
