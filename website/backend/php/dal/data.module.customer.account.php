<?php
class CustomerAccount {
  function query_count_accountId($account_Id){
    $sql="SELECT count(*) FROM customer_account WHERE account_Id='".$account_Id."';";
  }
  function query_add_customerAccount($account_Id, $surName, $name, $gender, $motherTongue, $status, $ft_hgt,
     $inch_hgt, $highDegree, $occupation, $occType, $living_status){
	$sql="INSERT INTO customer_account(account_Id, surName, name, gender, motherTongue, status, ft_hgt, ";
	$sql.="inch_hgt, highDegree, occupation, occType, living_status) ";
	$sql.="VALUES ('".$account_Id."','".$surName."','".$name."','".$gender."','".$motherTongue."','".$status;
	$sql.="','".$ft_hgt."','".$inch_hgt."','".$highDegree."','".$occupation."','".$occType."','".$living_status."');";
	return $sql;
  }
  function query_autocomplete_surName($searchQuery){
    $sql="SELECT surName FROM customer_account WHERE surName LIKE '%".$searchQuery."%'";
    return $sql;
  }
  function query_autocomplete_highestDegree($searchQuery){
    $sql="(SELECT highDegree FROM customer_account WHERE highDegree LIKE '%".$searchQuery."%') UNION ";
	$sql.="(SELECT exp_highDegree FROM customer_preferences WHERE exp_highDegree LIKE '%".$searchQuery."%')";
    return $sql;
  }
  function query_autocomplete_occupation($searchQuery){
    $sql="(SELECT occupation FROM customer_account WHERE occupation LIKE '%".$searchQuery."%') UNION ";
	$sql.="(SELECT exp_occupation FROM customer_preferences WHERE exp_occupation LIKE '%".$searchQuery."%') UNION ";
	$sql.="(SELECT fatherOccupation FROM customer_family WHERE fatherOccupation LIKE '%".$searchQuery."%') UNION ";
	$sql.="(SELECT motherOccupation FROM customer_family WHERE motherOccupation LIKE '%".$searchQuery."%'); ";
    return $sql;
  }
  function query_count_validatePhoneNumber($phoneNumber){
    $sql="SELECT count(*) FROM customer_account WHERE customer_account.account_Id IN ";
    $sql.="(SELECT customer_contact.account_Id FROM customer_contact WHERE customer_contact.mobile='".$phoneNumber."');";
	return $sql;
  }
  function query_data_getCustomerProfiles($phoneNumber){
    $sql="SELECT ";
	$sql.="customer_account.account_Id, customer_account.surName, customer_account.name, customer_account.gender, ";
	$sql.="customer_account.motherTongue, customer_account.status, customer_account.highDegree, ";
	$sql.="customer_account.occupation, customer_account.occType, customer_account.living_status, ";
	$sql.="customer_preferences.exp_highDegree, customer_preferences.exp_occupation, customer_preferences.exp_occType, ";
	$sql.="customer_preferences.exp_motherTongue, customer_preferences.exp_living_status ";
	$sql.="FROM customer_account, customer_preferences WHERE customer_account.account_Id IN ";
	$sql.="(SELECT account_Id FROM customer_contact WHERE mobile='".$phoneNumber."') AND ";
	$sql.=" customer_account.account_Id = customer_preferences.account_Id; ";
	return $sql;
  }
}
?>