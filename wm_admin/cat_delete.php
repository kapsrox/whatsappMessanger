<?php
require 'core/init.php';
$general->logged_out_protect();
	if(isset($_REQUEST['id'])){
	$id = $_REQUEST['id'];
	$admin->delete_category($id);
	}
else if(isset($_REQUEST['subc_id']))
	{
		$id = $_REQUEST['subc_id'];

			$admin->delete_sub_category($id);
	}

  header('Location:category.php');
?>