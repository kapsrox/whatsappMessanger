<?php 
require 'core/init.php';
$general->logged_in_protect();

if ($_POST['submit'] == 'submit') {

	if(empty($_POST['username']) || empty($_POST['password']) || empty($_POST['email']) || empty($_POST['category']) || empty($_POST['name']) || empty($_POST['companyName']) || empty($_POST['number'])){

		$errors[] = 'All fields are required.';

	}else{
        
        if ($users->user_exists($_POST['username']) === true) {
            $errors[] = 'That username already exists';
        }
        /*if(!ctype_alnum($_POST['username'])){
            $errors[] = 'Please enter a username with only alphabets and numbers';	
        }*/
        if (strlen($_POST['password']) <6){
            $errors[] = 'Your password must be atleast 6 characters';
        } else if (strlen($_POST['password']) >18){
            $errors[] = 'Your password cannot be more than 18 characters long';
        }
        if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
            $errors[] = 'Please enter a valid email address';
        }else if ($users->email_exists($_POST['email']) === true) {
            $errors[] = 'That email already exists.';
        }
	}

	if(empty($errors) === true){
		
		$username 	= htmlentities($_POST['username']);
		$password 	= $_POST['password'];
		$email 		= htmlentities($_POST['email']);
		$cat        = $_POST['category'];
		$comp_name  = $_POST['companyName'];
		$number     = $_POST['number'];

		$users->register($username, $password, $email, $cat, $comp_name, $number);
		header('Location: manager.php?msg= User Successfully Created');
		exit();
	}
}

?>