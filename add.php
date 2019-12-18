<?php

//include('connectivity.php');

if (isset($_GET['id'] && is_numeric($_GET['id']))
{
	$id=$_GET['id'];
	$result = mysql_query("INSERT INTO usertable FROM players WHERE id=$id")
		or die(mysql_error());
	header("Location: usertable.php");
}
else
{
	header("Location: usertable.php");

?>
