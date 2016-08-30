<?php
require 'core/init.php';
$general->logged_out_protect();
$username 	= htmlentities($user['admin_name']);
define('MyConst', true);
if(isset($_REQUEST['id']))
{
	$id=$_REQUEST['id'];
	$sub = $_POST['subject'];
	$desc = $_POST['information'];
	if(isset($_FILES['image']) && $_FILES['image']['tmp_name']!='')
  {	
	$id=$_REQUEST['id'];
	$plan_id = $_REQUEST['plan_id'];
	$info_id = $_REQUEST['info_id'];
	//$image = $admin->get_info_img_by_id($info_id);
	//$image_url = dirname(dirname(__FILE__)) . '/users_img/'.$image['info_img'];
	//@unlink($image_url);
	
$uploadDir = dirname(dirname(__FILE__)) . '/users_img';
$targetFile = $uploadDir . $_FILES['image']['name'];
$tempFile   = $_FILES['image']['tmp_name'];
$file = $_FILES['image']['name'];


	$fileParts = pathinfo($_FILES['image']['name']);
$kk = $general->file_newpath($uploadDir, $file);

echo $kk;
 
  if ($pos = strrpos($file, '.')) {
		   $name = substr($file, 0, $pos);
		   $ext = substr($file, $pos);
		} else {
		   $name = $file;
		}
		
		$newpath = $uploadDir.'/'.$file;
		$newname = $file;
		$counter = 0;
		
		while (file_exists($newpath)) {
		   $newname = $name .'_'. $counter . $ext;
		   $newpath = $uploadDir.'/'.$newname;
		   $counter++;
		}
 
  move_uploaded_file($tempFile,$kk);
  }else {
  }
$status = '1';
  $admin->blogs($sub, $newname, $desc, $user_id, $status );
  header('Location: blogs.php');
  exit();
}else {
	header('Location: blogs.php');
	exit();
}
?>