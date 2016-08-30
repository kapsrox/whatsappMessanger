<?php 
require 'core/init.php';
$general->logged_out_protect();
$username 	= htmlentities($user['admin_name']);

if (isset($_POST['submit'])) {
	$id         = $_REQUEST['id'];
	$plan_id    = $_REQUEST['plan_id'];
	

	if(empty($_POST['category_multiple']) || empty($_POST['address'])){

		$errors[] = 'All fields are required.';

	}else{
        
        if ($users->user_id_exists($id) === true) {
            $errors[] = 'That user info already exists';
        }
        /*if(!ctype_alnum($_POST['username'])){
            $errors[] = 'Please enter a username with only alphabets and numbers';	
        }*/
	}

	if(empty($errors) === true){

$values= $_POST['subcategory_multiple'];
if( is_array($values)){
foreach ($values as $sub) {

  $array_sub[] = $sub;
}
}
$subcat= implode(",",$array_sub);
		
$cat_val= $_POST['category_multiple'];
if( is_array($cat_val)){
foreach ($cat_val as $cat) {
//  echo "$item\n";
  $array_cat[] = $cat;
}
}

$cat= implode(",",$array_cat);
	
		$id         = $_POST['id'];
		//$cat        = $_POST['category'];
		$address    = $_POST['address'];
		$info       = $_POST['information'];
	//	$sub_id     = $_POST['subcat'];
		$url        = $_POST['url'];
		$tube       = $_POST['tube'];
		$prod_desc  = $_POST['prod_desc'];
		$landmark  = $_POST['info_landmark'];
		$location  = $_POST['info_location'];
		//$timing     = $_POST['timing'];
		//$staff      = $_POST['staff'];
		$add_info	= $_POST['additional_information'];

		$users->user_info_register_platinum($id, $address, $info, $cat, $subcat, $url, $tube, $prod_desc, $add_info,$landmark,$location);
		
		header("Location: user_info_silver.php?id=$id&plan_id=$plan_id&msg=Company info Created Successfully");
		exit();
	}else
	if(empty($errors) === false){
	header("Location: user_info_silver.php?id=$id&plan_id=$plan_id&err=".implode('<br/>',$errors));
	}
}

?>