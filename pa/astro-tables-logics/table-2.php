<?php
$apply = array('JAN-DEC','JAN-FEB','MAR-DEC');
$content='';
for($index=1917;$index<=2100;$index++){
  if($index%4==0) { 
    $content.="INSERT INTO pancha_table2(year, cor_time, apply) VALUES ('".$index."','','".$apply[1]."');";
	$content.="INSERT INTO pancha_table2(year, cor_time, apply) VALUES ('".$index."','','".$apply[2]."');";
    // echo '<b>'.$index.'</b><br/>'; 
  }
  else { 
   $content.="INSERT INTO pancha_table2(year, cor_time, apply) VALUES ('".$index."','','".$apply[0]."');";
   // echo $index.'<br/>'; 
  }
}
echo $content;
?>