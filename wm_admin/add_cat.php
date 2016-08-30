<?php
require 'core/init.php';


$general->logged_out_protect();

$username 	= htmlentities($user['admin_name']);
$data = $_POST['cat_name'];	
$uploadDir = dirname(dirname(__FILE__)) . '/images/cat';

$targetFile = $uploadDir . $_FILES['image']['name'];
$tempFile   = $_FILES['image']['tmp_name'];
$file = $_FILES['image']['name'];


	$fileParts = pathinfo($_FILES['image']['name']);
$kk = $general->file_newpath($uploadDir, $file);
$path = "images/cat";
//echo $kk;
 
  if ($pos = strrpos($file, '.'))
  {
		   $name = substr($file, 0, $pos);
		   $ext = substr($file, $pos);
		} else
		{
		   $name = $file;
		}
		
		$newpath = $uploadDir.'/'.$file;
		$newname = $file;
		$counter = 0;
		
		while (file_exists($newpath))
		{
		   $newname = $name .'_'. $counter . $ext;
		   $newpath = $uploadDir.'/'.$newname;
		   $counter++;
		}
		
		$newname= "images/cat/".$file;
 
move_uploaded_file($tempFile,$kk);
$admin->add_cat($data,$newname, $user_id);
  header('Location:category.php');
/*  move_uploaded_file($tempFile,$kk);
mysql_query("INSERT INTO cat_name (cat_Name, cat_img, clind_id) VALUES ('".$data."', '".$newname."',0)") or die("ley jandu --".mysql_error());
	header('Location:category.php');
*/

?>