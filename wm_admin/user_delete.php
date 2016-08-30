<?php
require 'core/init.php';
$general->logged_out_protect();
if(isset($_GET['id']))
{
	$user_id = $_GET['id'];
	
	$admin->delete_user($user_id);
	header('Location: manager.php');
}
?>