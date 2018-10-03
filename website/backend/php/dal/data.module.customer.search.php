<?php
class CustomerSearch {
 function query_count_browseprofile($gender,$motherTongue,$status,$occupationType,$age){
   $query="SELECT count(*) ";
   $query.="FROM customer_account, customer_birth, customer_contact, customer_family, customer_preferences ";
   $query.="WHERE (customer_account.account_Id=customer_birth.account_Id AND ";
   $query.="customer_birth.account_Id=customer_contact.account_Id AND customer_contact.account_Id=customer_family.account_Id ";
   $query.="AND customer_family.account_Id=customer_preferences.account_Id) ";
   if(count($status)>0){  
      $query.="AND ";
	  for($index=0;$index<count($status);$index++){
        $query.=" customer_account.status='".$status[$index]."' OR"; 
	  }
	  $query=chop($query,'OR');
   }
   if(count($gender)>0){  
       $query.="AND ";
	   for($index=0;$index<count($gender);$index++){
	     $query.=" customer_account.gender='".$gender[$index]."' OR"; 
	   }
	   $query=chop($query,'OR');
   }
   if(count($motherTongue)>0){  
       $query.="AND ";
	   for($index=0;$index<count($motherTongue);$index++){
	     $query.=" customer_account.motherTongue='".$motherTongue[$index]."' OR"; 
	   }
   } 
   if(count($occupationType)>0){  
        $query.="AND ";
		for($index=0;$index<count($occupationType);$index++){
		  $query.=" customer_account.occupationType='".$occupationType[$index]."' OR"; 
		}
   } 
   if(count($age)>0){
    $query.="AND ";
    for($index=0;$index<count($age);$index++){
     $query.="(SELECT ROUND((DATEDIFF(CURRENT_DATE, STR_TO_DATE(date(customer_birth.dob), '%Y-%m-%d'))/365),0)>=".$age[$index]["from"].") ";
     $query.="AND (SELECT ROUND((DATEDIFF(CURRENT_DATE, STR_TO_DATE(date(customer_birth.dob), '%Y-%m-%d'))/365),0)<=".$age[$index]["to"].") ";
     $query.=" OR";
    }
    $query=chop($query,'OR');
   }
   return $query;
 }
 function query_data_browseprofile($gender,$motherTongue,$status,$occupationType,$age,$limit_start,$limit_end){
   $query="SELECT customer_account.account_Id, ";
   $query.="customer_account.name, customer_account.gender, customer_account.motherTongue, ";
   $query.="customer_account.status, customer_account.ft_hgt, customer_account.inch_hgt, customer_account.highDegree, ";
   $query.="customer_account.occupation, customer_account.occType, ";
   $query.="customer_preferences.exp_highDegree, customer_preferences.exp_occupation, customer_preferences.exp_occType, ";
   $query.="customer_preferences.exp_motherTongue ";
   $query.="FROM customer_account, customer_birth, customer_contact, customer_family, customer_preferences ";
   $query.="WHERE (customer_account.account_Id=customer_birth.account_Id AND ";
   $query.="customer_birth.account_Id=customer_contact.account_Id AND customer_contact.account_Id=customer_family.account_Id ";
   $query.="AND customer_family.account_Id=customer_preferences.account_Id) ";
   if(count($status)>0){  
      $query.="AND ";
	  for($index=0;$index<count($status);$index++){
        $query.=" customer_account.status='".$status[$index]."' OR"; 
	  }
	  $query=chop($query,'OR');
   }
   if(count($gender)>0){  
       $query.="AND ";
	   for($index=0;$index<count($gender);$index++){
	     $query.=" customer_account.gender='".$gender[$index]."' OR"; 
	   }
	   $query=chop($query,'OR');
   }
   if(count($motherTongue)>0){  
       $query.="AND ";
	   for($index=0;$index<count($motherTongue);$index++){
	     $query.=" customer_account.motherTongue='".$motherTongue[$index]."' OR"; 
	   }
   } 
   if(count($occupationType)>0){  
        $query.="AND ";
		for($index=0;$index<count($occupationType);$index++){
		  $query.=" customer_account.occupationType='".$occupationType[$index]."' OR"; 
		}
   } 
   if(count($age)>0){
    $query.="AND ";
    for($index=0;$index<count($age);$index++){
     $query.="(SELECT ROUND((DATEDIFF(CURRENT_DATE, STR_TO_DATE(date(customer_birth.dob), '%Y-%m-%d'))/365),0)>=".$age[$index]["from"].") ";
     $query.="AND (SELECT ROUND((DATEDIFF(CURRENT_DATE, STR_TO_DATE(date(customer_birth.dob), '%Y-%m-%d'))/365),0)<=".$age[$index]["to"].") ";
     $query.=" OR";
    }
    $query=chop($query,'OR');
   }
   $query.="LIMIT ".$limit_start.",".$limit_end;
   return $query;
 }
 function query_data_getProfileById($account_Id){
  $query="SELECT ";
  $query.="customer_account.name, customer_account.gender, customer_account.motherTongue, customer_account.status, ";
  $query.="customer_account.ft_hgt, customer_account.inch_hgt, customer_account.highDegree, customer_account.occupation, ";
  $query.="customer_account.occType, ";
  $query.="customer_birth.dob, customer_birth.birthCountry, customer_birth.birthState, customer_birth.birthLocation, ";
  $query.="customer_birth.birthLocality, customer_birth.shakha, customer_birth.upashakha, customer_birth.gothram, ";
  $query.="customer_birth.raasi, customer_birth.nakshatram, ";
  $query.="customer_family.fatherOccupation, customer_family.motherOccupation, customer_family.NoOfBrothers, ";
  $query.="customer_family.NoOfSisters, customer_preferences.exp_highDegree, customer_preferences.exp_occupation, ";
  $query.="customer_preferences.exp_occType, customer_preferences.exp_motherTongue, ";
  $query.="(SELECT GROUP_CONCAT(account_Id) FROM customer_preferences WHERE ";
  $query.="exp_highDegree=customer_preferences.exp_highDegree AND exp_occupation=customer_preferences.exp_occupation ";
  $query.="AND exp_occType=customer_preferences.exp_occType AND exp_motherTongue=customer_preferences.exp_motherTongue ";
  $query.="AND account_Id!='".$account_Id."' ";
  $query.="LIMIT 0,6) As suggestedAccounts ";
  $query.="FROM customer_account, customer_birth, customer_contact, customer_family, customer_preferences ";
  $query.="WHERE customer_account.account_Id=customer_birth.account_Id AND ";
  $query.="customer_birth.account_Id=customer_contact.account_Id AND customer_contact.account_Id=customer_family.account_Id ";
  $query.="AND customer_family.account_Id=customer_preferences.account_Id AND customer_account.account_Id='".$account_Id."';";
  return $query;
 }
 function query_data_getSuggestedProfileById($arry_account_Id){
  $query.="SELECT name, highDegree, occupation ";
  $query.="FROM customer_account ";
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