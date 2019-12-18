<?php
include('connectivity.php');
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html>

<head>

<title>View Records</title>

</head>

<body>

<h1> Basketball Player Stats</h1>

<?php

$result = mysql_query("SELECT * FROM players")

or die(mysql_error());

echo "<table border='1' cellpadding='10'>";

echo "<tr> <th>ID</th> <th>First Name</th> <th>Last Name</th> <th>Stats</th> <th></th></tr>";

while($row = mysql_fetch_array( $result )) {

echo "<tr>";

echo '<td>' . $row['id'] . '</td>';

echo '<td>' . $row['firstname'] . '</td>';

echo '<td>' . $row['lastname'] . '</td>';

echo '<td>' . $row['stats'] . ' </td>';

echo '<td><a href="add.php?id=' . $row['id'] . '">Add to User table</a></td>';

echo "</tr>";

}

echo "</table>";

?>

<h1> User Table </h1>
<?php

$result = mysql_query("SELECT * FROM usertable")
	or die(mysql_error());

echo "<table border='1' cellpadding='10'>";

echo "<tr> <th>ID</th> <th>First Name</th> <th>Last Name</th> <th></th> <th></th></tr>";

while($row = mysql_fetch_array( $result )) {

echo "<tr>";

echo '<td>' . $row['id'] . '</td>';

echo '<td>' . $row['firstname'] . '</td>';

echo '<td>' . $row['lastname'] . '</td>';

echo '<td>' . $row['stats'] . '</td>';

echo '<td><a href="delete.php?id=' . $row['id'] . '">Delete</a></td>';

echo "</tr>";

}

echo "</table>";

?>
</body>

</html>
