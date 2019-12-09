<?php

function renderForm($fname, $lname, $error)
{
?>
<!DOCTYPE HTML>
<html>
<head>
<title>New Record</title>
</head>
<body>
<?php
if ($error != '')
{
echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';
}
?>
<form action="" method="post">
<div>
<strong>First Name: *</strong> <input type="text" name="fname" value="<?php echo $fname; ?>" /><br/>
<strong>Last Name: *</strong> <input type="text" name="lname" value="<?php echo $lname; ?>" /><br/>
<p>* required</p>
<input type="submit" name="submit" value="Submit">
</div>
</form>
</body>
</html>
<?php
}
include('connectdb.php');
if (isset($_POST['submit']))
{
$fname = mysql_real_escape_string(htmlspecialchars($_POST['fname']));
$lname = mysql_real_escape_string(htmlspecialchars($_POST['lname']));
if ($fname == '' || $lname == '')
{
$error = 'ERROR: Please fill in all required fields!';
renderForm($fname, $lname, $error);
}
else
{
mysql_query("INSERT accounts SET fname='$fname', lname='$lname'")
or die(mysql_error());
header("Location: view.php");
}
}
else
{
renderForm('','','');
}
?>