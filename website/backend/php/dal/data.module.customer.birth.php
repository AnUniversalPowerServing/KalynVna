<?php
class CustomerBirth {
 function query_add_customerBirth($account_Id, $dob, $birthCountry, $birthState, $birthLocation, $birthLocality, $shakha,
  $upashakha, $gothram, $raasi, $nakshatram){
  $sql="INSERT INTO customer_birth(account_Id, dob, birthCountry, birthState, birthLocation, birthLocality, shakha, ";
  $sql.="upashakha, gothram, raasi, nakshatram) ";
  $sql.="VALUES ('".$account_Id."','".$dob."','".$birthCountry."','".$birthState."','".$birthLocation."','";
  $sql.=$birthLocality."','".$shakha."','".$upashakha."','".$gothram."','".$raasi."','".$nakshatram."');";
  return $sql;
 }
}
?>