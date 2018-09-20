<?php
class CustomerFamily {
 function query_add_customerFamily($account_Id, $fatherName, $fatherOccupation, $motherName, $motherOccupation,
   $NoOfBrothers, $NoOfSisters){
  $sql="INSERT INTO customer_family(account_Id, fatherName, fatherOccupation, motherName, motherOccupation, ";
  $sql.="NoOfBrothers, NoOfSisters) ";
  $sql.="VALUES ('".$account_Id."','".$fatherName."','".$fatherOccupation."','".$motherName."','".$motherOccupation;
  $sql.="','".$NoOfBrothers."','".$NoOfSisters."');";
  return $sql;
 }
}
?>