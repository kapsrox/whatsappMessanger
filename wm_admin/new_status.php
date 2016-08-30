<?php 
require 'core/init.php';
$general->logged_out_protect();
define('MyConst', true);
if(isset($_REQUEST['id']))
{
	$new_id = $_REQUEST['id'];
	
	$users->update_status($new_id);
	
	header('Location: dashboard.php');
}else{
	
	header('Location: dashboard.php');
}
?>