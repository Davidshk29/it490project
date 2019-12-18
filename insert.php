<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<title>New Record</title>
	</head>
		<body>
			<form action="insert.php" method="post">
			<div>
				<strong>First Name: *</strong> <input type="text" name="firstname" value="" /><br/>
				<strong>Last Name: *</strong> <input type="text" name="lastname" value="" /><br/>
				<p>* required</p>
				<input type="submit" name="submit" value="Submit">
			</div>
			</form>	
		</body>
		</html>
			
<?php
$hostname ="sql1.njit.edu";
$username="shk29";
$password="ylK2XI2Z";
$conn = NULL;

$conn = new PDO("mysql:host=$hostname;dbname=", $username, $password);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO account (firstname, lastname)
VALUES ('David', 'Kim',)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
