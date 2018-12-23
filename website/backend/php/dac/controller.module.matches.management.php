<?php
session_start();
require_once '../api/app.initiator.php';
require_once '../api/app.database.php';
require_once '../dal/data.module.matches.management.php';
$logger= Logger::getLogger("controller.module.matches.management.php");
if(isset($_GET["action"])){
 if($_GET["action"]=='STATISTICS_SUMMARY'){
   $matchManagement = new MatchManagement();
   $query = $matchManagement->query_count_summaryStatistics();
   $database = new Database($DB_KV_SERVERNAME,$DB_KV_NAME,$DB_KV_USER,$DB_KV_PASSWORD);
   $jsonData = $database->getJSONData($query);
   echo $jsonData;
 }
 else { echo 'NO_ACTION_INPUT'; }
} else { echo 'MISSING_ACTION_INPUT'; }
?>