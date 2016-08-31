<?php 
$config = array(
	'host'		=> getenv('OPENSHIFT_MYSQL_DB_HOST'),
	'username' 	=> getenv('OPENSHIFT_MYSQL_DB_USERNAME'),
	'password' 	=> getenv('OPENSHIFT_MYSQL_DB_PASSWORD'),
	'dbname' 	=> 'wmmessanger'
);

$db = new PDO('mysql:host=' . $config['host'] . ';dbname=' . $config['dbname'], $config['username'], $config['password']);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
