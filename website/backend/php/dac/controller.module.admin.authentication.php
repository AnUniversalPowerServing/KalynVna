<?php
session_start();
require_once '../api/app.initiator.php';
require_once '../api/app.database.php';
require_once '../dal/data.module.admin.account.php';
$logger= Logger::getLogger("controller.module.admin.authentication.php");

if(isset($_GET["action"])){
 if($_GET["action"]=='GET_DATA_AUTHENTICATION'){
   $email = $_GET["admin_email"];
   $password = md5($_GET["admin_password"]);
   $adminAccount = new AdminAccount();
   $query = $adminAccount->query_data_adminAuthentication($email,$password);
   $database = new Database($DB_KV_SERVERNAME,$DB_KV_NAME,$DB_KV_USER,$DB_KV_PASSWORD);
   $jsonData = $database->getJSONData($query);
   $dejsonData = json_decode($jsonData);
   if(count($dejsonData)>0){
     echo 'VALID_ACCOUNT';
	 $_SESSION["ACCOUNT_TYPE"] = 'ADMINISTRATOR';
	 $_SESSION["ADMIN_ACCOUNT_ID"] = $dejsonData[0]->account_Id;
	 $_SESSION["ADMIN_ACCOUNT_SURNAME"] = $dejsonData[0]->surName;
	 $_SESSION["ADMIN_ACCOUNT_NAME"] = $dejsonData[0]->name;
	 $_SESSION["ADMIN_ACCOUNT_EMAIL"] = $dejsonData[0]->email; 
	 $_SESSION["ADMIN_ACCOUNT_PWD"] = $dejsonData[0]->acc_pwd; 
	 $_SESSION["ADMIN_ACCOUNT_CREATEDON"] = $dejsonData[0]->created_on;
   } else {
     echo 'INVALID_ACCOUNT';
   }
 }
 else { echo 'NO_ACTION_INPUT'; }
} else { echo 'MISSING_ACTION_INPUT'; }