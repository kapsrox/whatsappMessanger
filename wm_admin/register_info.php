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
	$plan_id    = $_REQUEST['plan_id'];
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
        if (strlen($_POST['address']) <6){
            $errors[] = 'Address must be atleast 6 characters';
        } else if (strlen($_POST['address']) >700){
            $errors[] = 'Address cannot be more than 700 characters long';
        }
		
        
	}

	if(empty($errors) === true){
		
$val= $_POST['subcategory_multiple'];
if( is_array($val)){
foreach ($val as $sub_item) {
//  echo "$item\n";
  $arr[] = $sub_item;
}
}
//echo "<br/>";
//print_r($array);
$subcat= implode(",",$arr);
		
$cat_val= $_POST['category_multiple'];
if( is_array($cat_val)){
foreach ($cat_val as $item) {
//  echo "$item\n";
  $array[] = $item;
}
}
//echo "<br/>";
print_r($array);
$cat= implode(",",$array);
//echo "ye aaya ".$cat;


echo "<br>SubCat . . .".$subcat;
echo "<br>Cat . . .".$cat;
//die();
	//	$cat        = $_POST['category_multiple'];
		$address    = $_POST['address'];
		$info       = $_POST['information'];
		$landmark   = $_POST['info_landmark'];
	//	$subcat     = $_POST['subcat'];

	//print_r($_REQUEST);
	//die();
		$users->user_info_register($id, $address, $info, $cat, $subcat,	$landmark);
		//"Location: index.php?id=".$_POST['ac_id']."&err=".$login
		header("Location: user_info.php?id=$id&plan_id=$plan_id&msg=Company info Created Successfully");
		exit();
	}else
	if(empty($errors) === false){
	header("Location: user_info.php?id=$id&plan_id=$plan_id&msg=".implode($errors));
	}
}

?>