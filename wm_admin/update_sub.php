<?php
require 'core/init.php';
$general->logged_out_protect();
//echo "Id".$id;
if(isset($_GET['id']))
{
	$user_id = $_GET['id'];
	$cat = $_POST['category'];
	$sub_cat = $_POST['sub_cat_name'];
	//print_r($_REQUEST);
//	$username = $_POST['username'];
//	$email = $_POST['email'];
	//$companyName = $_POST['companyName'];
	//$number = $_POST['number'];
	//$city = $_POST['city'];
	$admin->update_sub($sub_cat ,$user_id,$cat);
	
	header('Location: manager.php');
}

?>