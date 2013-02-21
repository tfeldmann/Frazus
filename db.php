<?php

include_once("config.php");

// connect to mysql database
$mysqlConnect = mysql_connect($db_loc, $db_user, $db_pass) or die(mysql_error());
mysql_select_db($db_name) or die(mysql_error());
mysql_query('set character set utf8;') or die(mysql_error());
