<?php
require 'core/init.php';
$general->logged_out_protect();
/*$result = $db->prepare("SELECT cat_id,cat_name FROM categories WHERE cat_name LIKE :term ORDER BY cat_name ASC LIMIT 0,30");

// bind the value for security with the wildcard % attached.
$result->bindvalue(':term','%'.$_GET["q"].'%',PDO::PARAM_STR);
$result->execute();*/
$string = $_GET["q"];
$user = $users->cat_select($string);

// make sure there are some results else a null query will be returned

    foreach ($user as $row){
        $answer = $row['cat_name'];
		
		$answer2[] = array("id"=>$row['cat_id'],"text"=>$row['cat_name']);
         //the text I want to show is in the form of option id - option
    }


// finally encode the answer to json and send back the result.
echo json_encode($answer2);
?>