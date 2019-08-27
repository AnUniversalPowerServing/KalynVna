<?php
class CustomerAccount {
  function query_add_customerBalance($mobile, $surName, $name, $balance, $accpwd){
    $sql="INSERT INTO user_account(mob_code, mobile, surName, name, balance, acc_pwd) ";
	$sql.="VALUES ('+91','".$mobile."','".$surName."','".$name."','".$balance."','".md5($accpwd)."')";
	echo $sql;
	return $sql;
  }
  function query_check_customerMobile($mobile){
   $sql="SELECT count(*) FROM user_account WHERE mobile='".$mobile."';";
   return $sql;
  }
  function query_update_customerBalance($new_mobile, $prev_mobile, $surName, $name, $balance){
    $sql="UPDATE user_account SET";
	if(strlen($surName)>0){ $sql.=" surName='".$surName."',"; }
	if(strlen($new_mobile)>0){ $sql.=" mobile='".$new_mobile."',"; }
	if(strlen($name)>0){ $sql.=" name='".$name."',"; }
	if(strlen($balance)>0){ $sql.=" balance='".$balance."',"; }
	$sql=chop($sql,',');
	$sql.=" WHERE mobile='".$prev_mobile."';";
	return $sql;
  }
  function query_count_accountId($account_Id){
    $sql="SELECT count(*) FROM customer_account WHERE account_Id='".$account_Id."';";
  }
  function query_add_customerAccount($account_Id, $surName, $name, $gender, $motherTongue, $status, $ft_hgt,
     $inch_hgt, $highDegree, $occupation, $occType, $living_status,$profile_pic){
	$sql="INSERT INTO customer_account(account_Id, surName, name, gender, motherTongue, status, ft_hgt, ";
	$sql.="inch_hgt, highDegree, occupation, occType, living_status, profile_status, added_on, profile_pic) ";
	$sql.="VALUES ('".$account_Id."','".$surName."','".$name."','".$gender."','".$motherTongue."','".$status;
	$sql.="','".$ft_hgt."','".$inch_hgt."','".$highDegree."','".$occupation."','".$occType."','".$living_status."',";
	$sql.="'ACTIVE','".date('Y-m-d H:i:s')."','".$profile_pic."');";
	return $sql;
  }
  function query_autocomplete_surName($searchQuery){
    $sql="SELECT surName FROM customer_account WHERE surName LIKE '%".$searchQuery."%'";
    return $sql;
  }
  function query_autocomplete_highestDegree($searchQuery){
    $sql="(SELECT highDegree FROM customer_account WHERE highDegree LIKE '%".$searchQuery."%') UNION ";
	$sql.="(SELECT exp_highDegree FROM customer_preferences WHERE exp_highDegree LIKE '%".$searchQuery."%')";
    return $sql;
  }
  function query_autocomplete_occupation($searchQuery){
    $sql="(SELECT occupation FROM customer_account WHERE occupation LIKE '%".$searchQuery."%') UNION ";
	$sql.="(SELECT exp_occupation FROM customer_preferences WHERE exp_occupation LIKE '%".$searchQuery."%') UNION ";
	$sql.="(SELECT fatherOccupation FROM customer_family WHERE fatherOccupation LIKE '%".$searchQuery."%') UNION ";
	$sql.="(SELECT motherOccupation FROM customer_family WHERE motherOccupation LIKE '%".$searchQuery."%'); ";
    return $sql;
  }
  function query_count_validatePhoneNumber($phoneNumber){
    $sql="SELECT count(*),(SELECT balance FROM customer_balance WHERE customer_balance.mobile='".$phoneNumber."') As balance ";
	$sql.="FROM customer_account WHERE (customer_account.account_Id IN (SELECT customer_contact.account_Id ";
    $sql.="FROM customer_contact WHERE customer_contact.mobile='".$phoneNumber."')); ";
	return $sql;
  }
  function query_data_customerDashboardTable($phoneNumber){
   $sql="SELECT customer_account.account_Id, customer_account.surName, customer_account.name, ";
   $sql.="(SELECT count(*) FROM customer_views WHERE customer_views.mobile='".$phoneNumber."' AND ";
   $sql.="date(customer_views.account_ts)=date(NOW())) As today_views, ";
   $sql.="(SELECT count(*) FROM customer_views WHERE customer_views.mobile='".$phoneNumber."' AND ";
   $sql.="date(customer_views.account_ts)=date(NOW()- INTERVAL 1 DAY)) As yesterday_views ";
   $sql.="FROM customer_account WHERE account_Id=(SELECT account_Id FROM customer_contact WHERE ";
   $sql.="mobile='".$phoneNumber."');";
   return $sql;
  }
  function query_data_getCustomerProfiles($phoneNumber){
    $sql="SELECT ";
	$sql.="customer_account.account_Id, customer_account.surName, customer_account.name, customer_account.gender, ";
	$sql.="customer_account.motherTongue, customer_account.status, customer_account.highDegree, ";
	$sql.="customer_account.occupation, customer_account.occType, customer_account.living_status, ";
	$sql.="customer_preferences.exp_highDegree, customer_preferences.exp_occupation, customer_preferences.exp_occType, ";
	$sql.="customer_preferences.exp_motherTongue, customer_preferences.exp_living_status ";
	$sql.="FROM customer_account, customer_preferences WHERE customer_account.account_Id IN ";
	$sql.="(SELECT account_Id FROM customer_contact WHERE mobile='".$phoneNumber."') AND ";
	$sql.=" customer_account.account_Id = customer_preferences.account_Id; ";
	return $sql;
  }
  function query_data_editProfile($account_Id, $surName, $name, $gender, $motherTongue, $status, $ft_hgt, $inch_hgt, 
	$highDegree, $occupation, $occType, $living_status, $profile_status, $added_on, $dob, $birthCountry, $birthState, 
	$birthLocation, $birthLocality, $shakha, $upashakha, $gothram, $raasi, $nakshatram, $address, $country, $state, 
	$location, $minlocation, $mob_code, $mobile, $fatherName, $fatherOccupation, $motherName, $motherOccupation, 
	$NoOfBrothers, $NoOfSisters, $exp_highDegree, $exp_occupation, $exp_occType, $exp_motherTongue, $exp_living_status){
   /* customer_account */
   $sql="UPDATE customer_account SET surName='".$surName."', name='".$name."', gender='".$gender."', motherTongue='";
   $sql.=$motherTongue.", status='".$status."', ft_hgt='".$ft_hgt."', inch_hgt='".$inch_hgt."', highDegree='".$highDegree."',";
   $sql.="occupation='".$occupation."', occType='".$occType."', living_status='".$living_status."', profile_status='";
   $sql.=$profile_status."', added_on='".$added_on."' WHERE account_Id='".$account_Id."';";
   /* customer_birth */
   $sql.="UPDATE customer_birth SET dob='".$dob."', birthCountry='".$birthCountry."', birthState='".$birthState;
   $sql.="', birthLocation='".$birthLocation."', birthLocality='".$birthLocality."', shakha='".$shakha."',";
   $sql.=" upashakha='".$upashakha."', gothram='".$gothram."', raasi='".$raasi."', nakshatram='".$nakshatram."' ";
   $sql.="WHERE account_Id='".$account_Id."';";
   /* customer_contact */
   $sql.="UPDATE customer_contact SET address='".$address."', country='".$country."', state='".$state."', ";
   $sql.="location='".$location."', minlocation='".$minlocation."', mob_code='".$mob_code."', mobile='".$mobile."' ";
   $sql.="WHERE account_Id='".$account_Id."';";
   /* customer_family */
   $sql.="UPDATE customer_family SET fatherName='".$fatherName."', fatherOccupation='".$fatherOccupation."', ";
   $sql.="motherName='".$motherName."', motherOccupation='".$motherOccupation."', NoOfBrothers='".$NoOfBrothers."', ";
   $sql.="NoOfSisters='".$NoOfSisters."' WHERE account_Id='".$account_Id."';";
   /* customer_preferences */
   $sql.="UPDATE customer_preferences SET exp_highDegree='".$exp_highDegree."', exp_occupation='".$exp_occupation."', ";
   $sql.="exp_occType='".$exp_occType."', exp_motherTongue='".$exp_motherTongue."', exp_living_status='".$exp_living_status;
   $sql.="' WHERE account_Id='".$account_Id."';";
   return $sql;
  }
  function query_data_getUserProfile($account_Id){
    $sql="SELECT * FROM customer_account, customer_birth, customer_contact, customer_family, customer_preferences ";
    $sql.="WHERE customer_account.account_Id=customer_birth.account_Id AND customer_birth.account_Id=";
	$sql.="customer_contact.account_Id AND customer_contact.account_Id=customer_family.account_Id AND ";
	$sql.="customer_family.account_Id=customer_preferences.account_Id AND customer_account.account_Id='".$account_Id."';";
	return $sql;
	// customer_account  customer_birth  customer_contact  customer_family  customer_preferences
  }
  function query_data_addCustomerView($view_Id,$mob_code,$mobile,$user_Id){
    $sql="INSERT INTO customer_views(view_Id, mob_code, mobile, user_Id, account_ts) ";
	$sql.="VALUES ('".$view_Id."','".$mob_code."','".$mobile."','".$user_Id."','".date('Y-m-d H:i:s')."');";
	return $sql;
  }
  function query_data_addToFavourites($fav_Id,$mob_code,$mobile,$user_Id){
   $sql="INSERT INTO match_fav(fav_Id, mob_code, mobile, favProfile_Id, favOn) ";
   $sql.="VALUES ('".$fav_Id."','".$mob_code."','".$mobile."','".$user_Id."','".date('Y-m-d H:i:s')."');";
   return $sql;
  }
  function query_data_deleteToFavourites($mob_code,$mobile,$user_Id){
   $sql="DELETE FROM match_fav WHERE mob_code='".$mob_code."' AND mobile='".$mobile."' AND favProfile_Id='".$user_Id."';";
   return $sql;
  }
  function query_data_deleteProfile($account_Id){
   $sql="DELETE FROM match_fav WHERE favProfile_Id='".$account_Id."';";
   $sql.="DELETE FROM match_list WHERE maleUserId='".$account_Id."' OR femaleUserId='".$account_Id."';";
   $sql.="DELETE FROM customer_views WHERE user_Id='".$account_Id."';";
   $sql.="DELETE FROM customer_preferences WHERE account_Id='".$account_Id."';";
   $sql.="DELETE FROM customer_family WHERE account_Id='".$account_Id."';";
   $sql.="DELETE FROM customer_contact WHERE account_Id='".$account_Id."';";
   $sql.="DELETE FROM customer_birth WHERE account_Id='".$account_Id."';";
   $sql.="DELETE FROM customer_balance WHERE account_Id='".$account_Id."';";
   $sql.="DELETE FROM customer_account WHERE account_Id='".$account_Id."';";
   return $sql;       
  }
}
?>