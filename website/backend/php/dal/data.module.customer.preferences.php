<?php
class CustomerPreferences {
 function query_add_customerPreferences($account_Id, $exp_highDegree, $exp_occupation, $exp_occType, $exp_motherTongue,
   $exp_living_status){
  $sql="INSERT INTO customer_preferences(account_Id, exp_highDegree, exp_occupation, exp_occType, exp_motherTongue, ";
  $sql.="exp_living_status)";
  $sql.="VALUES ('".$account_Id."','".$exp_highDegree."','".$exp_occupation."','".$exp_occType."','".$exp_motherTongue;
  $sql.="','".$exp_living_status."');";
  return $sql;
 }
}
?>