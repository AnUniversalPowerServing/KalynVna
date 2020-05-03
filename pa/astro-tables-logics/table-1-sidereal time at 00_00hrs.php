<?php
echo strlen("1 day 3 minutes 56 seconds");
echo '<style>body { font-size:24px;  }</style>';
$DB_KV_SERVERNAME="localhost:3306";
$DB_KV_DBNAME="kv";
$DB_KV_USER="root";
$DB_KV_PASSWORD="";
// Create connection
$conn = new mysqli($DB_KV_SERVERNAME,$DB_KV_USER,$DB_KV_PASSWORD,$DB_KV_DBNAME);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully<br/>";

$mon=array("jan","feb","mar","apr","may","jun","jul","aug","sep","oct","nov","dec");
$time = '06:41:57';
$shifter = false;
$diff = '';
$shifterDay=0;
 $tbl='<div class="table-responsive">';       
 $tbl.='<table class="table">';
 $tbl.='<thead>';
 $tbl.='<tr><th>Date</th><th>SiderealTime</th><th>Duration Gap</th></tr>';
 $tbl.='</thead>';
 $tbl.='<tbody>';
for($index=0;$index<count($mon);$index++){
 $loop =31;
 if($mon[$index]=='feb'){ $loop =29; }
 else if($mon[$index]=='apr' || $mon[$index]=='jun' || $mon[$index]=='sep' || $mon[$index]=='nov'){ $loop =30; }
 for($i=1;$i<=$loop;$i++){
   if(($index==0 || $index==2) && $i==1){ $time = $time; }
   else { 
        $date=date_create($time);
	    if($shifterDay==9 || ($index==0 && $i==7)){ $shifter = false;$shifterDay=0; }
		if($shifter) {
		   $diff = "3 minutes 56 seconds";
		   $shifter=false;
		} else {
		   $diff = "3 minutes 57 seconds"; //  Initial Start
		   $shifter=true; 
		}
		$shifterDay++;
		date_add($date,date_interval_create_from_date_string($diff));
		$time = date_format($date,"H:i:s");
	}
 $date=date_create("2001-".($index+1)."-".$i);
 $j = date_format($date,"w");
 $week = array("Sun","Mon","Tue","Wed","Thu","Fri","Sat");
 
      $tbl.='<tr>';
      $tbl.='<td>'.strtoupper($mon[$index]).'-'.$i.' ('.$week[$j].')</td>';
      $tbl.='<td>'.$time.'</td>';
      $tbl.='<td>(1 day '.$diff.')</td>';
      $tbl.='</tr>';
 
 // echo $week[$j].' 2001-'.($index+1).'-'.$i."  ".$time."  (1 day ".$diff.")<br/>";
 /*
  $content="INSERT INTO pancha_table1(date, sid_time, dur_w_prevtime) ";
  if($index==2 && $i==1){
	$content.="VALUES ('2001-".($index+1)."-".$i."','".$time."','1 day');";
  } else {
    $content.="VALUES ('2001-".($index+1)."-".$i."','".$time."','1 day ".$diff."');";
  }
 if ($conn->query($content) === TRUE) {
    echo "New record created successfully";
 } else {
    echo "Error: " . $content . "<br>" . $conn->error;
 } */
 }
}
$tbl.='</tbody>';
$tbl.='</table>';
$tbl.='</div>';
echo $tbl;



$conn->close();
?>