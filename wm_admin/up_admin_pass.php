<?php
require 'core/init.php';
$general->logged_out_protect();
//if()
//	$id = $_GET['id'];
	//$name = $_POST['admin_name'];
	$pass = $_POST['password'];
	//$city = $_POST['city'];
	$id = '1';
	//$admin->update_user($user_id,$username,$email,$companyName,$number,$client_cat,$city );
	$admin->update_admin_pass($pass,$id);
	header('Location: manager.php');
?>