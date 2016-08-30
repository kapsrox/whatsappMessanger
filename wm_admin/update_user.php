<?php
require 'core/init.php';
$general->logged_out_protect();
if(isset($_GET['id']))
{
	$user_id = $_GET['id'];
	$client_cat = $_POST['client_cat'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$companyName = $_POST['companyName'];
	$number = $_POST['number'];
	$number2 = $_POST['number2'];
	$city = $_POST['city'];
	$admin->update_user($user_id,$username,$email,$companyName,$number,$number2,$client_cat,$city );
	header('Location: manager.php');
}

?>