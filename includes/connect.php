
<?php

	$username = "root";
	$password = "dreamcast2";
	$hostname = "localhost";

    mysql_connect($hostname, $username, $password) or die("Could not connect to server!");
    mysql_select_db("tasks") or die('No db found!');

?>