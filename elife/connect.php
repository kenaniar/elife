
<?php

	$server = "localhost";
	$un = "root";
	$pw = "";
	$db = "db_elife";

	$cn = new mysqli($server, $un, $pw, $db);
	if ($cn -> connect_errno) {
	    echo "Failed to connect to MySQL: (" . $cn -> connect_errno . ") " . $cn -> connect_error;
	}

?>