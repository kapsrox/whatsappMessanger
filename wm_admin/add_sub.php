<?php
require 'core/init.php';
	$cat_id=$_REQUEST['category'];
	$sub_cat_name = $_REQUEST['sub_cat_name'];
//echo "category Name---->".$cat_id;
//echo "<br />sub_cat_name".$sub_cat_name;
//$sql="INSERT INTO subcategories (subc_id,subc_name, cat_id) VALUES ('','".$sub_cat_name."','".$cat_id."')";
 $admin->add_sub($cat_id, $sub_cat_name);
 
//echo "string.....".$sql;
//mysqli_query($con,$sql) or die("kuch to hua h".mysqli_error());
header('location:category.php');
	?>