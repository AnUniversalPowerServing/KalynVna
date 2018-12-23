<?php
session_start();
require_once '../lal/logic.appIdentity.php';

if(isset($_GET["action"])){
 if($_GET["action"]=='GET_CUSTOMERACCOUNTID'){
  $appIdentity = new AppIdentity();
  echo $appIdentity->customer_account_id();
 } 
 else if($_GET["action"]=='GET_MATCHCARTID'){
   $appIdentity = new AppIdentity();
   echo $appIdentity->match_cart_id();
 } 
 else if($_GET["action"]=='GET_MATCHFAVID'){
   $appIdentity = new AppIdentity();
   echo $appIdentity->match_fav_id();
 } 
 else if($_GET["action"]=='GET_MATCHLISTID'){
   $appIdentity = new AppIdentity(); 
   echo $appIdentity->match_list_id();
 } 
 else { echo 'NO_ACTION'; }
} else { echo 'MISISNG_ACTION'; }
?>