<?php
define("DB_HOST", "localhost");			// set db host
define("DB_USER", "root");				// set db user
define("DB_PASSWORD", "");				// set db password
define("DB_NAME", "test3");				// set db name

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if(!$conn)
	die("Couldn't make Connection with MYSQL Server ".mysql_error());

	//echo "CONNECTION ESTABLISHED";
?>