<?php
class CustomerContact {
 function query_add_customerContact($account_Id, $address, $country, $state, $location, $minlocation, $mobile){
  $sql="INSERT INTO customer_contact(account_Id, address, country, state, location, minlocation, mobile) ";
  $sql.="VALUES ('".$account_Id."','".$address."','".$country."','".$state."','".$location."','".$minlocation;
  $sql.="','".$mobile."');";
  return $sql;
 }
}
?>