<?php
require 'core/init.php';
$general->logged_out_protect();
if(isset($_GET['id']))
{
	$slide_id = $_GET['id'];
	
	$admin->delete_img($slide_id);
	header('Location: manager.php');
}
?>