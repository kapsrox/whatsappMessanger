<?php
	session_start();
	$_SESSION["get_id"]= $_REQUEST["ids_"];
	echo "session".$_SESSION["get_id"];
	//print_r($_REQUEST);
	$ids = $_REQUEST["ids_"];
	
	echo "ID....".$ids;

	//exit();
//	$con = mysql_connect("localhost", "root", "");
    $host		= 'localhost';
	$username 	= 'root';
	$password 	= '';
	$dbname 	= 'searchmy_page';
  $con=mysqli_connect($host,$username,$password,$dbname) ;

       //mysqli_select_db("searchmy_page",$con);
	   
	$resource_id = mysqli_query($con, "select cat_table.cat_name as cat_name, sub_cat_table.* from categories as cat_table left join subcategories as sub_cat_table on sub_cat_table.cat_id=cat_table.cat_id where sub_cat_table.cat_id IN(".trim($ids, ", ").") ORDER BY sub_cat_table.cat_id ASC , sub_cat_table.subc_name ASC  ");
/*	$resource_id = mysqli_query($con, "SELECT *
FROM categories
LEFT JOIN subcategories ON categories.cat_id = subcategories.cat_id where subcategories.cat_id IN(".trim($ids, ", ").") ORDER BY subcategories.cat_id ASC , subc_name ASC ");
	*/
	$option_tag = '';
	$category_id = '';
	while($row = mysqli_fetch_assoc($resource_id)){
		if($category_id != $row["cat_id"]){
			$category_id = $row["cat_id"];
			$option_tag .= "</optgroup><optgroup label='".$row['cat_name']." '>";
		} 
			$option_tag .= "<option value='".$row["subc_id"]."'>".$row["subc_name"]."</option>";	
	}
	echo $option_tag;
?>