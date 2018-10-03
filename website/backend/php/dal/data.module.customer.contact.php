<?php
class CustomerContact {
 function query_add_customerContact($account_Id, $address, $country, $state, $location, $minlocation, $mobile){
  $sql="INSERT INTO customer_contact(account_Id, address, country, state, location, minlocation, mobile) ";
  $sql.="VALUES ('".$account_Id."','".$address."','".$country."','".$state."','".$location."','".$minlocation;
  $sql.="','".$mobile."');";
  return $sql;
 }
 function query_validate_mobileNumber($phoneNumber){
    $sql="SELECT count(*) FROM customer_contact WHERE mobile LIKE '%".$phoneNumber."%';";
    return $sql;
  }
}
?>