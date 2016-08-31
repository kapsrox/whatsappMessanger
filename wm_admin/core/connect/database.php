<?php 
$config = array(
	'host'		=> '127.12.22.130',
	'username' 	=> 'adminYxdzbhQ',
	'password' 	=> 'UzNBKVPG-LCL',
	'dbname' 	=> 'wmmessanger'
);

$db = new PDO('mysql:host=' . $config['host'] . ';dbname=' . $config['dbname'], $config['username'], $config['password']);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
