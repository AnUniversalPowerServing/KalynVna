<?php session_start(); ?>
<!DOCTYPE html>
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
<script type="text/javascript">
function profilepictureUpload() {
  var form = $('#fileuploadForm')[0];
  var formData = new FormData(form);
      formData.append("AUTH_USER_ID","TESTUserId");
      console.log("data: "+JSON.stringify(formData));
  $.ajax({type: "POST", enctype: 'multipart/form-data', url: "backend/php/dac/controller.module.profilepic.uploader.php",
  data: formData, processData: false, contentType: false, cache: false, timeout: 600000, success: function (response) {  
  console.log("SUCCESS : "+response); },error: function (e) { console.log("ERROR : "+e); } });
}
</script>
</head>
<body>
<form name="fileuploadForm" id="fileuploadForm" action="#" method="POST" enctype="multipart/form-data">
  <input type="file" name="uploadprofilepic1" id="uploadprofilepic1" accept="image/*"  
  onchange="javascript:profilepictureUpload();" style="visibility:hidden;"/>
  <img src="images/logo.png" onclick="javascript:document.getElementById('uploadprofilepic1').click();"
  style="width:100px;height:100px;border-radius:50%;"/>
</form>
</body>
</html>