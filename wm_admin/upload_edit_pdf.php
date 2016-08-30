<?php
require 'core/init.php';
$general->logged_out_protect();
if(isset($_REQUEST['info_id']))
{
	$id=$_REQUEST['id'];
	$plan_id = $_REQUEST['plan_id'];
	$info_id = $_REQUEST['info_id'];
if(isset($_FILES['file']) && $_FILES['file']['tmp_name']!='')
  {	
	$id=$_REQUEST['id'];
	$plan_id = $_REQUEST['plan_id'];
	$info_id = $_REQUEST['info_id'];
	$pdf = $admin->get_info_pdf_by_id($info_id);
	$image_url = dirname(dirname(__FILE__)) . '/users_pdf/'.$pdf['info_pdf'];
	@unlink($image_url);
	
$uploadDir = dirname(dirname(__FILE__)) . '/users_pdf';
$targetFile = $uploadDir . $_FILES['file']['name'];
$tempFile   = $_FILES['file']['tmp_name'];
$file = $_FILES['file']['name'];


	$fileParts = pathinfo($_FILES['file']['name']);
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
	  $image = $admin->get_info_pdf_by_id($info_id);
	  $newname = $image['info_pdf'];
  }
	  
  $admin->update_pdf($info_id,$newname);
  
	header("Location: dashboard.php");
  
}
?>