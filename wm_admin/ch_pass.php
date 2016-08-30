<?php
require 'core/init.php';
$general->logged_out_protect();
//if()

if(isset($_GET['id']))
{
	$id = $_GET['id'];
	$name = $_POST['admin_name'];
	$pass = $_POST['password'];
	$city = $_POST['city'];
	$retype = $_POST['rpassword'];
	//$admin->update_user($user_id,$username,$email,$companyName,$number,$client_cat,$city );
	//$admin->update_sub_admin($id,$name,$pass,$retype,$city);
	$admin->update_sub_pass($id,$name,$pass,$retype,$city);
	header('Location: manager.php');
}
else
{
header('Location: manager.php?msg= please enter correct password');
}
?>