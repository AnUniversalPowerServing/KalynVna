<?php
class Panchang {
 function query_add_panchang($stndTz, $fromTs, $toTs, $weekDay, $nakshatra, $raasi, $isMangalik){
  $sql="INSERT INTO cal_panchga(stndTz, fromTs, toTs, weekDay, nakshatra, raasi, isMangalik) ";
  $sql.="VALUES ('".$stndTz."','".$fromTs."','".$toTs."','".$weekDay."','".$nakshatra."','".$raasi."','".$isMangalik."')";
  return $sql;
 }
 function query_update_panchang($stndTz, $fromDate, $toDate, $fromTs, $toTs, $weekDay, $nakshatra, 
		$raasi, $isMangalik){
  $sql="UPDATE cal_panchga SET stndTz='".$stndTz."', fromTs='".$fromTs."', toTs='".$toTs."', weekDay='".$weekDay."',";
  $sql.="nakshatra='".$nakshatra."',raasi='".$raasi."', isMangalik='".$isMangalik."' ";
  $sql.="WHERE date(fromTs)='".$fromDate."' AND date(toTs)='".$toDate."';";
  return $sql;
 }
}
?>