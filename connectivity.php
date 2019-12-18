<?php
	function dbConnect()
	{
		$hostname = "localhost";
		$user = "david";
		$pass = "davidkim123";
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
