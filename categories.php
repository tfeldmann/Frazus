<?php

include_once("db.php");
header('Content-Type: application/json');

$categories = array();
$query = mysql_query("SELECT name FROM categories");
while ($category = mysql_fetch_array($query))
{
	$categories[] = $category['name'];
}

$response = array("options"=>$categories);
print_r(json_encode($response));
