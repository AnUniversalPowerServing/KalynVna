<?php
class CustomerAccount {
  function query_count_accountId($account_Id){
    $sql="SELECT count(*) FROM customer_account WHERE account_Id='".$account_Id."';";
  }
  function query_add_customerAccount($account_Id, $surName, $name, $gender, $motherTongue, $status, $ft_hgt,
     $inch_hgt, $highDegree, $occupation, $occType){
	$sql="INSERT INTO customer_account(account_Id, surName, name, gender, motherTongue, status, ft_hgt, ";
	$sql.="inch_hgt, highDegree, occupation, occType) ";
	$sql.="VALUES ('".$account_Id."','".$surName."','".$name."','".$gender."','".$motherTongue."','".$status;
	$sql.="','".$ft_hgt."','".$inch_hgt."','".$highDegree."','".$occupation."','".$occType."');";
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
}
?>