<?php
require 'core/init.php';
$general->logged_out_protect();
$id = $_GET['id'];
$status = $_GET['status'];
//$cat_id = $_GET['cat_id'];
if($status == 0)
{
	
	$users->activate_blog($status,$id);

header('Location:blogs.php');

	}elseif($status == 1)
{
	$users->deactivate_blog($status,$id);

header('Location:blogs.php');

	}
/*
if($cat_id == 1)
{
header('Location:blogs.php');
exit();
}else {
	$users->email($id);
	header('Location:blogs.php');
	exit();
}*/
	
?>