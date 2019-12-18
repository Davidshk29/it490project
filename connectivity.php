<?php
//$servername ="localhost";
//$username="root";
//$password="password";
//$conn = NULL;
//try {
//    $conn = new PDO("mysql:host=$servername;dbname=mysql",$username, $password);
//}
//catch(PDOException $e){
//    http_error("500 Internal Server Error\n\n"."There was a SQL error:\n\n" . $e->getMessage());
//}
//function runQuery($query) {
//   global $conn;
//    try {
//        $q = $conn->prepare($query);
//        $q->execute();
//        $results = $q->fetchAll();
//      $q->closeCursor();
//        return $results;
//    } catch (PDOException $e) {
//        http_error("hello\n\n"."There was a SQL error:\n\n" . $e->getMessage());
//    }
//}
//function http_error($message) {
//	header ("Content-type: text/plain");
//	die ($message);
//}
	function dbConnect()
	{
		$hostname = "localhost";
		$user = "root";
		$pass = "password";
		$dbname = "mysql";	
	
		$conn = mysqli_connect($hostname, $user, $pass, $dbname);
		if (!$conn)
		{
			echo "Error connecting to database: ".$conn->connect_errorno.PHP_EOL;
			exit(1);
		}
		
		echo "Connection to database established".PHP_EOL;
		return $conn;
	}
?>
