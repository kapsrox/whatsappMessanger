<?php
session_start();
require_once('connection.php');
$user = $_REQUEST['username'];
$pass = $_REQUEST['password'];

$sql = mysql_query("SELECT * FROM `s_admin` WHERE `admin_name`='$user' AND `admin_pass`='$pass'");

echo mysql_num_rows($sql);

if(mysql_num_rows($sql) == 1)
{
	while($result = mysql_fetch_assoc($sql))
	{
			
		$_SESSION['logged_in'] = $result['admin_name'];
		header('Location: dashboard.php');
	}
	
}else {
	header('Location: index.php?message=Please Enter Valid Username or Password');
	}
?>