<?php
if(!isset($_SESSION["PROJECT_URL"])){ $_SESSION["PROJECT_URL"]="http://".$_SERVER["HTTP_HOST"]."/KalynVna/website/"; }
if(!isset($_SESSION["PROJECT_MODE"])){ $_SESSION["PROJECT_MODE"]='DEBUG'; }
?>