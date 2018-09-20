<?php
class CustomerAccount {
  function query_count_accountId($account_Id){
    $sql="SELECT count(*) FROM customer_account WHERE account_Id='".$account_Id."';";
  }
  function query_add_customerAccount($account_Id, $surName, $name, $gender, $motherTongue, $status, $ft_hgt,
     $inch_hgt, $highDegree, $occupation, $occType){
	$sql="INSERT INTO customer_account(account_Id, surName, name, gender, motherTongue, status, ft_hgt, "
	$sql.="inch_hgt, highDegree, occupation, occType) ";
	$sql.="VALUES ('".$account_Id."','".$surName."','".$name."','".$gender."','".$motherTongue."','".$status;
	$sql.="','".$ft_hgt."','".$inch_hgt."','".$highDegree."','".$occupation."','".$occType."');";
	return $sql;
  }
  
}
?>