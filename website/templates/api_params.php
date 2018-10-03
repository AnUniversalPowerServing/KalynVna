<?php
if(!isset($_SESSION["PROJECT_URL"])){ $_SESSION["PROJECT_URL"]="http://".$_SERVER["HTTP_HOST"]."/KalynVna/website/"; } 
if(!isset($_SESSION["USR_LANG"])){ $_SESSION["USR_LANG"]='english'; }
if(!isset($_SESSION["PROJECT_MODE"])){ $_SESSION["PROJECT_MODE"]='DEBUG'; }
?>
<script type="text/javascript">
var PROJECT_URL='<?php echo $_SESSION["PROJECT_URL"]; ?>';
var USR_LANG='<?php echo $_SESSION["USR_LANG"]; ?>';
</script>