<?php
require 'core/init.php';
$general->logged_out_protect();

if(isset($_REQUEST['id']))
{
	$id=$_REQUEST['id'];
	if(isset($_FILES['image']) && $_FILES['image']['tmp_name']!='')
  {	
	$cat_name =$_REQUEST['cat_name'];
	$id=$_REQUEST['id'];
	$image =$admin->get_cat_by_id($id);
	$image_url = dirname(dirname(__FILE__)). '/' . $image['cat_img'];
	@unlink($image_url);
	
$uploadDir = dirname(dirname(__FILE__)) . '/images/cat';
$targetFile = $uploadDir . $_FILES['image']['name'];
$tempFile   = $_FILES['image']['tmp_name'];
$file = $_FILES['image']['name'];


	$fileParts = pathinfo($_FILES['image']['name']);
$kk = $general->file_newpath($uploadDir, $file);

//echo $kk;

  if ($pos = strrpos($file, '.')) {
		   $name = substr($file, 0, $pos);
		   $ext = substr($file, $pos);
		} else {
		   $name = $file;
		}
		
		$newpath = $uploadDir.'/'.$file;
		$newname = 'images/cat/'.$file;
	  
		$counter = 0;
		
		while (file_exists($newpath)) {
		   $k = $name .'_'. $counter . $ext;
		   $newname = 'images/cat/'.$k;
		   $newpath = $uploadDir.'/'.$k;
		   $counter++;
		}
 

  move_uploaded_file($tempFile,$kk);
  }else {
	  $image = $admin->get_cat_by_id($id);
	  $cat_name =$_REQUEST['cat_name'];
	  $newname = $image['cat_img'];
  }
	  
  $admin->update_cat($id,$cat_name,$newname);
  
	header("Location:category.php");
  
}
?>