<?php 
session_start();
require_once 'connect/database.php';
require_once 'classes/admin.php';
require_once 'classes/user.php';
require_once 'classes/general.php';
require_once 'classes/bcrypt.php';

$admin 		= new Admin($db);
$users      = new Users($db);
$general 	= new General();
$bcrypt 	= new Bcrypt(12);


$errors = array();
if ($general->logged_in() === true)  {
	$user_id 	= $_SESSION['admin_id'];
	$user 		= $admin->admindata($user_id);
}

ob_start();