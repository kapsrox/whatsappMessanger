<?php
require 'core/init.php';
$general->logged_out_protect();
$uploadDir = dirname(dirname(__FILE__)) . '/users_pdf';
$targetFile = $uploadDir . $_FILES['Filedata']['name'][0];
$tempFile   = $_FILES['Filedata']['tmp_name'][0];
$file = $_FILES['Filedata']['name'][0];
$id = $_POST['userid'];
	$plan_id = $_POST['plan_id'];
	$info_id = $_POST['info_id'];
	$fileParts = pathinfo($_FILES['Filedata']['name'][0]);
//$kk = $general->file_newpath($uploadDir, $file);



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
		
//$users->user_info_pdf($kk, $id, $plan_id);
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
 
  move_uploaded_file($tempFile,$newpath);
  $target_new = 'users_pdf/'.$newname;
	$admin->update_pdf($info_id,$newname);
	

?>