<?php
require 'core/init.php';
$general->logged_out_protect();
if(isset($_GET['id']))
{
	$pdf_id = $_GET['id'];
	
	$admin->delete_pdf($pdf_id);
	header('Location: manager.php');
}
?>