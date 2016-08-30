<?php 
require 'core/init.php';
$general->logged_out_protect();
$username 	= htmlentities($user['admin_name']);
/*echo $username;
echo '<br />';
echo '<pre>';
print_r($_POST);
echo '</pre>';*/
if (isset($_POST['submit'])) {
	$id         = $_POST['id'];
	$plan_id    = $_GET['plan_id'];
	
/*echo 'kk';*/
	if(empty($_POST['category']) || empty($_POST['address'])){

		$errors[] = 'All fields are required.';

	}else{
        
        if ($users->user_id_exists($id) === true) {
            $errors[] = 'That user info already exists';
        }
        /*if(!ctype_alnum($_POST['username'])){
            $errors[] = 'Please enter a username with only alphabets and numbers';	
        }*/
        if (strlen($_POST['address']) >700){
            $errors[] = 'Address cannot be more than 700 characters long';
        }
		
        
	}

	if(empty($errors) === true){
		
		$id         = $_POST['id'];
		$cat        = $_POST['category'];
		$address    = $_POST['address'];
		$info       = $_POST['information'];
		$sub_id     = $_POST['subcat'];
		$url        = $_POST['url'];
		$tube       = $_POST['tube'];
		

		$users->user_info_register_silver($id, $address, $info, $cat, $sub_id, $url, $tube);
		$last_id = $users->get_last_users();
		$users->register_new($username, $cat, $last_id);
		//"Location: index.php?id=".$_POST['ac_id']."&err=".$login
		header("Location: user_info.php?id=$id&plan_id=$plan_id&msg=Company info Created Successfully");
		exit();
	}else
	if(empty($errors) === false){
	header("Location: user_info.php?id=$id&plan_id=$plan_id&msg=".implode($errors));
	}
}

?>