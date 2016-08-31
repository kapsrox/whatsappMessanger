<?php 
$config = array(
	'host'		=> '127.12.22.130',
	'username' 	=> 'adminYxdzbhQ',
	'password' 	=> 'UzNBKVPG-LCL',
	'dbname' 	=> 'wmmessanger'
);

$db = new PDO('mysql:host=' . getenv('OPENSHIFT_MYSQL_DB_HOST') . ';dbname=' . getenv('OPENSHIFT_APP_NAME'), getenv('OPENSHIFT_MYSQL_DB_USERNAME'), getenv('OPENSHIFT_MYSQL_DB_PASSWORD'));
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
