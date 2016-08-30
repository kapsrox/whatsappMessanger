<?php 

require 'core/init.php';
$general->logged_out_protect();
if (isset($_POST['submit'])) 
{

	if(empty($_POST['password']) ||empty($_POST['name'])  || empty($_POST['city'])){

		$errors[] = 'All fields are required.';

	}
	else
	{
        
        if (strlen($_POST['password']) <6){
            $errors[] = 'Your password must be atleast 6 characters';
        } else if (strlen($_POST['password']) >18){
            $errors[] = 'Your password cannot be more than 18 characters long';
        }
		
		if(strlen($_POST['city']) < 13)
		{
			$error[] = 'Your City name cannot be more than 13 characters long';
		}
        
        
	}

	if(empty($errors) === true)
	{
		
		$username 	= htmlentities($_POST['name']);
		$password 	= $_POST['password'];
		$city       = $_POST['city'];
		//$pass       = crypt($_POST['password']);
		
		$last_id = $admin->sub_admin($username,$password,$city);
			
			header('Location: manager.php?msg= User Successfully Created');
		
		exit();
		
	}
	else
	if(empty($errors) === false){
	header('Location: manager.php?msg= '.implode($errors));
	}
}	
  ?>