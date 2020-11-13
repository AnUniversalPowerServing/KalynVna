<?php
class CustomerSearch {
 function query_count_browseprofile($gender,$motherTongue,$status,$occupationType,$age){
   $query="SELECT count(*) ";
   $query.="FROM profile_brahmin_account, profile_brahmin_birth, profile_brahmin_contact, profile_brahmin_family, profile_brahmin_preferences, profile_brahmin_gallery ";
   $query.="WHERE (profile_brahmin_account.account_Id=profile_brahmin_birth.account_Id AND ";
   $query.="profile_brahmin_account.account_Id=profile_brahmin_contact.account_Id AND profile_brahmin_account.account_Id=profile_brahmin_family.account_Id ";
   $query.="AND profile_brahmin_account.account_Id=profile_brahmin_preferences.account_Id AND profile_brahmin_account.account_Id = profile_brahmin_gallery.account_Id) ";
   if(count($status)>0){  
      $query.="AND (";
	  for($index=0;$index<count($status);$index++){
        $query.=" profile_brahmin_account.status='".$status[$index]."' OR"; 
	  }
	  $query=chop($query,'OR');
	  $query.=")";
   }
   if(count($gender)>0){  
       $query.="AND (";
	   for($index=0;$index<count($gender);$index++){
	     $query.=" profile_brahmin_account.gender='".$gender[$index]."' OR"; 
	   }
	   $query=chop($query,'OR');
	   $query.=")";
   }
   if(count($motherTongue)>0){  
       $query.="AND (";
	   for($index=0;$index<count($motherTongue);$index++){
	     $query.=" profile_brahmin_account.motherTongue='".$motherTongue[$index]."' OR"; 
	   }
	   $query=chop($query,'OR');
	   $query.=")";
   } 
   if(count($occupationType)>0){  
        $query.="AND (";
		for($index=0;$index<count($occupationType);$index++){
		  $query.=" profile_brahmin_account.occupationType='".$occupationType[$index]."' OR"; 
		}
		$query=chop($query,'OR');
	    $query.=")";
   } 
   if(count($age)>0){
    $query.="AND (";
    for($index=0;$index<count($age);$index++){
	 $ageSplit = explode("-",$age[$index]);
	 $from = $ageSplit[0];
	 $to = $ageSplit[1];
     $query.="(SELECT ROUND((DATEDIFF(CURRENT_DATE, STR_TO_DATE(date(profile_brahmin_birth.dob), '%Y-%m-%d'))/365),0)>=".$from.") ";
     $query.="AND (SELECT ROUND((DATEDIFF(CURRENT_DATE, STR_TO_DATE(date(profile_brahmin_birth.dob), '%Y-%m-%d'))/365),0)<=".$to.") ";
     $query.=" OR";
    }
    $query=chop($query,'OR');
	$query.=")";
   }
   return $query;
 }
 function query_data_browseprofile($mob_code,$mobile,$accountType,$gender,$motherTongue,$status,$occupationType,$age,
  $limit_start,$limit_end){
   $query="SELECT profile_brahmin_account.account_Id, profile_brahmin_gallery.logo, ";
   $query.="profile_brahmin_account.name, profile_brahmin_account.gender, profile_brahmin_account.motherTongue, ";
   $query.="profile_brahmin_account.status, profile_brahmin_account.ft_hgt, profile_brahmin_account.inch_hgt, profile_brahmin_account.highDegree, ";
   $query.="profile_brahmin_account.occupation, profile_brahmin_account.occupationType, profile_brahmin_account.living_status, ";
   if(strlen($mob_code)>0 && strlen($mobile)>0 && $accountType=='CUSTOMER'){  
   $query.="IF((SELECT count(*) FROM match_fav WHERE match_fav.mob_code='".$mob_code."' AND match_fav.mobile='".$mobile."' ";
   $query.="AND match_fav.favProfile_Id=profile_brahmin_account.account_Id)>0,'YES','NO') As favourites,";
   }
   $query.="profile_brahmin_preferences.exp_highDegree, profile_brahmin_preferences.exp_occupation, profile_brahmin_preferences.exp_occupationType, ";
   $query.="profile_brahmin_preferences.exp_motherTongue, profile_brahmin_preferences.exp_living_status ";
   $query.="FROM profile_brahmin_account, profile_brahmin_birth, profile_brahmin_contact, profile_brahmin_family, profile_brahmin_preferences, profile_brahmin_gallery ";
   $query.="WHERE (profile_brahmin_account.account_Id=profile_brahmin_birth.account_Id AND ";
   $query.="profile_brahmin_account.account_Id=profile_brahmin_contact.account_Id AND profile_brahmin_account.account_Id=profile_brahmin_family.account_Id ";
   $query.="AND profile_brahmin_account.account_Id=profile_brahmin_preferences.account_Id AND profile_brahmin_account.account_Id=profile_brahmin_gallery.account_Id) ";
   if(count($status)>0){  
      $query.="AND (";
	  for($index=0;$index<count($status);$index++){
        $query.=" profile_brahmin_account.status='".$status[$index]."' OR"; 
	  }
	  $query=chop($query,'OR');
	  $query.=")";
   }
   if(count($gender)>0){  
       $query.="AND (";
	   for($index=0;$index<count($gender);$index++){
	     $query.=" profile_brahmin_account.gender='".$gender[$index]."' OR"; 
	   }
	   $query=chop($query,'OR');
	   $query.=")";
   }
   if(count($motherTongue)>0){  
       $query.="AND (";
	   for($index=0;$index<count($motherTongue);$index++){
	     $query.=" profile_brahmin_account.motherTongue='".$motherTongue[$index]."' OR"; 
	   }
	   $query=chop($query,'OR');
	   $query.=")";
   } 
   if(count($occupationType)>0){  
        $query.="AND (";
		for($index=0;$index<count($occupationType);$index++){
		  $query.=" profile_brahmin_account.occupationType='".$occupationType[$index]."' OR"; 
		}
		$query=chop($query,'OR');
		$query.=")";
   } 
   if(count($age)>0){
    $query.="AND (";
    for($index=0;$index<count($age);$index++){
	 $ageSplit = explode("-",$age[$index]);
	 $from = $ageSplit[0];
	 $to = $ageSplit[1];
     $query.="(SELECT ROUND((DATEDIFF(CURRENT_DATE, STR_TO_DATE(date(profile_brahmin_birth.dob), '%Y-%m-%d'))/365),0)>=".$from.") ";
     $query.="AND (SELECT ROUND((DATEDIFF(CURRENT_DATE, STR_TO_DATE(date(profile_brahmin_birth.dob), '%Y-%m-%d'))/365),0)<=".$to.") ";
     $query.=" OR";
    }
    $query=chop($query,'OR');
	$query.=")";
   }
   $query.="LIMIT ".$limit_start.",".$limit_end;
   return $query;
 }
 function query_data_getProfileById($account_Id){
  $query="SELECT ";
  $query.="profile_brahmin_account.name, profile_brahmin_account.gender, profile_brahmin_account.motherTongue, profile_brahmin_account.status, ";
  $query.="profile_brahmin_account.ft_hgt, profile_brahmin_account.inch_hgt, profile_brahmin_account.highDegree, profile_brahmin_account.occupation, ";
  $query.="profile_brahmin_account.occupationType, ";
  $query.="profile_brahmin_birth.dob, profile_brahmin_birth.birthCountry, profile_brahmin_birth.birthState, profile_brahmin_birth.birthLocation, ";
  $query.="profile_brahmin_birth.birthLocality, profile_brahmin_birth.shakha, profile_brahmin_birth.upashakha, profile_brahmin_birth.gothram, ";
  $query.="profile_brahmin_birth.raasi, profile_brahmin_birth.nakshatram, ";
  $query.="profile_brahmin_family.fatherOccupation, profile_brahmin_family.motherOccupation, profile_brahmin_family.NoOfBrothers, ";
  $query.="profile_brahmin_family.NoOfSisters, profile_brahmin_preferences.exp_highDegree, profile_brahmin_preferences.exp_occupation, ";
  $query.="profile_brahmin_preferences.exp_occupationType, profile_brahmin_preferences.exp_motherTongue, ";
  $query.="(SELECT GROUP_CONCAT(account_Id) FROM profile_brahmin_preferences WHERE ";
  $query.="exp_highDegree=profile_brahmin_preferences.exp_highDegree AND exp_occupation=profile_brahmin_preferences.exp_occupation ";
  $query.="AND exp_occupationType=profile_brahmin_preferences.exp_occupationType AND exp_motherTongue=profile_brahmin_preferences.exp_motherTongue ";
  $query.="AND account_Id!='".$account_Id."' ";
  $query.="LIMIT 0,6) As suggestedAccounts ";
  $query.="FROM profile_brahmin_account, profile_brahmin_birth, profile_brahmin_contact, profile_brahmin_family, profile_brahmin_preferences ";
  $query.="WHERE profile_brahmin_account.account_Id=profile_brahmin_birth.account_Id AND ";
  $query.="profile_brahmin_birth.account_Id=profile_brahmin_contact.account_Id AND profile_brahmin_contact.account_Id=profile_brahmin_family.account_Id ";
  $query.="AND profile_brahmin_family.account_Id=profile_brahmin_preferences.account_Id AND profile_brahmin_account.account_Id='".$account_Id."';";
  return $query;
 }
 function query_data_getSuggestedProfileById($arry_account_Id){
  $query.="SELECT name, highDegree, occupation ";
  $query.="FROM profile_brahmin_account ";
  if(count($arry_account_Id)>0){
  $query.="WHERE ";
  for($index=0;$index<count($arry_account_Id);$index++){
  $query.="account_Id='".$arry_account_Id[$index]."' OR";
  }
  $query=chop($query,'OR');
  }
  return $query;
 }
}
?>