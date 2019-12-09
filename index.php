<?php
include('login.php');
if(isset($_SESSION['login_user'])){
    header("location: profile.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login Form in PHP with Session</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="login">
    <h2>Login Form</h2>
    <form action="" method="post">
        <label>UserName :</label>
        <input id="name" name="username" placeholder="username" type="text">
        <label>Password :</label>
        <input id="password" name="password" placeholder="**********" type="password"><br><br>
        <input name="submit" type="submit" value=" Login ">
        <span><?php echo $error; ?></span>
    </form>
</div>
</body>
</html>
<?php
include('connectivity.php');
class login{
    private $login
    public function __construct(){
        $this->login = new mysqli("ip", "admin", "password", "users");
        $this->queue_declare('sql', 'false','true','false','false');
        if($this->login->connect_errno != 0){
            
        }
    }
    public function validateLogin($username, $password){
        $user = $this->login->real_escape_string($username);
        $pass = $this->login->real_escape_string($password);
        $sql = "SELECT * FROM login WHERE username = '$user';";
        $response = $this->login->query($sql);
        while ($row = $response->fetch_assoc()){
            if($row["password"] == $pass){
                return true;
            } else return false;
        }
    }
}
?>