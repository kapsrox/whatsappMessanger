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
	$id         = $_REQUEST['id'];
	$plan_id    = $_GET['plan_id'];
	
/*echo 'kk';*/
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
foreach ($values as $item_sub) {
//  echo "$item\n";
  $array_sub[] = $item_sub;
}
}
//echo "<br/>";
//print_r($array);
$subcat= implode(",",$array_sub);
	$arr='';	
$cat_val= $_POST['category_multiple'];
if( is_array($cat_val)){
foreach ($cat_val as $item_cat) {
//  echo "$item\n";
  $arr_cat[] = $item_cat;
}
}
//echo "<br/>";
//print_r($array);
$cat= implode(",",$arr_cat);

		$id         = $_REQUEST['id'];
//		$cat        = $_POST['category'];
		$address    = $_POST['address'];
		$info       = $_POST['information'];
//		$sub_id     = $_POST['subcat'];
		$url        = $_POST['url'];
		$tube       = $_POST['tube'];
		$prod_desc  = $_POST['prod_desc'];
		//$timing     = $_POST['timing'];
		//$staff      = $_POST['staff'];
		$add_info = $_POST['additional_information'];
		$landmark = $_POST['info_landmark'];
		$location = $_POST['info_location'];

		$users->user_info_register_platinum($id, $address, $info, $cat, $subcat, $url, $tube, $prod_desc, $add_info,$landmark,$location);
		/*$last_id = $users->get_last_users();
		$users->register_new($username, $cat, $last_id);*/
		//"Location: index.php?id=".$_POST['ac_id']."&err=".$login
		header("Location: user_info_gl.php?id=$id&plan_id=$plan_id&msg=Company info Created Successfully");
		exit();
	}else
	if(empty($errors) === false){
	header("Location: user_info_gl.php?id=$id&plan_id=$plan_id&err=".implode('<br/>',$errors));
	}
}

?>