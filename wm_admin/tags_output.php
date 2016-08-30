<?php
$db = mysql_connect('localhost', 'root', '') or die('unable to connect server');
mysql_select_db('searchmypage') or die(mysql_error($db));
$tags = $_POST['tags'];
$imp = implode(",", $tags);


echo '<br />';
$exp = explode(",", $imp);
/*$query = mysql_query("INSERT INTO `tags`(`cat_id`) VALUES ('$tag')");
$count++;*/
$count = count($exp);
print_r($exp);
echo $count;
//$k = implode(" " ,$_POST['tags']);
//$count = count($k);
//echo $count;

$i=1;
foreach($exp as $ex)
{
$query = mysql_query("INSERT INTO `tags`(`cat_id`) VALUES ('$ex')");
$i++;
}
?>