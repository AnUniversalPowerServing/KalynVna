<?php
require_once '../api/app.initiator.php';
require_once '../api/app.database.php';
require_once '../dal/data.module.api.identity.php';

class AppIdentity {
function execution($query){
 $database = new Database($GLOBALS['DB_KV_SERVERNAME'],$GLOBALS['DB_KV_NAME'],
						  $GLOBALS['DB_KV_USER'],$GLOBALS['DB_KV_PASSWORD']);
 $jsonData = $database->getJSONData($query);
 $dejsonData = json_decode($jsonData);
 return $dejsonData[0]->{'count(*)'};
}
function id_customer_account($id){
 $appIdentity = new AppIdentity();
 $identityQuery = new IdentityQuery();
 $query = $identityQuery->query_id_customer_account($id);
 return $appIdentity->execution($query);
}
function customer_account_id(){
 $num="CA";
 for($index=0;$index<13;$index++) { $num.=rand(1,9); }
 $appIdentity = new AppIdentity();
 if(intval($appIdentity->id_customer_account($num))>0){ $appIdentity->customer_account_id(); }
 return $num;
}

function id_match_cart(){
 $appIdentity = new AppIdentity();
 $identityQuery = new IdentityQuery();
 $query = $identityQuery->query_id_match_cart($id);
 return $appIdentity->execution($query);
}
function match_cart_id(){
 $num="MCA";
 for($index=0;$index<12;$index++) { $num.=rand(1,9); }
 $appIdentity = new AppIdentity();
 if(intval($appIdentity->id_match_cart($id))>0){ match_cart_id(); }
 return $num;
}

function id_match_fav(){
 $appIdentity = new AppIdentity();
 $identityQuery = new IdentityQuery();
 $query = $identityQuery->query_id_match_fav($id);
 return $appIdentity->execution($query);
}
function match_fav_id(){
 $num="MFI";
 for($index=0;$index<12;$index++) { $num.=rand(1,9); }
 $appIdentity = new AppIdentity();
 if(intval($appIdentity->id_match_fav($id))>0){ match_fav_id(); }
 return $num;
}

function id_match_list(){
 $appIdentity = new AppIdentity();
 $identityQuery = new IdentityQuery();
 $query = $identityQuery->query_id_match_list($id);
 return $appIdentity->execution($query);
}
function match_list_id(){
 $num="MLI";
 for($index=0;$index<12;$index++) { $num.=rand(1,9); }
 $appIdentity = new AppIdentity();
 if(intval($appIdentity->id_match_list($id))>0){ match_list_id(); }
 return $num;
}
}
?>