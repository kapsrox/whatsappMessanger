<?php 
require 'core/init.php';
$general->logged_out_protect();
define('MyConst', true);
if($_POST['submit'] =='submit')
{
	
	$user_id = $_POST['user'];
	$updates = $_POST['updates'];
	
	$admin->recent_updates($updates, $user_id);
	header('Location: manager.php');
	exit();
}else {
	
	header('Location: manager.php');
	exit();
}