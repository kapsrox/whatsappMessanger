<?php 
require 'core/init.php';
$general->logged_out_protect();
$username 	= htmlentities($user['admin_name']);
/*echo $username;
echo '<br />';
echo '<pre>';
print_r($_POST);
echo '</pre>';
exit()*/
if (isset($_POST['submit'])) {
/*echo 'kk';*/

	if(empty($_POST['password']) || empty($_POST['category']) || empty($_POST['name']) || empty($_POST['companyName']) || empty($_POST['number_1']) || empty($_POST['number_2']) || empty($_POST['city'])){
	
		$errors[] = 'All fields are required.';

	}else{
        
        if ($users->user_exists($_POST['name']) === true) {
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
		
		if(strlen($_POST['city']) < 13)
		{
			$error[] = 'Your City name cannot be more than 13 characters long';
		}
        
        if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
            $errors[] = 'Please enter a valid email address';
        }else if ($users->email_exists($_POST['email']) === true) {
            $errors[] = 'That email already exists.';
        }
        
	}

	if(empty($errors) === true){
		$username 	= htmlentities($_POST['name']);
		$password 	= $_POST['password'];
		$email 		= htmlentities($_POST['email']);
		$cat        = $_POST['category'];
		$comp_name  = $_POST['companyName'];
		$number     = $_POST['number_1'];
		$number2	= $_POST['number_2'];
		$city       = $_POST['city'];
		$pass       = $_POST['password'];
		@$person_type = $_POST['person_type'];
		@$person_name = $_POST['person_name'];
	//	$add_info 	= $_POST['Addition_information'];
		$last_id = $users->get_last_users();
		
		if($cat == 1)
		{
		
		$person_name='admin';
		$person_type='admin';
			$pass       = $_POST['password'];
			
			$users->register_free($username, $password,$email, $cat, $comp_name, $number,$number2 ,$city, $pass, $user_aprov = 1, $admin_aprov = 1, $person_name,$person_type);
			$users->register_new($username, $cat, $last_id);
			/*if($last_id == NULL)
			{
				$last_id =1;
			$users->register_new($username, $cat, $last_id);
			}else{
				$users->register_new($username, $cat, $last_id);
			}*/
				
			header('Location: manager.php?msg= User Successfully Created');
			exit();
		}else {
		
		$person_name='admin';
		$person_type='admin';
		
	$users->register($username, $password,$email, $cat, $comp_name, $number,$number2 ,$city, $pass,$person_name,$person_type);
				$users->register_new($username, $cat, $last_id);
		header('Location: manager.php?msg=User Successfully Created');
		exit();
		}
	}else
	if(empty($errors) === false){
	header('Location: manager.php?err='.implode('<br/>', $errors));
	}
}

?>