<?php
require 'core/init.php';
$general->logged_out_protect();
//echo"<pre>";
//print_r($_REQUEST);
//echo "</pre>";

$sub_values= $_POST['subcategory_multiple'];
if( is_array($sub_values)){
foreach ($sub_values as $item_sub) {
  $array_sub[] = $item_sub;
}

}
$sub_id= implode(",",$array_sub);
//$array ='';
$cat_val= $_POST['category_multiple'];
if( is_array($cat_val)){
foreach ($cat_val as $item_cat) {
//  echo "$item\n";
  $array_cat[] = $item_cat;
}
}
//echo "<br/>";
//print_r($array);
$cat_id= implode(",",$array_cat);

//die();

if(isset($_GET['id']))
{
$user_id = $_GET['id'];
//$cat_id = $_POST['category_multiple'];
//$cat_id = $_SESSION["get_id"];
//echo "cat_id<br />".$cat_id;
$address = $_POST['address'];
//$sub_id = $_POST['subcategory_multiple[]'];
$cat_id= implode(",",$array_cat);
$sub_id= implode(",",$array_sub);
$url = $_POST['url'];
$tube = $_POST['tube'];
$information = $_POST['information'];
$add_info = $_POST['additional_information'];
$prod_desc = $_POST['prod_desc'];
$landmark = $_POST['info_landmark'];
$location = $_POST['info_location'];
//$timing = $_POST['timing'];
//$staff = $_POST['staff'];
//echo "Data aaya ----<pre>".$cat_id;
$admin->update_user_additional_other($user_id, $cat_id, $sub_id,  $url, $tube, $information, $prod_desc, $add_info, $address,$landmark,$location);
header('Location: manager.php');
}
?>