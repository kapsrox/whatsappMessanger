<?php 
$config = array(
	'host'		=> '127.12.22.130',
	'username' 	=> 'adminYxdzbhQ', 
	'password' 	=> 'UzNBKVPG-LCL',
	'dbname' 	=> 'wmmessanger',
	'port'      => '3306' 
);

$db = new PDO('mysql:host=' . $config['host'] . ';dbname=' . $config['dbname'] . ';port=' . $config['port'], $config['username'], $config['password']);
//$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
