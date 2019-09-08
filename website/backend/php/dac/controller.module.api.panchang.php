<?php
session_start();
require_once '../api/app.initiator.php';
require_once '../api/app.database.php';
require_once '../dal/data.module.api.panchang.php';

$logger= Logger::getLogger("controller.module.app.panchang.php");

if(isset($_GET["action"])){
 if($_GET["action"]=='ADD_CLNDR_PANCHNG'){
  $stndTz = $_GET["stndTz"];
  $fromTs = $_GET["fromTs"];
  $toTs = $_GET["toTs"];
  $weekDay = $_GET["weekDay"];
  $nakshatra = $_GET["nakshatra"];
  $raasi = $_GET["raasi"];
  $isMangalik = $_GET["isMangalik"];
  $panchang = new Panchang();
  $query = $panchang->query_add_panchang($stndTz, $fromTs, $toTs, $weekDay, $nakshatra, $raasi, $isMangalik);
  $database = new Database($DB_KV_SERVERNAME,$DB_KV_NAME,$DB_KV_USER,$DB_KV_PASSWORD);
  echo $database->addupdateData($query);
} else if($_GET["action"]=='UPDATE_CLNDR_PANCHNG'){
   $stndTz = $_GET["stndTz"];
   $fromDate = $_GET["fromDate"];
   $toDate = $_GET["toDate"];
   $fromTs = $_GET["fromTs"];
   $toTs = $_GET["toTs"];
   $weekDay = $_GET["weekDay"];
   $nakshatra = $_GET["nakshatra"];
   $raasi = $_GET["raasi"];
   $isMangalik = $_GET["isMangalik"];
   $panchang = new Panchang();
   $query = $panchang->query_update_panchang($stndTz, $fromDate, $toDate, $fromTs, $toTs, $weekDay, $nakshatra, 
				$raasi, $isMangalik);
   $database = new Database($DB_KV_SERVERNAME,$DB_KV_NAME,$DB_KV_USER,$DB_KV_PASSWORD);
   echo $database->addupdateData($query);
}
else { echo 'NO_ACTION_INPUT'; }
} else { echo 'MISSING_ACTION_INPUT'; }
?>