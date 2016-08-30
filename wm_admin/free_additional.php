<?php
require 'core/init.php';
$general->logged_out_protect();
echo"<pre>";
//print_r($_POST);
echo "</pre>";


$val= $_POST['subcategory_multiple'];
if( is_array($val)){
foreach ($val as $item) {
//  echo "$item\n";
  $arr[] = $item;
}
//echo "<br/>";
//print_r($array);
$sub_id= implode(",",$arr);
//echo "<br/>".$sub_id;
}
$cat_val= $_POST['category_multiple'];
if( is_array($cat_val)){
foreach ($cat_val as $item) {
//  echo "$item\n";
  $array[] = $item;
}
//echo "<br/>";
//print_r($array);
$cat_id= implode(",",$array);
//echo "<br/>".$sub_id;
}
if(isset($_GET['id']))
{
$user_id = $_GET['id'];
//$cat_id = $_POST['category_multiple'];
$address = $_POST['address'];
//$sub_id = $_POST['subcat'];
$information = $_POST['information'];
$landmark = $_POST['info_landmark'];
$admin->update_user_additional($user_id, $cat_id, $sub_id, $information, $address,$landmark);
header('Location: manager.php');
}
?>