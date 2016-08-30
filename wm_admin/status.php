<?php
require 'core/init.php';
$general->logged_out_protect();
$id = $_GET['id'];
$status = $_GET['status'];
$cat_id = $_GET['cat_id'];
if($status == 0)
{
	
	$users->activate_admin($status,$id);
}elseif($status == 1){
	$users->deactivate_admin($status,$id);
}
if($cat_id == 1)
{
header('Location:manager.php');
exit();
}else {
	$users->email($id);
	header('Location:manager.php');
	exit();
}
	
?>