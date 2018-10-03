<?php
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
 if($_GET["action"]==='GET_DATA_SURNAME'){
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
	$motherTongue = $_GET["motherTongue"];
	$status = $_GET["status"];
	$ft_hgt = $_GET["ft_hgt"];
    $inch_hgt = $_GET["inch_hgt"];
	$highDegree = $_GET["highDegree"];
	$occupation = $_GET["occupation"];
	$occType = $_GET["occType"];
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
	$query1=$customerAccount->query_add_customerAccount($account_Id, $surName, $name, $gender, $motherTongue, $status, 
								$ft_hgt, $inch_hgt, $highDegree, $occupation, $occType);
	$query2=$customerBirth->query_add_customerBirth($account_Id, $dob, $birthCountry, $birthState, $birthLocation, 
								$birthLocality, $shakha, $upashakha, $gothram, $raasi, $nakshatram);
	$query3=$customerContact->query_add_customerContact($account_Id, $address, $country, $state, $location, 
								$minlocation, $mobile);
	$query4=$customerFamily->query_add_customerFamily($account_Id, $fatherName, $fatherOccupation, $motherName,
								 $motherOccupation, $NoOfBrothers, $NoOfSisters);
	$query5=$customerPreferences->query_add_customerPreferences($account_Id, $exp_highDegree, $exp_occupation, $exp_occType,
								 $exp_motherTongue);
	$database = new Database($DB_KV_SERVERNAME,$DB_KV_NAME,$DB_KV_USER,$DB_KV_PASSWORD);
	
	echo $query2.'<br/>';
	echo $database->addupdateData($query1);
	echo $database->addupdateData($query2);
	echo $database->addupdateData($query3);
	echo $database->addupdateData($query4);
	echo $database->addupdateData($query5);
	
 }
 else if($_GET["action"]==='VALIDATE_PHONENUMBER'){
   if(isset($_GET["phoneNumber"])){
     $phoneNumber = $_GET["phoneNumber"];
	 $customerContact = new CustomerContact();
	 $query = $customerContact->query_validate_mobileNumber($phoneNumber);
	 $database = new Database($DB_KV_SERVERNAME,$DB_KV_NAME,$DB_KV_USER,$DB_KV_PASSWORD);
	 $jsonData=$database->getJSONData($query);
	 $dejsonData=json_decode($jsonData);
	 echo $dejsonData[0]->{'count(*)'};
   } else { echo 'MISSING_PHONENUMBER'; }
 }
 else { echo 'NO_ACTION_INPUT'; }
} else { echo 'MISSING_ACTION_INPUT'; }
?>