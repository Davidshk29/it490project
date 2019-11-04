<?php
$hostname ="192.168.1.5";
$username="root";
$password="password";
$conn = NULL;
try {
    $conn = new PDO("mysql:host=$hostname;dbname=basketball_stats",$username, $password);
}
catch(PDOException $e){
	http_error("500 Internal Server Error\n\n"."There was a SQL error:\n\n" . $e->getMessage());
}
function runQuery($query) {
	global $conn;
    try {
		$q = $conn->prepare($query);
		$q->execute();
		$results = $q->fetchAll();
		$q->closeCursor();
		return $results;	
	} catch (PDOException $e) {
		http_error("hello\n\n"."There was a SQL error:\n\n" . $e->getMessage());
	}	  
}
function http_error($message) {
	header("Content-type: text/plain");
	die($message);
}
?>