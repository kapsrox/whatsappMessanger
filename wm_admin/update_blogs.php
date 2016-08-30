<?php
require 'core/init.php';
$general->logged_out_protect();
if(isset($_REQUEST['id']))
{
	$id=$_REQUEST['id'];
	$sub = $_POST['subject'];
	$desc = $_POST['information'];
if(isset($_FILES['image']) && $_FILES['image']['tmp_name']!='')
  {	
	$id=$_REQUEST['id'];
	$sub = $_POST['subject'];
	$desc = $_POST['information'];
	$image = $admin->get_blogs_img_by_id($id);
	$image_url = dirname(dirname(__FILE__)) . '/users_img/'.$image['blogs_img'];
	@unlink($image_url);
	
$uploadDir = dirname(dirname(__FILE__)) . '/users_img';
$targetFile = $uploadDir . $_FILES['image']['name'];
$tempFile   = $_FILES['image']['tmp_name'];
$file = $_FILES['image']['name'];


	$fileParts = pathinfo($_FILES['image']['name']);
$kk = $general->file_newpath($uploadDir, $file);

echo $kk;

/*if(file_exists($targetFile)){

   
    $info = pathinfo($targetFile);
    $file_name = basename($targetFile,'.'.$info['extension']);
    $count=1;
    while(file_exists($file_name."_".$count.$info['extension'])){
      ++$count;
    }
    $targetFile = $info['dirname'].'/'.$file_name.'_'.$count.'.'.$info['extension'];
	$target = 'users_pdf/' .  $file_name.'_'.$count.'.'.$info['extension'];
	$users->user_info_pdf($target, $id, $plan_id);
  }*/
  
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
	  $image = $admin->get_blogs_img_by_id($id);
	  $newname = $image['blogs_img'];
	  
  }
	  
  $admin->update_blogs($id, $sub, $newname, $desc);
  
  
	header("Location: edit_blogs.php?id=$id");
  
}
?>