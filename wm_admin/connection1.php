<?php

$db = mysql_connect('localhost', 'root', '') or die ('unable to connect to server');
mysql_select_db('searchmypage') or die(mysql_error($db));

?>