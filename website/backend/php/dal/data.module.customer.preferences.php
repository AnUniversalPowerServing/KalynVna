<?php
class CustomerPreferences {
 function query_add_customerPreferences($account_Id, $exp_highDegree, $exp_occupation, $exp_occType, $exp_motherTongue){
  $sql="INSERT INTO customer_preferences(account_Id, exp_highDegree, exp_occupation, exp_occType, exp_motherTongue)";
  $sql.="VALUES ('".$account_Id."','".$exp_highDegree."','".$exp_occupation."','".$exp_occType."','".$exp_motherTongue."');";
  return $sql;
 }
}
?>