<?php
require 'core/init.php';
$general->logged_out_protect();
if(isset($_GET['id']))
{
	$user_id = $_GET['id'];
	$user_name = $_POST['username'];
	$client_cat_id = $_POST['client_cat'];
	$user_email = $_POST['email'];
	$user_comp_name = $_POST['companyName'];
	$user_number = $_POST['number'];
	
	$admin->update_user($user_id,$user_name,$user_email,$user_comp_name,$user_number,$client_cat_id );
	header('Location: manager.php#tab_1');
}

?>