<?php
class AdminAccount {
 function query_data_adminAuthentication($email,$password){
  $sql="SELECT * FROM admin_account WHERE email='".$email."' AND acc_pwd='".$password."';";
  return $sql;
 }
}

?>