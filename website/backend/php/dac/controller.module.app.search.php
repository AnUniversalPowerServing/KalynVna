<?php
require_once '../api/app.initiator.php';
require_once '../api/app.database.php';
require_once '../dal/data.module.customer.search.php';

$logger= Logger::getLogger("controller.module.app.search.php");

if(isset($_GET["action"])){
 if($_GET["action"]=='GET_COUNT_BROWSEMATRIMONYPROFILES'){
	$gender = array(); if(isset($_GET["gender"])) { $gender = $_GET["gender"]; }
	$motherTongue = array();  if(isset($_GET["motherTongue"])) { $motherTongue = $_GET["motherTongue"]; }
	$status = array();  if(isset($_GET["status"])) { $status = $_GET["status"]; }
	$occupationType = array();  if(isset($_GET["occupationType"])) { $occupationType = $_GET["occupationType"]; }
	$age = array();  if(isset($_GET["age"])) { $age = $_GET["age"]; }
    $customerSearch = new CustomerSearch();
	$query = $customerSearch->query_count_browseprofile($gender,$motherTongue,$status,$occupationType,$age);
	$database = new Database($DB_KV_SERVERNAME,$DB_KV_NAME,$DB_KV_USER,$DB_KV_PASSWORD);
	$jsonData = $database->getJSONData($query);
	$dejsonData = json_decode($jsonData);
	echo $dejsonData[0]->{'count(*)'};
 }
 else if($_GET["action"]=='GET_DATA_BROWSEMATRIMONYPROFILES'){
    if(isset($_GET["limit_start"]) && isset($_GET["limit_end"])){
	$limit_start = $_GET["limit_start"];
	$limit_end = $_GET["limit_end"];
	$logger->info("limit_start: ".$limit_start."  limit_end: ".$limit_end);
    $gender = array(); if(isset($_GET["gender"])) { $gender = $_GET["gender"]; }
	$motherTongue = array();  if(isset($_GET["motherTongue"])) { $motherTongue = $_GET["motherTongue"]; }
	$status = array();  if(isset($_GET["status"])) { $status = $_GET["status"]; }
	$occupationType = array();  if(isset($_GET["occupationType"])) { $occupationType = $_GET["occupationType"]; }
	$age = array();  if(isset($_GET["age"])) { $age = $_GET["age"]; }
    $customerSearch = new CustomerSearch();
	$query = $customerSearch->query_data_browseprofile($gender,$motherTongue,$status,$occupationType,$age,$limit_start,$limit_end);
	$database = new Database($DB_KV_SERVERNAME,$DB_KV_NAME,$DB_KV_USER,$DB_KV_PASSWORD);
	echo $database->getJSONData($query);
	} else { 
	    $content='Missing';
	    if(!isset($_GET["limit_start"])){ $content.=' limit_start,'; }
		if(!isset($_GET["limit_end"])){ $content.=' limit_end,'; }
		$content=chop($content,',');
		echo $content;
	}
 } 
 else if($_GET["action"]=='GET_DATA_PROFILEBYID'){
  if(isset($_GET["account_Id"])){
    $account_Id=$_GET["account_Id"];
    $customerSearch = new CustomerSearch();
	$query = $customerSearch->query_data_getProfileById($account_Id);
	$database = new Database($DB_KV_SERVERNAME,$DB_KV_NAME,$DB_KV_USER,$DB_KV_PASSWORD);
	$jsonData01 = $database->getJSONData($query);
	$dejsonData=json_decode($jsonData01);
    if(count($dejsonData)>0){
	if($dejsonData[0]->{'suggestedAccounts'}!==null){
	 
	}
	}
	echo '{"profile_data":'.$jsonData01.'}';
  } else { echo 'MISSING_ACCOUNT_ID'; }
 }
 else { echo 'NO_ACTION_INPUT'; }
} else { echo 'MISSING_ACTION_INPUT'; }