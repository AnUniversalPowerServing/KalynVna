<?php 

 ini_set('max_execution_time',300);
 date_default_timezone_set("Asia/Kolkata");
 
 /* Logger Declaration in JSON */ 
	 include('../../../log4php/Logger.php'); 
	 Logger::configure('../../../backend/config/log-config.xml'); 
	
 /* Database Credentials */
$DB_KV_SERVERNAME="localhost:3306";
$DB_KV_NAME="kv";
$DB_KV_USER="root";
$DB_KV_PASSWORD="";
 	 
 /* Database Credentials */
//$DB_KV_SERVERNAME="148.66.138.151";
//$DB_KV_NAME="kalyanaveena";
//$DB_KV_USER="kalyanaveena";
//$DB_KV_PASSWORD="@ANUPanup123";

