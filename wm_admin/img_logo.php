<?php
require 'core/init.php';
$general->logged_out_protect();

$uploadDir = dirname(dirname(__FILE__)) . '/users_img/';

if (!empty($_FILES)) {
	$tempFile   = $_FILES['Filedata']['tmp_name'][0];
	//$uploadDir  = $_SERVER['DOCUMENT_ROOT'] . $uploadDir;
	$targetFile = $uploadDir . $_FILES['Filedata']['name'][0];
	$id = $_POST['userid'];
	// Validate the file type
	$fileTypes = array('jpg', 'jpeg', 'gif', 'png'); // Allowed file extensions
	$fileParts = pathinfo($_FILES['Filedata']['name'][0]);

	// Validate the filetype
	if (in_array($fileParts['extension'], $fileTypes)) {

		// Save the file
		move_uploaded_file($tempFile,$targetFile);
		$target = 'users_img/' .  $_FILES['Filedata']['name'][0];
		$users->user_update_logo($target, $id);
		
		echo 1;

	} else {

		// The file type wasn't allowed
		echo 'Invalid file type.';

	}
}
?>