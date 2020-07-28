<?php

$username="root";
$password="";

try {
	$db = new PDO('mysql:host=localhost;dbname=dental;charset=utf8',
	$username,
	$password
);
    $db->query("SET NAMES 'utf8'");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "A connection was made <br />";
}
catch(PDOException $e) {
	echo "An error occured. Could not connect!<br />";
    error_log($e->getMessage());
    die("A database error was encountered -> " . $e->getMessage() );
}


?>