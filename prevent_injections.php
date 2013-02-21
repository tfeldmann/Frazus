<?php

// disable magic quotes
if (get_magic_quotes_gpc())
{
	if (!is_array($_POST))   $_POST = array_map("stripslashes",$_POST);
	if (!is_array($_GET))    $_GET = array_map("stripslashes",$_GET);
	if (!is_array($_COOKIE)) $_COOKIE = array_map("stripslashes",$_COOKIE);
}


// prevent SQL injections
foreach ($_POST as $key => $value)
{
	if (!is_array($_POST)) $_POST[$key] = mysql_real_escape_string($value);
}
foreach ($_GET as $key => $value)
{
	if (!is_array($_GET)) $_GET[$key] = mysql_real_escape_string($value);
}
