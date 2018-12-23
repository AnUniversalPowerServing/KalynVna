<?php
session_start();
require_once '../api/app.initiator.php';
require_once '../api/app.database.php';
require_once '../dal/data.module.customer.account.php';
require_once '../dal/data.module.customer.birth.php';
require_once '../dal/data.module.customer.contact.php';
require_once '../dal/data.module.customer.family.php';
require_once '../dal/data.module.customer.preferences.php';
require_once '../lal/logic.appIdentity.php';

$logger= Logger::getLogger("controller.module.app.authentication.php");

if(isset($_GET["action"])){
 /* Account Registration */
 if($_GET["action"]==='REGISTER_AUTHENTICATION'){
  $mobile = $_GET["mobile"]; 
  $surName = $_GET["surName"]; 
  $name = $_GET["name"];
  $accpwd = $_GET["accpwd"];
  $balance = '0';
  $customerAccount = new CustomerAccount();
  $query = $customerAccount->query_add_customerBalance($mobile, $surName, $name, $balance, $accpwd);
  $database = new Database($DB_KV_SERVERNAME,$DB_KV_NAME,$DB_KV_USER,$DB_KV_PASSWORD);
  echo $database->addupdateData($query);
  $_SESSION["CUSTOMERACCOUNT_SURNAME"] = $surName;
  $_SESSION["CUSTOMERACCOUNT_NAME"] = $name;
  $_SESSION["CUSTOMERACCOUNT_MOBCODE"] = '+91';
  $_SESSION["CUSTOMERACCOUNT_MOBILE"] = $mobile;
  $_SESSION["ACCOUNT_TYPE"] = 'CUSTOMER';
 }
 else if($_GET["action"]==='CHECK_MOBILENUMBER'){
  $mobile = $_GET["mobile"]; 
  $customerAccount = new CustomerAccount();
  $query = $customerAccount->query_check_customerMobile($mobile);
  $database = new Database($DB_KV_SERVERNAME,$DB_KV_NAME,$DB_KV_USER,$DB_KV_PASSWORD);
  $jsonData = $database->getJSONData($query);
  $dejsonData = json_decode($jsonData);
  if(intval($dejsonData[0]->{'count(*)'})>0){ echo 'REGISTERED'; }
  else { echo 'UNREGISTERED'; }
 }
 else if($_GET["action"]==='UPDATE_PROFILE'){
  $surName = ''; 
  if(isset($_GET["surName"])){ 
    $surName = $_GET["surName"];
    $_SESSION["CUSTOMERACCOUNT_SURNAME"] = $surName; 
  }
  $name = ''; 
  if(isset($_GET["name"])){ 
     $name = $_GET["name"];
	 $_SESSION["CUSTOMERACCOUNT_NAME"] = $name; 
  }
  $new_mobile = ''; 
  if(isset($_GET["new_mobile"])){ 
    $new_mobile = $_GET["new_mobile"];
	$_SESSION["CUSTOMERACCOUNT_MOBILE"] = $new_mobile; 
  }
  $balance = ''; 
  if(isset($_GET["balance"])){ 
    $balance = $_GET["balance"];
	$_SESSION["CUSTOMERACCOUNT_BALANCE"] = $balance; 
  }
  $prev_mobile =  $_GET["prev_mobile"]; 
  $customerAccount = new CustomerAccount();
  $query = $customerAccount->query_update_customerBalance($new_mobile, $prev_mobile, $surName, $name, $balance);
  $database = new Database($DB_KV_SERVERNAME,$DB_KV_NAME,$DB_KV_USER,$DB_KV_PASSWORD);
  echo $database->addupdateData($query);
  
 }
 /* User Profile Registration */
 else if($_GET["action"]==='GET_DATA_SURNAME'){
   if(isset($_GET["searchQuery"])){
     $searchQuery = $_GET["searchQuery"];
	 $customerAccount = new CustomerAccount();
	 $query = $customerAccount->query_autocomplete_surName($searchQuery);
	 $database = new Database($DB_KV_SERVERNAME,$DB_KV_NAME,$DB_KV_USER,$DB_KV_PASSWORD);
	 $arryList = json_encode($database->getAColumnAsArray($query,'surName'));
	 $arryList=str_replace('[','',$arryList);
	 $arryList=str_replace('"','',$arryList);
	 $arryList=str_replace(']','',$arryList);
	 echo $arryList;
   } else { echo 'MISSING_SEARCHQUERY'; }
 }
 else if($_GET["action"]==='GET_DATA_HIGHESTDEGREE'){
   if(isset($_GET["searchQuery"])){
     $searchQuery = $_GET["searchQuery"];
	 $customerAccount = new CustomerAccount();
	 $query = $customerAccount->query_autocomplete_highestDegree($searchQuery);
	 $database = new Database($DB_KV_SERVERNAME,$DB_KV_NAME,$DB_KV_USER,$DB_KV_PASSWORD);
	 $arryList = json_encode($database->getAColumnAsArray($query,'highDegree'));
	 $arryList=str_replace('[','',$arryList);
	 $arryList=str_replace('"','',$arryList);
	 $arryList=str_replace(']','',$arryList);
	 echo $arryList;
   } else { echo 'MISSING_SEARCHQUERY'; }
 }
 else if($_GET["action"]==='GET_DATA_OCCUPATION'){
   if(isset($_GET["searchQuery"])){
     $searchQuery = $_GET["searchQuery"];
	 $customerAccount = new CustomerAccount();
	 $query = $customerAccount->query_autocomplete_occupation($searchQuery);
	 $database = new Database($DB_KV_SERVERNAME,$DB_KV_NAME,$DB_KV_USER,$DB_KV_PASSWORD);
	 $arryList = json_encode($database->getAColumnAsArray($query,'occupation'));
	 $arryList=str_replace('[','',$arryList);
	 $arryList=str_replace('"','',$arryList);
	 $arryList=str_replace(']','',$arryList);
	 echo $arryList;
   } else { echo 'MISSING_SEARCHQUERY'; }
 }
 else if($_GET["action"]==='SIGNUP_AUTHENTICATION'){
    $appIdentity = new AppIdentity();
	$customerAccount = new CustomerAccount();
	$customerBirth = new CustomerBirth();
	$customerContact = new CustomerContact();
	$customerFamily = new CustomerFamily();
	$customerPreferences = new CustomerPreferences();
	/* Mention Profile */
    $account_Id = $appIdentity->customer_account_id();
	$surName = $_GET["surName"];
	$name = $_GET["name"];
	$gender = $_GET["gender"];
	if($gender=='Male'){
	 $profile_pic = $_SESSION["PROJECT_URL"].'images/men.jpg';
	} else {
	 $profile_pic = $_SESSION["PROJECT_URL"].'images/women.jpg';
	}
	$motherTongue = $_GET["motherTongue"];
	$status = $_GET["status"];
	$ft_hgt = $_GET["ft_hgt"];
    $inch_hgt = $_GET["inch_hgt"];
	$highDegree = $_GET["highDegree"];
	$occupation = $_GET["occupation"];
	$occType = $_GET["occType"];
	$living_status = $_GET["living_status"];
	/* Customer Birth */
    $dob = $_GET["dob"].':00';
	$birthCountry = $_GET["birthCountry"];
	$birthState = $_GET["birthState"];
	$birthLocation = $_GET["birthLocation"];
	$birthLocality = $_GET["birthLocality"];
	$shakha = $_GET["shakha"];
	$upashakha = $_GET["upashakha"];
	$gothram = $_GET["gothram"];
	$raasi = $_GET["raasi"];
	$nakshatram = $_GET["nakshatram"];
	/* Customer Contact */
	$address = $_GET["address"];
	$country = $_GET["country"];
	$state = $_GET["state"];
	$location = $_GET["location"];
	$minlocation = $_GET["minlocation"];
	$mobile = $_GET["mobile"];
	/* Customer Family */
	$fatherName = $_GET["fatherName"];
	$fatherOccupation = $_GET["fatherOccupation"];
	$motherName = $_GET["motherName"];
	$motherOccupation = $_GET["motherOccupation"];
	$NoOfBrothers = $_GET["NoOfBrothers"];
	$NoOfSisters = $_GET["NoOfSisters"];
	/* Customer Preferences */
	$exp_highDegree = $_GET["exp_highDegree"];
	$exp_occupation = $_GET["exp_occupation"];
	$exp_occType = $_GET["exp_occType"];
	$exp_motherTongue = $_GET["exp_motherTongue"];
	$exp_living_status = $_GET["exp_living_status"];
	$query1=$customerAccount->query_add_customerAccount($account_Id, $surName, $name, $gender, $motherTongue, $status, 
								$ft_hgt, $inch_hgt, $highDegree, $occupation, $occType, $living_status,$profile_pic);
	$query2=$customerBirth->query_add_customerBirth($account_Id, $dob, $birthCountry, $birthState, $birthLocation, 
								$birthLocality, $shakha, $upashakha, $gothram, $raasi, $nakshatram);
	$query3=$customerContact->query_add_customerContact($account_Id, $address, $country, $state, $location, 
								$minlocation, $mobile);
	$query4=$customerFamily->query_add_customerFamily($account_Id, $fatherName, $fatherOccupation, $motherName,
								 $motherOccupation, $NoOfBrothers, $NoOfSisters);
	$query5=$customerPreferences->query_add_customerPreferences($account_Id, $exp_highDegree, $exp_occupation, 
									$exp_occType, $exp_motherTongue, $exp_living_status);
	$database = new Database($DB_KV_SERVERNAME,$DB_KV_NAME,$DB_KV_USER,$DB_KV_PASSWORD);
	
	echo $query2.'<br/>';
	echo $database->addupdateData($query1);
	echo $database->addupdateData($query2);
	echo $database->addupdateData($query3);
	echo $database->addupdateData($query4);
	echo $database->addupdateData($query5);
	
 }
 else if($_GET["action"]==='SIGNIN_COUNT_AUTHENTICATION'){
   if(isset($_GET["phoneNumber"])){
     $phoneNumber = $_GET["phoneNumber"];
	 $customerAccount = new CustomerAccount();
	 $query = $customerAccount->query_count_validatePhoneNumber($phoneNumber);
	 $database = new Database($DB_KV_SERVERNAME,$DB_KV_NAME,$DB_KV_USER,$DB_KV_PASSWORD);
	 $jsonData = $database->getJSONData($query);
     $dejsonData = json_decode($jsonData);
	 $total_data = $dejsonData[0]->{'count(*)'};
	 $balance = $dejsonData[0]->{'balance'};
	 if(strlen($balance)==0){ $balance = '0'; }
	 $content = '{"total_data":"'.$total_data.'","balance":"'.$balance.'"}';
	 echo $content;
	 $_SESSION["CUSTOMERACCOUNT_MOBCODE"] = '+91';
	 $_SESSION["CUSTOMERACCOUNT_MOBILE"] = $phoneNumber;
	 $_SESSION["CUSTOMERACCOUNT_PROFILES"] = $total_data;
	 $_SESSION["CUSTOMERACCOUNT_BALANCE"] = $balance;
   } else { echo 'Missing PhoneNumber'; }
 }
 else if($_GET["action"]==='SIGNIN_DATA_AUTHENTICATION'){
   if(isset($_GET["phoneNumber"])){
    $phoneNumber = $_GET["phoneNumber"];
	$customerAccount = new CustomerAccount();
	$query = $customerAccount->query_data_customerDashboardTable($phoneNumber);
	$database = new Database($DB_KV_SERVERNAME,$DB_KV_NAME,$DB_KV_USER,$DB_KV_PASSWORD);
	echo $database->getJSONData($query);
  } else { 
     $content="Missing";
	  if(isset($_GET["phoneNumber"])){ $content.=" phoneNumber,"; } 
	  if(isset($_GET["limit_start"])){  $content.=" limit_start,"; } 
	  if(isset($_GET["limit_end"])){  $content.=" limit_end,"; }
   }
 }
 else if($_GET["action"]==='USEREDITPROFILE'){
    // customer_account:
    $account_Id = $_GET["account_Id"];
	$surName = $_GET["surName"];
	$name = $_GET["name"];
	$gender = $_GET["gender"];
	$motherTongue = $_GET["motherTongue"];
	$status = $_GET["status"];
	$ft_hgt = $_GET["ft_hgt"];
	$inch_hgt = $_GET["inch_hgt"];
	$highDegree = $_GET["highDegree"];
	$occupation = $_GET["occupation"];
	$occType = $_GET["occType"];
	$living_status = $_GET["living_status"];
	$profile_status = $_GET["profile_status"];
	$added_on = date('Y-m-d H:i:s');
	
	// customer_birth
	$dob = $_GET["dob"];
	$birthCountry = $_GET["birthCountry"];
	$birthState = $_GET["birthState"];
	$birthLocation = $_GET["birthLocation"];
	$birthLocality = $_GET["birthLocality"];
	$shakha = $_GET["shakha"];
	$upashakha = $_GET["upashakha"]; 
	$gothram = $_GET["gothram"];
	$raasi = $_GET["raasi"];
	$nakshatram = $_GET["nakshatram"];
	
	// customer_contact
	$address = $_GET["address"];
	$country = $_GET["country"];
	$state = $_GET["state"];
	$location = $_GET["location"]; 
	$minlocation = $_GET["minlocation"];  
	$mob_code = $_GET["mob_code"];
	$mobile = $_GET["mobile"];
	
	// customer_family
	$fatherName = $_GET["fatherName"];
	$fatherOccupation = $_GET["fatherOccupation"];
	$motherName = $_GET["motherName"];
	$motherOccupation = $_GET["motherOccupation"];
	$NoOfBrothers = $_GET["NoOfBrothers"];
	$NoOfSisters = $_GET["NoOfSisters"];
	
	// customer_preferences
	$exp_highDegree = $_GET["exp_highDegree"];
	$exp_occupation = $_GET["exp_occupation"];
	$exp_occType = $_GET["exp_occType"];
	$exp_motherTongue = $_GET["exp_motherTongue"];
	$exp_living_status = $_GET["exp_living_status"];
	
	$customerAccount = new CustomerAccount();
	$query = $customerAccount->query_data_editProfile($account_Id, $surName, $name, $gender, $motherTongue, $status, $ft_hgt, 
		$inch_hgt, $highDegree, $occupation, $occType, $living_status, $profile_status, $added_on, $dob, $birthCountry, 
		$birthState, $birthLocation, $birthLocality, $shakha, $upashakha, $gothram, $raasi, $nakshatram, $address, $country, 
		$state, $location, $minlocation, $mob_code, $mobile, $fatherName, $fatherOccupation, $motherName, $motherOccupation, 
	    $NoOfBrothers, $NoOfSisters, $exp_highDegree, $exp_occupation, $exp_occType, $exp_motherTongue, $exp_living_status);
	$database = new Database($DB_KV_SERVERNAME,$DB_KV_NAME,$DB_KV_USER,$DB_KV_PASSWORD);
	echo $database->addupdateData($query);
 }
 else if($_GET["action"]==='DELETEPROFILE'){
  if(isset($_GET["account_Id"])){
    $account_Id = $_GET["account_Id"];
	$customerAccount = new CustomerAccount();
	$query = $customerAccount->query_data_deleteProfile($account_Id);
	$database = new Database($DB_KV_SERVERNAME,$DB_KV_NAME,$DB_KV_USER,$DB_KV_PASSWORD);
	echo $database->addupdateData($query);
  }
  else {
    echo 'MISSING_ACCOUNT_ID';
  }
 }
 else if($_GET["action"]==='GETUSERPROFILE'){
   if(isset($_GET["account_Id"])){
    $account_Id=$_GET["account_Id"];
	$customerAccount = new CustomerAccount();
	$query = $customerAccount->query_data_getUserProfile($account_Id);
	$database = new Database($DB_KV_SERVERNAME,$DB_KV_NAME,$DB_KV_USER,$DB_KV_PASSWORD);
	echo $database->getJSONData($query);
   } else { echo 'MISSING_ACCOUNT_ID'; }
 }
 else if($_GET["action"]==='CUSTOMER_ADD_VIEW'){
  if(isset($_GET["mob_code"]) && isset($_GET["mobile"])  && isset($_GET["user_Id"])){
   $mob_code = $_GET["mob_code"];
   $mobile = $_GET["mobile"];
   $user_Id = $_GET["user_Id"];
   $appIdentity = new AppIdentity();
   $customerAccount = new CustomerAccount();
   $view_Id = $appIdentity->customer_views_id();
   $query = $customerAccount->query_data_addCustomerView($view_Id,$mob_code,$mobile,$user_Id);
   $database = new Database($DB_KV_SERVERNAME,$DB_KV_NAME,$DB_KV_USER,$DB_KV_PASSWORD);
   echo $database->addupdateData($query);
  } else {
    $content='Missing';
	if(!isset($_GET["mob_code"])){ $content.=' mob_code,'; } 
	if(!isset($_GET["mobile"])){ $content.=' mobile,'; }
	if(!isset($_GET["user_Id"])){  $content.=' user_Id,'; }
	$content=chop($content,',');
	echo $content;
  }
 }
 else if($_GET["action"]==='USER_ADD_FAVOURITES'){
  if(isset($_GET["mob_code"]) && isset($_GET["mobile"])  && isset($_GET["user_Id"])){
   $mob_code = $_GET["mob_code"];
   $mobile = $_GET["mobile"];
   $user_Id = $_GET["user_Id"];
   $appIdentity = new AppIdentity();
   $customerAccount = new CustomerAccount();
   $fav_Id = $appIdentity->match_fav_id();
   $query = $customerAccount->query_data_addToFavourites($fav_Id,$mob_code,$mobile,$user_Id);
   $database = new Database($DB_KV_SERVERNAME,$DB_KV_NAME,$DB_KV_USER,$DB_KV_PASSWORD);
   echo $database->addupdateData($query);
  } else {
    $content='Missing';
	if(!isset($_GET["mob_code"])){ $content.=' mob_code,'; } 
	if(!isset($_GET["mobile"])){ $content.=' mobile,'; }
	if(!isset($_GET["user_Id"])){  $content.=' user_Id,'; }
	$content=chop($content,',');
	echo $content;
  }
 }
 else if($_GET["action"]==='USER_VIEW_FAVOURITES'){
  
 }
 else if($_GET["action"]==='USER_DELETE_FAVOURITES'){
   if(isset($_GET["mob_code"]) && isset($_GET["mobile"])  && isset($_GET["user_Id"])){
   $mob_code = $_GET["mob_code"];
   $mobile = $_GET["mobile"];
   $user_Id = $_GET["user_Id"];
   $customerAccount = new CustomerAccount();
   $query = $customerAccount->query_data_deleteToFavourites($mob_code,$mobile,$user_Id);
   $database = new Database($DB_KV_SERVERNAME,$DB_KV_NAME,$DB_KV_USER,$DB_KV_PASSWORD);
   echo $database->addupdateData($query);
  } else {
    $content='Missing';
	if(!isset($_GET["mob_code"])){ $content.=' mob_code,'; } 
	if(!isset($_GET["mobile"])){ $content.=' mobile,'; }
	if(!isset($_GET["user_Id"])){  $content.=' user_Id,'; }
	$content=chop($content,',');
	echo $content;
  }
 }
 else { echo 'NO_ACTION_INPUT'; }
} else { echo 'MISSING_ACTION_INPUT'; }
?>