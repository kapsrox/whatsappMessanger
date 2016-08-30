<?php
require 'core/init.php';
$general->logged_out_protect();
if(isset($_GET['id']))
{
	$admin_id = $_GET['id'];
	
	$admin->delete_admin($admin_id);
	header('Location: manager.php');
}
?>