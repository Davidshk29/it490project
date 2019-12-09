<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html>

<head>

<title>View Records</title>

</head>

<body>
<?php
$hostname ="sql1.njit.edu";
$username="shk29";
$password="teleost97";
$conn = NULL;

$conn = new PDO("mysql:host=$hostname;dbname=Users", $username, $password);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$result = mysql_query("SELECT * FROM API")
or die(mysql_error());
echo "<p><b>View All</b> | <a href='view-paginated.php?page=1'>View Paginated</a></p>";
echo "<table border='1' cellpadding='10'>";
echo "<tr> <th>ID</th> <th>First Name</th> <th>Last Name</th> <th></th> <th></th></tr>";
while($row = mysql_fetch_array( $result )) {

echo "<tr>";
echo '<td>' . $row['id'] . '</td>';
echo '<td>' . $row['player'] . '</td>';
echo '<td>' . $row['stats'] . '</td>';
echo '<td><a href="add.php?id=' . $row['id'] . '">Add to user</a></td>';
echo "</tr>";
}
echo "</table>";
?>
<p><a href="insert.php">Add a new record</a></p>

<h1> User Players</h1>
<?php
$hostname ="sql1.njit.edu";
$username="shk29";
$password="teleost97";
$conn = NULL;

$conn = new PDO("mysql:host=$hostname;dbname=Users", $username, $password);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$result = mysql_query("SELECT * FROM account")
or die(mysql_error());
echo "<p><b>View All</b> | <a href='view-paginated.php?page=1'>View Paginated</a></p>";
echo "<table border='1' cellpadding='10'>";
echo "<tr> <th>ID</th> <th>First Name</th> <th>Last Name</th> <th></th> <th></th></tr>";
while($row = mysql_fetch_array( $result )) {

echo "<tr>";
echo '<td>' . $row['id'] . '</td>';
echo '<td>' . $row['player'] . '</td>';
echo '<td>' . $row['stats'] . '</td>';
echo '<td><a href="update.php?id=' . $row['id'] . '">Edit</a></td>';
echo '<td><a href="delete.php?id=' . $row['id'] . '">Delete</a></td>';
echo "</tr>";
}
echo "</table>";
?>
</body>
</html>