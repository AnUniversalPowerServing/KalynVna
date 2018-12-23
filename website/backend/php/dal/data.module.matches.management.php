<?php
class MatchManagement {
  function query_count_summaryStatistics(){
    $sql="SELECT ";
    $sql.="(SELECT count(*) FROM customer_account WHERE DATE(added_on)=DATE(NOW())) As profilesRegisteredToday, ";
	$sql.="(SELECT count(*) FROM customer_account) As totalProfiles, ";
	$sql.="(SELECT count(*) FROM customer_account WHERE profile_status='ACTIVE') As totalActiveProfiles, ";
	$sql.="(SELECT count(*) FROM customer_account WHERE profile_status='INACTIVE') As totalInActiveProfiles, ";
	$sql.="(SELECT count(*) FROM match_list WHERE match_list.matchScore>=18) As totalActiveMatches;";
	return $sql;
  } 
}
?>