<?php
class IdentityQuery {
 function query_id_customer_account($id){
   $sql="SELECT count(*) FROM customer_account WHERE account_Id='".$id."';";
   return $sql;
 }
 function query_id_customer_views($id){
   $sql="SELECT count(*) FROM customer_views WHERE view_Id='".$id."';";
   return $sql;
 }
 function query_id_match_cart($id){
  $sql="SELECT count(*) FROM match_cart WHERE cart_Id='".$id."'";
  return $sql;
 }
 function query_id_match_fav($id){
  $sql="SELECT count(*) FROM match_fav WHERE fav_Id='".$id."'";
  return $sql;
 }
 function query_id_match_list($id){
  $sql="SELECT count(*) FROM match_list WHERE match_Id='".$id."'";
  return $sql;
 }
}
?>